<?PHP

	namespace InstructureCanvasAPI\Courses\Calendar;

	class Calendar extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getCalendar(){
			$data = $this->API->get("/api/v1/calendar_events");
			return $data;
		}
	
	}