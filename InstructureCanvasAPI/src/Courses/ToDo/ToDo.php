<?PHP

	namespace InstructureCanvasAPI\Courses\ToDo;

	class ToDo extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getToDo(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/ToDo");
			return $data;
		}		
	
	}