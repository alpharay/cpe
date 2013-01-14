<?php ob_start();
//require_once('../Tools/PageLinkedSideMenu.php');
?>
<HTML><HEAD><TITLE>Computer Engineering</TITLE>
<style type ="text/css">
@import url("../css/style.css");
@import url("../css/project.css");
@import url("../css/undergrade.css");
</style>
<style type ="text/css">
	@import url("../Tools/css/style.css");
</style>
<script type="text/javascript" src="../Tools/jquery/jquery.js"></script>
<link rel="stylesheet" href="../Tools/css/mosaic.css" type="text/css" media="screen" />
<script type="text/javascript" src="../Tools/js/mosaic.1.0.1.js"></script>
<script type="text/javascript" src="../Tools/jquery/jquery1.2.3.js"></script>
<link type="text/css" href="../Tools/menu.css" rel="stylesheet" />
<link rel="stylesheet" href="../Tools/css/style-newsticker.css" type="text/css" media="screen" />
<script src="../Tools/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../Tools/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type='text/javascript' src='../Tools/jquery-1.4.2.min.js'></script>
<script type='text/javascript' src='../Tools/slotmachine.js'></script>
<script type="text/javascript" src="../Tools/js/jquery.js"></script>
<link type="text/css" href="../menu.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/style-newsticker.css" type="text/css" media="screen" />
<script src="../js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
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
<script type="text/javascript" src="../undergraduate/js/jquery-1.5.2.min.js"></script>
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
<?php
	require_once('../ClassesIncluded.php');
?>
</script>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Galleriffic | Integration with history plugin</title>
		<link rel="stylesheet" href="../css/basic.css" type="text/css" />
		<link rel="stylesheet" href="../css/galleriffic-3.css" type="text/css" />
		<script type="text/javascript" src="../js/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="../js/jquery.history.js"></script>
		<script type="text/javascript" src="../js/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="../js/jquery.opacityrollover.js"></script>
		<!-- We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
	</head>
    
    
    
	<body>
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
    
    <div id ="container">
    
    <div id = "img">
    <img src = "../image/ug_standard_new_sl1.png" >
    </div>
     <div id = "shortlink">
    <a href = "http://webmail.ug.edu.gh/">Staff Webmail</a> &nbsp|&nbsp <a href="http://pmis-1.ug.edu.gh:7771/pls/prodi01/w99pkg.mi_login">MIS Web</a>&nbsp|&nbsp<a href = "http://st.ug.edu.gh/">Student Webmail</a>&nbsp|&nbsp <a href="http://www.ug.edu.gh/index1.php?linkid=128">Site Map</a>&nbsp|&nbsp <a href="http://www.ug.edu.gh/index1.php?linkid=212">News</a>&nbsp|&nbsp <a href = "http://cpe.ug.edu.gh">back</a>
    </div>
    
    <?php
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
		
        <div style="height: 75px;"></div>
		<div id="page">
			<div id="container">
				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="content">
					<div id="controls" class="controls"></div>
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					</div>
					<div id="caption" class="caption-container"></div>
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
                    <?php
						
						$result = mysql_query("SELECT * FROM galleryimages WHERE album_name=" . $row['picture_name'] . ";");
						while($row = mysql_fetch_array($result))
						{
							echo $row['picture_name'];
							echo '<li>
									<a class="thumb" name="' . $row['picture_name'] . '" href="../gallery/Graduation/' . $row['picture_name'] . '" title="' . $row['album_name'] . '">
										<img src="../gallery/images/' . $row['picture_name'] . '" width="80" height="70" alt="' . $row['album_name'] . '" />
									</a>"
									<div class="caption">
										<div class="download">
											<a href="../gallery/images/' . $row['picture_name'] . '">Download Original</a>
										</div>
										<div class="image-title">' . $row['album_name'] . '</div>
										<div class="image-desc">' . $row['picture_description'] . '</div>
									</div>
								</li>
								';
							}
                    ?>
					</ul>
				</div>
				<!-- End Advanced Gallery Html Containers -->
				<div style="clear: both;"></div>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             true,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});

				/**** Functions to support integration of galleriffic with the jquery.history plugin ****/

				// PageLoad function
				// This function is called when:
				// 1. after calling $.historyInit();
				// 2. after calling $.historyLoad();
				// 3. after pushing "Go Back" button of a browser
				function pageload(hash) {
					// alert("pageload: " + hash);
					// hash doesn't contain the first # character.
					if(hash) {
						$.galleriffic.gotoImage(hash);
					} else {
						gallery.gotoIndex(0);
					}
				}

				// Initialize history plugin.
				// The callback is called at once by present location.hash. 
				$.historyInit(pageload, "advanced.html");

				// set onlick event for buttons using the jQuery 1.3 live method
				$("a[rel='history']").live('click', function(e) {
					if (e.button != 0) return true;
					
					var hash = this.href;
					hash = hash.replace(/^.*#/, '');

					// moves to a new page. 
					// pageload is called at once. 
					// hash don't contain "#", "?"
					$.historyLoad(hash);

					return false;
				});

				/****************************************************************************************/
			});
		</script>
        </div>
	</body>
</html>