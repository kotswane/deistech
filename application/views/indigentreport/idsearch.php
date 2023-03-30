<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Name Search</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">ID Search</h3>
        </div>
           <!-- Error Alert -->
            <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="ID Search" action="<?php echo site_url();?>/indigentreport/idsearch" method="post" id="form-search">
            <div class="box-body">
				<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
					<strong>please wait while loading ....</strong>
				</div>
                 <div class="form-group">
                    <label for="idno">ID Search</label>
                    <input type="number"  class="form-control" value="<?php echo set_value('idno');?>" id="idno" name="idno" placeholder="ID Number" maxlength="13" autofocus required />
                 </div>

            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<input type="hidden" name="postback" value="post"/>
        </form>
    </div>
	<?php
	 if ($consumerList){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="ConsumerDetails">
		   <thead>
            <tr>
            <th>Reference No</th>
              <th>Names</th>
              <th>Id Number</th>
              <th>Gender</th>
              <th>View</th>
            </tr>
			</thead>
			<tbody>
			<?php if(is_object($consumerList->ConsumerDetails)){ ?>
            <tr>
              <td><?php echo $consumerList->ConsumerDetails->Reference;?></td>
              <td><?php echo (is_object($consumerList->ConsumerDetails->FirstName)?"":$consumerList->ConsumerDetails->FirstName)." ".(is_object($consumerList->ConsumerDetails->SecondName)?"":$consumerList->ConsumerDetails->SecondName)." ".(is_object($consumerList->ConsumerDetails->Surname)?"":$consumerList->ConsumerDetails->Surname);?></td>
              <td><?php echo $consumerList->ConsumerDetails->IDNo;?></td>
              <td><?php echo (($consumerList->ConsumerDetails->GenderInd == "M")?"Male":"Female");?></td>
              <td>
               <a type="button"  onClick="fnRedirect('<?php echo site_url()?>/indigentreport/getreport/<?php echo $consumerList->ConsumerDetails->EnquiryID;?>/<?php echo $consumerList->ConsumerDetails->EnquiryResultID;?>/<?php echo $consumerList->ConsumerDetails->IDNo;?>')" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a> 
              </td>
            </tr>
			<?php } else { 
			foreach($consumerList->ConsumerDetails as $consumerList){
			?>
            <tr>
              <td><?php echo $consumerList->Reference;?></td>
              <td><?php echo (is_object($consumerList->FirstName)?"":$consumerList->FirstName)." ".(is_object($consumerList->SecondName)?"":$consumerList->SecondName)." ".(is_object($consumerList->Surname)?"":$consumerList->Surname);?></td>
              <td><?php echo $consumerList->IDNo;?></td>
              <td><?php echo (($consumerList->GenderInd == "M")?"Male":"Female");?></td>
              <td>
               <a type="button"  onClick="fnRedirect('<?php echo site_url()?>/indigentreport/getreport/<?php echo $consumerList->EnquiryID;?>/<?php echo $consumerList->EnquiryResultID;?>/<?php echo $consumerList->IDNo;?>')" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a> 
              </td>
            </tr>			
			<?php }
			} ?>
			</tbody>
          </table>
       </div>
	<?php } ?>
</section>
</body>

<script type="text/javascript">
$(document).ready(function(){
	$('#ConsumerDetails').DataTable();
    $('#button-search').click(function() {
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
