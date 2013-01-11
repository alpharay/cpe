<?php ob_start();
//require_once('../Tools/PageLinkedSideMenu.php');
?>
<HTML>
<HEAD>

 <TITLE>Computer Engineering</TITLE>

  <style type ="text/css">
 @import url("../css/style.css");

 </style>



 <style type ="text/css">
 @import url("../css/project.css");

 </style>
    <style type ="text/css">
 @import url("../css/undergrade.css");
 
 html
{
background:white;
}
 </style>





 <link type="text/css" href="../menu.css" rel="stylesheet" />

      <link rel="stylesheet" href="../css/style-newsticker.css" type="text/css" media="screen" />

  <script src="../js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">

$(function() {
  $.noConflict();
	$("#newsticker-demo").jCarouselLite({
		vertical: true,
		hoverPause:true,
		btnPrev: ".previous",
		btnNext: ".next",
		visible: 3,
		auto:3000,
		speed:500
	});
});
</script>


    <script type='text/javascript' src='../jquery-1.4.2.min.js'></script>

<script type='text/javascript' src='../slotmachine.js'></script>




    <script type="text/javascript" src="../js/jquery.js"></script>








    <!-- include jQuery and Contact-Pop scripts -->
      <link rel="stylesheet" type="text/css" href="../css/contact-pop.css" />
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/contact-pop.js"></script>

 <script type="text/javascript">
  $.noConflict();
  jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.
  });
  // Code that uses other library's $ can follow here.
</script>
    <!--script type="text/javascript" src="../js/menu.js"></script--><!--This displays the "No back link" link at the top-->





<script type="text/javascript" src="../jquery/fadeSlideShow.js"></script>


<script type="text/javascript">
$.noConflict();

jQuery(document).ready(function(){
	jQuery('#slideshow').fadeSlideShow({
		width:776, // width of your slideshow
		height:287, // height of your slideshow
		speed: 'slow', // speed of the transition effect
		interval:5000 // interval time between image change
	});
});
</script>
<script type="text/javascript" src="undergraduate/js/jquery-1.5.2.min.js"></script>
<script language="JavaScript">
$(document).ready(function() {

    $(".tabs .tab[id^=tab_menu]").hover(function() {
        var curMenu=$(this);
        $(".tabs .tab[id^=tab_menu]").removeClass("selected");
        curMenu.addClass("selected");

        var index=curMenu.attr("id").split("tab_menu_")[1];
        $(".curvedContainer .tabcontent").css("display","none");
        $(".curvedContainer #tab_content_"+index).css("display","block");
    });
});
</script>
<style type="text/css">
* { margin:0;
    padding:0;
}
body { background:white;}
div#menu { margin:5px auto; }
div#copyright {
    font:11px 'Trebuchet MS';
    color:#fff;
    text-indent:30px;
    padding:40px 0 0 0;
}
div#copyright a { color:#00bfff; }
div#copyright a:hover { color:#fff; }
</style>
</HEAD>


