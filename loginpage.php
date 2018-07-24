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
<form method="post" action="login.php">
	

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Username" >
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" placeholder="password" >
	</div>
	<div class="input-group">
		<button type="submit" class="btn btn-primary" name="Login_btn">Login</button>
	</div>
	<p>
		Forgoten password? <a href="forgotpasswordpage.php">Reset password</a><br>
		A new member? <a href=" signuppage.php"> Sign Up</a>

	</p>
</form>
</body>
</html>