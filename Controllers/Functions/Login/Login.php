<?php
session_start();

require_once '../../../Models/config.php';
require_once '../Functions.php';



$email =  $_POST['email'];
$password = $_POST['password'];


$req="select * from users where email = '{$email}'";
$res=mysqli_query($connection,$req);
while($u=mysqli_fetch_assoc($res)){
    $_SESSION['pass']=$u['password'];
    $_SESSION['auth']=$u['auth'];
    $_SESSION['iduser']=$u['id'];
    $_SESSION['username']=$u['username'];
    $_SESSION['balance']=$u['balance'];
}


pure__string__login($connection, $email, $password);
if (empty__string__login($email, $password)) {
    if (login__def($connection, $email, $password)) {
        if($_SESSION['auth']==1){
            $_SESSION['name']=strtoupper($_SESSION['username']);
            $_SESSION['email']=$email;
            if (role($connection,$email) == 'admin'){
                header("location:http://codata-admin.com/");
                $_SESSION['role']="admin";
            } 
            elseif(role($connection,$email) == 'user') {
                header("location:http://codata-admin.com/Home");
                $_SESSION['role']="user";
            }
        }
        else{
            header("location:http://codata-admin.com/login.php?error=En attente d'autorisation,merci pour votre patience");
        }
       
    } else {
        header("location:http://codata-admin.com/login.php?error=errordata");
    }
} else {
    header("location:http://codata-admin.com/login.php?error=required_field");
}