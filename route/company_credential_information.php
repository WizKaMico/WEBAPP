    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
            <form action="home.php?action=CompanyCredentialRegistrationVerification" enctype="multipart/form-data" method="POST">
           
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Registration Type</label>
                    <select name="business_type" class="form-control" required>
                        <option value="DTI">DTI</option>
                        <option value="SEC">SEC</option>
                    </select>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Business #</label>
                    <input type="text" name="business_number" class="form-control" id="email1" placeholder="Business #" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Identification Picture</label>
                    <input type="file" name="image_credentials" class="form-control" id="email1" placeholder="Image" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
              <div class="input-wrapper">
               <button type="submit" name="proceed" class="btn btn-primary btn-block btn-lg">PROCEED</button>
              </div>
            </div>

             </form>
            </div>
        </div>
        <!-- Wallet Card -->


       
    </div>
    <!-- * App Capsule -->