<?php
include ('uploadScript.php');
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>



<center>
<h1>
Click To Download
</h1>

<p><a href= "../upload_pdf_files/uploads/PageOne.pdf" target='_blank'>Download Page One</a> </p>
<p><a href= "../upload_pdf_files/ufo_icon.ico" target='_blank'>Download Page Two</a></p>
<!--<p><a ="<?php// echo readfile($fileDestination);?>"></a></p>-->
<p><a></a></p>

</center>


<p>
The first argument, $filename, stores the filename or filename with the path that will download. 
</p>
<p>
The default value of the second parameter, $use_include_path, is false and will be set to true if the filename with the path is used in the first argument.
</p>
<p>
The third argument, $context, is used to indicate the context stream resource. This function returns the number of bytes read from the file mentioned in the first argument.
</p>

</br>
</br>
<p><strong>
int readfile ( string $filename [, bool $use_include_path = false [, resource $context ]] )
</strong></p>

</body>
</html>


<?php
/*
if (isset($_GET['path']))
{
// read filename
$filename = $_GET['path'];
// check if file exists or not
if(file_exists($filename)){
	
	// define header information
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header("Cache-Control: no-cache, must-revalidade");
	header("Expires: 0");
	header('Content-Description: attachment: filename="'.basename($filename).'"');
	header('Content-Length. '.filesize($filename));
	header('Pragma: public');
	
	
	// clear system output buffer
	flush();
	
	// read the size of the file
	readfile($filename);
	
	// terminate from the script
	
	die();
} 
	else {
	echo "File Does Not Exist!";
} 	else {
	echo "Filename is not Defined.";
	
}
}
	
	



*/
?>