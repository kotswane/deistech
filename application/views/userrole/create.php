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
		
        <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/userrole/create" method="post" id="form-search">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Create User Role</a></li>
                  </ul><br/>
                     <div class="form-group">
                       <label class="col-form-label">User</label>
                    <select class="form-control" id="userid" name="userid" required>
					<option value="">Please Select User</option>
					<?php 
					foreach($userlist as $user){
							echo "<option value='$user->id'" . set_select('userid', $user->id). " >".$user->name." (".$user->username.") ".$user->surname."</option>";
					} ?>
					</select>
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
	
				  <div class="form-group has-feedback">
					<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                  </div>
				  
				<div class="box-footer">
					<button class="btn btn-primary" type="submit" id="button-search"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Save</button>
				</div>
			</div>
        </form>
    </div>
	<?php
	 if (count($userRoleList) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="addresssearch_table">
            <thead>
			<tr>
              <th>Role</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				foreach($userRoleList as $userRoleListKey => $userRoleListValue){
			?>
            <tr>
              <td><?php echo $userRoleListValue->rolename;?></td>
              <td><?php echo $userRoleListValue->name;?></td>
              <td><?php echo $userRoleListValue->surname;?></td>
              <td><?php echo $userRoleListValue->username;?></td>
			  <td>
				  <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/userrole/update" method="post" id="form-update-<?php echo $id;?>">
					<input type="hidden" name="userid" id="userid" value="<?php echo $userRoleListValue->userid;?>"/>
					<input type="hidden" name="roleid" id="roleid" value="<?php echo $userRoleListValue->roleid;?>"/>
					<button class="btn btn-primary" type="submit" ><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Update</button>
				  </form>
			  </td>
            </tr>
			<?php }?>
			</tbody>
          </table>
       </div>
	<?php } ?>
	
</section>
</body>
<style>
.spinner {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left: -50px; /* half width of the spinner gif */
    margin-top: -50px; /* half height of the spinner gif */
    text-align:center;
    z-index:1234;
    overflow: auto;
    width: 200px; /* width of the spinner gif */
    height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
}

</style>

<script type="text/javascript">
$(document).ready(function(){
		$('#addresssearch_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });

});


function fnRedirect(strVal){
	$('#spinner').show();
	location.href = strVal;
}


</script>
</html>
