<?php
	
	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods");

    $entityBody = file_get_contents('php://input');
    $res = json_decode($entityBody,TRUE);
	$path = $res['path'];
	$fileName =$res['image'];
	$fullpath=$path."/".$fileName;

	if(empty($fileName)){
		$errorMSG = json_encode(array("message" => "image not set", "status" => false));	
		echo $errorMSG;
	}
	else if(empty($path)){
		$errorMSG = json_encode(array("message" => "path not set", "status" => false));	
		echo $errorMSG;
	}
	else{
			if (!unlink($fullpath)) {
			    $errorMSG = json_encode(array("message" => "image not deleted", "status" => false));	
				echo $errorMSG;
			}
	}

	// if no error caused, continue ....
	if(!isset($errorMSG))
	{
		echo json_encode(array("message" => "Image Deleted Successfully", "status" => true));	
	}

?>