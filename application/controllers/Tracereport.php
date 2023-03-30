<?php
//error_reporting(E_ALL);
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracereport extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 
	private $client;
	private $latestclient;
	private $reports;
	private $reports_type;
	private $hasAccess;
	
	
	public function  __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		

		$this->load->model("Province_model");
		$this->load->model("Auditlog_model");
		$this->load->model("SearchHistory_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();
		
	 }
	 
	public function index(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$data["successFlash"] = "";
		$data["errorFlash"] = "";
		$data["infoFlash"] = "";
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["content"] = "dashboard/home";
		
		$this->load->view('site',$data);
	}
	
	public function idsearch(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	

		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'tracereport','idsearch');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$data["consumerList"]["details"] = array();
		
		if ($this->input->post("postback")=="post"){
			
			/*$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp=$this->input->ip_address();
			$secret = $this->config->item('google_secret');
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
	 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			 
			$status= json_decode($output, true);	
			
			if ($status['success'] == false){
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				$data["content"] = "tracereport/id-search";
				$this->load->view('site',$data);
			} else {*/
				
				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
			
				$this->client = $this->mysoapclient->getClient();
				$this->latestclient = $this->mysoapclient->getClientlatest();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
					redirect('user/login');
				}
				
				$response = $this->client->ConnectConsumerMatch(array(
				'IdNumber'=>$this->input->post('idNumber'),
				'ConnectTicket'=>$this->session->userdata('tokenId'),
				'ProductId' => 2,
				'EnquiryReason' => 'Consumer Trace'
				));
				
			
				$xml = simplexml_load_string($response->ConnectConsumerMatchResult);
				
				$this->session->set_userdata(array('searchdata' => array('IdNumber'=>$this->input->post('idNumber'),'ProductId' => 2,'EnquiryReason' => 'Consumer Trace')));
				$this->session->set_userdata(array('reporttype' => 'id-search'));
				
				if ($xml->Error || $xml->NotFound){
					
					$auditlog = array(
						"auditlog_reportname"=>"tracereport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"id-search",
						"auditlog_searchdata"=>json_encode(array(
						'IdNumber'=>$this->input->post('idNumber'),
						'ProductId' => 2,
						'EnquiryReason' => 'Consumer Trace')),
						"auditlog_fnexecuted" => "ConnectConsumerMatch",
						"auditlog_issuccess" => false
					);
					$this->Auditlog_model->save($auditlog);
				
					if($xml->Error){
						$data["errorMessage"] = $xml->Error[0];
					}else{
						$data["errorMessage"] = $xml->NotFound;
					}
					$data["consumerList"]["details"] = array();
					$data["content"] = "tracereport/id-search";
					$this->load->view('site',$data);
				}else {
					
					$objJsonDocument = json_encode($xml);
					$arrOutput = json_decode($objJsonDocument);

					$auditlog = array(
						"auditlog_reportname"=>"tracereport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"id-search",
						"auditlog_searchdata"=>json_encode(array(
						'IdNumber'=>$this->input->post('idNumber'),
						'ProductId' => 2,
						'EnquiryReason' => 'Consumer Trace')),
						"auditlog_fnexecuted" => "ConnectConsumerMatch",
						"auditlog_issuccess" => true
					);
					$this->Auditlog_model->save($auditlog);
					$data['report'] = array();
					
					//$myEnquiryResultID = $arrOutput->ConsumerDetails->EnquiryResultID;
					//$myEnquiryID = $arrOutput->ConsumerDetails->EnquiryID;
			
					if(is_object($arrOutput->ConsumerDetails)){
									
							$data["consumerList"]["details"][]= $arrOutput->ConsumerDetails;
							
							$resp = $this->client->IsTicketValid($IsTicketValid);
							if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
								$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
								redirect('user/login');
							}
							

							$response = $this->client->AdminEnquiryResult(array(
							'ConnectTicket' => $this->session->userdata('tokenId'),
							'EnquiryResultID' => $arrOutput->ConsumerDetails->EnquiryResultID));
					
							 
						 
							$auditlog = array(
								"auditlog_reportname"=>"tracereport",
								"auditlog_userId"=>$this->session->userdata('userId'),
								"auditlog_reporttype"=>"addresssearch",
								"auditlog_searchdata"=>json_encode(array(
								'EnquiryResultID' =>  $arrOutput->ConsumerDetails->EnquiryResultID)),
								"auditlog_fnexecuted" => "AdminEnquiryResult",
								"auditlog_issuccess" => true
							);
							$this->Auditlog_model->save($auditlog);
					
							$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
							$objJsonDocument = json_encode($xml);
							$arrOutput = json_decode($objJsonDocument, TRUE);
							$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
							
					} else {
							foreach($arrOutput->ConsumerDetails as $arrOutputListValueListKey => $arrOutputListValueListValue){
								
								
								$data["consumerList"]["details"][]= $arrOutputListValueListValue;
								$resp = $this->client->IsTicketValid($IsTicketValid);
								if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
									$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
									redirect('user/login');
								}
								
								$response = $this->client->AdminEnquiryResult(array(
								'ConnectTicket' => $this->session->userdata('tokenId'),
								'EnquiryResultID' => $arrOutputListValueListValue->EnquiryResultID));
								
								$auditlog = array(
									"auditlog_reportname"=>"tracereport",
									"auditlog_userId"=>$this->session->userdata('userId'),
									"auditlog_reporttype"=>"addresssearch",
									"auditlog_searchdata"=>json_encode(array(
									'EnquiryResultID' => $arrOutputListValueListValue->EnquiryResultID)),
									"auditlog_fnexecuted" => "AdminEnquiryResult",
									"auditlog_issuccess" => true
								);
								$this->Auditlog_model->save($auditlog);
								
								$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
								$objJsonDocument = json_encode($xml);
								$arrOutput = json_decode($objJsonDocument, TRUE);
								$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
							}								
					}
					
					$data["content"] = "tracereport/id-search";
					$this->load->view('site',$data);
				}

			//}				
			
		}else{
			$data["consumerList"]["details"] = array();
			$data["content"] = "tracereport/id-search";
			$this->load->view('site',$data);
		}
	}
	
	public function tracedata(){
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	

		/*$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'tracereport','idsearch');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}*/
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		
		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		$this->client = $this->mysoapclient->getClient();
		$resp = $this->client->IsTicketValid($IsTicketValid);

		if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		
		$myEnquiryResultID = $this->uri->segment(4);
		$myEnquiryID = $this->uri->segment(3);
		
		$connectGetBonusSegments = $this->client->ConnectGetBonusSegments(array(
		'ConnectTicket'=>$this->session->userdata('tokenId'),
		'EnquiryResultID' => $myEnquiryResultID,
		'EnquiryReason' => 'Consumer Trace'
		));
		
		$strConnectGetBonusSegments = simplexml_load_string($connectGetBonusSegments->ConnectGetBonusSegmentsResult,"SimpleXMLElement");

		$objJsonDocument = json_encode($strConnectGetBonusSegments);
		$arrOutput = json_decode($objJsonDocument);
			
		if(is_object($arrOutput->Segments)){
			$strConnectGetBonusSegments->Segments->BonusViewed='True';
		}else{
			foreach($arrOutput->Segments as $segmenValK => $segmenValV){
				$arrOutput->Segments[$segmenValK]->BonusViewed='True';
			}	
		}


		 $document = new DOMDocument();
		 $document->appendChild($bonusSegments = $document->createElement('BonusSegments'));
		 $hasSegments =false;
		 if(!is_object($arrOutput->Segments)){
			 foreach($arrOutput->Segments as $segmenValK => $segmenValV){

				$bonusSegments->appendChild($segments = $document->createElement('Segments')); 
				$segments->appendChild($document->createElement('DataSegmentID'))->textContent = $segmenValV->DataSegmentID;
				$segments->appendChild($document->createElement('DataSegmentName'))->textContent = $segmenValV->DataSegmentName;
				$segments->appendChild($document->createElement('DataSegmentDisplayText'))->textContent = $segmenValV->DataSegmentDisplayText;
				$segments->appendChild($document->createElement('BonusViewed'))->textContent = $segmenValV->BonusViewed;
				$segments->appendChild($document->createElement('BonusPrice'))->textContent = $segmenValV->BonusPrice;
				$hasSegments = true;
			 }
		 }else{
			  if($arrOutput->Segments){
				$hasSegments = true;
				$bonusSegments->appendChild($segments = $document->createElement('Segments')); 
				$segments->appendChild($document->createElement('DataSegmentID'))->textContent = $arrOutput->Segments->DataSegmentID;
				$segments->appendChild($document->createElement('DataSegmentName'))->textContent = $arrOutput->Segments->DataSegmentName;
				$segments->appendChild($document->createElement('DataSegmentDisplayText'))->textContent = $arrOutput->Segments->DataSegmentDisplayText;
				$segments->appendChild($document->createElement('BonusViewed'))->textContent = $arrOutput->Segments->BonusViewed;
				$segments->appendChild($document->createElement('BonusPrice'))->textContent = $arrOutput->Segments->BonusPrice;
			  }							
		 }
		 
		if ($hasSegments == true){ 
			$document->formatOutput = true;

			$responseConnectGetResult = $this->client->ConnectGetResult(array(
			'EnquiryID' => $myEnquiryID,
			'EnquiryResultID' => $myEnquiryResultID, 
			'ConnectTicket' => $this->session->userdata('tokenId'), 
			'ProductID' => 2,
			'BonusXML' => $document->saveXML()));	
		}else{
			$responseConnectGetResult = $this->client->ConnectGetResult(array(
			'EnquiryID' => $myEnquiryID,
			'EnquiryResultID' => $myEnquiryResultID, 
			'ConnectTicket' => $this->session->userdata('tokenId'), 
			'ProductID' => 2));
		}


		$xml = simplexml_load_string($responseConnectGetResult->ConnectGetResultResult,"SimpleXMLElement");
		$objJsonDocument = json_encode($xml);
		$arrOutput = json_decode($objJsonDocument);
		$data['report'] = $arrOutput;

		$searchdataArray =(array)$data['report'];
		$searchHistory = array(
				"reportname"=>"tracereport",
				"userId"=>$this->session->userdata('userId'),
				"searchdata"=>json_encode($this->session->userdata('searchdata')),
				"outputdata" => json_encode($searchdataArray),
				"reporttype" => 'idsearch'
		);
		
		$this->SearchHistory_model->create($searchHistory);
		$this->session->set_userdata(array('report' =>$data['report']));
		$data["content"] = "tracereport/trace-report";
		$this->load->view('site',$data);	
		
	}
	
	
	public function addresssearch(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'tracereport','addresssearch');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		$data["provinces"] = $this->Province_model->list_provinces();
		
		
		
		if ($this->input->post("postback")=="post"){
			
			
			/*$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp=$this->input->ip_address();
			$secret = $this->config->item('google_secret');
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
	 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			 
			$status= json_decode($output, true);			
			if ($status['success'] == false){
				$data["consumerList"]["details"] = array();
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				$data["content"] = "tracereport/addresssearch";
				$this->load->view('site',$data);
			} else {*/
				if(!$this->input->post('listprovinces')){
					redirect('tracereport/addresssearch');
				}
				
				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
			
				$this->client = $this->mysoapclient->getClient();
				$this->latestclient = $this->mysoapclient->getClientlatest();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
					redirect('user/login');
				}
			
				$response = $this->client->ConnectAddressMatch(array(
					'Province' => $this->input->post('listprovinces'),
					'Suburb' => $this->input->post('suburb'), 
					'City' => $this->input->post('city'), 
					'PostalMatch' => true,
					'ConnectTicket' => $this->session->userdata('tokenId'), 
					'StreetName_PostalNo' => $this->input->post('streetName'), 
					'PostalCode' => $this->input->post('postalCode'), 
					'StreetNo' => $this->input->post('streetNo')));
					
				$xml = simplexml_load_string($response->ConnectAddressMatchResult,"SimpleXMLElement");
			
				if ($xml->Error || $xml->NotFound){
					
					$auditlog = array(
						"auditlog_reportname"=>"tracereport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"addresssearch",
						"auditlog_searchdata"=>json_encode(array(
						'Province' => $this->input->post('listprovinces'),
						'Suburb' => $this->input->post('suburb'), 
						'City' => $this->input->post('city'), 
						'PostalMatch' => true,
						'StreetName_PostalNo' => $this->input->post('streetName'), 
						'PostalCode' => $this->input->post('postalCode'), 
						'StreetNo' => $this->input->post('streetNo'))),
						"auditlog_fnexecuted" => "ConnectAddressMatch",
						"auditlog_issuccess" => false
					);
					$this->Auditlog_model->save($auditlog);
							
					if($xml->Error){
						$data["errorMessage"] = $xml->Error[0];
					}else{
						$data["errorMessage"] = $xml->NotFound;
					}
					$data["consumerList"]["details"] = array();
				}else{
					$data["consumerList"]["details"] = array();
					$objJsonDocument = json_encode($xml);
					$arrOutput = json_decode($objJsonDocument);
					$auditlog = array(
						"auditlog_reportname"=>"tracereport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"addresssearch",
						"auditlog_searchdata"=>json_encode(array(
						'Province' => $this->input->post('listprovinces'),
						'Suburb' => $this->input->post('suburb'), 
						'City' => $this->input->post('city'), 
						'PostalMatch' => true,
						'StreetName_PostalNo' => $this->input->post('streetName'), 
						'PostalCode' => $this->input->post('postalCode'), 
						'StreetNo' => $this->input->post('streetNo'))),
						"auditlog_fnexecuted" => "ConnectAddressMatch",
						"auditlog_issuccess" => true
					);
					$this->Auditlog_model->save($auditlog);
					
					$this->session->set_userdata(array('searchdata' => array(
						'Province' => $this->input->post('listprovinces'),
						'Suburb' => $this->input->post('suburb'), 
						'City' => $this->input->post('city'), 
						'PostalMatch' => true,
						'StreetName_PostalNo' => $this->input->post('streetName'), 
						'PostalCode' => $this->input->post('postalCode'), 
						'StreetNo' => $this->input->post('streetNo'))));
						
					$this->session->set_userdata(array('reporttype' => 'addresssearch'));
					
					if(is_object($arrOutput->ConsumerDetails)){
										
								$data["consumerList"]["details"][]= $arrOutput->ConsumerDetails;
								
								$resp = $this->client->IsTicketValid($IsTicketValid);
								if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
									$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
									redirect('user/login');
								}
								

								$response = $this->client->AdminEnquiryResult(array(
								'ConnectTicket' => $this->session->userdata('tokenId'),
								'EnquiryResultID' => $arrOutput->ConsumerDetails->EnquiryResultID));
						
								 
							 
								$auditlog = array(
									"auditlog_reportname"=>"tracereport",
									"auditlog_userId"=>$this->session->userdata('userId'),
									"auditlog_reporttype"=>"addresssearch",
									"auditlog_searchdata"=>json_encode(array(
									'EnquiryResultID' =>  $arrOutput->ConsumerDetails->EnquiryResultID)),
									"auditlog_fnexecuted" => "AdminEnquiryResult",
									"auditlog_issuccess" => true
								);
								$this->Auditlog_model->save($auditlog);
						
								$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
								$objJsonDocument = json_encode($xml);
								$arrOutput = json_decode($objJsonDocument, TRUE);
								$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
								
						} else {
								foreach($arrOutput->ConsumerDetails as $arrOutputListValueListKey => $arrOutputListValueListValue){
									
									
									$data["consumerList"]["details"][]= $arrOutputListValueListValue;
									$resp = $this->client->IsTicketValid($IsTicketValid);
									if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
										$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
										redirect('user/login');
									}
									
									$response = $this->client->AdminEnquiryResult(array(
									'ConnectTicket' => $this->session->userdata('tokenId'),
									'EnquiryResultID' => $arrOutputListValueListValue->EnquiryResultID));
									
									$auditlog = array(
										"auditlog_reportname"=>"tracereport",
										"auditlog_userId"=>$this->session->userdata('userId'),
										"auditlog_reporttype"=>"addresssearch",
										"auditlog_searchdata"=>json_encode(array(
										'EnquiryResultID' => $arrOutputListValueListValue->EnquiryResultID)),
										"auditlog_fnexecuted" => "AdminEnquiryResult",
										"auditlog_issuccess" => true
									);
									$this->Auditlog_model->save($auditlog);
									
									$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
									$objJsonDocument = json_encode($xml);
									$arrOutput = json_decode($objJsonDocument, TRUE);
									$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
								}								
						}
					
				}
				$data["content"] = "tracereport/addresssearch";
				$this->load->view('site',$data);
			//}			
		}else{
			$data["consumerList"]["details"] = array();
			$data["content"] = "tracereport/addresssearch";
			$this->load->view('site',$data);
		}
			
	}
	
	public function telephonesearch(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'tracereport','telephonesearch');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		
		if ($this->input->post("postback")=="post"){
			/*$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp=$this->input->ip_address();
			$secret = $this->config->item('google_secret');
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
	 
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			 
			$status= json_decode($output, true);			
			if ($status['success'] == false){
				$data["consumerList"]["details"] = array();
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				$data["content"] = "tracereport/telephone-search";
				$this->load->view('site',$data);
			} else {*/			
				if((!$this->input->post('cellphoneNo')) && (!$this->input->post('telephoneNo'))){
					redirect('tracereport/telephonesearch');
				}	
				
				if ($this->input->post("cellphoneNo") != ""){
					$code = substr($this->input->post("cellphoneNo"),0,3);
					$number = substr($this->input->post("cellphoneNo"),3,strlen($this->input->post("cellphoneNo")));
				}else if ($this->input->post("telephoneNo") != ""){
					$code = substr($this->input->post("telephoneNo"),0,3);
					$number = substr($this->input->post("telephoneNo"),3,strlen($this->input->post("telephoneNo")));	
				}

				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
				
				$this->client = $this->mysoapclient->getClient();
				$this->latestclient = $this->mysoapclient->getClientlatest();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
					redirect('user/login');
				}
			
				$response = $this->client->ConnectTelephoneMatch(array(
					'TelephoneCode' => $code,
					'ConnectTicket' => $this->session->userdata('tokenId'),
					'TelephoneNo' => $number));
				
				
				$this->session->set_userdata(array('searchdata' => array('TelephoneCode' => $code,'TelephoneNo' => $number)));
				$this->session->set_userdata(array('reporttype'=>'telephonesearch'));
				$xml = simplexml_load_string($response->ConnectTelephoneMatchResult,"SimpleXMLElement");
			
				if ($xml->NotFound || $xml->Error){
					
					$data["errorMessage"] = (($xml->NotFound)?$xml->NotFound:$xml->Error);
					$data["consumerList"]["details"] = array();				
					$auditlog = array(
						"auditlog_reportname"=>"tracereport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"telephonesearch",
						"auditlog_searchdata"=>json_encode(array(
						'TelephoneCode' => $code,
						'TelephoneNo' => $number)),
						"auditlog_fnexecuted" => "ConnectTelephoneMatch",
						"auditlog_issuccess" => false
					);
					$this->Auditlog_model->save($auditlog);

			
				}else{
					$data["consumerList"]["details"] = array();
					$objJsonDocument = json_encode($xml);
					$arrOutput = json_decode($objJsonDocument);
					
					$auditlog = array(
						"auditlog_reportname"=>"tracereport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"telephonesearch",
						"auditlog_searchdata"=>json_encode(array(
						'TelephoneCode' => $code,
						'TelephoneNo' => $number)),
						"auditlog_fnexecuted" => "ConnectTelephoneMatch",
						"auditlog_issuccess" => true
					);
					

					$responseIns = $this->Auditlog_model->save($auditlog);
					if(is_array($arrOutput->ConsumerDetails)){
						foreach($arrOutput->ConsumerDetails as $arrOutputListValueListValue){

							$data["consumerList"]["details"][]= $arrOutputListValueListValue;
							
							$response = $this->client->AdminEnquiryResult(array(
							'ConnectTicket' => $this->session->userdata('tokenId'),
							'EnquiryResultID' => $arrOutputListValueListValue->EnquiryResultID));
							
							$auditlog = array(
								"auditlog_reportname"=>"tracereport",
								"auditlog_userId"=>$this->session->userdata('userId'),
								"auditlog_reporttype"=>"telephonesearch",
								"auditlog_searchdata"=>json_encode(array(
								'EnquiryResultID' => $arrOutputListValueListValue->EnquiryResultID)),
								"auditlog_fnexecuted" => "AdminEnquiryResult",
								"auditlog_issuccess" => true
							);
							$this->Auditlog_model->save($auditlog);
					
							$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
							$objJsonDocument = json_encode($xml);
							$arrOutput = json_decode($objJsonDocument, TRUE);
							$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
						}
					}else{
							$data["consumerList"]["details"][]= $arrOutput->ConsumerDetails;
							$response = $this->client->AdminEnquiryResult(array(
							'ConnectTicket' => $this->session->userdata('tokenId'),
							'EnquiryResultID' => $arrOutput->ConsumerDetails->EnquiryResultID));

							$auditlog = array(
								"auditlog_reportname"=>"tracereport",
								"auditlog_userId"=>$this->session->userdata('userId'),
								"auditlog_reporttype"=>"telephonesearch",
								"auditlog_searchdata"=>json_encode(array(
								'EnquiryResultID' => $arrOutput->ConsumerDetails->EnquiryResultID)),
								"auditlog_fnexecuted" => "AdminEnquiryResult",
								"auditlog_issuccess" => true
							);
							$this->Auditlog_model->save($auditlog);
							
							$xml = simplexml_load_string($response->AdminEnquiryResultResult,"SimpleXMLElement");
							$objJsonDocument = json_encode($xml);
							$arrOutput = json_decode($objJsonDocument, TRUE);
							$data["consumerList"]["DetailsViewed"][]= (($arrOutput["Result"]["DetailsViewedYN"]=="true")? "Yes":"No");
					}

				}
			//}
		} else {
			$data["consumerList"]["details"] = array();
		}
		$data["content"] = "tracereport/telephone-search";
		$this->load->view('site',$data);
		
	}
	
	private function getSearchData($myEnquiryID, $myEnquiryResultID){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
		$this->client = $this->mysoapclient->getClient();
		$this->latestclient = $this->mysoapclient->getClientlatest();
		$resp = $this->client->IsTicketValid($IsTicketValid);
		if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		


	$connectGetBonusSegments = $this->client->ConnectGetBonusSegments(array(
	'ConnectTicket'=>$this->session->userdata('tokenId'),
	'EnquiryResultID' => $myEnquiryResultID,
	'EnquiryReason' => 'Consumer Trace'
	));
	
	$auditlog = array(
		"auditlog_reportname"=>"tracereport",
		"auditlog_userId"=>$this->session->userdata('userId'),
		"auditlog_reporttype"=>"id-search",
		"auditlog_searchdata"=>json_encode(array(
		'ConnectTicket'=>$this->session->userdata('tokenId'),
		'EnquiryResultID' => $myEnquiryResultID,
		'EnquiryReason' => 'Consumer Trace'
		)),
		"auditlog_fnexecuted" => "ConnectGetBonusSegments",
		"auditlog_issuccess" => true
	);
	$this->Auditlog_model->save($auditlog);
	
	$strConnectGetBonusSegments = simplexml_load_string($connectGetBonusSegments->ConnectGetBonusSegmentsResult,"SimpleXMLElement");
	$objJsonDocument = json_encode($strConnectGetBonusSegments);
	$arrOutput = json_decode($objJsonDocument);

	if(is_object($arrOutput->Segments)){
		$strConnectGetBonusSegments->Segments->BonusViewed='True';
	}else{
		foreach($arrOutput->Segments as $segmenValK => $segmenValV){
			$arrOutput->Segments[$segmenValK]->BonusViewed='True';
		}	
	}

	 $document = new DOMDocument();
	 $document->appendChild($bonusSegments = $document->createElement('BonusSegments'));
	 if(!is_object($arrOutput->Segments)){
		 foreach($arrOutput->Segments as $segmenValK => $segmenValV){
			$bonusSegments->appendChild($segments = $document->createElement('Segments')); 
			$segments->appendChild($document->createElement('DataSegmentID'))->textContent = $segmenValV->DataSegmentID;
			$segments->appendChild($document->createElement('DataSegmentName'))->textContent = $segmenValV->DataSegmentName;
			$segments->appendChild($document->createElement('DataSegmentDisplayText'))->textContent = $segmenValV->DataSegmentDisplayText;
			$segments->appendChild($document->createElement('BonusViewed'))->textContent = $segmenValV->BonusViewed;
			$segments->appendChild($document->createElement('BonusPrice'))->textContent = $segmenValV->BonusPrice;
		 }
	 }else{
			$bonusSegments->appendChild($segments = $document->createElement('Segments')); 
			$segments->appendChild($document->createElement('DataSegmentID'))->textContent = $arrOutput->Segments->DataSegmentID;
			$segments->appendChild($document->createElement('DataSegmentName'))->textContent = $arrOutput->Segments->DataSegmentName;
			$segments->appendChild($document->createElement('DataSegmentDisplayText'))->textContent = $arrOutput->Segments->DataSegmentDisplayText;
			$segments->appendChild($document->createElement('BonusViewed'))->textContent = $arrOutput->Segments->BonusViewed;
			$segments->appendChild($document->createElement('BonusPrice'))->textContent = $arrOutput->Segments->BonusPrice;			 
	 }
	 
	$document->formatOutput = true;

	
	$responseConnectGetResult = $this->client->ConnectGetResult(array(
	'EnquiryID' => $myEnquiryID,
	'EnquiryResultID' => $myEnquiryResultID, 
	'ConnectTicket' => $this->session->userdata('tokenId'), 
	'ProductID' => 2,
	'BonusXML' => $document->saveXML()));					 

	$xml = simplexml_load_string($responseConnectGetResult->ConnectGetResultResult,"SimpleXMLElement");
	$objJsonDocument = json_encode($xml);
	$arrOutput = json_decode($objJsonDocument);
	$data['report'] = $arrOutput;
	
	$searchdataArray =(array)$data['report'];
	$searchHistory = array(
			"reportname"=>"tracereport",
			"userId"=>$this->session->userdata('userId'),
			"searchdata"=>json_encode($this->session->userdata('searchdata')),
			"outputdata" => json_encode($searchdataArray),
			"reporttype" => $this->session->userdata('reporttype')
	);
	
	$this->SearchHistory_model->create($searchHistory);
				
	
	$auditlog = array(
		"auditlog_reportname"=>"tracereport",
		"auditlog_userId"=>$this->session->userdata('userId'),
		"auditlog_reporttype"=>"id-search",
		"auditlog_searchdata"=>json_encode(array(
			'EnquiryID' => $myEnquiryID,
			'EnquiryResultID' => $myEnquiryResultID,
			'ProductID' => 2,
			'BonusXML' => $document->saveXML())),
		"auditlog_fnexecuted" => "ConnectGetResult",
		"auditlog_issuccess" => true
	);
	$this->Auditlog_model->save($auditlog);

		return $arrOutput;
	}
	
	public function customerdatalist(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}


		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		
		$this->client = $this->mysoapclient->getClient();
		$this->latestclient = $this->mysoapclient->getClientlatest();
		$resp = $this->client->IsTicketValid($IsTicketValid);
		if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$response = $this->getSearchData($this->uri->segment(3), $this->uri->segment(4));
		$data['report'] = $response;

		$this->session->set_userdata(array('report' =>$data['report']));
		
		$searchdataArray =(array)$data['report'];
		$searchHistory = array(
				"reportname"=>"tracereport",
				"userId"=>$this->session->userdata('userId'),
				"searchdata"=>json_encode($this->session->userdata('searchdata')),
				"outputdata" => json_encode($searchdataArray),
				"reporttype" => $this->session->userdata('reporttype')
		);
		
		$this->SearchHistory_model->create($searchHistory);
					
		#$this->session->unset_userdata('searchdata');
		#$this->session->unset_userdata('reporttype');
		$data["content"] = "tracereport/trace-report";
		$this->load->view('site',$data);
		
	}
	
	public function fuzzysearch(){
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = array();
		$data["content"] = "tracereport/fuzzy-search";
		$this->load->view('site',$data);
		
	}
	
	
	public function downloadidreport(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}

		try{
			ob_clean();
			$data['report'] = $this->session->userdata('report');
			$this->load->library('pdf');
			$html = $this->load->view('tracereport/pdf-trace-report',$data, true);
			$this->pdf->createPDF($html, "customer-tracereport-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}
	}
}
