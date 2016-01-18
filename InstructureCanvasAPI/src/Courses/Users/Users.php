<?PHP

	namespace InstructureCanvasAPI\Courses\Users;

	class Users extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getUsers(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/users");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}