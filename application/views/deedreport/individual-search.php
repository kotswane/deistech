<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Deis Technologies</title>
</head>
<body>
<section class="content-header">
    <h1>Deis Technologies</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/deedreport/individualsearch" ><i class="fa fa-dashboard"></i> Dashboard</a></li><li>Deed Report</li>
        <li class="active">Deis Technologies</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Deis Technologies</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo site_url();?>/deedreport/individualsearch" type="button" class="btn btn-box-tool"><i class="fa fa-list-ul"></i></a>
            </div>
        </div>
           <!-- Error Alert -->
            <?php if($errorMessage != ""){?>
				<div class="alert alert-danger" role="alert"><?php echo $errorMessage;?></div>
		   <?php }?>
		
           <form data-toggle="validator" role="DeedOffice Search form" action="<?php echo site_url();?>/deedreport/individualsearch" method="post">
             <div class="box-body">
                 <br>

                 <div class="form-group">
                 <label class="col-form-label">Deed Office</label>
                    <select class="form-control" id="listdeedoffice" name="listdeedoffice" required>
					<option value="">Please Select Deed Office</option>
					<?php 
						foreach($officelist as $office){
							echo "<option value='$office->deedoffice_description'" . set_select('listdeedoffice', $office->deedoffice_description). " >". $office->deedoffice_description."</option>";
					}?>
					
					</select>
                 </div>
                    <div class="form-group">
                    <label class="col-form-label">ID Number</label>
                           <input type="text" value="<?php echo set_value('idNo');?>"  class="form-control" id="idNo" name="idNo" placeholder="Id Number" maxlength="13"/>
                   </div>
                    <div class="form-group">
                    <label class="col-form-label">Surname</label>
                            <input type="text" value="<?php echo set_value('surName');?>" class="form-control" id="surName" name="surName" placeholder="Surname"/>
                        </div>
                     <div class="form-group">
                     <label class="col-form-label">First Name</label>
                           <input type="text" value="<?php echo set_value('firstName');?>" class="form-control" id="firstname" name="firstname" placeholder="FirstName"/>
                       </div>
              </div>
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
	<?php
	 if (count($consumerList) > 0){
	?>
    <div>
      	 <h5><span><strong>Search Results List</strong></span></h5>
          <table class="table table-striped">
            <tr>
            <th>Reference No</th>
              <th>Names</th>
              <th>Id Number</th>
              <th>Details Viewed</th>
              <th>View</th>
            </tr>
			<?php foreach($consumerList as $consumerListKey => $consumerListValue){?>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
               <a type="button" href="/traceenquiry/view-addresstrace-search/nquiryId/enquiryResultId"  class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;View</a> 
              </td>
            </tr>
			<?php }?>
          </table>
       </div>
	<?php } ?>
</div>
</body>
</html>
