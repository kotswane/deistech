<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Telephone Search</title>
</head>
<body>
<section class="content-header">
    <h1>LKCentrix Solutions PTY LTD</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/lkcentrixreportservice/telephonesearch"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Trace Report</li>
        <li class="active">Telephone Search</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Telephone Search</h3>
            <div class="box-tools pull-right">
				<a href="<?php echo site_url();?>/lkcentrixreportservice/telephonesearch" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
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
					<div class="form-group has-feedback">
						<div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
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
               <a type="button"  href="<?php echo site_url()?>/tracereport/customerdatalist/<?php echo $consumerListValue->EnquiryID;?>/<?php echo $consumerListValue->EnquiryResultID;?>"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a> 
              </td>
            </tr>
			<?php }?>
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
	$('#telephone_search_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#button-search').click(function() {
        $('#spinner').show();
		$('#form-search').submit();
    });
});


function fnRedirect(strVal){
	$('#spinner').show();
	location.href = strVal;
}
</script>
</html>
