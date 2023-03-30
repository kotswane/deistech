<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deis Technologies</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>dashboarddata/css/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  
</head>
<body>

 
  <!-- /.navbar -->
    <!-- Content Header (Page header) -->
   <br>
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		 <div class="row">
			
				<div class="pull-left">
					<div class="box-header with-border">
						<h3 class="box-title">Search By Date Range</h3>
					</div>
					<div class="box-body">
					
					<form class="form-inline" action="<?php echo site_url();?>/client/gettotalbyclient" method="post" id="form-search-date">
					  <div class="form-group">
						
						<div class="col-lg-4">
						  <input type="date" class="form-control" id="start-date" name="start-date" required >
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-lg-4">
						  <input type="date" class="form-control" id="end-date" name="end-date" required >
						</div>
					  </div>

					  <div class="form-group">
						<div class="col-lg-4">
						  <input type="hidden" name="cid" value="<?php echo $cid;?>" />
						  <button type="submit" id="btn-date-search" class="btn btn-primary">search</button>
						</div>
					  </div>
					</form>
					</div>
				</div>
				
				<div class="pull-right">
					<div class="box-header with-border">&nbsp;</div>
					<div class="box-body">
					
						<form class="form-inline" action="<?php echo site_url();?>/client/create" method="post">

						  <div class="form-group">
							<div class="col-lg-4">
							  <input type="hidden" name="cid" value="<?php echo $cid;?>" />
							  <button type="submit" class="btn btn-primary">Back</button>
							</div>
						  </div>
						</form>
					</div>
				</div>
				
		</div>
	     <div class="row">
				<br />
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><?php echo $title;?></h3>
				</div>
				<div class="box-body">
			    </div>
			</div>
			   
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $traceCount;?></h3>

                <p>Trace Report</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $procurementCount;?></h3>
                <p>Procurement</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $indigentCount;?></h3>
				<p>Indigent</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
 
          <!-- ./col -->
        </div>
		
        <div class="row">
          <!-- /.col (LEFT) -->
		 
          <div class="col-lg-12">
				<div class="card card-info">
				  <div class="card-header">
					<h4 class="card-title">Report Statistic</h4>
				  </div>
				   <hr/>
				  <div class="card-body">
						<table class="table table-striped">
						 <tr>
							<td>User</td>
							<td>Trace Report</td>
							<td>Indigent Report</td>
							<td>Procurement Report</td>
							<td><span class="pull-left">Total</span></td>
							<td><span class="pull-right">Detailed Report</span></td>
						 </tr>
						<?php

							foreach($userReportInfo["detail"] as $reportCountKey => $reportCountVal){
							$total = ($reportCountVal["procurementCount"] + $reportCountVal["indigentreport"] + $reportCountVal["traceCount"]);
						 ?>
						 <tr>
							<td><span class="pull-left"><?php echo $reportCountKey;?></span></td>
							<td><span class="pull-left"><?php echo (($reportCountVal["traceCount"] != "")?$reportCountVal["traceCount"]:0);?></span></td>
							<td><span class="pull-left"><?php echo (($reportCountVal["indigentreport"]!= "")?$reportCountVal["indigentreport"]:0);?></span></td>
							<td><span class="pull-left"><?php echo (($reportCountVal["procurementCount"]!= "")?$reportCountVal["procurementCount"]:0);?></span></td>
							<td><span class="pull-left"><?php echo (($total != "")?$total:0);?></span></td>
							<td><span class="pull-right">
								<form data-toggle="validator" role="Users form" action="<?php echo site_url();?>/client/reportperuser" method="post" id="form-search">
									<input type="hidden" name="reportnumber" id="reportnumber" value="<?php echo $reportCountVal["id"];?>" />
									<input type="hidden" name="sdate" id="sdate" value="<?php echo $sdate;?>" />
									<input type="hidden" name="edate" id="edate" value="<?php echo $edate;?>" />
									<input type="hidden" name="cid" id="cid" value="<?php echo $cid;?>" />
									<input type="hidden" name="user" id="user" value="<?php echo $reportCountKey;?>" />
									<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; View</button>
								</form>
							</span></td>
						 </tr>
						<?php } ?>
						</table>
					</div>
				</div>
            </div>

            <!-- /.card -->
			
      </div><!-- /.container-fluid -->
        <!-- /.row -->
		<hr>
		<div class="row">
			<div class="col-md-12">

				  <div class="card-body">
					<table class="table table-striped">
						 <tr>
							<td><h3 class="card-title"><span class="pull-left">Total:</span><span class="pull-right"><strong><?php echo (($totalStats != "")?$totalStats:0);?></strong></span></h3></td>
						 </tr>
					</table>
					</div>

			</div>
		</div>
		
    </section>
    <!-- /.content -->



  <!-- Control Sidebar -->
 

<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>dashboarddata/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>dashboarddata/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>dashboarddata/js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dashboarddata/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
