<?PHP

	namespace InstructureCanvasAPI\Courses\ActivityStreams;

	class ActivityStreams extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getActivityStream(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/activity_stream");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}

		public function getActivityStreamSummary(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/activity_stream/summary");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}			
	
	}