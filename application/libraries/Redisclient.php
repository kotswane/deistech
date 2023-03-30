<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class redisclient {
		
	   private $client;
	   private $url;
	   
	   function __construct() {
		   $this->url = "http://ec2-13-244-253-167.af-south-1.compute.amazonaws.com:5000/index.php/api/";
	   }
	   
	   public function generate($data) {
		 $postdata = json_encode(array("username"=>$data["id"],"site" => "deistech qa"));
		 $ch = curl_init();
		 curl_setopt($ch, CURLOPT_URL, $this->url."generate"); 
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt( $ch, CURLOPT_POSTFIELDS, $postdata);
		 curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));		 
		 $output = curl_exec($ch); 
		 curl_close($ch);      
		 $status= json_decode($output);		
 
		 return $status;
	   }
	   
	   public function request($data){
		 $postdata = json_encode(array("username"=>$data["id"],"site" => "deistech qa"));
		 $ch = curl_init(); 
		 curl_setopt($ch, CURLOPT_URL, $this->url."request"); 
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt( $ch, CURLOPT_POSTFIELDS, $postdata);
		 curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));		 
		 $output = curl_exec($ch); 
		 curl_close($ch);      
		 $status= json_decode($output);		 
		 return $status;
	   }
	   
	   
	   public function remove($data){
		 $postdata = json_encode(array("username"=>$data["id"],"site" => "deistech qa"));
		 $ch = curl_init(); 
		 curl_setopt($ch, CURLOPT_URL, $this->url."remove"); 
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		 curl_setopt( $ch, CURLOPT_POSTFIELDS, $postdata);
		 curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));		 
		 $output = curl_exec($ch); 
		 curl_close($ch);      
		 $status= json_decode($output);		 
		 return $status;
	   }
	   
	   
	}
?>