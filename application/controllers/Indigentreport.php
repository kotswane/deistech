<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indigentreport extends CI_Controller {

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
	private $reports;
	private $reports_type;
	
	public function  __construct(){
		parent::__construct();
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$this->load->model("Auditlog_model");
		$this->load->model("SearchHistory_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	 }
	 
	
	public function idsearch(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'indigentreport','idsearch');

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
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				//$data["content"] = "indigentreport/idsearch";
				//$this->load->view('site',$data);
			}else {	*/	
				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
				$this->client = $this->mysoapclient->getClient();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokenssion' =>'Session expired, please login again'));
					redirect('user/login');
				}
				
				
				$responseConsumer = $this->client->ConnectConsumerMatch(array(
				'IdNumber'=>$this->input->post('idno'),
				'ConnectTicket'=>$this->session->userdata('tokenId'),
				'ProductId' => 132,
				'EnquiryReason' => 'Consumer Trace'
				));
				
				$xml = simplexml_load_string($responseConsumer->ConnectConsumerMatchResult);
			
				
				if ($xml->Error || $xml->NotFound){
					
					$auditlog = array(
						"auditlog_reportname"=>"indigentreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"id-search",
						"auditlog_searchdata"=>json_encode(array(
						'IdNumber'=>$this->input->post('idno'),
						'ProductId' => 132,
						'EnquiryReason' => 'Consumer Trace'
						)),
						"auditlog_fnexecuted" => "ConnectConsumerMatch",
						"auditlog_issuccess" => false
					);
					$this->Auditlog_model->save($auditlog);
					
					if($xml->Error){
						$data["errorMessage"] = $xml->Error[0];
					}else{
						$data["errorMessage"] = $xml->NotFound;
					}				
				}else{
					
					$objJsonDocument = json_encode($xml);
					$arrOutput = json_decode($objJsonDocument);
					$data["consumerList"] = $arrOutput;
					$auditlog = array(
						"auditlog_reportname"=>"indigentreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"id-search",
						"auditlog_searchdata"=>json_encode(array(
						'IdNumber'=>$this->input->post('idno'),
						'ProductId' => 132,
						'EnquiryReason' => 'Consumer Trace'
						)),
						"auditlog_fnexecuted" => "ConnectConsumerMatch",
						"auditlog_issuccess" => true
					);
					$this->Auditlog_model->save($auditlog);
					
					$this->session->set_userdata(array('searchdata' => array('IdNumber'=>$this->input->post('idno'),'ProductId' => 132,'EnquiryReason' => 'Consumer Trace')));
					$this->session->set_userdata(array('reporttype'=>'id-search'));
				
				}
				
			//}
		}
		$data["content"] = "indigentreport/idsearch";
		$this->load->view('site',$data);
	}
	
	public function lineage(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'indigentreport','idsearch');

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
				$data['errorMessage'] = 'Sorry Recaptcha Unsuccessful!!';
				//$data["content"] = "indigentreport/idsearch";
				//$this->load->view('site',$data);
			}else {	*/	
				$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
				$this->client = $this->mysoapclient->getClient();
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokenssion' =>'Session expired, please login again'));
					redirect('user/login');
				}
				
				
				$responseConsumer = $this->client->ConnectConsumerMatch(array(
				'IdNumber'=>$this->input->post('idno'),
				'ConnectTicket'=>$this->session->userdata('tokenId'),
				'ProductId' => 132,
				'EnquiryReason' => 'Consumer Trace'
				));
				
				$xml = simplexml_load_string($responseConsumer->ConnectConsumerMatchResult);
			
				
				if ($xml->Error || $xml->NotFound){
					
					$auditlog = array(
						"auditlog_reportname"=>"indigentreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"lineage",
						"auditlog_searchdata"=>json_encode(array(
						'IdNumber'=>$this->input->post('idno'),
						'ProductId' => 132,
						'EnquiryReason' => 'Consumer Trace'
						)),
						"auditlog_fnexecuted" => "ConnectConsumerMatch",
						"auditlog_issuccess" => false
					);
					$this->Auditlog_model->save($auditlog);
					
					if($xml->Error){
						$data["errorMessage"] = $xml->Error[0];
					}else{
						$data["errorMessage"] = $xml->NotFound;
					}				
				}else{
					
					$objJsonDocument = json_encode($xml);
					$arrOutput = json_decode($objJsonDocument);
					$data["consumerList"] = $arrOutput;
					$auditlog = array(
						"auditlog_reportname"=>"indigentreport",
						"auditlog_userId"=>$this->session->userdata('userId'),
						"auditlog_reporttype"=>"lineage",
						"auditlog_searchdata"=>json_encode(array(
						'IdNumber'=>$this->input->post('idno'),
						'ProductId' => 132,
						'EnquiryReason' => 'Consumer Trace'
						)),
						"auditlog_fnexecuted" => "ConnectConsumerMatch",
						"auditlog_issuccess" => true
					);
					$this->Auditlog_model->save($auditlog);
					
					$this->session->set_userdata(array('searchdata' => array('IdNumber'=>$this->input->post('idno'),'ProductId' => 132,'EnquiryReason' => 'Consumer Trace')));
					$this->session->set_userdata(array('reporttype'=>'lineage'));
				
				}
				
			//}
		}
		$data["content"] = "indigentreport/lineage";
		$this->load->view('site',$data);
	}
	
	public function getreport(){
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

		$this->session->unset_userdata("directorship");
		$this->session->unset_userdata("familyData");
		$this->session->unset_userdata("report");
		
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		$response = $this->getSearchData($this->uri->segment(3), $this->uri->segment(4));

		if($response->Error){
			$data["XDSError"] = "Error Processing <b>Income and Scoring Request</b>, Please content Developer";
		}
		$data['report'] = $response;
		$this->session->set_userdata(array('report' =>$data['report']));
		
		$IsTicketValid = array("XDSConnectTicket"=>$this->session->userdata('tokenId'));
		$resp = $this->client->IsTicketValid($IsTicketValid);
		if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
			$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
			redirect('user/login');
		}
		
		
		$idnumber = $this->uri->segment(5);
		$lineage = $this->uri->segment(6);
		
		if($lineage == "lineage"){
			$searhtype = "lineage";
		}else{
			$searhtype = "id-search";
		}
		
		$response = $this->client->ConnectGetFamilyIDPhotoVerification(array(
					'ConnectTicket' => $this->session->userdata('tokenId'), 
					'ProductID' => 239, 
					'IdNumber' => $idnumber));
				$xml = simplexml_load_string($response->ConnectGetFamilyIDPhotoVerificationResult);
		

	
		if ($xml->Error || $xml->NotFound){
			
			$auditlog = array(
			"auditlog_reportname"=>"indigentreport",
			"auditlog_userId"=>$this->session->userdata('userId'),
			"auditlog_reporttype"=>$searhtype,
			"auditlog_searchdata"=>json_encode(array( 
			'ProductID' => 239, 
			'IdNumber' => $idnumber)),
			"auditlog_fnexecuted" => "ConnectGetFamilyIDPhotoVerification",
			"auditlog_issuccess" => false);
			$this->Auditlog_model->save($auditlog);

			$data["XDSError"] = $xml->Error;
			$data["familyData"] = array();
			$this->session->set_userdata(array('familyData' =>$data['familyData']));
			if($lineage == "lineage"){
				$data["content"] = "indigentreport/showlineagereport";
			}else{
				$data["content"] = "indigentreport/showreport";
			}
			
			$this->load->view('site',$data);
		}else {
			$auditlog = array(
			"auditlog_reportname"=>"indigentreport",
			"auditlog_userId"=>$this->session->userdata('userId'),
			"auditlog_reporttype"=>$searhtype,
			"auditlog_searchdata"=>json_encode(array(
			'ProductID' => 239, 
			'IdNumber' => $idnumber)),
			"auditlog_fnexecuted" => "ConnectGetFamilyIDPhotoVerification",
			"auditlog_issuccess" => true);
			$this->Auditlog_model->save($auditlog);
			
			$objJsonDocument = json_encode($xml);
			$arrOutput = json_decode($objJsonDocument);

	
			$data['familyData']= $arrOutput;
			$this->session->set_userdata(array('familyData' =>$data['familyData']));
			
			$resp = $this->client->IsTicketValid($IsTicketValid);
			if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
				$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
				redirect('user/login');
			}			
			
			$response = $this->client->ConnectDirectorMatch(array(
					'ConnectTicket' => $this->session->userdata('tokenId'), 
					'IdNumber' => $idnumber));
					
			$xml = simplexml_load_string($response->ConnectDirectorMatchResult);		
			if ($xml->Error || $xml->NotFound){
				$data['directorship']= "";
				
				$auditlog = array(
				"auditlog_reportname"=>"indigentreport",
				"auditlog_userId"=>$this->session->userdata('userId'),
				"auditlog_reporttype"=>$searhtype,
				"auditlog_searchdata"=>json_encode(array('IdNumber' => $idnumber)),
				"auditlog_fnexecuted" => "ConnectDirectorMatch",
				"auditlog_issuccess" => false);
				$this->Auditlog_model->save($auditlog);
			
			}else{
				
				$objJsonDocument = json_encode($xml);
			    $arrOutput = json_decode($objJsonDocument);				

			
				$auditlog = array(
				"auditlog_reportname"=>"indigentreport",
				"auditlog_userId"=>$this->session->userdata('userId'),
				"auditlog_reporttype"=> $searhtype,
				"auditlog_searchdata"=>json_encode(array('IdNumber' => $idnumber)),
				"auditlog_fnexecuted" => "ConnectDirectorMatch",
				"auditlog_issuccess" => true);
				$this->Auditlog_model->save($auditlog);
				
				$resp = $this->client->IsTicketValid($IsTicketValid);
				if($resp->IsTicketValidResult != true || $resp->IsTicketValidResult ==""){
					$this->session->set_userdata(array('tokensession' =>'Session expired, please login again'));
					redirect('user/login');
				}
				
				if($lineage != "lineage"){
					$data['directorship'] = array();
					if(is_object($arrOutput->DirectorDetails))
					{
							$response = $this->client->ConnectGetResult(array(
							'EnquiryID' => $arrOutput->DirectorDetails->EnquiryID,
							'EnquiryResultID' => $arrOutput->DirectorDetails->EnquiryResultID, 
							'ConnectTicket' => $this->session->userdata('tokenId'), 
							'ProductID' => 14));

							$auditlog = array(
							"auditlog_reportname"=>"indigentreport",
							"auditlog_userId"=>$this->session->userdata('userId'),
							"auditlog_reporttype"=>$searhtype,
							"auditlog_searchdata"=>json_encode(array(
							'EnquiryID' => $arrOutput->DirectorDetails->EnquiryID,
							'EnquiryResultID' => $arrOutput->DirectorDetails->EnquiryResultID,
							'ProductID' => 14)),
							"auditlog_fnexecuted" => "ConnectGetResult",
							"auditlog_issuccess" => true);
							$this->Auditlog_model->save($auditlog);
							
							$xml = simplexml_load_string($response->ConnectGetResultResult,"SimpleXMLElement");
							$objJsonDocument = json_encode($xml);
							$arrOutput = json_decode($objJsonDocument);
							$data['directorship'][] = $arrOutput->ConsumerDirectorShipLink;
							$this->session->set_userdata(array('directorship' =>$data['directorship']));
							
							$searchdataArray = array("directorship" => $data['directorship'], 'familyData' => $data['familyData'], 'report' => $data['report']);
							
							$searchHistory = array(
									"reportname"=>"indigentreport",
									"userId"=>$this->session->userdata('userId'),
									"searchdata"=>json_encode($this->session->userdata('searchdata')),
									"outputdata" => json_encode($searchdataArray),
									"reporttype" => $searhtype
							);
					
							$this->SearchHistory_model->create($searchHistory);
					}else{
						foreach($arrOutput->DirectorDetails as $DirectorDetails)
						{
							$response = $this->client->ConnectGetResult(array(
							'EnquiryID' => $DirectorDetails->EnquiryID,
							'EnquiryResultID' => $DirectorDetails->EnquiryResultID, 
							'ConnectTicket' => $this->session->userdata('tokenId'), 
							'ProductID' => 14));

							$auditlog = array(
							"auditlog_reportname"=>"indigentreport",
							"auditlog_userId"=>$this->session->userdata('userId'),
							"auditlog_reporttype"=>$searhtype,
							"auditlog_searchdata"=>json_encode(array(
							'EnquiryID' => $DirectorDetails->EnquiryID,
							'EnquiryResultID' => $DirectorDetails->EnquiryResultID,
							'ProductID' => 14)),
							"auditlog_fnexecuted" => "ConnectGetResult",
							"auditlog_issuccess" => true);
							$this->Auditlog_model->save($auditlog);
							
							$xml = simplexml_load_string($response->ConnectGetResultResult,"SimpleXMLElement");
							$objJsonDocument = json_encode($xml);
							$arrOutputDirectorDetails = json_decode($objJsonDocument);
							$data['directorship'][] = $arrOutputDirectorDetails->ConsumerDirectorShipLink;
						}
						
						$this->session->set_userdata(array('directorship' =>$data['directorship']));
						
						$searchdataArray = array("directorship" => $data['directorship'], 'familyData' => $data['familyData'], 'report' => $data['report']);

						$searchHistory = array(
								"reportname"=>"indigentreport",
								"userId"=>$this->session->userdata('userId'),
								"searchdata"=>json_encode(array('IdNumber' => $idnumber)),
								"outputdata" => json_encode($searchdataArray),
								"reporttype" => $searhtype
						);
				
						$this->SearchHistory_model->create($searchHistory);
						
					}
				}else{
						
						$searchdataArray = array('familyData' => $data['familyData']);
						$searchHistory = array(
								"reportname"=>"indigentreport",
								"userId"=>$this->session->userdata('userId'),
								"searchdata"=>json_encode(array('IdNumber' => $idnumber)),
								"outputdata" => json_encode($searchdataArray),
								"reporttype" => $searhtype
						);
				
						$this->SearchHistory_model->create($searchHistory);
				}
			}
			
			if($lineage == "lineage"){
				$data["content"] = "indigentreport/showlineagereport";
			}else{
				$data["content"] = "indigentreport/showreport";
			}
			
			$this->load->view('site',$data);
		}
	}
	
	private function getSearchData($enquiryID, $enquiryResultID){
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
		
		$response = $this->client->ConnectGetResult(array(
				'EnquiryID' => $enquiryID,
				'EnquiryResultID' => $enquiryResultID, 
				'ConnectTicket' => $this->session->userdata('tokenId'), 
				'ProductID' => 132));
				
		$xml = simplexml_load_string($response->ConnectGetResultResult,"SimpleXMLElement");
		$objJsonDocument = json_encode($xml);
		$arrOutput = json_decode($objJsonDocument, TRUE);
			$auditlog = array(
			"auditlog_reportname"=>"indigentreport",
			"auditlog_userId"=>$this->session->userdata('userId'),
			"auditlog_reporttype"=>"id-search",
			"auditlog_searchdata"=>json_encode(array(
			'EnquiryID' => $enquiryID,
			'EnquiryResultID' => $enquiryResultID, 
			'ProductID' => 132)),
			"auditlog_fnexecuted" => "ConnectGetResult",
			"auditlog_issuccess" => true);
		$this->Auditlog_model->save($auditlog);
		return $arrOutput;
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
			$data['familyData'] = $this->session->userdata('familyData');
			$data['directorship'] = $this->session->userdata('directorship');
			
			$this->load->library('pdf');
			$html = $this->load->view('indigentreport/pdf-indigent-report',$data, true);
			$this->pdf->createPDF($html, "indigent-report-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}

	}
	
	
	public function downloadidreportlineage(){
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

			$data['familyData'] = $this->session->userdata('familyData');
			//$data['directorship'] = $this->session->userdata('directorship');
			
			$this->load->library('pdf');
			$html = $this->load->view('indigentreport/pdf-lineage-report',$data, true);
			$this->pdf->createPDF($html, "lineage-report-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}

	}

}
