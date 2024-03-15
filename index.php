<?php include('connection/LoginController.php'); ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from egemem.com/theme/finapp/view/app-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 06:38:13 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CAPSTONE APP | HOME</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, cordova, phonegap, mobile, html, responsive" />
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="shortcut icon" href="assets/img/favicon.png"> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if (!empty($_GET['response'])) {
            if ($_GET['response'] == 'error') {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "An error occured during login",
                            text: "You might be using a wrong username / password"
                        });
                    });
                </script>';
            }else{
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "An error occured during registration",
                            text: "Account already used an existing email & phone"
                        });
                    });
                </script>';
            }
        }
        ?>
</head>

<body class="bg-light">



    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
       
        <!-- <div class="pageTitle"><center><img src="logo/logo.png" style="width:50%;"></center></div> -->

    </div>
    <!-- * App Header -->
    <?php if(!empty($_GET['view'])) { ?>
    <?php if($_GET['view'] == 'LOGIN') { ?>
    <?php include('route/login.php'); ?>
    <?php } else if($_GET['view'] == 'REGISTER') { ?>
    <?php include('route/register.php'); ?>
    <?php } else if($_GET['view'] == 'VERIFICATION') { ?>
    <?php include('route/verification.php'); ?>
    <?php } else if($_GET['view'] == 'FORGOT') { ?>
    <?php include('route/forgot.php'); ?>
    <?php } else if($_GET['view'] == 'PASSWORD') { ?>
    <?php include('route/password.php'); ?>
    <?php } else if($_GET['view'] == 'BANNED') { ?>
    <?php include('route/banned.php'); ?>
    <?php } else if($_GET['view'] == 'COMPANYSTAT') { ?>
    <?php include('route/companystat.php'); ?>
    <?php } else { ?> 
    
    <?php } ?>
    <?php } else { ?>
    <?php include('route/login.php'); ?>
    <?php } ?>
 
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="../../../../unpkg.com/ionicons%405.0.0/dist/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    
    

</body>


<!-- Mirrored from egemem.com/theme/finapp/view/app-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 06:38:13 GMT -->
</html>