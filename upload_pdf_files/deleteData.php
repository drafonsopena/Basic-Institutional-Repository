<?php
require 'dbConnection.php';
?>

<?php 

if (isset($_GET['proj_id'])) {
	$id = $_GET['proj_id'];
	
	$sql="DELETE FROM `project_article` WHERE `proj_id`='$id';";
	$query = mysqli_query($conn, $sql);	
}if (!$query){
	echo "Record Not Deleted!!!";
}else{
	echo "Deleted Successfully!";
}
	header("location: explorePage.php?proj_id=$id Was Deleted");

die();

?>

