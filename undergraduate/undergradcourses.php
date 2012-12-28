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
             <div class="link">LEVEL 100 COURSES</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">LEVEL 200 COURSES</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_3">
             <div class="link">LEVEL 300 COURSES</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_4">
             <div class="link">LEVEL 400 COURSES</div>
             <div class="arrow"></div>
         </div>
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>Level 100 Courses</strong><BR><BR>
          <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');


                        $firstRow = array('FAEN 101', 'Algebra', '4');
                        $secondRow = array('FAEN 103', 'Basic Mechanics I', '3');
                        $thirdRow = array('FAEN 105', 'Engineering Drawing with CAD', '3');
                        $fourthRow = array('FAEN 109', 'General Physics', '3');
                        $fifthRow = array('CPEN 101', 'Engineering Computational Tools', '2');
                        $sixthRow = array('UGRC 110', 'Academic Writing I', '3');
                        $totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$totalRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('FAEN 102', 'Calculus I', '4');
                        $secondRow = array('FAEN 106', 'Applied Electricity', '3');
                        $thirdRow = array('FAEN 108', 'Basic Electronics', '3');
                        $fourthRow = array('FAEN 112', 'C Programming', '2');
                        $fifthRow = array('CPEN 102', 'Introduction to Database Systems', '3');
                        $sixthRow = array('UGRC 150', 'Critical Thinking & Practical Reasoning', '3');   
                        $totalRow=array('','<b/>Total','18');


                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$totalRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedLDescptn.php'>Click for detail 100 course description</a>";
                        ?>
			
 		</div>
		<div class="tabcontent" id="tab_content_2">
			<strong>Level 200 Courses</strong> <BR><BR>                       
                        <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('FAEN 201', 'Calculus II', '4');
                        $secondRow = array('CPEN 201', 'C++ Programming ', '3');
                        $thirdRow = array('CPEN 203', 'Digital Circuits', '3');
                        $fourthRow = array('CPEN 205', 'Discrete Mathematical Structures', '2');
                        $fifthRow = array('CPEN 207', 'Introduction to Software Engineering', '3');
                        $sixthRow = array('UGRC 130', 'Understanding Human Societies', '3');
                        $totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$totalRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('FAEN 202', 'Differential Equations', '4');
                        $secondRow = array('FAEN 206', 'Technical Report Writing', '3');
                        $thirdRow = array('CPEN 202', 'Computer Systems Design', '2');
                        $fourthRow = array('CPEN 204', 'Data Structures and Algorithms', '3');
                        $fifthRow = array('CPEN 206', 'Linear Circuits ', '3');
                        $sixthRow = array('UGRC 220', 'Liberal and African Studies', '3');   
                        $totalRow=array('','<b/>Total','18');


                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$totalRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedLDescptn.php'>Click for detail 200 course description</a>";
                        ?>
		</div>
                <div class="tabcontent" id="tab_content_3">
			<strong>Level 300 Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('FAEN 301', 'Numerical Methods', '3');
                        $secondRow = array('CPEN 301', 'Signals and Systems', '3');
                        $thirdRow = array('CPEN 303', 'Computer Architecture', '3');
                        $fourthRow = array('CPEN 305', 'Computer Networks', '3');
                        $fifthRow = array('CPEN 307', 'Operating Systems', '3');
                        $sixthRow = array('CPEN 309', 'Programming Language Fundamentals', '3');
                        $totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$totalRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('FAEN 302', 'Statistics for Engineers', '3');
                        $secondRow = array('CPEN 302', 'Computer Systems Engineering', '3');
                        $thirdRow = array('CPEN 304', 'Digital Signal Processing', '3');
                        $fourthRow = array('CPEN 306', 'Microelectronic Devices and Circuits', '3');
                        $fifthRow = array('CPEN 308', 'Fundamentals of Information Transmission', '2');
                        $sixthRow = array('CPEN 312', 'Object Oriented Programming with Java', '3');   
                        $seventhRow = array('CPEN 314', 'Industrial Practice', '1');   
                        $totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$seventhRow,$totalRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedLDescptn.php'>Click for detail 300 course description</a>";
                        ?>
		</div>
                <div class="tabcontent" id="tab_content_4">
			<strong>Level 400 Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('FAEN 401', 'Law for Engineers', '3');
                        $secondRow = array('CPEN 400', 'Independent Project', '3');
                        $thirdRow = array('CPEN 401', 'Control Systems Analysis and Design', '3');
                        $fourthRow = array('CPEN 403', 'Embedded Systems', '3');
                        $fifthRow = array('CPEN 405', 'Artificial Intelligence', '3');
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        
                        $option = array('<b/>OPTION ', 'Description', 'Credit'); 
                        $optionRow1 = array('<b/>A1.', '<b/>SOFTWARE SYSTEMS', '');  
                        $seventhRow = array('CPEN 407', 'Software Engineering', '3');
                        $eighthRow = array('CPEN 409', 'Computer Graphics', '3');
                        $optionRow2 = array('<b/>B1.', '<b/>HARDWARE SYSTEMS', '');
                        $tenthRow = array('CPEN 411', 'VLSI Systems Design', '3');
                        $eleventhRow = array('CPEN 413', 'Microprocessor Systems And Integration', '3');
                        $optionRow3 = array('<b/>C1.', '<B/>COMPUTER SYSTEMS', '');
                        $thirtheenthRow = array('CPEN 415', 'Distributed Computing', '3');
                        $fourtheenthRow = array('CPEN 417', 'Applications for Parallel Processors', '3');                        
                        $totalRow=array('','<b/>Total','18');

                        $tableData = array($option,$optionRow1,$seventhRow,$eighthRow,$optionRow2,$tenthRow,$eleventhRow,$optionRow3,$thirtheenthRow,$fourtheenthRow,$totalRow);
                        $tableTester->generateTable16(array('<b/>ELECTIVES ', '<b/>FOR SEMESTER I', ''), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('FAEN 402', 'Principles of Management and Entrepreneurship', '3');
                        $secondRow = array('CPEN 400', 'Independent Project', '3');
                        $thirdRow = array('CPEN 402 ', 'Advanced Computer Architecture', '3');
                        $fourthRow = array('CPEN 404 ', 'Computer Vision and Robotics', '3');
                        $fifthRow = array('CPEN 406', 'Wireless Communication  Systems', '3');
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        
                        $option = array('<b/>OPTION ', 'Description', 'Credit'); 
                        $optionRow1 = array('<b/>A2.', '<b/>SOFTWARE SYSTEMS', '');
                        $seventhRow = array('CPEN 408', 'Human Computer Interface', '3');
                        $eighthRow = array('CPEN 412', 'Web Software Architecture', '3');
                        $optionRow2 = array('<b/>B2.', '<b/>HARDWARE SYSTEMS', '');
                        $tenthRow = array('CPEN 414', 'DSP System Implementation', '3');
                        $eleventhRow = array('CPEN 416', 'Integrated Circuit for Communication', '3');
                        $optionRow3 = array('<b/>C2.', '<B/>COMPUTER SYSTEMS', '');
                        $thirtheenthRow = array('CPEN 418', 'Security In Computer Systems', '3');
                        $fourtheenthRow = array('CPEN 422', 'Multimedia Systems', '3');                        
                        $totalRow=array('','<b/>Total','18');

                        $tableData = array($option,$optionRow1,$seventhRow,$eighthRow,$optionRow2,$tenthRow,$eleventhRow,$optionRow3,$thirtheenthRow,$fourtheenthRow,$totalRow);
                        $tableTester->generateTable16(array('<b/>ELECTIVES', '<b/>FOR SEMESTER II', ''), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedLDescptn.php'>Click for detail 400 course description</a>";
                        ?>
		</div>
	</div>
</div>

</div>


</BODY>
</HTML>

