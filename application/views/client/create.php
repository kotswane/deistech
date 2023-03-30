<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Deis Technologies</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>

</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Clients</h3>
        </div>
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Roles form" action="<?php echo site_url();?>/client/create" method="post" id="form-create">
            <div class="box-body">
                    <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Clients</a></li>
					</ul>
                  <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
					
                        <br>
                        <div class="form-group">
							<label class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="clientname" id="clientname" value="<?php echo set_value('clientname');?>" placeholder="Client Name" maxlength="30" required />
                        </div>
                        <div class="form-group">
							<label class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="clientemail" id="clientemail" value="<?php echo set_value('clientemail');?>" placeholder="Client Email" maxlength="50" required />
                        </div>
                        <div class="form-group">
							<label class="col-form-label">Address</label>
                            <input type="text" class="form-control" name="clientaddress" id="clientaddress" value="<?php echo set_value('clientaddress');?>" placeholder="Client Address" maxlength="200" required />
                        </div>
                        <div class="form-group">
							<label class="col-form-label">Contact</label>
                            <input type="text" class="form-control" name="clientcontact" id="clientcontact" value="<?php echo set_value('clientcontact');?>" placeholder="Client Contact" maxlength="30" required />
                        </div>
                    </div>
					<div class="form-group has-feedback">
						<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
					</div>
				</div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-create"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; Save</button>
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
	 if (count($clientList) > 0){
	?>
    <div class="tab-content">
		 <ul class="nav nav-tabs">
		<li><a data-toggle="tab" href="#tab1">Clients List</a></li>
		</ul>
		<div class="tab-content">
		<div id="tab1" class="tab-panel active">		
          <table class="table table-striped" id="telephone_search_table">
		   <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Contact</th>
			  <th>Report</th>
			  <th>Status</th>
			  <th>Action</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				foreach($clientList as $clientListKey => $clientListValue){
					if($clientListValue->isactive == 1){
						$button = "<button class='btn btn-primary' type='button' >Active</button>";
					}else{
						$button = "<button class='btn btn-danger' type='button' >Inactive</button>";
					}
			?>
			
            <tr>
              <td><?php echo $clientListValue->client_Name;?></td>
              <td><?php echo $clientListValue->client_Email;?></td>
              <td><?php echo substr($clientListValue->client_Address,0,30)." .....";?></td>
              <td><?php echo $clientListValue->client_Contact;?></td>
			<td>
		
				<table>
					<tr class="pull-left">
						<td class="pull-left">
						  <form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/client/gettotalbyclient" method="post" >
							<input type="hidden" name="cid" id="cid" value="<?php echo $clientListValue->client_Id;?>"/>
							<button class="btn btn-primary" type="submit"><i class="fa fa-envelop" aria-hidden="true"></i>&nbsp; View Report</button>
						 </form>
						</td>
					</tr>
				</table>
			  </td>
              <td style="vertical-align: middle !important;"><?php echo $button;?></td>
              <td>
			    <form>
					<table>
						<tr class="pull-left">
							<td class="pull-left"><button class="btn btn-primary" type="button" onClick="fnViewUsers('<?php echo $clientListValue->client_Id;?>');"><i class="fa fa-user-o"></i> Users</button></td>
							<td class="pull-left"><button class="btn btn-primary" type="button" onClick="fnUpdate('<?php echo $clientListValue->client_Id;?>');"><i class="fa fa-upload"></i> Update</button></td>
						</tr>
					</table>
				</form>
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
		<div class="form-group">
			<label class="col-form-label">Name</label>
			<input type="text" class="form-control" name="clientname" id="clientnamemodal" placeholder="Client Name" maxlength="30" />
		</div>
		<div class="form-group">
			<label class="col-form-label">Email</label>
			<input type="email" class="form-control" name="clientemail" id="clientemailmodal" placeholder="Client Email" maxlength="50" />
		</div>
		<div class="form-group">
			<label class="col-form-label">Address</label>
			<input type="text" class="form-control" name="clientaddress" id="clientaddressmodal" placeholder="Client Address" maxlength="200" />
		</div>
		<div class="form-group">
			<label class="col-form-label">Contact</label>
			<input type="text" class="form-control" name="clientcontact" id="clientcontactmodal" placeholder="Client Contact" maxlength="30" />
		</div>
	

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

<script type="text/javascript">
var valStr;
$(document).ready(function(){
	$('#telephone_search_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#button-create').click(function() {
		$('#form-create').submit();
    });
	
	$("#closeModal").click(function(){
		location.reload();
	});	
	
	$("#btn-do-update").click(function(){
		
		 if($("#clientnamemodal").val() == ""){
			 $("#statusUpdate").html("<div class='alert alert-danger'>Client name required</div>");
			 return;
		 }else if($("#clientemailmodal").val() == ""){
			 $("#statusUpdate").html("<div class='alert alert-danger'>Client email required</div>");
			 return;
		 }else if($("#clientaddressmodal").val() == ""){
			 $("#statusUpdate").html("<div class='alert alert-danger'>Client address required</div>");
			 return;
		 }else if($("#clientcontactmodal").val() == ""){
			 $("#statusUpdate").html("<div class='alert alert-danger'>Client contact required</div>");
			 return;
		 }
		 
		 
		 $.post("<?php echo site_url();?>/client/update",
		  {
			id: valStr,
			clientname: $("#clientnamemodal").val(),
			clientemail: $("#clientemailmodal").val(),
			clientaddress: $("#clientaddressmodal").val(),
			clientcontact: $("#clientcontactmodal").val(),
			isactive: $("#isactive").val(),
		  },
		  function(data, status){
				
			  if( status == 'success'){
				 if(data == 'error'){
					  $("#statusUpdate").addClass("alert alert-danger alert-dismissible");
					   $("#statusUpdate").removeClass("alert alert-success alert-dismissible");
					 $("#statusUpdate").html("Error updating client");
				 }else{
					 $("#statusUpdate").removeClass("alert alert-danger alert-dismissible");
					  $("#statusUpdate").addClass("alert alert-success alert-dismissible");
					 $("#statusUpdate").html("Client successfully updated");
				 }
			  }else{
				  $("#statusUpdate").html(status);
			  }

		  });
	});
	
	
	
});

function fnUpdate(strVal){
	$("#modal-title").html("Client Details");
	
	
	valStr = strVal;
	$.post("<?php echo site_url();?>/client/getbyid",
	  {
		id: strVal
		
	  },
	  function(data, status){
		  if( status == 'success'){
			  if(data == 'error'){
				  $("#modal-body").html("Client not found");
			  }else{
				  data = JSON.parse(data);
				 
				  $("#clientnamemodal").val(data[0].client_Name);
				  $("#clientemailmodal").val(data[0].client_Email);
				  $("#clientaddressmodal").val(data[0].client_Address);
				  $("#clientcontactmodal").val(data[0].client_Contact);
				  $("#isactive").val(data[0].isactive);
				  
				  var myassoc = {Active:1,Inactive:0};
				  var div = '<div class="form-group">\
							<label class="col-form-label">Status</label>\
							<select class="form-control" id="isactive" name="isactive" required>'
				
							$.each(myassoc, function(index, value){
							   if(data[0].isactive == value){
								   div += '<option value='+value+' selected="selected">'+index+'</option>';
							   }else{
								   div += '<option value='+value+'>'+index+'</option>';
							   }
							  
							});
					div += "</div>";
					 $("#modal-body").append(div);

				  
				  $("#myModal").modal();
			  }
		  }

	  });

}

function fnViewUsers(strClient){
	location.href = "<?php echo site_url();?>/client/viewusers/"+strClient;
}

function fnViewReport(strClient){
	location.href = "<?php echo site_url();?>/client/gettotalbyclient/"+strClient;
}

</script>
</html>
