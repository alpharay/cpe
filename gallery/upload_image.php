<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Computer Engineering Department</title>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link rel="stylesheet" href="../contact/css/reset.css" type="text/css" />
<link rel="stylesheet" href="../contact/css/master.css" type="text/css" />

<script type="text/javascript" src="../jquery/jquery.min.js"></script>
<script type="text/javascript" src="../contact/contact.js"></script>

</head>

<body>

<div id="container">

<p><a class="modal" href="#"><img src="upload_button.jpg" width="120" /></a></p><br />

<p><a class="modal1" href="#"><img src="../img/create album.png" width="120" /></a></p>

</div><!--end container-->

<div id="contact">
    <div id="close">Close</div>
	<div id="upload_header">Upload Image</div>
    <p class="success">Thanks! Your Image has been uploaded has been sent.<br /><br />
    
    </p>
    
    <div style="height:100;"></div>
    <form action="upload_successful.php" method="post" name="contactForm" id="contactForm" enctype="multipart/form-data">
    <p><input type="file" name="image" value="Upload Picture File" /></p>
    <p><input type="text" name="album" id="name" value="Album Name" /></p>
    <p><textarea cols="20" rows="5" wrap="hard" id="comment" name="description">Picture Description</textarea></p>
    <p><input type="submit" value="Upload Image" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" />
    </form>
</div>

<div id="mask"></div>

<div id="create_album">
    <div id="close">Close</div>
	<div id="album_create_header">Create Album</div>
    <p class="success">Thanks! Your Album has been created.</p>
    
    <div style="height:100;"></div>
    <form action="create_album.php" method="post" name="contactForm" id="contactForm" enctype="multipart/form-data">
    <p><input type="text" name="album" id="name" value="Album Name" /></p>
    <p><input type="file" name="logo" value="Upload Album Logo" /></p>
    <p><input type="file" name="overlay_logo" value="Upload Album Overlay Logo" /></p>
    <p><input type="submit" value="Create Album" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" />
    </form>
</div>

<div id="mask"></div>

<!--end contact form-->

</body>
</html>
