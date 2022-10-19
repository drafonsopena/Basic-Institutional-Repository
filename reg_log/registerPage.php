<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<link rel ="stylesheet" href = "style.css"/>

<title>Registration Page</title>
</head>

 
<body>

<!--Start Form Section-->
<section>
<h1 class="login-title">Register Form</h1>

<form class ="registerForm" action ="registerPageAction.php" method ="POST">
   
<div class ="container">

    <label for ="username">User Name</label>
    <input type ="text" name ="username" id ="userName" placeholder ="E.g: John Doe" required/>
	
	<label for ="first Name">First Name</label>
    <input type ="text" name ="user_firstname" id ="F_Name" placeholder ="E.g: John" required/>
	
	<label for ="Last Name">Last Name</label>
    <input  type ="text" name ="user_lastname" id ="L_Name" placeholder ="E.g: Doe" required/>

	<label for ="password">Password</label>
    <input  type ="password" name ="password" id ="password" placeholder ="E.g: Password" required/>


    <button type ="submit" name="submit" value="Register">Register</button> <br/>
    <p >Already a member? <a href ="loginPage.php" target ="blank">Login here</a>!</p>
</div>

</form>
</section>
<!--End Form Section-->




</body>
</html>