    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
            <form action="home.php?action=fullyRegisterAccountIdentification" enctype="multipart/form-data" method="POST">
           
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Identification</label>
                    <select name="identification" class="form-control">
                        <option value="Passport">Passport</option>
                        <option value="PhilHealth">PhilHealth</option>
                        <option value="SSS">SSS</option>
                        <option value="PhilSys">PhilSys</option>
                    </select>
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Identification #</label>
                    <input type="text" name="identification_number" class="form-control" id="email1" placeholder="Id #">
                    <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                </div>
            </div>

            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Identification Picture</label>
                    <input type="file" name="photo" class="form-control" id="email1" placeholder="Image">
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