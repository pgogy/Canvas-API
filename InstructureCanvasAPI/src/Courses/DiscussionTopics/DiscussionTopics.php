<?PHP

	namespace InstructureCanvasAPI\Courses\DiscussionTopics;

	class DiscussionTopics extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getDiscussionTopics(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/discussion_topics");
			echo "<pre>";
			print_r(json_decode($data));
			echo "</pre>";
		}		
	
	}