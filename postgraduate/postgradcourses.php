<?php ob_start();?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    
</head>  
     <body>        
        <div id="container">
            
            <?php require_once '../Tools/topNavigationMenu.php';?>  
            
<div id ="undergrad">
<div class="tabscontainer">
     <div class="tabs">

         <div class="tab selected first" id="tab_menu_1">
             <div class="link">MENG Programme</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">MPHIL Programme</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_3">
             <div class="link">Phd Programme</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_4">
             <div class="link">ELECTIVES</div>
             <div class="arrow"></div>
         </div>
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>MEng Programme</strong><BR><BR>
                        A summary of the core courses to be taken by all MEng students is listed below: <br/><br/>
          <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');


                        $firstRow = array('CPEN 601', 'Engineering Research Methods', '3');
                        $secondRow = array('CPEN 603', 'System-On-Chip Design', '3');
                        $thirdRow = array('CPEN 605', 'Probability and Random Processes', '3');
                        $fourthRow = array('CPEN 610', 'Seminar I', '3');                       
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 600', 'MEng Project', '12');
                        $secondRow = array('CPEN 602', 'Engineering Project Management', '3');
                        $thirdRow = array('CPEN 604', 'Real Time Computing Systems', '3');
                        //$totalRow=array('','<b/>Total','18');


                        $tableData = array($firstRow, $secondRow, $thirdRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedCoreDescrptn.php'>Click for detail MENG core course description</a>";
                        echo "<br/><a style='color:green;' href='detailedElectiveDescrptn.php'>Click for detail Elective course description</a>";                        
                        ?>
			
 		</div>
		<div class="tabcontent" id="tab_content_2">
			<strong>MPHIL Programme</strong> <BR><BR>    
                        A summary of the core courses to be taken by all MPhil students is listed below: <br/><br/>                        
                        <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 601', 'Engineering Research Methods ', '3');
                        $secondRow = array('CPEN 603', 'System-On-Chip Design', '3');
                        $thirdRow = array('CPEN 605', 'Probability and Random Processes', '3');                        
                       // $totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 602', 'Engineering Project Management', '3');
                        $secondRow = array('CPEN 604', 'Real Time Computing Systems', '3');
                        $thirdRow = array('CPEN 684', 'Advanced Engineering Mathematics', '3');
                        $fourthRow = array('CPEN 610', 'Seminar I', '3');                          
                        //$totalRow=array('','<b/>Total','18');


                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedCoreDescrptn.php'>Click for detail MPIL core course description</a>";
                        echo "<br/><a style='color:green;' href='detailedElectiveDescrptn.php'>Click for detail Elective course description</a>";                        
                        ?>
		</div>
                <div class="tabcontent" id="tab_content_3">
			<strong>PhD Programme</strong> <BR><BR>
                         <?php //FOR THE FIRST YEAR OF PHD STUDY
                        echo "<h3 style='color:red;'>PhD Core Courses - Year I</h3><h4 style='color:blue;'>Semester I</h4>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 701', 'Research and Project Proposal', '3');
                        $secondRow = array('CPEN 710 ', 'Seminar I', '3');                       
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h4 style='color:blue;'>Semester II</h4>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('CPEN 702', ' Research Management', '3');                          
                        $totalRow=array('','<b/>Total','18');
                        $tableData = array($firstRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        
                        
                        //FOR THE SECOND AND THIRD YEARS OF PHD STUDY
                        echo "<h3 style='color:red;'>PhD Core Courses - Year II and Year III</h3><h4 style='color:blue;'>Semester I and II </h4>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 700', 'PhD Thesis', '48');
                        $secondRow = array('CPEN 720', ' Seminar II', '3');
                        $thirdRow=array('CPEN 730','Seminar III','3');
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                        
                        echo "<a style='color:blue;' href='detailedCoreDescrptn.php'>Click for detail PhD core course description</a>";
                        echo "<br/><a style='color:green;' href='detailedElectiveDescrptn.php'>Click for detail Elective course description</a>";                        
                        ?>
		</div>
                <div class="tabcontent" id="tab_content_4">
			<strong>ELECTIVES</strong> <BR><BR>
                        Students will be expected to select a minimum of four (4) elective courses (12 credits) 
                        from any of the specialization areas of interest. Students have the option to select courses 
                        across the various disciplines based on recommendations from academic supervisors or by the 
                        Department. In order to provide adequate theoretical foundation to pursue research in any of 
                        the specialization areas, it is recommended that students select not less than 4 elective 
                        courses from that area of specialization.
                        <i>Further, in order to ensure that students accumulate adequate credits to meet the requirements for graduation, it is recommended that students go beyond the minimum number of 12 credits stated above.</i>
                         <?php 
                        echo "<ul style='padding-left:50px; '> ";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Computer Systems Courses</a>";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Telecommunications Systems Courses</a>";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Automation Engineering Courses</a>";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Software Engineering Courses</a>";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Networks Engineering Courses</a>";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Information Systems Engineering Courses</a>";
                        echo "<li/><a style='color:blue; font-size:15px;' href='electivesSummary.php'>Bio-Computing Courses</a>";                        
                        echo "</ul>";
                        ?>
		</div>
	</div>
</div>

</div>


</BODY>
</HTML>

