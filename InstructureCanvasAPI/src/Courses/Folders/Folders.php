<?PHP

	namespace InstructureCanvasAPI\Courses\Folders;

	class Folders extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getFolders(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/folders");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}