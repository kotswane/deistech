<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Deis Technologies</title>
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
            <h3 class="box-title">Users</h3><br/><br/>
			<div class="box-tools pull-left">
			
				<div>
					 <a class="btn btn-primary" href ='<?php echo site_url()."/client/create";?>'>
						<li class="fa fa-step-backward">&nbsp;&nbsp;back&nbsp;&nbsp;</li>
					</a>
				</div>
			</div>
	
           <!-- Error Alert -->
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		</div>
	 </div>	
	 <div class="box-body no-padding">
      	 <h5><span><strong>User Details</strong></span></h5>
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


function fnUpdate(strVal){
	$("#form-update-"+strVal).submit();
}


</script>
</html>
