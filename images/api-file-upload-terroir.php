<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods");



$data = json_decode(file_get_contents("php://input"), true); // collect input parameters and convert into readable format
$fileName=$_GET['name'];
if(isset($_FILES['ProductUpload']))
{
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $tempPath  =  $_FILES['ProductUpload']['tmp_name'];
    $fileSize  =  $_FILES['ProductUpload']['size'];
    $upload_path = 'terroir/products/'; // set upload folder path 
}
else if(isset($_FILES['CategoryUpload'])){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $tempPath  =  $_FILES['CategoryUpload']['tmp_name'];
    $fileSize  =  $_FILES['CategoryUpload']['size'];
    $upload_path = 'terroir/categories/'; // set upload folder path 
}
else if(isset($_FILES['CoopUpload'])){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $tempPath  =  $_FILES['CoopUpload']['tmp_name'];
    $fileSize  =  $_FILES['CoopUpload']['size'];
    $upload_path = 'terroir/cooperatives/'; // set upload folder path 
}
else if(isset($_FILES['UserUpload'])){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $tempPath  =  $_FILES['UserUpload']['tmp_name'];
    $fileSize  =  $_FILES['UserUpload']['size'];
    $upload_path = 'terroir/users/'; // set upload folder path 
}




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
		//check file not exist our upload folder path
		if(!file_exists($upload_path . $fileName))
		{
			// check file size '5MB'
			// if($fileSize < 5000000){
				move_uploaded_file($tempPath, $upload_path .$fileName); // move file from system temporary path to our upload folder path 
			// }
			// else{		
			// 	$errorMSG = json_encode(array("message" => "Sorry, your file is too large, please upload 5 MB size", "status" => false));	
			// 	echo $errorMSG;
			// }
		}
		else
		{		
			$errorMSG = json_encode(array("message" => "هImage already exist", "status" => false));	
			echo $errorMSG;
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
	echo json_encode(array("message" => "Image Uploaded Successfully", "status" => true,"image"=>$fileName,"uploadPath"=>$upload_path));	
}

?>