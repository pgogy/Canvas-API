<?PHP

	namespace InstructureCanvasAPI\Courses\PreviewHTML;

	class PreviewHTML extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getPreviewHTML(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/preview_html");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}