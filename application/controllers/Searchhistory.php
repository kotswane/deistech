<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchhistory extends CI_Controller {

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
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	 }
	 
	
	public function view(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'searchhistory','view');

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


		$this->load->model("SearchHistory_model");
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$data["consumerList"] = $this->SearchHistory_model->findByUser($this->session->userdata('userId'));
		$data["content"] = "searchhistory/view";
		$this->load->view('site',$data);
	}
	
	public function tracereport(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		/**$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'searchhistory','view');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		*/
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}


		$this->load->model("SearchHistory_model");
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$response = $this->SearchHistory_model->findById($this->input->post('page'));
		$data['report'] = json_decode($response[0]->outputdata);
		$this->session->set_userdata(array('report_download'=>$data['report']));
		$data["content"] = "searchhistory/trace-report";
		$this->load->view('site',$data);
	}
	
	public function indigentreport(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		/**$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'searchhistory','view');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		*/
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}


		$this->load->model("SearchHistory_model");
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$response = $this->SearchHistory_model->findById($this->input->post('page'));
		$responseX = json_decode($response[0]->outputdata);
		$data['familyData'] = $responseX->familyData;
		$data['directorship'] = $responseX->directorship;
		$data['report'] = $responseX->report;
		$this->session->set_userdata(array('report_download'=>$responseX));
		$data["content"] = "searchhistory/showreport";
		$this->load->view('site',$data);
	}
	
	
	public function procurementreport(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		/**$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'searchhistory','view');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		*/
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		$data = array('id'=>$this->session->userdata('username'),'site'=>'tracing portal prod');
		$response = $this->redisclient->request($data);

		if($response->status != "success"){
			$this->session->set_userdata(array('tokensession' => 'Session expired, please login again'));
			redirect('user/login');
		}


		$this->load->model("SearchHistory_model");
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;		
		$data["successFlash"] = "";
		$data["infoFlash"] = "";
		$data["errorFlash"] = "";
		$data["errorMessage"] = "";
		$response = $this->SearchHistory_model->findById($this->input->post('page'));
		$responseX = json_decode($response[0]->outputdata);
		$data['report'] = $responseX->report;
		$data['personaldetails']['details'] = $responseX->personaldetails;
		$data['blackListed']=$responseX->blackListed;
		$this->session->set_userdata(array('report_download'=>$responseX));
		$data["content"] = "searchhistory/customerdatalist.php";
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
			$data['report'] = $this->session->userdata('report_download');
			$this->load->library('pdf');
			$html = $this->load->view('searchhistory/pdf-trace-report',$data, true);
			$this->pdf->createPDF($html, "history-tracereport-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}
	}	
	
	public function downloadidreportind(){
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
			$responseX = $this->session->userdata('report_download');
			$data['familyData'] = $responseX->familyData;
			$data['directorship'] = $responseX->directorship;
			$data['report'] = $responseX->report;
		
			$this->load->library('pdf');
			$html = $this->load->view('searchhistory/pdf-indigent-report',$data, true);
			$this->pdf->createPDF($html, "history-indigent-report-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}
	}
	
	
	public function downloadidreportproc(){
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
			$responseX = $this->session->userdata('report_download');
			$data['report'] = $responseX->report;
			$data['personaldetails']['details'] = $responseX->personaldetails;
			$data['blackListed']=$responseX->blackListed;
			$this->load->library('pdf');
			$html = $this->load->view('searchhistory/pdf-procurementreport',$data, true);
			$this->pdf->createPDF($html, "history-procurement-report-".time(), true);

		}catch(Exception $ex){
			print_r($ex);
		}
	}
}
