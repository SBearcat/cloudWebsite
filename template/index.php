<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="../static/css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Header -->
  <header class="header">
    <h4 class="logo">SHARED ART</h4>
    <a href="logout.php">Logout</a>
  </header>
  <!-- Hero Section -->
  <section class="intro">
    <div class="column">
      <img src="shared-art.jpg" alt="" class="profile">
    </div>
    <div class="column">
      <p>We are a website created for the purpose of sharing one's art. You may view all documents as long as they have not been taken down from the contributer's portfolio.  </p>
      <p>Consider contributing to keep the platform growing!</p>
    </div>
  </section>
  <!-- Stats Gallery Section -->
  <div class="gallery">
    <div class="thumbnail"> <a href="#"><img src="art.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Art Peices</h4>
      <p class="text_column">This section is dedicated for visually creative artists. Upload any art peices here.</p>
		<div class="button"> 
	  <form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload">
		  <input type="submit" value="UPLOAD">
			   </form>
	  </div>
    </div>
    <div class="thumbnail"> <a href="#"><img src="code.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Software Development</h4>
      <p class="text_column">This section is dedicated for programming projects of all languages. When uploading your project, please make sure you upload a compressed zip file that contains all files needed to compile your code.</p>
		<div class="button"> 
	  <form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload1">
		  <input type="submit" value="UPLOAD">
			   </form>
	  </div>
    </div>
    <div class="thumbnail"> <a href="#"><img src="alternative.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Alternatives</h4>
      <p class="text_column">Is there anything else that you would like to share? Feel free to upload your creativity here if you are unsure which section your peice belongs.</p>
		<div class="button"> 
	  <form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload2">
		  <input type="submit" value="UPLOAD">
			   </form>
	  </div>
    </div>
  </div>
  
  <!-- Footer Section -->
  <footer id="contact">
    <p class="hero_header"><strong>UPLOAD TO PORTFOLIO</strong></p>
    <div class="button"> 
	  <form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload3">
		  <input type="submit" value="UPLOAD">
			   </form>
	  </div>
  </footer>
  <!-- Copyrights Section -->
  <div class="copyright">&copy;ECU</div>
</div>
<!-- Main Container Ends -->
</body>
</html>
