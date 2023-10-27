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
            
        <div class="section full mt-2 mb-2">
            <div class="section-title">Service TimeLine</div>
            <div class="wide-block">
                <!-- timeline -->
                <div class="timeline timed">
                <?php 
                        $tracking = $_GET['tracking'];
                        $historyList = $portCont->mybookingHistoryTrack($tracking); 
                        if (!empty($historyList)) {
                            foreach ($historyList as $key => $value) {
                ?>
                    <div class="item">
                        <span class="time"><?php echo $historyList[$key]['date_updated']; ?></span>
                        <div class="dot"></div>
                        <div class="content">
                            <h4 class="title">STATUS: <?php echo $historyList[$key]['TSTAT']; ?></h4>
                            <div class="text">DATE UPDATED : <?php echo $historyList[$key]['date_updated']; ?></div>
                            <div class="text">SERVICE : <?php echo $historyList[$key]['servicename']; ?></div>
                            <div class="text">APPOINTMENT : <?php echo $historyList[$key]['date_appointment']; ?> <?php echo $historyList[$key]['time_appointment']; ?></div>
                        </div>
                    </div>
                <?php } } ?>
                </div>
                <!-- * timeline -->
            </div>

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