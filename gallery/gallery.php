<?php
ob_start();
require_once('../include/header.php');
require_once('../ClassesIncluded.php');
?>
 <script type="text/javascript" src="../jquery/jquery.js"></script>
  <link rel="stylesheet" href="../css/mosaic.css" type="text/css" media="screen" />
 <script type="text/javascript" src="../js/mosaic.1.0.1.js"></script>
 <script type="text/javascript" src="../jquery/jquery1.2.3.js"></script>
 <script type="text/javascript">

			jQuery(function($){

				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});

				$('.fade').mosaic();

				$('.bar').mosaic({
					animation	:	'slide'		//fade or slide
				});

				$('.bar2').mosaic({
					animation	:	'slide'		//fade or slide
				});

				$('.bar3').mosaic({
					animation	:	'slide',	//fade or slide
					anchor_y	:	'top'		//Vertical anchor position
				});

				$('.cover').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'400px'		//Horizontal position on hover
				});

				$('.cover2').mosaic({
					animation	:	'slide',	//fade or slide
					anchor_y	:	'top',		//Vertical anchor position
					hover_y		:	'80px'		//Vertical position on hover
				});

				$('.cover3').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'400px',	//Horizontal position on hover
					hover_y		:	'300px'		//Vertical position on hover
				});

		    });

		</script>
<?php
$galleryLink1=array('name'=>'Freshers Dinner Pictures','link'=>'../xpoture/gallery.php','linkImage'=>'../img/fresh.gif');
$galleryLink2=array('name'=>'Students Award Pictures','link'=>'../xpoture/gallery.php','linkImage'=>'../img/award.gif');
$galleryLink3=array('name'=>'Department Graduation Pictures','link'=>'../xpoture/gallery.php','linkImage'=>'../img/graduation.gif');
$galleryLink4=array('name'=>'Department Dinner Pictures','link'=>'../xpoture/gallery.php','linkImage'=>'../img/department.gif');
$galleryLink5=array('name'=>'Student Presentation','link'=>'../xpoture/gallery.php','linkImage'=>'../img/presentation.gif');
$galleryLink6=array('name'=>'seminars','link'=>'../xpoture/gallery.php','linkImage'=>'../img/seminars.gif');
$galleryLink7=array('name'=>'Test','link'=>'../xpoture/gallery.php','linkImage'=>'../img/seminars.gif');
//N.B: if extra galleryLinks need to be added in future as those on the previous lines
//, the mosaic.css file in cpe/css/mosaic.css should be edited to accomodate this
// change and to ensure that they reflect on the web page


$galleryPanel=array($galleryLink1,$galleryLink2,$galleryLink3,$galleryLink4,$galleryLink5,$galleryLink6);
//$galleryPanel=array($galleryLink1,$galleryLink2,$galleryLink3,$galleryLink4,$galleryLink5,$galleryLink6,$galleryLink7);

$galleryPanelProcessor=new PictureProcessing();
$galleryPanelProcessor->generatePicAndAlbumPanel($galleryPanel);
?>

<!--div id="content">
 <div class="mosaic-block fade">

			<a href="../xpoture/gallery.php" class="mosaic-overlay">
				<div class="details">
					<h4>Freshers Dinner Pictures</h4>
					<p>Click To View</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="../img/fresh.gif"/></div>
		</div>


<div class="mosaic-block1 fade">

			<a href="../xpoture/gallery.php" class="mosaic-overlay">
				<div class="details">
    	<h4>Students Award Pictures</h4>
    	<p>Click To View</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="../img/award.gif"/></div>
		</div>


<div class="mosaic-block2 fade">

			<a href="../xpoture/gallery.php"  class="mosaic-overlay">
				<div class="details">
					<h4>Department Graduation Pictures</h4>
					<p>Click To View</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="../img/graduation.gif"/></div>
		</div>
      <div class="mosaic-block3 bar">

			<a href="../xpoture/gallery.php" class="mosaic-overlay">
				<div class="details">
					<h4>Department Dinner Pictures</h4>
					<p>Department Dinner Pictures</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="../img/department.gif"/></div>
		</div>


<div class="mosaic-block4 bar">

			<a href="../xpoture/gallery.php" class="mosaic-overlay">
				<div class="details">
    	<h4>Student Presentation</h4>
    	<p>Student Presentation</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="../img/presentation.gif"/></div>
		</div>


<div class="mosaic-block5 bar">

			<a href="../xpoture/gallery.php"  class="mosaic-overlay">
				<div class="details">
					<h4>seminars</h4>
					<p>seminars</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="../img/seminars.gif"/></div>
		</div>
</div-->

</div>



</BODY>
</HTML>
<?php
ob_end_flush();
?>