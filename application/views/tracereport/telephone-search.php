<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Telephone Search</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>

</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Telephone Search</h3>
        </div>
		   <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
        <form data-toggle="validator" role="Telephone Search form" action="<?php echo site_url();?>/tracereport/telephonesearch" method="post" id="form-search">
            <div class="box-body">
                    <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">Telephone search</a></li>
					</ul>
                  <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
					
                        <br>
                        <div class="form-group">
							<label class="col-form-label">Cellphone Number</label>
                            <input type="number" class="form-control" name="cellphoneNo"  id="cellphoneNo" name="cellphoneNo" placeholder="e.g 0839685521" maxlength="10" />
                        </div>
						<div class="form-group">
							<label class="col-form-label">Landline Number</label>
                            <input type="number" class="form-control" name="telephoneNo"  id="telephoneNo" name="telephoneNo" placeholder="e.g 0115403366" maxlength="10" />
                        </div>
                    </div>
					<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
						<strong>please wait while loading ....</strong>
					</div>

				</div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="button" id="button-search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
			<?php
				$csrf = array(
						'name' => $this->security->get_csrf_token_name(),
						'hash' => $this->security->get_csrf_hash()
				);
			?>
			<input type="hidden" name="postback" value="post"/>
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        </form>
    </div>
	<?php
	 if (count($consumerList['details']) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped" id="telephone_search_table">
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
              <td><?php echo $consumerListValue->FirstName." ".(!is_object($consumerListValue->SecondName)?$consumerListValue->SecondName:"")." ".(!is_object($consumerListValue->ThirdName)?$consumerListValue->ThirdName:"")." ".(!is_object($consumerListValue->Surname)?$consumerListValue->Surname:"");?></td>
              <td><?php echo (!is_object($consumerListValue->IDNo)?$consumerListValue->IDNo:"");?></td>
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
$(document).ready(function(){
	$('#telephone_search_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
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
});


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
