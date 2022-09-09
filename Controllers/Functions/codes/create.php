<?php 

    require_once '../../../Models/config.php';

    if(isset($_POST['username'])){
        $req="insert into codes (title,username,password,prix,durée) values('".$_POST['title']."','".$_POST['username']."','".$_POST['password']."',".$_POST['prix'].",'".$_POST['duree']."')";
        $res=mysqli_query($connection,$req);
        if($res){
            header("Location:http://codata-admin.com/codes?succes=true");
        }
        else{
            header("Location:http://codata-admin.com/codes?error=true");
        }
    }