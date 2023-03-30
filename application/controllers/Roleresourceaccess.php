<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roleresourceaccess extends CI_Controller {

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
	 
	public function  __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}
		$this->load->model("RoleResource_model");
		$this->load->model("Role_model");
		$this->load->model("Report_model");
		$this->load->model("RoleResourceReportType_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	}
	 

	
	public function create(){
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'roleresourceaccess','create');
		
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
		
		$data['errorMessage'] = "";
		$data['roleResource'] = array();
		$data['roleResource'] = $this->RoleResourceReportType_model->get();
		$data['rolelist'] = $this->Role_model->get();
		$data['resourcelist'] = $this->Report_model->list_reports();
		$data['resourcelistaccess'] = $this->Report_model->list_reports();
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		


		$this->form_validation->set_rules('rolelist', 'rolelist', 'required');
		$this->form_validation->set_rules('resourcelist', 'resourcelist', 'required');
		$this->form_validation->set_rules('resourcelistaccess', 'Resource Access', 'required');
		
		if ($this->form_validation->run() != FALSE){	

			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
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
				$data["content"]="roleresourceaccess/create";
				$this->load->view('site',$data);
			} else {
			
				$roleData = array("roleid"=>$this->input->post('rolelist'),"reportid"=>$this->input->post('resourcelist'),"reporttypeid"=>$this->input->post('resourcelistaccess'));
				
				$createResponse = $this->RoleResourceReportType_model->create($roleData);

				if($createResponse){
					$data['errorMessage'] = "Role Resource Access successfully created";
					$data["content"]="roleresourceaccess/create";
					$this->load->view('site',$data);	
				}else{
					$data['errorMessage'] = "Role Resource Access already exist"; 
					$data["content"]="roleresourceaccess/create";
					$this->load->view('site',$data);	
				}
			}
		} else {
			
			$data["content"]="roleresourceaccess/create";
			$this->load->view('site',$data);	
		}	
	}
	
	public function remove(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}
		
		if($this->session->userdata("isadmin")){
			$deleteResponse = $this->RoleResourceReportType_model->remove($this->input->post("id"));
			if($deleteResponse == 1){
				print "Record successfully deleted.";
			}
			else {
				print "Error deleting a record.";
			}
		}else{
			print "Access denied";
		}
		
	}
	
	
	public function getbyreportid(){
		
		$response = $this->Role_model->getByReportId($this->input->post('id'));
		$list = '<select class="form-control" id="resourcelistaccess" name="resourcelistaccess" required >';
		$list .= '<option value="">Please Select Resource Access</option>';				
		foreach($response as $resp){
		$list .= "<option value='".$resp->report_type_id."'>".$resp->report_type_link."</option>";
		}
		echo $list."</select>";
	}
}
