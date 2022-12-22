<?php 
include("tryHeader.php");
?>
<title>Upload Page</title>

<link rel="stylesheet" type="text/css" href="/REPOSITORY/cssScripts/uploadStyle.css"/>

</head>
<body>


<section>
<h1>UPLOAD FORM</h1>
<div class = "container">

<form class= "form" action="uploadScript.php" method="POST" enctype="multipart/form-data">

<div>
<label>Author Name</label> <input type="text" name="authorName" placeholder="John Doe" required/>
     
<label>Supervisor Name</label> <input type="text" name="supervisorName" placeholder="Ms. Jane Doe " required/>
	 
	 
<label for="Choose a Faculty">Choose a Faculty</label>
</br>
</br>
<!--DROP DOWN MENU OF THE COURSES (only two examples)-->
<div class="facultyName">
  <select name="facultyName" id="facultyNameID">
    <optgroup label="--Select Faculty--" required>
	<option value="">OPTIONS</option>
      <option value="Faculty of Education">Faculty of Education</option>
      <option value="Faculty of ICT">Faculty of ICT</option>
      <option value="Faculty of HS">Faculty of Health Sciences</option>
    </optgroup>
  </select>
  </br>
  </br>
</div>	

<label>Project Title</label> <input type="text" name="projectName" placeholder="E.g: The Bright Side of Life" required/>
	 
<label>File Name</label> <input type="text" name="projectTitle" placeholder="File Name" required/>
<p align="center">Max<strong> 10MB </strong>|<strong> PDF Only</strong></p> 
<input type="file" name="file-pdf" accept=".pdf"/>
	</div>     


<button type="submit" name="submit-pdf">Upload</button>

<p>Please become a member to upload a Document <a href ="../reg_log/registerPage.php" target ="blank">Register here</a>!</p>
</form>


</div>
</section>

</body>
</html>

