<div class="modal fade action-sheet" id="specificEmployee" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">EMPLOYEE ID : <?php echo $employeeSpecific[$key]['emp_id']; ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                        <form  method="POST" enctype="multipart/form-data" action="home.php?view=HOME&action=updateEmployee">
                           <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">EMPLOYEEID</label>
                                    <input type="text" name="emp_id" class="form-control" id="email1" value="<?php echo $employeeSpecific[$key]['emp_id']; ?>" readonly="" />
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">EMPLOYEE NAME</label>
                                    <input type="text" name="emp_name" class="form-control" id="email1" value="<?php echo $employeeSpecific[$key]['emp_name']; ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">DESIGNATION</label>
                                    <input type="text" name="emp_designation" class="form-control" id="email1" value="<?php echo $employeeSpecific[$key]['emp_designation']; ?>">
                                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                   <button type="submit" name="updateEmployee" class="btn btn-primary btn-block btn-lg">UPDATE EMPLOYEE</button>
                                </div>
                            </div>
                            
                         </div>
                      </form>  
                    </div>
                </div>
            </div>
        </div>


        
