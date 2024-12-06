<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Login Form</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<?php 
  			echo "Hello world. Today is: ";
  			echo date("d m Y");
  		?> 
  		<p>
  			<a href="/php_login/login.php">Login</a>
  			<a href="/php_login/register.php">Register</a>
			<a href="/php_login/dashboard.php">Dashboard</a>
  		</p>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
