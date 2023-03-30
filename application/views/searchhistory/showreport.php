<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Company Name Search</title>
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
		
		 <div class="box-header with-border">
 
           <div class="box-tools pull-right">
	
				<div>
					 <a href="<?php echo site_url();?>/searchhistory/downloadidreportind">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			
			<br clear="all" />
            </div>
           <div class="box-tools pull-left">
	
				<div>
					 <a href="<?php echo site_url();?>/searchhistory/view" class="btn btn-primary btn-block">
						<span class="fa fa-step-backward">&nbsp;&nbsp;back&nbsp;&nbsp;</span>
					</a>
				</div>		
			
			<br clear="all" />
            </div>
        </div>
     
	 <?php 

		 if(is_array($familyData->Consumer) > 0){
			 $myData = $familyData->Consumer[0]->RealTimeIDV;
			 $theirData = $familyData->Consumer[1]->RealTimeIDV;
			 
			 $myConsumerAddressHistory = $familyData->Consumer[0]->ConsumerAddressHistory;
			 $myConsumerTelephoneHistory = $familyData->Consumer[0]->ConsumerTelephoneHistory;
			 $myConsumerEmploymentHistory = $familyData->Consumer[0]->ConsumerEmploymentHistory;
			 $hasMultiRecords = true;
		 }else{
			 $myData = $familyData->Consumer->RealTimeIDV;
			 $theirData = new stdclass;
			 $myConsumerAddressHistory = $familyData->Consumer->ConsumerAddressHistory;
			 $myConsumerTelephoneHistory = $familyData->Consumer->ConsumerTelephoneHistory;
			 $myConsumerEmploymentHistory = $familyData->Consumer->ConsumerEmploymentHistory;
			 $hasMultiRecords  = false;
		 }

		$MaritalStatus = (is_object($myData->HAMarriageStatus)?"":$myData->HAMarriageStatus);
		if($myData->HAMarriageStatus == "MARRIED"){
			if($myData->HASpouseID == $theirData->HAIDNO){
				$SpouseName = $theirData->HANames;
				$SpouseSurname = $theirData->HASurname;
				$SpouseIDNo = $theirData->HAIDNO;
			}
		}
		 
		 if (!is_array($report->ConsumerDetail->FirstName)){
			 $firstName = $report->ConsumerDetail->FirstName." ";
		 }
		 if (!is_array($report->ConsumerDetail->SecondName)){
			 $secondName = $report->ConsumerDetail->SecondName;
		 }
		 
		 if (!is_array($report->ConsumerDetail->Surname)){
			 $Surname = $report->ConsumerDetail->Surname;
		 }
		 
		 $ID = $report->ConsumerDetail->IDNo;
		 $name=$firstName.$secondName;
		 
		if($XDSError!=""){ ?>
				<div class="alert alert-danger" role="alert"><?php echo $XDSError;?></div>
		<?php }else if(!is_object($myData->HAErrorDescription)){?>
				<div class="alert alert-danger" role="alert"><?php echo $myData->HAErrorDescription;?></div>
		<?php } ?>
        <div class="box-body no-padding">

              <div class="panel panel-primary">
                <div class="panel-heading">Home Affairs Verification</div>
                <div class="panel-body">
					 <table class="table">
							<tr>
							<td>ID No</td>
							<td><?php echo $ID;?></td>
							<td rowspan="7">
							<?php
							if($hasMultiRecords == true){
								if($familyData->Consumer[0]->BioMetricVerificationResult->HasImage == 'True'){
									echo '<img width="160" height="200" src="data:image/gif;base64,' . $familyData->Consumer[0]->BioMetricVerificationResult->Base64StringJpeg2000Image . '" />';
								}else {
									echo '<img width="160" height="200" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/4QBWRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAAAAAEsAAAAAQAAASwAAAAB/+0ALFBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAAAPHAFaAAMbJUccAQAAAgAEAP/hDIFodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0n77u/JyBpZD0nVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkJz8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0nYWRvYmU6bnM6bWV0YS8nIHg6eG1wdGs9J0ltYWdlOjpFeGlmVG9vbCAxMC4xMCc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczp0aWZmPSdodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyc+CiAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICA8dGlmZjpYUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpYUmVzb2x1dGlvbj4KICA8dGlmZjpZUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpZUmVzb2x1dGlvbj4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6eG1wTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nPgogIDx4bXBNTTpEb2N1bWVudElEPmFkb2JlOmRvY2lkOnN0b2NrOmE5ZDg3YzBmLTY5NGYtNDU2Ny04ZmVhLWIxMzhkNjJkNmI5NTwveG1wTU06RG9jdW1lbnRJRD4KICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOjMyZTk1ZmJmLTYyNDItNGRiMS05Y2I1LTViNzQzMDUyMDU2ZTwveG1wTU06SW5zdGFuY2VJRD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwADAgIDAgIDAwMDBAMDBAUIBQUEBAUKBwcGCAwKDAwLCgsLDQ4SEA0OEQ4LCxAWEBETFBUVFQwPFxgWFBgSFBUU/8AACwgA8ADwAQERAP/EAB0AAQABBQEBAQAAAAAAAAAAAAAHAgQFBggDAQn/xAA+EAACAQMBBQUDCQYHAQAAAAAAAQIDBAURBgchMWESQVFxgRORoRQiJDJCUmKxwiMzcoLB0RUWQ0RjkqLh/9oACAEBAAA/AP1TAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjaRhMlttgcQ2rvK2tOa5w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"/>';
								}
							}else{
								if($familyData->Consumer->BioMetricVerificationResult->HasImage == 'True'){
									echo '<img width="160" height="200" src="data:image/gif;base64,' . $familyData->Consumer->BioMetricVerificationResult->Base64StringJpeg2000Image . '" />';
								}else {
									echo '<img width="160" height="200" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/4QBWRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAAAAAEsAAAAAQAAASwAAAAB/+0ALFBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAAAPHAFaAAMbJUccAQAAAgAEAP/hDIFodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0n77u/JyBpZD0nVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkJz8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0nYWRvYmU6bnM6bWV0YS8nIHg6eG1wdGs9J0ltYWdlOjpFeGlmVG9vbCAxMC4xMCc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczp0aWZmPSdodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyc+CiAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICA8dGlmZjpYUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpYUmVzb2x1dGlvbj4KICA8dGlmZjpZUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpZUmVzb2x1dGlvbj4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6eG1wTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nPgogIDx4bXBNTTpEb2N1bWVudElEPmFkb2JlOmRvY2lkOnN0b2NrOmE5ZDg3YzBmLTY5NGYtNDU2Ny04ZmVhLWIxMzhkNjJkNmI5NTwveG1wTU06RG9jdW1lbnRJRD4KICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOjMyZTk1ZmJmLTYyNDItNGRiMS05Y2I1LTViNzQzMDUyMDU2ZTwveG1wTU06SW5zdGFuY2VJRD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwADAgIDAgIDAwMDBAMDBAUIBQUEBAUKBwcGCAwKDAwLCgsLDQ4SEA0OEQ4LCxAWEBETFBUVFQwPFxgWFBgSFBUU/8AACwgA8ADwAQERAP/EAB0AAQABBQEBAQAAAAAAAAAAAAAHAgQFBggDAQn/xAA+EAACAQMBBQUDCQYHAQAAAAAAAQIDBAURBgchMWESQVFxgRORoRQiJDJCUmKxwiMzcoLB0RUWQ0RjkqLh/9oACAEBAAA/AP1TAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjaRhMlttgcQ2rvK2tOa5w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"/>';
								}
							}
							?>
							</td>
							</tr>
							 <tr>
							<td>First Name</td>
							<td><?php echo $name;?></td>
							</tr>
							 <tr>
							<td>Surname</td>
							<td><?php echo $Surname;?></td>
							</tr>
							<tr>
							<td>Deceased Status</td>
							<td><?php echo (is_object($myData->HADeceasedStatus)?"":$myData->HADeceasedStatus);?></td>
							</tr>
							<tr>
							<td>ID Book Issue Date</td>
							<td><?php echo (is_object($myData->HAIDBookIssuedDate)?"":$myData->HAIDBookIssuedDate);?></td>
							</tr>
							<tr>
							<td>ID Card Issued</td>
							<td><?php echo (is_object($myData->IdCardInd)?"":$myData->IdCardInd);?></td>
							</tr>
							<tr>
							<td>ID Card Issued Date</td>
							<td><?php echo (is_object($myData->HAIDCardDate)?"":$myData->HAIDCardDate);?></td>
							</tr>
						</table>
                </div>
				
              </div>
			  

              <div class="panel panel-primary">
                <div class="panel-heading">Spouse Details</div>
                <div class="panel-body">
                    
					 <?php if($MaritalStatus == "MARRIED"){?>
						<table class="table table-striped">	
						 <tr>
							<td>Marital Status</td>
							<td><?php echo (is_object($myData->HAMarriageStatus)?"":$myData->HAMarriageStatus);?></td>
						 </tr>						 
						 <tr>
							<td>Marriage Date</td>
							<td><?php echo (is_object($myData->HAMarriageDate)?"":$myData->HAMarriageDate);?></td>
						 </tr>						 
						 <tr>
							<td>Spouse Name</td>
							<td><?php echo $SpouseName;?></td>
						 </tr>						 
						 <tr>
							<td>Spouse Surname</td>
							<td><?php echo $SpouseSurname;?></td>
						 </tr>		
						<tr>
							<td>Spouse ID No</td>
							<td><?php echo $SpouseIDNo;?></td>
						 </tr>
						</table>	
					 <?php } else { ?>
							<div class="col-xs-4">Marital Status:&nbsp;&nbsp;<strong><span><?php echo $MaritalStatus;?></span></strong></div>					 
					 <?php }?>
                    
                </div>
              </div>
   
                <div class="panel panel-primary">
                <div class="panel-heading">Income and Scoring</div>
                <div class="panel-body">
   
  						<table class="table table-striped">	
						 <tr>
							<td>Estimate</td>
							<td><?php echo $report->ConsumerScoring->FinalScore;?></td>
						 </tr>						 
						 <tr>
							<td>Bracket</td>
							<td><?php echo $report->ConsumerAffordability->PredictedIncome;?></td>
						 </tr>						 
						 <tr>
							<td>Confidence</td>
							<td><?php echo $report->ConsumerScoring->classification;?></td>
						 </tr>						 
						 <tr>
							<td>Category</td>
							<td><?php echo $report->ConsumerScoring->RiskCategory;?></td>
						 </tr>		
						<tr>
							<td>Exception</td>
							<td><?php echo (is_array($report->ConsumerScoring->Exception_Code)?"":$report->ConsumerScoring->Exception_Code);?></td>
						 </tr>
						</table>        
                    
                </div>
              </div>           <!-- directorship -->
             
			   <div class="panel panel-primary">
                <div class="panel-heading">Directorship(s)</div>
                <div class="panel-body">
				<?php if($directorship){ ?>
				   <?php if(is_object($directorship)){ ?>
                    <div class="col">
						<div class="row">
							<div class="col-xs-3">Company Name:&nbsp;&nbsp;<strong><span><?php echo (is_object($directorship->CommercialName)?"":$directorship->CommercialName);?></span></strong></div>
							<div class="col-xs-3">Registration Number:&nbsp;&nbsp;<strong><span><?php echo (is_object($directorship->RegistrationNo)?"":$directorship->RegistrationNo);?></span></strong></div>
							<div class="col-xs-3">Director Status:&nbsp;&nbsp;<strong><span><?php echo (is_object($directorship->DirectorStatus)?"":$directorship->DirectorStatus);?></span></strong></div>
							<div class="col-xs-3">Company Status:&nbsp;&nbsp;<strong><span><?php echo (is_object($directorship->CommercialStatus)?"":$directorship->CommercialStatus);?></span></strong></div>
						</div>
						<hr class="hr-line"/>
					</div>
					
					<?php } else { 
						foreach($directorship as $director){
						?>
						<div class="col">
							<div class="row">
								<div class="col-xs-3">Company Name:&nbsp;&nbsp;<strong><span><?php echo (is_object($director->CommercialName)?"":$director->CommercialName);?></span></strong></div>
								<div class="col-xs-3">Registration Number:&nbsp;&nbsp;<strong><span><?php echo (is_object($director->RegistrationNo)?"":$director->RegistrationNo);?></span></strong></div>
								<div class="col-xs-3">Director Status:&nbsp;&nbsp;<strong><span><?php echo (is_object($director->DirectorStatus)?"":$director->DirectorStatus);?></span></strong></div>
								<div class="col-xs-3">Company Status:&nbsp;&nbsp;<strong><span><?php echo (is_object($director->CommercialStatus)?"":$director->CommercialStatus);?></span></strong></div>
							</div>	
							<hr class="hr-line"/>
						</div>
						<?php } 
					}?>
				<?php } else {?>
						<span>Information not found</span>
				<?php } ?>
                </div>
              </div> 
			 
              <div class="panel panel-primary">
                <div class="panel-heading">Address History</div>
                <div class="panel-body">
					<?php if($myConsumerAddressHistory){ ?>
                    <table class="table table-striped" id="myConsumerAddressHistory">
                        <tr>
                            <th>Type</th>
                            <th>Full Address</th>
                            <th>LastUpdatedDate</th>
                        </tr>
						
						<?php 
							if (!is_object($myConsumerAddressHistory)>0){
								foreach($myConsumerAddressHistory as $ConsumerAddressHistory){ ?>
									<tr>
										<td><?php echo (is_object($ConsumerAddressHistory->AddressType)?"":$ConsumerAddressHistory->AddressType);?></td>
										<td><?php echo (is_object($ConsumerAddressHistory->Address)?"":$ConsumerAddressHistory->Address);?></td>
										<td><?php echo (is_object($ConsumerAddressHistory->LastUpdatedDate)?"":$ConsumerAddressHistory->LastUpdatedDate);?></td>
									</tr>
							  <?php } 
							} else { ?>
									<tr>
										<td><?php echo (is_object($myConsumerAddressHistory->AddressType)?"":$myConsumerAddressHistory->AddressType);?></td>
										<td><?php echo (is_object($myConsumerAddressHistory->Address)?"":$myConsumerAddressHistory->Address);?></td>
										<td><?php echo (is_object($myConsumerAddressHistory->LastUpdatedDate)?"":$myConsumerAddressHistory->LastUpdatedDate);?></td>
									</tr>
							<?php } ?>
                    </table>
					<?php } else { ?>
					<span>Address History Not Found</span><br>
					<?php } ?>
                    
                </div>
              </div>

			<div class="panel panel-primary">
				<div class="panel-heading">Telephone History</div>
				<div class="panel-body">
				<?php if($myConsumerTelephoneHistory){ ?>
					<table class="table table-striped" id="myConsumerTelephoneHistory">
						<tr>
							<th>Type</th>
							<th>Full Number</th>
							<th>LastUpdatedDate</th>
						</tr>
						
						<?php 
							
							if(!is_object($myConsumerTelephoneHistory)){
								foreach($myConsumerTelephoneHistory as $ConsumerTelephoneHistory){?>
										<tr>
										<td><?php echo (is_object($ConsumerTelephoneHistory->TelephoneType)?"":$ConsumerTelephoneHistory->TelephoneType);?></td>
										<td><?php echo (is_object($ConsumerTelephoneHistory->TelephoneNo)?"":$ConsumerTelephoneHistory->TelephoneNo);?></td>
										<td><?php echo (is_object($ConsumerTelephoneHistory->LastUpdatedDate)?"":$ConsumerTelephoneHistory->LastUpdatedDate);?></td>
										</tr>
								<?php } 
							} else { ?>
										<tr>
											<td><?php echo (is_object($myConsumerTelephoneHistory->TelephoneType)?"":$myConsumerTelephoneHistory->TelephoneType);?></td>
											<td><?php echo (is_object($myConsumerTelephoneHistory->TelephoneNo)?"":$myConsumerTelephoneHistory->TelephoneNo);?></td>
											<td><?php echo (is_object($myConsumerTelephoneHistory->LastUpdatedDate)?"":$myConsumerTelephoneHistory->LastUpdatedDate);?></td>
										</tr>
							<?php }?>
					</table>
					<?php } else { ?>
					 <div>
						<span>Employment History Not Found</span><br>
					</div>
					<?php } ?>
				</div>
			  </div>

           <div class="panel panel-primary">
            <div class="panel-heading">Consumer Employment History</div>
            <div class="panel-body">
			<?php if($myConsumerEmploymentHistory){ ?>
                <table class="table table-striped" id="myConsumerEmploymentHistory">
                    <tr>
                        <th>Employer Name</th>
                        <th>Designation</th>
                        <th>LastUpdatedDate</th>
                    </tr>
					<?php 
						if(!is_object($myConsumerEmploymentHistory)){
							foreach($myConsumerEmploymentHistory as $ConsumerEmploymentHistory){?>
								<tr>
									<td><?php echo (is_object($ConsumerEmploymentHistory->EmployerDetail)?"":$ConsumerEmploymentHistory->EmployerDetail);?></td>
									<td><?php echo (is_object($ConsumerEmploymentHistory->Designation)?"":$ConsumerEmploymentHistory->Designation);?></td>									
									<td><?php echo (is_object($ConsumerEmploymentHistory->LastUpdatedDate)?"":$ConsumerEmploymentHistory->LastUpdatedDate);?></td>
								</tr>

						<?php } 
						} else { ?>
								<tr>
										<td><?php echo (is_object($myConsumerEmploymentHistory->EmployerDetail)?"":$myConsumerEmploymentHistory->EmployerDetail);?></td>
										<td><?php echo (is_object($myConsumerEmploymentHistory->Designation)?"":$myConsumerEmploymentHistory->Designation);?></td>
										<td><?php echo (is_object($myConsumerEmploymentHistory->LastUpdatedDate)?"":$myConsumerEmploymentHistory->LastUpdatedDate);?></td>
								</tr>
						<?php } ?>
                </table>
				<?php } else { ?>
                 <div>
                    <span>Employment History Not Found</span><br>
                </div>
				<?php } ?>
            </div>
          </div>
		</div>
    </div>
	</div>
</section>
</body>

</html>
