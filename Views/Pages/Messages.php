<?php 
    session_start();

    require_once './Controllers/Functions/GETmessages.php';

    if($_SESSION['role']!="admin"){
      header("Location:http//codata-admin.com/login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <?php 

      include './Views/Template/Header.php';

  ?>
<body>
    
<?php 
   include('./Views/Template/SideBar.php')
?>

  <section class="home-section pe-3 ps-3 pt-2">
  <a href="http://www.codata-agency.com">
      <img src="http://codata-admin.com/Views/Images/logos.png" class="logo-img"  data-aos="zoom-out" data-aos-easing="linear" data-aos-duration="1000"  >
      <img src="http://codata-admin.com/Views/Images/logos-1.png" class="logo-img-1">
    </a>
    
    
    <!--Top Bar-->
    <?php 
   include('./Views/Template/TopBar.php')
  ?>

      <div class="container mt-5 code-table">
          <div class="row">
              <div class="content">
                <i class='bx bxs-left-arrow-alt' onclick="goBack();"></i>
                <span class="arrow">Step Back</span>
                <h1>Messages</h1>

              </div>
              <div class="col-lg-12 mt-5">
                <div class="items">
                    <table class="tab">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Date Sent</th>
                            <th>Message</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $data=AllMessages();
                            $i=0;
                            foreach($data as $row){
                              $i++;
                              $modal= "exampleModal".strval($i);
                              if($row['seen']==0){
                              ?>
                              <tr class="new">
                                <th>1</th>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row["email"] ?></td>
                                <td><span>29-03-2020</span></td>
                                <td class="message">
                                    <div class="inner-message">
                                        <?php echo '<div class="mod" id="X'.$row['id'].'">' ?>
                                            <span>New Message</span>
                                            <i class='bx bx-show ms-1'></i>
                                        </div>
                                        <div  class="seen ms-5">
                                            <i class='bx bx-check-circle me-1'></i>
                                            <form action="http://codata-admin.com/Controllers/Functions/markAsSeen" method="POST">
                                            <?= '  <input type="hidden" name="idMessage" value="'.$row['id'].'">' ?>
                                              <button>mark as seen</button> 
                                            </form>
                                          
                                        </div>
                                    </div>
                                </td>
                              </tr>
                          <?php }else{?>
                            <tr class="">
                              <th>1</th>
                              <td><?= $row['username'] ?></td>
                              <td><?= $row["email"] ?></td>
                              <td><span>29-03-2020</span></td>
                              <td class="message">
                                  <div class="inner-message">
                                  <?php echo '<div class="mod-alt" id="X'.$row['id'].'">' ?>
                                          <span>Show Message</span>
                                          <i class='bx bx-show ms-1'></i>
                                      </div>
                                      <div  class="seen-alt ms-5">
                                          <i class='bx bx-check-circle me-1'></i>
                                          <span>already seen</span>
                                      </div>
                                  </div>
                            </td>
                            </tr>
                          <?php }
                          ?> 
                         
                          <?php  } ?>
                       
                        </tbody>
                      </table>
                </div>
              </div>
          </div>
      </div>
      <div class="created">
        Created by <a href="http://codata-agency.com">codata-agency.com</a> . All right reserved ©
      </div>
    </section>
   

    <?php 

include './Views/Template/scripts.php';?>
    <?php 
    $datas=AllMessages();
     foreach ($datas as $row){
        echo ' <script>
      
      $("#X'.$row['id'].'").click(()=>{
       Swal.fire(
        "'.$row['username'].'",
        "'.$row['message'].'",
      )
      });
     

   </script>';
   
   }?>
  
</body>
</html>