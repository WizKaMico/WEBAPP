              
               <div id="appCapsule">
                <div class="section full mt-1">
                    <div class="section-title"><?php echo strtoupper($myCompany[0]['company']); ?></div>
                    <div class="wide-block pt-2 pb-2">

                        <ul class="nav nav-tabs style1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                    COMPANY 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                   LOGO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#invoice" role="tab">
                                   INVOICE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#history" role="tab">
                                   PAYMENT
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>COMPANY</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['company']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>ADDRESS</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['address']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>BARANGAY</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['barangay_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>CITY</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['city_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>PROVINCE</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['province_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>REGION</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['region_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel">
                            <form action="home.php?view=MYCOMPANY&action=uploadmycompanyphoto" enctype="multipart/form-data" method="POST">
                                    <?php if(!empty($myCompany[0]['image'])) { ?>
                                    <center><img src="<?php echo $myCompany[0]['image']; ?>" style=" width:50%; height:200px;"/></center>   
                                    <?php } else { ?>
                                    <center><img src="./assets/img/company_logo.png" style=" width:50%; height:200px;"/></center>   
                                    <?php } ?>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="email1">Company Logo</label>
                                            <input type="file" name="photo" class="form-control" id="email1" placeholder="Image">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                        <button type="submit" name="proceed" class="btn btn-primary btn-block btn-lg">UPLOAD</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="invoice" role="tabpanel">
                            <?php if(!empty($checkifpaymentwasmadethismonth)) { ?>
                            <h5 style="text-align:center;">NEXT BILL WILL BE GENERATED ON <?php $currentDate = $checkifpaymentwasmadethismonth[0]['date_created'];

                            // Get the next month's date
                            $nextMonth = date('Y-m-d', strtotime('+1 month', strtotime($currentDate)));

                            echo $nextMonth; ?></h5>
                            <?php } else { ?>
                            <iframe src="invoice/index.php?code=<?php echo strtoupper($myCompany[0]['code']); ?>" style="width:100%; height:500px;"></iframe>         
                            <center>
                            <div id="paypal-button-container" style="max-width:300px;">
                            </center>    
                            <?php } ?>
                            
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
                                            var redirectURL = 'home.php?view=MYCOMPANY&action=paypalTrans&transaction_id=' + transactionID + '&success=' + isSuccess + '&code=' + code + '&amount=' + amount;

                                            // Redirect to the new URL
                                            window.location.href = redirectURL;
                                        });
                                    }
                                }).render('#paypal-button-container');
                            </script>

                            </div>

                            <div class="tab-pane fade" id="history" role="tabpanel">
                            <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                <th>STATUS</th>
                                <th>DATE PAYED</th>
                                <th>NEXT BILL</th>
                                </tr>
                                <?php 
                                    $historyOfPayments = $portCont->myHistoryOfPayments($code);
                                    if(!empty($historyOfPayments)){
                                    foreach ($historyOfPayments as $key => $value) {
                                ?>   
                                <tr>
                                    <td><?php echo strtoupper($historyOfPayments[$key]['status']); ?></td>
                                    <td><?php echo $historyOfPayments[$key]['date_created']; ?></td>
                                    <td><?php $currentDate = $historyOfPayments[$key]['date_created'];

                                        // Get the next month's date
                                        $nextMonth = date('Y-m-d', strtotime('+1 month', strtotime($currentDate)));

                                        echo $nextMonth; ?></td>
                                </tr>
                                <?php } } ?>
                            </table>

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
                            </div>
                        </div>

                    </div>
                </div>
                </div>