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
                           <?php include('modal/companySpecificServices.php'); ?> 
                <div class="col-12">
                <ul class="nav nav-tabs style1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#service" role="tab">
                                    SERVICE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#rates" role="tab">
                                    RATING
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2">
                            <div class="tab-pane fade show active" id="service" role="tabpanel">
                                <div class="stat-box">
                                    <img src="./<?php echo $serviceSpecific[$key]['image']; ?>" style="width:100%;"/>
                                    <hr />
                                    <div class="title" style="text-align:center; font-size:20px;"><?php echo $serviceSpecific[$key]['servicename']; ?></div>
                                    <div class="value"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="rates" role="tabpanel">
                                <div class="stat-box">
                                <div style="overflow-x:auto;">
                                <table>
                                    <tr>
                                    <th>SPID</th>
                                    <th>CAR TYPE</th>
                                    <th>AMOUNT</th>
                                    <th>ACTION</th>
                                    </tr>
                                    <?php  
                                    $service_id = $_GET['service_id'];
                                      $serviceSpecificRating = $portCont->showServiceAmountPrice($service_id);
                                        if(!empty($serviceSpecificRating)){ 
                                            foreach ($serviceSpecificRating as $key => $value) {    
                                    ?>
                                    <tr>
                                    <td><?php echo $serviceSpecificRating[$key]['spid']; ?></td>           
                                    <td><?php echo $serviceSpecificRating[$key]['vehicle_type']; ?></td>
                                    <td><?php echo $serviceSpecificRating[$key]['price']; ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#priceSpecificUpdate_<?php echo $serviceSpecificRating[$key]['spid'];?>" class="btn btn-primary">UPDATE</a> 
                                    </td>
                                    </tr>
                                    <?php include('modal/companySpecificServicesPricingUpdate.php'); ?> 
                                    <?php }  ?>
                                    <?php } ?>
                                    
                                </table>
                                </div>
                                </div>
                            </div>
                    </div>
                </div>
                <?php } ?>
        
            
                <?php } ?>
            </div>

            <div class="row mt-2">
                 <div class="col-6">
                        <div class="stat-box">
                            <div class="title">BOOKING TODAY</div>
                            <?php  $serviceSpecificToday = $portCont->specificBookingServicesToday($serviceId);  ?>
                            <div class="value"><?php if(!empty($serviceSpecificToday)){ echo $serviceSpecificToday[0]['total'];  } else {  echo '0'; } ?> </div>
                        </div>
                 </div>
                  <div class="col-6">
                        <div class="stat-box">
                            <?php  $serviceSpecificTotal = $portCont->specificBookingServicesTotal($serviceId);  ?>
                            <div class="title">TOTAL BOOKING</div>
                            <div class="value"><?php if(!empty($serviceSpecificTotal)){ echo $serviceSpecificTotal[0]['total'];  } else {  echo '0'; } ?> </div>
                        </div>
                  </div>  
                  
                  <div class="col-12" style="margin-top:20px; margin-bottom:10px;">
                        <div class="stat-box">
                            <div class="title">SERVICE PRICING</div>
                            <center>
                            <a href="#" class="button" data-toggle="modal" data-target="#specificServicePricing">ADD PRICING</a>
                            <?php include('modal/companySpecificServicesPricing.php'); ?> 
                            </center>
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

    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>