<?php ob_start();?>
<HTML>
<HEAD
    <?php
require_once('header.php');
?>

 <TITLE>Computer Engineering</TITLE>

  <style type ="text/css">
 @import url("Tools/css/style.css");


 </style>
 <script type="text/javascript" src="Tools/jquery/jquery.js"></script>
  <link rel="stylesheet" href="Tools/css/mosaic.css" type="text/css" media="screen" />
 <script type="text/javascript" src="Tools/js/mosaic.1.0.1.js"></script>
 <script type="text/javascript" src="Tools/jquery/jquery1.2.3.js"></script>
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


 <link type="text/css" href="Tools/menu.css" rel="stylesheet" />

      <link rel="stylesheet" href="Tools/css/style-newsticker.css" type="text/css" media="screen" />
      
  <script src="Tools/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="Tools/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
     
$(function() {
        //$.noConflict();
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


    <script type='text/javascript' src='Tools/jquery-1.4.2.min.js'></script>

<script type='text/javascript' src='Tools/slotmachine.js'></script>




    <script type="text/javascript" src="Tools/js/jquery.js"></script>








    <!-- include jQuery and Contact-Pop scripts -->
      <link rel="stylesheet" type="text/css" href="Tools/css/contact-pop.css" />
<script type="text/javascript" src="Tools/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Tools/js/contact-pop.js"></script>

 <script type="text/javascript">   
  $.noConflict();
  jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.
  });

  // Code that uses other library's $ can follow here.
</script>
    <!--script type="text/javascript" src="js/menu.js"></script--><!--This displays the "No back link" link at the top-->





    <script type="text/javascript" src="Tools/jquery/fadeSlideShow.js"></script>


<script type="text/javascript">
$.noConflict();

jQuery(document).ready(function(){
	jQuery('#slideshow').fadeSlideShow({
		width:776, // width of your slideshow
		height:270, // height of your slideshow
		speed: 'slow', // speed of the transition effect
		interval:5000 // interval time between image change
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

 <div id="container"> 
     <div id = "img">
         <img src = "image/ug_standard_new_sl1.png" >
     </div>
     <div id = "shortlink">
         <a href = "http://webmail.ug.edu.gh/">Staff Webmail</a> &nbsp|&nbsp<a href = "http://pmis-1.ug.edu.gh:7771/pls/prodi01/w99pkg.mi_login">MIS Web</a>&nbsp|&nbsp<a href = "http://st.ug.edu.gh/">Student Webmail</a>&nbsp|&nbsp<a href = "http://www.ug.edu.gh/index1.php?linkid=128">Site Map</a>&nbsp|&nbsp<a href = "http://www.ug.edu.gh/index1.php?linkid=212">News</a>
     </div>
        <?php
        // put your code here       
        
        require_once('ClassesIncluded.php');
        require_once('ServiceObjects/FacultyStaffOrMemService.php');
        require_once('ServiceObjects/Cleaner.php');
        require_once('ServiceObjects/AuthorizationAndConf.php');
        
         if(isset($_GET['logOut'])){
            if($_GET['logOut']==1){
                $authenticationCloser=new AuthorizationAndConf();
                $authenticationCloser->logout('index.php');
            }
        }
        
        //Login&Logout
        if(isset($_SESSION['authentic'])){        
        $item0=array('item'=>'Logout','link'=>'../cpe/index.php?logOut=1','submenu'=>NULL);       
        }
        else{
        $item0sub1=array('subItem'=>'Alumnus','link'=>'../cpe/CMS_Pages/AlumnusLogin.php');  
        $item0sub2=array('subItem'=>'Staff','link'=>'../cpe/CMS_Pages/staffLogin.php');
        $item0submenuItems=array($item0sub1,$item0sub2);
        $item0=array('item'=>'Login','link'=>'#','submenu'=>$item0submenuItems);
        }
        
        //Home
        $item1sub1=array('subItem'=>'Home','link'=>'index.php');        
        $item1submenuItems=array($item1sub1);
        $item1=array('item'=>'Home','link'=>'index.php','submenu'=>$item1submenuItems);
        
        
        //Faculty/Staff
        $item2sub1Sub1=array('subSubItem'=>'Full Time','link'=>'faculty/faculty.php');
        $item2sub1Sub2=array('subSubItem'=>'Part-time','link'=>'faculty/faculty.php');
        $item2sub1Sub3=array('subSubItem'=>'Visiting Scholars','link'=>'faculty/faculty.php');
        $item2sub1Sub4=array('subSubItem'=>'Post Retirement','link'=>'faculty/faculty.php');
        $item2sub1Sub5=array('subSubItem'=>'Adjunct','link'=>'#');
        $item2sub1Sub6=array('subSubItem'=>'Graduate Assistant','link'=>'faculty/faculty.php');
        $item2sub1Sub7=array('subSubItem'=>'Teaching Assistant','link'=>'faculty/faculty.php');
        $item2sub1menuItems=array($item2sub1Sub1,$item2sub1Sub2,$item2sub1Sub3,$item2sub1Sub4,$item2sub1Sub5,$item2sub1Sub6,$item2sub1Sub7);
        $item2sub1=array('subItem'=>'Faculty','link'=>'faculty/faculty.php','subsubmenu'=>$item2sub1menuItems);
        
        
        $item2sub2Sub1=array('subSubItem'=>'Administrative','link'=>'staff/staff.php');
        $item2sub2Sub2=array('subSubItem'=>'Technical','link'=>'staff/staff.php');
        $item2sub2Sub3=array('subSubItem'=>'Service Personnel','link'=>'staff/staff.php');
        $item2sub2menuItems=array($item2sub2Sub1,$item2sub2Sub2,$item2sub2Sub3);
        $item2sub2=array('subItem'=>'Administrative Staff','link'=>'staff/staff.php','subsubmenu'=>$item2sub2menuItems);
        
        //$item2sub3=array('subItem'=>'Academic Advisors','link'=>'faculty/faculty.php'); 
        
        $item2submenuItems=array($item2sub1,$item2sub2);
        $item2=array('item'=>'Staff','link'=>'#','submenu'=>$item2submenuItems);
        
        
        //Undergraduate
        $item3sub1=array('subItem'=>'Admission ','link'=>'undergraduate/undergrade.php');
        $item3sub2=array('subItem'=>'Graduation ','link'=>'undergraduate/undergrade.php');
        $item3sub3=array('subItem'=>'Catalog of Courses','link'=>'undergraduate/undergrade.php');
        $item3sub4=array('subItem'=>'Internships','link'=>'undergraduate/undergrade.php');
        $item3sub5=array('subItem'=>'Laboratories','link'=>'undergraduate/undergrade.php');
        $item3sub6=array('subItem'=>'Exchange Programmes','link'=>'undergraduate/undergrade.php');
        $item3sub7=array('subItem'=>'Academic Advisors','link'=>'undergraduate/undergrade.php');
        $item3sub8=array('subItem'=>'Academic Calendar','link'=>'undergraduate/undergrade.php');
        $item3sub9=array('subItem'=>'Opportunities','link'=>'undergraduate/undergrade.php');
        $item3sub10=array('subItem'=>'Award Schemes','link'=>'undergraduate/undergrade.php');
        $item3sub11=array('subItem'=>'Undergrad Members','link'=>'undergraduate/undergrade.php');
        $item3sub12=array('subItem'=>'Application Forms','link'=>'undergraduate/undergrade.php');
        $item3submenuItems=array($item3sub1,$item3sub2,$item3sub3,$item3sub4,$item3sub5,$item3sub6,$item3sub7,$item3sub8,$item3sub9,$item3sub10,$item3sub11,$item3sub12);
        $item3=array('item'=>'Undergraduate','link'=>'undergraduate/undergrade.php','submenu'=>$item3submenuItems);
        
        
        
        //GraduateSchool
        $item4sub1=array('subItem'=>'Programmes','link'=>'postgraduate/postgraduate.php');
        $item4sub2=array('subItem'=>'Admission ','link'=>'postgraduate/postgraduate.php');
        $item4sub3=array('subItem'=>'Graduation ','link'=>'postgraduate/postgraduate.php');
        $item4sub4=array('subItem'=>'Catalog of Courses','link'=>'postgraduate/postgraduate.php');
        $item4sub5=array('subItem'=>'Research Areas','link'=>'postgraduate/postgraduate.php');
        $item4sub6=array('subItem'=>'Resources','link'=>'postgraduate/postgraduate.php');
        $item4sub7=array('subItem'=>'Exchange Programme','link'=>'postgraduate/postgraduate.php');
        $item4sub8=array('subItem'=>'Academic Advisors','link'=>'postgraduate/postgraduate.php');
        $item4sub9=array('subItem'=>'Grad Members','link'=>'postgraduate/postgraduate.php');
        $item4sub10=array('subItem'=>'Application Forms','link'=>'postgraduate/postgraduate.php');        
        $item4submenuItems=array($item4sub1,$item4sub2,$item4sub3,$item4sub4,$item4sub5,$item4sub6,$item4sub7,$item4sub8,$item4sub9,$item4sub10);         
        $item4=array('item'=>'Graduate School','link'=>'postgraduate/postgraduate.php','submenu'=>$item4submenuItems);
        
        //Project
        $item5sub1=array('subItem'=>'Faculty Research','link'=>'project/project.php');
        $item5sub2=array('subItem'=>'Student Research','link'=>'project/project.php');
        $item5sub3=array('subItem'=>'Departmental Research','link'=>'project/project.php');
        $item5sub4=array('subItem'=>'Contract Research','link'=>'project/project.php');
        $item5sub5=array('subItem'=>'Collaboration Research','link'=>'project/project.php');
        $item5sub6=array('subItem'=>'Community Project','link'=>'project/project.php');               
        $item5submenuItems=array($item5sub1,$item5sub2,$item5sub3,$item5sub4,$item5sub5,$item5sub6);
        $item5=array('item'=>'Research Projects','link'=>'#','submenu'=>$item5submenuItems);
        
        
        //Partners       
        $item6sub1=array('subItem'=>'Academic Institutions','link'=>'#');
        $item6sub2=array('subItem'=>'Organizations/Industries','link'=>'#');       
        $item6sub3=array('subItem'=>'MOU\'s','link'=>'#');
        $item6sub4=array('subItem'=>'Others','link'=>'#');               
        $item6submenuItems=array($item6sub1,$item6sub2,$item6sub3,$item6sub4);
        $item6=array('item'=>'Partners','link'=>'partner/partner.php','submenu'=>$item6submenuItems);
        
        
        //Alumni        
        $item7sub1Sub1=array('subSubItem'=>'2003/2004 group','link'=>'yeargroup/yeargroup.php');
        $item7sub1Sub2=array('subSubItem'=>'2004/2005 group','link'=>'yeargroup/yeargroup.php');
        $item7sub1Sub3=array('subSubItem'=>'2005/2006 group','link'=>'yeargroup/yeargroup.php');
        $item7sub1menuItems=array($item7sub1Sub1,$item7sub1Sub2,$item7sub1Sub3);
        $item7sub1=array('subItem'=>'Classmates','link'=>'yeargroup/yeargroup.php','subsubmenu'=>$item7sub1menuItems);
        
        $item7sub2=array('subItem'=>'Support Department','link'=>'#');
        $item7sub3=array('subItem'=>'Networking','link'=>'#');
        $item7sub4=array('subItem'=>'Alumni Events','link'=>'#');
        $item7sub5=array('subItem'=>'Souvenirs','link'=>'#'); 
        $item7sub6=array('subItem'=>'Registration','link'=>'#');                    
        $item7sub7=array('subItem'=>'Job Opportunities','link'=>'#');                    

        $item7submenuItems=array($item7sub1,$item7sub2,$item7sub3,$item7sub4,$item7sub5,$item7sub6,$item7sub7);   
        
        $item7=array('item'=>'Alumni','link'=>'yeargroup/yeargroup.php','submenu'=>$item7submenuItems);
        
        //Contact Us
        $item8=array('item'=>'Contact Us','link'=>'contact/index.php','submenu'=>NULL);
        
        //Gallery
        $item9=array('item'=>'Gallery','link'=>'gallery/gallery.php','submenu'=>NULL);       
        
        
        
        //Constructing the main menu
        $mainMenuItems=array($item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9);
        $MAINMENU=new MenuCreator();
        $MAINMENU->BuildMainMenu($mainMenuItems,'Tools/menuCss.css');  
        
        
        //CREATING THE SIDE MENU
        $sideMenu= new SideMenuCreator('Tools/images/news-arrow-previous.png');
        $sideMenu->addToSideMenu("PROJECT", "", "Final Presentation?", "Dated on");
        $sideMenu->addToSideMenu("ANNOUNCEMENT", "", "Meeting of Lecturers", "Dated on");
        $sideMenu->addToSideMenu("SEMINAR", "", "seminars", "seminars");
        $sideMenu->addToSideMenu("MEETING", "", "Soon Out ?", "Department postgraduate");
        $sideMenu->endSideMenu('Tools/images/news-arrow.png');       
        
        ?>  
            <div id = "slide" style='padding-top: 20px;padding-left: 50px; height:50%'>            
            <!--ul id="slideshow"-->
            <div class="slideshowreplacement" style='height: 100%;width: 200%; padding-right: 80px;'>
        </embed>

<object id="whatever" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="800" height="400" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0">
<param name="src" value="UGmov.flv"/>
<param name="bgcolor" value="#FFFFFF"/>
<param name="quality" value="best"/>
<embed name="whatever" src="UGmov.flv" width="600" height="400" bgcolor="#FFFFFF" quality="best" pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
</object>
                <!--li><img src="images/img1.jpg" width="776" height="587" border="0" alt="" /></li> 
                <li><img src="images/img2.jpg" width="776" height="587" border="0" alt="" /></li>
                <li><img src="images/img3.jpg" width="776" height="587" border="0" alt="" /></li-->                
                        <!--p>Welcome to this Staff Menu</p>
                        <ul>
                            <li><a href="cmsTest.php">Manage CMS</a></li>
                            <li><a href="cmsTest.php">Add the Staff</a></li>
                            <li><a href="cmsTest.php">Logout</a></li>
                        </ul-->                          
            </div>            
        </div>
    </div>        
       
 
    </body>
</html>
<?php ob_flush();?>
