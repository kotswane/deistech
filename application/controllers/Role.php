<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

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
		$this->load->model("Role_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	}
	 
	
	public function create(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	

		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'role','create');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		
		$data['errorMessage'] = "";
		$data['roleList'] = array();
		$data['roleList'] = $this->Role_model->get();
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		
		$this->form_validation->set_rules('rolename', 'Role', 'required');
		
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
				$data["content"]="role/create";
				$this->load->view('site',$data);
			} else {
			
				$roleData = array("name"=>$this->input->post('rolename'));
				
				$createResponse = $this->Role_model->create($roleData);
				if($createResponse){
					$data['errorMessage'] = "Role successfully created";
					$data["content"]="role/create";
					$this->load->view('site',$data);	
				}else{
					$data['errorMessage'] = "Role already exist"; 
					$data["content"]="role/create";
					$this->load->view('site',$data);	
				}
			}
		} else {
			$data["content"]="role/create";
			$this->load->view('site',$data);	
		}	
	}
	
	public function update(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$response = $this->Role_model->getByName($this->input->post('str'));
		if($response > 0){
			print "error";
		}else{
			$response = $this->Role_model->update($this->input->post('str'),$this->input->post('id'));
			if($response){
				print "success";
			}else{
				print "error";
			}
		}
		
	}
	
	public function getbyid(){
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		$response = $this->Role_model->getById($this->input->post('id'));
		if(count($response)==0){
			print "error";
		}else{
			print '<input type="text" class="form-control" id="role_name" name="role_name" value="'.$response[0]->name.'" />';
		}
	}
}
