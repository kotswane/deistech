<!DOCTYPE html>
<html lang="en">
<head>
    <title>Procurement Report</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>pdf-resources/css/style.css"/>
</head>
<body>
<div>
     <div class="title-head">
	 <img src="<?php echo base_url();?>/pdf-resources/images/logo.png" alt="logo" style="width: 730px;"/> 
     </div>
	 
	 <div>
	 <h3 class="box-title" style="text-align: right;">Procurement Report</h3>
     </div>
     
</div>

     <!-- Start of  Enquiry Input Details-->
   <hr class="hr_rule"/>
   <div class="panel-heading"><strong>Enquiry Input Details</strong>
   <h5 class="subpanel-heading"><?php echo $report->SubscriberInputDetails->SubscriberUserName." search input details";?></h5>
  </div>
   <hr class="hr-line"/>
 <div class="col">
   <table class="table-list">
        <tr class="border_bottom">
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Enquiry Date</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryDate;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Type</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryType;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Subscriber Name</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->SubscriberName;?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Subscriber User Name</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->SubscriberUserName;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Input</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryInput;?></td>
        </tr>
    </table>              
 </div><br />

   <hr class="hr_rule"/>
   <div class="panel-heading"><strong>Company Statutory Information</strong>
   <h5 class="subpanel-heading">This section displays the Personal information for the consumer. Included here is ID or Passport, Name, Gender, Marital Status,
Current Contact, Address, and Employment Info.</h5>
  </div>
   <hr class="hr-line"/>
 <div class="col">
   <table class="table-list">
        <tr class="border_bottom">
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Reference No</td>
        <td class="td-value"><?php echo $report->CommercialBusinessInformation->ReferenceNo;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Registered Business Name</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialName)?"":$report->CommercialBusinessInformation->CommercialName);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Previous Business Name</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNo)?"":$report->CommercialBusinessInformation->RegistrationNo);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Registration Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNo)?"":$report->CommercialBusinessInformation->RegistrationNo);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">BusinessStart Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BusinessStartDate)?"":$report->CommercialBusinessInformation->BusinessStartDate);?></td>
        </tr>
		
		 <tr class="tr-label">
        <td class="td-label">Financial Year End</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->FinancialYearEnd)?"":$report->CommercialBusinessInformation->FinancialYearEnd);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Registration Number Old</td>
        <td class="td-value"><?php (is_object($report->CommercialBusinessInformation->RegistrationNoOld)?"":$report->CommercialBusinessInformation->RegistrationNoOld);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Business Status</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatus)?"":$report->CommercialBusinessInformation->CommercialStatus);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Business Type</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialType)?"":$report->CommercialBusinessInformation->CommercialType);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Tax Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->TaxNo)?"":$report->CommercialBusinessInformation->TaxNo);?></td>
        </tr>
		
		 <tr class="tr-label">
        <td class="td-label">Trade Name</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->TradeName)?"":$report->CommercialBusinessInformation->TradeName);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Physical Address</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->PhysicalAddress)?"":$report->CommercialBusinessInformation->PhysicalAddress);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Postal Address</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->PostalAddress)?"":$report->CommercialBusinessInformation->PostalAddress);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Registration Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationDate)?"":$report->CommercialBusinessInformation->RegistrationDate);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Telephone Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->TelephoneNo)?"":$report->CommercialBusinessInformation->TelephoneNo);?></td>
        </tr>
		
		
		 <tr class="tr-label">
        <td class="td-label">Fax Number</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->FaxNo)?"":$report->CommercialBusinessInformation->FaxNo);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Bussiness Email</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BussEmail)?"":$report->CommercialBusinessInformation->BussEmail);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Bussiness Website</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BussWebsite)?"":$report->CommercialBusinessInformation->BussWebsite);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Age of Business</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->AgeofBusiness)?"":$report->CommercialBusinessInformation->AgeofBusiness);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Authorised Capital Amount</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedCapitalAmt)?"":$report->CommercialBusinessInformation->AuthorisedCapitalAmt);?></td>
        </tr>
		
		
		 <tr class="tr-label">
        <td class="td-label">Issued Number Of Shares</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->IssuedNoOfShares)?"":$report->CommercialBusinessInformation->IssuedNoOfShares);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Registration Number Converted</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNoConverted)?"":$report->CommercialBusinessInformation->RegistrationNoConverted);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Financial Effective Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->FinancialEffectiveDate)?"":$report->CommercialBusinessInformation->FinancialEffectiveDate);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Authorised Number Of Shares</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedNoOfShares)?"":$report->CommercialBusinessInformation->AuthorisedNoOfShares);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Issued Capital Amount</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->IssuedCapitalAmt)?"":$report->CommercialBusinessInformation->IssuedCapitalAmt);?></td>
        </tr>
		
		
		 <tr class="tr-label">
        <td class="td-label">Commercial Status Date</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatusDate)?"":$report->CommercialBusinessInformation->CommercialStatusDate);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Description of Business</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->BusinessDesc)?"":$report->CommercialBusinessInformation->BusinessDesc);?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">SICC Code</td>
        <td class="td-value"><?php echo (is_object($report->CommercialBusinessInformation->SIC)?"":$report->CommercialBusinessInformation->SIC);?></td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Legal Entity</td>
        <td class="td-value"><?php echo (is_object($report->SubscriberInputDetails->LegalEntity)?"":$report->SubscriberInputDetails->LegalEntity);?></td>
		<?php if($blackListed->id) { ?>
		<tr>
			<td></td>
			<td style="color: red; text-align: centre;">Blacklisted by <?php echo $blackListed->authorizeby." for ".$blackListed->reason;?></td>
		</tr>
		<?php } ?>
    </table>              
 </div><br />  
   
 <hr class="hr_rule"/>
 <div class="panel-heading"><strong>Commercial Score</strong>
   <?php if($report->CommercialScoring){ ?>
	<table class="table-list">
		<tr class="border_bottom">
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Commercial ID</td>
						 <td><?php echo $report->CommercialScoring->CommercialID;?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Score Date</td>
						 <td><?php echo $report->CommercialScoring->ScoreDate;?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Final Score</td>
						 <td><?php echo $report->CommercialScoring->FinalScore;?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Band</td>
						 <td><?php echo $report->CommercialScoring->Band;?></td>
					</tr>
				 </table>
			</td>
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Score</td>
						 <td>Band / Message</td>
					</tr>						
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange1;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message1;?></td>
					</tr>
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange2;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message2;?></td>
					</tr>
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange3;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message3;?></td>
					</tr>
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange4;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message4;?></td>
					</tr>
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange5;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message5;?></td>
					</tr>
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange6;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message6;?></td>
					</tr>
					<tr class="border_bottom">
						<td><?php echo $report->CommercialScoring->ScoreBandRange7;?></td>
						<td><?php echo $report->CommercialScoring->Band_x002F_Message7;?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
   <?php } ?>
  </div><br />
                     <!-- End of Address History-->				 
<div class="col">
	 <div class="panel-heading"><strong>Auditors</strong></div>
	<hr class="hr-line"/>
	<?php if($report->CommercialAuditorInformation){ 
		if(!is_object($report->CommercialAuditorInformation)){
			foreach($report->CommercialAuditorInformation as $CommercialAuditorInformation => $CommercialAuditorInformation){ ?>
			<div class="panel-heading"><strong>Active Auditor: <?php echo $CommercialAuditorInformation->AuditorName;?></strong></div>
			<hr class="hr-line"/>
			<table class="table-list">
				<tr class="border_bottom">
					<td>
						<table class="table-list">
							<tr class="border_bottom">
								 <td>Auditor Name</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->AuditorName)?"":$CommercialAuditorInformation->AuditorName);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Profession No</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->ProfessionNo)?"":$CommercialAuditorInformation->ProfessionNo);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Auditor Status</td>
								 <td><?php echo (($CommercialAuditorInformation->AuditorStatusDesc == "Current")?"Active":$CommercialAuditorInformation->AuditorStatusDesc);?></td>
							</tr>
						 </table>
					</td>
					<td>
						<table class="table-list">
							<tr class="border_bottom">
								 <td>Auditor Start Date</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->ActStartdate)?"":$CommercialAuditorInformation->ActStartdate);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Profession Code</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->ProfessionDesc)?"":$CommercialAuditorInformation->ProfessionDesc);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Auditor Type Code</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->AuditorTypeDesc)?"":$CommercialAuditorInformation->AuditorTypeDesc);?></td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table-list">
							<tr class="border_bottom">
							 <td>Physical Address</td>
							 <td><?php echo (is_object($CommercialAuditorInformation->PhysicalAddress)?"":$CommercialAuditorInformation->PhysicalAddress);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Postal Address</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->PostalAddress)?"":$CommercialAuditorInformation->PostalAddress);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Update Date</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->LastUpdatedDate)?"":$CommercialAuditorInformation->LastUpdatedDate);?></td>
							</tr>
						 </table>
					 </td>
					 <td>
						<table class="table-list">
							<tr class="border_bottom">
								 <td>No of years in Business</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->NoOfYearsInbBusiness)?"":$CommercialAuditorInformation->NoOfYearsInbBusiness);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Auditor End Date</td>
								 <td><?php echo (is_object($CommercialAuditorInformation->ActEndDate)?"":$CommercialAuditorInformation->ActEndDate);?></td>
							</tr>
							<tr class="border_bottom">
								<td colspan="2">&nbsp;</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<?php }
		} else { ?>
				<div class="panel-heading">Active Auditor: <?php echo $report->CommercialAuditorInformation->AuditorName;?></div>
				<hr class="hr-line"/>
				<table class="table-list">
					<tr class="border_bottom">
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Auditor Name</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->AuditorName)?"":$report->CommercialAuditorInformation->AuditorName);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Profession No</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->ProfessionNo)?"":$report->CommercialAuditorInformation->ProfessionNo);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Auditor Status</td>
									 <td><?php echo (($report->CommercialAuditorInformation->AuditorStatusDesc == "Current")?"Active":$report->CommercialAuditorInformation->AuditorStatusDesc);?></td>
								</tr>
							 </table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Auditor Start Date</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->ActStartdate)?"":$report->CommercialAuditorInformation->ActStartdate);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Profession Code</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->ProfessionDesc)?"":$report->CommercialAuditorInformation->ProfessionDesc);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Auditor Type Code</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->AuditorTypeDesc)?"":$report->CommercialAuditorInformation->AuditorTypeDesc);?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
								 <td>Physical Address</td>
								 <td><?php echo (is_object($report->CommercialAuditorInformation->PhysicalAddress)?"":$report->CommercialAuditorInformation->PhysicalAddress);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Postal Address</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->PostalAddress)?"":$report->CommercialAuditorInformation->PostalAddress);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Update Date</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->LastUpdatedDate)?"":$report->CommercialAuditorInformation->LastUpdatedDate);?></td>
								</tr>
							 </table>
						 </td>
						 <td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>No of years in Business</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->NoOfYearsInbBusiness)?"":$report->CommercialAuditorInformation->NoOfYearsInbBusiness);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Auditor End Date</td>
									 <td><?php echo (is_object($report->CommercialAuditorInformation->ActEndDate)?"":$report->CommercialAuditorInformation->ActEndDate);?></td>
								</tr>
								<tr class="border_bottom">
									<td colspan="2">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					
				</table>		
		<?php } ?>
	
	<?php } else { ?>
	<span>Auditors Not Found</span><br>
	<?php } ?>
</div><br />

<div class="col">
 <div class="panel-heading"><strong>Commercial Address History</strong></div>
<hr class="hr-line"/>
<?php if($report->XDSCommercialAddressHistory){ ?>
 <table class="table-list">
	<tr class="tr-list">
		<th class = "th-list">Date captured</th>
		<th  class = "th-list">Date Changed</th>
		<th  class = "th-list">Type</th>
		<th  class = "th-list">Line1</th>
		<th  class = "th-list">Line2</th>
		<th  class = "th-list">Line3</th>
		<th  class = "th-list">Line4</th>
		<th  class = "th-list">Postal Codes</th>
	</tr>
	<?php 
	if(!is_object($report->XDSCommercialAddressHistory)){
		foreach($report->XDSCommercialAddressHistory as $XDSCommercialAddressHistoryKey => $XDSCommercialAddressHistory){ ?>
		<tr class="border_bottom">
			<td><?php echo (is_object($XDSCommercialAddressHistory->CreatedOnDate)?"":$XDSCommercialAddressHistory->CreatedOnDate);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->OccupiedDate)?"":$XDSCommercialAddressHistory->OccupiedDate);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->AddressType)?"":$XDSCommercialAddressHistory->AddressType);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->Address1)?"":$XDSCommercialAddressHistory->Address1);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->Address2)?"":$XDSCommercialAddressHistory->Address2);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->Address3)?"":$XDSCommercialAddressHistory->Address3);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->Address4)?"":$XDSCommercialAddressHistory->Address4);?></td>
			<td><?php echo (is_object($XDSCommercialAddressHistory->PostalCode)?"":$XDSCommercialAddressHistory->PostalCode);?></td>									
		</tr>
		<?php }
	} else { ?>
		<tr class="border_bottom">
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->CreatedOnDate)?"":$report->XDSCommercialAddressHistory->CreatedOnDate);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->OccupiedDate)?"":$report->XDSCommercialAddressHistory->OccupiedDate);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->AddressType)?"":$report->XDSCommercialAddressHistory->AddressType);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address1)?"":$report->XDSCommercialAddressHistory->Address1);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address2)?"":$report->XDSCommercialAddressHistory->Address2);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address3)?"":$report->XDSCommercialAddressHistory->Address3);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address4)?"":$report->XDSCommercialAddressHistory->Address4);?></td>
			<td><?php echo (is_object($report->XDSCommercialAddressHistory->PostalCode)?"":$report->XDSCommercialAddressHistory->PostalCode);?></td>							
		</tr>							
	<?php } ?>
</table>
<?php } else { ?>
<span>Commercial Address History Not Found</span><br>
<?php } ?>
</div><br />

<div class="col">
 <div class="panel-heading"><strong>Commercial Contact History</strong></div>
<hr class="hr-line"/>
<?php if($report->XDSCommercialContactHistory){ ?>
 <table class="table-list">
	<tr class="tr-list">
		<th class = "th-list">Date captured</th>
		<th  class = "th-list">Date Changed</th>
		<th  class = "th-list">Type</th>
		<th  class = "th-list">Line1</th>
	</tr>
	<?php 
	if(!is_object($report->XDSCommercialContactHistory)){
		foreach($report->XDSCommercialContactHistory as $XDSCommercialContactHistory){ ?>
		<tr class="border_bottom">
			<td><?php echo (is_object($XDSCommercialContactHistory->CreatedOnDate)?"":$XDSCommercialContactHistory->CreatedOnDate);?></td>
			<td><?php echo (is_object($XDSCommercialContactHistory->OccupiedDate)?"":$XDSCommercialContactHistory->OccupiedDate);?></td>
			<td><?php echo (is_object($XDSCommercialContactHistory->ContactNumberType)?"":$XDSCommercialContactHistory->ContactNumberType);?></td>
			<td><?php echo (is_object($XDSCommercialContactHistory->Detail)?"":$XDSCommercialContactHistory->Detail);?></td>									
		</tr>
		<?php }
	} else { ?>
		<tr class="border_bottom">
			<td><?php echo (is_object($report->XDSCommercialContactHistory->CreatedOnDate)?"":$report->XDSCommercialContactHistory->CreatedOnDate);?></td>
			<td><?php echo (is_object($report->XDSCommercialContactHistory->OccupiedDate)?"":$report->XDSCommercialContactHistory->OccupiedDate);?></td>
			<td><?php echo (is_object($report->XDSCommercialContactHistory->ContactNumberType)?"":$report->XDSCommercialContactHistory->ContactNumberType);?></td>
			<td><?php echo (is_object($report->XDSCommercialContactHistory->Detail)?"":$report->XDSCommercialContactHistory->Detail);?></td>							
		</tr>							
	<?php } ?>
</table>
<?php } else { ?>
<span>Commercial Contact History Not Found</span><br>
<?php } ?>
</div><br />

<div class="col">
 <div class="panel-heading"><strong>Company Vat Information</strong></div>
<hr class="hr-line"/>
<?php if($report->CommercialVATInformation){ ?>
 <table class="table-list">
	<tr class="tr-list">
		<th class = "th-list">Company Name</th>
		<th  class = "th-list">Trading Name</th>
		<th  class = "th-list">VAT Number</th>
		<th  class = "th-list">VAT Liable Date</th>
		<th  class = "th-list">Status</th>
		<th  class = "th-list">Status Date</th>
	</tr>
	<?php 
	if(!is_object($report->CommercialVATInformation)){
		foreach($report->CommercialVATInformation as $CommercialVATInformation){ ?>
		<tr class="border_bottom">
			<td><?php echo (is_object($CommercialVATInformation->CommercialName)?"":$CommercialVATInformation->CommercialName);?></td>
			<td><?php echo (is_object($CommercialVATInformation->TradeName)?"":$CommercialVATInformation->TradeName);?></td>
			<td><?php echo (is_object($CommercialVATInformation->VATNumber)?"":$CommercialVATInformation->VATNumber);?></td>
			<td><?php echo (is_object($CommercialVATInformation->VATLiableDate)?"":$CommercialVATInformation->VATLiableDate);?></td>
			<td><?php echo (is_object($CommercialVATInformation->Status)?"":$CommercialVATInformation->Status);?></td>
			<td><?php echo (is_object($CommercialVATInformation->StatusChangeDate)?"":$CommercialVATInformation->StatusChangeDate);?></td>								
		</tr>
		<?php }
	} else { ?>
		<tr class="border_bottom">
			<td><?php echo (is_object($report->CommercialVATInformation->CommercialName)?"":$report->CommercialVATInformation->CommercialName);?></td>
			<td><?php echo (is_object($report->CommercialVATInformation->TradeName)?"":$report->CommercialVATInformation->TradeName);?></td>
			<td><?php echo (is_object($report->CommercialVATInformation->VATNumber)?"":$report->CommercialVATInformation->VATNumber);?></td>
			<td><?php echo (is_object($report->CommercialVATInformation->VATLiableDate)?"":$report->CommercialVATInformation->VATLiableDate);?></td>
			<td><?php echo (is_object($report->CommercialVATInformation->Status)?"":$report->CommercialVATInformation->Status);?></td>
			<td><?php echo (is_object($report->CommercialVATInformation->StatusChangeDate)?"":$report->CommercialVATInformation->StatusChangeDate);?></td>							
		</tr>							
	<?php } ?>
</table>
<?php } else { ?>
<span>Company Vat Information Not Found</span><br>
<?php } ?>
</div><br />
					
<div class="col">
 <div class="panel-heading"><strong>Trade References</strong></div>
<hr class="hr-line"/>
<?php if($report->CommercialTradeReferencesInformation){ 
	if(is_object($report->CommercialTradeReferencesInformation)){
		?>
			<table class="table-list">
				<tr class="border_bottom">
					<td>
						<table class="table-list">
							<tr class="border_bottom">
								 <td>Date</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Createdondate)?"":$report->CommercialTradeReferencesInformation->Createdondate);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Supplier</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Supplier)?"":$report->CommercialTradeReferencesInformation->Supplier);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Contact</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->TelephoneContact)?"":$report->CommercialTradeReferencesInformation->TelephoneContact);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Surety Value</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->SuretyValue)?"":$report->CommercialTradeReferencesInformation->SuretyValue);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Notarial Bonds</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Nortarial)?"":$report->CommercialTradeReferencesInformation->Nortarial);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Age of Acc</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->AgeOfAccount)?"":$report->CommercialTradeReferencesInformation->AgeOfAccount);?></td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table-list">
							<tr class="border_bottom">
							 <td>Credit Limit</td>
							 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->CreditLimit)?"":$report->CommercialTradeReferencesInformation->CreditLimit);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Max Credit</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->MaxLimit)?"":$report->CommercialTradeReferencesInformation->MaxLimit);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Terms Given</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Terms)?"":$report->CommercialTradeReferencesInformation->Terms);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Average Purchase</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->AveragePurchases)?"":$report->CommercialTradeReferencesInformation->AveragePurchases);?></td>
							</tr>
							<tr class="border_bottom">
								 <td>Terms Taken</td>
								 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->TermsTaken)?"":$report->CommercialTradeReferencesInformation->TermsTaken);?></td>
							</tr>
							<tr class="border_bottom">
								<td>Comments</td>
								<td><?php echo (is_object($report->CommercialTradeReferencesInformation->Comment)?"":$report->CommercialTradeReferencesInformation->Comment);?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>								
		<?php
	} else {
		foreach($report->CommercialTradeReferencesInformation as $CommercialTradeReferencesInformation){ ?>
			<table class="table-list">
					<tr class="border_bottom">
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Date</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->Createdondate)?"":$CommercialTradeReferencesInformation->Createdondate);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Supplier</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->Supplier)?"":$CommercialTradeReferencesInformation->Supplier);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Contact</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->TelephoneContact)?"":$CommercialTradeReferencesInformation->TelephoneContact);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Surety Value</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->SuretyValue)?"":$CommercialTradeReferencesInformation->SuretyValue);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Notarial Bonds</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->Nortarial)?"":$CommercialTradeReferencesInformation->Nortarial);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Age of Acc</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->AgeOfAccount)?"":$CommercialTradeReferencesInformation->AgeOfAccount);?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
								 <td>Credit Limit</td>
								 <td><?php echo (is_object($CommercialTradeReferencesInformation->CreditLimit)?"":$CommercialTradeReferencesInformation->CreditLimit);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Max Credit</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->MaxLimit)?"":$CommercialTradeReferencesInformation->MaxLimit);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Terms Given</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->Terms)?"":$CommercialTradeReferencesInformation->Terms);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Average Purchase</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->AveragePurchases)?"":$CommercialTradeReferencesInformation->AveragePurchases);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Terms Taken</td>
									 <td><?php echo (is_object($CommercialTradeReferencesInformation->TermsTaken)?"":$CommercialTradeReferencesInformation->TermsTaken);?></td>
								</tr>
								<tr class="border_bottom">
									<td>Comments</td>
									<td><?php echo (is_object($CommercialTradeReferencesInformation->Comment)?"":$CommercialTradeReferencesInformation->Comment);?></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>								
		<?php }
	}
	?>

<?php } else { ?>
<span>Trade References Not Found</span><br>
<?php } ?>
</div><br />	

<div class="col">
 <div class="panel-heading"><strong>Judgments</strong></div>
<hr class="hr-line"/>
<?php if($report->CommercialJudgment){ ?>
<table class="table-list">
		<tr class="border_bottom">
			 <th class = "th-list">Case No.</th>
			 <th class = "th-list">Issue Date</th>
			 <th class = "th-list">Judgment Type</th>
			 <th class = "th-list">Amount</th>
			 <th class = "th-list">Plaintiff Name</th>
			 <th class = "th-list">Court Name</th>
			 <th class = "th-list">Attorney Name</th>
			 <th class = "th-list">Attorney Phone No</th>
			 <th class = "th-list">Commercial Name</th>
			 <th class = "th-list">Case Reason</th>
		</tr>
		<?php if(!is_array($report->CommercialJudgment)){?>
			<tr class="border_bottom">
				<td><?php echo (is_object($report->CommercialJudgment->CaseNumber)?"":$report->CommercialJudgment->CaseNumber);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->CaseFilingDate)?"":$report->CommercialJudgment->CaseFilingDate);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->CaseType)?"":$report->CommercialJudgment->CaseType);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->DisputeAmt)?"":$report->CommercialJudgment->DisputeAmt);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->PlaintiffName)?"":$report->CommercialJudgment->PlaintiffName);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->CourtName)?"":$report->CommercialJudgment->CourtName);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->AttorneyName)?"":$report->CommercialJudgment->AttorneyName);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->TelephoneNo)?"":$report->CommercialJudgment->TelephoneNo);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->CommercialName)?"":$report->CommercialJudgment->CommercialName);?></td>
				<td><?php echo (is_object($report->CommercialJudgment->CaseReason)?"":$report->CommercialJudgment->CaseReason);?></td>
			</tr>							
			<?php } else {
				foreach($report->CommercialJudgment as $CommercialJudgment){	
				?>	
				<tr class="border_bottom">
					<td><?php echo (is_object($CommercialJudgment->CreatedOnDate)?"":$CommercialJudgment->CreatedOnDate);?></td>
					<td><?php echo (is_object($CommercialJudgment->CaseFilingDate)?"":$CommercialJudgment->CaseFilingDate);?></td>
					<td><?php echo (is_object($CommercialJudgment->CaseType)?"":$CommercialJudgment->CaseType);?></td>
					<td><?php echo (is_object($CommercialJudgment->DisputeAmt)?"":$CommercialJudgment->DisputeAmt);?></td>
					<td><?php echo (is_object($CommercialJudgment->PlaintiffName)?"":$CommercialJudgment->PlaintiffName);?></td>
					<td><?php echo (is_object($CommercialJudgment->CourtName)?"":$CommercialJudgment->CourtName);?></td>
					<td><?php echo (is_object($CommercialJudgment->AttorneyName)?"":$CommercialJudgment->AttorneyName);?></td>
					<td><?php echo (is_object($CommercialJudgment->TelephoneNo)?"":$CommercialJudgment->TelephoneNo);?></td>
					<td><?php echo (is_object($CommercialJudgment->CommercialName)?"":$CommercialJudgment->CommercialName);?></td>
					<td><?php echo (is_object($CommercialJudgment->CaseReason)?"":$CommercialJudgment->CaseReason);?></td>
				</tr>							
				<?php } 
			}?>
			</table>
		<?php } else { ?>
		<span>Judgment Not Found</span><br>
		<?php } ?>
</div><br />	


<div class="col">
 <div class="panel-heading"><strong>Possible Judgment</strong></div>
<hr class="hr-line"/>
<?php if($report->CommercialPossibleJudgment){ ?>
<table class="table-list">
		<tr class="border_bottom">
			 <th class = "th-list">Case No.</th>
			 <th class = "th-list">Issue Date</th>
			 <th class = "th-list">Judgment Type</th>
			 <th class = "th-list">Amount</th>
			 <th class = "th-list">Plaintiff Name</th>
			 <th class = "th-list">Court Name</th>
			 <th class = "th-list">Attorney Name</th>
			 <th class = "th-list">Attorney Phone No</th>
			 <th class = "th-list">Commercial Name</th>
			 <th class = "th-list">Case Reason</th>
		</tr>
		<?php if(!is_array($report->CommercialPossibleJudgment)){?>
			<tr class="border_bottom">
				<td><?php echo (is_object($report->CommercialPossibleJudgment->CaseNumber)?"":$report->CommercialPossibleJudgment->CaseNumber);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->CaseFilingDate)?"":$report->CommercialPossibleJudgment->CaseFilingDate);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->CaseType)?"":$report->CommercialPossibleJudgment->CaseType);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->DisputeAmt)?"":$report->CommercialPossibleJudgment->DisputeAmt);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->PlaintiffName)?"":$report->CommercialPossibleJudgment->PlaintiffName);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->CourtName)?"":$report->CommercialPossibleJudgment->CourtName);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->AttorneyName)?"":$report->CommercialPossibleJudgment->AttorneyName);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->TelephoneNo)?"":$report->CommercialPossibleJudgment->TelephoneNo);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->CommercialName)?"":$report->CommercialPossibleJudgment->CommercialName);?></td>
				<td><?php echo (is_object($report->CommercialPossibleJudgment->CaseReason)?"":$report->CommercialPossibleJudgment->CaseReason);?></td>
			</tr>							
			<?php } else {
				foreach($report->CommercialPossibleJudgment as $CommercialPossibleJudgment){	
				?>	
				<tr class="border_bottom">
					<td><?php echo (is_object($CommercialPossibleJudgment->CreatedOnDate)?"":$CommercialPossibleJudgment->CreatedOnDate);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->CaseFilingDate)?"":$CommercialPossibleJudgment->CaseFilingDate);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->CaseType)?"":$CommercialPossibleJudgment->CaseType);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->DisputeAmt)?"":$CommercialPossibleJudgment->DisputeAmt);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->PlaintiffName)?"":$CommercialPossibleJudgment->PlaintiffName);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->CourtName)?"":$CommercialPossibleJudgment->CourtName);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->AttorneyName)?"":$CommercialPossibleJudgment->AttorneyName);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->TelephoneNo)?"":$CommercialPossibleJudgment->TelephoneNo);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->CommercialName)?"":$CommercialPossibleJudgment->CommercialName);?></td>
					<td><?php echo (is_object($CommercialPossibleJudgment->CaseReason)?"":$CommercialPossibleJudgment->CaseReason);?></td>
				</tr>							
				<?php } 
			}?>
			</table>
		<?php } else { ?>
		<span>Possible Judgment Not Found</span><br>
		<?php } ?>

</div><br />
			
<div class="col">
 <div class="panel-heading"><strong>Business Rescue - (No Data Available)</strong></div>
 <hr class="hr-line"/>
</div><br />	


<div class="col">
 <div class="panel-heading"><strong>Property Interest</strong></div>
 <hr class="hr-line"/>
<?php if($report->CommercialPropertyInformation){ 
if(is_object($report->CommercialPropertyInformation)){
	?>
		<div class="panel-heading"><strong>Property Interest 1</strong></div>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Title Deed number</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->TitleDeedNo)?"":$report->CommercialPropertyInformation->TitleDeedNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Deeds Office</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->DeedsOffice)?"":$report->CommercialPropertyInformation->DeedsOffice);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Property Type</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->PropertyTypeDesc)?"":$report->CommercialPropertyInformation->PropertyTypeDesc);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Purchase Date</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->PurchaseDate)?"":$report->CommercialPropertyInformation->PurchaseDate);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Purchase Price</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->PurchasePriceAmt)?"0.00":$report->CommercialPropertyInformation->PurchasePriceAmt);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Transfer Date</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->TransferDate)?"":$report->CommercialPropertyInformation->TransferDate);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bond Holder</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->BondHolderName)?"":$report->CommercialPropertyInformation->BondHolderName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bond Number</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->BondAccountNo)?"":$report->CommercialPropertyInformation->BondAccountNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bond Amount</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->BondAmt)?"":$report->CommercialPropertyInformation->BondAmt);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Physical Address</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->PhysicalAddress)?"":$report->CommercialPropertyInformation->PhysicalAddress);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Township</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->TownshipName)?"":$report->CommercialPropertyInformation->TownshipName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Farm Name</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->FarmName)?"":$report->CommercialPropertyInformation->FarmName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Stand number</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->StandNo)?"":$report->CommercialPropertyInformation->StandNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Portion Number</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->PortionNo)?"":$report->CommercialPropertyInformation->PortionNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Scheme Number</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->SchemeName)?"":$report->CommercialPropertyInformation->SchemeName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>ERF/Site Number</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->ErfNo)?"":$report->CommercialPropertyInformation->ErfNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Extent/Size</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->ErfSize)?"":$report->CommercialPropertyInformation->ErfSize);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>% of Ownership</td>
							 <td><?php echo (is_object($report->CommercialPropertyInformation->BuyerSharePerc)?"":$report->CommercialPropertyInformation->BuyerSharePerc);?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>		
	<?php
} else {
	foreach($report->CommercialPropertyInformation as $CommercialPropertyInformation){ ?>
		<div class="panel-heading">Property Interest <?php echo ++$countCommercialPropertyInformation;?></div>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Title Deed number</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->TitleDeedNo)?"":$CommercialPropertyInformation->TitleDeedNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Deeds Office</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->DeedsOffice)?"":$CommercialPropertyInformation->DeedsOffice);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Property Type</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->PropertyTypeDesc)?"":$CommercialPropertyInformation->PropertyTypeDesc);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Purchase Date</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->PurchaseDate)?"":$CommercialPropertyInformation->PurchaseDate);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Purchase Price</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->PurchasePriceAmt)?"":$CommercialPropertyInformation->PurchasePriceAmt);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Transfer Date</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->TransferDate)?"":$CommercialPropertyInformation->TransferDate);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bond Holder</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->BondHolderName)?"":$CommercialPropertyInformation->BondHolderName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bond Number</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->BondAccountNo)?"":$CommercialPropertyInformation->BondAccountNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bond Amount</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->BondAmt)?"":$CommercialPropertyInformation->BondAmt);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Physical Address</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->PhysicalAddress)?"":$CommercialPropertyInformation->PhysicalAddress);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Township</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->TownshipName)?"":$CommercialPropertyInformation->TownshipName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Farm Name</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->FarmName)?"":$CommercialPropertyInformation->FarmName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Stand number</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->StandNo)?"":$CommercialPropertyInformation->StandNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Portion Number</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->PortionNo)?"":$CommercialPropertyInformation->PortionNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Scheme Number</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->SchemeName)?"":$CommercialPropertyInformation->SchemeName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>ERF/Site Number</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->ErfNo)?"":$CommercialPropertyInformation->ErfNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Extent/Size</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->ErfSize)?"":$CommercialPropertyInformation->ErfSize);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>% of Ownership</td>
							 <td><?php echo (is_object($CommercialPropertyInformation->BuyerSharePerc)?"":$CommercialPropertyInformation->BuyerSharePerc);?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>																			
	<?php }
}
?>
<?php } else { ?>
<span>Property Interest Not Found</span><br>
<?php } ?>
</div><br />

<div class="col">
 <div class="panel-heading"><strong>Bank Codes History</strong></div>
 <hr class="hr-line"/>
<?php if($report->CommercialBankCodeHistory){ 
if(is_object($report->CommercialBankCodeHistory)){
	?>
		<div class="panel-heading">Bankcode 1</div>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Request Date</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->DateRequested)?"":$report->CommercialBankCodeHistory->DateRequested);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Company</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->Company)?"":$report->CommercialBankCodeHistory->Company);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Account Number</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->AccountNumber)?"":$report->CommercialBankCodeHistory->AccountNumber);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Branch Name</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->BranchName)?"":$report->CommercialBankCodeHistory->BranchName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Amount</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->CurrencyType)?"":$report->CommercialBankCodeHistory->CurrencyType)."".(is_object($report->CommercialBankCodeHistory->PurchasePriceAmt)?"":$report->CommercialBankCodeHistory->PurchasePriceAmt);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Bank</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->Bank1)?"":$report->CommercialBankCodeHistory->Bank1);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Terms</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->terms)?"":$report->CommercialBankCodeHistory->terms);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Date Opened</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->DateOpened)?"":$report->CommercialBankCodeHistory->DateOpened);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bank Code</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->BankCode)?"":$report->CommercialBankCodeHistory->BankCode);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Years with Bank</td>
							 <td><?php echo (is_object($report->CommercialBankCodeHistory->Years_with_Bank)?"":$report->CommercialBankCodeHistory->Years_with_Bank);?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="border_bottom">
				 <td>Comments</td>
				 <td><?php echo (is_object($report->CommercialBankCodeHistory->Comment)?"":$report->CommercialBankCodeHistory->Comment);?></td>
			</tr>
		</table>		
	<?php
} else {
	foreach($report->CommercialBankCodeHistory as $CommercialBankCodeHistory){ ?>
		<div class="panel-heading">Property Interest <?php echo ++$countCommercialBankCodeHistory;?></div>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Request Date</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->DateRequested)?"":$CommercialBankCodeHistory->DateRequested);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Company</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->Company)?"":$CommercialBankCodeHistory->Company);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Account Number</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->AccountNumber)?"":$CommercialBankCodeHistory->AccountNumber);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Branch Name</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->BranchName)?"":$CommercialBankCodeHistory->BranchName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Amount</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->CurrencyType)?"":$CommercialBankCodeHistory->CurrencyType)."".(is_object($CommercialBankCodeHistory->PurchasePriceAmt)?"":$CommercialBankCodeHistory->PurchasePriceAmt);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Bank</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->Bank1)?"":$CommercialBankCodeHistory->Bank1);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Terms</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->terms)?"":$CommercialBankCodeHistory->terms);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Date Opened</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->DateOpened)?"":$CommercialBankCodeHistory->DateOpened);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Bank Code</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->BankCode)?"":$CommercialBankCodeHistory->BankCode);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Years with Bank</td>
							 <td><?php echo (is_object($CommercialBankCodeHistory->Years_with_Bank)?"":$CommercialBankCodeHistory->Years_with_Bank);?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="border_bottom">
				 <td>Comments</td>
				 <td><?php echo (is_object($CommercialBankCodeHistory->Comment)?"":$CommercialBankCodeHistory->Comment);?></td>
			</tr>
		</table>
		<hr class="hr-line"/>		
	<?php }
}
 } else { ?>
<span>Bank Codes History Not Found</span><br>
<?php } ?>
</div> <br />

<div class="col">
 <div class="panel-heading"><strong>Directors</strong></div>
<hr class="hr-line"/>
	<table class="table-list">
		<tr class="border_bottom">
			<td>Number of Active Directors</td>
			<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfPrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfPrincipals);?></td>
		</tr>
		<tr class="border_bottom">
			<td>Average Age of Active Directors</td>
			<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->AverageAge)?"":$report->CommercialActivePrincipalInfoSummary->AverageAge);?></td>
		</tr>
		<tr class="border_bottom">
			<td>Number of Inactive Directors</td>
			<td style="align: left;"><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals);?></td>
		</tr>
		<tr class="border_bottom">
			<td>Number of Previous Directors</td>
			<td><?php echo ((is_object($report->CommercialActivePrincipalInfoSummary->NoOfPreviousPrincipals) || ($report->CommercialActivePrincipalInfoSummary->NoOfPreviousPrincipals == null))?"0":$report->CommercialActivePrincipalInfoSummary->NoOfPreviousPrincipals);?></td>
		</tr>					
	 </table>
</div><br />

<div class="col">
 <div class="panel-heading"><strong>Commercial Active Director Information</strong></div>
<hr class="hr-line"/>
<?php if($report->CommercialActivePrincipalInformation){ 
	if(is_object($report->CommercialActivePrincipalInformation)){ 
			$employer = "";
			if($personaldetails['details'][$report->CommercialActivePrincipalInformation->IDNo]){
				$employer = $personaldetails['details'][$report->CommercialActivePrincipalInformation->IDNo]->ConsumerDetail->EmployerDetail;
			} ?>
	<div class="panel-heading"><strong>Active Director-1 of 1<br>
	<?php echo (is_object($report->CommercialActivePrincipalInformation->Fullname)?"":$report->CommercialActivePrincipalInformation->Fullname);?></strong>
	</div>
	<table class="table-list">
	<tr class="border_bottom">
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>ID Number</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->IDNo)?"":$report->CommercialActivePrincipalInformation->IDNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Fullname</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->Fullname)?"":$report->CommercialActivePrincipalInformation->Fullname);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Birth Date</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->BirthDate)?"":$report->CommercialActivePrincipalInformation->BirthDate);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Director Status Code</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorStatusCode)?"":$report->CommercialActivePrincipalInformation->DirectorStatusCode);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Appointment Date</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->AppointmentDate)?"":$report->CommercialActivePrincipalInformation->AppointmentDate);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Designation</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->Designation)?"":$report->CommercialActivePrincipalInformation->Designation);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Member Control Percent</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->MemberControlPerc)?"":$report->CommercialActivePrincipalInformation->MemberControlPerc);?></td>
				</tr>
				</tr>													
			</table>
		</td>
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>Employer Name</td>
					 <td><?php echo (is_object($employer)?"":$employer);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Director Indicator</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorIndicator)?"":$report->CommercialActivePrincipalInformation->DirectorIndicator);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Principal Type</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->PrincipalType)?"":$report->CommercialActivePrincipalInformation->PrincipalType);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>RSA Resident</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISRSAResident)?"":$report->CommercialActivePrincipalInformation->ISRSAResident);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>ID Verified</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISIDVerified)?"":$report->CommercialActivePrincipalInformation->ISIDVerified);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>CIPRO Confirmed</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISCIPROConfirmed)?"":$report->CommercialActivePrincipalInformation->ISCIPROConfirmed);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Physical Address</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->PhysicalAddress)?"":$report->CommercialActivePrincipalInformation->PhysicalAddress);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Postal Address</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->PostalAddress)?"":$report->CommercialActivePrincipalInformation->PostalAddress);?></td>
				</tr>
			</table>
		</td>
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>Home Telephone No</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->HomeTelephoneNo)?"":$report->CommercialActivePrincipalInformation->HomeTelephoneNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Work Telephone No</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->WorkTelephoneNo)?"":$report->CommercialActivePrincipalInformation->WorkTelephoneNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Cellular No</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->CellularNo)?"":$report->CommercialActivePrincipalInformation->CellularNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Email Address</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->EmailAddress)?"":$report->CommercialActivePrincipalInformation->EmailAddress);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Age</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->Age)?"":$report->CommercialActivePrincipalInformation->Age);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Years With Business</td>
					 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->YearsWithBusiness)?"":$report->CommercialActivePrincipalInformation->YearsWithBusiness);?></td>
				</tr>
				<tr class="border_bottom">	
					<td>Director Status Date</td>
					<td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorStatusDate)?"":$report->CommercialActivePrincipalInformation->DirectorStatusDate);?></td>
				</tr>

			</table>
		</td>
	</tr>
	<tr class="border_bottom">
		 <td>Consumer Score</td>
		 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ConsumerScore)?"":$report->CommercialActivePrincipalInformation->ConsumerScore);?></td>
	</tr>
 </table><br />
	<?php } else { 
	foreach($report->CommercialActivePrincipalInformation as $CommercialActivePrincipalInformation){  
									
	$employer = "";
	if($personaldetails['details'][$CommercialActivePrincipalInformation->IDNo]){
		$employer = $personaldetails['details'][$CommercialActivePrincipalInformation->IDNo]->ConsumerDetail->EmployerDetail;
	}?>
	<div class="panel-heading"> Active Director-<?php echo ++$count." of ".count($report->CommercialActivePrincipalInformation);?><br>
		<?php echo (is_object($CommercialActivePrincipalInformation->Fullname)?"":$CommercialActivePrincipalInformation->Fullname);?>
	</div>
	<table class="table-list">
	<tr class="border_bottom">
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>ID Number</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->IDNo)?"":$CommercialActivePrincipalInformation->IDNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Fullname</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->Fullname)?"":$CommercialActivePrincipalInformation->Fullname);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Birth Date</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->BirthDate)?"":$CommercialActivePrincipalInformation->BirthDate);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Director Status Code</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorStatusCode)?"":$CommercialActivePrincipalInformation->DirectorStatusCode);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Appointment Date</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->AppointmentDate)?"":$CommercialActivePrincipalInformation->AppointmentDate);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Designation</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->Designation)?"":$CommercialActivePrincipalInformation->Designation);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Member Control Percent</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->MemberControlPerc)?"":$CommercialActivePrincipalInformation->MemberControlPerc);?></td>
				</tr>
			</table>
		</td>
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>Employer Name</td>
					 <td><?php echo (is_object($employer)?"":$employer);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Director Indicator</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorIndicator)?"":$CommercialActivePrincipalInformation->DirectorIndicator);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Principal Type</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->PrincipalType)?"":$CommercialActivePrincipalInformation->PrincipalType);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>RSA Resident</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->ISRSAResident)?"":$CommercialActivePrincipalInformation->ISRSAResident);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>ID Verified</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->ISIDVerified)?"":$CommercialActivePrincipalInformation->ISIDVerified);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>CIPRO Confirmed</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->ISCIPROConfirmed)?"":$CommercialActivePrincipalInformation->ISCIPROConfirmed);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Physical Address</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->PhysicalAddress)?"":$CommercialActivePrincipalInformation->PhysicalAddress);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Postal Address</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->PostalAddress)?"":$CommercialActivePrincipalInformation->PostalAddress);?></td>
				</tr>
			</table>
		</td>
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>Home Telephone No</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->HomeTelephoneNo)?"":$CommercialActivePrincipalInformation->HomeTelephoneNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Work Telephone No</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->WorkTelephoneNo)?"":$CommercialActivePrincipalInformation->WorkTelephoneNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Cellular No</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->CellularNo)?"":$CommercialActivePrincipalInformation->CellularNo);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Email Address</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->EmailAddress)?"":$CommercialActivePrincipalInformation->EmailAddress);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Age</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->Age)?"":$CommercialActivePrincipalInformation->Age);?></td>
				</tr>
				<tr class="border_bottom">
					 <td>Years With Business</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->YearsWithBusiness)?"":$CommercialActivePrincipalInformation->YearsWithBusiness);?></td>
				</tr>
				<tr class="border_bottom">	
					<td>Director Status Date</td>
					<td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorStatusDate)?"":$CommercialActivePrincipalInformation->DirectorStatusDate);?></td>
				</tr>
			</table>
		</td>
		<td>
			<table class="table-list">
				<tr class="border_bottom">
					 <td>Consumer Score</td>
					 <td><?php echo (is_object($CommercialActivePrincipalInformation->ConsumerScore)?"":$CommercialActivePrincipalInformation->ConsumerScore);?></td>
				</tr>
			</table>
		</td>
	</tr>
 </table>
 <!-- ActiveDirectorAddressHistory -->
 <div class="col">
 <div class="panel-heading"><strong>Address History</strong></div>
 <hr class="hr-line"/>
<?php if($report->ActiveDirectorAddressHistory){?>
<table class="table-list">
<tr class="border_bottom">
	<th class = "th-list">Address Type</th>
	<th class = "th-list">Address1</th>
	<th class = "th-list">Address2</th>
	<th class = "th-list">Address3</th>
	<th class = "th-list">Address4</th>
	<th class = "th-list">Postal Code</th>
	<th class = "th-list">Created On Date</th>
</tr>
<?php 
 if(!is_object($report->ActiveDirectorAddressHistory)){
	foreach($report->ActiveDirectorAddressHistory as $ActiveDirectorAddressHistory){ 

	if($CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorAddressHistory->DirectorID){
		?>
		<tr class="border_bottom">
			<td><?php echo (is_object($ActiveDirectorAddressHistory->AddressTypeInd)?"":$ActiveDirectorAddressHistory->AddressTypeInd);?></td>
			<td><?php echo (is_object($ActiveDirectorAddressHistory->Address1)?"":$ActiveDirectorAddressHistory->Address1);?></td>
			<td><?php echo (is_object($ActiveDirectorAddressHistory->Address2)?"":$ActiveDirectorAddressHistory->Address2);?></td>
			<td><?php echo (is_object($ActiveDirectorAddressHistory->Address3)?"":$ActiveDirectorAddressHistory->Address3);?></td>
			<td><?php echo (is_object($ActiveDirectorAddressHistory->Address4)?"":$ActiveDirectorAddressHistory->Address4);?></td>
			<td><?php echo (is_object($ActiveDirectorAddressHistory->PostalCode)?"":$ActiveDirectorAddressHistory->PostalCode);?></td>
			<td><?php echo (is_object($ActiveDirectorAddressHistory->CreatedOnDate)?"":$ActiveDirectorAddressHistory->CreatedOnDate);?></td>
		</tr>
		<?php }
	}	
 } else {
	 if($CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorAddressHistory->DirectorID){
	 ?>
	<tr class="border_bottom">
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->AddressTypeInd)?"":$report->ActiveDirectorAddressHistory->AddressTypeInd);?></td>
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address1)?"":$report->ActiveDirectorAddressHistory->Address1);?></td>
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address2)?"":$report->ActiveDirectorAddressHistory->Address2);?></td>
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address3)?"":$report->ActiveDirectorAddressHistory->Address3);?></td>
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address4)?"":$report->ActiveDirectorAddressHistory->Address4);?></td>
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->PostalCode)?"":$report->ActiveDirectorAddressHistory->PostalCode);?></td>
		<td><?php echo (is_object($report->ActiveDirectorAddressHistory->CreatedOnDate)?"":$report->ActiveDirectorAddressHistory->CreatedOnDate);?></td>
	</tr>							 
 <?php } else { ?>
	 <tr><td colspan="7">Address History Not Found</td></tr>
 <?php }
 }?>		 
</table>
<?php } ?>
</div><br />
 <!-- ActiveDirectorAddressHistory -->
 
 
 <!-- ActiveDirectorContactHistory -->
 <div class="col">
 <div class="panel-heading"><strong>Contact History</strong></div>
<hr class="hr-line"/>
<?php if($report->ActiveDirectorContactHistory){ ?>
 <table class="table-list">
	<tr class="tr-list">
		<th class = "th-list">Bureau Update</th>
		<th class = "th-list">Captured date</th>
		<th class = "th-list">Contact Type</th>
		<th class = "th-list">Detail</th>
	</tr>
	<?php 
	if(!is_object($report->ActiveDirectorContactHistory)){
		foreach($report->ActiveDirectorContactHistory as $ActiveDirectorContactHistory){ 
			if ($CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorContactHistory->DirectorID){
		?>
		<tr class="border_bottom">
			<td><?php echo (is_object($ActiveDirectorContactHistory->BureauUpdate)?"":$ActiveDirectorContactHistory->BureauUpdate);?></td>
			<td><?php echo (is_object($ActiveDirectorContactHistory->Captureddate)?"":$ActiveDirectorContactHistory->Captureddate);?></td>
			<td><?php echo (is_object($ActiveDirectorContactHistory->ContactType)?"":$ActiveDirectorContactHistory->ContactType);?></td>
			<td><?php echo (is_object($ActiveDirectorContactHistory->Detail)?"":$ActiveDirectorContactHistory->Detail);?></td>								
		</tr>
		<?php }
		}
	} else { 
	  if($CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorContactHistory->DirectorID){
		?>
		<tr class="border_bottom">
			<td><?php echo (is_object($report->ActiveDirectorContactHistory->BureauUpdate)?"":$report->ActiveDirectorContactHistory->BureauUpdate);?></td>
			<td><?php echo (is_object($report->ActiveDirectorContactHistory->Captureddate)?"":$report->ActiveDirectorContactHistory->Captureddate);?></td>
			<td><?php echo (is_object($report->ActiveDirectorContactHistory->ContactType)?"":$report->ActiveDirectorContactHistory->ContactType);?></td>
			<td><?php echo (is_object($report->ActiveDirectorContactHistory->Detail)?"":$report->ActiveDirectorContactHistory->Detail);?></td>						
		</tr>							
		<?php } else {?> 
		<tr><td colspan="4">ContactHistory Not Found</td></tr>
	<?php } 
	}?>
</table>
<?php } else { ?>
<span>Contact History Not Found</span><br>
<?php } ?>
</div><br/>
<!-- ActiveDirectorContactHistory -->
 
 
<!-- Adverse Information -->
<div class="col">
<div class="panel-heading"><strong>Adverse Information</strong></div>
<hr class="hr-line"/>
</div>
 <!-- Adverse Information -->
 
 
 <!-- Payment Notifications -->
<div class="col">
<div class="panel-heading"><strong>Payment Notifications - (No Data Available)</strong></div>
<hr class="hr-line"/>
</div>
 <!-- Payment Notifications -->
 
  <!-- Payment Notifications -->
<div class="col">
<div class="panel-heading"><strong>Default Listing - (No Data Available)</strong></div>
<hr class="hr-line"/>
</div>
 <!-- Payment Notifications -->
 
   <!-- DirectorJudgments -->
<div class="col">
<div class="panel-heading"><strong>Default Listing - (No Data Available)</strong></div>
<hr class="hr-line"/>
</div>
 <!-- DirectorJudgments -->

 <?php if($report->DirectorJudgments){ ?>
<div class="panel-heading">Judgments</div>						
<?php if(is_object($report->DirectorJudgments) && ($CommercialActivePrincipalInformation->DirectorID == $report->DirectorJudgments->DirectorID)){
		  $name = "";
		  if(!is_object($report->DirectorJudgments->FirstName)){
			  $name = $report->DirectorJudgments->FirstName;
		  }
		  if(!is_object($report->DirectorJudgments->Surname)){
			  $name .= " ".$report->DirectorJudgments->Surname;
		  }
	?>
	<table class="table-list">
		<tr class="border_bottom">
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Case No.</td>
						 <td><?php echo (is_object($report->DirectorJudgments->CaseNumber)?"":$report->DirectorJudgments->CaseNumber);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Issue Date</td>
						 <td><?php echo (is_object($report->DirectorJudgments->JudgmentDate)?"":$report->DirectorJudgments->JudgmentDate);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Judgment Type</td>
						 <td><?php echo (is_object($report->DirectorJudgments->CaseType)?"":$report->DirectorJudgments->CaseType);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Amount</td>
						 <td><?php echo (is_object($report->DirectorJudgments->DisputeAmt)?"":$report->DirectorJudgments->DisputeAmt);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Plaintiff Name</td>
						 <td><?php echo (is_object($report->DirectorJudgments->PlaintiffName)?"":$report->DirectorJudgments->PlaintiffName);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Court Name</td>
						 <td><?php echo (is_object($report->DirectorJudgments->CourtName)?"":$report->DirectorJudgments->CourtName);?></td>
					</tr>
				</table>
			</td>
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Attorney Name</td>
						 <td><?php echo (is_object($report->DirectorJudgments->AttorneyName)?"":$report->DirectorJudgments->AttorneyName);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Attorney Phone No</td>
						 <td><?php echo (is_object($report->DirectorJudgments->TelephoneNo)?"":$report->DirectorJudgments->TelephoneNo);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>IDNo</td>
						 <td><?php echo (is_object($report->DirectorJudgments->IDNo)?"":$report->DirectorJudgments->IDNo);?></td>
					</tr>
					
					<tr class="border_bottom">
						 <td>Full Name</td>
						 <td><?php echo $name;?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Case Reason</td>
						 <td><?php echo (is_object($report->DirectorJudgments->CaseReason)?"":$report->DirectorJudgments->CaseReason);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Comment</td>
						 <td><?php echo (is_object($report->DirectorJudgments->Comment)?"":$report->DirectorJudgments->Comment);?></td>
					</tr>
				</table>
			</td>
		 </tr>
	</table>
<?php } else { 
	foreach($report->DirectorJudgments as $DirectorJudgments){
		if($CommercialActivePrincipalInformation->DirectorID == $DirectorJudgments->DirectorID){
		  $name = "";
		  if(!is_object($DirectorJudgments->FirstName)){
			  $name = $DirectorJudgments->FirstName;
		  }
		  if(!is_object($DirectorJudgments->Surname)){
			  $name .= " ".$DirectorJudgments->Surname;
		  }										
	?>
		<table class="table-list">
		<tr class="border_bottom">
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Case No.</td>
						 <td><?php echo (is_object($DirectorJudgments->CaseNumber)?"":$DirectorJudgments->CaseNumber);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Issue Date</td>
						 <td><?php echo (is_object($DirectorJudgments->JudgmentDate)?"":$DirectorJudgments->JudgmentDate);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Judgment Type</td>
						 <td><?php echo (is_object($DirectorJudgments->CaseType)?"":$DirectorJudgments->CaseType);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Amount</td>
						 <td><?php echo (is_object($DirectorJudgments->DisputeAmt)?"":$DirectorJudgments->DisputeAmt);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Plaintiff Name</td>
						 <td><?php echo (is_object($DirectorJudgments->PlaintiffName)?"":$DirectorJudgments->PlaintiffName);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Court Name</td>
						 <td><?php echo (is_object($DirectorJudgments->CourtName)?"":$DirectorJudgments->CourtName);?></td>
					</tr>
				</table>
			</td>
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Attorney Name</td>
						 <td><?php echo (is_object($DirectorJudgments->AttorneyName)?"":$DirectorJudgments->AttorneyName);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Attorney Phone No</td>
						 <td><?php echo (is_object($DirectorJudgments->TelephoneNo)?"":$DirectorJudgments->TelephoneNo);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>IDNo</td>
						 <td><?php echo (is_object($DirectorJudgments->IDNo)?"":$DirectorJudgments->IDNo);?></td>
					</tr>
					
					<tr class="border_bottom">
						 <td>Full Name</td>
						 <td><?php echo $name;?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Case Reason</td>
						 <td><?php echo (is_object($DirectorJudgments->CaseReason)?"":$DirectorJudgments->CaseReason);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Comment</td>
						 <td><?php echo (is_object($DirectorJudgments->Comment)?"":$DirectorJudgments->Comment);?></td>
					</tr>
				</table>
			</td>
		 </tr>
	</table>
 <hr class="hr-line"/>	
	<?php } }
} 
 } else { ?>
		
		<span>Judgment Not Found</span><br>
		<hr class="hr-line"/>	
<?php } ?>
 <!-- DirectorJudgments -->
 
 <!-- DirectorDebtReview -->
 <?php if($report->DirectorDebtReview){ ?>
<div class="col">
<div class="panel-heading"><strong>Debt Review</strong></div>
<hr class="hr-line"/>
<?php if(is_object($report->DirectorDebtReview) && ($CommercialActivePrincipalInformation->DirectorID == $report->DirectorDebtReview->DirectorID)){ ?>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Debt Review Number.</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->DebtRevierwNumber)?"":$report->DirectorDebtReview->DebtRevierwNumber);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Debt Counsellor Name</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounselorName)?"":$report->DirectorDebtReview->DebtCounselorName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Debt Counsellor Contact No</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounselorContactNo)?"":$report->DirectorDebtReview->DebtCounselorContactNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Status</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->Status)?"":$report->DirectorDebtReview->Status);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Application Creation Date</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->ApplicationCreationDate)?"":$report->DirectorDebtReview->ApplicationCreationDate);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Debt Counsellor Registration No</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounsellorRegNo)?"":$report->DirectorDebtReview->DebtCounsellorRegNo);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Debt Counsellor Contact No</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounsellorContactno)?"":$report->DirectorDebtReview->DebtCounsellorContactno);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Creation Date</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->CreationDate)?"":$report->DirectorDebtReview->CreationDate);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Status Date</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->StatusDate)?"":$report->DirectorDebtReview->StatusDate);?></td>
						</tr>
						
						<tr class="border_bottom">
							 <td>ID No</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->IDNo)?"":$report->DirectorDebtReview->IDNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>First Name</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->FirstName)?"":$report->DirectorDebtReview->FirstName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Surname</td>
							 <td><?php echo (is_object($report->DirectorDebtReview->Surname)?"":$report->DirectorDebtReview->Surname);?></td>
						</tr>
					</table>
				</td>
			 </tr>
		</table>
	<?php } else { 
		foreach($report->DirectorDebtReview as $DirectorDebtReview){
		if($CommercialActivePrincipalInformation->DirectorID == $DirectorDebtReview->DirectorID){ 
	?>
	<table class="table-list">
		<tr class="border_bottom">
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Debt Review Number.</td>
						 <td><?php echo (is_object($DirectorDebtReview->DebtRevierwNumber)?"":$DirectorDebtReview->DebtRevierwNumber);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Debt Counsellor Name</td>
						 <td><?php echo (is_object($DirectorDebtReview->DebtCounselorName)?"":$DirectorDebtReview->DebtCounselorName);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Debt Counsellor Contact No</td>
						 <td><?php echo (is_object($DirectorDebtReview->DebtCounselorContactNo)?"":$DirectorDebtReview->DebtCounselorContactNo);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Status</td>
						 <td><?php echo (is_object($DirectorDebtReview->Status)?"":$DirectorDebtReview->Status);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Application Creation Date</td>
						 <td><?php echo (is_object($DirectorDebtReview->ApplicationCreationDate)?"":$DirectorDebtReview->ApplicationCreationDate);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Debt Counsellor Registration No</td>
						 <td><?php echo (is_object($DirectorDebtReview->DebtCounsellorRegNo)?"":$DirectorDebtReview->DebtCounsellorRegNo);?></td>
					</tr>
				</table>
			</td>
			<td>
				<table class="table-list">
					<tr class="border_bottom">
						 <td>Debt Counsellor Contact No.</td>
						 <td><?php echo (is_object($DirectorDebtReview->DebtCounsellorContactno)?"":$DirectorDebtReview->DebtCounsellorContactno);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Creation Date</td>
						 <td><?php echo (is_object($DirectorDebtReview->CreationDate)?"":$DirectorDebtReview->CreationDate);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Status Date</td>
						 <td><?php echo (is_object($DirectorDebtReview->StatusDate)?"":$DirectorDebtReview->StatusDate);?></td>
					</tr>
					
					<tr class="border_bottom">
						 <td>ID No</td>
						 <td><?php echo (is_object($DirectorDebtReview->IDNo)?"":$DirectorDebtReview->IDNo);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>First Name</td>
						 <td><?php echo (is_object($DirectorDebtReview->FirstName)?"":$DirectorDebtReview->FirstName);?></td>
					</tr>
					<tr class="border_bottom">
						 <td>Surname</td>
						 <td><?php echo (is_object($DirectorDebtReview->Surname)?"":$DirectorDebtReview->Surname);?></td>
					</tr>
				</table>
			</td>
		 </tr>
	</table>
</div>	
		<?php } }
	}
} else { ?>
<span>Debt Review Not Found</span><br>
<?php } ?>
 <!-- DirectorDebtReview -->

 <!-- ActiveDirectorCurrentBusinessinterests -->

<?php if($report->ActiveDirectorCurrentBusinessinterests){ 
		if(is_object($report->ActiveDirectorCurrentBusinessinterests) && ($CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorCurrentBusinessinterests->DirectorID)){ ?>
		<div class="col">
				<hr class="hr-line"/>
				<div class="panel-heading">Current Business interests
				 <hr class="hr-line"/>
					<?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?>
				</div>
				<table class="table-list">
					<tr class="border_bottom">
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Commercial Name</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Registration No</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Commercial Status</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
								</tr>
				
							</table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Judgments Count</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Default Count</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$report->ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Liquidation</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$report->ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Age Of Business</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Judgment Status</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Director Status Date</td>
									 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
								</tr>
							</table>
						</td>
					</tr>
				 </table>
				</div>
		<?php } else { 
				foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterests){  
				if($CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorCurrentBusinessinterests->DirectorID){
				?>
				<div class="col">
				<hr class="hr-line"/>
				<div class="panel-heading"><strong>Current Business interests</strong>
				<hr class="hr-line"/>
					<?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$ActiveDirectorCurrentBusinessinterests->CommercialName);?>
				</div>
				<table class="table-list">
					<tr class="border_bottom">
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Commercial Name</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Registration No</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Commercial Status</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Judgments Count</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Default Count</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Liquidation</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
								</tr>
							</table>
						</td>
						<td>
							<table class="table-list">
								<tr class="border_bottom">
									 <td>Age Of Business</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Judgment Status</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
								</tr>
								<tr class="border_bottom">
									 <td>Director Status Date</td>
									 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
								</tr>
							</table>
						</td>
					</tr>
				 </table>
				 </div>
				  <hr class="hr-line"/>
		 <?php }
	}	
} }else { 
		?>	
	<span><strong>Current Business Interests Not Found</strong></span><br>
<?php }?>

 <!-- ActiveDirectorCurrentBusinessinterests -->
 
 
 <!-- ActiveDirectorPreviousBusinessinterests -->
 <div class="col">
<div class="panel-heading"><strong>Previous Business interests</strong></div>
<hr class="hr-line"/>
<?php if($report->ActiveDirectorPreviousBusinessinterests){ 
if(is_object($report->ActiveDirectorPreviousBusinessinterests) && ($CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorPreviousBusinessinterests->DirectorID)){ ?>
		<div class="panel-heading">Previous Business interests: 
			<?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialName);?>
		</div>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Commercial Name</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Registration No</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorPreviousBusinessinterests->RegistrationNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Commercial Status</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialStatus);?></td>
						</tr>
		
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Judgments Count</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorPreviousBusinessinterests->JudgmentsCount);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Default Count</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->DefaultCount)?"":$report->ActiveDirectorPreviousBusinessinterests->DefaultCount);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Liquidation</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->Liquidation)?"":$report->ActiveDirectorPreviousBusinessinterests->Liquidation);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Age Of Business</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorPreviousBusinessinterests->AgeOfBusiness);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Judgment Status</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorPreviousBusinessinterests->JudgmentStatus);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Director Status Date</td>
							 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorPreviousBusinessinterests->DirectorStatusDate);?></td>
						</tr>
					</table>
				</td>
			</tr>
		 </table>
<?php } else { 
		foreach($report->ActiveDirectorPreviousBusinessinterests as $ActiveDirectorPreviousBusinessinterests){  
		if ($CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorPreviousBusinessinterests->DirectorID){
		?>
		<div class="panel-heading">Previous Business interests: 
			<?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$ActiveDirectorPreviousBusinessinterests->CommercialName);?>
		</div>
		<table class="table-list">
			<tr class="border_bottom">
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Commercial Name</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$ActiveDirectorPreviousBusinessinterests->CommercialName);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Registration No</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->RegistrationNo)?"":$ActiveDirectorPreviousBusinessinterests->RegistrationNo);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Commercial Status</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialStatus)?"":$ActiveDirectorPreviousBusinessinterests->CommercialStatus);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Judgments Count</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->JudgmentsCount)?"":$ActiveDirectorPreviousBusinessinterests->JudgmentsCount);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Default Count</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->DefaultCount)?"":$ActiveDirectorPreviousBusinessinterests->DefaultCount);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Liquidation</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->Liquidation)?"":$ActiveDirectorPreviousBusinessinterests->Liquidation);?></td>
						</tr>
					</table>
				</td>
				<td>
					<table class="table-list">
						<tr class="border_bottom">
							 <td>Age Of Business</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->AgeOfBusiness)?"":$ActiveDirectorPreviousBusinessinterests->AgeOfBusiness);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Judgment Status</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->JudgmentStatus)?"":$ActiveDirectorPreviousBusinessinterests->JudgmentStatus);?></td>
						</tr>
						<tr class="border_bottom">
							 <td>Director Status Date</td>
							 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->DirectorStatusDate)?"":$ActiveDirectorPreviousBusinessinterests->DirectorStatusDate);?></td>
						</tr>
					</table>
				</td>
			</tr>
		 </table>
		  <hr class="hr-line"/>
		<?php } }
		}	
	 } else { 
			?>	
		<span>Previous Business Interests Not Found</span>
		
	<?php }?>
</div> 
 <!-- ActiveDirectorPreviousBusinessinterests -->
 
<?php } 
	} 
} else { ?>
<span>Commercial Active Director Information Not Found</span><br>
<?php } ?>

</div>
</div>
	




	



		 

	
</body>
</html>