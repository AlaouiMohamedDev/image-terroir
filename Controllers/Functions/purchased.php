<?php
 $iduser=$_SESSION['iduser'];

 

require_once './Models/config.php';

$req="select c.title,c.prix,c.durée,c.password,c.username from purchasedcodes p inner join codes c on(c.id=p.IdCode) where p.IdUser='{$iduser}'";
$resultat=mysqli_query($connection,$req);
return $resultat;