<?php 


function NewMessages(){
        require './Models/config.php';

    $req="select m.id,u.username,m.email,m.message ,m.seen,m.DateSent from messages m inner join users u on(u.id=m.IdUser) where m.seen=false order by m.DateSent desc";
    $res=mysqli_query($connection,$req);
    $NewMessages = array();
    while ($data = mysqli_fetch_assoc($res)) {
        $NewMessages [] = $data;
    }
    return $NewMessages ;
}

function Allmessages(){
    require './Models/config.php';
        
    $req="select m.id,u.username,m.email,m.message ,m.seen,m.DateSent from messages m inner join users u on(u.id=m.IdUser) order by m.DateSent desc";
    $res=mysqli_query($connection,$req);
    $all = array();
    while ($data = mysqli_fetch_assoc($res)) {
        $all[] = $data;
    }
    return  $all;
}