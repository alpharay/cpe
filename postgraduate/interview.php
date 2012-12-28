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
             <div class="link">MPHIL CANDIDATES</div>
             <div class="arrow"></div>
         </div>
         
          <div class="tab" id="tab_menu_2">
             <div class="link">MENG CANDIDATES</div>
             <div class="arrow"></div>
         </div>
         
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>Interview of Candidates</strong><BR><BR>
                        
                        The following MPHIL candidates have been short-listed to attend interview 
                        at the Department of Computer Engineering at 10:00am on 26th June and 27th June 
                        2012 respectively. The venue is the Conference Room of the New Faculty of 
                        Engineering Sciences Building.  Each MPHIL candidate is required to come
                        along with a printed copy of his/her research proposal and as part
                        of the process will be required to give 10 minutes Powerpoint presentation 
                        on the research proposal. Laptop will be made available for the presentation.<BR/><BR/>
          <?php
                        echo "<h3 style='color:blue;'>A. MPHIL CANDIDATES- Tuesday June 26, 2012</h3>";
                        $tableTester = new tableGenerator('col', '');


                        $firstRow = array('1.', 'Ofori-Amanfo, Kwadwo Boateng ', '');
                        $secondRow = array('2.', 'Acquah, Moses Amoasi ', '');
                        $thirdRow = array('3.', 'Agyeman, Anthony Afrifa ', ''); 
                        $fourthRow = array('4.', 'Nyarko, Kwame', '');
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow,$fourthRow);
                        $tableTester->generateTable15(array('A.', 'MPHIL CANDIDATES', 'Time: 9:30am - 12:00pm'), $tableData);
                        
                        
                        
                        
                        
                        
                        echo "<h3 style='color:blue;'></h3>";
                        $tableTester = new tableGenerator('col', '');


                        $firstRow = array('5.', 'Agbesi, Collison  ', '');
                        $secondRow = array('6.', 'Asiedu, Derrick', '');
                        $thirdRow = array('7.', 'Agebure, Moses ', ''); 
                        $fourthRow = array('8.', 'Mensah, Benedicta', '');
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow,$fourthRow);
                        $tableTester->generateTable15(array('A.', 'MPHIL CANDIDATES', 'Time: 1:00pm - 3:30pm'), $tableData);
                         
                         ?>
			
 		</div>
            
            <div class="tabcontent" id="tab_content_2">
			<strong>Interview of Candidates</strong><BR><BR>
                        
                        The following MENG candidates have been short-listed to attend interview 
                        at the Department of Computer Engineering at 10:00am on 26th June and 27th June 
                        2012 respectively. The venue is the Conference Room of the New Faculty of 
                        Engineering Sciences Building.  Each MPHIL candidate is required to come
                        along with a printed copy of his/her research proposal and as part
                        of the process will be required to give 10 minutes Powerpoint presentation 
                        on the research proposal. Laptop will be made available for the presentation.<BR/><BR/>                      
                        <?php
                        echo "<h3 style='color:blue;'>B. MENG CANDIDATES- Wednesday June 27, 2012</h3>";
                        $tableTester = new tableGenerator('col', '');


                        $firstRow = array('1.', 'Xenya, Michael ', '');
                        $secondRow = array('2.', 'Osumanu, Mohammed', '');
                        $thirdRow = array('3.', 'Agbemabiese, Patrick ', ''); 
                        $fourthRow = array('4.', 'Addison, Maxwell ', '');
                        $fifthRow=array('5.','Togoh, Emmanuel','');
                        $sixthRow=array('6.','Pomary, Pamela','');
                        $seventhRow=array('7.','Petershie, Sharita ','');
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow, $secondRow, $thirdRow,$fourthRow,$fifthRow,$sixthRow,$seventhRow);
                        $tableTester->generateTable15(array('A.', 'MPHIL CANDIDATES', 'Time: 9:30am - 12:00pm'), $tableData);                       
                        
                      ?>
		</div>
		
	</div>
</div>

</div>


</BODY>
</HTML>

