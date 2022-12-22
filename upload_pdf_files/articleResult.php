<?php
include 'tryHeader.php';
?>

<title>Article Page</title>
<link rel="stylesheet" type="text/css" href="/REPOSITORY/cssScripts/exploreStyle.css">

</head>

<h1>Article Page</h1>



<table>
  <thead>
    <th>File ID</th>
    <th>Author Name</th>
    <th>Supervisor Name</th>
	<th>Faculty Name</th>
	<th>Project Title</th>
	<th>Project File</th>
    <th>Date of Upload</th>
  </thead>
  
<tbody>

<!--PHP Script Start-->
<?php

$proj_author=mysqli_real_escape_string($conn, $_GET['proj_author']);
$proj_title=mysqli_real_escape_string($conn, $_GET['proj_title']);

$sql = "SELECT * FROM project_article WHERE proj_author='$proj_author' AND proj_title='$proj_title' ";	# selecting all the columns from the table
$result = mysqli_query($conn, $sql);	# then execute the query in $squery.
$resultCheck = mysqli_num_rows($result);
		
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {	# fetch all the rows in the table and store the data in $result.
?>

  <tr>
  <!--fetch data from the respective columns in SQL table (project_article)-->
        
   <td><?php echo $row['proj_id'];?></td> <!--Project ID-->
	
    <td><?php echo $row['proj_author'];?> </td> <!--Author Name-->
	
    <td><?php echo $row ['proj_supervisor'];?> </td><!--Supervisor Name-->
    
	<td><?php echo $row ['proj_faculty'];?></td><!--Faculty-->
    
	<td><?php echo $row ['proj_title'];?></td><!--Project Title-->
    
	<td><a href="uploads/Ch8FutureWork.pdf" target='_blank'> <?php echo $row ['proj_file'];?></a></td><!--Project File-->
    
	<td><?php echo $row ['upload_date'];?></td><!--Date of Upload-->
 
  </tr>
</tbody>


<?php
     } # close 'WHILE'
     } # close 'IF'
?>


</table>


</body>
</html>
