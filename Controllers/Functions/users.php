<?php 


function UnAuthorised(){
    
    require './Models/config.php';
    $req="select * from users where auth=false order by created_at desc";
    $res=mysqli_query($connection, $req);
    $data_array = array();
    while ($data = mysqli_fetch_assoc($res)) {
        $data_array[] = $data;
    }
    return  $data_array;
}
function Authorised(){
    
    require './Models/config.php';
    $req="select * from users where auth=true order by created_at desc";
    $res=mysqli_query($connection, $req);
    $data_array = array();
    while ($data = mysqli_fetch_assoc($res)) {
        $data_array[] = $data;
    }
    return  $data_array;
}





function CountUsersUnAuthorised(){
    $auth=count(UnAuthorised());
    return $auth;
}