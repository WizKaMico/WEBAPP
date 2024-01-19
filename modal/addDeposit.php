<div class="modal fade action-sheet" id="addDeposit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD SERVICES FOR <?php echo strtoupper($userDetails[0]['company']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">

                        <?php if(!empty($checkDeposit)) { ?>
                        <?php if($checkDeposit[0]['status'] == 'true'){ ?>  
                            <p>Hi! partner,  the deposit amount of <?php echo $checkDeposit[0]['amount'];?> has been succesfully credit on our account with reference number  <?php echo $checkDeposit[0]['transaction_id'];?> <br /> Wait for the admins approval for you to start selling your service</p>

                        <?php }else{ ?>
                            <p>Hi! partner,  the deposit amount of <?php echo $checkDeposit[0]['amount'];?> has not been succesfully credit on our account with reference number  <?php echo $checkDeposit[0]['transaction_id'];?>. It was Declined </p>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <a href="home.php?view=MYDEPOSIT" class="btn btn-primary btn-block btn-lg">DEPOSIT</a>
                                </div>
                            </div>

                        <?php } ?>
                        <?php }else{ ?>
                            <p>Hi! partner, we would need a deposit for us to fully approved your account. Its for our safety to ensure that we will be getting a CUT in-case you get a booking from our system </p>
                        
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <a href="home.php?view=MYDEPOSIT" class="btn btn-primary btn-block btn-lg">DEPOSIT</a>
                                </div>
                            </div>
                        <?php } ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
