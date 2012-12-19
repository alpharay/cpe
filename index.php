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
	 <a href = "http://www.ug.edu.gh/">UG Main</a> &nbsp|&nbsp
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
        $item1sub1=array('subItem'=>'University Of Ghana','link'=>'http://www.ug.edu.gh');        
        $item1submenuItems=array($item1sub1);
        $item1=array('item'=>'UG','link'=>'http://www.ug.edu.gh','submenu'=>$item1submenuItems);
                      
        
         //Faculty/Staff
        $item2sub1Sub1=array('subSubItem'=>'Full Time','link'=>'faculty/faculty.php');
        $item2sub1Sub2=array('subSubItem'=>'Part-time','link'=>'faculty/faculty.php');
        $item2sub1Sub3=array('subSubItem'=>'Visiting Scholars','link'=>'faculty/faculty.php');
        $item2sub1Sub4=array('subSubItem'=>'Post Retirement','link'=>'faculty/faculty.php');
        $item2sub1Sub5=array('subSubItem'=>'Adjunct','link'=>'#');
        $item2sub1Sub6=array('subSubItem'=>'Graduate Assistant','link'=>'faculty/faculty.php');
        $item2sub1Sub7=array('subSubItem'=>'Teaching Assistant','link'=>'faculty/faculty.php');
        $item2sub1menuItems=array($item2sub1Sub1,$item2sub1Sub2,$item2sub1Sub3,$item2sub1Sub4,$item2sub1Sub5,$item2sub1Sub6,$item2sub1Sub7);
        $item2sub1=array('subItem'=>'Academic','link'=>'faculty/faculty.php','subsubmenu'=>$item2sub1menuItems);
        //$item2sub1=array('subItem'=>'Faculty','link'=>'faculty/faculty.php');
        
        $item2sub2Sub1=array('subSubItem'=>'Administrative','link'=>'staff/staff.php');       
        $item2sub2Sub2=array('subSubItem'=>'Service Personnel','link'=>'staff/staff.php');
        $item2sub2menuItems=array($item2sub2Sub1,$item2sub2Sub2);
        $item2sub2=array('subItem'=>'Administrative Staff','link'=>'staff/staff.php','subsubmenu'=>$item2sub2menuItems);
       // $item2sub2=array('subItem'=>'Administrative','link'=>'staff/staff.php');
        
        $item2sub3=array('subItem'=>'Technical','link'=>'staff/technical.php');
        
        $item2sub4Sub1=array('subSubItem'=>'Undergraduate','link'=>'undergraduate/undergradStudents.php');
        $item2sub4Sub2=array('subSubItem'=>'Postgraduate','link'=>'postgraduate/postgradStudents.php');
        $item2sub4menuItems=array($item2sub4Sub1,$item2sub4Sub2);
        $item2sub4=array('subItem'=>'Students','link'=>'','subsubmenu'=>$item2sub4menuItems); 
        
        $item2submenuItems=array($item2sub1,$item2sub2,$item2sub3,$item2sub4);
        $item2=array('item'=>'People','link'=>'#','submenu'=>$item2submenuItems);
        
        
        //Undergraduate
        $item3sub1=array('subItem'=>'Admission ','link'=>'http://admission.ug.edu.gh/index1.php?linkid=325&sublinkid=177');
        $item3sub2=array('subItem'=>'Graduation ','link'=>'undergraduate/undergrade.php');
        $item3sub3=array('subItem'=>'Catalog of Courses','link'=>'undergraduate/undergrade.php');
        $item3sub4=array('subItem'=>'Internships','link'=>'undergraduate/undergrade.php');
        $item3sub5=array('subItem'=>'Laboratories','link'=>'undergraduate/undergrade.php');
        $item3sub6=array('subItem'=>'Exchange Programmes','link'=>'undergraduate/undergrade.php');
        $item3sub7=array('subItem'=>'Academic Advisors','link'=>'undergraduate/undergrade.php');
        $item3sub8=array('subItem'=>'Academic Calendar','link'=>'undergraduate/undergrade.php');
        $item3sub9=array('subItem'=>'Opportunities','link'=>'undergraduate/undergrade.php');
        $item3sub10=array('subItem'=>'Award Schemes','link'=>'undergraduate/undergrade.php');        
        $item3sub11=array('subItem'=>'Application Forms','link'=>'undergraduate/undergrade.php');
        $item3submenuItems=array($item3sub1,$item3sub2,$item3sub3,$item3sub4,$item3sub5,$item3sub6,$item3sub7,$item3sub8,$item3sub9,$item3sub10,$item3sub11);
        $item3=array('item'=>'Undergraduate','link'=>'undergraduate/undergrade.php','submenu'=>$item3submenuItems);
        
        
        
        //GraduateSchool
        $item4sub1=array('subItem'=>'Programmes','link'=>'postgraduate/postgraduate.php');
        $item4sub2=array('subItem'=>'Admission ','link'=>'http://admission.ug.edu.gh/index1.php?linkid=325&sublinkid=177');
        $item4sub3=array('subItem'=>'Graduation ','link'=>'postgraduate/postgraduate.php');
        $item4sub4=array('subItem'=>'Catalog of Courses','link'=>'postgraduate/postgraduate.php');
        $item4sub5=array('subItem'=>'Research Areas','link'=>'postgraduate/postgraduate.php');
        $item4sub6=array('subItem'=>'Resources','link'=>'postgraduate/postgraduate.php');
        $item4sub7=array('subItem'=>'Exchange Programme','link'=>'postgraduate/postgraduate.php');
        $item4sub8=array('subItem'=>'Academic Advisors','link'=>'postgraduate/postgraduate.php');        
        $item4sub9=array('subItem'=>'Application Forms','link'=>'postgraduate/postgraduate.php');        
        $item4submenuItems=array($item4sub1,$item4sub2,$item4sub3,$item4sub4,$item4sub5,$item4sub6,$item4sub7,$item4sub8,$item4sub9);         
        $item4=array('item'=>'Postgraduate','link'=>'postgraduate/postgraduate.php','submenu'=>$item4submenuItems);
        
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
        $sideMenu->addToSideMenu("LEVEL 400 PROJECT", "http://www.scriptbreaker.com", "Final Project Defense", "Date: /05/2012,Venue:FES");
        $sideMenu->addToSideMenu("H.O.D", "http://www.scriptbreaker.com", "Meeting of Lecturers?", "Dated on");
        $sideMenu->addToSideMenu("ANNOUCEMENT", "postgraduate/interview.php", "out", "Interview Of Postgraduate Candidates");
        $sideMenu->addToSideMenu("ANNOUCEMENT", "postgraduate/interview.php", "out", "Interview Of Postgraduate Candidates");

        $sideMenu->endSideMenu('Tools/images/news-arrow.png');       
        
        ?> 
 </div>
            <div id = "slide" style="padding-top: 15px; ">
                <ul id="slideshow">
                    <li><img src="images/img1.jpg" width="776" height="270" border="0" alt="" /></li> <!-- This is the last image in the slideshow-->
                    <li><img src="images/img2.jpg" width="776" height="270" border="0" alt="" /></li>
                    <li><img src="images/img3.jpg" width="776" height="270" border="0" alt="" /></li>
                </ul>
    
            </div>
            <div id = "menucover2">
                <div id="menu"> </div>
    
    
            </div>
            <div id = "slotmachine">
                <div id="page-wrap">
    
                    <div id="slot-machine-tabs">
                    
                        <ul class="tabs">
                            <li><a href="#one">About Us</a></li>
                                    
                            <li><a href="#two">Strategic Plan</a></li>
                                    
                        </ul>
                        <div class="box-wrapper">

				<div id="one" class="content-box">
					<div class="col-one col">
						<img src="images/evangeline.jpg" alt="picture" />

					</div>
					<div class="col-two col">
						<h3>Computer Engineering @ Legon</h3>
						<p> Computer Engineering at Legon was established in August 2003 as one of the five (5) Engineering Departments under the Faculty of Engineering Sciences.                               
                            <br/><a style='color: blue;' href='info/aboutUs.php'>Read more</a>
                        </p><br/><br/><a style='color: red;' href='video.php'>Media Library<a>
					</div>
					<div class="col-three col">
						<h3>Mission</h3>
						<p>The mission is to provide our student with outstanding and 
                                                    innovative engineering education that reflect the attributes of the University 
                                                    of Ghana to compete successfully in the job market, and to 
                                                    conduct leading research that will serve the people of Ghana 
                                                    and the global world.<br/><a style='color: blue;' href='info/aboutUs.php'>Read more</a>
                                                </p>
                                                </embed>

<!--object id="whatever" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="200" height="300" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0">
<param name="src" value="UGmov.flv"/>
<param name="bgcolor" value="#FFFFFF"/>
<param name="quality" value="best"/>
<embed name="whatever" src="UGmov.flv" width="400" height="300" bgcolor="#FFFFFF" quality="best" pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
</object-->

					</div>


				</div>

				<div id="two" class="content-box">
					<div class="col-one col">
						<img src="images/evangeline.jpg" alt="" />
					</div>
					<div class="col-two col">
						<h3>Strategic Plan</h3>

						<p>This strategic plan of the Computer Engineering Department provides guidelines on all the activities of the Department over the plan period. 
                                                    The elements of the plan express the commitment of the Department to explore and discover new frontiers of knowledge, </p>
					</div>
					<div class="col-three col">
						<p>train and equip students with problem solving 
                                                    skills that will make them stand out professionally in industry, and use the skill-sets available in the department to 
                                                    provide and improve on ICT solutions in the university, 
                                                    the nation, and the sub-region<br/><a style='color: blue;' href='info/aboutUs.php'>Read more</a></p>
					</div>
				</div>

				<div id="three" class="content-box">

					<div class="col-one col">
						<img src="images/sonya.jpg" alt="" />
					</div>
     <div class="col-two col">
						<h3>Postgraduate</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
					<div class="col-three col">

						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					</div>
				</div>

			</div>
                            
                            
                    </div> <!-- END Box Wrapper -->
                    
                </div> <!-- END Slot Machine Tabs -->
            
            </div>
    </div>

        <?php         
        $userGenuine=true;
        $sqlCleaner=new Cleaner();
        if(isset($_POST['username'])&&isset($_POST['password'])){
        $username=$sqlCleaner->mysql_prep($_POST['username']);
        $password=$sqlCleaner->mysql_prep($_POST['password']);  
        
        $staffAuthenticate=new AuthorizationAndConf();
        //$staffAuthenticate->staffAuthenticate($username,$password,"cmsTest.php");
        $userGenuine=$staffAuthenticate->staffAuthenticate($username,$password,"staffBase.php");
        }
             

?>
    </body>
</html>
<?php
require_once('include/footer.php');
ob_end_flush();
?>

