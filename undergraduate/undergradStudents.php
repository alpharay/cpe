<?php ob_start();?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>    
    <?require_once '../Tools/calendar/calendarIncluder.php';?>
</head>  
     <body>        
        <div id="container">
            
            <?php require_once '../Tools/topNavigationMenu.php';           
            ?>  
            
<div id ="undergrad">
<div class="tabscontainer">
     <div class="tabs">

         <div class="tab selected first" id="tab_menu_1">
             <div class="link">L100 Students</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">L200 Students</div>
             <div class="arrow"></div>
         </div>

          <div class="tab lab" id="tab_menu_3">
             <div class="link">L300 Students</div>
             <div class="arrow"></div>
         </div>
          <div class="tab lab" id="tab_menu_4">
             <div class="link">L400 Students</div>
             <div class="arrow"></div>
         </div>    
         
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
		<strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
			<h4><font color="#000080">L100 Students</font></h4>
			 <?php
			$tableTester = new tableGenerator('col', '');


                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');                        

                        $tableData = array($firstRow,$secondRow);
                        $tableTester->generateTable15(array('Surname', 'FirstName', 'Hall','Email'), $tableData);
                        ?>
                        <BR><BR>
 		</div>
		<div class="tabcontent" id="tab_content_2">
                    <strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
			<h4><font color="#000080">L200 Students</font></h4>
			 <?php
			$tableTester = new tableGenerator('col', '');


                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');                        

                        $tableData = array($firstRow,$secondRow);
                        $tableTester->generateTable15(array('Surname', 'FirstName', 'Hall','Email'), $tableData);
                        ?>
            <BR><BR>
		</div>

		<div class="tabcontent" id="tab_content_3">
                    <strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
            <h4><font color="#000080">L300 Students</font></h4>
            <?php
			$tableTester = new tableGenerator('col', '');


                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');                        

                        $tableData = array($firstRow,$secondRow);
                        $tableTester->generateTable15(array('Surname', 'FirstName', 'Hall','Email'), $tableData);
                        ?>
            <BR><BR>			
	</div>
            <div class="tabcontent" id="tab_content_4">
		<strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
            	<h4><font color="#000080">L400 Students</font></h4>
			 <?php
			$tableTester = new tableGenerator('col', '');


                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');                        

                        $tableData = array($firstRow,$secondRow);
                        $tableTester->generateTable15(array('Surname', 'FirstName', 'Hall','Email'), $tableData);
                        ?>
		</div>	
</div>

</div>


</BODY>
</HTML>

