<?PHP

	namespace InstructureCanvasAPI\Courses\Modules;

	class Modules extends \InstructureCanvasAPI\Courses\Courses{
	
		public function getModules(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules");
			return $data;
		}	

		public function getModule($moduleID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules/" . $moduleID);
			return $data;
		}

		public function getModuleItems($moduleID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules/" . $moduleID . "/items");
			return $data;
		}

		public function getModuleItem($moduleID,$itemID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules/" . $moduleID . "/items/" . $itemID . "?include[]=content_details");
			return $data;
		}		
	
	}