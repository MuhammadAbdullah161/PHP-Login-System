<?php 

	define('__CONFIG__', true);

	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$return = [];

		$fname = Filter::Name( $_POST['fname'] );
		$lname = Filter::Name( $_POST['lname'] );
		$email = Filter::Email( $_POST['email'] );

		$user_found = User::Find($email);

		if($user_found) {
			$return['error'] = "You already have an account. <a href='/php_login/login.php'>Log In?</a>";
			$return['is_logged_in'] = false;
		} else {
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			
			$addUser = $con->prepare("INSERT INTO users(fname, lname, email, password) VALUES(:fname, :lname, LOWER(:email), :password)");
			$addUser->bindParam(':fname', $fname, PDO::PARAM_STR);
			$addUser->bindParam(':lname', $lname, PDO::PARAM_STR);
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->lastInsertId();

			$_SESSION['user_id'] = (int) $user_id;

			$return['redirect'] = '/php_login/dashboard.php?message=welcome';
			$return['is_logged_in'] = true;
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		exit('Invalid URL');
	}
?>
