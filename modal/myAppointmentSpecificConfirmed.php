<div class="modal fade action-sheet" id="specificAppointmentDetails<?php echo $appointmentList[$key]['bid']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">BOOKED SERVICE : <?php echo strtoupper($appointmentList[$key]['servicename']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                        <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=serviceConfirmation">
                           <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CAR MAKE</label>
                                    <input type="hidden" class="form-control" id="email1" name="bid"  value="<?php echo $appointmentList[$key]['bid']; ?>" readonly="">
                                    <input type="text" class="form-control" id="email1"  value="<?php echo strtoupper($appointmentList[$key]['car_model']); ?>,<?php echo strtoupper($appointmentList[$key]['car_brand']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DATE APPOINTMENT</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper( $appointmentList[$key]['date_appointment']); ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">TIME OF APPOINTMENT</label>
                                    <input type="text" class="form-control" id="email1" value="<?php echo strtoupper( $appointmentList[$key]['time_appointment']); ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">TRACKING</label>
                                    <input type="text" class="form-control" id="email1" name="tracking" value="<?php echo strtoupper( $appointmentList[$key]['tracking']); ?>" readonly="">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">ASSIGN EMPLOYEE</label>
                                    <?php 

                                    $bid = $appointmentList[$key]['bid'];
                                    $checker = $portCont->checkConfirmation($bid); 
                                    if(!empty($checker)){  
                                    
                                    ?>
                                    <input type="text" class="form-control" id="email1" name="emp_id" value="<?php echo strtoupper( $checker[0]['emp_id']); ?>" readonly="">
                                    <?php } else { ?>
                                    
                                    <select class="form-control" name="emp_id" id="email1" require="">
                                        <?php    

                                            $availEmployee = $portCont->ListAvailEmployee($code); 
                                            if(!empty($availEmployee)){
                                            foreach ($availEmployee as $key => $value) {
                                        ?>     
                                        <option value="<?php echo $availEmployee[$key]['emp_id']; ?>"><?php echo $availEmployee[$key]['emp_name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                    
                                    <?php } ?>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">ESTIMATE COMPLETION (MINUTES)</label>
                                    <?php 
                                    $bid = $appointmentList[$key]['bid'];
                                    $checker = $portCont->checkConfirmation($bid); 
                                    if(!empty($checker)){ 
                                    ?>
                                    <input type="number" class="form-control" id="email1" name="estimated_minutes" value="<?php echo $checker[0]['estimated_minutes']; ?>">
                                    <?php } else { ?> 
                                    <input type="number" class="form-control" id="email1" name="estimated_minutes" placeholder="10">
                                    <?php } ?>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">STATUS</label>
                                    <select class="form-control" name="status" id="email1" require="">
                                        <option><?php echo $appointmentList[$key]['status']; ?> (CURRENT)</option>
                                        <option value="IN-PROGRESS">IN-PROGRESS</option>
                                        <option value="COMPLETED">COMPLETED</option>
                                    </select>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="serviceConfirmation" class="btn btn-primary btn-block btn-lg">UPDATE APPOINTMENT</button>
                                </div>
                                <hr />
                                <div class="input-wrapper">
                                   <a href="home.php?view=CHAT&tracking=<?php echo $appointmentList[$key]['tracking']; ?>" class="btn btn-primary btn-block btn-lg">CHAT</a>
                                </div>
                            </div>

                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
