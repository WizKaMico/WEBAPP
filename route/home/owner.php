  <!-- Wallet Card -->
  <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">HI PARTNER! <?php echo strtoupper($userDetails[0]['company']); ?></span>
                        <h5 class="total" style="font-size:20px;"><?php echo strtoupper($userDetails[0]['lname']); ?>, <?php echo strtoupper($userDetails[0]['fname']); ?> <?php echo strtoupper($userDetails[0]['mname']); ?></h5>
                      
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-toggle="modal" data-target="#addService">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
           
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Apply Loan Action Sheet -->
        <?php include('modal/companyServices.php'); ?> 
        <?php include('modal/companyPromo.php'); ?> 
        <?php include('modal/addEmployee.php'); ?>
        <!-- * Apply Loan Action Sheet -->

        
        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                  <a href="home.php?view=MYAPPOINTMENT">
                    <div class="stat-box">
                        <div class="title">TOTAL BOOKING</div>
                        <div class="value"><?php echo $OwnerBookingDetails[0]['total']; ?></div>
                    </div>
                  </a>
                </div> 
                <div class="col-6">
                    <div class="stat-box">
                      <a data-toggle="modal" data-target="#addService">
                        <div class="title">TOTAL SERVICES</div>
                     </a>
                        <div class="value"><?php echo $OwnerServiceCount[0]['total']; ?></div>
                    </div>
                </div>
                </a>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                  <a href="home.php?view=MYAPPOINTMENT">
                        <div class="stat-box">
                            <div class="title">BOOKING TODAY</div>
                            <div class="value"><?php echo $OwnerBookingDetailsToday[0]['total']; ?></div>
                        </div>
                </a>
                </div>
              
                <div class="col-6">
                    <div class="stat-box">
                        <a data-toggle="modal" data-target="#addBookingPromo">
                            <div class="title">TOTAL PROMO</div>
                        </a>
                           <div class="value"><?php echo $OwnerPromoCount[0]['total']; ?></div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                  <a href="#" class="button" data-toggle="modal" data-target="#addEmployee">
                        <div class="stat-box">
                            <div class="title">TOTAL EMPLOYEE</div>
                            <div class="value"><?php echo $OwnerEmployeeCount[0]['total']; ?></div>
                        </div>
                   </a>
                </div>
            </div>

           
          

        </div>
        <!-- * Stats -->

        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">My Services (Services Created)</h2>
            </div>
            <div class="shadowfix carousel-multiple owl-carousel owl-theme">
                <?php 
                    $service = $portCont->getCompanyServices($code); 
                    if(!empty($service)){
                    foreach ($service as $key => $value) {
                ?>   
                <!-- item -->
                <div class="item">
                    <a href="home.php?view=SPECIFICSERVICE&service_id=<?php echo $service[$key]['sid']; ?>">
                        <div class="blog-card">
                            <img src="./<?php echo $service[$key]['image']; ?>" alt="image" class="imaged w-100" style="width:100%;">
                            <div class="text">
                                <h4 class="title" style="text-align:center;"><?php echo $service[$key]['category']; ?></h4>
                                <p style="text-align:center; margin-top:-40px;"><?php echo $service[$key]['servicename']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- * item -->
                <?php } } ?>
        
            </div>
        </div>  

        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">My Promos (Promos Created)</h2>
                <!-- <a href="home.php?view=<?php echo 'PRODUCTS'; ?>" class="link">View All</a> -->
            </div>
            <div class="shadowfix carousel-multiple owl-carousel owl-theme">
                <?php 
                    $promo = $portCont->getCompanyPromo($code); 
                    if(!empty($promo)){
                    foreach ($promo as $key => $value) {
                ?>   
                <!-- item -->
                <div class="item">
                  <a href="home.php?view=SPECIFICPROMO&promo_id=<?php echo $promo[$key]['pid']; ?>">
                        <div class="blog-card">
                            <img src="./assets/img/stub.png" alt="image" class="imaged w-100" style="width:100%;">
                            <div class="text">
                                <h4 class="title" style="text-align:center;"><?php echo $promo[$key]['servicename']; ?></h4>
                                <p style="text-align:center; margin-top:-40px;">CODE : <?php echo $promo[$key]['promo_name']; ?></p>
                                <p style="text-align:center; margin-top:-25px;">DISCOUNT : <?php echo $promo[$key]['percentage']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- * item -->
                <?php } } ?>
        
            </div>
        </div>   
        
        
        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">My Employee (List)</h2>
            </div>
            <div class="shadowfix carousel-multiple owl-carousel owl-theme">
                <?php 
                    $employee = $portCont->getCompanyEmployee($code); 
                    if(!empty($employee)){
                    foreach ($employee as $key => $value) {
                ?>   
                <!-- item -->
                <div class="item">
                    <a href="home.php?view=SPECIFICEEMPLOYEE&employee_id=<?php echo $employee[$key]['emp_id']; ?>">
                        <div class="blog-card">
                            <div class="text">
                                <h4 class="title" style="text-align:center;"><?php echo $employee[$key]['emp_name']; ?></h4>
                                <p style="text-align:center; margin-top:-40px;"><?php echo $employee[$key]['emp_designation']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- * item -->
                <?php } } ?>
        
            </div>
        </div>
