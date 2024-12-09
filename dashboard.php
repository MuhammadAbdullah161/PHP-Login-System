<?php 

	define('__CONFIG__', true);
	require_once "inc/config.php"; 

	Page::ForceLogin();

  $User = new User($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
    <link rel="stylesheet" href="/php_login/assets/css/style.css" />
  </head>

  <body>

  	<div class="uk-card uk-card-default uk-card-body uk-card-hover uk-card-large cardt">
  		<h2>Dashboard</h2>
      <h3>You are signed in</h3>
      <p>Hello <?php echo $User->fname; ?> <?php echo $User->lname; ?> at <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
      <p><a class="uk-button uk-button-primary custbtn" style="margin-right:2vw;" href="/php_login/index.php">Index Page</a>
      <a class="uk-button uk-button-primary custbtn" href="/php_login/logout.php">Logout</a></p>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
