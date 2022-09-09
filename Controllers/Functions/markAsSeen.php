<?php 


require_once '../../Models/config.php';

if(isset($_POST['idMessage'])){
    $req="UPDATE messages set seen=true where id='".$_POST['idMessage']."'";
    $res=mysqli_query($connection,$req);

    header("Location:http://codata-admin.com/message");
}