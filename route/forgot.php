 <!-- Login App Capsule -->
 <div id="appCapsule">

<div class="section mt-2 text-center">
    <!-- <img src="logo/logo.png" style="width:100%;"> -->
    <h4>Fill the form to recover account</h4>
</div>
<div class="section mt-2 mb-5 p-3">
    <form action="index.php?action=forgot" method="POST">
        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="email1">E-mail</label>
                <input type="email" name="email" class="form-control" id="email1" placeholder="Your e-mail">
                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
            </div>
        </div>

        <div class="form-button-group">
            <button type="submit" name="recover" class="btn btn-primary btn-block btn-lg">RECOVER</button>
        </div>

    </form>
</div>

</div>
<!-- * Login App Capsule -->