  <!-- Wallet Card -->
  <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">WELCOME CLIENT !</span>
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
                <div class="col-6">
                    <div class="stat-box">
                        <a href="home.php?view=MYBOOKING">
                        <div class="title">TODAY</div>
                        <div class="value"><?php echo $clientBookingDetailsToday[0]['total']; ?></div>
                        <a>
                    </div>
                </div>
               
                <div class="col-6">
                    <div class="stat-box">
                        <a href="home.php?view=MYBOOKING">
                        <div class="title">TOTAL BOOKINGS</div>
                        <div class="value"><?php echo $clientBookingDetails[0]['total']; ?></div>
                        <a>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="section">
            
            <div class="row mt-2">
                <?php 
                    $company = $portCont->getCompanyServicesClientView(); 
                    if(!empty($company)){
                    foreach ($company as $key => $value) {
                ?>   
             
                <div class="col-6">
                <a href="home.php?view=SPECIFICSTORE&ccode=<?php echo $company[$key]['code']; ?>">
                    <div class="stat-box">
                        <?php if(!empty($company[$key]['image'])){ ?>
                        <img src="./assets/img/company_logo.png" alt="image" class="imaged w-100" style="width:100%;">     
                        <?php } else { ?>
                        <img src="./assets/img/company_logo.png" alt="image" class="imaged w-100" style="width:100%;">
                        <?php } ?>
                        <div class="title" style="text-align:center;"><?php echo strtoupper($company[$key]['company']); ?></div>
                        <div class="value"></div>
                    </div>
                </a>
                </div>
               
                <?php } } ?>
            </div>

          
        </div>
        <!-- * Stats -->
    

     