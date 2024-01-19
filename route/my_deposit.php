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
                    
                        <a href="#" class="button">
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
                <div class="col-12">
                  <iframe src="deposit/index.php?code=<?php echo strtoupper($myCompany[0]['code']); ?>" style="width:100%; height:500px;"></iframe>         
                            <center>
                            <div id="paypal-button-container" style="max-width:300px;">
                            </center>   

                            <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=PHP&disable-funding=card&intent=capture"></script>


                            <script>
                                // Render the PayPal button into #paypal-button-container
                                paypal.Buttons({
                                    style: {
                                        layout: 'vertical',
                                        color: 'gold',
                                        shape: 'pill',
                                        label: 'pay',
                                    },
                                    createOrder: function(data, actions) {
                                        // Create the order with PayPal
                                        return actions.order.create({
                                            purchase_units: [{
                                                amount: {
                                                    value: '<?php echo $myRentalSetting[0]['amount']; ?>', // Amount to be paid
                                                }
                                            }],
                                            intent: 'CAPTURE' // Explicitly set the intent to CAPTURE
                                        });
                                    },
                                    onApprove: function(data, actions) {
                                        // Capture the transaction details upon approval
                                        return actions.order.capture().then(function(details) {
                                            // Extract transaction ID and success status
                                            var transactionID = details.id;
                                            var isSuccess = true; // Set this based on your successful transaction condition
                                            var code = '<?php echo $code; ?>'; // PHP variable containing data for 'pcode'
                                            var amount = '<?php echo $myRentalSetting[0]['amount']; ?>';

                                            // Construct the URL with parameters
                                            var redirectURL = 'home.php?view=MYDEPOSIT&action=paypalTransDeposit&transaction_id=' + transactionID + '&success=' + isSuccess + '&code=' + code + '&amount=' + amount;

                                            // Redirect to the new URL
                                            window.location.href = redirectURL;
                                        });
                                    }
                                }).render('#paypal-button-container');
                            </script>
                </div>
            </div>
        </div>
         <!-- Stats -->


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
      
      
      