<form action="index.php?action=validate" method="POST">
<div class="input-group">
   <input type="text" name="email" id="username" class="input-field" placeholder="Username" >
</div>

<div class="input-group">
   <input type="password" name="password" id="password" class="input-field" placeholder="Password" >
</div>

<div class="input-group row">
    <div class="row">
        <input type="checkbox" id="remember" hidden>
        <label for="remember" class="custom-checkbox"></label>
        <label for="remember">Remember me?</label>
    </div>
    
    <div class="row">
        <a href="#" target="_blank">Forgot password?</a> 
    </div>
</div>


<div class="input-group">
   <button name="login">Login <i class="fa-solid fa-arrow-right"></i></button>
</div>
</form>