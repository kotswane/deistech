<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Roles</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Blacklisted Company(s)</h3>
        </div>
    </div>
	<?php
	 if (count($blacklist) > 0){
	?>
    <div class="tab-content">
		 <ul class="nav nav-tabs">
		<li><a data-toggle="tab" href="#tab1">Blacklisted Company(s)</a></li>
		</ul>
		<div class="tab-content">
		<div id="tab1" class="tab-panel active">		
          <table class="table table-striped" id="blacklist_table">
		   <thead>
            <tr>
              <th>Name</th>
			  <th>Registration number</th>
			  <th>Reason</th>
			  <th>Period From</th>
			  <th>Period To</th>
			  <th>Authorize by</th>
            </tr>
			</thead>
			<tbody>
			<?php 
				foreach($blacklist as $blacklistKey => $blacklistValue){
			?>
			
            <tr>
              <td><?php echo $blacklistValue->supplier;?></td>
              <td><?php echo $blacklistValue->registrationno;?></td>
              <td><?php echo $blacklistValue->reason;?></td>
              <td><?php echo $blacklistValue->startdate;?></td>
              <td><?php echo $blacklistValue->enddate;?></td>
              <td><?php echo $blacklistValue->authorizeby;?></td>
            </tr>
			<?php }?>
			</tbody>
          </table>
		 </div>  
		</div>  
   </div>
	<?php } ?>
</section>

</body>

<script type="text/javascript">
var valStr;
$(document).ready(function(){
	$('#blacklist_table').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
   
});
</script>
</html>
