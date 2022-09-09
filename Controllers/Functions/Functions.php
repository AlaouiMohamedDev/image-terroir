<?php

function pure__string__login($connection, $email, $password)
{
    $email    = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    stripslashes($email);
    stripslashes($password);
}


function empty__string__login($email, $password)
{
    if (!empty($email) && !empty($password)) {
        return true;
    } else {
        return false;
    }
}


function login__def($connection, $email, $password)
{
    
    $sql =  mysqli_query($connection, "SELECT * from users where email = '{$email}'");

    while($ps=mysqli_fetch_assoc($sql)){

        $verify = password_verify($password, $ps['password']);

        if($verify){
            return true;
        }
        else{
            return false;
        }
    }

    return false;

}

function role($connection,$email)
{
    $sql = "SELECT role from users where email = '{$email}'";

    $result = mysqli_query($connection, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        return $r = $row['role'];
    }
}

function email__exist($connection, $column, $table, $email)
{
    $sql = mysqli_query($connection, "SELECT $column from $table WHERE $column = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        return true;
    } else {
        return false;
    }
}

function sign_up($connection, $email, $password, $username)
{
    $password=password_hash($password, PASSWORD_DEFAULT);
    $req="insert into users (username,email,password) values('".$username."','".$email."','".$password."')";
     
    if (mysqli_query($connection, $req)) {
        return true;
    } else {
        return false;
    }
    
}