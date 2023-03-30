<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class mysoapclient {
		
	   private $client;
	   private $latestClient;
	   function __construct() {
		   $options = array(
				'uri'=>'http://schemas.xmlsoap.org/soap/envelope/',
				'style'=>SOAP_RPC,
				'use'=>SOAP_ENCODED,
				'soap_version'=>SOAP_1_1,
				'cache_wsdl'=>WSDL_CACHE_MEMORY,
				'connection_timeout'=>15,
				'trace'=>true,
				'encoding'=>'UTF-8',
				'exceptions'=>true,
			);
		
			#$wsdl = "https://www.web.xds.co.za/xdsconnect/XDSConnectWS.asmx?wsdl";
			$wsdl = "https://www.uat.xds.co.za/xdsconnect/XDSConnectWS.asmx?wsdl";
			#$wsdl = base_url()."wsdl/XDSConnectWS.wsdl";
		
			try{
				$this->client = new SoapClient($wsdl, $options);
				#$this->latestClient = new SoapClient($wsdl3,$options);
			}catch(Exception $ex){
				print_r($ex->getMessage());
			}
			
	   }
	   
	   public function getClient(){
		   return $this->client;
	   }
	   
	   public function getClientlatest(){
		   return $this->latestClient;
	   }
	   
	}
?>