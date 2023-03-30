<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ID Search</title>
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
		   <div> 
				<div class="alert alert-danger" role="alert"> 
					<?php echo $errorMessage; ?>
				</div>
			</div>
		<?php }?>
		
        <form data-toggle="validator" role="ID Search form" id="form-search" action="<?php echo site_url();?>/tracereport/idsearch" method="post">
            <div class="box-body">
                  <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#tab1">ID Number</a></li>
                    <li><a data-toggle="tab" href="#tab2">Passport Number</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <br>
                        
                        <div class="form-group">
                        <label class="col-form-label">ID Number</label>
                            <input type="number" class="form-control" value="<?php echo set_value("idNumber");?>" name="idNumber"  id="idNumber" placeholder="Enter ID Number" maxlength="13" autofocus/>
                        </div>
                         <div class="form-group">
                    <label class="col-form-label">Surname</label>
                            <input type="text" class="form-control" value="<?php echo set_value("surname");?>" name="surname" id="surname" placeholder="Enter Surname"/>
                        </div>
                     <div class="form-group">
                     <label class="col-form-label">First Name</label>
                           <input type="text"  class="form-control" value="<?php echo set_value("firstname");?>" name="firstname" id="firstname" placeholder="Enter FirstName"/>
                       </div>

                    </div>
 
                    <div id="tab2" class="tab-pane fade">
                        <br>
                        <div class="form-group">
                        <label class="col-form-label">Passport No</label>
                           <input type="text" class="form-control" value="<?php echo set_value("passportNo");?>" name = "passportNo" id="passportNo" placeholder="Passport Number" autofocus/>
                       </div>
                        <div class="form-group">
                    <label class="col-form-label">Surname</label>
                            <input type="text" class="form-control" value="<?php echo set_value("passsportSurname");?>" name="passsportSurname" id="passsportSurname" placeholder="Enter Surname"/>
                        </div>
                     <div class="form-group">
                     <label class="col-form-label">First Name</label>
                           <input type="text"  class="form-control" value="<?php echo set_value("passportFirstName");?>" name="passportFirstName" id="passportFirstName" placeholder="Enter FirstName"/>
                       </div>
                  </div>
            </div>
            </div>

            <div class="box-footer">
				<div id="spinner" class="spinner" style="display:none;"  class="form-group has-feedback">
					<strong>please wait while loading ....</strong>
				</div>

                <button class="btn btn-primary" id="button-search" type="button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; Search</button>
            </div>
            <input type="hidden" name="postback" value="post"/>
        </form>
        
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
              <td><?php echo $consumerListValue->FirstName." ".$consumerListValue->Surname;?></td>
              <td><?php echo $consumerListValue->IDNo;?></td>
              <td><?php echo $consumerList['DetailsViewed'][$consumerListKey];?></td>
              <td>
               <a type="button" onClick="fnRedirect('<?php echo site_url()?>/tracereport/tracedata/<?php echo $consumerListValue->EnquiryID;?>/<?php echo $consumerListValue->EnquiryResultID;?>')"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a>              
			  </td>
            </tr>
			<?php }?>
			</tbody>
          </table>
       </div>
	<?php } ?>
    </div>
</section>
</body>

<script type="text/javascript">
$(document).ready(function(){
	
	$('#addresssearch_table').DataTable({
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
