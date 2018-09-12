<?php
header("Content-Type:application/json");

if(!empty($_GET['info']))
{
	$info=$_GET['info'];

	if($info == "time"){
		date_default_timezone_set("Europe/London");
		$datetime=date("Y-m-d H:i:s");
		response(200,"valid request",$datetime);
	}
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);

	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;

	$json_response = json_encode($response);
	echo $json_response;
}
