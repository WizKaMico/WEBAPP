  <!-- Wallet Card -->
  <div id="appCapsule">
  <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">WELCOME CLIENT <?php echo strtoupper($userDetails[0]['company']); ?>!</span>
                        <h5 class="total" style="font-size:20px;"><?php echo strtoupper($userDetails[0]['lname']); ?>, <?php echo strtoupper($userDetails[0]['fname']); ?> <?php echo strtoupper($userDetails[0]['mname']); ?></h5>
                      
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-toggle="modal" data-target="#">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
           
            </div>
        </div>
        <!-- Wallet Card -->

      
        <!-- Stats -->
       

        <div class="section">
            <div class="row mt-2">
               <?php 
                   $ccode = $_GET['ccode'];
                    $company = $portCont->getCompanyClientViewServices($ccode); 
                    if(!empty($company)){
                    foreach ($company as $key => $value) {
                ?>   
             
                    <div class="col-6" style="margin-top:10px;">
                      <a href="#" data-toggle="modal" data-target="#bookService<?php echo $company[$key]['sid']; ?>">
                        <div class="stat-box">
                            <?php if(!empty($company[$key]['image'])){ ?>
                            <img src="./<?php echo $company[$key]['image']; ?>" alt="image" class="imaged w-100" style="width:100%;">     
                            <?php } else { ?>
                            <img src="./assets/img/company_logo.png" alt="image" class="imaged w-100" style="width:100%;">
                            <?php } ?>
                            <div class="title" style="text-align:center;"><?php echo strtoupper($company[$key]['servicename']); ?></div>
                            <?php if($company[$key]['status'] == 'SOON'){ ?>
                            <div class="value" style="font-size:10px; text-align:center;">PROMO WILL BE AVAILABLE ON <?php echo $company[$key]['available_date']; ?></div>
                            <?php } else if($company[$key]['status'] == 'AVAILABLE') { ?>
                                <div class="value" style="font-size:10px; text-align:center;">PROMO IS AVAILABLE CODE: <?php echo $company[$key]['promo_name']; ?></div>
                            <?php } else { ?>
                            
                            <?php } ?>
                        </div>
                     </a>
                    </div>
                
                <?php include('modal/bookServices.php'); ?>  
                 <?php } ?>                      
                <?php } ?>
            </div>
        </div>
        <!-- * Stats -->
    </div>

     <!-- App Bottom Menu -->
     <div class="appBottomMenu">
        <a href="home.php?view=<?php echo 'HOME'; ?>" class="item active">
            <div class="col">
                <ion-icon name="pie-chart-outline"></ion-icon>
                <strong>Home</strong>
            </div>
        </a>
        <a href="javascript:;" class="item" data-toggle="modal" data-target="#sidebarPanel">
            <div class="col">
                <ion-icon name="menu-outline"></ion-icon>
                <strong>Menu</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

     