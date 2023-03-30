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
		 $hasMultiRecords = true;
	 }else{
		 $myData = $familyData->Consumer->RealTimeIDV;
		 $hasMultiRecords  = false;
	 }
 
?>
<div>
     <div class="title-head">
	 <img src="<?php echo base_url();?>/pdf-resources/images/logo.png" alt="logo" style="width: 730px;"/> 
     </div>
	 
	 <div>
	 <h3 class="box-title" style="text-align: right;">Lineage Report</h3>
     </div>
     
</div>
  
 <hr class="hr-line"/>
 <div class="col">
 	<div class="title-head"><strong>Home Affairs Verification</strong></div>
<?php if($hasMultiRecords == true){
	foreach($familyData->Consumer as $ConsumerKey => $ConsumerValue){
		$ConsumerValueX = $ConsumerValue;
		$ConsumerValue = $ConsumerValue->RealTimeIDV;
	?> 
   
   <table class="table-list">
        <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
		<th></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID No</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HAIDNO)?"":$ConsumerValue->HAIDNO);?></td>
		<td rowspan="7">
		<?php
			if($ConsumerValueX->BioMetricVerificationResult->HasImage == 'True'){
				echo '<img width="160" height="200" src="data:image/gif;base64,' . $ConsumerValueX->BioMetricVerificationResult->Base64StringJpeg2000Image . '" />';
			}else {
				echo '<img width="160" height="200" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/4QBWRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAAAAAEsAAAAAQAAASwAAAAB/+0ALFBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAAAPHAFaAAMbJUccAQAAAgAEAP/hDIFodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0n77u/JyBpZD0nVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkJz8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0nYWRvYmU6bnM6bWV0YS8nIHg6eG1wdGs9J0ltYWdlOjpFeGlmVG9vbCAxMC4xMCc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczp0aWZmPSdodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyc+CiAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICA8dGlmZjpYUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpYUmVzb2x1dGlvbj4KICA8dGlmZjpZUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpZUmVzb2x1dGlvbj4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6eG1wTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nPgogIDx4bXBNTTpEb2N1bWVudElEPmFkb2JlOmRvY2lkOnN0b2NrOmE5ZDg3YzBmLTY5NGYtNDU2Ny04ZmVhLWIxMzhkNjJkNmI5NTwveG1wTU06RG9jdW1lbnRJRD4KICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOjMyZTk1ZmJmLTYyNDItNGRiMS05Y2I1LTViNzQzMDUyMDU2ZTwveG1wTU06SW5zdGFuY2VJRD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwADAgIDAgIDAwMDBAMDBAUIBQUEBAUKBwcGCAwKDAwLCgsLDQ4SEA0OEQ4LCxAWEBETFBUVFQwPFxgWFBgSFBUU/8AACwgA8ADwAQERAP/EAB0AAQABBQEBAQAAAAAAAAAAAAAHAgQFBggDAQn/xAA+EAACAQMBBQUDCQYHAQAAAAAAAQIDBAURBgchMWESQVFxgRORoRQiJDJCUmKxwiMzcoLB0RUWQ0RjkqLh/9oACAEBAAA/AP1TAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjaRhMlttgcQ2rvK2tOa5w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"/>';
			}
		?>
		</td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">First Name</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HANames)?"":$ConsumerValue->HANames);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Surname</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HASurname)?"":$ConsumerValue->HASurname);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Deceased Status</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HADeceasedStatus)?"":$ConsumerValue->HADeceasedStatus);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID Book Issue Date</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HAIDBookIssuedDate)?"":$ConsumerValue->HAIDBookIssuedDate);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID Card Issued</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->IdCardInd)?"":$ConsumerValue->IdCardInd);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID Card Issued Date</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HAIDCardDate)?"":$ConsumerValue->HAIDCardDate);?></td>
        </tr>
		
        <tr class="tr-label">
        <td class="td-label">Gender</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HAGender)?"":$ConsumerValue->HAGender);?></td>
        </tr>
		
        <tr class="tr-label">
        <td class="td-label">Marriage Status</td>
        <td class="td-value"><?php echo (is_object($ConsumerValue->HAMarriageStatus)?"":$ConsumerValue->HAMarriageStatus);?></td>
        </tr>
		
        <tr class="tr-label">
        <td class="td-label">Relationship</td>
        <td class="td-value"><?php echo (is_object($ConsumerValueX->Relationship->Relation)?"":$ConsumerValueX->Relationship->Relation);?></td>
        </tr>
    </table> 
	 <hr class="hr-line"/>
<?php } } else { ?>	
  <table class="table-list">
        <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
		<th></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">ID No</td>
        <td class="td-value"><?php echo (is_object($myData->HAIDNO)?"":$myData->HAIDNO);?></td>
		<td rowspan="7">
		<?php
			if($familyData->Consumer->BioMetricVerificationResult->HasImage == 'True'){
				echo '<img width="160" height="200" src="data:image/gif;base64,' . $familyData->Consumer->BioMetricVerificationResult->Base64StringJpeg2000Image . '" />';
			}else {
				echo '<img width="160" height="200" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/4QBWRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAAAAAEsAAAAAQAAASwAAAAB/+0ALFBob3Rvc2hvcCAzLjAAOEJJTQQEAAAAAAAPHAFaAAMbJUccAQAAAgAEAP/hDIFodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0n77u/JyBpZD0nVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkJz8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0nYWRvYmU6bnM6bWV0YS8nIHg6eG1wdGs9J0ltYWdlOjpFeGlmVG9vbCAxMC4xMCc+CjxyZGY6UkRGIHhtbG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+CgogPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczp0aWZmPSdodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyc+CiAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICA8dGlmZjpYUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpYUmVzb2x1dGlvbj4KICA8dGlmZjpZUmVzb2x1dGlvbj4zMDAvMTwvdGlmZjpZUmVzb2x1dGlvbj4KIDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1sbnM6eG1wTU09J2h0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8nPgogIDx4bXBNTTpEb2N1bWVudElEPmFkb2JlOmRvY2lkOnN0b2NrOmE5ZDg3YzBmLTY5NGYtNDU2Ny04ZmVhLWIxMzhkNjJkNmI5NTwveG1wTU06RG9jdW1lbnRJRD4KICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOjMyZTk1ZmJmLTYyNDItNGRiMS05Y2I1LTViNzQzMDUyMDU2ZTwveG1wTU06SW5zdGFuY2VJRD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwADAgIDAgIDAwMDBAMDBAUIBQUEBAUKBwcGCAwKDAwLCgsLDQ4SEA0OEQ4LCxAWEBETFBUVFQwPFxgWFBgSFBUU/8AACwgA8ADwAQERAP/EAB0AAQABBQEBAQAAAAAAAAAAAAAHAgQFBggDAQn/xAA+EAACAQMBBQUDCQYHAQAAAAAAAQIDBAURBgchMWESQVFxgRORoRQiJDJCUmKxwiMzcoLB0RUWQ0RjkqLh/9oACAEBAAA/AP1TAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPjaRhMlttgcQ2rvK2tOa5w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"/>';
			}
		?>
		</td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">First Name</td>
        <td class="td-value"><?php echo (is_object($myData->HANames)?"":$myData->HANames);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Surname</td>
        <td class="td-value"><?php echo (is_object($myData->HASurname)?"":$myData->HASurname);?></td>
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
		
        <tr class="tr-label">
        <td class="td-label">Gender</td>
        <td class="td-value"><?php echo (is_object($myData->HAGender)?"":$myData->HAGender);?></td>
        </tr>
		
        <tr class="tr-label">
        <td class="td-label">Marriage Status</td>
        <td class="td-value"><?php echo (is_object($myData->HAMarriageStatus)?"":$myData->HAMarriageStatus);?></td>
        </tr>
		
        <tr class="tr-label">
        <td class="td-label">Relationship</td>
        <td class="td-value"><?php echo (is_object($familyData->Consumer->Relationship->Relation)?"":$familyData->Consumer->Relationship->Relation);?></td>
        </tr>
    </table>
<?php } ?>
 </div><br/>
		 
  </body>
</html>