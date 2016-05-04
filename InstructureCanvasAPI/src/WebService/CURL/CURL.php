<?PHP

	namespace InstructureCanvasAPI\WebService\CURL;

	class CURL extends \InstructureCanvasAPI\WebService\WebService{
	
		public function get($url){
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_URL, $this->config->site . $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
			
			$headr = array();
			$headr[] = 'Content-length: 0';
			$headr[] = 'Authorization: Bearer ' . $this->config->token;
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			
			$data = new \StdClass();
			if(isset($data->content['errors'])){
				$data->error_message = $data->content['errors'];
				$data->error_report_id = $data->content['error_report_id'];
			}else{
				$response = curl_exec($ch);
				$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
				$header = substr($response, 0, $header_size);
				$body = substr($response, $header_size);
				$data->content = json_decode($body);
				$data->header = $header;
			}
			$curl_data = curl_getinfo($ch);
			$data->http_code = $curl_data['http_code'];
			$data->error_curl = curl_errno($ch);
		
			return $data;
		
		}
		
		
		public function curl_custom_postfields($ch, array $assoc = array(), array $files = array()) {
		
			static $disallow = array("\0", "\"", "\r", "\n");
			
			foreach ($assoc as $k => $v) {
				$k = str_replace($disallow, "_", $k);
				$body[] = implode("\r\n", array(
					"Content-Disposition: form-data; name=\"{$k}\"",
					"",
					filter_var($v), 
				));
			}
			
			foreach ($files as $k => $v) {
				switch (true) {
					case false === $v = realpath(filter_var($v)):
					case !is_file($v):
					case !is_readable($v):
						continue; // or return false, throw new InvalidArgumentException
				}
				$data = file_get_contents(str_replace("\\","/",$v));
				if(file_get_contents(str_replace("\\","/",$v))){
					$data = file_get_contents(str_replace("\\","/",$v));
				}
				$body[] = implode("\r\n", array(
					"Content-Disposition: form-data; name=\"{$k}\"",
					"Content-Type: application/octet-stream",
					"",
					$data, 
				));
			}
			
			do {
				$boundary = "---------------------" . md5(mt_rand() . microtime());
			} while (preg_grep("/{$boundary}/", $body));
			
			array_walk($body, function (&$part) use ($boundary) {
				$part = "--{$boundary}\r\n{$part}";
			});
			
			$body[] = "--{$boundary}--";
			$body[] = "";
			
			curl_setopt_array($ch, array(
				CURLOPT_POST       => true,
				CURLOPT_POSTFIELDS => implode("\r\n", $body),
				CURLOPT_HTTPHEADER => array(
					"Expect: 100-continue",
					"Content-Type: multipart/form-data; boundary={$boundary}", // change Content-Type
				),
			));
		}
		
		public function sendFile($url, $type, $parameters = array(), $files = array()){
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $url);
			
			$this->curl_custom_postfields($ch, $parameters, $files);
	
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			
			$data = new \StdClass();
			if(isset($data->content['errors'])){
				$data->error_message = $data->content['errors'];
				$data->error_report_id = $data->content['error_report_id'];
			}else{
				$data->content = curl_exec($ch);
			}
			
			$curl_data = curl_getinfo($ch);
			$data->http_code = $curl_data['http_code'];
			$data->error_curl = curl_errno($ch);
			
			$headerSent = curl_getinfo($ch, CURLINFO_HEADER_OUT );
			
			if(substr($data->http_code,0,1)==3){
				$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
				$data->header = substr($data->content, 0, $header_size);
				$data->body = substr($data->content, $header_size);
			}
			
			return $data;
			
		}
		
		public function confirmFile($url){
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,"");
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
			
			$header = array();
			$header[] = 'Authorization: Bearer ' . $this->config->token;
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						
			$data = new \StdClass();
			if(isset($data->content['errors'])){
				$data->error_message = $data->content['errors'];
				$data->error_report_id = $data->content['error_report_id'];
			}else{
				$data->content = json_decode(curl_exec($ch));
			}
			$curl_data = curl_getinfo($ch);
			$data->http_code = $curl_data['http_code'];
			$data->error_curl = curl_errno($ch);
			
			return $data;
			
		}
		
		public function send($url, $type, $parameters = array()){
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $this->config->site . $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
			curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($parameters));
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
			
			$header = array();
			$header[] = 'Authorization: Bearer ' . $this->config->token;
			
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						
			$data = new \StdClass();
			if(isset($data->content['errors'])){
				$data->error_message = $data->content['errors'];
				$data->error_report_id = $data->content['error_report_id'];
			}else{
				$data->content = json_decode(curl_exec($ch));
			}
			$curl_data = curl_getinfo($ch);
			$data->http_code = $curl_data['http_code'];
			$data->error_curl = curl_errno($ch);
			
			return $data;
			
		}
		
	}