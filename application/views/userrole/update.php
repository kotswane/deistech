<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Users Role</title>
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
            <h3 class="box-title">Users Role</h3>

        </div>
           <!-- Error Alert -->
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/userrole/doupdate" method="post" id="form-search">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Update User Role</a></li>
                  </ul><br/>
                <div class="form-group">
					<label class="col-form-label">Name: </label>
                    <label class="col-form-label"><?php echo $userlist[0]->name." ".$userlist[0]->surname;?></label>
                 </div>
				 
                <div class="form-group">
					<label class="col-form-label">Email: </label>
                    <label class="col-form-label"><?php echo $userlist[0]->username;?></label>
                 </div>
				 
                 <div class="form-group">
                    <label class="col-form-label">Role Name</label>
                    <select class="form-control" id="roleid" name="roleid" required >
					<option value="">Please Select Role Name</option>
					<?php 
					
					foreach($rolelist as $role){
							echo "<option value='$role->id'" . set_select('roleid', $role->id). " >".$role->name."</option>";
					} ?>
					</select>
                 </div>
				  <input type="hidden" name="userid" value="<?php echo $userlist[0]->id;?>"/>
				  <div class="form-group has-feedback">
					<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                  </div>
				  
				<div class="box-footer">
					<button class="btn btn-primary" type="submit" id="button-search"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Save</button>
				</div>
			</div>
        </form>
    </div>
	
</section>
</body>

</html>
