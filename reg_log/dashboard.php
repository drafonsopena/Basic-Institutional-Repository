<?php
//include auth_session.php file on all user panel pages
include("sessionPage.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel ="stylesheet" href = "/REPOSITORY/cssScripts/formStyle.css">
	<link rel="icon" type="image/x-icon" href="website_icon.ico">
	<style>
	
	body {
    background: #3e4144;
}
	</style>

	
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Thank You for Registering to IUM_REPO</p>
        <p>You can <a href="logout.php">Logout</a></p>
        <h3> OR </h3>
		
	<h3>Go Home...</h3>
	<a href='../homePage.php'> 
  <img src='home_icon.ico' alt='Home Icon'></a>

	</div>
		
           </div>
</body>
</html>
	
       





