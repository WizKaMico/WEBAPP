<div class="modal fade action-sheet" id="priceSpecificUpdate_<?php echo $serviceSpecificRating[$key]['spid'];?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">UPDATE PRICING</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=updateAmountPricingCarSpecific">
                            <input type="hidden" name="service_id" class="form-control" id="email1"  value="<?php echo $serviceId; ?>">
                            <input type="hidden" name="spid" class="form-control" id="email1"  value="<?php echo $serviceSpecificRating[$key]['spid']; ?>">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">VEHICLE TYPE</label>
                                    <select class="form-control" name="vehicle_type">
                                        <option value="<?php echo $serviceSpecificRating[$key]['vehicle_type']; ?>"><?php echo $serviceSpecificRating[$key]['vehicle_type']; ?> (CURRENT)</option>
                                    </select>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PRICING</label>
                                    <input type="text" name="price" class="form-control" value="<?php echo $serviceSpecificRating[$key]['price']; ?>" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="updateServiceAmount" class="btn btn-primary btn-block btn-lg">UPDATE PRICING</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
