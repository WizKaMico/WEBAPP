    <!-- App Capsule -->
    <div id="appCapsule">

             <?php  if($userSession[0]['designation'] == 2){ ?>
             <?php include('./route/home/owner.php'); ?>
             <?php } else { ?>
             <?php include('./route/home/client.php'); ?>
             <?php } ?>


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