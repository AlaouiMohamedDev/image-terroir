<?php 
session_start();
$iduser=$_SESSION['iduser'];

require_once '../../Models/config.php';

$subject=$_POST['subject'];
$message=$_POST['message'];

$req="insert into messages (IdUser,Message,subject,email) values('".$iduser."','".$message."','".$subject."','".$_SESSION['email']."')";
$res=mysqli_query($connection,$req);

if($res){
    header("Location:http://codata-admin.com/home#success=Message Envoyer");
}
else{
    header("Location:http://codata-admin.com/home#error=Message not Sent");
}