 <!-- App Capsule -->
 <div id="appCapsule">

<div class="section mt-2 text-center">
    <h2>Hi!  <?php echo strtoupper($userSession[0]["email"]); ?></h2>
    <h4>Enter 4 digit email verification code</h4>
</div>
<div class="section mt-2 mb-5 p-3">
    <form action="security.php?action=security" method="POST">

        <div class="form-group">
            <input type="text" name="code" class="form-control verification-input" id="smscode" placeholder="••••" maxlength="4">
        </div>

        <div class="form-button-group">
            <button type="submit" name="verify" class="btn btn-primary btn-block btn-lg">Verify</button>
        </div>

    </form>
</div>

</div>
<!-- * App Capsule -->