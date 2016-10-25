<?PHP

	namespace InstructureCanvasAPI\Courses;

	class Courses{
	
		public $API;
		public $courseID;
		
		public function setAPI($API){
			$this->API = $API;
		}
		
		public function setCourseID($courseID){
			$this->courseID = $courseID;
		}
		
		public function getCoursesForThisUser(){
			$data = $this->API->get("/api/v1/courses/");
			if(!isset($data->content->errors)){
				return $data;
			}
			else
			{
				return array(false, $data->content->errors[0]->message);
			}
		}
		
		public function getCoursesForThisUserWithSyllabus(){
			$data = $this->API->get("/api/v1/courses?include[]=syllabus_body");
			return $data;
		}
	
	}