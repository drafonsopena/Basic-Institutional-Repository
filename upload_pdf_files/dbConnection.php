<!-- PHP code to establish connection -->


<?php

// Server is localhost with
// port number 3306
    $host = 'localhost';
    $user = 'drap';
    $password = 'the best';
    $database = 'ium_repository';// Database name
 
    $conn = mysqli_connect($host, $user, $password, $database);
 
// Checking for connections
    if (!$conn){
	?>
        <script> alert("ERROR: Connection Unsuccessful!!!")</script>
<?php
    }
?>




