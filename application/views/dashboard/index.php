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
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Search By Date Range</h3>
				</div>
				<div class="box-body">
				
				<form class="form-inline" action="<?php echo site_url();?>/dashboard" method="post" id="form-search-date">
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
					  <button type="button" id="btn-date-search" class="btn btn-primary">search</button>
					</div>
				  </div>
				
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
			   
		 <?php 
				$traceReport = 0;
				$indigentReport = 0;
				$procurementReport = 0;
			
				
				foreach($overviewReportLastSevenDays as $overviewReportLastSevenDaysVal){
					if($overviewReportLastSevenDaysVal->Report == "procurementreport"){
						$procurementReport = $overviewReportLastSevenDaysVal->Total;
					}else if($overviewReportLastSevenDaysVal->Report == "tracereport"){
						$traceReport = $overviewReportLastSevenDaysVal->Total;
					}else if($overviewReportLastSevenDaysVal->Report == "indigentreport"){
						$indigentReport = $overviewReportLastSevenDaysVal->Total;
					}
				}
				
				$detailedProcurementCompanyName = 0;
				$detailedProcurementCompanyNumber = 0;
				
				$detailedTraceIdSearch = 0;
				$detailedTraceAddressSearch = 0;
				$detailedTraceTelephoneSearch = 0;
				
				$detailedIndigentIdSearch = 0;
				
				foreach($detailedReportLastSevenDays as $detailedReportLastSevenDaysVal){
					if($detailedReportLastSevenDaysVal->Report == "procurementreport"){
						if($detailedReportLastSevenDaysVal->Type == "companyname"){
							$detailedProcurementCompanyName = $detailedReportLastSevenDaysVal->Total;
						} else if($detailedReportLastSevenDaysVal->Type == "companyregistrationno"){
							$detailedProcurementCompanyNumber = $detailedReportLastSevenDaysVal->Total;
						}
					}else if($detailedReportLastSevenDaysVal->Report == "tracereport"){

						if($detailedReportLastSevenDaysVal->Type == "addresssearch"){
							$detailedTraceAddressSearch = $detailedReportLastSevenDaysVal->Total;
						} else if($detailedReportLastSevenDaysVal->Type == "idsearch" || $detailedReportLastSevenDaysVal->Type == "search"){
							$detailedTraceIdSearch = $detailedReportLastSevenDaysVal->Total;
						} else if($detailedReportLastSevenDaysVal->Type == "telephonesearch"){
							$detailedTraceTelephoneSearch = $detailedReportLastSevenDaysVal->Total;
						}
					}else if($detailedReportLastSevenDaysVal->Report == "indigentreport"){
						if($detailedReportLastSevenDaysVal->Type == "id-search"){
							$detailedIndigentIdSearch = $detailedReportLastSevenDaysVal->Total;
						}else if($detailedReportLastSevenDaysVal->Type == "lineage"){
							$detailedIndigentlineage = $detailedReportLastSevenDaysVal->Total;
						}
						
					}
				}
				
			?>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $traceReport;?></h3>

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
                <h3><?php echo $procurementReport;?></h3>
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
                <h3><?php echo $indigentReport;?></h3>
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
		 
          <div class="col-md-4">
				<div class="card card-info">
				  <div class="card-header">
					<h4 class="card-title">Trace Report Statistic</h4>
				  </div>
				   <hr/>
				  <div class="card-body">
						<table class="table table-striped">
						 <tr>
							<td>ID Search</td>
							<td><strong><span class="pull-right"><?php echo $detailedTraceIdSearch;?></span></strong></td>
						 </tr>
						 <tr>
							<td>Address Search</td>
							<td><strong><span class="pull-right"><?php echo $detailedTraceAddressSearch;?></span></strong></td>
						 </tr>
						 <tr>
							<td>Telephone Search</td>
							<td><strong><span class="pull-right"><?php echo $detailedTraceTelephoneSearch;?></span></strong></td>
						 </tr>
						</table>
					</div>
				</div>
            </div>

            <!-- /.card -->
			<div class="col-md-4">
				<div class="card card-success">
				  <div class="card-header">
					<h4 class="card-title">Procurement Report Statistic</h4>
				  </div>
				   <hr/>
				  <div class="card-body">
						<table class="table table-striped">
						 <tr>
							<td>Company Name Search</td>
							<td><strong><span class="pull-right"><?php echo $detailedProcurementCompanyName;?></span></strong></td>
						 </tr>
						 <tr>
							<td>Company Registration Number Search</td>
							<td><strong><span class="pull-right"><?php echo $detailedProcurementCompanyNumber;?></span></strong></td>
						 </tr>
						</table>
				  </div>
				</div>
			</div>
            <!-- /.card -->
			<div class="col-md-4">
				<div class="card card-success">
				  <div class="card-header">
					<h4 class="card-title">Indigent Report Statistic</h4>
				  </div>
				   <hr/>
				  <div class="card-body">
					<table class="table table-striped">
						 <tr>
							<td>ID Search</td>
							<td><strong><span class="pull-right"><?php echo $detailedIndigentIdSearch;?></span></strong></span></td>
						 </tr>						 
						 <tr>
							<td>Lineage</td>
							<td><strong><span class="pull-right"><?php echo $detailedIndigentlineage;?></span></strong></span></td>
						 </tr>
					</table>
					</div>
				</div>
			</div>
      </div><!-- /.container-fluid -->
        <!-- /.row -->
		<hr>
		<div class="row">
			<div class="col-md-12">

				  <div class="card-body">
					<table class="table table-striped">
						 <tr>
							<td><h3 class="card-title"><span class="pull-left">Total:</span><span class="pull-right"><strong><?php echo $totalLastSevenDay[0]->Total;?></strong></span></h3></td>
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

<!-- Page specific script -->
<script>
  /*$(function () {
    ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
 

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : '',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : '',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.


    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  }) */
  
  
$(document).ready(function(){

    $('#btn-date-search').click(function() {
       	
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		$('#form-search-date').submit();
    });
});
</script>
</body>
</html>
