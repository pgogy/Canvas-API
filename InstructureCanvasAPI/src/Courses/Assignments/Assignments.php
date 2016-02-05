<?PHP

	namespace InstructureCanvasAPI\Courses\Assignments;

	class Assignments extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getAssignments(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/assignments");
			return $data;
		}	

		public function getAssignment($id){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/assignments/" . $id);
			return $data;
		}	
	
	}