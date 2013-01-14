<script type="text/javascript" src="../jquery/jquery.js"></script>
<link rel="stylesheet" href="../css/mosaic.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/mosaic.1.0.1.js"></script>
<script type="text/javascript" src="../jquery/jquery1.2.3.js"></script>
<link rel="stylesheet" href="css/basic.css" type="text/css" />
<link rel="stylesheet" href="css/galleriffic-3.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery.history.js"></script>
<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
<!-- We only want the thunbnails to display when javascript is disabled -->
<script type="text/javascript">
    document.write('<style>.noscript { display: none; }</style>');
</script>

<?php
ob_start();
require_once('../include/header.php');
require_once('../ClassesIncluded.php');
?>

<div style="height:100;"></div>
<?php
	$dir = 'gallery/';
	$album_name = $_POST['album'];
	$pic_name = $_FILES['image']['name'];
	$description = $_POST['description'];
	$image_name = $_FILES['image'];
	$tablename = 'galleryimages';
	
	move_uploaded_file($_FILES['image']['tmp_name'], "images/". $_FILES['image']['name']);
	
	mysql_query("INSERT INTO $tablename(album_name, picture_name, picture_description, picture) VALUES ('$album_name', '$pic_name', '$description', '$image_name')") or die(mysql_error());
	
	$result = mysql_query("SELECT * FROM $tablename;");
	$index = 0;
	while($row = mysql_fetch_array($result))
	{
		// echo '<img src="data:image/jpeg;base64,' . base64_encode($row["picture"]) . '" />';
		// echo $row['picture'];
		// echo "<img src='upload_successful.php?id=" . $index . "' width='900' />";
		// echo mysql_result($result, $index, "picture");
		// echo "<img src='gallery/" . $_FILES['image']['name'] . "' width='700' />";
		$index += 1;
		}
	// $row = mysql_fetch_assoc($result);
	// header("Content-type: image/jpeg");
	// echo $row['picture'];
	
?>

</BODY>