<?php 
    session_start();
    $test=0;
    require_once '../../Models/config.php';
    $user="select * from users where id=".$_SESSION['iduser'];
    $balance=$_SESSION['balance'];

    
    if($balance>=$_POST["prix"]){
        $req="insert into purchasedcodes (IdCode,IdUser) values(".$_POST['id'].",".$_SESSION['iduser'].")";
        mysqli_query($connection,$req);
        $reqUpdate="update codes set purchased=true where id=".$_POST['id'];
        mysqli_query($connection,$reqUpdate);
        $_SESSION['balance']=$balance-$_POST['prix'];
        $reqUser="update users set balance=".$_SESSION['balance']." where id=".$_SESSION['iduser'];
        mysqli_query($connection,$reqUser);

        $arrS=array('status'=>true);
        echo json_encode($arrS);
    }
    else{
        $arr=array('status'=>false);
        echo json_encode($arr);
    }
   
   
    