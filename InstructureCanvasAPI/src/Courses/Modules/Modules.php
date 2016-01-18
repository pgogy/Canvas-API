<?PHP

	namespace InstructureCanvasAPI\Courses\Modules;

	class Modules extends \InstructureCanvasAPI\Courses\Courses{
	
		public function getModules(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}	

		public function getModule($moduleID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules/" . $moduleID);
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}

		public function getModuleItems($moduleID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules/" . $moduleID . "/items");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}

		public function getModuleItem($moduleID,$itemID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/modules/" . $moduleID . "/items/" . $itemID . "?include[]=content_details");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}