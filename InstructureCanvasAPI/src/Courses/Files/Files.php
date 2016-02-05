<?PHP		

	namespace InstructureCanvasAPI\Courses\Files;

	class Files extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getFiles(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/files");
			return $data;
		}	

		public function getFile($fileID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/files/" . $fileID);
			return $data;
		}		
	
	}