<?php 

    require_once './Models/config.php';
    $req="select * from codes";
    
    $resultat=mysqli_query($connection,$req);
