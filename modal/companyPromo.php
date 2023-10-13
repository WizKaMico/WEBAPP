<div class="modal fade action-sheet" id="addBookingPromo" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD PROMO FOR <?php echo strtoupper($userDetails[0]['company']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=addPromo">
                              
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE TARGET</label>
                                    <select name="servicepromo" class="form-control" id="email1">
                                    <?php 
                                        $service = $portCont->getCompanyServices($code); 
                                        if(!empty($service)){
                                        foreach ($service as $key => $value) {
                                    ?>     
                                    <option value="<?php echo $service[$key]['sid']; ?>"><?php echo $service[$key]['servicename']; ?></option>
                                    <?php } } ?>
                                    </select>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PROMO NAME</label>
                                    <input type="text" name="promo_name" class="form-control" id="email1" placeholder="Promo Name">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DISCOUNT PERCENTAGE</label>
                                    <input type="number" name="percentage" class="form-control" id="email1" placeholder="Promo Percentage">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DATE AVAILABLE</label>
                                    <input type="date" name="available_date" class="form-control" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DATE EXPIRATION</label>
                                    <input type="date" name="expiration_date" class="form-control" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="promo" class="btn btn-primary btn-block btn-lg">ADD PROMO</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
