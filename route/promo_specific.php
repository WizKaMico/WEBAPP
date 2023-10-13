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
                        <a href="#" class="button" data-toggle="modal" data-target="#specificPromo">
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
                    $promo_id = $_GET['promo_id'];
                    $promoSpecific = $portCont->getCompanyPromoSpecific($promo_id); 
                    if(!empty($promoSpecific)){
                    foreach ($promoSpecific as $key => $value) {
                ?>   
                <div class="col-12">
                    <div class="stat-box">
                        <img src="./assets/img/stub.png" style="width:100%;"/>
                        <hr />
                        <div class="title" style="text-align:center; font-size:20px;"><?php echo $promoSpecific[$key]['promo_name']; ?></div>
                        <div class="value"></div>
                    </div>
                </div>
                <?php } ?>
                        
                <?php include('modal/companySpecificPromo.php'); ?> 
            
                <?php } ?>
            </div>

            <div class="row mt-2">
                 <div class="col-6">
                        <div class="stat-box">
                            <div class="title">USAGE TODAY</div>
                            <div class="value"></div>
                        </div>
                 </div>
                  <div class="col-6">
                        <div class="stat-box">
                            <div class="title">PROMO REDEEMED</div>
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