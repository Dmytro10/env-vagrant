<?php

if($_GET['paramc'] == 'w0A7QOD05O50PTR01KQVQGMM') die();
$ip_list = array(
	'89.191.218.121',
	'128.0.173.153',
	'212.40.113.23',
	'213.57.73.118',
	'89.43.18.26',
	'192.168.25.1',
);

if (isset($_SERVER['HTTP_INCAP_CLIENT_IP'])) {
	$user_ip = $_SERVER['HTTP_INCAP_CLIENT_IP'];
} else {
	$user_ip = $_SERVER['REMOTE_ADDR'];
}

if (!in_array($user_ip,$ip_list) && (
		stripos($_SERVER['REQUEST_URI'],'wp-admin') !==false ||
		stripos($_SERVER['REQUEST_URI'],'wp-login') !==false
	)) {
	header('HTTP/1.0 400 Bad Request');
	echo('Bad request');
	die();
}

// ip check and handle uploaded documents
if (in_array($user_ip,$ip_list) && (
		stripos($_SERVER['REQUEST_URI'],'/customer-uploads/') === 0
	)) {
	$url = str_replace('customer-uploads','uploads',$_SERVER['REQUEST_URI']);
	header('Location: '.$url);
	die();
}
if (in_array($user_ip,$ip_list) && (
		stripos($_SERVER['REQUEST_URI'],'/uploads/') === 0
	)) {
	$real_file = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'];
	$real_file = explode('?',$real_file);
	$real_file = $real_file[0];
	$real_file = urldecode(str_replace('uploads','customer-uploads',$real_file));
	// var_dump($real_file);

	if (file_exists($real_file)) {
		$headers = array(
			'png'  => 'Content-Type: image/png',
			'gif'  => 'Content-Type: image/gif',
			'jpg'  => 'Content-Type: image/jpeg',
			'jpeg'  => 'Content-Type: image/jpeg',
			'doc'  => 'Content-Type: application/octet-stream',
			'docx' => 'Content-Type: application/octet-stream',
			'pdf'  => 'Content-Type: application/pdf',
		);
		$file_arr = explode('.',$real_file);
		$file_type = $file_arr[count($file_arr)-1];
		$content = file_get_contents($real_file);
		header("HTTP/1.1 200 OK");
		header($headers[strtolower($file_type)]);
		echo($content);
	}
	die();
}

?>