    <!-- App Capsule -->
    <div id="appCapsule">

             <!-- Wallet Card -->
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

        <div class="section">
        <div class="row mt-2">
                <div class="col-12">
                    <div class="stat-box">
                       <div id="map_canvas" style="width: 100%; height: 400px;"></div>
                          <div style="margin-bottom: 7px">
                             <input type="hidden" id="routeFrom" name="routeFrom" value="<?php echo $userDetails[0]['barangay']; ?>,<?php echo $userDetails[0]['city']; ?>" placeholder="Origin address" />
                          </div>
                          <div style="margin-bottom: 12px">
                             <input type="hidden" id="routeTo" name="routeTo" value="<?php echo $clientBookingDetailsToday[0]['barangay_text']; ?>,<?php echo $clientBookingDetailsToday[0]['city_text']; ?>" placeholder="Destination address" />
                          </div>
                         <button id="routeGo" class="btn btn-primary btn-sm" style="width: 100%;">Route</button>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="stat-box">
                  
                        <div class="title">STORE NAME : <b><?php echo strtoupper($clientBookingDetailsToday[0]['company']); ?></b></div>
                        <div class="title">STORE ADDRESS : <b><?php echo strtoupper($clientBookingDetailsToday[0]['address']); ?>,<?php echo strtoupper($clientBookingDetailsToday[0]['province_text']); ?>,<?php echo strtoupper($clientBookingDetailsToday[0]['barangay_text']); ?>,<?php echo strtoupper($clientBookingDetailsToday[0]['city_text']); ?></b></div>
                        <div class="title">SERVICE AVAILED : <b><?php echo strtoupper($clientBookingDetailsToday[0]['servicename']); ?></b></div>
                        <div class="title">APPOINTMENT : <b><?php echo strtoupper($clientBookingDetailsToday[0]['date_appointment']); ?> <?php echo strtoupper($clientBookingDetailsToday[0]['time_appointment']); ?></b></div>
                    </div>
                </div>
            </div>
         </div>




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