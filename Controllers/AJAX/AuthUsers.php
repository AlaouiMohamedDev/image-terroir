<?php 

require '../../Models/config.php';

if(isset($_POST["idUser"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["idUser"]);
	$query = "
	SELECT * FROM users 
	WHERE auth=1 and role='user' and ( username LIKE '%".$search."%'
	OR email LIKE '%".$search."%' )";
}
else
{
	$query = "
	SELECT * FROM users where auth=true and role='user'";
}


$re=mysqli_query($connection,$query);
$table="";
if(mysqli_num_rows($re)>0){

    $i=0;
    while ($user = mysqli_fetch_assoc($re)){
        $i++;
        $table .='<tr>';
        $table .='<td>'.$i.'</td>';
        $table .='<td>'.$user['username'].'</td>';
        $table .='<td>'.$user['created_at'].'</td>';
        if($user['balance']>=500){
            $table .='<td class="balance-2">'.$user['balance'].'</td>';
        }
        else{
            $table .='<td class="balance-1">'.$user['balance'].'</td>';
        }
        $table .='<td>
        <a><i class="bx bxs-pencil" onclick="getData('.$user['id'].');" data-bs-toggle="modal" data-bs-target="#editModal"></i></a>
        <a><i class="bx bx-trash" onclick="deleteUser('.$user['id'].');" ></i></a>
    </td>';
        $table .='</tr>';
    }
    echo $table;
}
else{
    echo '<div class="alert-warning py-2 px-3 w-100">
    No user to show for the moment!!!
 </div>';
}




