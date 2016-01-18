<?PHP

	namespace InstructureCanvasAPI\Courses\ToDo;

	class ToDo extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getToDo(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/ToDo");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}