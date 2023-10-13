 <!-- Login App Capsule -->
 <div id="appCapsule">

<div class="section mt-2 text-center">
    <!-- <img src="logo/logo.png" style="width:100%;"> -->
    <h4>Fill the form to log in</h4>
</div>
<div class="section mt-2 mb-5 p-3">
    <form action="index.php?action=newpass" method="POST">

        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="password1">New Password</label>
                <input type="hidden" name="email" class="form-control" id="email1" value="<?php echo $_GET['email']; ?>">
                <input type="password" name="password" class="form-control" id="password1" placeholder="Your password">
                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
            </div>
        </div>

        <div class="form-button-group">
            <button type="submit" name="update" class="btn btn-primary btn-block btn-lg">UPDATE PASSWORD</button>
        </div>

    </form>
</div>

</div>
<!-- * Login App Capsule -->