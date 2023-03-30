<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trace Report</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/pdf-resources/css/style.css"/>
</head>
<body>

<div>
     <div class="title-head">
	 <img src="<?php echo base_url();?>/pdf-resources/images/logo.png" alt="logo" style="width: 730px;"/> 
     </div>
	 
	 <div>
	 <h3 class="box-title" style="text-align: right;"><?php echo $report->SubscriberInputDetails->EnquiryType." Report";?></h3>
     </div>
     
</div>

     <!-- Start of  Enquiry Input Details-->
   <hr class="hr_rule"/>
   <div class="title-head"><strong>Enquiry Input Details</strong>
   <h5 class="subtitle-head">Deis Technologies</h5>
  </div>
   <hr class="hr-line"/>
 <div class="col">
   <table class="table-list">
        <tr>
        <th class="th-size-first"></th>
        <th class="th-size-second"></th>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Enquiry Date</td>
        <td class="td-value"><?php echo str_ireplace("t"," ",(substr($report->SubscriberInputDetails->EnquiryDate,0,strpos($report->SubscriberInputDetails->EnquiryDate,"."))));?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Type</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryType;?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Subscriber Name</td>
        <td class="td-value">Deis Technologies</td>
        </tr>
        <tr class="tr-label">
        <td class="td-label">Subscriber User Name</td>
        <td class="td-value"><?php echo $this->session->userdata('fullname');?></td>
        </tr>
         <tr class="tr-label">
        <td class="td-label">Enquiry Input</td>
        <td class="td-value"><?php echo $report->SubscriberInputDetails->EnquiryInput;?></td>
        </tr>
    </table>              
 </div><br/><br/>
  
   <!-- End of  Enquiry Input Details-->
    <!-- StartPersonal Details Summary-->
   <div class="title-head"><strong>Personal Details Summary</strong>
   <h5 class="subtitle-head">This section displays the Personal information for the consumer. Included here is ID or Passport, Name, Gender, Marital Status,
Current Contact, Address, and Employment Info.</h5>
  </div>
   <hr class="hr-line"/>
  <div class="col">
    <!-- First personal details -->
  <table class="table-list">
      <tr>
       <th class="th-size-first-first-div"></th>
       <th class="th-size-first-second-div"></th>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Reference No.</td>
        <td  class="td-value"><?php echo $report->ConsumerDetail->ReferenceNo;?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">ID No</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->IDNo)?"":$report->ConsumerDetail->IDNo);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Surname</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->Surname)?"":$report->ConsumerDetail->Surname);?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">First Name</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->FirstName)?"":$report->ConsumerDetail->FirstName);?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Second Name</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->SecondName)?"":$report->ConsumerDetail->SecondName);?></td>
       </tr>
       <tr class="tr-label">
        <td class="td-label">Maiden Name</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->MaidenName)?"":$report->ConsumerDetail->MaidenName);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Title</td>
        <td class="td-value"><?php (is_object($report->ConsumerDetail->TitleDesc)?"":$report->ConsumerDetail->TitleDesc);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Gender</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->Gender)?"":$report->ConsumerDetail->Gender);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Date of Birth</td>
        <td class="td-value"><?php (is_object($report->ConsumerDetail->BirthDate)?"":$report->ConsumerDetail->BirthDate);?></td>
       </tr>
        <tr class="tr-label">
        <td class="td-label">Marital Status</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->MaritalStatusDesc)?"":$report->ConsumerDetail->MaritalStatusDesc);?></td>
       </tr> 
        <tr class="tr-label">
        <td class="td-label">E-mail Address</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->EmailAddress)?"":$report->ConsumerDetail->EmailAddress);?></td>
      </tr>
	  <tr class="tr-label">
        <td class="td-label">External Reference No.</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->ExternalReference)?"":$report->ConsumerDetail->ExternalReference);?></td>
       </tr>
      <tr class="tr-label">
        <td class="td-label">Passport or 2nd ID No</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->PassportNo)?"":$report->ConsumerDetail->PassportNo);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Residential Address</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->ResidentialAddress)?"":$report->ConsumerDetail->ResidentialAddress);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Postal Address</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->PostalAddress)?"":$report->ConsumerDetail->PostalAddress);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Telephone No. (H)</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->HomeTelephoneNo)?"":$report->ConsumerDetail->HomeTelephoneNo);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Cellular/Mobile</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->CellularNo)?"":$report->ConsumerDetail->CellularNo);?></td>
      </tr>
      <tr class="tr-label">
        <td class="td-label">Current Employer</td>
        <td class="td-value"><?php echo (is_object($report->ConsumerDetail->EmployerDetail)?"":$report->ConsumerDetail->EmployerDetail);?></td>
      </tr>   
    </table>
 
  <!-- Second personal details -->
 
  </div><br/>
                      <!-- End of Personal Details Summary-->
                     
                     <!-- Start of AKAName History -->

                     <!-- End of AKAName History -->
                      <!-- Start of Potential Fraud Indicators-->
                     <div class="title-head"><strong>Home Affairs Verification</strong>
                      <h5 class="subtitle-head">This section displays information verified by the Relevant Authority.</h5>
                    </div>
                    <hr class="hr-line"/>
						<div class="col">
							<table class="table-list">
								<tr>
									<th class="th-size-first-fraud"></th>
									<th class="th-size-second-fraud"></th>
								</tr>
								<tr class="tr-label">
									<td class="td-label">ID No. Verified Status</td>
									<td class="td-value"><?php echo(is_object($report->ConsumerFraudIndicatorsSummary->HomeAffairsVerificationYN)?"":$report->ConsumerFraudIndicatorsSummary->HomeAffairsVerificationYN);?></td>
								</tr>
								<tr class="tr-label">
									<td class="td-label">ID No. Deceased Status</td>
									<td class="td-value"><?php echo (is_object($report->ConsumerFraudIndicatorsSummary->HomeAffairsDeceasedStatus)?"":$report->ConsumerFraudIndicatorsSummary->HomeAffairsDeceasedStatus);?></td>
								</tr>
								<tr class="tr-label">
									<td class="td-label">ID No. Found on Fraud Database</td>
									<td class="td-value"><?php echo (is_object($report->ConsumerFraudIndicatorsSummary->SAFPSListingYN)?"":$report->ConsumerFraudIndicatorsSummary->SAFPSListingYN);?></td>
								</tr>
							</table>
						</div><br/><br/>
						
						<!-- Debt Summary -->
							<div class="col">
							 <div class="title-head"><strong>Debt Summary</strong></div>
								<hr class="hr-line"/>
									<?php if($report->ConsumerCPANLRDebtSummary){
									?>
									
									<table class="table-list">
									  <tr>
										<td>Description</td>
										<td>NLR</td>
										<td>CPA</td>
										<td>Total</td>
									  </tr>
									  <tr class="border_bottom">
										<td>Total No. of Active Accounts</td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsNLR);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsCPA);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOFActiveAccounts)?"":$report->ConsumerCPANLRDebtSummary->NoOFActiveAccounts);?></td>
									  </tr>
									  <tr class="border_bottom">
										<td>Total No. of Accounts in Good Standing</td>
										<td style="color: green;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingNLR);?></td>
										<td style="color: green;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingCPA);?></td>
										<td style="color: green;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStanding)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStanding);?></td>
									  </tr>
									  <tr class="border_bottom">
										<td>Total No. of Accounts In Arrears</td>
										<td style="color: red;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR);?></td>
										<td style="color: red;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA);?></td>
										<td style="color: red;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmount)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmount);?></td>
									  </tr class="border_bottom">
									  <tr class="border_bottom">
										<td>Total No. of Paid Up or Closed Accounts (last 24 months)</td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsNLR);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsCPA);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccounts)?"":$report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccounts);?></td>
									  </tr>							  
									  <tr class="border_bottom">
										<td>Total Monthly Instalments</td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentNLR);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentCPA);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallment)?"":$report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallment);?></td>
									  </tr>
									  <tr class="border_bottom">
										<td>Total Outstanding Debt</td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtNLR);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtCPA);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalOutStandingDebt)?"":$report->ConsumerCPANLRDebtSummary->TotalOutStandingDebt);?></td>
									  </tr>
									  <tr class="border_bottom">
										<td>Total Arrear Amount</td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmount)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmount);?></td>
									  </tr>
									  <tr class="border_bottom">
										<td>Highest Months in Arrears (Last 24 Months)</td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsNLR)?"":$report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsNLR);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsCPA)?"":$report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsCPA);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->HighestMonthsInArrears)?"":$report->ConsumerCPANLRDebtSummary->HighestMonthsInArrears);?></td>
									  </tr>							  
									  <tr class="border_bottom">
										<td>Total Adverse Amount (Write offs/Repossessions)</td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmountNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmountNLR);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmountCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmountCPA);?></td>
										<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmount)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmount);?></td>
									  </tr>							  
									  <tr class="border_bottom">
										<td>Total Enquiries Done in the last 90 days by Subscriber</td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNNLR);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNCPA);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWN)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWN);?></td>
									  </tr>							  
									  <tr>
									  <tr class="border_bottom">
										<td>Total Enquiries Done in the last 90 days by Other Subscribers</td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOTHNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOTHNLR);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOTHCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOTHCPA);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOTH)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOTH);?></td>
									  </tr>							  
									  <tr>
										<td>Total No. of Accounts opened within the last 45 days</td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountsOpenedinLast45DaysNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountsOpenedinLast45DaysNLR);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountsOpenedinLast45DaysCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountsOpenedinLast45DaysCPA);?></td>
										<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountsOpenedinLast45Days)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountsOpenedinLast45Days);?></td>
									  </tr>

										  <tr class="border_bottom">
											<td>Description</td>
											<td>Total</td>
											<td>Amount</td>
											<td>Most Recent Date</td>
										  </tr>
										  <tr class="border_bottom">
											<td>Public Domain - Adverse / Defaults</td>
											<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoofAccountdefaults)?"":$report->ConsumerCPANLRDebtSummary->NoofAccountdefaults);?></td>
											<td>R<?php echo (is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmt)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmt);?></td>
											<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate)?"":$report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate);?></td>
										  </tr>
										  <tr class="border_bottom">
											<td>Default listing</td>
											<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->DefaultListingCount)?"":$report->ConsumerCPANLRDebtSummary->DefaultListingCount);?></td>
											<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->DefaultListingAmt)?"":$report->ConsumerCPANLRDebtSummary->DefaultListingAmt);?></td>
											<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->RecentDefaultListingDate)?"":$report->ConsumerCPANLRDebtSummary->RecentDefaultListingDate);?></td>
										  </tr>								  
										  <tr class="border_bottom">
											<td>Judgements</td>
											<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->JudgementCount)?"":$report->ConsumerCPANLRDebtSummary->JudgementCount);?></td>
											<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalJudgmentAmt)?"":$report->ConsumerCPANLRDebtSummary->TotalJudgmentAmt);?></td>
											<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->MostRecentJudgmentDate)?"":$report->ConsumerCPANLRDebtSummary->MostRecentJudgmentDate);?></td>
										  </tr>
										  <tr class="border_bottom">
											<td>Court Notices (Admin Orders/Sequestrations/Rehabilitation Orders)</td>
											<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnqinLast24Months)?"":$report->ConsumerCPANLRDebtSummary->CourtNoticeCount);?></td>
											<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalCourtNoticeAmt)?"":$report->ConsumerCPANLRDebtSummary->TotalCourtNoticeAmt);?></td>
											<td><?php (is_object($report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate)?"":$report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate);?></td>
										  </tr>
										  <tr class="border_bottom">
											<td>Enquiries (last 24 months)</td>
											<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnqinLast24Months)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnqinLast24Months);?></td>
											<td></td>
											<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->MostRecentEnqDateLast24Months)?"":$report->ConsumerCPANLRDebtSummary->MostRecentEnqDateLast24Months);?></td>
										  </tr>								  
										  
										  <tr class="border_bottom">
											<td>Debt Review Status</td>
											<td colspan="3"><?php echo (is_object($report->ConsumerCPANLRDebtSummary->DebtReviewStatus)?"":$report->ConsumerCPANLRDebtSummary->DebtReviewStatus);?></td>
										  </tr>								  
										  <tr class="border_bottom">
											<td>Dispute Information</td>
											<td colspan="3"><?php echo (is_object($report->ConsumerCPANLRDebtSummary->DisputeMessage)?"":$report->ConsumerCPANLRDebtSummary->DisputeMessage);?></td>
										  </tr>
									</table>
								<?php } else {?>
									<span>Debt Summary not found</span><br>
								<?php } ?>								
							</div><br/>
						<!-- Debt Summary -->
	
                     <!-- End of Address History-->
                    
                    <div class="col">
                     <div class="title-head"><strong>Address History</strong></div>
                    <hr class="hr-line"/>
					<?php if($report->ConsumerAddressHistory){ ?>
                     <table class="table-list">
                        <tr class="tr-list">
							<th class = "th-list">Bureau UpdateDate</th>
							<th  class = "th-list">Type</th>
							<th  class = "th-list">Line1</th>
							<th  class = "th-list">Line2</th>
							<th  class = "th-list">Line3</th>
							<th  class = "th-list">Line4</th>
							<th  class = "th-list">Postal Code</th>
						</tr>
						<?php 
						if(!is_object($report->ConsumerAddressHistory)){
							foreach($report->ConsumerAddressHistory as $ConsumerAddressHistory){ ?>
							<tr class="border_bottom">
									<td><?php echo (is_object($ConsumerAddressHistory->LastUpdatedDate)?"":$ConsumerAddressHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($ConsumerAddressHistory->AddressType)?"":$ConsumerAddressHistory->AddressType);?></td>
									<td><?php echo (is_object($ConsumerAddressHistory->Address1)?"":$ConsumerAddressHistory->Address1);?></td>
									<td><?php echo (is_object($ConsumerAddressHistory->Address2)?"":$ConsumerAddressHistory->Address2);?></td>
									<td><?php echo (is_object($ConsumerAddressHistory->Address3)?"":$ConsumerAddressHistory->Address3);?></td>
									<td><?php echo (is_object($ConsumerAddressHistory->Address4)?"":$ConsumerAddressHistory->Address4);?></td>
									<td><?php echo (is_object($ConsumerAddressHistory->PostalCode)?"":$ConsumerAddressHistory->PostalCode);?></td>
							</tr>
							<?php }
						} else { ?>
							<tr class="border_bottom">
									<td><?php echo (is_object($report->ConsumerAddressHistory->LastUpdatedDate)?"":$report->ConsumerAddressHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->AddressType)?"":$report->ConsumerAddressHistory->AddressType);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address1)?"":$report->ConsumerAddressHistory->Address1);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address2)?"":$report->ConsumerAddressHistory->Address2);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address3)?"":$report->ConsumerAddressHistory->Address3);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address4)?"":$report->ConsumerAddressHistory->Address4);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->PostalCode)?"":$report->ConsumerAddressHistory->PostalCode);?></td>
							</tr>							
						<?php } ?>
                    </table>
					<?php } else { ?>
					<span>Address History Not Found</span><br>
					<?php } ?>
              
                    </div><br/><br/>
                     <!-- End of Potential Fraud Indicators-->
                      <!-- Start of Contact No. History-->
                    <div class="title-head"><strong>Contact No. History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ConsumerTelephoneHistory){?>
                     <table class ="table-list">
                    <tr class="tr-list">
                        <th class = "th-list">Bureau UpdateDate</th>
                        <th class = "th-list">Type</th>
                        <th class = "th-list">Telephone No</th>
                    </tr>
					<?php 
						if(!is_object($report->ConsumerTelephoneHistory)){
							foreach($report->ConsumerTelephoneHistory as $ConsumerTelephoneHistory){ ?>
							<tr class="border_bottom">
									<td><?php echo (is_object($ConsumerTelephoneHistory->LastUpdatedDate)?"":$ConsumerTelephoneHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($ConsumerTelephoneHistory->TelephoneType)?"":$ConsumerTelephoneHistory->TelephoneType);?></td>
									<td><?php echo (is_object($ConsumerTelephoneHistory->TelephoneNo)?"":$ConsumerTelephoneHistory->TelephoneNo);?></td>
							</tr>
						<?php } 
					   } else { ?>
						<tr>
									<td><?php echo (is_object($report->ConsumerTelephoneHistory->LastUpdatedDate)?"":$report->ConsumerTelephoneHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneHistory->TelephoneType)?"":$report->ConsumerTelephoneHistory->TelephoneType);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneHistory->TelephoneNo)?"":$report->ConsumerTelephoneHistory->TelephoneNo);?></td>
						</tr>							 
					 <?php } ?>
					</table>
				<?php } else { ?>
                 <div>
					<span>Contact Number Not Found</span><br>
                </div>
				<?php } ?>
                    </div><br/><br/>
                     <!-- End of Contact No. History-->
                  <!-- Start of Consumer Email History-->
                
                     <div class="title-head"><strong>Consumer Email History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ConsumerEmailHistory){ ?>
                    <table class ="table-list">
						<tr class="tr-list">
							<th class = "th-list">Bureau UpdateDate</th>
							<th class = "th-list">E-mail Address</th>
						</tr>
						<?php 
						
						if (!is_object($report->ConsumerEmailHistory)){
							foreach($report->ConsumerEmailHistory as $ConsumerEmailHistory){?>
						<tr class="border_bottom">
							<td><?php echo (is_object($ConsumerEmailHistory->LastUpdatedDate)?"":$ConsumerEmailHistory->LastUpdatedDate);?></td>
							<td><?php echo (is_object($ConsumerEmailHistory->EmailAddress)?"":$ConsumerEmailHistory->EmailAddress);?></td>
						</tr>
						<?php }
						} else { ?>
						<tr class="border_bottom">
							<td><?php echo (is_object($report->ConsumerEmailHistory->LastUpdatedDate)?"":$report->ConsumerEmailHistory->LastUpdatedDate);?></td>
							<td><?php echo (is_object($report->ConsumerEmailHistory->EmailAddress)?"":$report->ConsumerEmailHistory->EmailAddress);?></td>
						</tr>
						<?php } ?>
					</table>
					<?php } else { ?>
					 <div>
						 <span>Email History Not Found</span><br>
					</div>
					<?php } ?>
                </div><br/><br/>
                     <!-- End of Consumer Email History-->
                    <!-- Start of Employment History -->
                    
                     <div class="title-head"><strong>Employment History</strong></div>
                    <hr class="hr-line"/>
                    <div class="col">
					<?php if($report->ConsumerEmploymentHistory){ ?>
						<table class ="table-list">
						<tr class="tr-list">
							<th class = "th-list">Bureau UpdateDate</th>
							<th class = "th-list">Employer</th>
							<th class = "th-list">Designation</th>
						</tr>
					<?php 
						if(!is_object($report->ConsumerEmploymentHistory)){
							foreach($report->ConsumerEmploymentHistory as $ConsumerEmploymentHistory){?>
							<tr class="border_bottom">
									<td><?php echo (is_object($ConsumerEmploymentHistory->LastUpdatedDate)?"":$ConsumerEmploymentHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($ConsumerEmploymentHistory->EmployerDetail)?"":$ConsumerEmploymentHistory->EmployerDetail);?></td>
									<td><?php echo (is_object($ConsumerEmploymentHistory->Designation)?"":$ConsumerEmploymentHistory->Designation);?></td>
							</tr>
						<?php }
						} else{?>
							<tr class="border_bottom">
									<td><?php echo (is_object($report->ConsumerEmploymentHistory->LastUpdatedDate)?"":$report->ConsumerEmploymentHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($report->ConsumerEmploymentHistory->EmployerDetail)?"":$report->ConsumerEmploymentHistory->EmployerDetail);?></td>
									<td><?php echo (is_object($report->ConsumerEmploymentHistory->Designation)?"":$report->ConsumerEmploymentHistory->Designation);?></td>
							</tr>						
						<?php } ?>
						</table>
					<?php } else { ?>
					 <div>
						 <span>Employment History Not Found</span>
					</div>
				<?php } ?>
                </div><br/><br/>
                     <!-- End of Employment History -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                    <div class="title-head"><strong>Consumer Cellular Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ConsumerTelephoneLinkageCellular){ ?>
                     <table class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                            <th class = "th-list">Name</th>
                            <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageCellular)){
								foreach($report->ConsumerTelephoneLinkageCellular as $ConsumerTelephoneLinkageCellular){?>
								<tr  class="border_bottom">
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->CellularNo)?"":$ConsumerTelephoneLinkageCellular->CellularNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->HomeTelephone)?"":$ConsumerTelephoneLinkageCellular->HomeTelephone);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->IDNo)?"":$ConsumerTelephoneLinkageCellular->IDNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->PassportNo)?"":$ConsumerTelephoneLinkageCellular->PassportNo);?></td>
								</tr>
							<?php } 
						} else {?>
								<tr class="border_bottom">
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->CellularNo)?"":$report->ConsumerTelephoneLinkageCellular->CellularNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->HomeTelephone)?"":$report->ConsumerTelephoneLinkageCellular->HomeTelephone);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->IDNo)?"":$report->ConsumerTelephoneLinkageCellular->IDNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->PassportNo)?"":$report->ConsumerTelephoneLinkageCellular->PassportNo);?></td>
								</tr>
						<?php } ?>
                    </table>
					<?php } else { ?>
					<div>
						<span>Consumer Telephone Linkage Cellular Not Found</span>
					</div>
					<?php } ?>
                 </div><br/><br/>
                     
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                      
                      <div class="title-head"><strong>Consumer Work Telephone Linkage</strong></div>
                    <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ConsumerTelephoneLinkageWork){?>
                     <table class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                             <th class = "th-list">Name</th>
                             <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageWork)){
								foreach($report->ConsumerTelephoneLinkageWork as $ConsumerTelephoneLinkageWork){?>
								<tr class="border_bottom">
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerName." ".$ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->CellularNo)?"":$ConsumerTelephoneLinkageWork->CellularNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->HomeTelephone)?"":$ConsumerTelephoneLinkageWork->HomeTelephone);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->IDNo)?"":$ConsumerTelephoneLinkageWork->IDNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->PassportNo)?"":$ConsumerTelephoneLinkageWork->PassportNo);?></td>
								</tr>
								<?php } 
							} else { ?>
								<tr class="border_bottom">
									<td><?php echo $report->ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->ConsumerName." ".$report->ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->CellularNo)?"":$report->ConsumerTelephoneLinkageWork->CellularNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->HomeTelephone)?"":$report->ConsumerTelephoneLinkageWork->HomeTelephone);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->IDNo)?"":$report->ConsumerTelephoneLinkageWork->IDNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->PassportNo)?"":$report->ConsumerTelephoneLinkageWork->PassportNo);?></td>
								</tr>							
							<?php } ?>
						</table>
					<?php } else { ?>
                     <div>
						<span>Consumer Telephone Linkage Work Not Found</span>
					</div>
					<?php } ?>
                  </div><br/><br/>
                      <!-- End of Consumer Telephone Linkage Cellular -->
                      <!-- Start of Consumer Telephone Linkage Cellular -->
                  
                  <div class="title-head"><strong>Consumer Home Telephone Linkage</strong></div>
                  <hr class="hr-line"/>
                     <div class="col">
					 <?php if($report->ConsumerTelephoneLinkageHome){?>
                     <table  class="table-list">
                        <tr class="tr-list">
                             <th class = "th-list">Customer Id</th>
                             <th class = "th-list">Name</th>
                             <th class = "th-list">Cell No</th>
                             <th class = "th-list">Work Tel</th>
                             <th class = "th-list">Idno</th>
                             <th class = "th-list">PassportNo</th>
                        </tr>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageHome)){
								foreach($report->ConsumerTelephoneLinkageHome as $ConsumerTelephoneLinkageHome){?>
								<tr  class="border_bottom">
									<td><?php echo $ConsumerTelephoneLinkageHome->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageHome->ConsumerName." ".$ConsumerTelephoneLinkageHome->Surname;?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageHome->CellularNo)?"":$ConsumerTelephoneLinkageHome->CellularNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageHome->HomeTelephone)?"":$ConsumerTelephoneLinkageHome->HomeTelephone);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageHome->IDNo)?"":$ConsumerTelephoneLinkageHome->IDNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageHome->PassportNo)?"":$ConsumerTelephoneLinkageHome->PassportNo);?></td>
								</tr>
							<?php } 
							} else { ?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageHome->ConsumerName." ".$report->ConsumerTelephoneLinkageHome->Surname;?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageHome->CellularNo)?"":$report->ConsumerTelephoneLinkageHome->CellularNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageHome->HomeTelephone)?"":$report->ConsumerTelephoneLinkageHome->HomeTelephone);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageHome->IDNo)?"":$report->ConsumerTelephoneLinkageHome->IDNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageHome->PassportNo)?"":$report->ConsumerTelephoneLinkageHome->PassportNo);?></td>
								</tr>							
							<?php } ?>
                    </table>
					<?php } else { ?>
                     <div>
						<span>Consumer Telephone Linkage Home Not Found</span>
					 </div>
					 <?php } ?>
                </div><br/><br/>
                <!-- End of Home Telephone -->
				
			<!-- Property Interest -->
				<?php if($report->ConsumerPropertyInformation){ ?>
                <div>
				 <div class="title-head"><strong>Property Interest</strong></div>
				   <hr class="hr-line"/>
						<div class="col">
							
							<?php if(is_array($report->ConsumerPropertyInformation)){
										foreach($report->ConsumerPropertyInformation as $ConsumerPropertyInformation ){
										?>
										<table class="table-list">
											<tr class="border_bottom">
												<td>Tittle Deed Number</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->TitleDeedNo)?"":$ConsumerPropertyInformation->TitleDeedNo);?></td>
												<td>Erf/Site No</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->ErfNo)?"":$ConsumerPropertyInformation->ErfNo);?></td>
											</tr>
											<tr class="border_bottom">
												<td>Deed Office</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->DeedsOffice)?"":$ConsumerPropertyInformation->DeedsOffice);?></td>
												<td>Physical Address</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->PhysicalAddress)?"":$ConsumerPropertyInformation->PhysicalAddress);?></td>
											</tr>
											<tr class="border_bottom">
												<td>Property Type</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->PropertyTypeDesc)?"":$ConsumerPropertyInformation->PropertyTypeDesc);?></td>
												<td>Extent/Size</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->ErfSize)?"":$ConsumerPropertyInformation->ErfSize);?></td>
											</tr>
											<tr class="border_bottom">
												<td>Purchase Date</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->PurchaseDate)?"":$ConsumerPropertyInformation->PurchaseDate);?></td>
												<td>Purchase Price</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->PurchasePriceAmt)?"":$ConsumerPropertyInformation->PurchasePriceAmt);?></td>
											</tr>
											<tr class="border_bottom">
												<td>Bond Holder</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->BondHolderName)?"":$ConsumerPropertyInformation->BondHolderName);?></td>
												<td>Bond Amount</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->BondAmt)?"":$ConsumerPropertyInformation->BondAmt);?></td>
											</tr>
											<tr class="border_bottom">
												<td>Bond Number</td>
												<td><?php echo (is_object($ConsumerPropertyInformation->BondAccountNo)?"":$ConsumerPropertyInformation->BondAccountNo);?></td>
												<td></td>
												<td></td>
											</tr>
										</table>
										<hr>
									<?php }
							} else { ?>
									<table class="table-list">
										<tr class="border_bottom">
											<td>Tittle Deed Number</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->TitleDeedNo)?"":$report->ConsumerPropertyInformation->TitleDeedNo);?></td>
											<td>Erf/Site No</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->ErfNo)?"":$report->ConsumerPropertyInformation->ErfNo);?></td>
										</tr>
										<tr class="border_bottom">
											<td>Deed Office</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->DeedsOffice)?"":$report->ConsumerPropertyInformation->DeedsOffice);?></td>
											<td>Physical Address</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->PhysicalAddress)?"":$report->ConsumerPropertyInformation->PhysicalAddress);?></td>
										</tr>
										<tr class="border_bottom">
											<td>Property Type</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->PropertyTypeDesc)?"":$report->ConsumerPropertyInformation->PropertyTypeDesc);?></td>
											<td>Extent/Size</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->ErfSize)?"":$report->ConsumerPropertyInformation->ErfSize);?></td>
										</tr>
										<tr class="border_bottom">
											<td>Purchase Date</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->PurchaseDate)?"":$report->ConsumerPropertyInformation->PurchaseDate);?></td>
											<td>Purchase Price</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->PurchasePriceAmt)?"":$report->ConsumerPropertyInformation->PurchasePriceAmt);?></td>
										</tr>
										<tr class="border_bottom">
											<td>Bond Holder</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->BondHolderName)?"":$report->ConsumerPropertyInformation->BondHolderName);?></td>
											<td>Bond Amount</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->BondAmt)?"":$report->ConsumerPropertyInformation->BondAmt);?></td>
										</tr>
										<tr class="border_bottom">
											<td>Bond Number</td>
											<td><?php echo (is_object($report->ConsumerPropertyInformation->BondAccountNo)?"":$report->ConsumerPropertyInformation->BondAccountNo);?></td>
											<td></td>
											<td></td>
										</tr>
									</table>
							<?php }?>
						</div>
              </div>
			  <?php } ?>
			<!-- Property Interest -->
			
			
			 <?php if($report->ConsumerDirectorSummary){ ?>
                <div>
				 <div class="title-head"><strong>Consumer Property and Director Summary</strong></div>
				   <hr class="hr-line"/>
				 <div class="col">
				   <table>
						   <tr>
						<th class="th-size-first"></th>
						<th class="th-size-second"></th>
						</tr>
						<tr class="tr-label">
						<td class="td-label">Total Property</td>
						
						<td class="td-value"><?php echo (is_object($report->ConsumerPropertyInformationSummary->TotalProperty)?"":$report->ConsumerPropertyInformationSummary->TotalProperty);?></td>
						</tr>
						 <tr class="tr-label">
						<td class="td-label">Purchase Price</td>
						<td class="td-value"><?php echo (is_object($report->ConsumerPropertyInformationSummary->PurchasePrice)?"":$report->ConsumerPropertyInformationSummary->PurchasePrice);?></td>
						</tr>
						 <tr class="tr-label">
						<td class="td-label">Number Of Company Director</td>
						<td class="td-value"><?php echo (is_object($report->ConsumerDirectorSummary->NumberOfCompanyDirector)?"":$report->ConsumerDirectorSummary->NumberOfCompanyDirector);?></td>
						</tr>
						</table>              
				  </div>
				</div>
			 <?php } ?>
  </body>
</html>