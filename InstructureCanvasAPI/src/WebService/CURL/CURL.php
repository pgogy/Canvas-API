<?PHP

	namespace InstructureCanvasAPI\WebService\CURL;

	class CURL extends \InstructureCanvasAPI\WebService\WebService{
	
		public function get($url){
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $this->config->site . $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
			
			$headr = array();
			$headr[] = 'Content-length: 0';
			$headr[] = 'Authorization: Bearer ' . $this->config->token;
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			
			$data = new \StdClass();
			$data->error = curl_errno($ch);
			$data->content = json_decode(curl_exec($ch));
			
			return $data;
		
		}
		
	}