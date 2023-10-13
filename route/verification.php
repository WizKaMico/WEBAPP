 <!-- App Capsule -->
 <div id="appCapsule">

<div class="section mt-2 text-center">
    <h2>Hi! <?php echo $_GET['email']; ?></h2>
    <h4>Enter 4 digit email verification code</h4>
</div>
<div class="section mt-2 mb-5 p-3">
    <form action="index.php?action=approvestatus" method="POST">

        <div class="form-group">
            <input type="text" name="code" class="form-control verification-input" id="smscode" placeholder="••••" maxlength="4">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
        </div>

        <div class="form-button-group">
            <button type="submit" name="verify" class="btn btn-primary btn-block btn-lg">Verify</button>
        </div>

    </form>
</div>

</div>
<!-- * App Capsule -->