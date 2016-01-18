<?PHP

	namespace InstructureCanvasAPI\Courses\Assignments;

	class Assignments extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getAssignments(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/assignments");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}