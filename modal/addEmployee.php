<div class="modal fade action-sheet" id="addEmployee" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD EMPLOYEE : <?php echo strtoupper($userDetails[0]['company']);  ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=addEmployee">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">EMPLOYEEID</label>
                                    <input type="text" name="emp_id" class="form-control" id="email1" value="<?php echo date('Ymd').'-'.rand(6666,9999);  ?>" readonly="" />
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">EMPLOYEE NAME</label>
                                    <input type="text" name="emp_name" class="form-control" id="email1" placeholder="Fullname">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DESIGNATION</label>
                                    <input type="text" name="emp_designation" class="form-control" id="email1">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                        
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="addEmployee" class="btn btn-primary btn-block btn-lg">BOOK</button>
                                </div>
                            </div>
                            

                               
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
