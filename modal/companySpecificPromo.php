<div class="modal fade action-sheet" id="specificPromo" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">EDIT  <?php echo strtoupper( $promoSpecific[$key]['promo_name']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=updatePromo">
                              
                            
                            <input type="hidden" name="pid" class="form-control" id="email1" value="<?php echo $promoSpecific[$key]['pid']; ?>">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PROMO NAME</label>
                                    <input type="text" name="promo_name" class="form-control" id="email1" value="<?php echo $promoSpecific[$key]['promo_name']; ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DISCOUNT PERCENTAGE</label>
                                    <input type="number" name="percentage" class="form-control" id="email1" value="<?php echo $promoSpecific[$key]['percentage']; ?>" >
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DATE AVAILABLE</label>
                                    <input type="date" name="available_date" class="form-control" id="email1" value="<?php echo $promoSpecific[$key]['available_date']; ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DATE EXPIRATION</label>
                                    <input type="date" name="expiration_date" class="form-control" id="email1" value="<?php echo $promoSpecific[$key]['expiration_date']; ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="updatePromo" class="btn btn-primary btn-block btn-lg">UPDATE PROMO</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
