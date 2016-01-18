<?PHP

	namespace InstructureCanvasAPI\Users;

	class Users{
	
		public $API;
		public $courseID;
		
		public function setAPI($API){
			$this->API = $API;
		}
		
		public function getUsersForAccount($accountID){
			$data = $this->API->get("/api/v1/accounts/" . $accountID);
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}
	
	}