<?PHP

	namespace InstructureCanvasAPI\Courses\Pages;

	class Pages extends \InstructureCanvasAPI\Courses\Courses{
	
		public function getPages(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/pages");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}	

		public function getPage($pageURL){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/pages/" . $pageURL);
			return $data;
		}		
	
	}