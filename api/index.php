<?php
phpinfo();

if (isset($_GET['url'])) {
    // 使用 URL 参数
    $uParam =$_GET['url'];
    echo "URL parameter: " . $uParam;
}


function apijm($url){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'GET',
	));
	
	$response = curl_exec($curl);
	curl_close($curl);
	return json(json_decode($response, true));
}