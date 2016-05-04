<?PHP

	namespace InstructureCanvasAPI\Courses\Pages;

	class Pages extends \InstructureCanvasAPI\Courses\Courses{
	
		public function getPages(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/pages?per_page=100");
			return $data;
		}	

		public function getPage($pageURL){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/pages/" . $pageURL);
			return $data;
		}	

		public function deletePage($pageURL){
			$data = $this->API->send("/api/v1/courses/" . $this->courseID . "/pages/" . $pageURL, "DELETE");
			return $data;
		}

		public function setPage($pageURL, $content){
			$data = $this->API->send("/api/v1/courses/" . $this->courseID . "/pages/" . $pageURL, "PUT", $content);
			return $data;
		}

		public function updatePage($title, $content){
			$data = $this->API->send("/api/v1/courses/" . $this->courseID . "/pages/" . preg_replace("/[^A-Za-z0-9]/","-",str_replace(" ","-",$title)), "PUT", $content);
			return $data;
		}	

		public function alterPage($title, $content){
			$data = $this->API->send("/api/v1/courses/" . $this->courseID . "/pages/" . preg_replace("/[^A-Za-z0-9]/","-",str_replace(" ","-",$title)), "PUT", $content);
			return $data;
		}		

		public function createPage($title,$content){
			$data = $this->API->send("/api/v1/courses/" . $this->courseID . "/pages/" . preg_replace("/[^A-Za-z0-9]/","-",str_replace(" ","-",$title)), "PUT", $content);
			return $data;
		}		
	
	}