<?php
include 'tryHeader.php';
?>

<title>Browsing Page</title>
<link rel="stylesheet" type="text/css" href="/REPOSITORY/cssScripts/exploreStyle.css">

</head>

<h1>Search & Browse Through Publication List</h1>
<!--Search Section start-->
<section>
<form action="searchBoxAction.php" method="POST">
<input type="text" name ="search-box" placeholder="Search Article..."/>
	<button type="submit" name="submit-search">Search</button>
</form>
</section>
<!--Search Section End-->


<table>
  <thead>
    <th>File ID</th>
    <th>Author Name</th>
    <th>Supervisor Name</th>
	<th>Faculty Name</th>
	<th>Project Title</th>
	<th>Project File</th>
    <th>Date of Upload</th>
    <th>Action</th>
  </thead>
  
<tbody>

<!--PHP Script Start-->
<?php
			
        $sql = "SELECT * FROM project_article";	# selecting all the columns from the table
        $result = mysqli_query($conn, $sql);	# then execute the query in $squery.
        $resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {	# fetch all the rows in the table and store the data in $result.
?>

  <tr>
  <!--fetch data from the respective columns in SQL table (project_article)-->
        
    <td><?php echo $row['proj_id'];?> </td> <!--Project ID-->
	
    <td><?php echo $row['proj_author'];?> </td> <!--Author Name-->
	
    <td><?php echo $row ['proj_supervisor'];?> </td><!--Supervisor Name-->
    
	<td><?php echo $row ['proj_faculty'];?></td><!--Faculty-->
    
	<td><?php echo $row ['proj_title'];?></td><!--Project Title-->
    
	<td><?php echo $row ['proj_file'];?></td><!--Project File-->
    
	<td><?php echo $row ['upload_date'];?></td><!--Date of Upload-->
  <td>
<!--  <a href="editData.php?ID=<?php #echo $row['proj_id']; ?>" class="link-button"> Edit</a>-->
   <button id="sureThing" onclick="myFunction()"><a href="deleteData.php?proj_id=<?php echo $row['proj_id']; ?>" class="link-button"> Delete</a></button>
  </td>
  </tr>
  </tbody>


<?php
     } # close 'WHILE'
     } # close 'IF'
?>

<script>
function myFunction() {
  var txt;
  if (confirm("Are you sure about deleting?" )== true) {
    txt = "Document deleted!";
  } else {
    txt = "Operation Canceled!";
  }
  document.getElementById("sureThing").innerHTML = txt;
}
</script>



</table>


</body>
</html>


