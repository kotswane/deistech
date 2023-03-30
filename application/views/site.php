<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Deis Technologies</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/LkCentrix.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skins/skin-blue.min.css">
    <link rel="icon" href="<?php echo base_url();?>dist/img/icon.png">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
	
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery 3 -->
	<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>dist/js/lkcentrix.min.js"></script>
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!--<div layout:fragment="style" th:remove="tag"></div>-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
     <div><?php $this->load->view("fragments/header");?></div>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <div><?php $this->load->view("fragments/mainsidebar");?></div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php $this->load->view($content);?>

        <!-- Main content -->
        
			<?php if($successFlash != ""){?>
			<section class="content">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $successFlash;?></p>
            </div>
			</section>
			<?php } ?>
			
			<?php if($errorFlash != ""){?>
			<section class="content">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $errorFlash;?></p>
            </div>
			</section>
			<?php } ?>
			
			<?php if($infoFlash){?>
			<section class="content">
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $infoFlash;?></p>
            </div>
			</section>
			<?php } ?>
		        
        <!-- /.content -->
    </div>
	
	<div class="modal fade" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-body text-center">
			<div class="loader"></div>
			<div class="loader-txt">
			  <p>Please wait while loading</small></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="modal fade" id="loaddata" tabindex="-1" role="dialog" aria-labelledby="loadDataLabel">
	  <div class="modal-dialog modal-md role="document">
		<div class="modal-content">
		  <div class="modal-body" id="loadSpouse">
			
			
		  </div>
		</div>
	  </div>
	</div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 Deis Technologies.</strong>
    </footer>
</div>
<style>
	.loader-txt {
	  p {
		font-size: 13px;
		color: #666;
		small {
		  font-size: 11.5px;
		  color: #999;
		}
	  }
	}

	/** MODAL STYLING **/

	.modal-content {
	  border-radius: 0px;
	  box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.7);
	}

	.modal-backdrop.show {
	  opacity: 0.75;
	}

	.loader {
	  position: relative;
	  text-align: center;
	  margin: 15px auto 35px auto;
	  z-index: 9999;
	  display: block;
	  width: 80px;
	  height: 80px;
	  border: 10px solid rgba(0, 0, 0, .3);
	  border-radius: 50%;
	  border-top-color: #000;
	  animation: spin 1s ease-in-out infinite;
	  -webkit-animation: spin 1s ease-in-out infinite;
	}
	
	/** SPINNER CREATION **/

.loader {
  position: relative;
  text-align: center;
  margin: 15px auto 35px auto;
  z-index: 9999;
  display: block;
  width: 80px;
  height: 80px;
  border: 10px solid rgba(0, 0, 0, .3);
  border-radius: 50%;
  border-top-color: #000;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

</style>
</body>
</html>
