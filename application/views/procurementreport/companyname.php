<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Name</title>
		<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/procurementreport/companyname"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Procurement Report</li>
        <li class="active">Company Name</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Company Name</h3>

        </div>
           <!-- Error Alert -->
            <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Company Name Search" id="form-search" action="<?php echo site_url();?>/procurementreport/companyname" method="post">
            <div class="box-body">
				<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
						<strong>please wait while loading ....</strong>
				</div>
                 <div class="form-group">
                    <label for="companyname">Company Name</label>
                    <input type="text"  class="form-control" value="<?php echo set_value('companyname');?>" id="companyname" name="companyname" placeholder="Company Name" maxlength="60" autofocus required />
                 </div>
            </div>
	
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<input type="hidden" name="postback" value="post"/>
        </form>
	 <?php
	 
	if ($consumerList->CommercialDetails){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped display" id="companyname_table">
            <thead>
			<tr>
              <th>Reference Number</th>
              <th>Business Name</th>
              <th>Registration Number</th>
              <th>View</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				$companyname = "companyname";
				if(!is_object($consumerList->CommercialDetails)){
				foreach($consumerList->CommercialDetails as $consumerListKey => $consumerListValue){
			?>
            <tr>
              <td><?php echo $consumerListValue->Reference;?></td>
              <td><?php echo $consumerListValue->Businessname;?></td>
              <td><?php echo $consumerListValue->RegistrationNo;?></td>
              <td>
               <a type="button" onClick="fnRedirect('<?php echo site_url()?>/procurementreport/customerdatalist/<?php echo $consumerListValue->EnquiryID;?>/<?php echo $consumerListValue->EnquiryResultID;?>/<?php echo $companyname; ?>')"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>              
			  </td>
            </tr>
			<?php }
				} else {?>
				<tr>
				  <td><?php echo $consumerList->CommercialDetails->Reference;?></td>
				  <td><?php echo $consumerList->CommercialDetails->Businessname;?></td>
				  <td><?php echo $consumerList->CommercialDetails->RegistrationNo;?></td>
				  <td>
				   <a type="button" onClick="fnRedirect('<?php echo site_url()?>/procurementreport/customerdatalist/<?php echo $consumerList->CommercialDetails->EnquiryID;?>/<?php echo $consumerList->CommercialDetails->EnquiryResultID;?>/<?php echo $companyname; ?>')"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>              
				  </td>
				</tr>				
				<?php } ?>
			</tbody>
          </table>
       </div>
	<?php } ?>
    </div>
</section>
</body>


<script type="text/javascript">
$(document).ready(function(){
	$('#companyname_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#button-search').click(function() {
        //$('#spinner').show();
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		$('#form-search').submit();
    });
});

function fnRedirect(strVal){
	//$('#spinner').show();
	$("#loadMe").modal({
	  backdrop: "static", //remove ability to close modal with click
	  keyboard: false, //remove option to close with keyboard
	  show: true //Display loader!
	});
		
	location.href = strVal;
}

</script>
</html>


