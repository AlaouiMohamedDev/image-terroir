<?php
    session_start();
    if($_SESSION['role']!= 'user'){
        header("Location:http://codata-admin.com/login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
      
     <?php 
   include('./Views/Template/headerUser.php')
  ?>
    
</head>
<body class="b-home">
<div class="navigation_bar op-0 navi">
    <div class="content">
        <div class="item">
            <i class='bx bx-edit me-2' ></i>
            <span>
                <a href="http://codata-admin.com/profile#editprofile"> Edit Profil</a>
        </span>
        </div>
        <div class="item">
            <i class='bx bx-tv me-2'></i>
            <span>
                <a href="http://codata-admin.com/profile#codes">
                    Codes
                </a>
                </span>
        </div>
    </div>
</div>
<?php include './Views/Template/balance.php';?>
  <!-- <div class="balance">
    <i class='bx bxs-right-top-arrow-circle me-2'></i>
    <span class="me-1">Balance is</span>
    <span>2000 DH</span>
  </div> -->
  <div class="gotop op-0">
    <a href="#home"><i class='bx bxs-up-arrow'></i></a>
  </div>
  <div class="topbar" id="home">
    <div class="right-bar">
      <span class="me-2">Created by</span>
      <a href="https://www.codata-agency.com">
        codata-agency.com
      </a>
      <i class='bx bxs-door-open ms-2' ></i>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class='bx bx-align-right'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#codes">Codes</a>
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

    <section class="primary" >
      <div class="bg-opacity">
      </div>
      <div class="container">
        <div class="row">
         <div class="col-md-12 col-lg-7">
            <div class="content">
              <h1>Iptv Codes Makes<br>
                life Easy And Happy
              </h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, architecto. Nostrum omnis modi explicabo itaque.</p>
              <div class="choose">
                <div class="item">
                  <i class='bx bx-money'></i>
                  <span>Low Cost</span>
                </div>
                <div class="item">
                  <i class='bx bxs-chat'></i>
                  <span>Talk To Us</span>
                </div>
                <div class="item">
                  <i class='bx bxs-group'></i>
                  <span>Community</span>
                </div>
                <div class="item">
                  <i class='bx bxs-microphone-alt'></i>
                  <span>Pro-Services</span>
                </div>
                <div class="item">
                  <i class='bx bxs-devices'></i>
                  <span>Responsive</span>
                </div>
              
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-5">
            <form action="http://codata-admin.com/Controllers/Functions/POSTmessages" method="POST" class="form-contact">
              <h5>Talk to us !</h5>
              <label>Subject</label>
              <input type="text" placeholder="Subject" name="subject">
              <label>Message</label>
              <textarea rows="6" name="message">
              </textarea>
              <input type="submit" value="SUBMIT" class="sub">
            </form>
          </div>
        </div>
      </div>
    </section>

  </div>
  <section class="codes" id="codes">
    <h1 class="title"><font color="#023e8a">F</font>ind your codes</h1>
    <div class="container">
      <div class="search-bar mb-4">

        <i class='bx bx-search s-code'></i>
        <input type="text" class="search-in d-n" id="s-codes" placeholder="codes ...">
        <div class="hover-me">
          <span>search iptvs</span>
          <i class='bx bxs-hand-down ms-1'></i>
        </div>

      </div>
      <div class="row" id="codes-all">
        
      </div>
    </div>
  </section>
   
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
  function load_codes(query) {
                $.ajax({
                    url:"http://codata-admin.com/Controllers/Functions/codes",
                    method:"post",
                    data:{query:query},
                    success:function(data)
                    {
                      $('#codes-all').html(data);
                    }
                  });
  }
  const notyf=new Notyf({
          duration:3000,
          position:{
            x:'right',
            y:'top',
          },
          
      });

  function buy(id,prix){
          Swal.fire({
        title: 'Are you sure purshasing this code?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, get it!'
      }).then((result) => {
        if (result.isConfirmed) {
              $.ajax({
                        url:"http://codata-admin.com/Controllers/Functions/buyCodes",
                        method:"post",
                        data:{id,prix},
                        dataType:"json",
                        success:function(response)
                        {
                          if(response.status){
                            
                            notyf.success("Code Purchased Successfuly");
                            load_codes();
                          }
                          else{
                            notyf.error("Not enough money to buy this code !");
                          }
                        }
                      });
        }
      })
  
  }

  $(document).ready(function(){
    load_codes();

    $('#s-codes').keyup(function(){
      let search=$('#s-codes').val();
      if(search==""){
        load_codes();
      }
      else{
        load_codes(search);
      }
    });

  });
</script>

  
</body>
</html>