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
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<h2>Dashboard</h2>
      <p>Hello <?php echo $User->fname; ?> <?php echo $User->lname; ?> at <?php echo $User->email; ?>, you registered at <?php echo $User->reg_time; ?></p>
      <p><a href="/php_login/logout.php">Logout</a></p>
  	</div>

  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
