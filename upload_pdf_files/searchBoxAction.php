<?php
include("tryHeader.php");

?>

<h1>Search Result</h1>

<?php

if(isset($_POST['submit-search'])) {
	$searchVar= mysqli_real_escape_string($conn, $_POST['search-box']); // contains the information we set inside the search box
	$sql= "SELECT * FROM project_article WHERE proj_author LIKE '%$searchVar%' OR proj_title LIKE '%$searchVar%' OR proj_faculty LIKE '%$searchVar%'";
	
	$result = mysqli_query($conn, $sql);
	$queryResult= mysqli_num_rows($result);

echo "There are ".$queryResult." results matching your search!\n";

if ($queryResult >0) {
	while ($row = mysqli_fetch_assoc($result)){
?>	
<center>	
	<h3>Your search results </h3>
		<!--fetch the data for the respective columns from the table.-->
     <a href= "articleResult.php?proj_title=<?php echo $row['proj_title']; ?>&proj_author=<?php echo $row['proj_author']; ?>">
	 <div>
        <p> Written By: <?php echo $row['proj_author']; ?></p>
        <p>Thesis Title: <?php echo $row['proj_title']; ?></p>
        <p>Faculty Name: <?php echo $row['proj_faculty']; ?></p>
	</div>
	</a>	
</center>
<?php		
	}

}
}

?>
 	
</body>
</html>