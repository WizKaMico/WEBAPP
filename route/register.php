 <!-- Register App Capsule -->
 <div id="appCapsule">

<div class="section mt-2 text-center">
    <!-- <img src="logo/logo.png" style="width:100%;"> -->
    <h4>Fill the form to log in</h4>
</div>
<div class="section mt-2 mb-5 p-3">
      <form action="index.php?action=register" method="POST">
             <center>
                 <img src="./assets/img/logo-icon.png" style="width:50%; content-align:center;" />
            </center>   
         <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="email1">Phone</label>
                <!-- <input type="number" name="phone" id="email1"  class="form-control" pattern="[0-9]{11}" title="Please enter a valid 11-digit Philippine phone number" placeholder="09531599179" required> -->
                <input type="number" name="phone" id="email1" class="form-control" placeholder="09531599179" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" required>

                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
        </div>
        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="email1">E-mail</label>
                <input type="email" name="email" class="form-control" id="email1" placeholder="Your Email" required>
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
        </div>

        <div class="form-group basic">
            <div class="input-wrapper">
                <label class="label" for="email1">User Type</label>
                <select class="form-control" id="email1" name="designation" required>
                   <option>CHOOSE BELOW</option>
                   <option value="2">SERVICE OWNER</option>
                   <option value="3">CLIENT</option>
                </select>
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
        </div>

        <div class="form-group basic">
    <div class="input-wrapper">
        <label class="label" for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Type Password" required minlength="8">
        <i class="clear-input">
            <ion-icon name="close-circle"></ion-icon>
        </i>
        <span toggle="#password" class="toggle-password">Show</span>
    </div>
</div>

<div class="form-group basic">
    <div class="input-wrapper">
        <label class="label" for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Re-enter Password" required>
        <span id="password_match" class="password-match"></span>
    </div>
</div>

<div class="password-strength">
    <span class="weak" style="display: none;">Weak</span>
    <span class="medium" style="display: none;">Medium</span>
    <span class="strong" style="display: none;">Strong</span>
</div>




<script>
    document.querySelector('.toggle-password').addEventListener('click', function() {
        const passwordField = document.querySelector(this.getAttribute('toggle'));
        if (passwordField.getAttribute('type') === 'password') {
            passwordField.setAttribute('type', 'text');
            this.innerHTML = 'Hide';
        } else {
            passwordField.setAttribute('type', 'password');
            this.innerHTML = 'Show';
        }
    });

    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const weakSpan = document.querySelector('.weak');
        const mediumSpan = document.querySelector('.medium');
        const strongSpan = document.querySelector('.strong');

        if (password.length === 0) {
            weakSpan.style.display = 'none';
            mediumSpan.style.display = 'none';
            strongSpan.style.display = 'none';
            return;
        }

        if (password.length >= 8) {
            weakSpan.style.display = 'none';
        } else {
            weakSpan.style.display = 'inline';
            return;
        }

        if (!password.match(/[A-Z]/) || !password.match(/[a-z]/) || !password.match(/[0-9]/) || !password.match(/[^A-Za-z0-9]/)) {
            mediumSpan.style.display = 'inline';
        } else {
            mediumSpan.style.display = 'none';
        }

        if (password.length >= 8 && password.match(/[A-Z]/) && password.match(/[a-z]/) && password.match(/[0-9]/) && password.match(/[^A-Za-z0-9]/)) {
            strongSpan.style.display = 'none';
        } else {
            strongSpan.style.display = 'inline';
        }
    });

    document.getElementById('confirm_password').addEventListener('input', function() {
        const confirmPassword = this.value;
        const password = document.getElementById('password').value;
        const passwordMatchSpan = document.getElementById('password_match');

        if (confirmPassword === password && confirmPassword !== '') {
            passwordMatchSpan.textContent = 'Passwords match';
            passwordMatchSpan.classList.remove('password-not-match');
            passwordMatchSpan.classList.add('password-match');
        } else {
            passwordMatchSpan.textContent = 'Passwords do not match';
            passwordMatchSpan.classList.remove('password-match');
            passwordMatchSpan.classList.add('password-not-match');
        }
    });
</script>





        <div class="custom-control custom-checkbox mt-2">
            <input type="checkbox" class="custom-control-input" id="customChecka1" required>
            <label class="custom-control-label" for="customChecka1">
                I agree <a href="#" data-toggle="modal" data-target="#termsModal">terms and conditions</a>
            </label>
        </div>

        <div class="form-button-group">
            <button type="submit" name="register" class="btn btn-primary btn-block btn-lg">Register</button>
        </div>
    </form>
</div>
</div>
<!-- * Register App Capsule -->

<!-- Terms Modal -->
<div class="modal fade modalbox" id="termsModal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Terms and Conditions</h5>
            <a href="javascript:;" data-dismiss="modal">Close</a>
        </div>
        <div class="modal-body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
            </p>
            <p>
                Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                vulputate ligula.
            </p>
            <p>
                Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
        </div>
    </div>
</div>
</div>
<!-- * Terms Modal -->