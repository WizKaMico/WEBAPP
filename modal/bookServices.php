<div class="modal fade action-sheet" id="bookService<?php echo $company[$key]['sid']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">BOOK SERVICE : <?php echo strtoupper($company[$key]['servicename']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=bookNow">
                            <input type="hidden" name="sid" class="form-control" id="email1" value="<?php echo $company[$key]['sid']; ?>">
                            <input type="hidden" name="ccode" class="form-control" id="email1" value="<?php echo $_GET['ccode']; ?>"> 
                            
                            <?php  
                                    $service_id = $company[$key]['sid'];
                                      $serviceSpecificRating = $portCont->showServiceAmountPrice($service_id);
                                        if(!empty($serviceSpecificRating)){ 
                                         
                            ?>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CAR TYPE</label>
                                    <select name="price" class="form-control">
                                    <?php foreach ($serviceSpecificRating as $key => $value) {  ?>
                                    <option value="<?php echo $serviceSpecificRating[$key]['price']; ?>"><?php echo $serviceSpecificRating[$key]['vehicle_type']; ?> | <?php echo $serviceSpecificRating[$key]['price']; ?></option>
                                    <?php } ?>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CAR MODEL</label>
                                    <input type="text" name="car_model" class="form-control" id="email1" placeholder="Car Model">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CAR BRAND</label>
                                    <input type="text" name="car_brand" class="form-control" id="email1" placeholder="Car Brand">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DATE OF APPOINTMENT</label>
                                    <input type="date" name="date_appointment" class="form-control" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">TIME</label>
                                    <input type="time" name="time_appointment" class="form-control" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">CAR IMAGE</label>
                                    <input type="file" name="photo" class="form-control" id="email1" placeholder="Image">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                           <?php if($company[$key]['status'] == 'AVAILABLE') { ?>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">PROMO CODE</label>
                                    <input type="text" name="promo_code" class="form-control" id="email1" placeholder="Promo Code">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <?php } ?>
                            

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="book" class="btn btn-primary btn-block btn-lg">BOOK</button>
                                </div>
                                <hr />
                                <div class="input-wrapper">
                                   <a href="home.php?view=SERVICERATING&sid=<?php echo $company[$key]['sid']; ?>" class="btn btn-primary btn-block btn-lg">RATINGS</a>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
