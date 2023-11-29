              
               <div id="appCapsule">
                <div class="section full mt-1">
                    <div class="section-title"><?php echo strtoupper($myCompany[0]['company']); ?></div>
                    <div class="wide-block pt-2 pb-2">

                        <ul class="nav nav-tabs style1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                    COMPANY 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                   LOGO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#invoice" role="tab">
                                   INVOICE
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-2">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <form>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>COMPANY</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['company']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>ADDRESS</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['address']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>BARANGAY</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['barangay_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>CITY</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['city_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>PROVINCE</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['province_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label>REGION</label>
                                            <input type="text"  class="form-control" id="email1" value="<?php echo strtoupper($myCompany[0]['region_text']); ?>" readonly="">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel">
                            <form action="home.php?view=MYCOMPANY&action=uploadmycompanyphoto" enctype="multipart/form-data" method="POST">
                                    <?php if(!empty($myCompany[0]['image'])) { ?>
                                    <center><img src="<?php echo $myCompany[0]['image']; ?>" style=" width:50%; height:200px;"/></center>   
                                    <?php } else { ?>
                                    <center><img src="./assets/img/company_logo.png" style=" width:50%; height:200px;"/></center>   
                                    <?php } ?>
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="email1">Company Logo</label>
                                            <input type="file" name="photo" class="form-control" id="email1" placeholder="Image">
                                            <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                                        </div>
                                    </div>

                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                        <button type="submit" name="proceed" class="btn btn-primary btn-block btn-lg">UPLOAD</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="invoice" role="tabpanel">
                            <iframe src="invoice/index.php?code=<?php echo strtoupper($myCompany[0]['code']); ?>" style="width:100%; height:500px;"></iframe>         


                            </div>
                        </div>

                    </div>
                </div>
                </div>