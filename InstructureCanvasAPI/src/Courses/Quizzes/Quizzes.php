<?PHP

	namespace InstructureCanvasAPI\Courses\Quizzes;

	class Quizzes extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getQuizzes(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/quizzes");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}	

		public function getQuizQuestions($quizID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/quizzes/" . $quizID . "/questions");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}