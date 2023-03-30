<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Name Search</title>
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
            <h3 class="box-title">Search History</h3>

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
				$formActionUrl = "searchhistory/".$consumerListValue->reportname;
				
			?>
			
            <tr>
              <td nowrap><?php echo $consumerListValue->reportname;?></td>
              <td nowrap><?php echo $consumerListValue->reporttype;?></td>
              <td nowrap><?php echo $consumerListValue->created;?></td>
              <td><?php echo $consumerListValue->searchdata;?></td>
              <td>
				<form data-toggle="validator" role="ID Search form" id="form-search-<?php echo $consumerListValue->id;?>" action="<?php echo site_url()."/".$formActionUrl;?>" method="post">
					<input type="hidden" name="page" value="<?php echo $consumerListValue->id;?>"/>
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
