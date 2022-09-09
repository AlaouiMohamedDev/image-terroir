<?php 

    require_once '../../../Models/config.php';

    if(isset($_GET['id'])){
        $req="delete from codes where id=".$_GET['id'];
        $res=mysqli_query($connection,$req);

        if($res){
            header("Location:http://codata-admin.com/codes?succes=true");
        }

    }