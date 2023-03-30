<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Role Resource</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Role Resource</h3>

        </div>
           <!-- Error Alert -->
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Role Resource form" action="<?php echo site_url();?>/roleresource/create" method="post" id="form-create">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Role Resource</a></li>
                  </ul><br/>
                     <div class="form-group">
                       <label class="col-form-label">Role Name</label>
						<select class="form-control" id="rolelist" name="rolelist" required>
						<option value="">Please Select Role Name</option>
						<?php 
						
						foreach($rolelist as $role){
								echo "<option value='$role->id'" . set_select('rolelist', $role->id). " >". $role->name."</option>";
						} ?>
						</select>
					</div>
                     <div class="form-group">
                       <label class="col-form-label">Resource Name</label>
						<select class="form-control" id="resourcelist" name="resourcelist" required>
						<option value="">Please Select Resource Name</option>
						<?php 
						foreach($resourcelist as $resource){
								echo "<option value='$resource->report_id'" . set_select('resourcelist', $resource->report_id). " >". $resource->report_name."</option>";
						} ?>
						</select>
					</div>
                 
            <div class="box-footer">
				<div class="form-group has-feedback">
					<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
				</div>	
                <button class="btn btn-primary" type="button" id="button-create"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Save</button>
            </div>
        </form>
    </div>
	<?php
	//print_r($rolelist);
	$menu = $this->session->userdata('usermenu');
	 if (count($roleResource) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped">
            <thead>
			<tr>
              <th>Role</th>
              <th>Resource</th>
              <th>Action</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				
				foreach($roleResource as $roleResourceKey => $roleResourceValue){
					foreach($rolelist as $rolelistKey => $rolelistVal){
						if($rolelistVal->id == $roleResourceValue->roleid){
							if($menu[$roleResourceKey]->report_name  != ""){
							$line = $roleResourceValue->id."|".$roleResourceValue->roleid."|".$roleResourceValue->resourceid;
							?>
							
							<tr>
							  <td><?php echo $rolelistVal->name;?></td>
							  <td><?php echo $menu[$roleResourceKey]->report_name;?></td>
							  <td><button class="btn btn-danger" type="button" id="button-create" onClick="fnRemove('<?php echo $line;?>');"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;Remove</button></td>
							</tr>
							<?php }
						}
					}
				}?>
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
		$('#button-create').click(function() {
        $('#spinner').show();
		$('#form-create').submit();
    });
});

function fnRemove(strline){
	
	$.post("<?php echo site_url();?>/roleresource/remove",
	  {
		str: strline
	  },
	  function(data, status){
		  if( data == 1){
			 alert("Record successfully deleted");
			 location.href="<?php echo site_url();?>/roleresource/create";
		  }else{
			  alert(data);
		  }

	  });
}

</script>
</html>
