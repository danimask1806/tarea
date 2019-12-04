<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>MA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="123456789.svg"> 
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<input type="submit" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="loginSA.php">Sign up</a>
		</p>
	</form>


</body>
</html>
