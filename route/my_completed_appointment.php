    <!-- App Capsule -->
    <div id="appCapsule">

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
                        $appointmentList = $portCont->myAppointmentListCompleted($code); 
                        if (!empty($appointmentList)) {
                            foreach ($appointmentList as $key => $value) {
                                date_default_timezone_set('Asia/Manila');
                                $dateToday = date('Y-m-d'); 

                                $dateAppointment = $appointmentList[$key]['date_appointment'];
                                $isToday = ($dateAppointment == $dateToday);
                                $isFuture = ($dateAppointment > $dateToday);
                                $isPast = ($dateAppointment < $dateToday);

                                // Calculate the difference in days
                                $dateAppointmentObj = new DateTime($dateAppointment);
                                $dateTodayObj = new DateTime($dateToday);
                                $daysDifference = $dateTodayObj->diff($dateAppointmentObj)->days;

                                $time_appointment = $appointmentList[$key]['time_appointment'];

                                // Convert the time to a DateTime object to handle the conversion
                                $datetime = new DateTime($time_appointment);

                                // Format the time in 12-hour format with AM/PM
                                $formatted_time = $datetime->format("g:i A");

                                // Output messages based on the date comparison
                                $bid = $appointmentList[$key]['bid'];
                                $checker = $portCont->checkConfirmation($bid);
                                
                                if (!empty($checker)) {
                                    $estimated_minutes = $checker[0]['estimated_minutes'];
                                
                                    // Create a DateTime object from the formatted time
                                    $appointment_datetime = new DateTime($formatted_time);
                                
                                    // Add the estimated minutes to the appointment time
                                    $eta_datetime = clone $appointment_datetime; // Create a copy to avoid modifying the original
                                    $eta_datetime->add(new DateInterval("PT{$estimated_minutes}M"));
                                
                                    // Format the ETA time
                                    $dt = $eta_datetime->format("g:i A");
                                    $eta = $dt.'-'.$estimated_minutes.'mins';
                                    $assign = $checker[0]['emp_id'];
                                } else {
                                    $eta = '';
                                    $assign = '';
                                }
                            ?>  
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#specificAppointmentDetails<?php echo $appointmentList[$key]['bid']; ?>" class="item">
                                        <div class="imageWrapper">
                                            <img src="./<?php echo $appointmentList[$key]['photo']; ?>" alt="image" class="imaged w64">
                                        </div>
                                        <div class="in">
                                            <div>
                                            <?php echo $appointmentList[$key]['lname']; ?> , <?php echo $appointmentList[$key]['fname']; ?>
                                                <div class="text-muted">👨‍🔧 SERVICE : <?php echo $appointmentList[$key]['servicename']; ?></div>
                                                <div class="text-muted">📅 DATE : <?php echo $dateAppointment; ?></div>
                                                <div class="text-muted">⏰ TIME : <?php echo $formatted_time; ?></div>
                                                <div class="text-muted">📍 STATUS :  <?php echo $appointmentList[$key]['status']; ?></div>
                                                <div class="text-muted">⏱ ETA :  <?php echo  $eta; ?></div>
                                                <div class="text-muted">👨‍🔧 ASSIGN :  <?php echo $assign; ?></div>
                                                <div class="text-muted">💰 TO PAY :  <?php echo $appointmentList[$key]['price']; ?></div>
                                            </div>
                                            <?php if ($isToday) { ?>
                                                <span class="badge badge-primary">today</span>
                                            <?php } elseif ($isFuture) { ?>
                                                <span class="badge badge-primary"><?php echo $daysDifference; ?> day</span>
                                            <?php } ?>
                                        </div>
                                    </a>
                                </li>
                                <?php if($appointmentList[$key]['status'] == 'PENDING' || $appointmentList[$key]['status'] == 'DECLINE') { ?>
                                <?php include('modal/myAppointmentSpecific.php'); ?> 
                                <?php } else if($appointmentList[$key]['status'] == 'COMPLETED') { ?> 
                                <?php include('modal/myAppointmentSpecificCompleted.php'); ?>     
                                <?php } else { ?> 
                                <?php include('modal/myAppointmentSpecificConfirmed.php'); ?> 
                                <?php } ?>
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