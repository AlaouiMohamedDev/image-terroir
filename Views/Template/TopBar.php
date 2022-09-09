<!--Top Bar-->

<?php 
  require_once './Controllers/Functions/GETmessages.php';
  require_once './Controllers/Functions/users.php';
?>
<?php 

$r=count(NewMessages());

?>
<div class="topbar">
        <i class='bx bx-world'></i>

        <div class="group">
          <i class='bx bx-user trigger'></i><?php if(CountUsersUnAuthorised()>0){?><span class="bell"><?php echo CountUsersUnAuthorised() ?></span><?php }?>
        </div>

        <div class="group">
          <i class='bx bx-bell'></i><?php if($r>0){?><span class="bell"><?php echo $r ?></span><?php }?>
        </div>
        <?php if($r>0){?>
        <div class="bell-list d-n" id="bell">
          <a class="head mb-2">
            <span>Messages</span><span class="trigger">X</span>
          <?php
          $i=0;
          $data =NewMessages();
            foreach($data as $row) {
              $i++;
                  ?>
                <a href="message">
                  <div class="user">
                    <h6><?= $row['username'] ?> </h6>
                    <span><?= $row['DateSent'] ; ?></span>
                  </div>
                  <p><?= $row['message'] ?> </p>
                </a>
              <?php
              if($i==3){
                return;
              }
            
            }
            ?>
           <a class="view" href="message">
           <span> View All</span><i class='bx bx-right-arrow'></i>
          </a>
           
        </div>
        <?php }?>

        <?php if(CountUsersUnAuthorised()>0){?>
        <div class="bell-list d-n" id="user">
          <a class="head mb-2">
            <span>Waiting For Auth</span><span>X</span>
          </a>
          <?php 
          $datas=UnAuthorised();
            foreach($datas as $user){?>
          <a href="users">
            <div class="user">
              <h6><?= $user['username'] ?></h6>
              <span><?= $user['created_at'] ?></span>
            </div>
            <p><?= $user['email'] ?></p>
          </a>
       <?php }
        ?>
          <a class="view" href="users">
           <span> View All</span><i class='bx bx-right-arrow'></i>
          </a>
        </div>
        <?php }?>
        <i class='bx bx-moon'></i>
      </div>