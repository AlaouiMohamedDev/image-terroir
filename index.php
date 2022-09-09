<?php 
    session_start();

    if($_SESSION['role']!="admin"){
      header("Location:http://codata-admin.com/login");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <?php 

      include './Views/Template/Header.php';
      
      ?>
<body class="body">
  
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

      <!--Count Status-->
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3 item">
            <div class="details" data-aos="flip-left"  data-aos-easing="linear" data-aos-duration="700">
                <div class="info mb-3">
                <span>Incoming Status</span>
                <i class='bx bxs-info-circle'></i><span class="info-x">More Info</span>
              </div>
              <h2 class="mb-3">$31,000</h2>
              <p>Total Incoming $22506 <i class='bx bxs-up-arrow ms-1'></i></p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3 item">
            <div class="details" data-aos="flip-left"  data-aos-easing="linear" data-aos-duration="700">
              <div class="info mb-3">
              <span>Incoming Status</span>
              <i class='bx bxs-info-circle'></i><span class="info-x">More Info</span>
            </div>
            <h2 class="mb-3">$31,000</h2>
            <p>Total Incoming $22506 <i class='bx bxs-up-arrow ms-1'></i></p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3 item">
            <div class="details" data-aos="flip-left"  data-aos-easing="linear" data-aos-duration="700">
              <div class="info mb-3">
              <span>Incoming Users</span>
              <i class='bx bxs-info-circle'></i><span class="info-x">More Info</span>
            </div>
            <h2 class="mb-3">30</h2>
            <p>Total Users 25%<i class='bx bxs-down-arrow ms-1'></i></p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3 item">
            <div class="details" data-aos="flip-left"  data-aos-easing="linear" data-aos-duration="700">
              <div class="info mb-3">
              <span>Incoming Status</span>
              <i class='bx bxs-info-circle'></i><span class="info-x">More Info</span>
            </div>
            <h2 class="mb-3">$31,000</h2>
            <p>Total Incoming $22506 <i class='bx bxs-up-arrow ms-1'></i></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mt-3 section-2">
        <div class="row">
          <div class="col-md-12 col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
            <h1>Top Sales</h1>
            <div class="items">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                 
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 section-2"  data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
            <h1>Code Charts</h1>
           <div class="items">
            <canvas id="myChart" width="auto" height="auto"></canvas>
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
  
</body>
</html>
