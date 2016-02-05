<?PHP

	namespace InstructureCanvasAPI\Courses\ActivityStreams;

	class ActivityStreams extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getActivityStream(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/activity_stream");
			return $data;
		}

		public function getActivityStreamSummary(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/activity_stream/summary");
			return $data;
		}			
	
	}