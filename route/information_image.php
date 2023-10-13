    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
           
            <div class="form-group basic">
                <div class="input-wrapper">
                    <label class="label" for="email1">Identity Verification</label>
                    <div id="camera-container">
                        <img id="captured-image" style="display: none; width:100%;">
                        <hr />
                        <video id="camera-preview" style="width:100%;" autoplay></video>
                        <button id="start-camera" class="btn btn-primary btn-block btn-lg">STEP 1 : Allow Camera</button>
                        <hr />
                        <button id="capture-image" class="btn btn-primary btn-block btn-lg">STEP 2 : Capture Image</button>
                        <hr />
                        <button id="retry-capture" class="btn btn-primary btn-block btn-lg">STEP 3 : Retry Capture</button>
                    </div>
                    <form id="image-form" method="POST" action="home.php?action=fullyRegisterAccountImage" enctype="multipart/form-data">
                        <input type="hidden" name="captured_image" id="captured-image-input">
                        <input type="file" accept="image/*" capture="camera" id="image-upload" name="image" style="display:none;">
                        <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
                        <hr />
                        <div class="input-wrapper">
                            <button type="submit" id="submit-image" class="btn btn-primary btn-block btn-lg">COMPLETE</button>
                        </div>
                    </form>
                </div>
            </div>





          

             
            </div>
        </div>
        <!-- Wallet Card -->

      

       
    </div>
    <!-- * App Capsule -->