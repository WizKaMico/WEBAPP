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


            <!-- Stats -->
            <div class="section" style="margin-top:10px;">
            <ul class="listview image-listview media mb-2">
                    <?php 
                        $bookingList = $portCont->myBookingsList($code); 
                        if (!empty($bookingList)) {
                            foreach ($bookingList as $key => $value) {
                                date_default_timezone_set('Asia/Manila');
                                $dateToday = date('Y-m-d'); 

                                $dateAppointment = $bookingList[$key]['date_appointment'];
                                $isToday = ($dateAppointment == $dateToday);
                                $isFuture = ($dateAppointment > $dateToday);
                                $isPast = ($dateAppointment < $dateToday);

                                // Calculate the difference in days
                                $dateAppointmentObj = new DateTime($dateAppointment);
                                $dateTodayObj = new DateTime($dateToday);
                                $daysDifference = $dateTodayObj->diff($dateAppointmentObj)->days;

                                // Output messages based on the date comparison
                            ?>  
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#specificBookingDetails<?php echo $bookingList[$key]['bid']; ?>" class="item">
                                        <div class="imageWrapper">
                                            <img src="./<?php echo $bookingList[$key]['photo']; ?>" alt="image" class="imaged w64">
                                        </div>
                                        <div class="in">
                                            <div>
                                                <?php echo $bookingList[$key]['company']; ?>
                                                <div class="text-muted">SERVICE : <?php echo $bookingList[$key]['servicename']; ?></div>
                                                <div class="text-muted">DATE : <?php echo $dateAppointment; ?></div>
                                            </div>
                                            <?php if ($isToday) { ?>
                                                <span class="badge badge-primary">today</span>
                                            <?php } elseif ($isFuture) { ?>
                                                <span class="badge badge-primary"><?php echo $daysDifference; ?> day</span>
                                            <?php } ?>
                                        </div>
                                    </a>
                                </li>
                                <?php include('modal/myBookingSpecific.php'); ?> 
                            <?php } ?>
                        <?php }
                    ?>
                </ul>
            </div>
      </div>
        <!-- Wallet Card -->


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