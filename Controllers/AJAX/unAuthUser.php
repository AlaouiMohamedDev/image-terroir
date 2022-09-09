<?php 

require '../../Models/config.php';

if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "
	SELECT * FROM users 
	WHERE auth=0 and ( username LIKE '%".$search."%'
	OR email LIKE '%".$search."%' )";
}
else
{
	$query = "
	SELECT * FROM users where auth=0";
}


$result=mysqli_query($connection,$query);
$table="";
if(mysqli_num_rows($result)>0){

    $i=0;
    while ($user = mysqli_fetch_assoc($result)){
        $i++;
        $table .='<tr>';
        $table .='<td>'.$i.'</td>';
        $table .='<td>'.$user['username'].'</td>';
        $table .='<td>'.$user['email'].'</td>';
        $table .='<td class="au"><a class="auth" id="auth-id" onclick="hi('. $user['id'].');"><span>Autoriser</span><i class="bx bxs-check-circle"></i></a><a><span class="trash" onclick="deny('. $user['id'].');">Deny</span></a> </td>';
        $table .='</tr>';
    }
    echo $table;
}
else{
    echo '<div class="alert-warning py-2 px-3 w-100">
    Nothing to authorize for the moment!!!
 </div>';
}

