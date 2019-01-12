<?php include('serverx.php') ?>
<!DOCTYPE html>
	
	<form method="post" action="loginx.php">

		<?php include('errorsx.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		
	</form>

</html>