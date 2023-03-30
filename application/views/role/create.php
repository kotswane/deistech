<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Roles</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
        <li class="active">Roles</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Roles</h3>
        </div>
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Roles form" action="<?php echo site_url();?>/role/create" method="post" id="form-create">
            <div class="box-body">
                    <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Roles</a></li>
					</ul>
                  <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
					
                        <br>
                        <div class="form-group">
							<label class="col-form-label">Role Name</label>
                            <input type="text" class="form-control" name="rolename"  id="rolename" name="rolename"  value="<?php echo set_value('rolename');?>" placeholder="User" maxlength="30" />
                        </div>
                    </div>
					<div class="form-group has-feedback">
						<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
					</div>
				</div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-create"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Save</button>
            </div>
			<?php
				$csrf = array(
						'name' => $this->security->get_csrf_token_name(),
						'hash' => $this->security->get_csrf_hash()
				);
			?>
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        </form>
    </div>
	<?php
	 if (count($roleList) > 0){
	?>
    <div class="tab-content">
		 <ul class="nav nav-tabs">
		<li><a data-toggle="tab" href="#tab1">Role List</a></li>
		</ul>
		<div class="tab-content">
		<div id="tab1" class="tab-panel active">		
          <table class="table table-striped" id="telephone_search_table">
		   <thead>
            <tr>
              <th>Name</th>
			  <th>Action</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				foreach($roleList as $roleListKey => $roleListValue){
			?>
			
            <tr>
              <td><?php echo $roleListValue->name;?></td>
              <td>
				 <button class="btn btn-primary" type="button" onClick="fnUpdate('<?php echo $roleListValue->id;?>');"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Update</button>
			  </td>
            </tr>
			<?php }?>
			</tbody>
          </table>
		 </div>  
		</div>  
   </div>
	<?php } ?>
</section>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title" id="modal-title"></h4>
      </div>
	  <div class="modal-body">
	  <p class="danger" id="statusUpdate"></p>
	   </div>
      <div class="modal-body" id="modal-body">
		
        
      </div>
      <div class="modal-footer">
		<div class="row">
			<div class="col-lg-6">
			<button type="button" class="btn btn-block btn-primary" id="btn-do-update">Update</button>
			</div>
			<div class="col-lg-6">
			<button type="button" class="btn btn-block btn-default" id="closeModal">Close</button>
			</div>
		</div>
      </div>
    </div>

  </div>
</div>

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
var valStr;
$(document).ready(function(){
	$('#telephone_search_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#button-create').click(function() {
        $('#spinner').show();
		$('#form-create').submit();
    });
	
	$("#closeModal").click(function(){
		location.reload();
	});	
	
	$("#btn-do-update").click(function(){
		
		 
		 $.post("<?php echo site_url();?>/role/update",
		  {
			id: valStr,
			str: $("#role_name").val()
		  },
		  function(data, status){
				
			  if( status == 'success'){
				 if(data == 'error'){
					  $("#statusUpdate").addClass("alert alert-danger alert-dismissible");
					   $("#statusUpdate").removeClass("alert alert-success alert-dismissible");
					 $("#statusUpdate").html("Role name already exists");
				 }else{
					 $("#statusUpdate").removeClass("alert alert-danger alert-dismissible");
					  $("#statusUpdate").addClass("alert alert-success alert-dismissible");
					 $("#statusUpdate").html("Role name successfully updated");
				 }
			  }else{
				  $("#statusUpdate").html(status);
			  }

		  });
	});
	
	
	
});

function fnUpdate(strVal){
	$("#modal-title").html("Update Role");
	$("#myModal").modal();
	
	valStr = strVal;
	$.post("<?php echo site_url();?>/role/getbyid",
	  {
		id: strVal
	  },
	  function(data, status){
		  if( status == 'success'){
			  if(data == 'error'){
				  $("#modal-body").html("Role not found");
			  }else{
				  $("#modal-body").html(data);
			  }
		  }

	  });

}


</script>
</html>
