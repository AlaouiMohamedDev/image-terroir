<?php 
session_start();
require_once '../../../Models/config.php';

    $username = $_POST["username"];
    $em=$_SESSION["email"];
    $newPass = password_hash($_POST["newpass"], PASSWORD_DEFAULT);
    $pass=$_POST["password"];
    $getpass=$_SESSION['pass'];
    $verify = password_verify($pass, $getpass);

    $req="";
    
   if( $_SESSION['role']!="user"){
       session_destroy();
       header("Location:http://codata-admin.com/login");
   }else{
       if(!$verify){
            $arrP=array('status'=>false);
            echo json_encode($arrP);
       }
       elseif($_POST['newpass']!=""){
        $req="UPDATE users SET username='{$username}',password='{$newPass}' where email='{$em}'";
        }    
       elseif(isset($_POST['username'])){
            $req="UPDATE users SET username='{$username}' where email='{$em}'";
       }
   }

   if($req!=""){
       $res=mysqli_query($connection,$req);
        if($res){
            $_SESSION['name']=$username;

            $arrE=array('status'=>true);
            echo json_encode($arrE);
        }
        else{
            $arrS=array('status'=>false);
            echo json_encode($arrS);
        }
   }

