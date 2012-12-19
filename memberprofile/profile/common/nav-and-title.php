<?php
//ob_start();
//require_once '../../../ClassesIncluded.php';
?>   
<div id="page-wrap">
	
	    <div id="nav-bar">
	    
            <ul id="main-nav">
                <?php if(isset($_GET['flid']))$_SESSION['flid']=$_GET['flid'];?>
	           <!--li class="index"><a href="index.php?dl=1">Biography</a></li>

	           <li class="demo1"><a href="demo1.php?dl=2">Research Interests</a></li>
               <li class="demo2"><a href="demo2.php?dl=3">Publications</a></li>
                   <li class="demo2"><a href="conference.php?dl=4">Conferences</a></li>
                   <li class="demo2"><a href="research.php?dl=5">Research/Projects</a></li>
	           <li class="changelog"><a href="changelog.php?dl=6">Teaching</a></li>
	            <li class="parameters"><a href="collaboration.php?dl=7">Collaborations</a></li>
                <li class="parameters"><a href="parameters.php?dl=8">Interest & Hobbies</a></li>

               <li class="parameters"><a href="personal.php?dl=9">Gallery</a></li>
                 <li class="parameters"><a href="contact.php?dl=10">Contact Details</a></li-->
                   
             <?php if(isset($_SESSION['flid'])&&(($_SESSION['flid']==1)||($_SESSION['flid']==2)||($_SESSION['flid']==3)||($_SESSION['flid']==4))){ ?>      
                   <li class="index"><a href="index.php?dl=1">Biography</a></li>

	           <li class="demo1"><a href="index.php?dl=2">Research Interests</a></li>
               <li class="demo2"><a href="index.php?dl=3">Publications</a></li>
                   <li class="demo2"><a href="index.php?dl=4">Conferences</a></li>
                   <li class="demo2"><a href="index.php?dl=5">Research/Projects</a></li>
	           <li class="changelog"><a href="index.php?dl=6">Teaching</a></li>
	            <li class="parameters"><a href="index.php?dl=7">Collaborations</a></li>
                <li class="parameters"><a href="index.php?dl=8">Interest & Hobbies</a></li>

               <li class="parameters"><a href="index.php?dl=9">Gallery</a></li>
                 <li class="parameters"><a href="index.php?dl=10">Contact Details</a></li>
            <?php }?>
                 
                 
                 <?php if(isset($_SESSION['flid'])&&(($_SESSION['flid']==5)||($_SESSION['flid']==6)||($_SESSION['flid']==7)||($_SESSION['flid']==8)||($_SESSION['flid']==9))){ ?>      
                   <li class="index"><a href="index.php?dl=1">Biography</a></li>	                        
                   <li class="demo2"><a href="index.php?dl=5">Research/Projects</a></li>
	           <li class="changelog"><a href="index.php?dl=6">Teaching</a></li>	          
                <li class="parameters"><a href="index.php?dl=8">Interest & Hobbies</a></li>
               <li class="parameters"><a href="index.php?dl=9">Gallery</a></li>
                 <li class="parameters"><a href="index.php?dl=10">Contact Details</a></li>
            <?php }?>
                 
                 
               </ul>
	       

	    
	    </div>
	    <?php
           // echo '';            
            $staffOrMem=new FacultyStaffOrMemService();
            if(isset($_GET['md']))$_SESSION['md']=$_GET['md'];
            $Pid=$_SESSION['md'];
            $namer=$staffOrMem->getByID($Pid);
            if(isset($namer))echo "<h1><a href='#'> {$namer[0]->getFirstName()} {$namer[0]->getOtherNames()} {$namer[0]->getSurName()}&nbsp|&nbsp<a style='color :blue; font-size:15px;' href = '../../faculty/faculty.php'>back</a>&nbsp|&nbsp<a style='color :blue; font-size:15px;' href = 'http://cpe.ug.edu.gh'>home</a><BR>";
            ?>
	    <!--h1><a href="#"> Godfrey A. Mills&nbsp|&nbsp<a href = "http://www.cpe.ug.edu.gh/index1.php?linkid=212">back</a><BR-->



</span></a></h1>
	    
	    <div id="main-content"><div id="inside-content">
