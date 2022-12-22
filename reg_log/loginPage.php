<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<link rel ="stylesheet" href = "/REPOSITORY/cssScripts/formStyle.css">
	<link rel="icon" type="image/x-icon" href="website_icon.ico">

<title>Login Page</title>


</head>

 
<body>



<section class ="formSection">
<h1 class ="login-title">Login Form</h1>

<form class= "loginForm" action="loginPageAction.php" method="POST">

<div class ="container">
<h3>Login as Admin</h3>

<div>
  
    <input type="text" name="username" id="username" placeholder ="Username"/>
</div>
	

<div>
	
    <input class="login-input" type="password" name="password" id="password" placeholder ="Password"/>
</div>
	

		
<div>
    <button class="login-button" type="submit">Login</button>
			
	<p><a href ="registerPage.php" target ="blank">Register</a> to become a member.</p>
</section>

</form>


</div>
</div>

</br>


<form class= "loginForm" action="loginPageActionCopy.php" method="POST">

<div class ="container">
<h3>Login as Visitor</h3>
<div>
  
    <input type="text" name="username" id="username" placeholder ="Username"/>
</div>

<div>
	
    <input class="login-input" type="password" name="password" id="password" placeholder ="Password"/>
</div>
	

		
<div>
    <button class="login-button" type="submit">Login</button>
			
	<p><a href ="registerPage.php" target ="blank">Register</a> to become a member.</p>
</section>

</form>




</body>
</html>
