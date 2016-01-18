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
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}
		
		public function getCoursesForThisUserWithSyllabus(){
			$data = $this->API->get("/api/v1/courses?include[]=syllabus_body");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}
	
	}