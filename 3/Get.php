<meta charset="utf-8">
<?php
	function GetRequest($url)
	{
			$ch = curl_init();
        	curl_setopt($ch, CURLOPT_URL, $url);
        	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        	$json_str = curl_exec($ch);
        	curl_close($ch);
        	$data = json_decode($json_str, true);
        	return $data['data'];
	}
	$url = "https://cnodejs.org/api/v1/topics";
	$arr = GetRequest($url);