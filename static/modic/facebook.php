<?php
ob_start();

// SET YOUR FACEBOOK API DETAILS HERE
$app_id 	= '910743075691045';
$app_secret = 'cc6d52180f0a8785b361c5f1f522c6cb';

// DO NOT EDIT BELOW THIS LINE
error_reporting(E_ALL ^ E_NOTICE);

$page_id = isset($_GET['id']) ? $_GET['id'] : '';
$limit = isset($_GET['limit']) ? $_GET['limit'] : 20;

require_once('facebook/facebook.php');

$facebook = new FacebookV2(array(
  'appId'  => $app_id,
  'secret' => $app_secret,
));

$response = $facebook->api('/'.$page_id.'/posts', 'get', array('limit' => $limit));
$pagefeed = $response['data'];
$count = 0;
$json_decoded = array();

$json_decoded['responseData']['feed']['link'] = "";
if(is_array($pagefeed)) {
	foreach($pagefeed as $data)
	{
		
		$message = isset($data['message']) ? $data['message'] : '';
		$link = isset($data['link']) ? $data['link'] : '';
		$image = isset($data['picture']) ? $data['picture'] : '';
		
		if($message == '' || $link == '') {
			continue;
		}

		if(!isset($data['object_id'])) {
			$pic_id = explode("_", $image);	
			if(isset($pic_id[1])){
				$data['object_id'] = $pic_id[1];
			}
		}
		
		if(isset($data['object_id'])){
			if(strpos($image, 'safe_image.php') === false && is_numeric($data['object_id'])) {
				$image = 'http://graph.facebook.com/'.$data['object_id'].'/picture?type=normal';
			}
		}
		
		$json_decoded['responseData']['feed']['entries'][$count]['link'] = $link;
		$json_decoded['responseData']['feed']['entries'][$count]['content'] = $message;
		$json_decoded['responseData']['feed']['entries'][$count]['thumb'] = $image;
		$json_decoded['responseData']['feed']['entries'][$count]['publishedDate'] = date("D, d M Y H:i:s O", strtotime($data['created_time']));
		$count++;
	}
}

header("Content-Type: application/json; charset=UTF-8");
echo json_encode($json_decoded);

ob_flush();
?>