<?php 

    require_once '../../../Models/config.php';

    if(isset($_POST['username'])){
        $req="update codes set title='".$_POST['title']."',username='".$_POST['username']."',password='".$_POST['password']."',prix=".$_POST['prix'].",durée='".$_POST['duree']."' where id=".$_POST['id']."";
        $res=mysqli_query($connection,$req);
        if($res){
            header("Location:http://codata-admin.com/codes?succes=true");
        }
        else{
            header("Location:http://codata-admin.com/codes?error=true");
        }
    }