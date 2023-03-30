<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Role Resource Access</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Role Resource Access</h3>

        </div>
           <!-- Error Alert -->
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Role Resource Access form" action="<?php echo site_url();?>/roleresourceaccess/create" method="post" id="form-create">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Role Resource Access</a></li>
                  </ul><br/>
                     <div class="form-group">
                       <label class="col-form-label">Role Name</label>
						<select class="form-control" id="rolelist" name="rolelist" required>
						<option value="">Please Select Role Name</option>
						<?php 
							foreach($rolelist as $role){
									echo "<option value='$role->id'" . set_select('rolelist', $role->id). " >". $role->name."</option>";
							} 
						?>
						</select>
					</div>
                     <div class="form-group">
                       <label class="col-form-label">Resource Name</label>
						<select class="form-control" id="resourcelist" name="resourcelist" required onChange='loadResourceAccess();'>
						<option value="">Please Select Resource Name</option>
						<?php 
						foreach($resourcelist as $resource){
								echo "<option value='$resource->report_id'" . set_select('resourcelist', $resource->report_id). " >". $resource->report_name."</option>";
						} ?>
						</select>
					</div>
					
                     <div class="form-group" id="resourcelistaccessgroup" style="display:none;">
                       <label class="col-form-label">Resource Access</label>
					   <div id="resourcelistaccessdiv">

					   </div>
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
	 if (count($roleResource) > 0){

	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="addresssearch_table">
            <thead>
			<tr>
              <th>Role</th>
              <th>Resource</th>
			  <th>Access</th>
			  <th>Action</th>
            </tr>
			</thead>
			<tbody>
			<?php foreach($roleResource as $roleResourceKey => $roleResourceVal){ 
			foreach($rolelist as $rolelistKey => $rolelistVal){
				if($rolelistVal->id == $roleResourceVal->roleid){
					foreach($reports as $reportsKey => $reportsVal){
						if($reportsVal->report_id == $roleResourceVal->reportid){
							foreach($reports_type as $reports_typeKey => $reports_typeVal){
								if($reports_typeVal->report_type_id == $roleResourceVal->reporttypeid){
									
			?>		
			
					<tr>
					  <td><?php echo $rolelistVal->name;?></td>
					  <td><?php echo $reportsVal->report_name;?></td>
					  <td><?php echo $reports_typeVal->report_type_description;?></td>
					  <td><button class="btn btn-danger" type="button" id="button-create" onClick="fnRemove(<?php echo $roleResourceVal->id;?>);"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;Remove</button></td>
					</tr>
					<?php }
							}
						}
					}
				}
				}
			}
				?>
			</tbody>
          </table>
       </div>
	<?php } ?>
	
</section>


<script type="text/javascript">

$(document).ready(function(){
	
	$('#addresssearch_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });

	$('#button-create').click(function() {
        $('#spinner').show();
		$('#form-create').submit();
    });
});

function loadResourceAccess(){
	
	var val = $('#resourcelist').val();
	if(val.length > 0){
		$.post("<?php echo site_url();?>/roleresourceaccess/getbyreportid",
		  {
			id: val
		  },
		  function(data, status){
			  if( status == 'success'){
				  $("#resourcelistaccessdiv").html(data);
				  $("#resourcelistaccessgroup").show();
			  }

		  });
	}else{
		$("#resourcelistaccessdiv").html('');
		$("#resourcelistaccessgroup").hide();
	}
}

function fnRemove(strVal){
	if (confirm("Are you sure you want to delete this record ?") == true) {
		 
		 $.post("<?php echo site_url();?>/roleresourceaccess/remove",
		  {
			id: strVal
		  },
		  function(data, status){
			  alert(data);
			  location.href = "<?php echo site_url();?>/roleresourceaccess/create";
		  });
		  
	}else{
		alert("No");
	}		
}
</script>
</html>
