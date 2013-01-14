<?php
ob_start();
require_once('../head.php');
require_once('../ClassesIncluded.php');
?>
 </div>
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
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
 </script>


<BODY onLoad="MM_preloadImages('../img/graduation_alt.gif','../img/award_alt.gif','../img/dinner_alt.gif')">
<div id = "container">

<div id = "img">
<img src = "../image/ug_standard_new_sl1.png" >
</div>
 <div id = "shortlink">
<a href = "http://webmail.ug.edu.gh/">Staff Webmail</a> &nbsp|&nbsp<a href = "http://pmis-1.ug.edu.gh:7771/pls/prodi01/w99pkg.mi_login">MIS Web</a>&nbsp|&nbsp<a href = "http://st.ug.edu.gh/">Student Webmail</a>&nbsp|&nbsp<a href = "http://www.ug.edu.gh/index1.php?linkid=128">Site Map</a>&nbsp|&nbsp<a href = "http://www.ug.edu.gh/index1.php?linkid=212">News</a>&nbsp|&nbsp<a href = "http://cpe.ug.edu.gh">back</a>

</div>

<div>
<?php
        // put your code here       
        require_once('../ServiceObjects/FacultyStaffOrMemService.php');
        require_once('../ServiceObjects/Cleaner.php');
        require_once('../ServiceObjects/AuthorizationAndConf.php');
        
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
        ?>
</div>

<div style="height:140px;"></div>


<div>
	<table>
    	<tr>
        	<td><a href="../gallery/gallery_example.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Graduation','','../img/graduation_alt.gif',1)"><img src="../img/graduation.gif" alt="Graduation" name="Graduation" width="300" height="84" border="0"></a></td>
            <td><a href="../gallery/gallery_example.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Award','','../img/award_alt.gif',1)"><img src="../img/award.gif" alt="Click to view Student Award Pictures" name="Award" width="303" height="80" border="0"></a></td>
            <td><a href="../gallery/gallery_example.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Dinner','','../img/dinner_alt.gif',1)"><img src="../img/dinner.gif" alt="Click to view Dinner Pictures" name="Dinner" width="301" height="79" border="0"></a></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

</div>
</BODY>
</HTML>
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
<?php
require_once('../include/footer.php');
ob_end_flush();
?>