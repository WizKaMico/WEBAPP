<div class="modal fade action-sheet" id="specificServicePricing" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD PRICING</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=addPaymentService">
                            <input type="hidden" name="service_id" class="form-control" id="email1"  value="<?php echo $serviceId; ?>">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">VEHICLE TYPE</label>
                                    <select class="form-control" name="vehicle_type">
                                        <option value="SEDAN">SEDAN</option>
                                        <option value="COUPE">COUPE</option>
                                        <option value="SPORTS CAR">SPORTS CAR</option>
                                        <option value="STATION WAGON">STATION WAGON</option>
                                        <option value="HATCHBACK">HATCHBACK</option>
                                        <option value="CONVERTIBLE">CONVERTIBLE</option>
                                        <option value="SPORT-UTILITY VEHICLE (SUV)">SPORT-UTILITY VEHICLE (SUV)</option>
                                        <option value="MINIVAN">MINIVAN</option>
                                        <option value="PICKUP TRUCK">PICKUP TRUCK</option>
                                    </select>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PRICING</label>
                                    <input type="text" name="price" class="form-control" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="addServiceAmount" class="btn btn-primary btn-block btn-lg">ADD PRICING</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
