<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Trace Report</title>
</head>
<body>
<section class="content-header">
<?php 

		if($report->SubscriberInputDetails->SubscriberName){
			?>
				<h1>Deis Technologies/h1>
			<?php
		}
	?>
</section>
<div class="content">
    <div class="box">
        <div class="box-header with-border">
           	<?php
			
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Telephone Trace'){
					$backMenu = "searchhistory/view";
					?>
						<h3 class="box-title">&nbsp;&nbsp;<?php echo $report->SubscriberInputDetails->EnquiryType." Report";?></h3>
					<?php
				}
			?>
			
           <div class=" pull-right">
		   <?php
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Telephone Trace'){
					$backMenu = "searchhistory/view";
					?>
				<div>
					 <a href="<?php echo site_url();?>/searchhistory/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			<?php
				}
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Easy Trace'){?>
				<div>
					 <a href="<?php echo site_url();?>/searchhistory/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			<?php
				}
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Address Trace'){
					$backMenu = "searchhistory/view";
					?>
				<div>
					 <a href="<?php echo site_url();?>/searchhistory/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>		
			<?php
				}
				if($report->SubscriberInputDetails->EnquiryType =='Consumer Trace'){
					$backMenu = "searchhistory/view";
				?>
				<div>
					 <a href="<?php echo site_url();?>/searchhistory/downloadidreport">
						<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
						<span>Download PDF Document</span>
					</a>
				</div>
				<?php 
			} ?>
            </div>
			<div class="pull-left">
				<a class="btn btn-primary" href="<?php echo site_url()."/searchhistory/view";?>">
				<li class="fa fa-step-backward">&nbsp;&nbsp;back&nbsp;&nbsp;</li>
				</a>
			</div>

        </div>
        

        <div class="box-body no-padding">
            <div class="panel panel-primary">
                <div class="panel-heading">Enquiry Input Details</div>
                <div class="panel-body">
                    <div class="col">
					  <table class="table table-striped">
						<tr>
							<td>Enquiry Date</td>
							<td><?php echo str_ireplace("t"," ",(substr($report->SubscriberInputDetails->EnquiryDate,0,strpos($report->SubscriberInputDetails->EnquiryDate,"."))));?></td>
						</tr>
						<tr>
							<td>Enquiry Type</td>
							<td><?php echo $report->SubscriberInputDetails->EnquiryType;?></td>
						</tr>
						<tr>
							<td>Subscriber Name</td>
							<td>Deis Technologies</td>
						</tr>
						<tr>
							<td>User Name</td>
							<td><?php echo $this->session->userdata('fullname');?></td>
						</tr>
						<tr>
							<td>Enquiry Input</td>
							<td><?php echo $report->SubscriberInputDetails->EnquiryInput;?></td>
						</tr>
					  </table>
                    </div>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Personal Details Summary</div>
                <div class="panel-body">
                    <div class="col">
						<table class="table table-striped">
							<tr>
								<td><strong>Personal</strong></td>
								<td><strong>Contact</strong></td>
								<td><strong>Employment</strong></td>
							</tr>
							<tr>
								<td>
									<table class="table table-striped">
										<tr>
											<td>Title</td>
											<td><?php echo (is_object($report->ConsumerDetail->TitleDesc)?"":$report->ConsumerDetail->TitleDesc);?></td>
										</tr>
										<tr>
											<td>ID No</td>
											<td><?php echo (is_object($report->ConsumerDetail->IDNo)?"":$report->ConsumerDetail->IDNo);?></td>
										</tr>										
										<tr>
											<td>Gender</td>
											<td><?php echo (is_object($report->ConsumerDetail->Gender)?"":$report->ConsumerDetail->Gender);?></td>
										</tr>
										<tr>
											<td>Passport or 2nd ID No</td>
											<td><?php echo (is_object($report->ConsumerDetail->PassportNo)?"":$report->ConsumerDetail->PassportNo);?></td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td><?php echo (is_object($report->ConsumerDetail->BirthDate)?"":$report->ConsumerDetail->BirthDate);?></td>
										</tr>
										<tr>
											<td>Marital Status</td>
											<td><?php echo (is_object($report->ConsumerDetail->MaritalStatusDesc)?"":$report->ConsumerDetail->MaritalStatusDesc);?></td>
										</tr>
										<tr>
											<td>First Name</td>
											<td><?php echo (is_object($report->ConsumerDetail->FirstName)?"":$report->ConsumerDetail->FirstName);?></td>
										</tr>
										<tr>
											<td>Second Name</td>
											<td><?php echo (is_object($report->ConsumerDetail->SecondName)?"":$report->ConsumerDetail->SecondName);?></td>
										</tr>
										<tr>
											<td>Surname</td>
											<td><?php echo (is_object($report->ConsumerDetail->Surname)?"":$report->ConsumerDetail->Surname);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											<td>Postal Address</td>
											<td><?php echo (is_object($report->ConsumerDetail->PostalAddress)?"":$report->ConsumerDetail->PostalAddress);?></td>								
										<tr>
										</tr>
											<td>Residential Address</td>
											<td><?php echo (is_object($report->ConsumerDetail->ResidentialAddress)?"":$report->ConsumerDetail->ResidentialAddress);?></td>
										</tr>
										</tr>
											<td>Telephone No. (H)</td>
											<td><?php echo (is_object($report->ConsumerDetail->HomeTelephoneNo)?"":$report->ConsumerDetail->HomeTelephoneNo);?></td>								
										<tr>
										</tr>	
											<td>Telephone No (W)</td>
											<td><?php echo (is_object($report->ConsumerDetail->WorkTelephoneNo)?"":$report->ConsumerDetail->WorkTelephoneNo);?></td>
										<tr>
										<tr>
											<td>Cellular/Mobile</td>
											<td><?php echo (is_object($report->ConsumerDetail->CellularNo)?"":$report->ConsumerDetail->CellularNo);?></td>								
										<tr>
										<tr>
											<td>E-mail Address</td>
											<td><?php echo (is_object($report->ConsumerDetail->EmailAddress)?"":$report->ConsumerDetail->EmailAddress);?></td>								
										<tr>
									</table>
								</td>
								<td>
									<table class="table table-striped">
									<tr>							
											<td>Current Employer</td>
											<td><?php echo (is_object($report->ConsumerDetail->EmployerDetail)?"":$report->ConsumerDetail->EmployerDetail);?></td>
										</tr>
									</table>
								</td>								
							</tr>
							
							
						</table>
                  
                    </div>
                </div>
              </div>
 
              <div class="panel panel-primary">
                <div class="panel-heading">Potential Fraud Indicators</div>
                <div class="panel-body">
                    <div class="col">
					
						<table class="table table-striped">
							<tr>
								<td>ID No. Verified Status</td>
								<td><?php echo (is_object($report->ConsumerFraudIndicatorsSummary->HomeAffairsVerificationYN)?"":$report->ConsumerFraudIndicatorsSummary->HomeAffairsVerificationYN);?></td>
							</tr>
							<tr>
								<td>ID No. Deceased Status</td>
								<td><?php echo (is_object($report->ConsumerFraudIndicatorsSummary->HomeAffairsDeceasedStatus)?"":$report->ConsumerFraudIndicatorsSummary->HomeAffairsDeceasedStatus);?></td>
							</tr>										
							<tr>
								<td>ID No. Found on Fraud Database</td>
								<td><?php echo (is_object($report->ConsumerFraudIndicatorsSummary->SAFPSListingYN)?"":$report->ConsumerFraudIndicatorsSummary->SAFPSListingYN);?></td>
							</tr>
						</table>
                    </div>
                </div>
              </div>
			  
              <div class="panel panel-primary">
                <div class="panel-heading">Debt Summary</div>
                <div class="panel-body">
                    <div class="col">
						
						<?php if($report->ConsumerCPANLRDebtSummary){
							?>
							
							<table class="table table-striped">
							  <tr>
								<td>Description</td>
								<td>NLR</td>
								<td>CPA</td>
								<td>Total</td>
							  </tr>
							  <tr>
								<td>Total No. of Active Accounts</td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsNLR);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOFActiveAccountsCPA);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOFActiveAccounts)?"":$report->ConsumerCPANLRDebtSummary->NoOFActiveAccounts);?></td>
							  </tr>
							  <tr>
								<td>Total No. of Accounts in Good Standing</td>
								<td style="color: green;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingNLR);?></td>
								<td style="color: green;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStandingCPA);?></td>
								<td style="color: green;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStanding)?"":$report->ConsumerCPANLRDebtSummary->NoOfAccountInGoodStanding);?></td>
							  </tr>
							  <tr>
								<td>Total No. of Accounts In Arrears</td>
								<td style="color: red;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR);?></td>
								<td style="color: red;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA);?></td>
								<td style="color: red;"><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmount)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmount);?></td>
							  </tr>
							  <tr>
								<td>Total No. of Paid Up or Closed Accounts (last 24 months)</td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsNLR);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccountsCPA);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccounts)?"":$report->ConsumerCPANLRDebtSummary->NoOfPaidUpOrClosedAccounts);?></td>
							  </tr>							  
							  <tr>
								<td>Total Monthly Instalments</td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentNLR);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallmentCPA);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallment)?"":$report->ConsumerCPANLRDebtSummary->TotalMonthlyInstallment);?></td>
							  </tr>
							  <tr>
								<td>Total Outstanding Debt</td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtNLR);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalOutStandingDebtCPA);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalOutStandingDebt)?"":$report->ConsumerCPANLRDebtSummary->TotalOutStandingDebt);?></td>
							  </tr>
							  <tr>
								<td>Total Arrear Amount</td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountNLR);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmountCPA);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalArrearAmount)?"":$report->ConsumerCPANLRDebtSummary->TotalArrearAmount);?></td>
							  </tr>
							  <tr>
								<td>Highest Months in Arrears (Last 24 Months)</td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsNLR)?"":$report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsNLR);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsCPA)?"":$report->ConsumerCPANLRDebtSummary->HighestMonthsinArrearsCPA);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->HighestMonthsInArrears)?"":$report->ConsumerCPANLRDebtSummary->HighestMonthsInArrears);?></td>
							  </tr>							  
							  <tr>
								<td>Total Adverse Amount (Write offs/Repossessions)</td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmountNLR)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmountNLR);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmountCPA)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmountCPA);?></td>
								<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmount)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmount);?></td>
							  </tr>							  
							  <tr>
								<td>Total Enquiries Done in the last 90 days by Subscriber</td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNNLR)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNNLR);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNCPA)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWNCPA);?></td>
								<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWN)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnquiriesLast90DaysOWN);?></td>
							  </tr>							  
							  <tr>
							  <tr>
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
							</table>
							<hr>
							<table class="table table-striped">
								  <tr>
									<td>Description</td>
									<td>Total</td>
									<td>Amount</td>
									<td>Most Recent Date</td>
								  </tr>
								  <tr>
									<td>Public Domain - Adverse / Defaults</td>
									<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoofAccountdefaults)?"":$report->ConsumerCPANLRDebtSummary->NoofAccountdefaults);?></td>
									<td>R<?php echo (is_object($report->ConsumerCPANLRDebtSummary->TotalAdverseAmt)?"":$report->ConsumerCPANLRDebtSummary->TotalAdverseAmt);?></td>
									<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate)?"":$report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate);?></td>
								  </tr>
								  <tr>
									<td>Default listing</td>
									<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->DefaultListingCount)?"":$report->ConsumerCPANLRDebtSummary->DefaultListingCount);?></td>
									<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->DefaultListingAmt)?"":$report->ConsumerCPANLRDebtSummary->DefaultListingAmt);?></td>
									<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->RecentDefaultListingDate)?"":$report->ConsumerCPANLRDebtSummary->RecentDefaultListingDate);?></td>
								  </tr>								  
								  <tr>
									<td>Judgements</td>
									<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->JudgementCount)?"":$report->ConsumerCPANLRDebtSummary->JudgementCount);?></td>
									<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalJudgmentAmt)?"":$report->ConsumerCPANLRDebtSummary->TotalJudgmentAmt);?></td>
									<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->MostRecentJudgmentDate)?"":$report->ConsumerCPANLRDebtSummary->MostRecentJudgmentDate);?></td>
								  </tr>
								  <tr>
									<td>Court Notices (Admin Orders/Sequestrations/Rehabilitation Orders)</td>
									<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnqinLast24Months)?"":$report->ConsumerCPANLRDebtSummary->CourtNoticeCount);?></td>
									<td>R<?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->TotalCourtNoticeAmt)?"":$report->ConsumerCPANLRDebtSummary->TotalCourtNoticeAmt);?></td>
									<td><?php (is_object($report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate)?"":$report->ConsumerCPANLRDebtSummary->MostRecentAdverseDate);?></td>
								  </tr>
								  <tr>
									<td>Enquiries (last 24 months)</td>
									<td><?php echo (int)(is_object($report->ConsumerCPANLRDebtSummary->NoOfEnqinLast24Months)?"":$report->ConsumerCPANLRDebtSummary->NoOfEnqinLast24Months);?></td>
									<td></td>
									<td><?php echo (is_object($report->ConsumerCPANLRDebtSummary->MostRecentEnqDateLast24Months)?"":$report->ConsumerCPANLRDebtSummary->MostRecentEnqDateLast24Months);?></td>
								  </tr>								  
								  
								  <tr>
									<td>Debt Review Status</td>
									<td colspan="3"><?php echo (is_object($report->ConsumerCPANLRDebtSummary->DebtReviewStatus)?"":$report->ConsumerCPANLRDebtSummary->DebtReviewStatus);?></td>
								  </tr>								  
								  <tr>
									<td>Dispute Information</td>
									<td colspan="3"><?php echo (is_object($report->ConsumerCPANLRDebtSummary->DisputeMessage)?"":$report->ConsumerCPANLRDebtSummary->DisputeMessage);?></td>
								  </tr>
							</table>
						<?php } else {?>
							<span>Debt Summary not found</span><br>
						<?php } ?>
                    </div>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Address History</div>
                <div class="panel-body">
					<?php if($report->ConsumerAddressHistory){ ?>
                    <table class="table table-striped" id="ConsumerAddressHistory">
						<thead>
                        <tr>
                            <th>Bureau Update</th>
                             <th>Type</th>
                             <th>Line1</th>
                             <th>Line2</th>
                             <th>Line3</th>
                             <th>Line4</th>
                             <th>Postal Code</th>
                        </tr>
						</thead>
						<tbody>
						<?php 
							if(!is_object($report->ConsumerAddressHistory)){
								foreach($report->ConsumerAddressHistory as $ConsumerAddressHistory){ ?>
								<tr>
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
								<tr>
									<td><?php echo (is_object($report->ConsumerAddressHistory->LastUpdatedDate)?"":$report->ConsumerAddressHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->AddressType)?"":$report->ConsumerAddressHistory->AddressType);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address1)?"":$report->ConsumerAddressHistory->Address1);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address2)?"":$report->ConsumerAddressHistory->Address2);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address3)?"":$report->ConsumerAddressHistory->Address3);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->Address4)?"":$report->ConsumerAddressHistory->Address4);?></td>
									<td><?php echo (is_object($report->ConsumerAddressHistory->PostalCode)?"":$report->ConsumerAddressHistory->PostalCode);?></td>
								</tr>							
							<?php } ?>
							</tbody>
                    </table>
					<?php } else { ?>
					<span>Address History Not Found</span><br>
					<?php } ?>
                    
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Consumer Email History</div>
                <div class="panel-body">
				<?php if($report->ConsumerEmailHistory){ ?>
                    <table class="table table-striped"
						<?php 
						
						if (!is_object($report->ConsumerEmailHistory)){
							foreach($report->ConsumerEmailHistory as $ConsumerEmailHistory){?>
							<tr>
							  <td>Bureau Update</td><td><?php echo (is_object($ConsumerEmailHistory->LastUpdatedDate)?"":$ConsumerEmailHistory->LastUpdatedDate);?></td>
							</tr>	
							 <tr>	
							   <td>E-mail Address</td><td><?php echo (is_object($ConsumerEmailHistory->EmailAddress)?"":$ConsumerEmailHistory->EmailAddress);?></td>
							 </tr>
							<?php }
						} else { ?>
							<tr>
							  <td>Bureau Update</td><td><?php echo (is_object($report->ConsumerEmailHistory->LastUpdatedDate)?"":$report->ConsumerEmailHistory->LastUpdatedDate);?></td>
							</tr>	
							<tr>							
							   <td>E-mail Address</td><td><?php echo (is_object($report->ConsumerEmailHistory->EmailAddress)?"":$report->ConsumerEmailHistory->EmailAddress);?></td>
							 </tr>
					<?php } ?>
                     </table>
				<?php } else { ?>
                       <div>
                         <span>Email History Not Found</span><br>
					</div>
				<?php } ?>
              </div>
           </div>

           <div class="panel panel-primary">
            <div class="panel-heading">Consumer Employment History</div>
            <div class="panel-body">
			<?php if($report->ConsumerEmploymentHistory){ ?>
                <table class="table table-striped" id="ConsumerEmploymentHistory">
					<thead>
                    <tr>
                        <th>Bureau Update</th>
                        <th>Employer</th>
                        <th>Designation</th>
                    </tr>
					</thead>
					<tbody>
					<?php 
						if(!is_object($report->ConsumerEmploymentHistory)){
							foreach($report->ConsumerEmploymentHistory as $ConsumerEmploymentHistory){?>
								<tr>
									<td><?php echo (is_object($ConsumerEmploymentHistory->LastUpdatedDate)?"":$ConsumerEmploymentHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($ConsumerEmploymentHistory->EmployerDetail)?"":$ConsumerEmploymentHistory->EmployerDetail);?></td>
									<td><?php echo (is_object($ConsumerEmploymentHistory->Designation)?"":$ConsumerEmploymentHistory->Designation);?></td>
								</tr>
							<?php }
						} else{
							
							?>
								<tr>
									<td><?php echo (is_object($report->ConsumerEmploymentHistory->LastUpdatedDate)?"":$report->ConsumerEmploymentHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($report->ConsumerEmploymentHistory->EmployerDetail)?"":$report->ConsumerEmploymentHistory->EmployerDetail);?></td>
									<td><?php echo (is_object($report->ConsumerEmploymentHistory->Designation)?"":$report->ConsumerEmploymentHistory->Designation);?></td>
								</tr>
						<?php } ?>
						</tbody>
                </table>
				<?php } else { ?>
                 <div>
                    <span>Employment History Not Found</span><br>
                </div>
				<?php } ?>
            </div>
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">Contact No. History</div>
            <div class="panel-body">
				<?php if($report->ConsumerTelephoneHistory){?>
                <table class="table table-striped" id="ConsumerTelephoneHistory">
					<thead>
                    <tr>
                        <th>Bureau Update</th>
                        <th>Type</th>
                        <th>Telephone No</th>
                    </tr>
					</thead>
					<tbody>
						<?php 
							 if(!is_object($report->ConsumerTelephoneHistory)){
								foreach($report->ConsumerTelephoneHistory as $ConsumerTelephoneHistory){ ?>
								<tr>
									<td><?php echo (is_object($ConsumerTelephoneHistory->LastUpdatedDate)?"":$ConsumerTelephoneHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($ConsumerTelephoneHistory->TelephoneType)?"":$ConsumerTelephoneHistory->TelephoneType);?></td>
									<td><?php echo (is_object($ConsumerTelephoneHistory->TelephoneNo)?"":$ConsumerTelephoneHistory->TelephoneNo);?></td>
								</tr>
								<?php } 
							 } else {?>
								<tr>
									<td><?php echo (is_object($report->ConsumerTelephoneHistory->LastUpdatedDate)?"":$report->ConsumerTelephoneHistory->LastUpdatedDate);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneHistory->TelephoneType)?"":$report->ConsumerTelephoneHistory->TelephoneType);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneHistory->TelephoneNo)?"":$report->ConsumerTelephoneHistory->TelephoneNo);?></td>
								</tr>							 
							 <?php } ?>
					</tbody>
                </table>
				<?php } else { ?>
                 <div>
					<span>Contact Number Not Found</span><br>
                </div>
				<?php } ?>
          </div>
         </div>
         
           <div class="panel panel-primary">
                <div class="panel-heading">Telephone Linkages</div>
                <div class="panel-body">
                <!-- Consumer Telephone Linkage Cellular -->
                <div class="panel panel-secondary">
                <div class="panel-heading"><strong>Consumer Telephone Linkage Cellular</strong></div>
                <div class="panel-body">
					<?php 
					if($report->ConsumerTelephoneLinkageCellular){?>
                    <table class="table table-striped"id="ConsumerTelephoneLinkageCellular">
						<thead>
                        <tr>
                             <th>Customer Id</th>
                            <th>Name</th>
                            <th>Cell No</th>
                             <th>Work Tel</th>
                             <th>Idno</th>
                             <th>PassportNo</th>
                        </tr>
						</thead>
						<tbody>
						<?php if(!is_object($report->ConsumerTelephoneLinkageCellular)){
								foreach($report->ConsumerTelephoneLinkageCellular as $ConsumerTelephoneLinkageCellular){?>
								<tr>
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->CellularNo)?"":$ConsumerTelephoneLinkageCellular->CellularNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->HomeTelephone)?"":$ConsumerTelephoneLinkageCellular->HomeTelephone);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->IDNo)?"":$ConsumerTelephoneLinkageCellular->IDNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageCellular->PassportNo)?"":$ConsumerTelephoneLinkageCellular->PassportNo);?></td>
								</tr>
						<?php } 
						} else {?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageCellular->ConsumerName." ".$ConsumerTelephoneLinkageCellular->Surname;?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->CellularNo)?"":$report->ConsumerTelephoneLinkageCellular->CellularNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->HomeTelephone)?"":$report->ConsumerTelephoneLinkageCellular->HomeTelephone);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->IDNo)?"":$report->ConsumerTelephoneLinkageCellular->IDNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageCellular->PassportNo)?"":$report->ConsumerTelephoneLinkageCellular->PassportNo);?></td>
								</tr>
						<?php } ?>
						</tbody>
                    </table>
					<?php } else { ?>
                    <span>Consumer Telephone Linkage Cellular Not Found</span><br>
					<?php } ?>
				</div>
              </div>
                <!-- Consumer Telephone Linkage Work -->
                 <div class="panel panel-secondary">
                <div class="panel-heading"><strong>Consumer Telephone Linkage Work</strong></div>
                <div class="panel-body">
				<?php if($report->ConsumerTelephoneLinkageWork){?>
                    <table class="table table-striped" id="ConsumerTelephoneLinkageWork">
						<thead>
                        <tr>
                             <th>Customer Id</th>
                             <th>Name</th>
                             <th>Cell No</th>
                             <th>Work Tel</th>
                             <th>Idno</th>
                             <th>PassportNo</th>
                        </tr>
						</thead>
						<tbody>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageWork)){
								foreach($report->ConsumerTelephoneLinkageWork as $ConsumerTelephoneLinkageWork){?>
								<tr>
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $ConsumerTelephoneLinkageWork->ConsumerName." ".$ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->CellularNo)?"":$ConsumerTelephoneLinkageWork->CellularNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->HomeTelephone)?"":$ConsumerTelephoneLinkageWork->HomeTelephone);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->IDNo)?"":$ConsumerTelephoneLinkageWork->IDNo);?></td>
									<td><?php echo (is_object($ConsumerTelephoneLinkageWork->PassportNo)?"":$ConsumerTelephoneLinkageWork->PassportNo);?></td>
								</tr>
								<?php } 
							} else { ?>
								<tr>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->ConsumerID;?></td>
									<td><?php echo $report->ConsumerTelephoneLinkageWork->ConsumerName." ".$report->ConsumerTelephoneLinkageWork->Surname;?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->CellularNo)?"":$report->ConsumerTelephoneLinkageWork->CellularNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->HomeTelephone)?"":$report->ConsumerTelephoneLinkageWork->HomeTelephone);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->IDNo)?"":$report->ConsumerTelephoneLinkageWork->IDNo);?></td>
									<td><?php echo (is_object($report->ConsumerTelephoneLinkageWork->PassportNo)?"":$report->ConsumerTelephoneLinkageWork->PassportNo);?></td>
								</tr>							
							<?php } ?>
						</tbody>
                    </table>
					<?php } else { ?>
                    <span>Consumer Telephone Linkage Work Not Found</span><br>
					<?php } ?>
                    </div>
              </div>
              <!-- Consumer Telephone Linkage Home -->
                <div class="panel panel-secondary">
                <div class="panel-heading"><strong>Consumer Telephone Linkage Home</strong></div>
                <div class="panel-body">
				<?php if($report->ConsumerTelephoneLinkageHome){?>
                    <table class="table table-striped"id="ConsumerTelephoneLinkageHome">
						<thead>
                        <tr>
                             <th>Customer Id</th>
                            <th>Name</th>
                            <th>Cell No</th>
                             <th>Work Tel</th>
                             <th>Idno</th>
                             <th>PassportNo</th>
                        </tr>
						</thead>
						<tbody>
						<?php 
							if(!is_object($report->ConsumerTelephoneLinkageHome)){
								foreach($report->ConsumerTelephoneLinkageHome as $ConsumerTelephoneLinkageHome){?>
								<tr>
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
							</tbody>
                    </table>
					<?php } else { ?>
						<span>Consumer Telephone Linkage Home Not Found</span><br>
					<?php } ?>
                </div>
              </div>
                </div>
                </div>
				<?php if($report->ConsumerPropertyInformation){?>
                <div>
				 <div class="panel panel-primary">
					<div class="panel-heading">Property Interest</div>
					<div class="panel-body">
						<div class="col">
							
							<?php if(is_array($report->ConsumerPropertyInformation)){
								foreach($report->ConsumerPropertyInformation as $ConsumerPropertyInformation ){
								?>
									<table class="table table-striped">
									<tr>
										<td>Tittle Deed Number</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->TitleDeedNo)?"":$ConsumerPropertyInformation->TitleDeedNo);?></td>
										<td>Erf/Site No</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->ErfNo)?"":$ConsumerPropertyInformation->ErfNo);?></td>
									</tr>
									<tr>
										<td>Deed Office</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->DeedsOffice)?"":$ConsumerPropertyInformation->DeedsOffice);?></td>
										<td>Physical Address</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->PhysicalAddress)?"":$ConsumerPropertyInformation->PhysicalAddress);?></td>
									</tr>
									<tr>
										<td>Property Type</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->PropertyTypeDesc)?"":$ConsumerPropertyInformation->PropertyTypeDesc);?></td>
										<td>Extent/Size</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->ErfSize)?"":$ConsumerPropertyInformation->ErfSize);?></td>
									</tr>
									<tr>
										<td>Purchase Date</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->PurchaseDate)?"":$ConsumerPropertyInformation->PurchaseDate);?></td>
										<td>Purchase Price</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->PurchasePriceAmt)?"":$ConsumerPropertyInformation->PurchasePriceAmt);?></td>
									</tr>
									<tr>
										<td>Bond Holder</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->BondHolderName)?"":$ConsumerPropertyInformation->BondHolderName);?></td>
										<td>Bond Amount</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->BondAmt)?"":$ConsumerPropertyInformation->BondAmt);?></td>
									</tr>
									<tr>
										<td>Bond Number</td>
										<td><?php echo (is_object($ConsumerPropertyInformation->BondAccountNo)?"":$ConsumerPropertyInformation->BondAccountNo);?></td>
										<td></td>
										<td></td>
									</tr>
								</table>
								<hr>
							<?php }
							} else {
									?>
									<table class="table table-striped">
									<tr>
										<td>Tittle Deed Number</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->TitleDeedNo)?"":$report->ConsumerPropertyInformation->TitleDeedNo);?></td>
										<td>Erf/Site No</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->ErfNo)?"":$report->ConsumerPropertyInformation->ErfNo);?></td>
									</tr>
									<tr>
										<td>Deed Office</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->DeedsOffice)?"":$report->ConsumerPropertyInformation->DeedsOffice);?></td>
										<td>Physical Address</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->PhysicalAddress)?"":$report->ConsumerPropertyInformation->PhysicalAddress);?></td>
									</tr>
									<tr>
										<td>Property Type</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->PropertyTypeDesc)?"":$report->ConsumerPropertyInformation->PropertyTypeDesc);?></td>
										<td>Extent/Size</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->ErfSize)?"":$report->ConsumerPropertyInformation->ErfSize);?></td>
									</tr>
									<tr>
										<td>Purchase Date</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->PurchaseDate)?"":$report->ConsumerPropertyInformation->PurchaseDate);?></td>
										<td>Purchase Price</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->PurchasePriceAmt)?"":$report->ConsumerPropertyInformation->PurchasePriceAmt);?></td>
									</tr>
									<tr>
										<td>Bond Holder</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->BondHolderName)?"":$report->ConsumerPropertyInformation->BondHolderName);?></td>
										<td>Bond Amount</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->BondAmt)?"":$report->ConsumerPropertyInformation->BondAmt);?></td>
									</tr>
									<tr>
										<td>Bond Number</td>
										<td><?php echo (is_object($report->ConsumerPropertyInformation->BondAccountNo)?"":$report->ConsumerPropertyInformation->BondAccountNo);?></td>
										<td></td>
										<td></td>
									</tr>
									</table>
							<?php } ?>
							
						</div>
					</div>
				  </div>
              </div>
			  <?php } 
				if($report->consumerDirectorSummary){
			  ?>
              <div>
              <div class="panel panel-primary">
                <div class="panel-heading">Consumer Director Summary</div>
                <div class="panel-body">
                    <div class="col">
                        <div class="col-xs-4 ">Number Of Company Director&nbsp;&nbsp;<strong><span><?php echo (is_object($report->ConsumerDirectorSummary->NumberOfCompanyDirector)?"":$report->ConsumerDirectorSummary->NumberOfCompanyDirector);?></span></strong></div>
                    </div>
                </div>
              </div>
              </div>
			 <?php } ?>
    </div>
    </div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$('#ConsumerAddressHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	$('#ConsumerEmploymentHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	$('#ConsumerTelephoneHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	$('#ConsumerTelephoneLinkageCellular').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	$('#ConsumerTelephoneLinkageWork').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	$('#ConsumerTelephoneLinkageHome').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
});
</script>
</html>