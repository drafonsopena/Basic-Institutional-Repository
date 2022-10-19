<?php
//include auth_session.php file on all user panel pages
include("sessionPage.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
	<style>
	
	body {
    background: #3e4144;
}
	</style>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Welcome to IUM_REPO</p>
        <p>You can <a href="logout.php">Logout</a></p>
        <h3> OR </h3>
        <p>Go <a href="../homePage.php">Home</a></p>
    </div>
</body>
</html>
		
<?php
/*
Welcome <?php echo $_POST["name"]; 
*/

?>
<?php
/*
Your email address is:
 echo $_POST["email"];
	*/	
?>		
		
       





