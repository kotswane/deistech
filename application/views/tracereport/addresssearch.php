<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Address Search</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>

</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Address Search</h3>

        </div>
           <!-- Error Alert -->
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
        <form data-toggle="validator" role="Address Search form" action="<?php echo site_url();?>/tracereport/addresssearch" method="post" id="form-search-addr">
            <div class="box-body"><br>
                 <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Residential Address</a></li>
                  </ul><br/>
					<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
						<strong>please wait while loading ....</strong>
					</div>
                     <div class="form-group">
                       <label class="col-form-label">Province</label>
                    <select class="form-control" id="listprovinces" name="listprovinces" required>
					<option value="">Please Select Province</option>
					<?php 
					
					foreach($provinces as $province){
							echo "<option value='$province->province_name'" . set_select('listprovinces', $province->province_name). " >". $province->province_name."</option>";
					} ?>
					</select>
                 </div>
                 <div class="form-group">
                 <label class="col-form-label">City</label>
                    <input type="text"  class="form-control" id="city" name="city" value="<?php echo set_value('city');?>" placeholder="Enter City" />
                 </div>
                <div class="tab-content">
                <!-- For Street Address -->
                <div id="tab1" class="tab-pane fade in active">
                        <br>
                <div class="form-group">
                <label class="col-form-label">Suburb</label>
                    <input type="text"  class="form-control" id="suburb" name="suburb" value="<?php echo set_value('suburb');?>" placeholder="Enter Suburb" />
                 </div>
                 <div class="form-group">
                 <label class="col-form-label">Street Number</label>
                    <input type="text"  class="form-control" id="streetNo" name="streetNo" value="<?php echo set_value('streetNo');?>" placeholder="Enter Street Number" />
                 </div>
                  <div class="form-group">
                  <label class="col-form-label">Street Name</label>
                   <input type="text"  class="form-control" id="streetName" name="streetName" value="<?php echo set_value('streetName');?>" placeholder="Enter Street Name" />
                 </div>
                  <div class="form-group">
                  <label class="col-form-label">Postal Code</label>
                    <input type="text"  class="form-control" id="postalCode" name="postalCode" value="<?php echo set_value('postalCode');?>" placeholder="Ente Postal Code" />
                 </div>

                 </div>
                  
                </div> 
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-search-addr"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<input type="hidden" name="postback" value="post"/>
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        </form>
    </div>

	<?php
	 if (count($consumerList['details']) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="addresssearch_table">
            <thead>
			<tr>
            <th>Reference No</th>
              <th>Names</th>
              <th>Id Number</th>
              <th>Details Viewed</th>
              <th>View</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				
				foreach($consumerList['details'] as $consumerListKey => $consumerListValue){
			?>
			
            <tr>
              <td><?php echo $consumerListValue->Reference;?></td>
              <td><?php echo $consumerListValue->Consumername;?></td>
              <td><?php echo $consumerListValue->IDno;?></td>
              <td><?php echo $consumerList['DetailsViewed'][$consumerListKey];?></td>
              <td>
               <a type="button" onClick="fnRedirect('<?php echo site_url()?>/tracereport/customerdatalist/<?php echo $consumerListValue->EnquiryID;?>/<?php echo $consumerListValue->EnquiryResultID;?>')"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>              
			  </td>
            </tr>
			<?php }?>
			</tbody>
          </table>
       </div>
	<?php } ?>
	
</section>
</body>


<script type="text/javascript">
/*
$(document).ready(function(){
		$('#addresssearch_table').DataTable({
        /* No ordering applied by DataTables during initialisation 
        "order": []
    });
		$('#button-search').click(function() {
        
			$("#loadMe").modal({
			  backdrop: "static", //remove ability to close modal with click
			  keyboard: false, //remove option to close with keyboard
			  show: true //Display loader!
			});	
			
		$('#form-search').submit();
    });
});*/

$(document).ready(function(){
	$('#addresssearch_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	
    $('#button-search-addr').click(function() {
       	
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		$('#form-search-addr').submit();
    });
});

</script>
<script>
function fnRedirect(strVal){
	
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		
	location.href = strVal;
}


</script>
</html>
