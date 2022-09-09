<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods");


$data = json_decode(file_get_contents("php://input"), true); // collect input parameters and convert into readable format

$deleteName =$_GET['image'];
$pattern = '/ /';
$deleteName= preg_replace($pattern, '+', $deleteName);

$folder=$_GET['folder'];

$fullpath="terroir/".$folder."/".$deleteName;

$upload_path="terroir/".$folder."/";
$fileName  =  $_FILES['Upload']['name'];
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$tempPath  =  $_FILES['Upload']['tmp_name'];
$fileSize  =  $_FILES['Upload']['size'];
$fileNamewithDate=date(DATE_ATOM, mktime())."-".$folder.".".$ext;	






if(empty($fileName))
{
	$errorMSG = json_encode(array("message" => "please select image", "status" => false));	
	echo $errorMSG;
}
else
{
	
	
	$fileExt = strtolower(pathinfo($fileName,PATHINFO_EXTENSION)); // get image extension
		
	// valid image extensions
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp','jfif'); 
					
	// allow valid image file formats
	if(in_array($fileExt, $valid_extensions))
	{
        if (!unlink($fullpath)) {
            $errorMSG = json_encode(array("message" => "image not deleted","fullpath" => $fullpath, "status" => false));	
            echo $errorMSG;
        }else{
            move_uploaded_file($tempPath, $upload_path .$fileNamewithDate); // move file from system temporary path to our upload folder path 
        }
	}
	else
	{		
		$errorMSG = json_encode(array("message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed", "status" => false));	
		echo $errorMSG;		
	}
}
		
// if no error caused, continue ....
if(!isset($errorMSG))
{
	echo json_encode(array("message" => "Image Uploaded Successfully", "status" => true,"image"=>$fileNamewithDate,"uploadPath"=>$upload_path));	
}

?>