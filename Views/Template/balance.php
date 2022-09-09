<?php if($_SESSION['balance']>=500){
?>
<div class="balance">
    <i class='bx bxs-right-top-arrow-circle me-2'></i>
    <span class="me-1">Balance is</span>
    <span><?= $_SESSION['balance']?> DH</span>
    </div>
<?php
}else{
    ?>
    <div class="balance-alt">
    <i class='bx bxs-left-down-arrow-circle me-2'></i>
    <span class="me-1">Balance is</span>
    <span><?= $_SESSION['balance']?> DH</span>
    </div>
<?php  
}
    
