	<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
<div class="header">
	<h2>Login</h2>
</div>
<form method="post" action="ck.php">
	

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" placeholder="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="confpass" placeholder="Re enter the password">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="Email" value="">
	</div>
	<div class="input-group">
		<button type="submit" class="btn btn-primary" name="Login_btn">Login</button>
	</div>
	<div class="input-group">
		<label>Remeber me</label>
		<input type="checkbox" name = "remember" value = "1">
		
	</div>
	<p>
		Forgoten password? <a href="forgotpasswordpage.php">Reset password</a><br>
		A new member? <a href="signUp.php"> Sign Up</a>

	</p>
</form>
</body>
</html>
