

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<!-- saved from url=(0014)about:internet -->

    <head>
		<title>Department Gallery</title>
		<link href="demo1.css?v=0.9" type="text/css" rel="stylesheet" />
  <script src="res/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="jquery.exposure.js?v=0.9" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				$('#images').exposure({controlsTarget : '#controls',
					controls : { prevNext : true, pageNumbers : true, firstLast : false },
					visiblePages : 2,
					slideshowControlsTarget : '#slideshow',
					onThumb : function(thumb) {
						var li = thumb.parents('li');
						var fadeTo = li.hasClass('active') ? 1 : 0.3;

						thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);

						thumb.hover(function() {
							thumb.fadeTo('fast',1);
						}, function() {
							li.not('.active').children('img').fadeTo('fast', 0.3);
						});
					},
					onImage : function(image, imageData, thumb) {
						// Check if wrapper is hovered.
						var hovered = $('.exposureWrapper').hasClass('exposureHover');

						// Fade out the previous image.
						$('.exposureWrapper > .exposureLastImage').stop().fadeOut(500, function() {
							$(this).remove();
						});

						// Fade in the current image.
						image.hide().stop().fadeIn(1000);

						var hasCaption = function() {
							var caption = imageData.find('.caption').html();
							var extra = imageData.find('.extra').html();
							return (caption && caption.length > 0) || (extra && extra.length > 0);
						}

						var showImageData = function() {
							imageData.stop().show().animate({bottom:0+'px'},{queue:false,duration:160});
						}
						var hoverOver = function() {
							$('.exposureWrapper').addClass('exposureHover');
							// Show image data as an overlay when image is hovered.
							var hasCpt = hasCaption();

							if (hasCpt) {
								showImageData.call();
							}
						};

						var hideImageData = function() {
							var imageDataBottom = -imageData.outerHeight();
							imageData.stop().show().animate({bottom:imageDataBottom+'px'},{queue:false,duration:160});
						}
						var hoverOut = function() {
							$('.exposureWrapper').removeClass('exposureHover');
							// Hide image data on hover exit.
							if (hasCaption()) {
								hideImageData.call();
							}
						};

						$('.exposureWrapper').hover(hoverOver,hoverOut);
						imageData.hover(hoverOver,hoverOut);

						if (hovered) {
							if (hasCaption()) {
								showImageData.call();
							} else {
								hideImageData.call();
							}
						}

						if ($.exposure.showThumbs && thumb && thumb.length) {
							thumb.parents('li').siblings().children('img.selected').stop().fadeTo(200, 0.3, function() { $(this).removeClass('selected'); });
							thumb.fadeTo('fast', 1).addClass('selected');
						}
					},
					onPageChanged : function() {
						$('.exposureThumbs li.current').hide().stop().fadeIn('fast', function() {
							var imageHeight = $(this).find('img').height();
							if (imageHeight > 0) {
								$(this).height(imageHeight);
							}
						});
					}
				});
			});
		</script>
	</head>
	<body>
            <?php
            require_once '../ClassesIncluded.php';
            $base='slides';
            $thumbs='thumbs';
            $picLimit=15;  
            static $linkBuilder='';
            ?>
		<div id="main">
                     <?php echo "";
                      /*$albumPics=new PictureProcessing();
                      if(!isset($_GET['album'])){//for showing pics on one side and showing folder links on another
                      $albumPics->getAlbumPics($base, $picLimit);                      
                      }
                      if(isset($_GET['album'])){//for showing the contents of the folders on click
                          $get_album=$_GET['album'];
                          $linkBuilder=$base.'/'.$get_album;
                          $albumPics->getAlbumPics($linkBuilder, $picLimit,$get_album);
                          }else{$get_album=false;}*/
                      ?>
			<h1><font color="black">Computer Engineering Department Gallery</font></h1>
			<div class="panel">
				<ul id="images">
                                    
					<!--li><a href="slides/IMG_2198.jpg"><img src="thumbs/IMG_2198.jpg" title="Home made" /></a></li>
					<li><a href="slides/IMG_2339.jpg"><img src="thumbs/IMG_2339.jpg" title="Chocolate" /></a></li>
					<li><a href="slides/IMG_2446.jpg"><img src="thumbs/IMG_2446.jpg" title="Love birds" /></a></li>
					<li><a href="slides/IMG_2623.jpg"><img src="thumbs/IMG_2623.jpg" title="Blue" /></a></li>
					<li><a href="slides/IMG_5077.jpeg"><img src="thumbs/IMG_5077.jpeg" title="White" /></a></li>
					<li><a href="slides/IMG_5177.jpeg"><img src="thumbs/IMG_5177.jpeg" title="Yellow on blue" /></a></li>
					<li><a href="slides/IMG_5278.jpeg"><img src="thumbs/IMG_5278.jpeg" title="Heat" /></a></li>
					<li><a href="slides/IMG_5324.jpeg"><img src="thumbs/IMG_5324.jpeg" title="Cold" /></a></li>
					<li><a href="slides/IMG_5650.jpeg"><img src="thumbs/IMG_5650.jpeg" title="Homes" /></a></li>
					<li><a href="slides/IMG_9006.jpg"><img src="thumbs/IMG_9006.jpg" title="Ace" /></a></li-->                                   
                      <?echo "";
                      $albumPics=new PictureProcessing();
                      if(!isset($_GET['album'])){//for showing pics on one side and showing folder links on another
                      $albumPics->displayImages($base,$thumbs, $picLimit);                      
                      }
                      if(isset($_GET['album'])){//for showing the contents of the folders on click
                          $get_album=$_GET['album'];
                          $linkBuilder=$base.'/'.$get_album;
                          $albumPics->displayImages($linkBuilder,$thumbs, $picLimit,$get_album);
                          }else{$get_album=false;}
                      ?>
				</ul>
				<div id="controls"></div>
				<div class="clear"></div>
			</div>
			<div id="exposure"></div>
			<div class="clear"></div>
			<div id="slideshow"></div>
		</div>


	</body>
</html>
