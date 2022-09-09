<?php 

require '../../Models/config.php';
$req="UPDATE users set balance=".$_POST['balance']." where id =".$_POST['id'];
mysqli_query($connection,$req);