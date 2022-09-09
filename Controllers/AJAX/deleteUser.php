<?php 

require '../../Models/config.php';

$req="DELETE from users where id =".$_POST['id'];
mysqli_query($connection,$req);