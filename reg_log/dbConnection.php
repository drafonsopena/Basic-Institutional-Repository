<!DOCTYPE html>
<html>
<head>
<title>A Page</title>
</head>
<body>


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



<?php
// SQL query to select data from table and order column 'password' in decrescent (bigger number first)
/*
$sql = " SELECT * FROM registration ORDER BY password DESC ";
$result = $mysqli->query($sql);
$mysqli->close();

*/
?>

<?php // echo file_get_contents ("../htmlPages/homePage.php");

# include ("../htmlPages/homePage.php")  # this line is also to include an external php file



?>



</body>
</html>

