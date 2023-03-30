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
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/user/create" method="post" id="form-search">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Create/Update User</a></li>
                  </ul><br/>
				  
				 	<?php if($this->session->userdata("isadmin")){?>
						 <div class="form-group">
						   <label class="col-form-label">Client Name</label>
							<select class="form-control" id="clientid" name="clientid" required>
								<option value="">Select Client</option>
								<?php 
								foreach($clientlist as $client){
										echo "<option value='$client->client_Id'" . set_select('clientid', $client->client_Id). " >".$client->client_Name."</option>";
								} ?>
							</select>
						</div>
					<?php } ?>
				 

				 
                 <div class="form-group">
                 <label class="col-form-label">First Name</label>
                    <input type="text"  class="form-control" id="firstname" name="firstname" value="<?php echo set_value('firstname');?>" placeholder="firstname" required />
                 </div>
                <div class="form-group">
                <label class="col-form-label">Surname</label>
                    <input type="text"  class="form-control" id="surname" name="surname" value="<?php echo set_value('surname');?>" placeholder="Surname" required />
                 </div>
                 <div class="form-group">
                 <label class="col-form-label">Contact Number</label>
                    <input type="text"  class="form-control" id="contact" name="contact" value="<?php echo set_value('contact');?>" placeholder="Contact Number" required />
                 </div>
				  <?php if($this->session->userdata("isadmin")){?>
					  <div class="form-group">
					  <label class="col-form-label">Email</label>
					   <input type="email"  class="form-control" id="email" name="email" value="<?php echo set_value('email');?>" placeholder="Email" required/>
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
						<option value="">Select Status</option>
						<?php 
							$arrStatus = array("Active" => 1, "Inactive" => 0);													
							foreach($arrStatus as $statusKey => $statusVal){
								echo "<option value='$statusVal'" . set_select('isactive', $statusVal). " >".$statusKey."</option>";
							} 
						?>
						</select>
					</div>
				<?php } ?>
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
	 if (count($consumerList) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="addresssearch_table">
            <thead>
			<tr>
              <th>First Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Contact Number</th>
              <th>Client</th>
              <th>Role</th>
			  <th>Status</th>
			  <th>Dectivate</th>
 
            </tr>
			</thead>
			<tbody>
			<?php 
				$count = 1;
				foreach($consumerList as $consumerListKey => $consumerListValue){
				$id=$consumerListValue->id."_".$count;
			?>
			
            <tr>
              <td><?php echo $consumerListValue->name;?></td>
              <td><?php echo $consumerListValue->surname;?></td>
              <td><?php echo $consumerListValue->username;?></td>
              <td><?php echo $consumerListValue->contact;?></td>
              <td><?php echo $consumerListValue->client_name;?></td>
			  <td><?php echo $consumerListValue->rolename;?></td>
			  <td><?php echo (($consumerListValue->isactive == 1)?"Active":"Inactive");?></td>
			  <td>
			  <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/user/update" method="post" id="form-update-<?php echo $id;?>">
				<input type="hidden" name="form_data" id="form_data" value="<?php echo $id;?>"/>
				<button class="btn btn-primary" type="button" onClick="fnUpdate('<?php echo $id;?>');"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Update</button>
			  </form>
			  </td>
			  
            </tr>
				<?php 
					$count++;
				} ?>
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


function fnUpdate(strVal){
	$("#form-update-"+strVal).submit();
}


</script>
</html>
