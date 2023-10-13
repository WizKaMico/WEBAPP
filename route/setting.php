    <!-- App Capsule -->
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
                    <div class="wallet-card">
                        <!-- Balance -->
                        <div class="balance">
                            <div class="left">
                                <span class="title">WELCOME CLIENT !</span>
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

      <!-- pilled tab -->
      <div class="tab-pane fade show active" id="pilled" role="tabpanel">

            <div class="section full mt-1">
                <div class="section-title">Personal Information</div>
                <div class="wide-block pt-2 pb-2">

                    <ul class="nav nav-tabs style1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#credential" role="tab">
                                Credential
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">
                                Information
                            </a>
                        </li>
                        <?php  if($userSession[0]['designation'] == 2){ ?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#company" role="tab">
                                Company
                            </a>
                        </li>
                        <?php } else { } ?>
                    </ul>
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade show active" id="credential" role="tabpanel">
                            CREDENTIAL
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">EMAIL</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userSession[0]['email']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PHONE</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userSession[0]['phone']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="information" role="tabpanel">
                           INFORMATION
                           <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">FIRSTNAME</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['fname']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">MIDDLENAME</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['mname']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">LASTNAME</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['lname']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">ADDRESS</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['address']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">BARANGAY</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['barangay']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">REGION</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['region']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PROVINCE</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['province']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CITY</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['city']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="company" role="tabpanel">
                            COMPANY
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">COMPANY</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['company']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">ADDRESS</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['address']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">BARANGAY</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['barangay']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">REGION</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['region']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PROVINCE</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['province']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CITY</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper($userDetails[0]['city']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                           
                        </div>
                        
                    </div>

                </div>
            </div>


</div>
<!-- * pilled tab -->
           
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