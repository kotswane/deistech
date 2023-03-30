<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roleresource extends CI_Controller {

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
		$this->load->model("RoleResourceReportType_model");
		$this->load->model("Role_model");
		$this->load->model("Report_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	}

	
	public function create(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'roleresource','create');

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
		$data['roleResource'] = $this->RoleResource_model->get();
		$data['rolelist'] = $this->Role_model->get();
		$data['resourcelist'] = $this->Report_model->list_reports();
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		

		$this->form_validation->set_rules('rolelist', 'Role', 'required');
		$this->form_validation->set_rules('resourcelist', 'Resource', 'required');
		
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
				$data["content"]="roleresource/create";
				$this->load->view('site',$data);
			} else {
			
				$roleData = array("roleid"=>$this->input->post('rolelist'),"resourceid"=>$this->input->post('resourcelist'));
				
				$createResponse = $this->RoleResource_model->create($roleData);

				if($createResponse){
					$data['errorMessage'] = "Role Resource successfully created";
					$data["content"]="roleresource/create";
					$this->load->view('site',$data);	
				}else{
					$data['errorMessage'] = "Role Resource already exist"; 
					$data["content"]="roleresource/create";
					$this->load->view('site',$data);	
				}
			}
		} else {
			$data["content"]="roleresource/create";
			$this->load->view('site',$data);	
		}	
	}
	
	
	public function remove(){
		
		if($this->session->userdata("isadmin")){
			$inputpost = explode("|",$this->input->post("str"));
			$roleid = $inputpost[1];
			$resourceid = $inputpost[2];
			$id = $inputpost[0];
			$response = $this->RoleResourceReportType_model->getReportIdRoleId($roleid,$resourceid);
			if($response > 0){
				print "Cannot delete while there are Role Access Resources assign to this record";
			}else{
				$response = $this->RoleResource_model->remove($id);
				if($response > 0){
					print 1;
				}else{
					print "Error deleting a record";
				}
			}
		}else{
			print "Access denied";
		}
	}
}
