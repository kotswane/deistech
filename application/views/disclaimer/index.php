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
    <link rel="icon" href="<?php echo base_url();?>dist/img/lk-Logo.png">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

		<section class="content">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Disclaimer</h3>
				</div>	
				<?php if($errorMessage){ ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<p><?php echo $errorMessage;?></p>
				</div>
				<?php } ?>				
					<div class="box-body no-padding">
					<p style="color:red;">
					TAKE NOTE that the information you are requesting here includes (i) "consumer credit
information" in terms of the National Credit Act, 2005 ("NCA"), and (ii) "personal
information" in terms of the Protection of Personal Information Act, 2013 ("POPIA").
YOU ARE ONLY AUTHORISED TO PROCEED WITH THIS REQUEST IF THE INFORMATION
REQUESTED IS FOR A "PRESCRIBED PURPOSE" UNDER THE NCA, OR YOUR REQUEST HAS
BEEN CONSENTED TO BY THE DATA SUBJECT CONCERNED OR IS OTHERWISE LAWFUL IN
TERMS OF POPIA. IF YOU FAIL TO COMPLY WITH THESE REQUIREMENTS UNDER THE
NCA AND/OR POPIA, YOU ARE POTENTIALLY BREAKING THE LAW AND RENDERING
YOURSELF LIABLE FOR PROSECUTION.</p>
					</div>
					
			
				<form data-toggle="validator" role="ID Search" action="<?php echo site_url();?>/disclaimer/accept" method="post" id="form-search">
					<div class="col-lg-6">
						<table class="table">
							<tr>
								<td><strong><span>I AGREE TO INDEMNIFY AND HOLD LK CENTRIX SOLUTIONS (PTY) LTD HARMLESS IN THE EVENT THE TRACE SEARCH IS, FOR WHATEVER REASON, FOUND TO BE UNLAWFUL.</strong></span><span style="color:red;">*</span></td>
								<td><input type="checkbox" id="agreement" name="agreement"/></td>
							</tr>
							<tr>
								<td>NCA Prescribed Purpose<span style="color:red;">*</span></td>
								<td><input type="checkbox" id="nca_prescribed" name="nca_prescribed"/></td>
							</tr>
							<tr>
								<td>Processing of Personal Information<span style="color:red;">*</span></td>
								<td><input type="checkbox" id="presonal_information" name="presonal_information"/></td>
							</tr>
							
							<tr>
								<td colspan="2">
								 <div class="form-group has-feedback">
								 <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div> 
								 </div>
								</td>
							</tr>					
							<tr>
								<td colspan="2">
									<button class="btn btn-primary" type="button" id="button-submt"><i class="fa fa-save" aria-hidden="true"></i>&nbsp; Continue</button>
								</td>
							</tr>
						</table>
					</div>
			</form>
			</div>
		
		</section>		        
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 Deis Tech Technologies.</strong>
    </footer>
</div>
	<div class="modal fade" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
	  <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		  <div class="modal-body text-center">
			<div class="loader"></div>
			<div clas="loader-txt">
			  <p>Please wait while loading</small></p>
			</div>
		  </div>
		</div>
	  </div>
	</div>

</body>
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
<script>
$(document).ready(function(){
    $('#button-submt').click(function() {
		
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		
		$('#form-search').submit();
    });
});
</script>
</html>
