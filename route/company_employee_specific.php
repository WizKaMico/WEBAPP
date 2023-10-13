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
                        <a href="#" class="button" data-toggle="modal" data-target="#specificEmployee">
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
                    $empId = $_GET['employee_id'];
                    $employeeSpecific = $portCont->getSpecificEmployee($empId); 
                    if(!empty($employeeSpecific)){
                    foreach ($employeeSpecific as $key => $value) {
                ?>   
                <div class="col-12">
                    <div class="stat-box">
                        <div class="title" style="text-align:center; font-size:20px;">FULLNAME : <?php echo $employeeSpecific[$key]['emp_name']; ?></div>
                        <div class="value" style="text-align:center; font-size:20px;">EID : <?php echo $employeeSpecific[$key]['emp_id']; ?></div>
                        <div class="value" style="text-align:center; font-size:20px;">ROLE : <?php echo $employeeSpecific[$key]['emp_designation']; ?></div>
                        
                    </div>
                </div>
                <?php } ?>
                        
                <?php include('modal/companySpecificEmployee.php'); ?> 
            
                <?php } ?>
            </div>

            <div class="row mt-2">
                 <div class="col-6">
                        <div class="stat-box">
                            <?php  $serviceSpecificmployeeToday = $portCont->specificEmployeeeBookingServicesToday($empId);  ?>
                            <div class="title">BOOKING TODAY</div>
                            <div class="value"><?php if(!empty($serviceSpecificmployeeToday)){ echo $serviceSpecificmployeeToday[0]['total'];  } else {  echo '0'; } ?> </div>
                        </div>
                 </div>
                  <div class="col-6">
                        <div class="stat-box">
                             <?php  $serviceSpecificmployeeTotal = $portCont->specificEmployeeeBookingServicesTotal($empId);  ?>
                            <div class="title">TOTAL BOOKING</div>
                            <div class="value"><?php if(!empty($serviceSpecificmployeeTotal)){ echo $serviceSpecificmployeeTotal[0]['total'];  } else {  echo '0'; } ?> </div>
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