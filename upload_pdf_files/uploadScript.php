<!-- PHP code to establish connection -->
<?php
include ("dbConnection.php");
?>



<?php
/*INSERT PDF file in root folder Start */

if (isset($_POST['submit-pdf'])) {
	
$authorName = $_POST['authorName'];
$supervisorName = $_POST['supervisorName'];
$facultyName = $_POST['facultyName'];
$projectName = $_POST['projectName'];
$uploadDate= date('Y-m-d H:i:s');

if (isset($_FILES['file-pdf']['name'])) {
$fileVar = $_FILES['file-pdf'];


# different arrays of INFO inside files
$fileName = $fileVar['name'];
$fileTmpName = $fileVar['tmp_name'];
$fileSize = $fileVar['size'];
$fileError = $fileVar['error'];
$fileType = $fileVar['type'];

# divide the file name from the file extension
$fileExtension = explode('.', $fileName);

# keep file extension
$fileActualExtension = strtolower(end($fileExtension));

// type of file allowed to be uploaded (PDF)
$fileAllowed = array('pdf');


# check IF the allowed extension are inside the variable ($fileActualExtension)
if (in_array($fileActualExtension, $fileAllowed)) {
# check for errors while uploading the file
if ($fileError === 0){
# check the file size
if ($fileSize < 1000000){
# give file an unique ID (micro seconds)
# and add the file extension on the unique ID
$fileID = uniqid('', true).".".$fileActualExtension;
# upload the file in the root folder "uploads"
$fileDestination = './uploads/'.$fileID;
# move file from temporay location to desired location (root folder)
move_uploaded_file($fileTmpName,$fileDestination);
# insert into DB and Table 
$sqlInsert= "INSERT INTO project_article (proj_author, proj_supervisor, proj_faculty, proj_title, proj_file, upload_date) VALUES ('$authorName', '$supervisorName', '$facultyName','$projectName', '$fileName', '$uploadDate')";

$iquery = mysqli_query($conn, $sqlInsert);

header("Location: explorePage.php?UploadSuccess");


} else {
	echo "This file is too big!";
}

} else {
	echo "Error Uploading the file.";
}

} else {
	echo "You can not upload this type of file.";
	echo "PDF only.";
}

}	
}	# close 'IF' statement

/*INSERT PDF file in root folder End */
?>



</body>
</html>

