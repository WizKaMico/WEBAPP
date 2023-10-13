<div class="modal fade action-sheet" id="addService" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD SERVICES FOR <?php echo strtoupper($userDetails[0]['company']); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=addServices">
                              
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE CATEGORY</label>
                                    <input type="text" name="category" class="form-control" id="email1" placeholder="Service Category">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">SERVICE NAME</label>
                                    <input type="text" name="servicename" class="form-control" id="email1" placeholder="Service Name">
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
                                   <button type="submit" name="service" class="btn btn-primary btn-block btn-lg">ADD SERVICES</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
