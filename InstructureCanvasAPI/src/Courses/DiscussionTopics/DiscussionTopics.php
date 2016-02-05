<?PHP

	namespace InstructureCanvasAPI\Courses\DiscussionTopics;

	class DiscussionTopics extends \InstructureCanvasAPI\Courses\Courses{
		
		public function getDiscussionTopics(){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/discussion_topics");
			return $data;
		}	

		public function getDiscussionTopic($topicID){
			$data = $this->API->get("/api/v1/courses/" . $this->courseID . "/discussion_topics/" . $topicID);
			return $data;
		}		
	
	}