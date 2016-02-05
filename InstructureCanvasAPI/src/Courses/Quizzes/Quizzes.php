<?PHP

	namespace InstructureCanvasAPI\Courses\Quizzes;

	class Quizzes extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getQuizzes(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/quizzes");
			return $data;
		}

		public function getQuiz($quizID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/quizzes/" . $quizID);
			return $data;
		}	

		public function getQuizQuestions($quizID){
			echo "/api/v1/courses/" . $this->courseID . "/quizzes/" . $quizID . "/questions";
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/quizzes/" . $quizID . "/questions");
			return $data;
		}		
	
	}