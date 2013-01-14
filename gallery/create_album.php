<?php
	ob_start();
	require_once('../ClassesIncluded.php');
	$album_name = $_POST['album'];
	$logo = $_FILES['logo'];
	$overlay = $_FILES['overlay_logo'];

	if ($album_name != "") {
		$galleryPanelProcessor = new PictureProcessing();
		$galleryPanel =$galleryPanelProcessor -> createAlbum($imagePanel, $album_name, $logo['name'], $overlay['name']);
		$galleryPanelProcessor -> generatePicAndAlbumPanel($galleryPanel);
	}
?>