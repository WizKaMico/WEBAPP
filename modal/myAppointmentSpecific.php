<div class="modal fade action-sheet" id="specificAppointmentDetails<?php echo $appointmentList[$key]['bid']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">BOOKED SERVICE : <?php echo strtoupper($appointmentList[$key]['servicename']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                        <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=serviceAcceptance">
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
                                    <label class="label" for="email1">STATUS</label>
                                    <select class="form-control" name="status" id="email1" require="">
                                        <option><?php echo $appointmentList[$key]['status']; ?> (CURRENT)</option>
                                        <option value="CONFIRM">CONFIRM</option>
                                        <option value="DECLINE">DECLINE</option>
                                    </select>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="serviceAcceptance" class="btn btn-primary btn-block btn-lg">UPDATE APPOINTMENT</button>
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


        
