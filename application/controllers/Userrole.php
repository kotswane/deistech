<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userrole extends CI_Controller {

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
		$this->load->model("User_model");
		$this->load->model("UserRole_model");
		$this->load->model("Role_model");
		$this->reports = $this->Report_model->list_reports();
		$this->reports_type = $this->Report_type_model->list_reports_type();	
	}
	 
	public function index()
	{
			$data['errorSession'] = "username and password required"; 
			$this->load->view('login',$data);
	}
	
	public function create(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}	
		
		if(!$this->session->userdata("isadmin")){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		
		$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'userrole','create');

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
		$data['userRoleList'] = $this->UserRole_model->getJoint();
		$data['userlist'] = $this->User_model->get();
		$data['rolelist'] = $this->Role_model->get();
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		
		$this->form_validation->set_rules('userid', 'userid', 'required');
		$this->form_validation->set_rules('roleid', 'roleid', 'required');
		
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
				$data["content"]="userrole/create";
				$this->load->view('site',$data);
			} else {
			
				$roleData = array("userid"=>$this->input->post('userid'),"roleid"=>$this->input->post('roleid'));
				
				$createResponse = $this->UserRole_model->create($roleData);
				if($createResponse > 0){
					$data['errorMessage'] = "User Role successfully created";
					$data["content"]="userrole/create";
					$this->load->view('site',$data);	
				}else{
					$data['errorMessage'] = "User Role already exist"; 
					$data["content"]="userrole/create";
					$this->load->view('site',$data);	
				}
			}
		} else {
			$data["content"]="userrole/create";
			$this->load->view('site',$data);	
		}	
	}
	
	public function update(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		
		if(!$this->session->userdata("isadmin")){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		/*$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'userrole','update');

		if($hasAccess->hasAccessToController === true && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}else if($hasAccess->hasAccessToController === false && $hasAccess->hasAccessToFunction === false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}*/
		
		
		$data['errorMessage'] = "";
		$data['userlist'] = $this->User_model->getById($this->input->post("userid"));
		$data["roleid"] = $this->input->post("roleid");
		$data['rolelist'] = $this->Role_model->get();
		$data["reports_type"] = $this->reports_type;
		$data["reports"] = $this->reports;
		
		$data["content"] = 'userrole/update';
		return $this->load->view('site',$data);
		
	}
	
	public function doupdate(){
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}		
		
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}		
		
		if(!$this->session->userdata("isadmin")){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		/*$hasAccess = $this->checkpermission->hasAccess($this->session->userdata('usermenu'),$this->session->userdata('submenu'),'user','update');

		if($hasAccess->hasAccessToController == true && $hasAccess->hasAccessToFunction == false){
			$data["content"] = 'permissions/access_denied';
			return $this->load->view('site',$data);
		}
		*/
		if(!$this->session->userdata('agreed_tc_and_c')){
			 redirect('user/logout');
		}
		
		$data['userlist'] = $this->User_model->getById($this->input->post("userid"));
		$data["roleid"] = $this->input->post("roleid");
		$data['rolelist'] = $this->Role_model->get();
		
		$this->form_validation->set_rules('roleid', 'Role name', 'required');
		
		if($this->form_validation->run() == FALSE){
			$data['errorMessage'] = 'Role name required';
			$data["content"]= "userrole/update";
			$this->load->view('site',$data);
		}else{
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
				$data["content"]= "userrole/update";
				$this->load->view('site',$data);
			}else {
				$updateData = array("roleid" => $this->input->post("roleid"));
				$isupdate = $this->UserRole_model->update($updateData,$this->input->post("userid"));
				$data["errorMessage"] = "Error updating user role";
				if($isupdate == 1){
					$data["errorMessage"] = "Successfully updated user role";
				}
				$data["content"]= "userrole/update";
				$this->load->view('site',$data);
			}
		}
	} 
	
	public function getbyid(){
		
		if(!$this->session->userdata('username')){
			 redirect('user/login');
		}
		
	}
}
