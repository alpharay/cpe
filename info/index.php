<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Computer Engineering Department</title>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>

</head>

<body>

<div id="container">

<h2>Department Address</h2>
<p>UNIVERSITY OF GHANA<BR>DEPARTMENT OF COMPUTER ENGINEERING<BR>FACULTY OF ENGINEERING SCIENCES<BR><em>PMB, Legon, Accra. Ghana<BR>
Telephone: 233-28-910-9106 &nbsp&nbsp&nbsp Fax 233-21-517741<BR>Email: compeng@ug.edu.gh</p>

<p><a class="modal" href="#"><h2>Request For Information</h2></a>.</p>

</div><!--end container-->

<!--contact form-->

<div id="contact">
	<div id="close">Close</div>

	<div id="contact_header">Contact Us</div>
	<p class="success">Thanks! Your message has been sent.</p>

  <form action="send.php" method="post" name="contactForm" id="contactForm">
  <p><input name="name" id="name" type="text" size="30" value="Your Name" /></p>
  <p><input name="email" id="email" type="text" size="30" value="Your Email Address" /></p>
  <p><textarea name="comment" id="comment" rows="5" cols="40">Enter your comment </textarea></p>
  <p><input type="submit" id="submit" name="submit" value="Send" /></p>
 </form>
</div>

<div id="mask"></div>

<!--end contact form-->

</body>
</html>
