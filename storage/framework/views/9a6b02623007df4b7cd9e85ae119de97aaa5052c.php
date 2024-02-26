<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Login Form</h2>

<form action="<?php echo e(url('/log')); ?>" method="POST">
  
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <div class="container">
    <label for=email><b>Username</b></label>
    <input id="email" type="email" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input id="password" type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a> | <a href="#">Registrar</a></span>
  </div>
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Accident\resources\views/Index/login.blade.php ENDPATH**/ ?>