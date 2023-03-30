<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class CheckPermission {
		
		private $response;
		
		function __construct() {
			
			$this->response = new stdClass;
			$this->response->hasAccessToController = false;
			$this->response->hasAccessToFunction = false;
		}
	   
	   public function hasAccess($menuList,$subMenuList,$controller,$function="") {


		    foreach($menuList as $menu){
				
				if(($controller == "user") && ($function == "login" || $function == "logout")){
					$this->response->hasAccessToController = true;
					$this->response->hasAccessToFunction = true;
					return $this->response;		
				}
				
				if(($controller == "dashboard") || ($controller == "disclaimer")){
					$this->response->hasAccessToController = true;
					$this->response->hasAccessToFunction = true;
					return $this->response;		
				}
				
			   if($menu->report_link == $controller){ 
				   $this->response->hasAccessToController = true;
				   foreach($subMenuList as $submenu){
					   if($submenu->report_type_link == $function){
						   $this->response->hasAccessToFunction = true;
					   }
				   }
			   }
		    }
		
			return $this->response;
		
	   }
	   
	   
	   
	}
?>