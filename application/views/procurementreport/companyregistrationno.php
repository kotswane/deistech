<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Registration Number</title>
		<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/procurementreport/companyregistrationno"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Procurement Report</li>
        <li class="active">Company Registration Number</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Company Registration Number</h3>

        </div>
           <!-- Error Alert -->
            <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Company Name Search" id="form-search" action="<?php echo site_url();?>/procurementreport/companyregistrationno" method="post">
            <div class="box-body">
				<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
						<strong>please wait while loading ....</strong>
				</div>
                 <div class="form-group">
                    <label for="companyregistrationno">Registration Number</label>
                    <input type="text"  class="form-control" value="<?php echo set_value('companyregistrationno');?>" id="companyregistrationno" name="companyregistrationno" placeholder="Company Registration Number" maxlength="60" autofocus required />
                 </div>
            </div>

            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<input type="hidden" name="postback" value="post"/>
        </form>
	 <?php
		$companyregistrationno = "companyregistrationno";
	 if ($consumerList->CommercialDetails){
		 $consumerList = $consumerList->CommercialDetails;
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="companyname_table">
            <thead>
			<tr>
              <th>Reference Number</th>
              <th>Business Name</th>
              <th>Registration Number</th>
              <th>View</th>
            </tr>
			</thead>
			<tbody>
            <tr>
              <td><?php echo $consumerList->Reference;?></td>
              <td><?php echo $consumerList->Businessname;?></td>
              <td><?php echo $consumerList->RegistrationNo;?></td>
              <td>
               <a type="button" onClick="fnRedirect('<?php echo site_url()?>/procurementreport/customerdatalist/<?php echo $consumerList->EnquiryID;?>/<?php echo $consumerList->EnquiryResultID;?>/<?php echo $companyregistrationno;?>')"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>              
			  </td>
            </tr>
			</tbody>
          </table>
       </div>
	<?php } ?>
    </div>
</section>
</body>

<script type="text/javascript">
$(document).ready(function(){
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

$(document).ready(function(){
    $('#companyname_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
});
</script>
</html>


