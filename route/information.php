    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
            <form action="home.php?action=fullyRegisterAccount" method="POST">
           
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Firstname</label>
                    <input type="text" name="fname" class="form-control" id="email1" placeholder="Firstname" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Middlename</label>
                    <input type="text" name="mname" class="form-control" id="email1" placeholder="Middlename" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Lastname</label>
                    <input type="text" name="lname" class="form-control" id="email1" placeholder="Lastname" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="password1">Region</label>
                    <select name="region" class="form-control" id="region"></select>
                    <input type="hidden" class="form-control" name="region_text" id="region-text" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="password1">Province</label>
                    <select name="province" class="form-control" id="province"></select>
                    <input type="hidden" class="form-control" name="province_text" id="province-text" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="password1">City</label>
                    <select name="city"  class="form-control" id="city"></select>
                    <input type="hidden"  class="form-control" name="city_text" id="city-text" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="password1">Barangay</label>
                    <select name="barangay"  class="form-control" id="barangay"></select>
                    <input type="hidden"  class="form-control" name="barangay_text" id="barangay-text" required>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="password1">Address</label>
                    <input type="text" name="address" class="form-control" id="password1" placeholder="Street Address" required>
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