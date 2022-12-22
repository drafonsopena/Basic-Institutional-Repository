<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	<link rel ="stylesheet" href = "/REPOSITORY/cssScripts/formStyle.css">
	<link rel="icon" type="image/x-icon" href="website_icon.ico">

<title>Registration Page</title>
</head>

 
<body>

<!--Start Form Section-->
<section>
<h1 class="login-title">Register as Admin</h1>

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
	
	<div class ="radioButton">

    <button type ="submit" name="submit" value="Register">Register</button> <br/>
    <p >Already a member? <a href ="loginPage.php" target ="blank">Login here</a>!</p>
</div>

</form>

</br>

</section>
<!--End Form Section-->
</br>

<form class ="registerForm" action ="registerPageActionCopy.php" method ="POST">
   <h1>Register as Visitor</h1>
<div class ="container">

    <label for ="username">User Name</label>
    <input type ="text" name ="username" id ="userName" placeholder ="E.g: John Doe" required/>
	
	<label for ="first Name">First Name</label>
    <input type ="text" name ="user_firstname" id ="F_Name" placeholder ="E.g: John" required/>
	
	<label for ="Last Name">Last Name</label>
    <input  type ="text" name ="user_lastname" id ="L_Name" placeholder ="E.g: Doe" required/>

	<label for ="password">Password</label>
    <input  type ="password" name ="password" id ="password" placeholder ="E.g: Password" required/>
	
	<div class ="radioButton">

    <button type ="submit" name="submit" value="Register">Register</button> <br/>
    <p >Already a member? <a href ="loginPage.php" target ="blank">Login here</a>!</p>
</div>

</form>



</body>
</html>