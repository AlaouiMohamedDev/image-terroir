<?php 

require '../../Models/config.php';

$req="UPDATE users set auth=true where id =".$_POST['id'];
mysqli_query($connection,$req);
