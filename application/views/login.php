<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Deis Technologies</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport"/>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/LkCentrix.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>dist/css/skin-blue.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/square/blue.css">
    <link rel="icon" href="<?php echo base_url();?>dist/img/icons.png">
	<script src='https://www.google.com/recaptcha/api.js'></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	    <style>
        .alert .alert-info .login-page{
                color: #172d44 !important;
                    border-color: #efefef;
        }
        .login-page body{
                background-color:#f9f9f9 !important;
                	overflow:hidden;
        }
        </style>
</head>
<body class="login-page">
	<div class="login-box" style="">    
		<!-- /.login-logo -->
		<div class="login-box-body">
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6"> <!-- Error Alert -->
				<div class="login-logo">
					<div><img src="<?php echo base_url();?>dist/img/logo.png" style="width:350px;"></div>
				</div>
			<?php if($errorSession != ""){?>
			 <div class="alert alert-danger"  role="alert">
				<?php echo $errorSession; ?>
			 </div> <!-- th:if="${errorSession}" th:text="${errorSession}" -->
			<?php }?>
			
			<?php if($logoutSession != ""){?>
			 <div class="alert alert-success"  role="alert">
				<?php echo $logoutSession; ?>
			 </div> <!-- th:if="${errorSession}" th:text="${errorSession}" -->
			<?php }?>
			
			<form method="post" action="<?php echo site_url();?>/user/login" id="form-search"> <!--th:action="@{/traceenquiry}" th:object="${signRequest}" --> 
				
				<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
					<strong>please wait while loading ....</strong>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/> <!-- th:field="*{username}" --> 
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/> <!-- th:field="*{password}" --> 
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<center>
				<div class="form-group has-feedback">
					<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
				</div>
				</center>
				<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-flat" id="button-search">Login</button>
				</div>
				</form>
			</div>   
					<div class="col-md-3">
			</div>
			</div>
			</div>
		</div>
	   
	</div>


<!-- jQuery 3 -->
<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('#button-search').click(function() {
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		$('#form-search').submit();
    });
});

$(function () {
$('input').iCheck({
  checkboxClass: 'icheckbox_square-blue',
  radioClass: 'iradio_square-blue',
  increaseArea: '20%' // optional
});
});
</script>
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
</html>
