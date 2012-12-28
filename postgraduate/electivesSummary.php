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
             <div class="link">COMPUTER SYSTEMS</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">TELECOMMUNICATION SYSTEMS</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_3">
             <div class="link">AUTOMATION ENGINEERING</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_4">
             <div class="link">SOFTWARE ENGINEERING</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_5">
             <div class="link">NETWORK ENGINEERING</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_6">
             <div class="link">INFORMATION SYSTEMS ENGINEERING</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_7">
             <div class="link">BIO-COMPUTING</div>
             <div class="arrow"></div>
         </div>
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>Computer Systems Courses</strong><BR><BR>
          <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');


                        $firstRow = array('CPEN 607', 'VLSI System Design', '3');
                        $secondRow = array('CPEN 609', 'Computer System Performance', '3');
                        $thirdRow = array('CPEN 611', 'Parallel Computing Systems', '3');                        
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 606', 'System Testability', '3');
                        $secondRow = array('CPEN 608', 'Microprocessor Systems Design', '3');
                        $thirdRow = array('CPEN 612', 'Reconfigurable Systems', '3');
                       //$totalRow=array('','<b/>Total','18');


                        $tableData = array($firstRow, $secondRow, $thirdRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?>
			
 		</div>
		<div class="tabcontent" id="tab_content_2">
			<strong>Telecommunications Systems Courses</strong> <BR><BR>                       
                        <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 613', 'Communication Policy and Management', '3');
                        $secondRow = array('CPEN 615', 'Information Theory and Coding', '3');
                        $thirdRow = array('CPEN 617', 'Communication Networks Design', '3');
                        $fourthRow = array('CPEN 619', 'Wireless Communication Systems', '3');
                        $fifthRow = array('CPEN 621', 'Communication Network Management', '3');
                        $sixthRow = array('CPEN 623', 'Optical Communication Systems', '3');
                        $seventhRow = array('CPEN 627', 'Adaptive Signal Processing', '3');
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$seventhRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 614', 'Error Detection and Control', '3');
                        $secondRow = array('CPEN 616', 'Communication Networks Algorithms', '3');
                        $thirdRow = array('CPEN 618', 'Digital Communication Systems', '3');
                        $fourthRow = array('CPEN 622', 'Mobile Computing Systems', '3');
                        $fifthRow = array('CPEN 624', 'Optical Devices', '3');
                        $sixthRow = array('CPEN 626', 'Telecommunication Network Security', '3');
                        $seventhRow = array('CPEN 628', 'Multimedia Signal Processing', '3');
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$seventhRow);
                        $tableTester->generateTable15(array('Course', 'Course Name', 'Credit'), $tableData);
                                              
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?>
		</div>
                <div class="tabcontent" id="tab_content_3">
			<strong>Automation Engineering Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 631', 'System Optimization Methods', '3');
                        $secondRow = array('CPEN 633', 'Control Systems Design', '3');
                        $thirdRow = array('CPEN 635', 'Robotic Systems', '3');
                        $fourthRow = array('CPEN 637', 'Human Computer Interaction', '3');                        
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                          


                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('CPEN 632', 'Industrial Controls', '3');
                        $secondRow = array('CPEN 634', 'Programming for Industrial Automation', '3');
                        $thirdRow = array('CPEN 636', 'Communication in Automation', '3');
                        $fourthRow = array('CPEN 638', 'Machine Learning', '3');                           
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);
                        
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?>
		</div>
                <div class="tabcontent" id="tab_content_4">
			<strong>Software Engineering Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 641', 'Advanced Operating Systems', '3');
                        $secondRow = array('CPEN 643', 'Software Engineering', '3');
                        $thirdRow = array('CPEN 645', 'Software Design', '3');
                        $fourthRow = array('CPEN 647', 'Systems Engineering', '3');
                        $fifthRow = array('CPEN 649', 'Enterprise Application Integration', '3');
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                        
                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('CPEN 642', 'Real-Time Software and Systems', '3');
                        $secondRow = array('CPEN 644', 'Software Testing', '3');
                        $thirdRow = array('CPEN 646', 'Software Measurements and Quality', '3');
                        $fourthRow = array('CPEN 648', 'Software Maintenance', '3');
                        $fifthRow = array('CPEN 686', 'Software Architecture Systems', '3');
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                       
                        
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?>
		</div>
            <div class="tabcontent" id="tab_content_5">
              <strong>Networks Engineering Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 651', 'High Speed Networks', '3');
                        $secondRow = array('CPEN 653', 'Network Protocols and Services', '3');
                        $thirdRow = array('CPEN 655', 'Distributed Networks', '3');
                        $fourthRow = array('CPEN 657', 'Sensor Networks', '3');                       
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                        
                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('CPEN 652', 'Advanced Topics in Wireless Networks', '3');
                        $secondRow = array('CPEN 654', 'Multimedia Networks and Storage', '3');
                        $thirdRow = array('CPEN 656', 'Networks Security', '3');
                        $fourthRow = array('CPEN 658', 'E-Commerce Technologies', '3');                        
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                       
                        
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?>
            </div>
            <div class="tabcontent" id="tab_content_6">
              <strong>Information Systems Engineering Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 661', 'Information Security', '3');
                        $secondRow = array('CPEN 663', 'Cryptography and Analysis', '3');
                        $thirdRow = array('CPEN 665', 'Neural Networks', '3');
                        $fourthRow = array('CPEN 667', 'Advanced Database Systems', '3');
                        $fifthRow = array('CPEN 669', 'Speech Processing and Recognition', '3');
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                        
                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('CPEN 662', 'Pattern Recognition', '3');
                        $secondRow = array('CPEN 664', 'Artificial Intelligence', '3');
                        $thirdRow = array('CPEN 668', 'Data Compression', '3');
                        $fourthRow = array('CPEN 672', 'Data Mining', '3');
                        $fifthRow = array('CPEN 674', 'Computer Vision', '3');
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                       
                        
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?> 
            </div>
            <div class="tabcontent" id="tab_content_7">
               <strong>Bio-Computing Courses</strong> <BR><BR>
                         <?php
                        echo "<h3 style='color:blue;'>Semester I</h3>";
                        $tableTester = new tableGenerator('col', '');

                        $firstRow = array('CPEN 673', 'Biomedical Signal Processing', '3');
                        $secondRow = array('CPEN 675', 'Theory of Computations', '3');
                        $thirdRow = array('CPEN 677', 'Bioinformatics', '3');
                        $fourthRow = array('CPEN 679', 'Advanced Algorithm Design', '3');                        
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                        
                        echo "<h3 style='color:blue;'>Semester II</h3>";
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array('CPEN 674', ' Digital Image Processing', '3');
                        $secondRow = array('CPEN 676', 'Algorithms for Computational Biology', '3');
                        $thirdRow = array('CPEN 678', 'Mathematical Neurobiology', '3');
                        $fourthRow = array('CPEN 682', 'Analysis of Genomic Data', '3');                        
                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow);
                        $tableTester->generateTable16(array('Course', 'Course Name', 'Credit'), $tableData);                 
                       
                        
                        echo "<a style='color:blue;' href='detailedElectiveDescrptn.php'>Click for detail description</a>";
                        ?> 
            </div>
	</div>
</div>

</div>


</BODY>
</HTML>

