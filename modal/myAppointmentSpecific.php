<div class="modal fade action-sheet" id="specificAppointmentDetails<?php echo $appointmentList[$key]['bid']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">BOOKED SERVICE : <?php echo strtoupper($appointmentList[$key]['servicename']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                           <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CAR MAKE</label>
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

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
