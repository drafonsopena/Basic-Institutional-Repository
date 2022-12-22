<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../reg_log/loginPage.php");
        exit();
   
	}
?>