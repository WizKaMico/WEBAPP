    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">WELCOME PARTNER <?php echo strtoupper($userDetails[0]['company']); ?>!</span>
                        <h5 class="total" style="font-size:20px;"><?php echo strtoupper($userDetails[0]['lname']); ?>, <?php echo strtoupper($userDetails[0]['fname']); ?> <?php echo strtoupper($userDetails[0]['mname']); ?></h5>
                      
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-toggle="modal" data-target="#specificService">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
           
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Apply Loan Action Sheet -->
      
        <!-- * Apply Loan Action Sheet -->

        
        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <?php 
                    $serviceId = $_GET['service_id'];
                    $serviceSpecific = $portCont->getSpecificServices($serviceId); 
                    if(!empty($serviceSpecific)){
                    foreach ($serviceSpecific as $key => $value) {
                ?>   
                <div class="col-12">
                    <div class="stat-box">
                        <img src="./<?php echo $serviceSpecific[$key]['image']; ?>" style="width:100%;"/>
                        <hr />
                        <div class="title" style="text-align:center; font-size:20px;"><?php echo $serviceSpecific[$key]['servicename']; ?></div>
                        <div class="value"></div>
                    </div>
                </div>
                <?php } ?>
                        
                <?php include('modal/companySpecificServices.php'); ?> 
            
                <?php } ?>
            </div>

            <div class="row mt-2">
                 <div class="col-6">
                        <div class="stat-box">
                            <div class="title">BOOKING TODAY</div>
                            <div class="value"></div>
                        </div>
                 </div>
                  <div class="col-6">
                        <div class="stat-box">
                            <div class="title">TOTAL BOOKING</div>
                            <div class="value"></div>
                        </div>
                  </div>         
            </div>
         </div>
          

        </div>
        <!-- * Stats -->

      

    </div>
    <!-- * App Capsule -->

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