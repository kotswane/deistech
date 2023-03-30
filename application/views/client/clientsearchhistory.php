<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Deis Technologies</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/indigentreport/idsearch"><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Search History</li>
        <li class="active">Search History</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
			<div class="pull-left">
				<h3 class="box-title">Search History: <?php echo $title;?></h3>
			</div>
			<div class="pull-right">
				<form class="form-inline" action="<?php echo site_url();?>/client/gettotalbyclient" method="post">

				  <div class="form-group">
					<div class="col-lg-4">
					  <input type="hidden" name="cid" value="<?php echo $cid;?>" />
					  <input type="hidden" name="start-date" value="<?php echo $sdate;?>" />
					  <input type="hidden" name="end-date" value="<?php echo $edate;?>" />
					  <button type="submit" class="btn btn-primary">Back</button>
					</div>
				  </div>
				</form>
			</div>
        </div>
           <!-- Error Alert -->
		<?php if($errorMessage != ""){?>
			<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
	   <?php }?>
    </div>
	<?php
	 if (count($consumerList) > 0){
	?>
    <div>
          <table class="table table-striped" id="search_history_table">
		    <thead>
            <tr>
              <th nowrap>Report Name</th>
              <th nowrap>Report Type</th>
              <th nowrap>Date Time</th>
              <th>Search Data</th>
              <th>View</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				foreach($consumerList as $consumerListKey => $consumerListValue){
				$formActionUrl = "client/".$consumerListValue->reportname;
				
			?>
			
            <tr>
              <td nowrap><?php echo $consumerListValue->reportname;?></td>
              <td nowrap><?php echo $consumerListValue->reporttype;?></td>
              <td nowrap><?php echo $consumerListValue->created;?></td>
              <td><?php echo $consumerListValue->searchdata;?></td>
              <td>
				<form data-toggle="validator" role="ID Search form" id="form-search-<?php echo $consumerListValue->id;?>" action="<?php echo site_url()."/".$formActionUrl;?>" method="post">
					<input type="hidden" name="page" value="<?php echo $consumerListValue->id;?>"/>
					<input type="hidden" name="reportnumber" id="reportnumber" value="<?php echo $reportnumber;?>" />
					<input type="hidden" name="sdate" id="sdate" value="<?php echo $sdate;?>" />
					<input type="hidden" name="edate" id="edate" value="<?php echo $edate;?>" />
					<input type="hidden" name="cid" id="cid" value="<?php echo $cid;?>" />
					<input type="hidden" name="user" id="user" value="<?php echo $user;?>" />
					<a type="button" class="btn btn-primary" onClick="loadPage(<?php echo $consumerListValue->id;?>);"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>
				</form>
			  </td>
            </tr>
			<?php } ?>
			<t/body>
          </table>
       </div>
	<?php } ?>
</section>
</body>
<script>
$(document).ready(function(){
	$('#search_history_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
});

function loadPage(page){
	$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});      
		
	$('#form-search-'+page).submit();
}
</script>
</html>
