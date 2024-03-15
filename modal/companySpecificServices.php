<div class="modal fade action-sheet" id="specificService" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">EDIT SERVICES :  <?php echo strtoupper($serviceSpecific[$key]['servicename']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=updateServices">
                            <input type="hidden" name="sid" class="form-control" id="email1"  value="<?php echo strtoupper($serviceSpecific[$key]['sid']); ?>">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE CATEGORY</label>
                                    <input type="text" name="category" class="form-control" id="email1"  value="<?php echo strtoupper($serviceSpecific[$key]['category']); ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE NAME</label>
                                    <input type="text" name="servicename" class="form-control" id="email1" value="<?php echo strtoupper( $serviceSpecific[$key]['servicename']); ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE AVAILABILITY</label>
                                    <select class="form-control" name="service_availability">
                                        <option value="AVAILABLE"><?php echo $serviceSpecific[$key]['service_availability']; ?> (CURRENT)</option>
                                        <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                                    </select>
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>


                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE IMAGE</label>
                                    <input type="file" name="photo" class="form-control" id="email1" placeholder="Image">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="updateService" class="btn btn-primary btn-block btn-lg">ADD SERVICES</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
