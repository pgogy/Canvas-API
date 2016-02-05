<?PHP

	namespace InstructureCanvasAPI\Courses\FrontPage;

	class FrontPage extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getFrontPage(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/front_page");
			return $data;
		}		
	
	}