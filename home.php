<?php include('connection/ClientHomeController.php'); ?>
<!doctype html>
<html lang="en">



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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</head>

<body>


    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            
        </div>
        
    </div>
    <!-- * App Header -->

    <?php if(!empty($_GET['view'])) { ?>
    <?php if($_GET['view'] == 'HOME') { ?>
    <?php include('route/home.php'); ?>
    <?php } else if($_GET['view'] == 'INFORMATION') { ?>
    <?php include('route/information.php'); ?>
    <?php } else if($_GET['view'] == 'SERVICE') { ?>
    <?php include('route/information_service.php'); ?>
    <?php } else if($_GET['view'] == 'SPECIFICSERVICE') { ?>
    <?php include('route/service_specific.php'); ?>
    <?php } else if($_GET['view'] == 'SPECIFICPROMO') { ?>
    <?php include('route/promo_specific.php'); ?>
    <?php } else if($_GET['view'] == 'SPECIFICSTORE') { ?>
    <?php include('route/store_specific.php'); ?>
    <?php } else if($_GET['view'] == 'IDENTITY') { ?>
    <?php include('route/information_identity.php'); ?>
    <?php } else if($_GET['view'] == 'MYIMAGE') { ?>
    <?php include('route/information_image.php'); ?>
    <?php } else if($_GET['view'] == 'MYBOOKING') { ?>
    <?php include('route/my_booking.php'); ?>
    <?php } else if($_GET['view'] == 'BOOKINGHISTORY') { ?>
    <?php include('route/my_booking_history.php'); ?>
    <?php } else if($_GET['view'] == 'CHAT') { ?>
    <?php include('route/my_chat.php'); ?>
    <?php } else if($_GET['view'] == 'MAPSPECIFICROUTE') { ?>
    <?php include('route/map_route.php'); ?>
    <?php } else if($_GET['view'] == 'MYAPPOINTMENT') { ?>
    <?php include('route/my_appointment.php'); ?>
    <?php } else if($_GET['view'] == 'SETTING') { ?>
    <?php include('route/setting.php'); ?>
    <?php } else if($_GET['view'] == 'RATE') { ?>
    <?php include('route/my_rate.php'); ?>
    <?php } else if($_GET['view'] == 'SERVICERATING') { ?>
    <?php include('route/service_rating.php'); ?>    
    <?php } else if($_GET['view'] == 'SPECIFICEEMPLOYEE') { ?>
    <?php include('route/company_employee_specific.php'); ?>   
    <?php } else if($_GET['view'] == 'MYCOMPANY') { ?>
    <?php include('route/company_information.php'); ?>  
    <?php } else if($_GET['view'] == 'ZYKE') { ?>
    <?php include('route/zyke.php'); ?>  
    <?php } else { ?>

        <!-- to be added -->
    
    <?php } ?>
    <?php } else { ?>
    <?php include('route/home.php'); ?>
    <?php } ?>

   
 

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="in">
                            <strong><?php echo strtoupper($userSession[0]["email"]); ?></strong>
                            <div class="text-muted"><?php echo strtoupper($userSession[0]["date_created"]); ?></div>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                   

                    <!-- menu -->
                    <div class="listview-title mt-1">Menu</div>
                    <ul class="listview flush transparent no-line image-listview">
                       
                        <?php  if($userSession[0]['designation'] == 2){ ?>
                        <li>
                            <a href="home.php?view=MYAPPOINTMENT" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="pie-chart-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    My Bookings (Appointment)
                                   
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="home.php?view=MYCOMPANY" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="pie-chart-outline"></ion-icon>
                                </div>
                                <div class="in">
                                   Company
                                </div>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a href="home.php?view=MYBOOKING" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="pie-chart-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    My Bookings (Appointment)
                                   
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                       
                        
                    
                    </ul>
                    <!-- * menu -->

                    <!-- others -->
                    <div class="listview-title mt-1">Others</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="home.php?view=<?php echo 'SETTING'; ?>" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Settings
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="./logout.php" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * others -->


                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ph-address-selector.js"></script>
    <script src="assets/js/image_verif.js"></script>
 
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
    <!-- <script src="assets/js/modal.js"></script> -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <script src="assets/js/map.js"></script>
     <!-- Ensure you've included jQuery -->
    
    <script>

    document.addEventListener("DOMContentLoaded", function() {
            // get input field and add 'keyup' event listener
            let searchInput = document.querySelector('.search-input');
            searchInput.addEventListener('keyup', search);

            function search(e) {
                let searchTerm = e.target.value.toLowerCase();
                let titles = document.querySelectorAll('.companyContainer .title');

                titles.forEach((title) => {
                    let tit = title.textContent.toLowerCase();
                    // if the search term is not in the title, hide the title; otherwise, show it.
                    tit.includes(searchTerm) ? title.parentElement.parentElement.style.display = 'block' : title.parentElement.parentElement.style.display = 'none';
                });
            }
        });
    </script>
   

</body>
</html>