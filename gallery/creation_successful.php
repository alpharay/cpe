<script type="text/javascript" src="../jquery/jquery.js"></script>
<link rel="stylesheet" href="../css/mosaic.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/mosaic.1.0.1.js"></script>
<script type="text/javascript" src="../jquery/jquery1.2.3.js"></script>
<link rel="stylesheet" href="../Contact-Pop/css/basic.css" type="text/css" />
<link rel="stylesheet" href="../Contact-Pop/css/galleriffic-3.css" type="text/css" />
<link rel="stylesheet" href="../Contact-Pop/css/reset.css" type="text/css" />
<link rel="stylesheet" href="../Contact-Pop/css/master.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../Contact-Pop/contact.js"></script>
<script type="text/javascript" src="../Contact-Pop/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../Contact-Pop/js/jquery.history.js"></script>
<script type="text/javascript" src="../Contact-Pop/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="../Contact-Pop/js/jquery.opacityrollover.js"></script>
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
	$dir = '../img/';
	$album_name = $_POST['album'];
	$logo = $_FILES['logo'];
	$overlaylogo = $_FILES['overlay_logo'];
	$logo_name = $_FILES['logo']['name'];
	$overlay_name = $_FILES['overlay_logo']['name'];
	$link = "../gallery/display.php";
	$tablename = 'gallery_link_array';
	
	$galleryPanelProcessor = new PictureProcessing();
	
	move_uploaded_file($logo['tmp_name'], $dir . $logo['name']);
	move_uploaded_file($overlaylogo['tmp_name'], $dir . $overlaylogo['name']);
	
	mysql_query("INSERT INTO $tablename(name, image, linkImage) VALUES ('$album_name', '$logo_name', '$overlay_name')") or die(mysql_error());
	
	echo "<p>Album " . $album_name . " created successfully.</p><br/>";
	echo "<p>Click <a href='../gallery/gallery.php'>Gallery</a> to view changes.</p>";
?>

</BODY>