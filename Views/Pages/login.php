<!DOCTYPE html>

<html lang="en">

<?php
include_once './Views/Template/Header.php';
?>

<body>
    <div class="container-fluid login">
    <a href="http://www.codata-agency.com">
      <img src="http://codata-admin.com/Views/Images/logos.png" class="logo-img"  data-aos="zoom-out" data-aos-easing="linear" data-aos-duration="1000"  >
      <img src="http://codata-admin.com/Views/Images/logos-1.png" class="logo-img-1">
    </a>
        <div class="row">
            <div class="col-lg-6 img">
                <span>Nice to see you again</span>
                <h1>WELCOME BACK !</h1>
                <p>Enter your details and start you journey with us !</p>
            </div>
            <div class="col-lg-6 content">
                <?php if(isset($_GET['error'])){
                ?>
                <div class=" alert-error">
                <i class='bx bxs-error-circle mr-3'></i>
                    <?php
                        echo $_GET['error']
                    ?>
                </div>
                <?php } ?> 
                
                <div class="  alert-info">
                <i class='bx bxs-error-circle mr-3'></i>
                   user : user@gmail.com , pwd : 123
                   <br />
                   admin : admin@gmail.com , pwd : 123
                </div>


                <h1>Sign in</h1>
                <div class="form-group">
                    <form action="./Controllers/Functions/Login/Login" method="POST">
                        <input type="text" class="form-control shadow-none" placeholder="email" name="email">
                        <i class='bx bx-user'></i>
                        <input type="password" class="form-control shadow-none" placeholder="Password" name="password">
                        <i class='bx bx-lock-alt'></i>
                        <button class="bt-log mb-3" type="submit">
                            SIGN IN
                        </button>
                    </form>
                    <br>
                    <a href="register" class="log-reg-href">You don't have an account? sign up</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>