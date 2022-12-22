

<?php
    require('dbConnection.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
		
        $user_firstname    = stripslashes($_REQUEST['user_firstname']);
        $user_firstname    = mysqli_real_escape_string($conn, $user_firstname);
		
		$user_lastname    = stripslashes($_REQUEST['user_lastname']);
        $user_lastname    = mysqli_real_escape_string($conn, $user_lastname);
		
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
		
		
        $create_datetime = date("Y-m-d H:i:s");
		
		
        $query    = "INSERT into `repository users` (`username`,`user_firstname`,`user_lastname`, `password`, `create_datetime`) VALUES ('$username', '$user_firstname','$user_lastname', '" . md5($password) . "', '$create_datetime');";
        
		$result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<center><div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to go <a href='../homePage.php'>Home</a></p>
                  </div></center>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registrationPage.php'>registration</a> again.</p>
                  </div>";
        }
    }
?>


