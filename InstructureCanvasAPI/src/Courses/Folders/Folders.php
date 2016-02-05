<?PHP

	namespace InstructureCanvasAPI\Courses\Folders;

	class Folders extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getFolders(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/folders");
			return $data;
		}		
	
	}