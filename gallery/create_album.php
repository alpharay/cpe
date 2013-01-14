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
<form action="../gallery/creation_successful.php" method="post" name="contactForm" id="contactForm" enctype="multipart/form-data">
    <p><label>Album Name</label></p>
    <p><input type="text" name="album" id="name" value="Album Name" /></p>
    <p><label>Album Picture</label></p>
    <p><input type="file" name="logo" value="Upload Album Logo" /></p>
    <p><label>Album Overlay Picture</label></p>
    <p><input type="file" name="overlay_logo" value="Upload Album Overlay Logo" /></p>
    <p><input type="submit" value="Create Album" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Cancel" />
</form>

</body>
</html>
