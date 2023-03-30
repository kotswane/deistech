<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trace Report</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>pdf-resources/css/style.css"/>
</head>
<body>
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

$MaritalStatus = $myData->HAMarriageStatus;
if($myData->HAMarriageStatus == "MARRIED"){
	if($myData->HASpouseID == $theirData->HAIDNO){
		$SpouseName = $theirData->HANames;
		$SpouseSurname = $theirData->HASurname;
		$SpouseIDNo = $theirData->HAIDNO;
	}
}

 if (!is_array($report['ConsumerDetail']['FirstName'])){
	 $firstName = $report['ConsumerDetail']['FirstName']." ";
 }
 if (!is_array($report['ConsumerDetail']['SecondName'])){
	 $secondName = $report['ConsumerDetail']['SecondName'];
 }
 
 if (!is_array($report['ConsumerDetail']['Surname'])){
	 $Surname = $report['ConsumerDetail']['Surname'];
 }
 
 $ID = $report['ConsumerDetail']['IDNo'];
 $name=$firstName.$secondName;
 
?>
<div>
     <div class="title-head">
	 <img src="<?php echo base_url();?>/pdf-resources/images/logo.png" alt="logo" style="width: 730px;"/> 
     </div>
	 
	 <div>
	 <h3 class="box-title" style="text-align: right;">Indigent Report</h3>
     </div>
     
</div>
  
 <hr class="hr-line"/>
 <div class="col">
 	<div class="title-head"><strong>Home Affairs Verification</strong></div>
   <table class="table-list">
        <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
		<th></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID No</td>
        <td class="td-value"><?php echo $ID;?></td>
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
         <tr class="tr-label">
        <td class="td-label">First Name</td>
        <td class="td-value"><?php echo $name;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Surname</td>
        <td class="td-value"><?php echo $Surname;?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Deceased Status</td>
        <td class="td-value"><?php echo (is_object($myData->HADeceasedStatus)?"":$myData->HADeceasedStatus);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID Book Issue Date</td>
        <td class="td-value"><?php echo (is_object($myData->HAIDBookIssuedDate)?"":$myData->HAIDBookIssuedDate);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID Card Issued</td>
        <td class="td-value"><?php echo (is_object($myData->IdCardInd)?"":$myData->IdCardInd);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID Card Issued Date</td>
        <td class="td-value"><?php echo (is_object($myData->HAIDCardDate)?"":$myData->HAIDCardDate);?></td>
        </tr>
    </table>              
 </div><br/><br/>

 <div class="col">
	<div class="title-head"><strong>Spouse Details</strong></div>
	<hr class="hr-line"/>
   <table class="table-list">
        <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
        </tr>
		<?php if($MaritalStatus == "MARRIED"){?>
        <tr class="tr-label">
        <td class="td-label">Marital Status</td>
        <td class="td-value"><?php echo (is_object($myData->HAMarriageStatus)?"":$myData->HAMarriageStatus);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Marriage Date</td>
        <td class="td-value"><?php echo (is_object($myData->HAMarriageDate)?"":$myData->HAMarriageDate);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Spouse Name</td>
        <td class="td-value"><?php echo (is_object($SpouseName)?"":$SpouseName);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Spouse Surname</td>
        <td class="td-value"><?php echo (is_object($SpouseSurname)?"":$SpouseSurname);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Spouse ID No</td>
        <td class="td-value"><?php echo (is_object($SpouseIDNo)?"":$SpouseIDNo);?></td>
        </tr>
		<?php } else { ?>
		<td class="td-label" colspane="2"><?php echo (is_object($MaritalStatus)?"":$MaritalStatus);?></td>
		<?php }?>
    </table>              
		</div><br/><br/>

	<div class="col">
		<div class="title-head"><strong>Income and scoring</strong></div>
		<hr class="hr-line"/>
		<table class="table-list">
			<tr>
				<th class="th-size-first-fraud"></th>
				<th class="th-size-second-fraud"></th>
			</tr>
			<tr class="tr-label">
				<td class="td-label">Estimate</td>
				<td class="td-value"><?php echo (is_array($report['ConsumerScoring']['FinalScore'])?"":$report['ConsumerScoring']['FinalScore']);?></td>
			</tr>
			<tr class="tr-label">
				<td class="td-label">Bracket</td>
				<td class="td-value"><?php echo (is_array($report['ConsumerAffordability']['PredictedIncome'])?"":$report['ConsumerAffordability']['PredictedIncome']);?></td>
			</tr>
			<tr class="tr-label">
				<td class="td-label">Confidence</td>
				<td class="td-value"><?php echo (is_array($report['ConsumerScoring']['classification'])?"":$report['ConsumerScoring']['classification']);?></td>
			</tr>
			<tr class="tr-label">
				<td class="td-label">Category</td>
				<td class="td-value"><?php echo (is_array($report['ConsumerScoring']['RiskCategory'])?"":$report['ConsumerScoring']['RiskCategory']);?></td>
			</tr>	
			<tr class="tr-label">
				<td class="td-label">Exception</td>
				<td class="td-value"><?php echo (is_array($report['ConsumerScoring']['Exception_Code'])?"":$report['ConsumerScoring']['Exception_Code']);?></td>
			</tr>			
		</table>
	</div><br/><br/>

		<div class="title-head"><strong>Directorship(s)</strong></div>
		<hr class="hr-line"/>
		<div class="col">
		<?php if($directorship){ ?>
		 <table class ="table-list">
		<tr class="tr-list">
			<th class = "th-list">Company Name</th>
			<th class = "th-list">Registration Number</th>
			<th class = "th-list">Director Status</th>
			<th class = "th-list">Company Status</th>
		</tr>
		<?php 
			if(!is_object($directorship)){
	
				foreach($directorship as $director){
					if(is_object($director)){
					?>
					<tr class="border_bottom">
						<td><?php echo (is_object($director->CommercialName)?"":$director->CommercialName);?></td>
						<td><?php echo (is_object($director->RegistrationNo)?"":$director->RegistrationNo);?></td>
						<td><?php echo (is_object($director->DirectorStatus)?"":$director->DirectorStatus);?></td>
						<td><?php echo (is_object($director->CommercialStatus)?"":$director->CommercialStatus);?></td>
					</tr>
					<?php } else { 
						foreach($director as $directorx){?>
							<tr class="border_bottom">
								<td><?php echo (is_object($directorx->CommercialName)?"":$directorx->CommercialName);?></td>
								<td><?php echo (is_object($directorx->RegistrationNo)?"":$directorx->RegistrationNo);?></td>
								<td><?php echo (is_object($directorx->DirectorStatus)?"":$directorx->DirectorStatus);?></td>
								<td><?php echo (is_object($directorx->CommercialStatus)?"":$directorx->CommercialStatus);?></td>
							</tr>						
						<?php }
					}
				}
		   } else { ?>
			<tr>
					<td><?php echo (is_object($directorship->CommercialName)?"":$directorship->CommercialName);?></td>
					<td><?php echo  (is_object($directorship->RegistrationNo)?"":$directorship->RegistrationNo);?></td>
					<td><?php echo (is_object($directorship->DirectorStatus)?"":$directorship->DirectorStatus);?></td>
					<td><?php echo (is_object($directorship->CommercialStatus)?"":$directorship->CommercialStatus);?></td>
			</tr>							 
		 <?php } ?>
		</table>
	<?php } else { ?>
	 <table class="table-list">
		<tr><td>Directorship(s) Not Found</td></tr>
	</table>
	<?php } ?>
	</div><br/><br/>
		
		<div class="col">
		 <div class="title-head"><strong>Address History</strong></div>
		<hr class="hr-line"/>
		<?php if($myConsumerAddressHistory){ ?>
		 <table class="table-list">
			<tr class="tr-list">
				<th class = "th-list">Type</th>
				<th  class = "th-list">Full Address</th>
				<th  class = "th-list">LastUpdatedDate</th>
			</tr>
			<?php 
			if(!is_object($myConsumerAddressHistory)>0){
				foreach($myConsumerAddressHistory as $ConsumerAddressHistory){ ?>
				<tr class="border_bottom">
					<td><?php echo (is_object($ConsumerAddressHistory->AddressType)?"":$ConsumerAddressHistory->AddressType);?></td>
					<td><?php echo (is_object($ConsumerAddressHistory->Address)?"":$ConsumerAddressHistory->Address);?></td>
					<td><?php echo (is_object($ConsumerAddressHistory->LastUpdatedDate)?"":$ConsumerAddressHistory->LastUpdatedDate);?></td>
				</tr>
				<?php }
			} else { ?>
				<tr class="border_bottom">
					<td><?php echo (is_object($myConsumerAddressHistory->AddressType)?"":$myConsumerAddressHistory->AddressType);?></td>
					<td><?php echo (is_object($myConsumerAddressHistory->Address)?"":$myConsumerAddressHistory->Address);?></td>
					<td><?php echo (is_object($myConsumerAddressHistory->LastUpdatedDate)?"":$myConsumerAddressHistory->LastUpdatedDate);?></td>
				</tr>							
			<?php } ?>
		</table>
		<?php } else { ?>
			 <table class ="table-list">
				<tr><td>Address History Not Found</td></tr>
			</table>
		<?php } ?>
  
		</div><br/><br/>
		 <!-- End of Potential Fraud Indicators-->
		  <!-- Start of Contact No. History-->
		<div class="title-head"><strong>Contact No. History</strong></div>
		<hr class="hr-line"/>
		<div class="col">
		<?php if($myConsumerTelephoneHistory){?>
		 <table class ="table-list">
		<tr class="tr-list">
			<th class = "th-list">Type</th>
			<th class = "th-list">Full Number</th>
			<th class = "th-list">LastUpdatedDate</th>
		</tr>
		<?php 
			if(!is_object($myConsumerTelephoneHistory)){
				foreach($myConsumerTelephoneHistory as $ConsumerTelephoneHistory){?>
				<tr class="border_bottom">
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
		 <?php } ?>
		</table>
	<?php } else { ?>
	 <table class ="table-list">
		<tr><td>Contact Number Not Found</td></tr>
	</table>
	<?php } ?>
	</div><br/><br/>

		 <div class="title-head"><strong>Employment History</strong></div>
		<hr class="hr-line"/>
		<div class="col">
		<?php if($myConsumerEmploymentHistory){ ?>
			<table class ="table-list">
			<tr class="tr-list">
				<th class = "th-list">Employer Name</th>
				<th class = "th-list">Designation</th>
				<th class = "th-list">LastUpdatedDate</th>
			</tr>
		<?php 
			if(!is_object($myConsumerEmploymentHistory)){
				foreach($myConsumerEmploymentHistory as $ConsumerEmploymentHistory){?>
				<tr class="border_bottom">
						<td><?php echo (is_object($ConsumerEmploymentHistory->EmployerDetail)?"":$ConsumerEmploymentHistory->EmployerDetail);?></td>
						<td><?php echo (is_object($ConsumerEmploymentHistory->Designation)?"":$ConsumerEmploymentHistory->Designation);?></td>									
						<td><?php echo (is_object($ConsumerEmploymentHistory->LastUpdatedDate)?"":$ConsumerEmploymentHistory->LastUpdatedDate);?></td>
				</tr>
			<?php }
			} else{?>
				<tr class="border_bottom">
						<td><?php echo (is_object($myConsumerEmploymentHistory->EmployerDetail)?"":$myConsumerEmploymentHistory->EmployerDetail);?></td>
						<td><?php echo (is_object($myConsumerEmploymentHistory->Designation)?"":$myConsumerEmploymentHistory->Designation);?></td>
						<td><?php echo (is_object($myConsumerEmploymentHistory->LastUpdatedDate)?"":$myConsumerEmploymentHistory->LastUpdatedDate);?></td>
				</tr>						
			<?php } ?>
			</table>
		<?php } else { ?>
	 <table class ="table-list">
		<tr><td>Employment History Not Found</td></tr>
	</table>
	<?php } ?>
	</div><br/>

			 
  </body>
</html>