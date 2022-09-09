<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Bonjour</title>
    <link rel="stylesheet" href="http://codata-admin.com/Views/Styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container-fluid login">
        <a href="https://www.codata-agency.com">
            <img src="logos.png" class="img-logo-alt">
            <img src="http://codata-admin.com/Views/Images/logos.png" class="img-logo-1-alt">
        </a>
        <div class="row">
            <div class="col-lg-6 content">
            <?php if(isset($_GET['error'])){
                ?>
                <div class="alert-error">
                <i class='bx bxs-error-circle mr-3'></i>
                    <?php
                    if ($_GET['error']) {
                        echo $_GET['error'];
                    } ?>

                </div>
                <?php } ?> 

                <h1>Sign Up</h1>
                <div class="form-group">
                    <form action="./Controllers/Functions/Register/register" method="post">

                        <input type="text" class="form-control shadow-none" placeholder="Name" name="username" autocomplete = "off" required>
                        <i class='bx bx-user'></i>
                        <input type="email" class="form-control shadow-none" placeholder="Email" name="email"  autocomplete = "off" required>
                        <i class='bx bx-mail-send'></i>
                        <input type="password" class="form-control shadow-none" placeholder="Password" name="password"  autocomplete = "off" required>
                        <i class='bx bx-lock-alt new'></i>
                        <button class="bt-log mb-3">
                            SIGN UP
                        </button>
                    </form>
                    <br>
                    <a href="login" class="log-reg-href">Do you already have an account? sign in</a>
                </div>

            </div>
            <div class="col-lg-6 img">
                <span>Welcome</span>
                <h1>Get Started!</h1>
                <p>Create your account and start you journey with us !</p>
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