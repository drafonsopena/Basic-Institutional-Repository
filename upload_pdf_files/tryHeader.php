<?php
require 'dbConnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<link rel="icon" type="image/x-icon" href="website_icon.ico">
	<style>
	
	/*Navigation Start*/
.navSection {
	overflow: hidden;
	background-color: #631a35;
}

.navSection a {
	float: left;	
	padding: 10px;
	font-size: 18px;
	color: white;
	text-align: center;
	text-decoration: none;
}

.navSection a:hover {
	background-color: transparent;
	color: #195eb7;
	text-decoration: underline;
}

.navSection a:visited {
	color: white;
	text-decoration: underline;
}

h1 {
	text-align: center;
    color: black;
    font-size: xx-large;
    font-family: ' Calibri', 'sans-serif';
        }
/*Navigation End*/

	
	
	</style>
	


<body>
<section class ="navSection">

	<a href ="../homePage.php">Home</a>
	
	<a href ="../reg_log/logout.php">Logout</a>

</section>