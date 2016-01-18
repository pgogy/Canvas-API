<?PHP

	namespace InstructureCanvasAPI\Courses\Sections;

	class Sections extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getSections(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/sections");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}