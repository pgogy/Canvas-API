<?PHP		

	namespace InstructureCanvasAPI\Courses\Files;

	class Files extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getFiles(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/files?per_page=1000");
			return $data;
		}

		public function requestUpload($parameters){
			$data = $this->API->send("/api/v1/courses/" . $this->courseID . "/files", "POST", $parameters);
			return $data;
		}

		public function upload($url,$parameters,$files){
			$new_parameters = array();
			foreach($parameters as $name => $value){
				$new_parameters[$name] = $value;
			}
			$data = $this->API->sendFile($url, "POST", $new_parameters, $files);
			return $data;
		}	
		
		public function confirm($url){
			$data = $this->API->confirmFile($url);
			return $data;
		}	

		public function getFile($fileID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/files/" . $fileID);
			return $data;
		}		
	
	}