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

    
        
        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <a href="home.php?view=MYBOOKING">
                        <div class="title">TODAY</div>
                        <div class="value"><?php echo $clientBookingDetailsToday[0]['total']; ?></div>
                        <a>
                    </div>
                </div>
               
                <div class="col-6">
                    <div class="stat-box">
                        <a href="home.php?view=MYBOOKING">
                        <div class="title">TOTAL BOOKINGS</div>
                        <div class="value"><?php echo $clientBookingDetails[0]['total']; ?></div>
                        <a>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <div class="section" style="margin-top:20px;">

        <div class="wide-block pt-2 pb-2">
        <form class="search-form" method="POST" action="home.php?view=HOME&action=SEARCH">
            <div class="form-group searchbox">
                <input type="text" name="keyword" class="form-control search-input" placeholder="Enter Keywords">
            </div>
            <hr />
            <div class="form-group searchbox">
                <select class="form-control search-option" name="option">
                    <option value="COMPANY">COMPANY</option>
                    <option value="CITY">CITY</option>
                </select>
            </div>
            <hr />
            <div class="form-group searchbox">
                <button class="btn btn-primary" name="search" style="width:100%;">FILTER</button>
            </div>
        </form>

        </div>

        <div class="row mt-2 companyContainer">
            <?php if(!empty($_GET['message'])){ ?>
            <?php if($_GET['message'] == 'SEARCHCOMPANY'){?>
            <h1>search company</h1>
            <?php 
            $keyword = $_GET['keyword'];
            $companySearch = $portCont->searchITCOMPANY($keyword);
             if(!empty($companySearch)){
                foreach ($companySearch as $key => $value) {
            ?>
            <div class="col-6 filtered" style="margin-top:10px;">
                <a href="home.php?view=SPECIFICSTORE&ccode=<?php echo $companySearch[$key]['code']; ?>">
                    <div class="stat-box">
                        <?php if(!empty($companySearch[$key]['image'])){ ?>
                        <img src="<?php echo $companySearch[$key]['image']; ?>" alt="image" class="imaged w-100" style="width:100%; height:150px;">     
                        <?php } else { ?>
                        <img src="./assets/img/company_logo.png" alt="image" class="imaged w-100" style="width:100%; height:150px;">
                        <?php } ?>
                        <div class="title" style="text-align:center;"><?php echo strtoupper($companySearch[$key]['company']); ?></div>
                        <div class="city" style="font-size:10px; text-align:center;">📍 <?php echo strtoupper($companySearch[$key]['city_text']); ?></div>
                    </div>
                </a>
            </div>
            <?php } } ?>
            <?php }else{ ?>
                <h1>search city</h1>
            <?php 
            $keyword = $_GET['keyword'];
            $citySearch = $portCont->searchITLOCATION($keyword);
             if(!empty($citySearch)){
                foreach ($citySearch as $key => $value) {
            ?>
            <div class="col-6 filtered" style="margin-top:10px;">
                <a href="home.php?view=SPECIFICSTORE&ccode=<?php echo $citySearch[$key]['code']; ?>">
                    <div class="stat-box">
                        <?php if(!empty($citySearch[$key]['image'])){ ?>
                        <img src="<?php echo $citySearch[$key]['image']; ?>" alt="image" class="imaged w-100" style="width:100%; height:150px;">     
                        <?php } else { ?>
                        <img src="./assets/img/company_logo.png" alt="image" class="imaged w-100" style="width:100%; height:150px;">
                        <?php } ?>
                        <div class="title" style="text-align:center;"><?php echo strtoupper($citySearch[$key]['company']); ?></div>
                        <div class="city" style="font-size:10px; text-align:center;">📍 <?php echo strtoupper($citySearch[$key]['city_text']); ?></div>
                    </div>
                </a>
            </div>
            <?php } } ?>
            <?php } ?>
            <?php }else{ ?>
            <?php 
                $company = $portCont->getCompanyServicesClientView(); 
                if(!empty($company)){
                    foreach ($company as $key => $value) {
            ?>   
            <div class="col-6 filtered" style="margin-top:10px;">
                <a href="home.php?view=SPECIFICSTORE&ccode=<?php echo $company[$key]['code']; ?>">
                    <div class="stat-box">
                        <?php if(!empty($company[$key]['image'])){ ?>
                        <img src="<?php echo $company[$key]['image']; ?>" alt="image" class="imaged w-100" style="width:100%; height:150px;">     
                        <?php } else { ?>
                        <img src="./assets/img/company_logo.png" alt="image" class="imaged w-100" style="width:100%; height:150px;">
                        <?php } ?>
                        <div class="title" style="text-align:center;"><?php echo strtoupper($company[$key]['company']); ?></div>
                        <div class="city" style="font-size:10px; text-align:center;">📍 <?php echo strtoupper($company[$key]['city_text']); ?></div>
                    </div>
                </a>
            </div>
            <?php } } ?>
            <?php } ?>
        </div>

          
        </div>
        <!-- * Stats -->
    

     