<?php 
session_start();
require '../../Models/config.php';
$_SESSION['id']=$_POST['id'];
$req="select id,balance from users where id =".$_POST['id'];
$res=mysqli_query($connection,$req);
$ba="";
$id="";
while($row=mysqli_fetch_array($res)){
    $id=$row['id'];
    $ba=$row['balance'];
}

echo '
<div class="modal-header">
<h5 class="modal-title" id="editModalLabel">Balance</h5>
<i class="bx bxs-x-circle" data-bs-dismiss="modal" aria-label="Close"></i>
</div>
<div class="modal-body">
<form>
<div class="mb-3">
    <label for="code-price" class="col-form-label">Balance:</label>
    <input type="text" class="form-control" id="balance" value="'.$ba.'">
  </div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-or" onclick="editUser('.$id.')" data-bs-dismiss="modal">Edit Balance</button>
</div>';