<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Log-in Page
        header("Location: loginPage.php");
    }
?>
