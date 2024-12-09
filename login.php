<?php 

	define('__CONFIG__', true);
	require_once "inc/config.php"; 

	Page::ForceDashboard();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
	<link rel="stylesheet" href="/php_login/assets/css/style.css" />
  </head>

  <body>

  	<div class="uk-card uk-card-default uk-card-body uk-card-hover cardt">
		<form class="uk-form-stacked js-login" style="text-align:left; padding-left: 7vw; padding-right:7vw">
			
			<h2 style="text-align:center;">Login</h2>

		    <div class="uk-margin">
		        <label class="uk-form-label" for="eml">Email</label>
		        <div class="uk-form-controls">
			        <input class="uk-input" id="eml" type="email" required placeholder="email@email.com">
		        </div>
		    </div>

			<div class="uk-margin">
		        <label class="uk-form-label" for="psw">Password</label>
		        <div class="uk-form-controls">
		            <input class="uk-input" id="psw" type="password" required placeholder="Your Password">
			    </div>
		    </div>

		    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

		    <div class="uk-margin">
		        <button class="uk-button uk-button-primary custbtn" type="submit">Login</button>
		    </div>

		</form>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
