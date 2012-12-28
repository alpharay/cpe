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






</HEAD>
<BODY>

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

<div id = "container">

<div id = "img">
<img src = "../image/ug_standard_new_sl1.png" >
</div>
 <div id = "shortlink">
<a href = "http://webmail.ug.edu.gh/">Staff Webmail</a> &nbsp|&nbsp<a href = "http://pmis-1.ug.edu.gh:7771/pls/prodi01/w99pkg.mi_login">MIS Web</a>&nbsp|&nbsp<a href = "http://st.ug.edu.gh/">Student Webmail</a>&nbsp|&nbsp<a href = "http://www.ug.edu.gh/index1.php?linkid=128">Site Map</a>&nbsp|&nbsp<a href = "http://www.ug.edu.gh/index1.php?linkid=212">News</a>&nbsp|&nbsp<a href = "http://cpe.ug.edu.gh">back</a>
</div>
 <!--div id = "slide">

 </div-->

<!--div id = "menucover">
<div id="menu">
    <ul class="menu">
        <li><a href="../index.php" class="last"><span>Home</span></a>

        </li>

       <li><a href="../faculty/faculty.php" class="parent"><span>Faculty/Staff</span></a>
            <ul>
                <li><a href="faculty/faculty.php"><span><font color="#FF8080">Academic Faculty</font></span></a>

                </li>

                <li><a href="../faculty/faculty.php"  class="parent"><span>Faculty</span></a>
                  <ul>

                        <li><a href="../faculty/faculty.php"><span>Full-Time Faculty</span></a></li>
                        <li><a href="../faculty/faculty.php"><span>Part-Time Faculty</span></a></li>
                    </ul>
                </li>
                <li><a href="../faculty/faculty.php"><span>Visiting Faculty</span></a></li>
                <li><a href="../faculty/faculty.php"><span>Post-Ret. Faculty</span></a></li>
                <li><a href="../faculty/faculty.php"><span>Graduate Assistant</span></a></li>
                <li><a href="../faculty/faculty.php"><span>Teaching Assistant</span></a></li>
                 <li><a href="../staff/staff.php"><span><font color="#FF8080">Administrative Staff</font></span></a>
                <li><a href="../staff/staff.php"><span>Technical Staff</span></a></li>
                 <li><a href="../staff/staff.php"><span>Student Advisors</span></a></li>
                </li>
                </li>
            </ul>




       <li><a href="../undergraduate/undergrade.php" class="parent"><span>Undergraduate</span></a>
            <ul>
                <li><a href="../undergraduate/undergrade.php" ><span>Admission Requirement</span></a>

                </li>
                <li><a href="../undergraduate/undergrade.php" ><span>Graduation Requiremnt</span></a>

                </li>
                <li><a href="../undergraduate/undergrade.php"><span>Catalog of Courses</span></a></li>
                <li><a href="../undergraduate/undergrade.php"><span>Internships</span></a></li>
                <li><a href="../undergraduate/undergrade.php"><span>labolatories</span></a></li>
                  <li><a href="../undergraduate/undergrade.php"><span>Exchange Programme</span></a></li>
                    <li><a href="../undergraduate/undergrade.php"><span>Academic Advisors</span></a></li>
                      <li><a href="../undergraduate/undergrade.php"><span>Academic Calender</span></a></li>
                        <li><a href="../undergraduate/undergrade.php"><span>Opportunities</span></a></li>
                          <li><a href="../undergraduate/undergrade.php"><span>Award Scheme</span></a></li>
                            <li><a href="../undergraduate/undergrade.php"><span>Members</span></a></li>
                       <li><a href="../undergraduate/undergrade.php"><span>Applications</span></a></li>
                   </li>
                    </ul>
                     <li><a href="../postgraduate/postgraduate.php" class="parent"><span>Graduate School</span></a>
            <ul>
              <li><a href="../postgraduate/postgraduate.php" ><span>Programmes</span></a>

                </li>
                <li><a href="../postgraduate/postgraduate.php" ><span>Admission Requirement</span></a>

                </li>
                <li><a href="../postgraduate/postgraduate.php" ><span>Graduation Requiremnt</span></a>

                </li>
                <li><a href="../postgraduate/postgraduate.php"><span>Catalog of Courses</span></a></li>
                <li><a href="../postgraduate/postgraduate.php"><span>Research Areas</span></a></li>
                <li><a href="../postgraduate/postgraduate.php"><span>Resources</span></a></li>
                  <li><a href="../postgraduate/postgraduate.php"><span>Exchange Programme</span></a></li>
                    <li><a href="../postgraduate/postgraduate.php"><span>Academic Advisors</span></a></li>
                        <li><a href="../postgraduate/postgraduate.php"><span>Members</span></a></li>
                         <li><a href="../postgraduate/postgraduate.php"><span>Applications</span></a></li>
                   </li>
                    </ul>



         <li><a href="../project/project.php" class="parent"><span>Project</span></a>
            <ul>
                <li><a href="../project/project.php" ><span>Faculty Research</span></a>

                </li>
                <li><a href="../project/project.php" ><span>Student Research</span></a>

                </li>
                <li><a href="../project/project.php"><span>Department Research</span></a></li>
                <li><a href="../project/project.php"><span>Contract Research</span></a></li>
                <li><a href="../project/project.php"><span>Collaboration Research</span></a></li>
                <li><a href="../project/project.php"><span>Community Project</span></a></li>
                </li>
            </ul>
            <li><a href="../partner/partner.php" class="parent"><span>Partners</span></a>
            <ul>
              <li><span>&nbsp&nbsp&nbsp&nbsp<font color="#FF8080">Academic Partners</font></span></a>

                </li>
                <li><a href="../partner/partner.php"class="parent" ><span>Academic Institution</span></a>
                   <ul>

                        <li><a href="../partner/partner.php"><span>Local</span></a></li>
                        <li><a href="../partner/partner.php"><span>Foreign</span></a></li>
                    </ul>
                </li>
                 <li><span>&nbsp&nbsp&nbsp&nbsp<font color="#FF8080">Organisation</font></span></a>  </li>
                     <li><a href="../partner/partner.php"class="parent" ><span>Industry</span></a>
                    <ul>

                        <li><a href="../partner/partner.php"><span>Local</span></a></li>
                        <li><a href="../partner/partner.php"><span>Foreign</span></a></li>
                    </ul>
                </li>
                 <li><a href="../partner/partner.php"><span><font color="#FF8080">MoU's</font></span></a>  </li>
                 <li><a href="../partner/partner.php"><span><font color="#FF8080">Other</font></span></a>  </li>
                </li>
            </ul>
            <li><a href="../yeargroup/yeargroup.php" class="parent"><span>Alumni</span></a>

            <ul>
               <li><a href="../yeargroup/yeargroup.php" class="parent"><span><font color="#FF8080">Year Group</font></span></a>

                    <ul>

                        <li><a href="../yeargroup/yeargroup.php"><span>2011</span></a></li>
                        <li><a href="../yeargroup/yeargroup.php"><span>2010</span></a></li>
                        <li><a href="../yeargroup/yeargroup.php"><span>2009</span></a></li>
                        <li><a href="../yeargroup/yeargroup.php"><span>2008</span></a></li>
                    </ul>
                </li>
                <li><a href="../yeargroup/yeargroup.php"><span>Support Department</span></a></li>
                <li><a href="../yeargroup/yeargroup.php"><span>Networking</span></a></li>
                <li><a href="../yeargroup/yeargroup.php"><span>Alumni Event</span></a></li>

                <li><a href="../yeargroup/yeargroup.php"><span>Souvenirs</span></a></li>
            </ul>
        </li>

        <li class="last"><a href="../contact/index.php"><span>Contact Us</span></a></li>
        <li class="last"><a href="../gallery/gallery.php"><span>Gallery</span></a></li>
        </li>
    </ul>
</div>


</div-->
