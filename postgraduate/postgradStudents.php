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
             <div class="link">MPHIL Students</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">MENG Students</div>
             <div class="arrow"></div>
         </div>    
         
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
		<strong style="color:green;">POSTGRADUATE MEMBERS</strong><BR><BR>
			<h4><font color="#000080">MPHIL Students</font></h4>
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
                    <strong style="color:green;">POSTGRADUATE MEMBERS</strong><BR><BR>
			<h4><font color="#000080">MENG Students</font></h4>
			 <?php
			$tableTester = new tableGenerator('col', '');


                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');                        

                        $tableData = array($firstRow,$secondRow);
                        $tableTester->generateTable15(array('Surname', 'FirstName', 'Hall','Email'), $tableData);
                        ?>
            <BR><BR>
		</div>

			
	</div>
</div>

</div>


</BODY>
</HTML>

