<?php ob_start();?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <style type ="text/css">
        @import url("../Tools/css/style.css");


    </style>
    <script type="text/javascript" src="../Tools/jquery/jquery.js"></script>
    <link rel="stylesheet" href="../Tools/css/mosaic.css" type="text/css" media="screen" />
    <script type="text/javascript" src="../Tools/js/mosaic.1.0.1.js"></script>
    <script type="text/javascript" src="../Tools/jquery/jquery1.2.3.js"></script>
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


    <link type="text/css" href="../Tools/menu.css" rel="stylesheet" />

    <link rel="stylesheet" href="../Tools/css/style-newsticker.css" type="text/css" media="screen" />

    <script src="../Tools/js/jquery-1.5.2.min.js" type="text/javascript"></script>

    <script src="../Tools/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script><!--for the caurousel movement of the side menu-->
    <script type="text/javascript">

        $(function() {//initiates the carousel effect on the side menu created
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


    <script type='text/javascript' src='../Tools/jquery-1.4.2.min.js'></script>

    <script type='text/javascript' src='../Tools/slotmachine.js'></script>




    <script type="text/javascript" src="../Tools/js/jquery.js"></script>

    <!-- include jQuery and Contact-Pop scripts -->
    <link rel="stylesheet" type="text/css" href="../Tools/css/contact-pop.css" />
    <script type="text/javascript" src="../Tools/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="../Tools/js/contact-pop.js"></script>

    <script type="text/javascript">
        $.noConflict();
        jQuery(document).ready(function($) {
            // Code that uses jQuery's $ can follow here.
        });
        // Code that uses other library's $ can follow here.
    </script>
    <!--script type="text/javascript" src="js/menu.js"></script-->





    <script type="text/javascript" src="../Tools/jquery/fadeSlideShow.js"></script>


    <script type="text/javascript">
        $.noConflict();

        jQuery(document).ready(function(){
            jQuery('#slideshow').fadeSlideShow({
                width:100, // width of your slideshow
                height:100, // height of your slideshow
                speed: 'slow', // speed of the transition effect
                interval:5000 // interval time between image change
            });
        });
    </script>
    <link type="text/css" href="../Tools/menuCss.css" rel="stylesheet" />
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
</head>   
    
    
    
    <body>        
        <div id="container">
        <?php
        // put your code here
        require_once('../include/header.php');
        require_once '../ClassesIncluded.php';
        require_once '../ServiceObjects/FacultyStaffOrMemService.php';
        require_once '../ServiceObjects/Cleaner.php';
        require_once '../ServiceObjects/AuthorizationAndConf.php';
        
        //Login&Logout
        if(isset($_SESSION['authentic'])){        
        $item0=array('item'=>'Logout','link'=>'../index.php?logOut=1','submenu'=>NULL);       
        }
        else{
        header("location: AlumnusLogin.php");//if not already login, redirect to login Page
        /*$item0sub1=array('subItem'=>'Alumnus','link'=>'../CMS_Pages/AlumnusLogin.php');  
        $item0sub2=array('subItem'=>'Staff','link'=>'../CMS_Pages/staffLogin.php');
        $item0submenuItems=array($item0sub1,$item0sub2);
        $item0=array('item'=>'Login','link'=>'#','submenu'=>$item0submenuItems);*/
        }
        
        //Home
        $item1sub1=array('subItem'=>'Home','link'=>'../index.php');        
        $item1submenuItems=array($item1sub1);
        $item1=array('item'=>'Home','link'=>'../index.php','submenu'=>$item1submenuItems);
        
        
        //Faculty/Staff
        $item2sub1=array('subItem'=>'Academic Faculty','link'=>'../../cpe/faculty/faculty.php');
        $item2sub2=array('subItem'=>'Faculty Members','link'=>'../../cpe/faculty/faculty.php');
        $item2sub3=array('subItem'=>'Visiting Faculty','link'=>'../../cpe/faculty/faculty.php');
        $item2sub4=array('subItem'=>'Post-Ret Faculty','link'=>'../../cpe/faculty/faculty.php');
        $item2sub5=array('subItem'=>'Graduate Assistant','link'=>'../../cpe/faculty/faculty.php');
        $item2sub6=array('subItem'=>'Teaching Assistant','link'=>'../../cpe/faculty/faculty.php');
        $item2sub7=array('subItem'=>'Administrative Staff','link'=>'../../cpe/faculty/faculty.php');
        $item2sub8=array('subItem'=>'Technical Staff','link'=>'../../cpe/faculty/faculty.php');
        $item2sub9=array('subItem'=>'Student Advisors','link'=>'../../cpe/faculty/faculty.php');
        $item2submenuItems=array($item2sub1,$item2sub2,$item2sub3,$item2sub4,$item2sub5,$item2sub6,$item2sub7,$item2sub8,$item2sub9);
        $item2=array('item'=>'Faculty/Staff','link'=>'#','submenu'=>$item2submenuItems);
        
        
        //Undergraduate
        $item3sub1=array('subItem'=>'Admission Requirement','link'=>'#');
        $item3sub2=array('subItem'=>'Graduation Requirement','link'=>'#');
        $item3sub3=array('subItem'=>'Catalog of Courses','link'=>'#');
        $item3sub4=array('subItem'=>'Internships','link'=>'#');
        $item3sub5=array('subItem'=>'Laboratories','link'=>'#');
        $item3sub6=array('subItem'=>'Exchange Programmes','link'=>'#');
        $item3sub7=array('subItem'=>'Academic Advisors','link'=>'#');
        $item3sub8=array('subItem'=>'Academic Calendar','link'=>'#');
        $item3sub9=array('subItem'=>'Opportunities','link'=>'#');
        $item3sub10=array('subItem'=>'Award Schemes','link'=>'#');
        $item3sub11=array('subItem'=>'Members','link'=>'#');
        $item3sub12=array('subItem'=>'Applications','link'=>'#');
        $item3submenuItems=array($item3sub1,$item3sub2,$item3sub3,$item3sub4,$item3sub5,$item3sub6,$item3sub7,$item3sub8,$item3sub9,$item3sub10,$item3sub11,$item3sub12);
        $item3=array('item'=>'Undergraduate','link'=>'#','submenu'=>$item3submenuItems);
        
        
        
        //GraduateSchool
        $item4sub1=array('subItem'=>'Programmes','link'=>'#');
        $item4sub2=array('subItem'=>'Admission Requirements','link'=>'#');
        $item4sub3=array('subItem'=>'Graduation Requirements','link'=>'#');
        $item4sub4=array('subItem'=>'Catalog of Courses','link'=>'#');
        $item4sub5=array('subItem'=>'Research Areas','link'=>'#');
        $item4sub6=array('subItem'=>'Resources','link'=>'#');
        $item4sub7=array('subItem'=>'Exchange Programme','link'=>'#');
        $item4sub8=array('subItem'=>'Academic Advisors','link'=>'#');
        $item4sub9=array('subItem'=>'Members','link'=>'#');
        $item4sub10=array('subItem'=>'Applications','link'=>'#');        
        $item4submenuItems=array($item4sub1,$item4sub2,$item4sub3,$item4sub4,$item4sub5,$item4sub6,$item4sub7,$item4sub8,$item4sub9,$item4sub10);         
        $item4=array('item'=>'Graduate School','link'=>'#','submenu'=>$item4submenuItems);
        
        //Project
        $item5sub1=array('subItem'=>'Faculty Research','link'=>'#');
        $item5sub2=array('subItem'=>'Student Research','link'=>'#');
        $item5sub3=array('subItem'=>'Departmental Research','link'=>'#');
        $item5sub4=array('subItem'=>'Contract Research','link'=>'#');
        $item5sub5=array('subItem'=>'Collaboration Research','link'=>'#');
        $item5sub6=array('subItem'=>'Community Project','link'=>'#');               
        $item5submenuItems=array($item5sub1,$item5sub2,$item5sub3,$item5sub4,$item5sub5,$item5sub6);
        $item5=array('item'=>'Project','link'=>'#','submenu'=>$item5submenuItems);
        
        
        //Partners
        $item6sub1=array('subItem'=>'Academic Partners','link'=>'#');
        $item6sub2=array('subItem'=>'Academic Institutions','link'=>'#');
        $item6sub3=array('subItem'=>'Organizations','link'=>'#');
        $item6sub4=array('subItem'=>'Industries','link'=>'#');
        $item6sub5=array('subItem'=>'MOU\'s','link'=>'#');
        $item6sub6=array('subItem'=>'Others','link'=>'#');               
        $item6submenuItems=array($item6sub1,$item6sub2,$item6sub3,$item6sub4,$item6sub5,$item6sub6);
        $item6=array('item'=>'Partners','link'=>'#','submenu'=>$item6submenuItems);
        
        
        //Alumni
        $item7sub1=array('subItem'=>'Year Group','link'=>'#');
        $item7sub2=array('subItem'=>'Support Department','link'=>'#');
        $item7sub3=array('subItem'=>'Networking','link'=>'#');
        $item7sub4=array('subItem'=>'Alumni Events','link'=>'#');
        $item7sub5=array('subItem'=>'Souvenirs','link'=>'#');                    
        $item7submenuItems=array($item7sub1,$item7sub2,$item7sub3,$item7sub4,$item7sub5);       
        $item7=array('item'=>'Alumni','link'=>'#','submenu'=>$item7submenuItems);
        
        //Contact Us
        $item8=array('item'=>'Contact Us','link'=>'#','submenu'=>NULL);
        
        //Gallery
        $item9=array('item'=>'Gallery','link'=>'../../cpe/xpoture/gallery.php','submenu'=>NULL);       
        
        
        
        //Constructing the main menu
        $mainMenuItems=array($item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item0);
        $MAINMENU=new MenuCreator();
        $MAINMENU->BuildMainMenu($mainMenuItems,'menuCss.css');  
        
        
        //CREATING THE SIDE MENU
        $sideMenu= new SideMenuCreator('../Tools/images/news-arrow-previous.png');
        $sideMenu->addToSideMenu("PROJECT", "http://www.scriptbreaker.com", "Final Presentation?", "Dated on");
        $sideMenu->addToSideMenu("H.O.D", "http://www.scriptbreaker.com", "Meeting of Lecturers?", "Dated on");
        $sideMenu->addToSideMenu("DINNER", "http://www.scriptbreaker.com", "Department Dinner ?", "Dinner with MIT");
        $sideMenu->addToSideMenu("GRADUATE", "http://www.scriptbreaker.com", "Soon Out ?", "Department postgraduate");
        $sideMenu->endSideMenu('../Tools/images/news-arrow.png');
        
        
        ?>
            <div id = "slide" style='padding-top: 20px;padding-left: 5px; height:50%;'>            
            <!--ul id="slideshow"-->
            <div class="slideshowreplacement" style='height: 100%;width: 98%; '>
        <?php 
        if(isset($_SESSION['authentic'])){
       if($_SESSION['authentic']==true){ 
            echo "<b style='color:blue; font-family: arial,Times New Roman, serif; font-style: italic;'>";
            echo "welcome {$_SESSION['username']}";            
            echo "</b><br>";
       }
       else{echo "ERROR<br>";}}        

//FOR UPLOADING AND RETRIEVING THE PDF OF THE PERSON TO A FOLDER
$pdfUpload=new profileUploader();
$pdfUpload->pdfIntoDirUploader($_SESSION['useRID'],'/opt/lampp/htdocs/cpe/pdfFiles/');//uploading pdf into directory
        ?>
    </body>
</html>
<?php ob_flush();?>