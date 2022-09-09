<?php
require_once '../../../Models/config.php';
require_once '../Functions.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];




if (email__exist($connection, 'email', 'users', $email) == true) {
    header("location:http://codata-admin.com/register?error=" . $email . '_' . 'already_used');
} 
else 
{
    if (sign_up($connection, $email, $password, $username) == true) {
        header("location:http://codata-admin.com/login");
    } else {
        header("location:http://codata-admin.com/register?error=datanotinsertes");
        
    }
    
}
