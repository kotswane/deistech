<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Trace Report</title>
	<style>
	.scroll {
	   width: 600px;
	   overflow: scroll;
	}
	</style>
</head>
<body>
<section class="content-header">
    <?php

		if($report->SubscriberInputDetails->SubscriberName){
			?>
				<h1>Deis Technologies</h1>
			<?php
		}
	?>
</section>
<div class="content">
    <div class="box">
        <div class="box-header with-border">
			   <h3 class="box-title">Procurement Report</h3><br/><br/>
			   <div class="box-tools pull-right">
					<div>
						 <a href="<?php echo site_url();?>/searchhistory/downloadidreportproc">
							<img src="<?php echo base_url();?>dist/img/pdf_icon.png" height="35" width="35"/>
							<span>Download PDF Document</span>
						</a>
					</div>	
					<br clear="all" />
				</div>
				<div class="box-tools pull-left">
					<form action="<?php echo site_url()."/searchhistory/view";?>" method="post" id="form-search-procs">
						<div>
							 <a class="btn btn-primary" id="btn-proc-back">
								<li class="fa fa-step-backward">&nbsp;&nbsp;back&nbsp;&nbsp;</li>
							</a>
						</div>
						<?php echo $hiddenField; ?>
						<input type="hidden" name ="fromlist" value="back" />
						<input type="hidden" name ="postback" value="post" />
					</form>	
				 <br clear="all" />
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
                <div class="panel-heading">Company Statutory Information</div>
                <div class="panel-body">
                    <div class="col">
					<table class="table">
					 <tr>
					 <td>
					  <table class="table table-striped">
						<tr>
							<td>Reference No</td>
							<td><?php echo $report->CommercialBusinessInformation->ReferenceNo;?></td>
						</tr>
						<tr>
							<td>Registered Business Name</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->CommercialName)?"":$report->CommercialBusinessInformation->CommercialName);?></td>
						</tr>
						<tr>
							<td>Previous Business Name</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->PreviousBussName)?"":$report->CommercialBusinessInformation->PreviousBussName);?></td>
						</tr>
						<tr>
							<td>Registration Number</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNo)?"":$report->CommercialBusinessInformation->RegistrationNo);?></td>
						</tr>
						<tr>
							<td>BusinessStart Date</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->BusinessStartDate)?"":$report->CommercialBusinessInformation->BusinessStartDate);?></td>
						</tr>
						<tr>
							<td>Financial Year End</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->FinancialYearEnd)?"":$report->CommercialBusinessInformation->FinancialYearEnd);?></td>
						</tr>
						<tr>
							<td>Registration Number Old</td>
							<td><?php (is_object($report->CommercialBusinessInformation->RegistrationNoOld)?"":$report->CommercialBusinessInformation->RegistrationNoOld);?></td>
						</tr>
						<tr>
							<td>Business Status</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatus)?"":$report->CommercialBusinessInformation->CommercialStatus);?></td>
						</tr>
						<tr>
							<td>Business Type</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->CommercialType)?"":$report->CommercialBusinessInformation->CommercialType);?></td>
						</tr>
						<tr>
							<td>Tax Number</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->TaxNo)?"":$report->CommercialBusinessInformation->TaxNo);?></td>
						</tr>
					  </table>
					</td>
					<td>
					  <table class="table table-striped">
						<tr>
							<td>Trade Name</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->TradeName)?"":$report->CommercialBusinessInformation->TradeName);?></td>
						</tr>
						<tr>
							<td>Physical Address</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->PhysicalAddress)?"":$report->CommercialBusinessInformation->PhysicalAddress);?></td>
						</tr>
						<tr>
							<td>Postal Address</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->PostalAddress)?"":$report->CommercialBusinessInformation->PostalAddress);?></td>
						</tr>
						<tr>
							<td>Registration Date</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->RegistrationDate)?"":$report->CommercialBusinessInformation->RegistrationDate);?></td>
						</tr>
						<tr>
							<td>Telephone Number</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->TelephoneNo)?"":$report->CommercialBusinessInformation->TelephoneNo);?></td>
						</tr>
						<tr>
							<td>Fax Number</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->FaxNo)?"":$report->CommercialBusinessInformation->FaxNo);?></td>
						</tr>
						<tr>
							<td>Business Email</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->BussEmail)?"":$report->CommercialBusinessInformation->BussEmail);?></td>
						</tr>
						<tr>
							<td>Business Website</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->BussWebsite)?"":$report->CommercialBusinessInformation->BussWebsite);?></td>
						</tr>
						<tr>
							<td>Age of Business</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->AgeofBusiness)?"":$report->CommercialBusinessInformation->AgeofBusiness);?></td>
						</tr>
						<tr>
							<td>Authorised Capital Amount</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedCapitalAmt)?"":$report->CommercialBusinessInformation->AuthorisedCapitalAmt);?></td>
						</tr>
					  </table>
					 </td> 

					<td>
					  <table class="table table-striped">
						<tr>
							<td>Issued Number Of Shares</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->IssuedNoOfShares)?"":$report->CommercialBusinessInformation->IssuedNoOfShares);?></td>
						</tr>
						<tr>
							<td>Registration Number Converted</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->RegistrationNoConverted)?"":$report->CommercialBusinessInformation->RegistrationNoConverted);?></td>
						</tr>
						<tr>
							<td>Financial Effective Date</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->FinancialEffectiveDate)?"":$report->CommercialBusinessInformation->FinancialEffectiveDate);?></td>
						</tr>
						<tr>
							<td>Authorised Number Of Shares</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->AuthorisedNoOfShares)?"":$report->CommercialBusinessInformation->AuthorisedNoOfShares);?></td>
						</tr>
						<tr>
							<td>Issued Capital Amount</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->IssuedCapitalAmt)?"":$report->CommercialBusinessInformation->IssuedCapitalAmt);?></td>
						</tr>
						<tr>
							<td>Commercial Status Date</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->CommercialStatusDate)?"":$report->CommercialBusinessInformation->CommercialStatusDate);?></td>
						</tr>
						<tr>
							<td>Description of Business</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->BusinessDesc)?"":$report->CommercialBusinessInformation->BusinessDesc);?></td>
						</tr>
						<tr>
							<td>SICC Code</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->SIC)?"":$report->CommercialBusinessInformation->SIC);?></td>
						</tr>
						<tr>
							<td>Legal Entity</td>
							<td><?php echo (is_object($report->CommercialBusinessInformation->LegalEntity)?"":$report->CommercialBusinessInformation->LegalEntity);?></td>
						</tr>
					  </table>
					 </td> 
					
					</tr>
					</table>
					<?php if($blackListed->id) { ?>
						<td>
						  <table class="table table-striped">
							<tr>
								<td><strong><span style="color: red">Blacklisted by <?php echo $blackListed->authorizeby." for ".$blackListed->reason;?></span></strong></td>
							</tr>
						  </table>
						</td>
					<?php } ?>
					</div>
                </div>
              </div>
			  
			  <?php if($report->CommercialScoring){?>
			  
			  <div class="panel panel-primary">
                <div class="panel-heading">Commercial Score</div>
                <div class="panel-body">
				  <div class="row">
					<div class="col-lg-6">
						<table class="table table-striped">
							<tr>
								<td><strong><span>Score Date</strong></span></td>
								<td><strong><span><?php echo $report->CommercialScoring->ScoreDate;?></strong></span></td>
							</tr>
							<tr>
								<td><strong><span>Final Score</strong></span></td>
								<td><strong><span><?php echo $report->CommercialScoring->FinalScore;?></strong></span></td>
							</tr>
							<tr>
								<td colspan="2">
								<p><strong><span>Variables affecting Score:</strong></span></p>
								</br>
								<p><strong><span>*&nbsp;Age, Status and History</strong></span><br>
									<strong><span>*&nbsp;Adverse records</strong></span></br>
									<strong><span>*&nbsp;Financial references, Assest etc</strong></span>
								</p>
								</br>
								<p><strong><span>The score is calculated automatically</br>
								recalculated as soon as any</br> variables changes</strong></span></p>
								</td>
								
							</tr>
						</table>
					</div>
					<div class="col-lg-6">
					<table class="table">
						<tr>
							<td><strong>Score</strong></td>
							<td><strong>Band / Message</strong></td>
						</tr>
						<tr >
							<td><strong><span>0</strong></span></td>
							<td><strong><span>Could not scored due to certain factors</br>preventing this such as deregistration</br>and/or liquidation.</strong></span></td>
						</tr>
						<tr>
							<td><strong><span>1 - 89</strong></span></td>
							<td><strong><span>Recieved a Very Poor scoring therefore the</br>risk is seen  to be very high when<br>undertaking dealings with the subject.</strong></span></td>
						</tr>
						<tr>
							<td><strong><span>90 - 139</strong></span></td>
							<td><strong><span>Recieved a Poor scoring therefore the risk</br>is seen  to be very high when<br>undertaking dealings with the subject.</strong></span></td>
						</tr>
						<tr>
							<td><strong><span>140 - 189</strong></span></td>
							<td><strong><span>Recieved an OK scoring therefore the risk</br>is seen to be low to medium<br>when undertaking dealings with the subject.</strong></span></td>
						</tr>
						<tr>
							<td><strong><span>190 - 235</strong></span></td>
							<td><strong><span>Recieved an Good scoring therefore the risk</br>is seen to be low when undertaking dealings with the subject.</strong></span></td>
						</tr>
					</table>
				   </div>
				  </div>
				</div>
			  </div>
			  <?php }?>
			  
				<div class="panel panel-primary">
				<div class="panel-heading">Auditors</div>
				<div class="panel-body">
					<?php if($report->CommercialAuditorInformation){ 
								if(is_object($report->CommercialAuditorInformation)){ ?>
									<div class="panel panel-primary">
									<div class="panel-heading">Active Auditor: <?php echo $report->CommercialAuditorInformation->AuditorName;?></div>
									<div class="panel-body">
										<table class="table table-striped">
											<tr>
												<td>
													<table class="table">
														<tr>
															 <td><strong><span>Auditor Name</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->AuditorName)?"":$report->CommercialAuditorInformation->AuditorName);?></td>
														</tr>
														<tr>
															 <td><strong><span>Profession No</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->ProfessionNo)?"":$report->CommercialAuditorInformation->ProfessionNo);?></td>
														</tr>
														<tr>
															 <td><strong><span>Auditor Status</strong></span></td>
															 <td><?php echo (($report->CommercialAuditorInformation->AuditorStatusDesc == "Current")?"Active":$report->CommercialAuditorInformation->AuditorStatusDesc);?></td>
														</tr>
													 </table>
												</td>
												<td>
													<table class="table">
														<tr>
															 <td><strong><span>Auditor Start Date</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->ActStartdate)?"":$report->CommercialAuditorInformation->ActStartdate);?></td>
														</tr>
														<tr>
															 <td><strong><span>Profession Code</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->ProfessionDesc)?"":$report->CommercialAuditorInformation->ProfessionDesc);?></td>
														</tr>
														<tr>
															 <td><strong><span>Auditor Type Code</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->AuditorTypeDesc)?"":$report->CommercialAuditorInformation->AuditorTypeDesc);?></td>
														</tr>
													</table>
												</td>
												<td>
													<table class="table">
														<tr>
														 <td><strong><span>Physical Address</strong></span></td>
														 <td><?php echo (is_object($report->CommercialAuditorInformation->PhysicalAddress)?"":$report->CommercialAuditorInformation->PhysicalAddress);?></td>
														</tr>
														<tr>
															 <td><strong><span>Postal Address</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->PostalAddress)?"":$report->CommercialAuditorInformation->PostalAddress);?></td>
														</tr>
														<tr>
															 <td><strong><span>Update Date</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->LastUpdatedDate)?"":$report->CommercialAuditorInformation->LastUpdatedDate);?></td>
														</tr>
													 </table>
												 </td>
												 <td>
													<table class="table">
														<tr>
															 <td><strong><span>No of years in Business</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->NoOfYearsInbBusiness)?"":$report->CommercialAuditorInformation->NoOfYearsInbBusiness);?></td>
														</tr>
														<tr>
															 <td><strong><span>Auditor End Date</strong></span></td>
															 <td><?php echo (is_object($report->CommercialAuditorInformation->ActEndDate)?"":$report->CommercialAuditorInformation->ActEndDate);?></td>
														</tr>
														<tr>
															<td colspan="2">&nbsp;</td>
														</tr>
													</table>
												</td>
											</tr>
											
										</table>	
										</div>
									</div>
							<?php } else {
									foreach($report->CommercialAuditorInformation as $CommercialAuditorInformation){  ?>
									<div class="panel panel-primary">
									<div class="panel-heading">Active Auditor: <?php echo $CommercialAuditorInformation->AuditorName;?></div>
									<div class="panel-body">
										<table class="table table-striped">
											<tr>
												<td>
													<table class="table">
														<tr>
															 <td><strong><span>Auditor Name</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->AuditorName)?"":$CommercialAuditorInformation->AuditorName);?></td>
														</tr>
														<tr>
															 <td><strong><span>Profession No</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->ProfessionNo)?"":$CommercialAuditorInformation->ProfessionNo);?></td>
														</tr>
														<tr>
															 <td><strong><span>Auditor Status</strong></span></td>
															 <td><?php echo (($CommercialAuditorInformation->AuditorStatusDesc == "Current")?"Active":$CommercialAuditorInformation->AuditorStatusDesc);?></td>
														</tr>
													 </table>
												</td>
												<td>
													<table class="table">
														<tr>
															 <td><strong><span>Auditor Start Date</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->ActStartdate)?"":$CommercialAuditorInformation->ActStartdate);?></td>
														</tr>
														<tr>
															 <td><strong><span>Profession Code</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->ProfessionDesc)?"":$CommercialAuditorInformation->ProfessionDesc);?></td>
														</tr>
														<tr>
															 <td><strong><span>Auditor Type Code</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->AuditorTypeDesc)?"":$CommercialAuditorInformation->AuditorTypeDesc);?></td>
														</tr>
													</table>
												</td>
												<td>
													<table class="table">
														<tr>
														 <td><strong><span>Physical Address</strong></span></td>
														 <td><?php echo (is_object($CommercialAuditorInformation->PhysicalAddress)?"":$CommercialAuditorInformation->PhysicalAddress);?></td>
														</tr>
														<tr>
															 <td><strong><span>Postal Address</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->PostalAddress)?"":$CommercialAuditorInformation->PostalAddress);?></td>
														</tr>
														<tr>
															 <td><strong><span>Update Date</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->LastUpdatedDate)?"":$CommercialAuditorInformation->LastUpdatedDate);?></td>
														</tr>
													 </table>
												 </td>
												 <td>
													<table class="table">
														<tr>
															 <td><strong><span>No of years in Business</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->NoOfYearsInbBusiness)?"":$CommercialAuditorInformation->NoOfYearsInbBusiness);?></td>
														</tr>
														<tr>
															 <td><strong><span>Auditor End Date</strong></span></td>
															 <td><?php echo (is_object($CommercialAuditorInformation->ActEndDate)?"":$CommercialAuditorInformation->ActEndDate);?></td>
														</tr>
														<tr>
															<td colspan="2">&nbsp;</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>	
										</div>
										</div>
									<?php }
								} 
							} else { ?>
									<span>Auditors Not Found</span><br>
							<?php } ?>
				</div>
				</div>
				
				
		       <div class="panel panel-primary">
                <div class="panel-heading">Commercial Contact Information</div>
					<div class="panel-body">
						<?php if($report->XDSCommercialAddressHistory){ ?>
						   <div class="panel panel-primary">
							<div class="panel-heading">Address History Information</div>
								<div class="panel-body">						
									<table class="table">
										<tr>
											 <th>Date captured</th>
											 <th>Date Changed</th>
											 <th>Type</th>
											 <th>Line1</th>
											 <th>Line2</th>
											 <th>Line3</th>
											 <th>Line4</th>
											 <th>Postal Codes</th>
										</tr>
										<?php if(!is_array($report->XDSCommercialAddressHistory)){?>
										<tr>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->CreatedOnDate)?"":$report->XDSCommercialAddressHistory->CreatedOnDate);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->OccupiedDate)?"":$report->XDSCommercialAddressHistory->OccupiedDate);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->AddressType)?"":$report->XDSCommercialAddressHistory->AddressType);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address1)?"":$report->XDSCommercialAddressHistory->Address1);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address2)?"":$report->XDSCommercialAddressHistory->Address2);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address3)?"":$report->XDSCommercialAddressHistory->Address3);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->Address4)?"":$report->XDSCommercialAddressHistory->Address4);?></td>
											<td><?php echo (is_object($report->XDSCommercialAddressHistory->PostalCode)?"":$report->XDSCommercialAddressHistory->PostalCode);?></td>
										</tr>							
										<?php } else {
											foreach($report->XDSCommercialAddressHistory as $XDSCommercialAddressHistory){	
											?>	
											<tr>
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
										}?>
									 </table>	
								</div>
							</div>
						<?php } else { ?>
						   <div class="panel panel-primary">
								<div class="panel-heading">Address History Information</div>
									<div class="panel-body">
									<span>Address History Not Found</span><br>
								</div>
							</div>
						<?php } ?>
						
						
						<?php if($report->XDSCommercialContactHistory){ ?>
						   <div class="panel panel-primary">
							<div class="panel-heading">Contact History Information</div>
								<div class="panel-body">						
									<table class="table">
										<tr>
											 <th>Date captured</th>
											 <th>Date Changed</th>
											 <th>Type</th>
											 <th>Line1</th>
										</tr>
										<?php if(!is_array($report->XDSCommercialContactHistory)){?>
										<tr>
											<td><?php echo (is_object($report->XDSCommercialContactHistory->CreatedOnDate)?"":$report->XDSCommercialContactHistory->CreatedOnDate);?></td>
											<td><?php echo (is_object($report->XDSCommercialContactHistory->OccupiedDate)?"":$report->XDSCommercialContactHistory->OccupiedDate);?></td>
											<td><?php echo (is_object($report->XDSCommercialContactHistory->ContactNumberType)?"":$report->XDSCommercialContactHistory->ContactNumberType);?></td>
											<td><?php echo (is_object($report->XDSCommercialContactHistory->Detail)?"":$report->XDSCommercialContactHistory->Detail);?></td>
										</tr>							
										<?php } else {
											foreach($report->XDSCommercialContactHistory as $XDSCommercialContactHistory){	
											?>	
											<tr>
												<td><?php echo (is_object($XDSCommercialContactHistory->CreatedOnDate)?"":$XDSCommercialContactHistory->CreatedOnDate);?></td>
												<td><?php echo (is_object($XDSCommercialContactHistory->OccupiedDate)?"":$XDSCommercialContactHistory->OccupiedDate);?></td>
												<td><?php echo (is_object($XDSCommercialContactHistory->ContactNumberType)?"":$XDSCommercialContactHistory->ContactNumberType);?></td>
												<td><?php echo (is_object($XDSCommercialContactHistory->Detail)?"":$XDSCommercialContactHistory->Detail);?></td>
											</tr>							
											<?php } 
										}?>
									 </table>	
								</div>
							</div>
						<?php } else { ?>
						   <div class="panel panel-primary">
								<div class="panel-heading">Contact History Information</div>
									<div class="panel-body">
									<span>Contact History Not Found</span><br>
								</div>
							</div>
						<?php } ?>						
					</div>
                </div>
				
		       <div class="panel panel-primary">
                <div class="panel-heading">Company Vat Information</div>
					<div class="panel-body">
						<?php if($report->CommercialVATInformation){ ?>						
							<table class="table">
								<tr>
									 <th>Company Name</th>
									 <th>Trading Name</th>
									 <th>VAT Number</th>
									 <th>VAT Liable Date</th>
									 <th>Status</th>
									 <th>Status Date</th>
								</tr>
								<?php if(!is_array($report->CommercialVATInformation)){?>
								<tr>
									<td><?php echo (is_object($report->CommercialVATInformation->CommercialName)?"":$report->CommercialVATInformation->CommercialName);?></td>
									<td><?php echo (is_object($report->CommercialVATInformation->TradeName)?"":$report->CommercialVATInformation->TradeName);?></td>
									<td><?php echo (is_object($report->CommercialVATInformation->VATNumber)?"":$report->CommercialVATInformation->VATNumber);?></td>
									<td><?php echo (is_object($report->CommercialVATInformation->VATLiableDate)?"":$report->CommercialVATInformation->VATLiableDate);?></td>
									<td><?php echo (is_object($report->CommercialVATInformation->Status)?"":$report->CommercialVATInformation->Status);?></td>
									<td><?php echo (is_object($report->CommercialVATInformation->StatusChangeDate)?"":$report->CommercialVATInformation->StatusChangeDate);?></td>
								</tr>							
								<?php } else {
									foreach($report->CommercialVATInformation as $CommercialVATInformation){	
									?>	
									<tr>
										<td><?php echo (is_object($CommercialVATInformation->CommercialName)?"":$CommercialVATInformation->CommercialName);?></td>
										<td><?php echo (is_object($CommercialVATInformation->TradeName)?"":$CommercialVATInformation->TradeName);?></td>
										<td><?php echo (is_object($CommercialVATInformation->VATNumber)?"":$CommercialVATInformation->VATNumber);?></td>
										<td><?php echo (is_object($CommercialVATInformation->VATLiableDate)?"":$CommercialVATInformation->VATLiableDate);?></td>
										<td><?php echo (is_object($CommercialVATInformation->Status)?"":$CommercialVATInformation->Status);?></td>
										<td><?php echo (is_object($CommercialVATInformation->StatusChangeDate)?"":$CommercialVATInformation->StatusChangeDate);?></td>
									</tr>							
									<?php } 
								}?>
							 </table>
						<?php } else { ?>
									<span>Company Vat Information Not Found</span><br>
						<?php } ?>						
					</div>
                </div>



				<div class="panel panel-primary">
                <div class="panel-heading">Trade References</div>
                <div class="panel-body">
					<?php if($report->CommercialTradeReferencesInformation){ 
							if(is_object($report->CommercialTradeReferencesInformation)){
								?>
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Date</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Createdondate)?"":$report->CommercialTradeReferencesInformation->Createdondate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Supplier</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Supplier)?"":$report->CommercialTradeReferencesInformation->Supplier);?></td>
													</tr>
													<tr>
														 <td><strong><span>Contact</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->TelephoneContact)?"":$report->CommercialTradeReferencesInformation->TelephoneContact);?></td>
													</tr>
													<tr>
														 <td><strong><span>Surety Value</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->SuretyValue)?"":$report->CommercialTradeReferencesInformation->SuretyValue);?></td>
													</tr>
													<tr>
														 <td><strong><span>Notarial Bonds</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Nortarial)?"":$report->CommercialTradeReferencesInformation->Nortarial);?></td>
													</tr>
													<tr>
														 <td><strong><span>Age of Acc</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->AgeOfAccount)?"":$report->CommercialTradeReferencesInformation->AgeOfAccount);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
													 <td><strong><span>Credit Limit</strong></span></td>
													 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->CreditLimit)?"":$report->CommercialTradeReferencesInformation->CreditLimit);?></td>
													</tr>
													<tr>
														 <td><strong><span>Max Credit</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->MaxLimit)?"":$report->CommercialTradeReferencesInformation->MaxLimit);?></td>
													</tr>
													<tr>
														 <td><strong><span>Terms Given</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->Terms)?"":$report->CommercialTradeReferencesInformation->Terms);?></td>
													</tr>
													<tr>
														 <td><strong><span>Average Purchase</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->AveragePurchases)?"":$report->CommercialTradeReferencesInformation->AveragePurchases);?></td>
													</tr>
													<tr>
														 <td><strong><span>Terms Taken</strong></span></td>
														 <td><?php echo (is_object($report->CommercialTradeReferencesInformation->TermsTaken)?"":$report->CommercialTradeReferencesInformation->TermsTaken);?></td>
													</tr>
													<tr>
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
									<table class="table table-striped">
											<tr>
												<td>
													<table class="table">
														<tr>
															 <td><strong><span>Date</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->Createdondate)?"":$CommercialTradeReferencesInformation->Createdondate);?></td>
														</tr>
														<tr>
															 <td><strong><span>Supplier</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->Supplier)?"":$CommercialTradeReferencesInformation->Supplier);?></td>
														</tr>
														<tr>
															 <td><strong><span>Contact</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->TelephoneContact)?"":$CommercialTradeReferencesInformation->TelephoneContact);?></td>
														</tr>
														<tr>
															 <td><strong><span>Surety Value</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->SuretyValue)?"":$CommercialTradeReferencesInformation->SuretyValue);?></td>
														</tr>
														<tr>
															 <td><strong><span>Notarial Bonds</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->Nortarial)?"":$CommercialTradeReferencesInformation->Nortarial);?></td>
														</tr>
														<tr>
															 <td><strong><span>Age of Acc</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->AgeOfAccount)?"":$CommercialTradeReferencesInformation->AgeOfAccount);?></td>
														</tr>
													</table>
												</td>
												<td>
													<table class="table">
														<tr>
														 <td><strong><span>Credit Limit</strong></span></td>
														 <td><?php echo (is_object($CommercialTradeReferencesInformation->CreditLimit)?"":$CommercialTradeReferencesInformation->CreditLimit);?></td>
														</tr>
														<tr>
															 <td><strong><span>Max Credit</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->MaxLimit)?"":$CommercialTradeReferencesInformation->MaxLimit);?></td>
														</tr>
														<tr>
															 <td><strong><span>Terms Given</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->Terms)?"":$CommercialTradeReferencesInformation->Terms);?></td>
														</tr>
														<tr>
															 <td><strong><span>Average Purchase</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->AveragePurchases)?"":$CommercialTradeReferencesInformation->AveragePurchases);?></td>
														</tr>
														<tr>
															 <td><strong><span>Terms Taken</strong></span></td>
															 <td><?php echo (is_object($CommercialTradeReferencesInformation->TermsTaken)?"":$CommercialTradeReferencesInformation->TermsTaken);?></td>
														</tr>
														<tr>
															<td><strong><span>Comments</strong></span></td>
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
                </div>
              </div>
	
						<?php if($report->CommercialJudgment){ ?>
						   <div class="panel panel-primary">
							<div class="panel-heading">Judgments</div>
								<div class="panel-body">						
									<table class="table">
										<tr>
											 <th>Case No.</th>
											 <th>Issue Date</th>
											 <th>Judgment Type</th>
											 <th>Amount</th>
											 <th>Plaintiff Name</th>
											 <th>Court Name</th>
											 <th>Attorney Name</th>
											 <th>Attorney Phone No</th>
											 <th>Commercial Name</th>
											 <th>Case Reason</th>
										</tr>
										<?php if(!is_array($report->CommercialJudgment)){?>
										<tr>
											<td><?php echo (is_object($report->CommercialJudgment->CaseNumber)?"":$report->CommercialJudgment->CaseNumber);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->CaseFilingDate)?"":$report->CommercialJudgment->CaseFilingDate);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->CaseType)?"":$report->CommercialJudgment->CaseType);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->DisputeAmt)?"":$report->CommercialJudgment->DisputeAmt);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->PlaintiffName)?"":$report->CommercialJudgment->PlaintiffName);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->CourtName)?"":$report->CommercialJudgment->CourtName);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->AttorneyName)?"":$report->CommercialJudgment->AttorneyName);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->TelephoneNo)?"":$report->CommercialJudgment->TelephoneNo);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->CommercialName)?"":$report->CommercialJudgment->CommercialName);?></td>
											<td><?php echo (is_object($report->CommercialJudgment->CommercialName)?"":$report->CommercialJudgment->CommercialName);?></td>
										</tr>							
										<?php } else {
											foreach($report->CommercialJudgment as $CommercialJudgment){	
											?>	
											<tr>
												<td><?php echo (is_object($CommercialJudgment->CreatedOnDate)?"":$CommercialJudgment->CreatedOnDate);?></td>
												<td><?php echo (is_object($CommercialJudgment->CaseFilingDate)?"":$CommercialJudgment->CaseFilingDate);?></td>
												<td><?php echo (is_object($CommercialJudgment->CaseType)?"":$CommercialJudgment->CaseType);?></td>
												<td><?php echo (is_object($CommercialJudgment->DisputeAmt)?"":$CommercialJudgment->DisputeAmt);?></td>
												<td><?php echo (is_object($CommercialJudgment->PlaintiffName)?"":$CommercialJudgment->PlaintiffName);?></td>
												<td><?php echo (is_object($CommercialJudgment->CourtName)?"":$CommercialJudgment->CourtName);?></td>
												<td><?php echo (is_object($CommercialJudgment->AttorneyName)?"":$CommercialJudgment->AttorneyName);?></td>
												<td><?php echo (is_object($CommercialJudgment->TelephoneNo)?"":$CommercialJudgment->TelephoneNo);?></td>
												<td><?php echo (is_object($CommercialJudgment->CommercialName)?"":$CommercialJudgment->CommercialName);?></td>
												<td><?php echo (is_object($CommercialJudgment->CommercialName)?"":$CommercialJudgment->CommercialName);?></td>
											</tr>							
											<?php } 
										}?>
									 </table>	
								</div>
							</div>
						<?php } else { ?>
						   <div class="panel panel-primary">
								<div class="panel-heading">Judgment Information</div>
									<div class="panel-body">
									<span>Judgment Not Found</span><br>
								</div>
							</div>
						<?php } ?>
						
						
						<?php if($report->CommercialPossibleJudgment){ ?>
						   <div class="panel panel-primary">
							<div class="panel-heading">Possible Judgments</div>
								<div class="panel-body">						
									<table class="table">
										<tr>
											 <th>Case No.</th>
											 <th>Issue Date</th>
											 <th>Judgment Type</th>
											 <th>Amount</th>
											 <th>Plaintiff Name</th>
											 <th>Court Name</th>
											 <th>Attorney Name</th>
											 <th>Attorney Phone No</th>
											 <th>Commercial Name</th>
											 <th>Case Reason</th>
										</tr>
										<?php if(!is_array($report->CommercialPossibleJudgment)){?>
										<tr>
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
											<tr>
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
								</div>
							</div>
						<?php } else { ?>
						   <div class="panel panel-primary">
								<div class="panel-heading">Possible Judgment</div>
									<div class="panel-body">
									<span>Possible Judgment Not Found</span><br>
								</div>
							</div>
						<?php } ?>	


					   <div class="panel panel-primary">
						<div class="panel-heading">Business Rescue - (No Data Available)</div>
						</div>
	
					</div>
                </div>
				
				<div class="panel panel-primary">
                <div class="panel-heading">Property Interest</div>
                <div class="panel-body">
					<?php if($report->CommercialPropertyInformation){ 
							if(is_object($report->CommercialPropertyInformation)){
								?>
									<div class="panel panel-primary">
									<div class="panel-heading">Property Interest 1</div>
									<div class="panel-body">
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Title Deed number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->TitleDeedNo)?"":$report->CommercialPropertyInformation->TitleDeedNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Deeds Office</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->DeedsOffice)?"":$report->CommercialPropertyInformation->DeedsOffice);?></td>
													</tr>
													<tr>
														 <td><strong><span>Property Type</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->PropertyTypeDesc)?"":$report->CommercialPropertyInformation->PropertyTypeDesc);?></td>
													</tr>
													<tr>
														 <td><strong><span>Purchase Date</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->PurchaseDate)?"":$report->CommercialPropertyInformation->PurchaseDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Purchase Price</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->PurchasePriceAmt)?"0.00":$report->CommercialPropertyInformation->PurchasePriceAmt);?></td>
													</tr>
													<tr>
														 <td><strong><span>Transfer Date</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->TransferDate)?"":$report->CommercialPropertyInformation->TransferDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bond Holder</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->BondHolderName)?"":$report->CommercialPropertyInformation->BondHolderName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bond Number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->BondAccountNo)?"":$report->CommercialPropertyInformation->BondAccountNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bond Amount</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->BondAmt)?"":$report->CommercialPropertyInformation->BondAmt);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Physical Address</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->PhysicalAddress)?"":$report->CommercialPropertyInformation->PhysicalAddress);?></td>
													</tr>
													<tr>
														 <td><strong><span>Township</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->TownshipName)?"":$report->CommercialPropertyInformation->TownshipName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Farm Name</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->FarmName)?"":$report->CommercialPropertyInformation->FarmName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Stand number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->StandNo)?"":$report->CommercialPropertyInformation->StandNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Portion Number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->PortionNo)?"":$report->CommercialPropertyInformation->PortionNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Scheme Number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->SchemeName)?"":$report->CommercialPropertyInformation->SchemeName);?></td>
													</tr>
													<tr>
														 <td><strong><span>ERF/Site Number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->ErfNo)?"":$report->CommercialPropertyInformation->ErfNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Extent/Size</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->ErfSize)?"":$report->CommercialPropertyInformation->ErfSize);?></td>
													</tr>
													<tr>
														 <td><strong><span>% of Ownership</strong></span></td>
														 <td><?php echo (is_object($report->CommercialPropertyInformation->BuyerSharePerc)?"":$report->CommercialPropertyInformation->BuyerSharePerc);?></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</div>		
								</div>		
								<?php
							} else {
								foreach($report->CommercialPropertyInformation as $CommercialPropertyInformation){ ?>
									<div class="panel panel-primary">
									<div class="panel-heading">Property Interest <?php echo ++$countCommercialPropertyInformation;?></div>
									<div class="panel-body">
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Title Deed number</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->TitleDeedNo)?"":$CommercialPropertyInformation->TitleDeedNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Deeds Office</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->DeedsOffice)?"":$CommercialPropertyInformation->DeedsOffice);?></td>
													</tr>
													<tr>
														 <td><strong><span>Property Type</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->PropertyTypeDesc)?"":$CommercialPropertyInformation->PropertyTypeDesc);?></td>
													</tr>
													<tr>
														 <td><strong><span>Purchase Date</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->PurchaseDate)?"":$CommercialPropertyInformation->PurchaseDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Purchase Price</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->PurchasePriceAmt)?"":$CommercialPropertyInformation->PurchasePriceAmt);?></td>
													</tr>
													<tr>
														 <td><strong><span>Transfer Date</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->TransferDate)?"":$CommercialPropertyInformation->TransferDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bond Holder</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->BondHolderName)?"":$CommercialPropertyInformation->BondHolderName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bond Number</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->BondAccountNo)?"":$CommercialPropertyInformation->BondAccountNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bond Amount</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->BondAmt)?"":$CommercialPropertyInformation->BondAmt);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Physical Address</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->PhysicalAddress)?"":$CommercialPropertyInformation->PhysicalAddress);?></td>
													</tr>
													<tr>
														 <td><strong><span>Township</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->TownshipName)?"":$CommercialPropertyInformation->TownshipName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Farm Name</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->FarmName)?"":$CommercialPropertyInformation->FarmName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Stand number</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->StandNo)?"":$CommercialPropertyInformation->StandNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Portion Number</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->PortionNo)?"":$CommercialPropertyInformation->PortionNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Scheme Number</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->SchemeName)?"":$CommercialPropertyInformation->SchemeName);?></td>
													</tr>
													<tr>
														 <td><strong><span>ERF/Site Number</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->ErfNo)?"":$CommercialPropertyInformation->ErfNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Extent/Size</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->ErfSize)?"":$CommercialPropertyInformation->ErfSize);?></td>
													</tr>
													<tr>
														 <td><strong><span>% of Ownership</strong></span></td>
														 <td><?php echo (is_object($CommercialPropertyInformation->BuyerSharePerc)?"":$CommercialPropertyInformation->BuyerSharePerc);?></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</div>		
								</div>																		
								<?php }
							}
							?>
                    
					<?php } else { ?>
					<span>Property Interest Not Found</span><br>
					<?php } ?>
                </div>
              </div>
			  
				<div class="panel panel-primary">
                <div class="panel-heading">Bank Codes History</div>
                <div class="panel-body">
					<?php if($report->CommercialBankCodeHistory){ 
							if(is_object($report->CommercialBankCodeHistory)){
								?>
									<div class="panel panel-primary">
									<div class="panel-heading">Bankcode 1</div>
									<div class="panel-body">
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Request Date</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->DateRequested)?"":$report->CommercialBankCodeHistory->DateRequested);?></td>
													</tr>
													<tr>
														 <td><strong><span>Company</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->Company)?"":$report->CommercialBankCodeHistory->Company);?></td>
													</tr>
													<tr>
														 <td><strong><span>Account Number</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->AccountNumber)?"":$report->CommercialBankCodeHistory->AccountNumber);?></td>
													</tr>
													<tr>
														 <td><strong><span>Branch Name</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->BranchName)?"":$report->CommercialBankCodeHistory->BranchName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Amount</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->CurrencyType)?"":$report->CommercialBankCodeHistory->CurrencyType)."".(is_object($report->CommercialBankCodeHistory->PurchasePriceAmt)?"":$report->CommercialBankCodeHistory->PurchasePriceAmt);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Bank</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->Bank1)?"":$report->CommercialBankCodeHistory->Bank1);?></td>
													</tr>
													<tr>
														 <td><strong><span>Terms</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->terms)?"":$report->CommercialBankCodeHistory->terms);?></td>
													</tr>
													<tr>
														 <td><strong><span>Date Opened</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->DateOpened)?"":$report->CommercialBankCodeHistory->DateOpened);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bank Code</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->BankCode)?"":$report->CommercialBankCodeHistory->BankCode);?></td>
													</tr>
													<tr>
														 <td><strong><span>Years with Bank</strong></span></td>
														 <td><?php echo (is_object($report->CommercialBankCodeHistory->Years_with_Bank)?"":$report->CommercialBankCodeHistory->Years_with_Bank);?></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											 <td><strong><span>Comments</strong></span></td>
											 <td><?php echo (is_object($report->CommercialBankCodeHistory->Comment)?"":$report->CommercialBankCodeHistory->Comment);?></td>
										</tr>
									</table>
								</div>		
								</div>		
								<?php
							} else {
								foreach($report->CommercialBankCodeHistory as $CommercialBankCodeHistory){ ?>
									<div class="panel panel-primary">
									<div class="panel-heading">Property Interest <?php echo ++$countCommercialBankCodeHistory;?></div>
									<div class="panel-body">
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Request Date</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->DateRequested)?"":$CommercialBankCodeHistory->DateRequested);?></td>
													</tr>
													<tr>
														 <td><strong><span>Company</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->Company)?"":$CommercialBankCodeHistory->Company);?></td>
													</tr>
													<tr>
														 <td><strong><span>Account Number</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->AccountNumber)?"":$CommercialBankCodeHistory->AccountNumber);?></td>
													</tr>
													<tr>
														 <td><strong><span>Branch Name</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->BranchName)?"":$CommercialBankCodeHistory->BranchName);?></td>
													</tr>
													<tr>
														 <td><strong><span>Amount</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->CurrencyType)?"":$CommercialBankCodeHistory->CurrencyType)."".(is_object($CommercialBankCodeHistory->PurchasePriceAmt)?"":$CommercialBankCodeHistory->PurchasePriceAmt);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Bank</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->Bank1)?"":$CommercialBankCodeHistory->Bank1);?></td>
													</tr>
													<tr>
														 <td><strong><span>Terms</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->terms)?"":$CommercialBankCodeHistory->terms);?></td>
													</tr>
													<tr>
														 <td><strong><span>Date Opened</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->DateOpened)?"":$CommercialBankCodeHistory->DateOpened);?></td>
													</tr>
													<tr>
														 <td><strong><span>Bank Code</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->BankCode)?"":$CommercialBankCodeHistory->BankCode);?></td>
													</tr>
													<tr>
														 <td><strong><span>Years with Bank</strong></span></td>
														 <td><?php echo (is_object($CommercialBankCodeHistory->Years_with_Bank)?"":$CommercialBankCodeHistory->Years_with_Bank);?></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											 <td><strong><span>Comments</strong></span></td>
											 <td><?php echo (is_object($CommercialBankCodeHistory->Comment)?"":$CommercialBankCodeHistory->Comment);?></td>
										</tr>
									</table>
								</div>		
								</div>																	
								<?php }
							}
							?>
                    
					<?php } else { ?>
					<span>Bank Codes History Not Found</span><br>
					<?php } ?>
                </div>
              </div>
			  
				<div class="panel panel-primary">
                <div class="panel-heading">Directors</div>
				<div class="panel-body">
										
						<table class="table">
							<tr>
								<td><strong><span>Number of Active Directors</strong></span></td>
								<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfPrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfPrincipals);?></td>
							</tr>
							<tr>
								<td><strong><span>Average Age of Active Directors</strong></span></td>
								<td><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->AverageAge)?"":$report->CommercialActivePrincipalInfoSummary->AverageAge);?></td>
							</tr>
							<tr>
								<td><strong><span>Number of Inactive Directors</strong></span></td>
								<td style="align: left;"><?php echo (is_object($report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals)?"":$report->CommercialActivePrincipalInfoSummary->NoOfInactivePrincipals);?></td>
							</tr>
							<tr>
								<td><strong><span>Number of Previous Directors</strong></span></td>
								<td><?php echo ((is_object($report->CommercialActivePrincipalInfoSummary->NoOfPreviousPrincipals) || ($report->CommercialActivePrincipalInfoSummary->NoOfPreviousPrincipals == null))?"0":$report->CommercialActivePrincipalInfoSummary->NoOfPreviousPrincipals);?></td>
							</tr>					
						 </table>
					</div>
				</div>	  

		
		<div class="panel panel-primary">
		<div class="panel-heading">Commercial Active Director Information</div>
		<div class="panel-body">
					<?php if($report->CommercialActivePrincipalInformation){ 
							
							if(is_object($report->CommercialActivePrincipalInformation)){ 
									$employer = "";
									$personaldetails = (array)$personaldetails['details'];
									if($personaldetails[$report->CommercialActivePrincipalInformation->IDNo]){
										$employer = $personaldetails['details'][$report->CommercialActivePrincipalInformation->IDNo]->ConsumerDetail->EmployerDetail;
									}
									
									$IdNumber = (is_object($report->CommercialActivePrincipalInformation->IDNo)?"":$report->CommercialActivePrincipalInformation->IDNo);
									
									?>
									<div class="panel panel-primary">
								    <div class="panel-heading"> Active Director-1 of 1<br>
										<?php echo (is_object($report->CommercialActivePrincipalInformation->Fullname)?"":$report->CommercialActivePrincipalInformation->Fullname);?>
									</div>
								    <div class="panel-body">
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>ID Number</strong></span></td>
														 <td><?php echo $IdNumber;?></td>
													</tr>
													<tr>
														 <td><strong><span>Fullname</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->Fullname)?"":$report->CommercialActivePrincipalInformation->Fullname);?></td>
													</tr>
													<tr>
														 <td><strong><span>Birth Date</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->BirthDate)?"":$report->CommercialActivePrincipalInformation->BirthDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Director Status Code</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorStatusCode)?"":$report->CommercialActivePrincipalInformation->DirectorStatusCode);?></td>
													</tr>
													<tr>
														 <td><strong><span>Appointment Date</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->AppointmentDate)?"":$report->CommercialActivePrincipalInformation->AppointmentDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Designation</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->Designation)?"":$report->CommercialActivePrincipalInformation->Designation);?></td>
													</tr>
													<tr>
														 <td><strong><span>Member Control Percent</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->MemberControlPerc)?"":$report->CommercialActivePrincipalInformation->MemberControlPerc);?></td>
													</tr>													
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Employer Name</strong></span></td>
														 <td><?php echo (string)$employer;?></td>
													</tr>
													<tr>
														 <td><strong><span>Director Indicator</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorIndicator)?"":$report->CommercialActivePrincipalInformation->DirectorIndicator);?></td>
													</tr>
													<tr>
														 <td><strong><span>Principal Type</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->PrincipalType)?"":$report->CommercialActivePrincipalInformation->PrincipalType);?></td>
													</tr>
													<tr>
														 <td><strong><span>RSA Resident</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISRSAResident)?"":$report->CommercialActivePrincipalInformation->ISRSAResident);?></td>
													</tr>
													<tr>
														 <td><strong><span>ID Verified</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISIDVerified)?"":$report->CommercialActivePrincipalInformation->ISIDVerified);?></td>
													</tr>
													<tr>
														 <td><strong><span>CIPRO Confirmed</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ISCIPROConfirmed)?"":$report->CommercialActivePrincipalInformation->ISCIPROConfirmed);?></td>
													</tr>
													<tr>
														 <td><strong><span>Physical Address</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->PhysicalAddress)?"":$report->CommercialActivePrincipalInformation->PhysicalAddress);?></td>
													</tr>
													<tr>
														 <td><strong><span>Postal Address</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->PostalAddress)?"":$report->CommercialActivePrincipalInformation->PostalAddress);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Home Telephone No</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->HomeTelephoneNo)?"":$report->CommercialActivePrincipalInformation->HomeTelephoneNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Work Telephone No</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->WorkTelephoneNo)?"":$report->CommercialActivePrincipalInformation->WorkTelephoneNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Cellular No</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->CellularNo)?"":$report->CommercialActivePrincipalInformation->CellularNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Email Address</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->EmailAddress)?"":$report->CommercialActivePrincipalInformation->EmailAddress);?></td>
													</tr>
													<tr>
														 <td><strong><span>Age</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->Age)?"":$report->CommercialActivePrincipalInformation->Age);?></td>
													</tr>
													<tr>
														 <td><strong><span>Years With Business</strong></span></td>
														 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->YearsWithBusiness)?"":$report->CommercialActivePrincipalInformation->YearsWithBusiness);?></td>
													</tr>
													<tr>	
														<td><strong><span>Director Status Date</strong></span></td>
														<td><?php echo (is_object($report->CommercialActivePrincipalInformation->DirectorStatusDate)?"":$report->CommercialActivePrincipalInformation->DirectorStatusDate);?></td>
													</tr>							
			
												</table>
											</td>
										</tr>
										<tr>
											 <td><strong><span>Consumer Score</strong></span></td>
											 <td><?php echo (is_object($report->CommercialActivePrincipalInformation->ConsumerScore)?"":$report->CommercialActivePrincipalInformation->ConsumerScore);?></td>
										</tr>
										<tr>
											<tr>
												<td colspan="2"><button class="btn btn-primary" type="button" onClick="getSpouseDetails('<?php echo $IdNumber;?>');"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; View Spouse Details</button></td>
											</tr>										
										</tr>
									 </table>	
									</div>
									
				<!-- Address History -->
								<div class="panel panel-primary">
								<div class="panel-heading">Address History</div>
								<div class="panel-body">
									<?php if($report->ActiveDirectorAddressHistory){?>
									<table class="table table-striped" id="ActiveDirectorAddressHistory">
										<thead>
										<tr>
											<th>Address Type</th>
											<th>Address1</th>
											<th>Address2</th>
											<th>Address3</th>
											<th>Address4</th>
											<th>Postal Code</th>
											<th>Created On Date</th>
										</tr>
										<thead>
										<tbody>
											<?php 
												 if(!is_object($report->ActiveDirectorAddressHistory)){
													foreach($report->ActiveDirectorAddressHistory as $ActiveDirectorAddressHistory){ 
														if($ActiveDirectorAddressHistory->DirectorID == $report->CommercialActivePrincipalInformation->DirectorID){
													?>
													<tr>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->AddressTypeInd)?"":$ActiveDirectorAddressHistory->AddressTypeInd);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address1)?"":$ActiveDirectorAddressHistory->Address1);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address2)?"":$ActiveDirectorAddressHistory->Address2);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address3)?"":$ActiveDirectorAddressHistory->Address3);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address4)?"":$ActiveDirectorAddressHistory->Address4);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->PostalCode)?"":$ActiveDirectorAddressHistory->PostalCode);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->CreatedOnDate)?"":$ActiveDirectorAddressHistory->CreatedOnDate);?></td>
													</tr>
													<?php } } 
												 } else {
													 if($report->ActiveDirectorAddressHistory->DirectorID == $report->CommercialActivePrincipalInformation->DirectorID){
													 ?>
													<tr>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->AddressTypeInd)?"":$report->ActiveDirectorAddressHistory->AddressTypeInd);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address1)?"":$report->ActiveDirectorAddressHistory->Address1);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address2)?"":$report->ActiveDirectorAddressHistory->Address2);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address3)?"":$report->ActiveDirectorAddressHistory->Address3);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address4)?"":$report->ActiveDirectorAddressHistory->Address4);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->PostalCode)?"":$report->ActiveDirectorAddressHistory->PostalCode);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->CreatedOnDate)?"":$report->ActiveDirectorAddressHistory->CreatedOnDate);?></td>
													</tr>							 
												 <?php } }?>
										</tbody>		 
									</table>
									<?php } else { ?>
									 <div>
										<span>Address History Not Found</span><br>
									</div>
									<?php } ?>
							  </div>
							 </div>						
						<!-- Address History -->						
						<!-- Contact History -->
							<div class="panel panel-primary">
							<div class="panel-heading">Contact History</div>
							<div class="panel-body">
								<?php if($report->ActiveDirectorContactHistory){?>
								<table class="table table-striped" id="ActiveDirectorContactHistory">
									<thead>
									<tr>
										<th>Bureau Update</th>
										<th>Captured date</th>
										<th>Contact Type</th>
										<th>Detail</th>
									</tr>
									</thead>
									<tbody>
										<?php 
											 if(!is_object($report->ActiveDirectorContactHistory)){
												foreach($report->ActiveDirectorContactHistory as $ActiveDirectorContactHistory){ 
													if($report->CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorContactHistory->DirectorID){
												?>
												<tr>
													<td><?php echo (is_object($ActiveDirectorContactHistory->BureauUpdate)?"":$ActiveDirectorContactHistory->BureauUpdate);?></td>
													<td><?php echo (is_object($ActiveDirectorContactHistory->Captureddate)?"":$ActiveDirectorContactHistory->Captureddate);?></td>
													<td><?php echo (is_object($ActiveDirectorContactHistory->ContactType)?"":$ActiveDirectorContactHistory->ContactType);?></td>
													<td><?php echo (is_object($ActiveDirectorContactHistory->Detail)?"":$ActiveDirectorContactHistory->Detail);?></td>
												</tr>
												<?php } }
											 } else {
												 if($report->CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorContactHistory->DirectorID){
												 ?>
												<tr>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->BureauUpdate)?"":$report->ActiveDirectorContactHistory->BureauUpdate);?></td>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->Captureddate)?"":$report->ActiveDirectorContactHistory->Captureddate);?></td>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->ContactType)?"":$report->ActiveDirectorContactHistory->ContactType);?></td>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->Detail)?"":$report->ActiveDirectorContactHistory->Detail);?></td>
												</tr>							 
											 <?php } }?>
									</tbody>
								</table>
								<?php } else { ?>
								 <div>
									<span>Active Director Contact History Not Found</span><br>
								</div>
								<?php } ?>
							  </div>
							 </div>						
						<!-- Contact History -->
						<!-- Adverse Information -->
							<div class="panel panel-primary">
							<div class="panel-heading">Adverse Information</div>
							</div>
						<!-- Adverse Information -->
						<!-- Payment Notifications -->	
						<div class="panel panel-primary">
						<div class="panel-heading">Payment Notifications - (No Data Available)</div>
						</div>
						<!-- Payment Notifications -->	
						<!-- Default Listing -->	
						<div class="panel panel-primary">
						<div class="panel-heading">Default Listing - (No Data Available)</div>
						</div>
						<!-- Default Listing -->
						<!-- Director Judgments -->
						<?php if($report->DirectorJudgments){ ?>
							   <div class="panel panel-primary">
								<div class="panel-heading">Judgments</div>
									<div class="panel-body">						
										<?php if(is_object($report->DirectorJudgments) && ($report->CommercialActivePrincipalInformation->DirectorID == $report->DirectorJudgments->DirectorID)){
												  $name = "";
												  if(!is_object($report->DirectorJudgments->FirstName)){
													  $name = $report->DirectorJudgments->FirstName;
												  }
												  if(!is_object($report->DirectorJudgments->Surname)){
													  $name .= " ".$report->DirectorJudgments->Surname;
												  }
											?>
											<table class="table table-striped">
												<tr>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Case No.</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CaseNumber)?"":$report->DirectorJudgments->CaseNumber);?></td>
															</tr>
															<tr>
																 <td><strong><span>Issue Date</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->JudgmentDate)?"":$report->DirectorJudgments->JudgmentDate);?></td>
															</tr>
															<tr>
																 <td><strong><span>Judgment Type</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CaseType)?"":$report->DirectorJudgments->CaseType);?></td>
															</tr>
															<tr>
																 <td><strong><span>Amount</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->DisputeAmt)?"":$report->DirectorJudgments->DisputeAmt);?></td>
															</tr>
															<tr>
																 <td><strong><span>Plaintiff Name</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->PlaintiffName)?"":$report->DirectorJudgments->PlaintiffName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Court Name</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CourtName)?"":$report->DirectorJudgments->CourtName);?></td>
															</tr>
														</table>
													</td>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Attorney Name</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->AttorneyName)?"":$report->DirectorJudgments->AttorneyName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Attorney Phone No</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->TelephoneNo)?"":$report->DirectorJudgments->TelephoneNo);?></td>
															</tr>
															<tr>
																 <td><strong><span>IDNo</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->IDNo)?"":$report->DirectorJudgments->IDNo);?></td>
															</tr>
															
															<tr>
																 <td><strong><span>Full Name</strong></span></td>
																 <td><?php echo $name;?></td>
															</tr>
															<tr>
																 <td><strong><span>Case Reason</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CaseReason)?"":$report->DirectorJudgments->CaseReason);?></td>
															</tr>
															<tr>
																 <td><strong><span>Comment</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->Comment)?"":$report->DirectorJudgments->Comment);?></td>
															</tr>
														</table>
													</td>
												 </tr>
											</table>
										<?php } else { 
											foreach($report->DirectorJudgments as $DirectorJudgments){
												if($report->CommercialActivePrincipalInformation->DirectorID == $report->DirectorJudgments->DirectorID){
												  $name = "";
												  if(!is_object($DirectorJudgments->FirstName)){
													  $name = $DirectorJudgments->FirstName;
												  }
												  if(!is_object($DirectorJudgments->Surname)){
													  $name .= " ".$DirectorJudgments->Surname;
												  }										
											?>
												<table class="table table-striped">
												<tr>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Case No.</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CaseNumber)?"":$DirectorJudgments->CaseNumber);?></td>
															</tr>
															<tr>
																 <td><strong><span>Issue Date</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->JudgmentDate)?"":$DirectorJudgments->JudgmentDate);?></td>
															</tr>
															<tr>
																 <td><strong><span>Judgment Type</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CaseType)?"":$DirectorJudgments->CaseType);?></td>
															</tr>
															<tr>
																 <td><strong><span>Amount</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->DisputeAmt)?"":$DirectorJudgments->DisputeAmt);?></td>
															</tr>
															<tr>
																 <td><strong><span>Plaintiff Name</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->PlaintiffName)?"":$DirectorJudgments->PlaintiffName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Court Name</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CourtName)?"":$DirectorJudgments->CourtName);?></td>
															</tr>
														</table>
													</td>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Attorney Name</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->AttorneyName)?"":$DirectorJudgments->AttorneyName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Attorney Phone No</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->TelephoneNo)?"":$DirectorJudgments->TelephoneNo);?></td>
															</tr>
															<tr>
																 <td><strong><span>IDNo</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->IDNo)?"":$DirectorJudgments->IDNo);?></td>
															</tr>
															
															<tr>
																 <td><strong><span>Full Name</strong></span></td>
																 <td><?php echo $name;?></td>
															</tr>
															<tr>
																 <td><strong><span>Case Reason</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CaseReason)?"":$DirectorJudgments->CaseReason);?></td>
															</tr>
															<tr>
																 <td><strong><span>Comment</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->Comment)?"":$DirectorJudgments->Comment);?></td>
															</tr>
														</table>
													</td>
												 </tr>
											</table>								
											<?php } }
										} ?>
									</div>
									</div>
									<?php } else { ?>
									   <div class="panel panel-primary">
											<div class="panel-heading">Judgment Information</div>
												<div class="panel-body">
												<span>Judgment Not Found</span><br>
											</div>
										</div>
									<?php } ?>
						<!-- Director Judgments -->
<?php if($report->DirectorDebtReview){ ?>
		   <div class="panel panel-primary">
			<div class="panel-heading">Debt Review</div>
				<div class="panel-body">						
					<?php if(is_object($report->DirectorDebtReview) && ($report->CommercialActivePrincipalInformation->DirectorID == $report->DirectorDebtReview->DirectorID)){ ?>
						<table class="table table-striped">
							<tr>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Review Number.</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtRevierwNumber)?"":$report->DirectorDebtReview->DebtRevierwNumber);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Name</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounselorName)?"":$report->DirectorDebtReview->DebtCounselorName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Contact No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounselorContactNo)?"":$report->DirectorDebtReview->DebtCounselorContactNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->Status)?"":$report->DirectorDebtReview->Status);?></td>
										</tr>
										<tr>
											 <td><strong><span>Application Creation Date</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->ApplicationCreationDate)?"":$report->DirectorDebtReview->ApplicationCreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Registration No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounsellorRegNo)?"":$report->DirectorDebtReview->DebtCounsellorRegNo);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Counsellor Contact No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounsellorContactno)?"":$report->DirectorDebtReview->DebtCounsellorContactno);?></td>
										</tr>
										<tr>
											 <td><strong><span>Creation Date</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->CreationDate)?"":$report->DirectorDebtReview->CreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status Date</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->StatusDate)?"":$report->DirectorDebtReview->StatusDate);?></td>
										</tr>
										
										<tr>
											 <td><strong><span>ID No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->IDNo)?"":$report->DirectorDebtReview->IDNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>First Name</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->FirstName)?"":$report->DirectorDebtReview->FirstName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Surname</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->Surname)?"":$report->DirectorDebtReview->Surname);?></td>
										</tr>
									</table>
								</td>
							 </tr>
						</table>
					<?php } else { 
						foreach($report->DirectorDebtReview as $DirectorDebtReview){ 
							if($report->CommercialActivePrincipalInformation->DirectorID == $DirectorDebtReview->DirectorID){
						?>
							<table class="table table-striped">
							<tr>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Review Number.</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtRevierwNumber)?"":$DirectorDebtReview->DebtRevierwNumber);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Name</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounselorName)?"":$DirectorDebtReview->DebtCounselorName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Contact No</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounselorContactNo)?"":$DirectorDebtReview->DebtCounselorContactNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->Status)?"":$DirectorDebtReview->Status);?></td>
										</tr>
										<tr>
											 <td><strong><span>Application Creation Date</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->ApplicationCreationDate)?"":$DirectorDebtReview->ApplicationCreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Registration No</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounsellorRegNo)?"":$DirectorDebtReview->DebtCounsellorRegNo);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Counsellor Contact No.</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounsellorContactno)?"":$DirectorDebtReview->DebtCounsellorContactno);?></td>
										</tr>
										<tr>
											 <td><strong><span>Creation Date</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->CreationDate)?"":$DirectorDebtReview->CreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status Date</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->StatusDate)?"":$DirectorDebtReview->StatusDate);?></td>
										</tr>
										
										<tr>
											 <td><strong><span>ID No</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->IDNo)?"":$DirectorDebtReview->IDNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>First Name</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->FirstName)?"":$DirectorDebtReview->FirstName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Surname</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->Surname)?"":$DirectorDebtReview->Surname);?></td>
										</tr>
									</table>
								</td>
							 </tr>
						</table>								
						<?php } }
					} ?>
				</div>
			</div>
	<?php } else { ?>
	   <div class="panel panel-primary">
			<div class="panel-heading">Debt Review Information</div>
				<div class="panel-body">
				<span>Debt Review</span><br>
			</div>
		</div>
	<?php } ?>
		<!-- Director Debt Review -->						
<!-- ActiveDirectorCurrentBusinessinterests -->
		<?php if($report->ActiveDirectorCurrentBusinessinterests){ 
			if(is_object($report->ActiveDirectorCurrentBusinessinterests) && ($report->CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorCurrentBusinessinterests->DirectorID)){ ?>
					<div class="panel panel-primary">
					<div class="panel-heading">Current Business interests-1 of 1<br>
						<?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?>
					</div>
					<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Commercial Name</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
									</tr>
									<tr>
										 <td><strong><span>Registration No</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
									</tr>
									<tr>
										 <td><strong><span>Commercial Status</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
									</tr>
					
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Judgments Count</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Default Count</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$report->ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Liquidation</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$report->ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Age Of Business</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
									</tr>
									<tr>
										 <td><strong><span>Judgment Status</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
									</tr>
									<tr>
										 <td><strong><span>Director Status Date</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
									</tr>
								</table>
							</td>
						</tr>
					 </table>	
				</div>
			</div>
			<?php } else { 
					$countActiveDirectorCurrentBusinessinterests = 0;
					foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterests){  
					if($report->CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorCurrentBusinessinterests->DirectorID){
					?>
					<div class="panel panel-primary">
					<div class="panel-heading"> Current Business interests: 
						<?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$ActiveDirectorCurrentBusinessinterests->CommercialName);?>
					</div>
					<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Commercial Name</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
									</tr>
									<tr>
										 <td><strong><span>Registration No</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
									</tr>
									<tr>
										 <td><strong><span>Commercial Status</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Judgments Count</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Default Count</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Liquidation</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Age Of Business</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
									</tr>
									<tr>
										 <td><strong><span>Judgment Status</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
									</tr>
									<tr>
										 <td><strong><span>Director Status Date</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
									</tr>
								</table>
							</td>
						</tr>
					 </table>	
				</div>
				</div>
				 <?php }
					}
			}	
		} else { 
			?>	
		<span>Current Business Interests Not Found</span><br>
		<?php }?>
		<!-- ActiveDirectorCurrentBusinessinterests -->						
<!-- ActiveDirectorPreviousBusinessinterests -->
<?php if($report->ActiveDirectorPreviousBusinessinterests){ 
	if(is_object($report->ActiveDirectorPreviousBusinessinterests) && ($report->CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorPreviousBusinessinterests->DirectorID)){ ?>
			<div class="panel panel-primary">
			<div class="panel-heading">  Previous Business interests-1 of 1<br>
				<?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialName);?>
			</div>
			<div class="panel-body">
			<table class="table table-striped">
				<tr>
					<td>
						<table class="table">
							<tr>
								 <td><strong><span>Commercial Name</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialName);?></td>
							</tr>
							<tr>
								 <td><strong><span>Registration No</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorPreviousBusinessinterests->RegistrationNo);?></td>
							</tr>
							<tr>
								 <td><strong><span>Commercial Status</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialStatus);?></td>
							</tr>
			
						</table>
					</td>
					<td>
						<table class="table">
							<tr>
								 <td><strong><span>Judgments Count</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorPreviousBusinessinterests->JudgmentsCount);?></td>
							</tr>
							<tr>
								 <td><strong><span>Default Count</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->DefaultCount)?"":$report->ActiveDirectorPreviousBusinessinterests->DefaultCount);?></td>
							</tr>
							<tr>
								 <td><strong><span>Liquidation</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->Liquidation)?"":$report->ActiveDirectorPreviousBusinessinterests->Liquidation);?></td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table">
							<tr>
								 <td><strong><span>Age Of Business</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorPreviousBusinessinterests->AgeOfBusiness);?></td>
							</tr>
							<tr>
								 <td><strong><span>Judgment Status</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorPreviousBusinessinterests->JudgmentStatus);?></td>
							</tr>
							<tr>
								 <td><strong><span>Director Status Date</strong></span></td>
								 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorPreviousBusinessinterests->DirectorStatusDate);?></td>
							</tr>
						</table>
					</td>
				</tr>
			 </table>	
		</div>
	</div>
	<?php } else { 
			$count = 0;
			foreach($report->ActiveDirectorPreviousBusinessinterests as $ActiveDirectorPreviousBusinessinterests){  
			 if($report->CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorPreviousBusinessinterests->DirectorID){
			?>
			<div class="panel panel-primary">
			<div class="panel-heading"> Active Director Previous Business interests-<?php echo ++$count." of ".count($report->ActiveDirectorPreviousBusinessinterests);?><br>
				<?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$ActiveDirectorPreviousBusinessinterests->CommercialName);?>
			</div>
			<div class="panel-body">
			<table class="table table-striped">
				<tr>
					<td>
						<table class="table">
							<tr>
								 <td><strong><span>Commercial Name</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$ActiveDirectorPreviousBusinessinterests->CommercialName);?></td>
							</tr>
							<tr>
								 <td><strong><span>Registration No</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->RegistrationNo)?"":$ActiveDirectorPreviousBusinessinterests->RegistrationNo);?></td>
							</tr>
							<tr>
								 <td><strong><span>Commercial Status</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialStatus)?"":$ActiveDirectorPreviousBusinessinterests->CommercialStatus);?></td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table">
							<tr>
								 <td><strong><span>Judgments Count</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->JudgmentsCount)?"":$ActiveDirectorPreviousBusinessinterests->JudgmentsCount);?></td>
							</tr>
							<tr>
								 <td><strong><span>Default Count</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->DefaultCount)?"":$ActiveDirectorPreviousBusinessinterests->DefaultCount);?></td>
							</tr>
							<tr>
								 <td><strong><span>Liquidation</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->Liquidation)?"":$ActiveDirectorPreviousBusinessinterests->Liquidation);?></td>
							</tr>
						</table>
					</td>
					<td>
						<table class="table">
							<tr>
								 <td><strong><span>Age Of Business</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->AgeOfBusiness)?"":$ActiveDirectorPreviousBusinessinterests->AgeOfBusiness);?></td>
							</tr>
							<tr>
								 <td><strong><span>Judgment Status</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->JudgmentStatus)?"":$ActiveDirectorPreviousBusinessinterests->JudgmentStatus);?></td>
							</tr>
							<tr>
								 <td><strong><span>Director Status Date</strong></span></td>
								 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->DirectorStatusDate)?"":$ActiveDirectorPreviousBusinessinterests->DirectorStatusDate);?></td>
							</tr>
						</table>
					</td>
				</tr>
			 </table>	
		</div>
	</div>
	 <?php }
			}
}	
} else { 
	?>	
	
		<div class="panel panel-primary">
			<div class="panel-heading"> Active Director Previous Business interests</div>
			<div class="panel-body">
				<span>Previous Business Interests Not Found</span><br>
			</div>
		</div>
<?php }?>	
</div>
		<!-- ActiveDirectorPreviousBusinessinterests -->						











						
						
						
						
						
						
						














						
									
									
									
									
									
									
									
									
							</div>
							<?php } else { 
									$personaldetails = (array) $personaldetails['details'];
									foreach($report->CommercialActivePrincipalInformation as $CommercialActivePrincipalInformation){  
									    
						
										$employer = "";
										if($personaldetails[$CommercialActivePrincipalInformation->IDNo]){
											$employer = $personaldetails[$CommercialActivePrincipalInformation->IDNo]->ConsumerDetail->EmployerDetail;
										}
										
										$IdNumber = (is_object($CommercialActivePrincipalInformation->IDNo)?"":$CommercialActivePrincipalInformation->IDNo);
										
									?>
									<div class="panel panel-primary">
								    <div class="panel-heading"> Active Director-<?php echo ++$count." of ".count($report->CommercialActivePrincipalInformation);?><br>
										<?php echo (is_object($CommercialActivePrincipalInformation->Fullname)?"":$CommercialActivePrincipalInformation->Fullname);?>
									</div>
									<div class="panel-body">
									<table class="table table-striped">
										<tr>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>ID Number</strong></span></td>
														 <td><?php echo $IdNumber;?></td>
													</tr>
													<tr>
														 <td><strong><span>Fullname</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->Fullname)?"":$CommercialActivePrincipalInformation->Fullname);?></td>
													</tr>
													<tr>
														 <td><strong><span>Birth Date</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->BirthDate)?"":$CommercialActivePrincipalInformation->BirthDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Director Status Code</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorStatusCode)?"":$CommercialActivePrincipalInformation->DirectorStatusCode);?></td>
													</tr>
													<tr>
														 <td><strong><span>Appointment Date</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->AppointmentDate)?"":$CommercialActivePrincipalInformation->AppointmentDate);?></td>
													</tr>
													<tr>
														 <td><strong><span>Designation</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->Designation)?"":$CommercialActivePrincipalInformation->Designation);?></td>
													</tr>
													<tr>
														 <td><strong><span>Member Control Percent</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->MemberControlPerc)?"":$CommercialActivePrincipalInformation->MemberControlPerc);?></td>
													</tr>
													
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Employer Name</strong></span></td>
														 <td><?php echo (string)$employer;?> </td>
													</tr>
													<tr>
														 <td><strong><span>Director Indicator</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorIndicator)?"":$CommercialActivePrincipalInformation->DirectorIndicator);?></td>
													</tr>
													<tr>
														 <td><strong><span>Principal Type</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->PrincipalType)?"":$CommercialActivePrincipalInformation->PrincipalType);?></td>
													</tr>
													<tr>
														 <td><strong><span>RSA Resident</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->ISRSAResident)?"":$CommercialActivePrincipalInformation->ISRSAResident);?></td>
													</tr>
													<tr>
														 <td><strong><span>ID Verified</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->ISIDVerified)?"":$CommercialActivePrincipalInformation->ISIDVerified);?></td>
													</tr>
													<tr>
														 <td><strong><span>CIPRO Confirmed</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->ISCIPROConfirmed)?"":$CommercialActivePrincipalInformation->ISCIPROConfirmed);?></td>
													</tr>
													<tr>
														 <td><strong><span>Physical Address</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->PhysicalAddress)?"":$CommercialActivePrincipalInformation->PhysicalAddress);?></td>
													</tr>
													<tr>
														 <td><strong><span>Postal Address</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->PostalAddress)?"":$CommercialActivePrincipalInformation->PostalAddress);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Home Telephone No</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->HomeTelephoneNo)?"":$CommercialActivePrincipalInformation->HomeTelephoneNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Work Telephone No</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->WorkTelephoneNo)?"":$CommercialActivePrincipalInformation->WorkTelephoneNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Cellular No</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->CellularNo)?"":$CommercialActivePrincipalInformation->CellularNo);?></td>
													</tr>
													<tr>
														 <td><strong><span>Email Address</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->EmailAddress)?"":$CommercialActivePrincipalInformation->EmailAddress);?></td>
													</tr>
													<tr>
														 <td><strong><span>Age</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->Age)?"":$CommercialActivePrincipalInformation->Age);?></td>
													</tr>
													<tr>
														 <td><strong><span>Years With Business</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->YearsWithBusiness)?"":$CommercialActivePrincipalInformation->YearsWithBusiness);?></td>
													</tr>
													<tr>	
														<td><strong><span>Director Status Date</strong></span></td>
														<td><?php echo (is_object($CommercialActivePrincipalInformation->DirectorStatusDate)?"":$CommercialActivePrincipalInformation->DirectorStatusDate);?></td>
													</tr>
												</table>
											</td>
											<td>
												<table class="table">
													<tr>
														 <td><strong><span>Consumer Score</strong></span></td>
														 <td><?php echo (is_object($CommercialActivePrincipalInformation->ConsumerScore)?"":$CommercialActivePrincipalInformation->ConsumerScore);?></td>
													</tr>
													<tr>
														<td colspan="2"><button class="btn btn-primary" type="button" onClick="getSpouseDetails('<?php echo $IdNumber;?>');"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; View Spouse Details</button></td>
													</tr>
												</table>
											</td>
										</tr>
									 </table>
						<!-- Address History -->
								<div class="panel panel-primary">
								<div class="panel-heading">Address History</div>
								<div class="panel-body">
									<?php if($report->ActiveDirectorAddressHistory){?>
									<table class="table table-striped" id="ActiveDirectorAddressHistory">
										<thead>
										<tr>
											<th>Address Type</th>
											<th>Address1</th>
											<th>Address2</th>
											<th>Address3</th>
											<th>Address4</th>
											<th>Postal Code</th>
											<th>Created On Date</th>
										</tr>
										<thead>
										<tbody>
											<?php 
												 if(!is_object($report->ActiveDirectorAddressHistory)){
													foreach($report->ActiveDirectorAddressHistory as $ActiveDirectorAddressHistory){ 
														if($ActiveDirectorAddressHistory->DirectorID == $CommercialActivePrincipalInformation->DirectorID){
													?>
													<tr>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->AddressTypeInd)?"":$ActiveDirectorAddressHistory->AddressTypeInd);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address1)?"":$ActiveDirectorAddressHistory->Address1);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address2)?"":$ActiveDirectorAddressHistory->Address2);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address3)?"":$ActiveDirectorAddressHistory->Address3);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->Address4)?"":$ActiveDirectorAddressHistory->Address4);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->PostalCode)?"":$ActiveDirectorAddressHistory->PostalCode);?></td>
														<td><?php echo (is_object($ActiveDirectorAddressHistory->CreatedOnDate)?"":$ActiveDirectorAddressHistory->CreatedOnDate);?></td>
													</tr>
													<?php } } 
												 } else {
													 if($report->ActiveDirectorAddressHistory->DirectorID == $CommercialActivePrincipalInformation->DirectorID){
													 ?>
													<tr>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->AddressTypeInd)?"":$report->ActiveDirectorAddressHistory->AddressTypeInd);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address1)?"":$report->ActiveDirectorAddressHistory->Address1);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address2)?"":$report->ActiveDirectorAddressHistory->Address2);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address3)?"":$report->ActiveDirectorAddressHistory->Address3);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->Address4)?"":$report->ActiveDirectorAddressHistory->Address4);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->PostalCode)?"":$report->ActiveDirectorAddressHistory->PostalCode);?></td>
														<td><?php echo (is_object($report->ActiveDirectorAddressHistory->CreatedOnDate)?"":$report->ActiveDirectorAddressHistory->CreatedOnDate);?></td>
													</tr>							 
												 <?php } }?>
										</tbody>		 
									</table>
									<?php } else { ?>
									 <div>
										<span>Address History Not Found</span><br>
									</div>
									<?php } ?>
							  </div>
							 </div>						
						<!-- Address History -->	
						<!-- Contact History -->
							<div class="panel panel-primary">
							<div class="panel-heading">Contact History</div>
							<div class="panel-body">
								<?php if($report->ActiveDirectorContactHistory){?>
								<table class="table table-striped" id="ActiveDirectorContactHistory">
									<thead>
									<tr>
										<th>Bureau Update</th>
										<th>Captured date</th>
										<th>Contact Type</th>
										<th>Detail</th>
									</tr>
									</thead>
									<tbody>
										<?php 
											 if(!is_object($report->ActiveDirectorContactHistory)){
												foreach($report->ActiveDirectorContactHistory as $ActiveDirectorContactHistory){ 
													if($CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorContactHistory->DirectorID){
												?>
												<tr>
													<td><?php echo (is_object($ActiveDirectorContactHistory->BureauUpdate)?"":$ActiveDirectorContactHistory->BureauUpdate);?></td>
													<td><?php echo (is_object($ActiveDirectorContactHistory->Captureddate)?"":$ActiveDirectorContactHistory->Captureddate);?></td>
													<td><?php echo (is_object($ActiveDirectorContactHistory->ContactType)?"":$ActiveDirectorContactHistory->ContactType);?></td>
													<td><?php echo (is_object($ActiveDirectorContactHistory->Detail)?"":$ActiveDirectorContactHistory->Detail);?></td>
												</tr>
												<?php } }
											 } else {
												 if($CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorContactHistory->DirectorID){
												 ?>
												<tr>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->BureauUpdate)?"":$report->ActiveDirectorContactHistory->BureauUpdate);?></td>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->Captureddate)?"":$report->ActiveDirectorContactHistory->Captureddate);?></td>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->ContactType)?"":$report->ActiveDirectorContactHistory->ContactType);?></td>
													<td><?php echo (is_object($report->ActiveDirectorContactHistory->Detail)?"":$report->ActiveDirectorContactHistory->Detail);?></td>
												</tr>							 
											 <?php } }?>
									</tbody>
								</table>
								<?php } else { ?>
								 <div>
									<span>Active Director Contact History Not Found</span><br>
								</div>
								<?php } ?>
							  </div>
							 </div>						
						<!-- Contact History -->
						<!-- Adverse Information -->
							<div class="panel panel-primary">
							<div class="panel-heading">Adverse Information</div>
							</div>
						<!-- Adverse Information -->
						<!-- Payment Notifications -->	
						<div class="panel panel-primary">
						<div class="panel-heading">Payment Notifications - (No Data Available)</div>
						</div>
						<!-- Payment Notifications -->	
						<!-- Default Listing -->	
						<div class="panel panel-primary">
						<div class="panel-heading">Default Listing - (No Data Available)</div>
						</div>
						<!-- Default Listing -->	
						<!-- Director Judgments -->
						<?php if($report->DirectorJudgments){ ?>
							   <div class="panel panel-primary">
								<div class="panel-heading">Judgments</div>
									<div class="panel-body">						
										<?php if(is_object($report->DirectorJudgments) && ($CommercialActivePrincipalInformation->DirectorID == $report->DirectorJudgments->DirectorID)){
												  $name = "";
												  if(!is_object($report->DirectorJudgments->FirstName)){
													  $name = $report->DirectorJudgments->FirstName;
												  }
												  if(!is_object($report->DirectorJudgments->Surname)){
													  $name .= " ".$report->DirectorJudgments->Surname;
												  }
											?>
											<table class="table table-striped">
												<tr>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Case No.</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CaseNumber)?"":$report->DirectorJudgments->CaseNumber);?></td>
															</tr>
															<tr>
																 <td><strong><span>Issue Date</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->JudgmentDate)?"":$report->DirectorJudgments->JudgmentDate);?></td>
															</tr>
															<tr>
																 <td><strong><span>Judgment Type</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CaseType)?"":$report->DirectorJudgments->CaseType);?></td>
															</tr>
															<tr>
																 <td><strong><span>Amount</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->DisputeAmt)?"":$report->DirectorJudgments->DisputeAmt);?></td>
															</tr>
															<tr>
																 <td><strong><span>Plaintiff Name</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->PlaintiffName)?"":$report->DirectorJudgments->PlaintiffName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Court Name</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CourtName)?"":$report->DirectorJudgments->CourtName);?></td>
															</tr>
														</table>
													</td>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Attorney Name</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->AttorneyName)?"":$report->DirectorJudgments->AttorneyName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Attorney Phone No</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->TelephoneNo)?"":$report->DirectorJudgments->TelephoneNo);?></td>
															</tr>
															<tr>
																 <td><strong><span>IDNo</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->IDNo)?"":$report->DirectorJudgments->IDNo);?></td>
															</tr>
															
															<tr>
																 <td><strong><span>Full Name</strong></span></td>
																 <td><?php echo $name;?></td>
															</tr>
															<tr>
																 <td><strong><span>Case Reason</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->CaseReason)?"":$report->DirectorJudgments->CaseReason);?></td>
															</tr>
															<tr>
																 <td><strong><span>Comment</strong></span></td>
																 <td><?php echo (is_object($report->DirectorJudgments->Comment)?"":$report->DirectorJudgments->Comment);?></td>
															</tr>
														</table>
													</td>
												 </tr>
											</table>
										<?php } else { 
											foreach($report->DirectorJudgments as $DirectorJudgments){
												if($CommercialActivePrincipalInformation->DirectorID == $report->DirectorJudgments->DirectorID){
												  $name = "";
												  if(!is_object($DirectorJudgments->FirstName)){
													  $name = $DirectorJudgments->FirstName;
												  }
												  if(!is_object($DirectorJudgments->Surname)){
													  $name .= " ".$DirectorJudgments->Surname;
												  }										
											?>
												<table class="table table-striped">
												<tr>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Case No.</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CaseNumber)?"":$DirectorJudgments->CaseNumber);?></td>
															</tr>
															<tr>
																 <td><strong><span>Issue Date</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->JudgmentDate)?"":$DirectorJudgments->JudgmentDate);?></td>
															</tr>
															<tr>
																 <td><strong><span>Judgment Type</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CaseType)?"":$DirectorJudgments->CaseType);?></td>
															</tr>
															<tr>
																 <td><strong><span>Amount</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->DisputeAmt)?"":$DirectorJudgments->DisputeAmt);?></td>
															</tr>
															<tr>
																 <td><strong><span>Plaintiff Name</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->PlaintiffName)?"":$DirectorJudgments->PlaintiffName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Court Name</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CourtName)?"":$DirectorJudgments->CourtName);?></td>
															</tr>
														</table>
													</td>
													<td>
														<table class="table">
															<tr>
																 <td><strong><span>Attorney Name</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->AttorneyName)?"":$DirectorJudgments->AttorneyName);?></td>
															</tr>
															<tr>
																 <td><strong><span>Attorney Phone No</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->TelephoneNo)?"":$DirectorJudgments->TelephoneNo);?></td>
															</tr>
															<tr>
																 <td><strong><span>IDNo</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->IDNo)?"":$DirectorJudgments->IDNo);?></td>
															</tr>
															
															<tr>
																 <td><strong><span>Full Name</strong></span></td>
																 <td><?php echo $name;?></td>
															</tr>
															<tr>
																 <td><strong><span>Case Reason</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->CaseReason)?"":$DirectorJudgments->CaseReason);?></td>
															</tr>
															<tr>
																 <td><strong><span>Comment</strong></span></td>
																 <td><?php echo (is_object($DirectorJudgments->Comment)?"":$DirectorJudgments->Comment);?></td>
															</tr>
														</table>
													</td>
												 </tr>
											</table>								
											<?php } }
										} ?>
									</div>
									</div>
									<?php } else { ?>
									   <div class="panel panel-primary">
											<div class="panel-heading">Judgment Information</div>
												<div class="panel-body">
												<span>Judgment Not Found</span><br>
											</div>
										</div>
									<?php } ?>
						<!-- Director Judgments -->
						<!-- Director Debt Review -->
<?php if($report->DirectorDebtReview){ ?>
		   <div class="panel panel-primary">
			<div class="panel-heading">Debt Review</div>
				<div class="panel-body">						
					<?php if(is_object($report->DirectorDebtReview) && ($CommercialActivePrincipalInformation->DirectorID == $report->DirectorDebtReview->DirectorID)){ ?>
						<table class="table table-striped">
							<tr>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Review Number.</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtRevierwNumber)?"":$report->DirectorDebtReview->DebtRevierwNumber);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Name</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounselorName)?"":$report->DirectorDebtReview->DebtCounselorName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Contact No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounselorContactNo)?"":$report->DirectorDebtReview->DebtCounselorContactNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->Status)?"":$report->DirectorDebtReview->Status);?></td>
										</tr>
										<tr>
											 <td><strong><span>Application Creation Date</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->ApplicationCreationDate)?"":$report->DirectorDebtReview->ApplicationCreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Registration No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounsellorRegNo)?"":$report->DirectorDebtReview->DebtCounsellorRegNo);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Counsellor Contact No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->DebtCounsellorContactno)?"":$report->DirectorDebtReview->DebtCounsellorContactno);?></td>
										</tr>
										<tr>
											 <td><strong><span>Creation Date</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->CreationDate)?"":$report->DirectorDebtReview->CreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status Date</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->StatusDate)?"":$report->DirectorDebtReview->StatusDate);?></td>
										</tr>
										
										<tr>
											 <td><strong><span>ID No</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->IDNo)?"":$report->DirectorDebtReview->IDNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>First Name</strong></span></td>
											 <td><?php echo (is_object($report->DirectorDebtReview->FirstName)?"":$report->DirectorDebtReview->FirstName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Surname</strong></span></td>
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
							<table class="table table-striped">
							<tr>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Review Number.</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtRevierwNumber)?"":$DirectorDebtReview->DebtRevierwNumber);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Name</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounselorName)?"":$DirectorDebtReview->DebtCounselorName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Contact No</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounselorContactNo)?"":$DirectorDebtReview->DebtCounselorContactNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->Status)?"":$DirectorDebtReview->Status);?></td>
										</tr>
										<tr>
											 <td><strong><span>Application Creation Date</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->ApplicationCreationDate)?"":$DirectorDebtReview->ApplicationCreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Debt Counsellor Registration No</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounsellorRegNo)?"":$DirectorDebtReview->DebtCounsellorRegNo);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Debt Counsellor Contact No.</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->DebtCounsellorContactno)?"":$DirectorDebtReview->DebtCounsellorContactno);?></td>
										</tr>
										<tr>
											 <td><strong><span>Creation Date</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->CreationDate)?"":$DirectorDebtReview->CreationDate);?></td>
										</tr>
										<tr>
											 <td><strong><span>Status Date</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->StatusDate)?"":$DirectorDebtReview->StatusDate);?></td>
										</tr>
										
										<tr>
											 <td><strong><span>ID No</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->IDNo)?"":$DirectorDebtReview->IDNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>First Name</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->FirstName)?"":$DirectorDebtReview->FirstName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Surname</strong></span></td>
											 <td><?php echo (is_object($DirectorDebtReview->Surname)?"":$DirectorDebtReview->Surname);?></td>
										</tr>
									</table>
								</td>
							 </tr>
						</table>								
						<?php } }
					} ?>
				</div>
			</div>
	<?php } else { ?>
	   <div class="panel panel-primary">
			<div class="panel-heading">Debt Review Information</div>
				<div class="panel-body">
				<span>Debt Review</span><br>
			</div>
		</div>
	<?php } ?>
		<!-- Director Debt Review -->
		<!-- ActiveDirectorCurrentBusinessinterests -->
		<?php if($report->ActiveDirectorCurrentBusinessinterests){ 
			if(is_object($report->ActiveDirectorCurrentBusinessinterests) && ($CommercialActivePrincipalInformation->DirectorID == $report->ActiveDirectorCurrentBusinessinterests->DirectorID)){ ?>
					<div class="panel panel-primary">
					<div class="panel-heading">Current Business interests-1 of 1<br>
						<?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?>
					</div>
					<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Commercial Name</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
									</tr>
									<tr>
										 <td><strong><span>Registration No</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
									</tr>
									<tr>
										 <td><strong><span>Commercial Status</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
									</tr>
					
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Judgments Count</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Default Count</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$report->ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Liquidation</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$report->ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Age Of Business</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
									</tr>
									<tr>
										 <td><strong><span>Judgment Status</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
									</tr>
									<tr>
										 <td><strong><span>Director Status Date</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
									</tr>
								</table>
							</td>
						</tr>
					 </table>	
				</div>
			</div>
			<?php } else { 
					$countActiveDirectorCurrentBusinessinterests = 0;
					foreach($report->ActiveDirectorCurrentBusinessinterests as $ActiveDirectorCurrentBusinessinterests){  
					if($CommercialActivePrincipalInformation->DirectorID == $ActiveDirectorCurrentBusinessinterests->DirectorID){
					?>
					<div class="panel panel-primary">
					<div class="panel-heading"> Current Business interests: 
						<?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$ActiveDirectorCurrentBusinessinterests->CommercialName);?>
					</div>
					<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Commercial Name</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialName)?"":$ActiveDirectorCurrentBusinessinterests->CommercialName);?></td>
									</tr>
									<tr>
										 <td><strong><span>Registration No</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->RegistrationNo)?"":$ActiveDirectorCurrentBusinessinterests->RegistrationNo);?></td>
									</tr>
									<tr>
										 <td><strong><span>Commercial Status</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->CommercialStatus)?"":$ActiveDirectorCurrentBusinessinterests->CommercialStatus);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Judgments Count</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->JudgmentsCount)?"":$ActiveDirectorCurrentBusinessinterests->JudgmentsCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Default Count</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->DefaultCount)?"":$ActiveDirectorCurrentBusinessinterests->DefaultCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Liquidation</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->Liquidation)?"":$ActiveDirectorCurrentBusinessinterests->Liquidation);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Age Of Business</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->AgeOfBusiness)?"":$ActiveDirectorCurrentBusinessinterests->AgeOfBusiness);?></td>
									</tr>
									<tr>
										 <td><strong><span>Judgment Status</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->JudgmentStatus)?"":$ActiveDirectorCurrentBusinessinterests->JudgmentStatus);?></td>
									</tr>
									<tr>
										 <td><strong><span>Director Status Date</strong></span></td>
										 <td><?php echo (is_object($ActiveDirectorCurrentBusinessinterests->DirectorStatusDate)?"":$ActiveDirectorCurrentBusinessinterests->DirectorStatusDate);?></td>
									</tr>
								</table>
							</td>
						</tr>
					 </table>	
				</div>
				</div>
				 <?php }
					}
			}	
		} else { 
			?>	
		<span>Current Business Interests Not Found</span><br>
		<?php }?>
		<!-- ActiveDirectorCurrentBusinessinterests -->
		<!-- ActiveDirectorPreviousBusinessinterests -->
<?php if($report->ActiveDirectorPreviousBusinessinterests) {




					if(is_object($report->ActiveDirectorPreviousBusinessinterests) && ($ActiveDirectorCurrentBusinessinterests->DirectorID == $report->ActiveDirectorPreviousBusinessinterests->DirectorID)){ ?>
					<div class="panel panel-primary">
					<div class="panel-heading">  Previous Business interests-1 of 1<br>
						<?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialName);?>
					</div>
					<div class="panel-body">
					<table class="table table-striped">
						<tr>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Commercial Name</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialName);?></td>
									</tr>
									<tr>
										 <td><strong><span>Registration No</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->RegistrationNo)?"":$report->ActiveDirectorPreviousBusinessinterests->RegistrationNo);?></td>
									</tr>
									<tr>
										 <td><strong><span>Commercial Status</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->CommercialStatus)?"":$report->ActiveDirectorPreviousBusinessinterests->CommercialStatus);?></td>
									</tr>
					
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Judgments Count</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->JudgmentsCount)?"":$report->ActiveDirectorPreviousBusinessinterests->JudgmentsCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Default Count</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->DefaultCount)?"":$report->ActiveDirectorPreviousBusinessinterests->DefaultCount);?></td>
									</tr>
									<tr>
										 <td><strong><span>Liquidation</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->Liquidation)?"":$report->ActiveDirectorPreviousBusinessinterests->Liquidation);?></td>
									</tr>
								</table>
							</td>
							<td>
								<table class="table">
									<tr>
										 <td><strong><span>Age Of Business</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->AgeOfBusiness)?"":$report->ActiveDirectorPreviousBusinessinterests->AgeOfBusiness);?></td>
									</tr>
									<tr>
										 <td><strong><span>Judgment Status</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->JudgmentStatus)?"":$report->ActiveDirectorPreviousBusinessinterests->JudgmentStatus);?></td>
									</tr>
									<tr>
										 <td><strong><span>Director Status Date</strong></span></td>
										 <td><?php echo (is_object($report->ActiveDirectorPreviousBusinessinterests->DirectorStatusDate)?"":$report->ActiveDirectorPreviousBusinessinterests->DirectorStatusDate);?></td>
									</tr>
								</table>
							</td>
						</tr>
					 </table>	
				</div>
			</div>
			<?php } else {
				$count = 0;
				foreach($report->ActiveDirectorPreviousBusinessinterests as $ActiveDirectorPreviousBusinessinterests){  
				 if($ActiveDirectorCurrentBusinessinterests->DirectorID == $ActiveDirectorPreviousBusinessinterests->DirectorID){				
				?>
					<div class="panel panel-primary">
						<div class="panel-heading"> Active Director Previous Business interests-<?php echo ++$count." of ".count($report->ActiveDirectorPreviousBusinessinterests);?><br>
							<?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$ActiveDirectorPreviousBusinessinterests->CommercialName);?>
						</div>
						<div class="panel-body">
						<table class="table table-striped">
							<tr>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Commercial Name</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialName)?"":$ActiveDirectorPreviousBusinessinterests->CommercialName);?></td>
										</tr>
										<tr>
											 <td><strong><span>Registration No</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->RegistrationNo)?"":$ActiveDirectorPreviousBusinessinterests->RegistrationNo);?></td>
										</tr>
										<tr>
											 <td><strong><span>Commercial Status</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->CommercialStatus)?"":$ActiveDirectorPreviousBusinessinterests->CommercialStatus);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Judgments Count</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->JudgmentsCount)?"":$ActiveDirectorPreviousBusinessinterests->JudgmentsCount);?></td>
										</tr>
										<tr>
											 <td><strong><span>Default Count</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->DefaultCount)?"":$ActiveDirectorPreviousBusinessinterests->DefaultCount);?></td>
										</tr>
										<tr>
											 <td><strong><span>Liquidation</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->Liquidation)?"":$ActiveDirectorPreviousBusinessinterests->Liquidation);?></td>
										</tr>
									</table>
								</td>
								<td>
									<table class="table">
										<tr>
											 <td><strong><span>Age Of Business</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->AgeOfBusiness)?"":$ActiveDirectorPreviousBusinessinterests->AgeOfBusiness);?></td>
										</tr>
										<tr>
											 <td><strong><span>Judgment Status</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->JudgmentStatus)?"":$ActiveDirectorPreviousBusinessinterests->JudgmentStatus);?></td>
										</tr>
										<tr>
											 <td><strong><span>Director Status Date</strong></span></td>
											 <td><?php echo (is_object($ActiveDirectorPreviousBusinessinterests->DirectorStatusDate)?"":$ActiveDirectorPreviousBusinessinterests->DirectorStatusDate);?></td>
										</tr>
									</table>
								</td>
							</tr>
						 </table>	
					</div>
				</div>

		<?php } 
		 }
			}
		} else {
		?>
			<div class="panel panel-primary">
				<div class="panel-heading"> Active Director Previous Business interests</div>
				<div class="panel-body">
					<span>Previous Business Interests Not Found</span><br>
				</div>
			</div>
		<?php } ?>		
		
		<!-- ActiveDirectorPreviousBusinessinterests -->
				</div>
			</div>
			 <?php }
		}	
	 } else { 
			?>	
		<span>Commercial Active Director Information Not Found</span><br>
	<?php }?>
                

    </div>
    </div>
		</div>
</body>
<script>
$(document).ready(function(){
    $('#DirectorContactHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#ActiveDirectorContactHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#InactiveDirectorAddressHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#ActiveDirectorAddressHistory').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#ActiveDirectorCurrentBusinessinterests').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialActivePrincipalInformation').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialInActivePrincipalInfoSummary').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
    $('#CommercialActivePrincipalInfoSummary').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
   // $('#CommercialActivePrincipalInformation').DataTable();
    $('#ActiveDirectorCurrentBusinessinterestsTable').DataTable({
        /* No ordering applied by DataTables during initialisation */
        "order": []
    });
	
	$('#btn-proc-back').click(function() {
       	
		$("#loadMe").modal({
		  backdrop: "static", //remove ability to close modal with click
		  keyboard: false, //remove option to close with keyboard
		  show: true //Display loader!
		});
		$('#form-search-procs').submit();
    });
});

function getSpouseDetails(strId){
	$("#loadMe").modal({
      backdrop: "static", //remove ability to close modal with click
      keyboard: false, //remove option to close with keyboard
      show: true //Display loader!
    });	
	

	$.post("<?php echo site_url();?>/procurementreport/getspousedetails",
	  {
		idnumber: strId
	  },
	  function(data, status){
		  $("#loadMe").modal('hide');
		  $("#loadSpouse").html(data);
		  $("#loaddata").modal();
	  });
}

</script>
</html>