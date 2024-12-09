<?php 
	define('__CONFIG__', true);
	require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Index Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
	<link rel="stylesheet" href="/php_login/assets/css/style.css" />
</head>

  <body>
	<div class="uk-card uk-card-default uk-card-body uk-card-hover uk-card-large cardt">
		<?php 
			echo "<h2>Welcome to The Index Page.</h2> Today is: ";
			echo date("d-m-Y");
		?> 
		<p>
			<br><a class="uk-button uk-button-primary custbtn" href="/php_login/login.php">Login</a>
			<br><a class="uk-button uk-button-primary custbtn" href="/php_login/register.php">Register</a>
			<br><a class="uk-button uk-button-primary custbtn" href="/php_login/dashboard.php">Dashboard</a>
		</p>
	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
