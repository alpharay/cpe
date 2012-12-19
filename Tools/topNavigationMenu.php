  <?php
        // put your code here
           echo "";
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
        //header("location: AlumnusLogin.php");//if not already login, redirect to login Page
       // $item0sub1=array('subItem'=>'Alumnus','link'=>'../CMS_Pages/AlumnusLogin.php'); to be developed and activated 
        $item0sub2=array('subItem'=>'Staff','link'=>'../CMS_Pages/staffLogin.php');
        //$item0submenuItems=array($item0sub1,$item0sub2);
        $item0submenuItems=array($item0sub2);
        $item0=array('item'=>'Login','link'=>'#','submenu'=>$item0submenuItems);
        }
        
        //Home
        $item1sub1=array('subItem'=>'Home','link'=>'../index.php');        
        $item1submenuItems=array($item1sub1);
        $item1=array('item'=>'Home','link'=>'../index.php','submenu'=>$item1submenuItems);
        
        
        //Faculty/Staff
       $item2sub1Sub1=array('subSubItem'=>'Full Time','link'=>'../../cpe/faculty/faculty.php');
        $item2sub1Sub2=array('subSubItem'=>'Part-time','link'=>'../../cpe/faculty/faculty.php');
        $item2sub1Sub3=array('subSubItem'=>'Visiting Scholars','link'=>'../../cpe/faculty/faculty.php');
        $item2sub1Sub4=array('subSubItem'=>'Post Retirement','link'=>'../../cpe/faculty/faculty.php');
        $item2sub1Sub5=array('subSubItem'=>'Adjunct','link'=>'#');
        $item2sub1Sub6=array('subSubItem'=>'Graduate Assistant','link'=>'../../cpe/faculty/faculty.php');
        $item2sub1Sub7=array('subSubItem'=>'Teaching Assistant','link'=>'../../cpe/faculty/faculty.php');
        $item2sub1menuItems=array($item2sub1Sub1,$item2sub1Sub2,$item2sub1Sub3,$item2sub1Sub4,$item2sub1Sub5,$item2sub1Sub6,$item2sub1Sub7);
        $item2sub1=array('subItem'=>'Academic','link'=>'../../cpe/faculty/faculty.php','subsubmenu'=>$item2sub1menuItems);
        //$item2sub1=array('subItem'=>'Faculty','link'=>'faculty/faculty.php');
        
        $item2sub2Sub1=array('subSubItem'=>'Administrative','link'=>'../../cpe/staff/staff.php');       
        $item2sub2Sub2=array('subSubItem'=>'Service Personnel','link'=>'../../cpe/staff/staff.php');
        $item2sub2menuItems=array($item2sub2Sub1,$item2sub2Sub2);
        $item2sub2=array('subItem'=>'Administrative Staff','link'=>'../../cpe/staff/staff.php','subsubmenu'=>$item2sub2menuItems);
       // $item2sub2=array('subItem'=>'Administrative','link'=>'staff/staff.php');
        
        $item2sub3=array('subItem'=>'Technical','link'=>'../../cpe/staff/technical.php');
        
        $item2sub4Sub1=array('subSubItem'=>'Undergraduate','link'=>'../../cpe/undergraduate/undergradStudents.php');
        $item2sub4Sub2=array('subSubItem'=>'Postgraduate','link'=>'../../cpe/postgraduate/postgradStudents.php');
        $item2sub4menuItems=array($item2sub4Sub1,$item2sub4Sub2);
        $item2sub4=array('subItem'=>'Students','link'=>'','subsubmenu'=>$item2sub4menuItems); 
        
        $item2submenuItems=array($item2sub1,$item2sub2,$item2sub3,$item2sub4);
        $item2=array('item'=>'People','link'=>'#','submenu'=>$item2submenuItems);
        
        //Undergraduate
        $item3sub1=array('subItem'=>'Admission ','link'=>'http://admission.ug.edu.gh/index1.php?linkid=325&sublinkid=177');
        $item3sub2=array('subItem'=>'Graduation ','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub3=array('subItem'=>'Catalog of Courses','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub4=array('subItem'=>'Internships','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub5=array('subItem'=>'Facilities','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub6=array('subItem'=>'Exchange Programmes','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub7=array('subItem'=>'Academic Advisors','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub8=array('subItem'=>'Academic Calendar','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub9=array('subItem'=>'Opportunities','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3sub10=array('subItem'=>'Award Schemes','link'=>'../../cpe/undergraduate/undergrade.php');        
        $item3sub11=array('subItem'=>'Application Forms','link'=>'../../cpe/undergraduate/undergrade.php');
        $item3submenuItems=array($item3sub1,$item3sub2,$item3sub3,$item3sub4,$item3sub5,$item3sub6,$item3sub7,$item3sub8,$item3sub9,$item3sub10,$item3sub11);
        $item3=array('item'=>'Undergraduate','link'=>'../../cpe/undergraduate/undergrade.php','submenu'=>$item3submenuItems);
        
        
        
        //GraduateSchool
        $item4sub1=array('subItem'=>'Programmes','link'=>'../../cpe/postgraduate/postgraduate.php');
        $item4sub2=array('subItem'=>'Admission ','link'=>'http://admission.ug.edu.gh/index1.php?linkid=325&sublinkid=177');
        $item4sub3=array('subItem'=>'Graduation ','link'=>'../../cpe/postgraduate/postgraduate.php');
        $item4sub4=array('subItem'=>'Catalog of Courses','link'=>'../../cpe/postgraduate/postgraduate.php');
        $item4sub5=array('subItem'=>'Research Areas','link'=>'../../cpe/postgraduate/postgraduate.php');
        $item4sub6=array('subItem'=>'Facilities','link'=>'../../cpe/postgraduate/postgraduate.php');
        $item4sub7=array('subItem'=>'Exchange Programme','link'=>'../../cpe/postgraduate/postgraduate.php');
        $item4sub8=array('subItem'=>'Academic Advisors','link'=>'../../cpe/postgraduate/postgraduate.php');       
        $item4sub9=array('subItem'=>'Application Forms','link'=>'../../cpe/postgraduate/postgraduate.php');        
        $item4submenuItems=array($item4sub1,$item4sub2,$item4sub3,$item4sub4,$item4sub5,$item4sub6,$item4sub7,$item4sub8,$item4sub9);         
        $item4=array('item'=>'Postgraduate','link'=>'../../cpe/postgraduate/postgraduate.php','submenu'=>$item4submenuItems);
        
        //Project
        $item5sub1=array('subItem'=>'Faculty Research','link'=>'../../cpe/project/project.php');
        $item5sub2=array('subItem'=>'Undergrad Research','link'=>'../../cpe/project/project.php');
	$item5sub3=array('subItem'=>'Graduate Research','link'=>'../../cpe/project/project.php');
        $item5sub4=array('subItem'=>'Departmental Research','link'=>'../../cpe/project/project.php');
        $item5sub5=array('subItem'=>'Contract Research','link'=>'../../cpe/project/project.php');
        $item5sub6=array('subItem'=>'Collaboration Research','link'=>'../../cpe/project/project.php');
        $item5sub7=array('subItem'=>'Community Project','link'=>'../../cpe/project/project.php');               
        $item5submenuItems=array($item5sub1,$item5sub2,$item5sub3,$item5sub4,$item5sub5,$item5sub6,$item5sub7);
        $item5=array('item'=>'Research Projects','link'=>'#','submenu'=>$item5submenuItems);
        
        
        //Partners       
        $item6sub1=array('subItem'=>'Academic Institutions','link'=>'#');
        $item6sub2=array('subItem'=>'Organizations/Industries','link'=>'#');       
        $item6sub3=array('subItem'=>'MOU\'s','link'=>'#');
        $item6sub4=array('subItem'=>'Others','link'=>'#');               
        $item6submenuItems=array($item6sub1,$item6sub2,$item6sub3,$item6sub4);
        $item6=array('item'=>'Partners','link'=>'../../cpe/partner/partner.php','submenu'=>$item6submenuItems);
        
        
        //Alumni        
        $item7sub1Sub1=array('subSubItem'=>'2003/2004 group','link'=>'../../cpe/yeargroup/yeargroup.php');
        $item7sub1Sub2=array('subSubItem'=>'2004/2005 group','link'=>'../../cpe/yeargroup/yeargroup.php');
        $item7sub1Sub3=array('subSubItem'=>'2005/2006 group','link'=>'../../cpe/yeargroup/yeargroup.php');
        $item7sub1menuItems=array($item7sub1Sub1,$item7sub1Sub2,$item7sub1Sub3);
        $item7sub1=array('subItem'=>'Classmates','link'=>'../../cpe/yeargroup/yeargroup.php','subsubmenu'=>$item7sub1menuItems);
        
        $item7sub2=array('subItem'=>'Support Department','link'=>'#');
        $item7sub3=array('subItem'=>'Networking','link'=>'#');
        $item7sub4=array('subItem'=>'Alumni Events','link'=>'#');
        $item7sub5=array('subItem'=>'Souvenirs','link'=>'#'); 
        $item7sub6=array('subItem'=>'Registration','link'=>'#');                    
        $item7sub7=array('subItem'=>'Job Opportunities','link'=>'#');                    

        $item7submenuItems=array($item7sub1,$item7sub2,$item7sub3,$item7sub4,$item7sub5,$item7sub6,$item7sub7);   
        
        $item7=array('item'=>'Alumni','link'=>'../../cpe/yeargroup/yeargroup.php','submenu'=>$item7submenuItems);
        
        //Contact Us
        $item8=array('item'=>'Contact Us','link'=>'../../cpe/contact/index.php','submenu'=>NULL);
        
        //Gallery
        $item9=array('item'=>'Gallery','link'=>'../../cpe/gallery/gallery.php','submenu'=>NULL);       
        
        
        
        //Constructing the main menu
        $mainMenuItems=array($item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9);
        $MAINMENU=new MenuCreator();
        $MAINMENU->BuildMainMenu($mainMenuItems,'Tools/menuCss.css');         
        ?>   
            
            
            
        <?php
        //THIS SECTION IS FOR THE LIVE SITE
        // put your code here
        echo "";
       /* require_once('../include/header.php');
        require_once '../ClassesIncluded.php';
        require_once '../ServiceObjects/FacultyStaffOrMemService.php';
        require_once '../ServiceObjects/Cleaner.php';
        require_once '../ServiceObjects/AuthorizationAndConf.php';
        
        //Login&Logout
        if(isset($_SESSION['authentic'])){        
        $item0=array('item'=>'Logout','link'=>'../index.php?logOut=1','submenu'=>NULL);       
        }
        else{
        //header("location: AlumnusLogin.php");//if not already login, redirect to login Page
        $item0sub1=array('subItem'=>'Alumnus','link'=>'../CMS_Pages/AlumnusLogin.php');  
        $item0sub2=array('subItem'=>'Staff','link'=>'../CMS_Pages/staffLogin.php');
        $item0submenuItems=array($item0sub1,$item0sub2);
        $item0=array('item'=>'Login','link'=>'#','submenu'=>$item0submenuItems);
        }
        
        //Home
        $item1sub1=array('subItem'=>'Home','link'=>'../index.php');        
        $item1submenuItems=array($item1sub1);
        $item1=array('item'=>'Home','link'=>'../index.php','submenu'=>$item1submenuItems);
        
        
        //Faculty/Staff
        $item2sub1Sub1=array('subSubItem'=>'Full Time','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php');
        $item2sub1Sub2=array('subSubItem'=>'Part-time','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php');
        $item2sub1Sub3=array('subSubItem'=>'Visiting Scholars','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php');
        $item2sub1Sub4=array('subSubItem'=>'Post Retirement','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php');
        $item2sub1Sub5=array('subSubItem'=>'Adjunct','link'=>'#');
        $item2sub1Sub6=array('subSubItem'=>'Graduate Assistant','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php');
        $item2sub1Sub7=array('subSubItem'=>'Teaching Assistant','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php');
        $item2sub1menuItems=array($item2sub1Sub1,$item2sub1Sub2,$item2sub1Sub3,$item2sub1Sub4,$item2sub1Sub5,$item2sub1Sub6,$item2sub1Sub7);
        $item2sub1=array('subItem'=>'Faculty','link'=>'http://cpe.ug.edu.gh/faculty/faculty.php','subsubmenu'=>$item2sub1menuItems);
        
        
        $item2sub2Sub1=array('subSubItem'=>'Administrative','link'=>'http://cpe.ug.edu.gh/staff/staff.php');
        $item2sub2Sub2=array('subSubItem'=>'Technical','link'=>'http://cpe.ug.edu.gh/staff/staff.php');
        $item2sub2Sub3=array('subSubItem'=>'Service Personnel','link'=>'http://cpe.ug.edu.gh/staff/staff.php');
        $item2sub2menuItems=array($item2sub2Sub1,$item2sub2Sub2,$item2sub2Sub3);
        $item2sub2=array('subItem'=>'Administrative Staff','link'=>'http://cpe.ug.edu.gh/staff/staff.php','subsubmenu'=>$item2sub2menuItems);
        
        //$item2sub3=array('subItem'=>'Academic Advisors','link'=>'faculty/faculty.php'); 
        
        $item2submenuItems=array($item2sub1,$item2sub2);
        $item2=array('item'=>'Staff','link'=>'#','submenu'=>$item2submenuItems);
        
        
        //Undergraduate
        $item3sub1=array('subItem'=>'Admission ','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub2=array('subItem'=>'Graduation ','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub3=array('subItem'=>'Catalog of Courses','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub4=array('subItem'=>'Internships','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub5=array('subItem'=>'Facilities','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub6=array('subItem'=>'Exchange Programmes','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub7=array('subItem'=>'Academic Advisors','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub8=array('subItem'=>'Academic Calendar','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub9=array('subItem'=>'Opportunities','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub10=array('subItem'=>'Award Schemes','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub11=array('subItem'=>'Undergrad Members','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3sub12=array('subItem'=>'Application Forms','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php');
        $item3submenuItems=array($item3sub1,$item3sub2,$item3sub3,$item3sub4,$item3sub5,$item3sub6,$item3sub7,$item3sub8,$item3sub9,$item3sub10,$item3sub11,$item3sub12);
        $item3=array('item'=>'Undergraduate','link'=>'http://cpe.ug.edu.gh/undergraduate/undergrade.php','submenu'=>$item3submenuItems);
        
        
        
        //GraduateSchool
        $item4sub1=array('subItem'=>'Programmes','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub2=array('subItem'=>'Admission ','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub3=array('subItem'=>'Graduation ','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub4=array('subItem'=>'Catalog of Courses','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub5=array('subItem'=>'Research Areas','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub6=array('subItem'=>'Facilities','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub7=array('subItem'=>'Exchange Programme','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub8=array('subItem'=>'Academic Advisors','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub9=array('subItem'=>'Grad Members','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');
        $item4sub10=array('subItem'=>'Application Forms','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php');        
        $item4submenuItems=array($item4sub1,$item4sub2,$item4sub3,$item4sub4,$item4sub5,$item4sub6,$item4sub7,$item4sub8,$item4sub9,$item4sub10);         
        $item4=array('item'=>'Graduate School','link'=>'http://cpe.ug.edu.gh/postgraduate/postgraduate.php','submenu'=>$item4submenuItems);
        
        //Project
        $item5sub1=array('subItem'=>'Faculty Research','link'=>'http://cpe.ug.edu.gh/project/project.php');
        $item5sub2=array('subItem'=>'Student Research','link'=>'http://cpe.ug.edu.gh/project/project.php');
        $item5sub3=array('subItem'=>'Departmental Research','link'=>'http://cpe.ug.edu.gh/project/project.php');
        $item5sub4=array('subItem'=>'Contract Research','link'=>'http://cpe.ug.edu.gh/project/project.php');
        $item5sub5=array('subItem'=>'Collaboration Research','link'=>'http://cpe.ug.edu.gh/cpe/project/project.php');
        $item5sub6=array('subItem'=>'Community Project','link'=>'http://cpe.ug.edu.gh/project/project.php');               
        $item5submenuItems=array($item5sub1,$item5sub2,$item5sub3,$item5sub4,$item5sub5,$item5sub6);
        $item5=array('item'=>'Research Projects','link'=>'#','submenu'=>$item5submenuItems);
        
        
        //Partners       
        $item6sub1=array('subItem'=>'Academic Institutions','link'=>'#');
        $item6sub2=array('subItem'=>'Organizations/Industries','link'=>'#');       
        $item6sub3=array('subItem'=>'MOU\'s','link'=>'#');
        $item6sub4=array('subItem'=>'Others','link'=>'#');               
        $item6submenuItems=array($item6sub1,$item6sub2,$item6sub3,$item6sub4);
        $item6=array('item'=>'Partners','link'=>'http://cpe.ug.edu.gh/partner/partner.php','submenu'=>$item6submenuItems);
        
        
        //Alumni        
        $item7sub1Sub1=array('subSubItem'=>'2003/2004 group','link'=>'http://cpe.ug.edu.gh/yeargroup/yeargroup.php');
        $item7sub1Sub2=array('subSubItem'=>'2004/2005 group','link'=>'http://cpe.ug.edu.gh/yeargroup/yeargroup.php');
        $item7sub1Sub3=array('subSubItem'=>'2005/2006 group','link'=>'http://cpe.ug.edu.gh/yeargroup/yeargroup.php');
        $item7sub1menuItems=array($item7sub1Sub1,$item7sub1Sub2,$item7sub1Sub3);
        $item7sub1=array('subItem'=>'Classmates','link'=>'http://cpe.ug.edu.gh/yeargroup/yeargroup.php','subsubmenu'=>$item7sub1menuItems);
        
        $item7sub2=array('subItem'=>'Support Department','link'=>'#');
        $item7sub3=array('subItem'=>'Networking','link'=>'#');
        $item7sub4=array('subItem'=>'Alumni Events','link'=>'#');
        $item7sub5=array('subItem'=>'Souvenirs','link'=>'#'); 
        $item7sub6=array('subItem'=>'Registration','link'=>'#');                    
        $item7sub7=array('subItem'=>'Job Opportunities','link'=>'#');                    

        $item7submenuItems=array($item7sub1,$item7sub2,$item7sub3,$item7sub4,$item7sub5,$item7sub6,$item7sub7);   
        
        $item7=array('item'=>'Alumni','link'=>'http://cpe.ug.edu.gh/yeargroup/yeargroup.php','submenu'=>$item7submenuItems);
        
        //Contact Us
        $item8=array('item'=>'Contact Us','link'=>'http://cpe.ug.edu.gh/contact/index.php','submenu'=>NULL);
        
        //Gallery
        $item9=array('item'=>'Gallery','link'=>'http://cpe.ug.edu.gh/gallery/gallery.php','submenu'=>NULL);       
        
        
        
        //Constructing the main menu
        $mainMenuItems=array($item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9);
        $MAINMENU=new MenuCreator();
        $MAINMENU->BuildMainMenu($mainMenuItems,'Tools/menuCss.css');         
        */?>  
