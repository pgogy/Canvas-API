<?PHP

namespace InstructureCanvasAPI;

class InstructureCanvasAPI{
	
	public $site;
	public $token;
	public $webService;
	
	public function __construct($data){
		if(is_array($data)){
			foreach($data as $key => $value){
				switch($key){
					case "site": $this->setSite($value); break;
					case "token": $this->setToken($value); break;
					case "webService": $this->setWebService($value); break;
				}
			}
		}
	}
	
	public function setSite($site){
		$this->site = $site;
	}

	public function getSite(){
		return $this->site;
	}
		
	public function setToken($token){
		$this->token = $token;
	}
		
	public function getToken(){
		return $this->token;
	}
		
	public function setWebService($service){
		$this->webService = $service;
	}
		
	public function getWebService(){
		return $this->webService;
	}
	
	public function get(){
		
	}
	
}