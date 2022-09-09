<?php
    session_start();
    if($_SESSION['role']!= 'user'){
        header("Location:http://codata-admin.com/login");
    }
   
    require_once './Controllers/Functions/purchased.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account </title>
  
  <?php 
   include('./Views/Template/headerUser.php')
  ?>

  
</head>

<body>

</div>
<?php include './Views/Template/balance.php';?>
  <div class="navigation_bar">
    <div class="content">
      <div class="item">
        <i class='bx bx-edit me-2'></i>
        <span>
          <a href="#editprofile"> Edit Profil</a>
        </span>
      </div>
      <div class="item">
        <i class='bx bx-tv me-2'></i>
        <span>
          <a href="#codes">
            Codes
          </a>
        </span>
      </div>

    </div>
  </div>
  <div class="gotop op-0">
    <a href="#home"><i class='bx bxs-up-arrow'></i></a>
  </div>
  <div class="topbar" id="home">
    <div class="right-bar">
      <span class="me-2">Created by</span>
      <a href="https://www.codata-agency.com">
        codata-agency.com
      </a>
      <i class='bx bxs-door-open ms-2'></i>
    </div>
    <div class="right-bar">
      <i class='bx bxs-phone me-2'></i>
      <span>+212 689787845</span>
    </div>
  </div>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <i class='bx bx-landscape me-2'></i>
          <span>IPTV</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class='bx bx-align-right'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://codata-admin.com/Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://codata-admin.com/Home#codes">Codes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://codata-admin.com/profile">Hello <b><?php echo $_SESSION['name'] ?></b></a>
            </li>
            <li class="nav-item logout">
              <form action="http://codata-admin.com/Controllers/Functions/logout" method="POST">
                <input type="submit" value="log out" />
              </form>
              <i class='bx bx-log-out'></i>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <div class="edit_profile" id="editprofile">

      <div class="container">
           
        <h1>Edit Profil</h1>
        <div class="row">
          <div class="col-sm-12 col-md-6 item">
            <div class="lab">
              <label>Username</label>
            </div>
            <input type="text" name="username" placeholder="Username ..." id="username"  value=<?php echo $_SESSION["name"] ?>>
          </div>
          <div class="col-sm-12 col-md-6 item">
            <div class="lab">
              <label>Email</label>
            </div>
            <input type="email" name="email" placeholder="email ..." id="email"  value=<?php echo $_SESSION["email"]?> disabled >
          </div>
          <div class="col-sm-12 col-md-6 item">
            <div class="lab">
              <label>Password</label>
            </div>
            <input type="password" name="password" placeholder="Password ..." id="password" required>
          </div>
          <div class="col-sm-12 col-md-6 item">
            <div class="lab">
              <label>New Password</label> 
            </div>
            <input type="text" name="newpass" placeholder="New Password ..." id="newpass">
          </div>
        </div>
        <div class="submit">
          <button onclick="edit();">Modify</button>
        </div>
      </div>

  </div>

  <div class="profile_codes" id="codes">
    <div class="container">
      
      <h1>Codes Achetez</h1>
      <?php 
        if(mysqli_num_rows($resultat)>0){
          ?>

              <table>
            <thead>
              <th>
                Codes
              </th>
              <th>
                username
              </th>
              <th>
                password
              </th>
              <th>
                prix
              </th>
              <th>
                Disheance
              </th>
            </thead>
            <tbody>
              <?php 
                  while($code=mysqli_fetch_assoc($resultat)){ 
              ?>
              <tr>
                <td>
                  <?php echo $code['title'] ?>
                </td>
                <td>
                <?php echo $code['username'] ?>
                </td>
                <td>
                <?php echo $code['password'] ?>
                </td>
                <td>
                <?php echo $code['prix'] ?> DH
                </td>
                <td>
                <?php echo $code['durée']?>
                </td>
              </tr>
              <?php  }
            ?>
            </tbody>
          </table>
       <?php 
       }else{
         ?>
         <div class="alert-warning py-2 px-3">
            Nothing Purchased yet !!!!
         </div>
       <?php }
      ?>

      

    </div>
  </div>

  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="content">
            <h1>About IPTV</h1>
            <p>Lorem, ipsum dolor sit amet consectetur<br>adipisicing elit.</p>
            <div class="adress">
              <i class='bx bxs-map-pin me-3'></i>
              <span>Hey LMohamadi Rue Mohamed 5 N°25</span>
            </div>
            <div class="phone">
              <i class='bx bx-headphone me-3'></i>
              <span>+212 5 85 25 35 35</span>
            </div>
            <div class="email">
              <i class='bx bx-mail-send me-3'></i>
              <span>contact@iptv.com</span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="content">
            <h1>Useful Links</h1>
            <p>Lorem, ipsum dolor sit amet consectetur<br>adipisicing elit.</p>
            <div class="adress">
              <i class='bx bxs-contact me-3'></i>
              <span>Contact Us</span>
            </div>
            <div class="phone">
              <i class='bx bx-barcode-reader me-3'></i>
              <span>Codes</span>
            </div>
            <div class="email">
              <i class='bx bxs-user-check me-3'></i>
              <span>Profile</span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="content">
            <h1>This Web Site Was Created By</h1>
            <p>Codata Agency ,You can Contact them for business matters or technical issues !</p>
            <div class="adress">
              <i class='bx bxs-map-pin me-3'></i>
              <span>Marrakech</span>
            </div>
            <div class="phone">
              <i class='bx bx-headphone me-3'></i>
              <span>+212 6 66 68 76 87</span>
            </div>
            <div class="email">
              <i class='bx bx-mail-send me-3'></i>
              <span>contact@codata-agency.com</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php 

include './Views/Template/scripts.php';?>

<script>

  const notyf=new Notyf({
          duration:4000,
          position:{
            x:'right',
            y:'top',
          },
          
      });

           function edit(){
            let username=$('#username').val(),
                password=$('#password').val(),
                newpass=$('#newpass').val();

                  $.ajax({
                    url:"http://codata-admin.com/Controllers/Functions/profile/edit",
                    method:"POST",
                    data:{username,password,newpass},
                    dataType:"json",
                    success: function(data){
                     console.log(data.status)
                      if(data.status){
                        notyf.success("Modifier avec succès")
                      }
                      else{
                        notyf.error("Invalid credentials")
                      }
                    }
                  })
           }
    

      
</script>
  
</body>

</html>