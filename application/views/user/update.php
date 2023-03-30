<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Users</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>

        </div>
           <!-- Error Alert -->
		   <?php echo validation_errors(); ?>
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/user/doupdate" method="post" id="form-search">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Update User</a></li>
                  </ul><br/>

					<?php if($this->session->userdata("isadmin")){?>
						 <div class="form-group">
						   <label class="col-form-label">Client Name</label>
							<select class="form-control" id="clientid" name="clientid" required>
							<?php 
							foreach($clientlist as $client){
									if($client->client_Id == $mydetails->clientid){
										echo "<option value='$client->client_Id' selected='selected' >".$client->client_Name."</option>";
									}else{
										echo "<option value='$client->client_Id'" . set_select('clientid', $client->client_Id). " >".$client->client_Name."</option>";
									}
							} ?>
							</select>
						</div>
					<?php } ?>
				 
                 <div class="form-group">
                 <label class="col-form-label">First Name</label>
                    <input type="text"  class="form-control" id="firstname" name="firstname" value="<?php echo $mydetails->name;?>" placeholder="firstname" required <?php echo((!$this->session->userdata("isadmin"))?"readonly":"");?> />
                 </div>
                <div class="form-group">
                <label class="col-form-label">Surname</label>
                    <input type="text"  class="form-control" id="surname" name="surname" value="<?php echo $mydetails->surname;?>" placeholder="Surname" required <?php echo((!$this->session->userdata("isadmin"))?"readonly":"");?>/>
                 </div>
                 <div class="form-group">
                 <label class="col-form-label">Contact Number</label>
                    <input type="text"  class="form-control" id="contact" name="contact" value="<?php echo $mydetails->contact;?>" placeholder="Contact Number" required <?php echo((!$this->session->userdata("isadmin"))?"readonly":"");?>/>
                 </div>
				 <?php if($this->session->userdata("isadmin")){?>
					 <div class="form-group">
					  <label class="col-form-label">Email</label>
					   <input type="email"  class="form-control" id="email" name="email" value="<?php echo $mydetails->username;?>" placeholder="Email" required <?php echo((!$this->session->userdata("isadmin"))?"readonly":"");?>/>
					 </div>
				 <?php } ?>
                 <div class="form-group">
                  <label class="col-form-label">Password</label>
                    <input type="password"  class="form-control" id="password" name="password" value="<?php echo set_value('password');?>" placeholder="Password" required />
                 </div>
				<?php if($this->session->userdata("isadmin")){?>
					 <div class="form-group">
					   <label class="col-form-label">Status</label>
						<select class="form-control" id="isactive" name="isactive" required>
						<?php 
						$arrStatus = array("Active" => 1, "Inactive" => 0);
						
						foreach($arrStatus as $statusKey => $statusVal){
								if($statusVal == $mydetails->isactive){
									echo "<option value='$statusVal' selected='selected'>".$statusKey."</option>";
								}else{
									echo "<option value='$statusVal'>".$statusKey."</option>";
								}
						} ?>
						</select>
					</div>
				<?php } ?>
                 <div class="form-group">
				  <div class="form-group has-feedback">
					<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key');?>"></div>
                  </div>
				  <input type="hidden" name="form_data" value="<?php echo $form_data;?>"/>
				<div class="box-footer">
					<button class="btn btn-primary" type="submit" id="button-search"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Save</button>
				</div>
			</div>
        </form>
    </div>
	
</section>
</body>

<script type="text/javascript">
$(document).ready(function(){
		$('#addresssearch_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });

});

</script>
</html>
