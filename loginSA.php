<?php

	// variable declaration

	$username = "";
	$email    = "";
	$errors = array();
	// connect to database
	$db = mysqli_connect('db4free.net', 'tareasroot', 'password', 'ultimatumgamesdb');
	if (mysqli_connect_errno()) {
    		echo ("Falló la conexión: %s\n". mysqli_connect_error());
    		exit();
	}
	// REGISTER USER
	if (isset($_POST['register'])) {
		echo "entro ";
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password']);
		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password_1')";
			if ($db->query($query) === TRUE) {
			    echo "new user";
			} else {
			    echo "Error: " . $query . "<br>" . $db->error;
			}
			
		}else {
			foreach ($errors as $error) : 
				echo $error ;
			endforeach; 
		}
	}
	// ... 
	// LOGIN USER
	if (isset($_POST['login'])) {
		
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (count($errors) == 0) {
			echo " no errors";
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				echo "login sucess ";
			}else {
				array_push($errors, "Wrong username/password combination");
				echo "user not exist";
			}
		}else {
			echo " Error: ";
			foreach ($errors as $error) : 
				echo $error ;
			endforeach; 
		}
	}
	if (isset($_POST['Entro'])) {
		
		$username = mysqli_real_escape_string($db, $_POST['username']);
		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE username='$username'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				echo $results;
			}else {
				array_push($errors, "Wrong username");
				echo "user not exist";
			}
		}else {
			echo " Error: ";
			foreach ($errors as $error) : 
				echo $error ;
			endforeach; 
		}
	}

	mysqli_close($db);
?>
