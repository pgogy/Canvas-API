<?PHP		

	namespace InstructureCanvasAPI\Courses\Files;

	class Files extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getFiles(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/files");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}	

		public function getFile($fileID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/files/" . $fileID);
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}