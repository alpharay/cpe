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
             <div class="link">2007-2008</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">2008-2009</div>
             <div class="arrow"></div>
         </div>

          <div class="tab lab" id="tab_menu_3">
             <div class="link">2009-2010</div>
             <div class="arrow"></div>
         </div>
          <div class="tab fas" id="tab_menu_4">
             <div class="link">2010-2011</div>
             <div class="arrow"></div>
         </div>
          <div class="tab exc" id="tab_menu_5">
             <div class="link">2011-2012</div>
             <div class="arrow"></div>
         </div>       
        
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>2007-2008</strong><BR><BR>
                        <h2 style="color: green;">AWARD WINNERS</h2>
                        <?
                                         
                        
                        $tableTester = new tableGenerator('col', '');
                         
                        //for all students
                        $firstRow = array('<b/>Milicom Ghana Ltd (TiGO) Annual prize for best Graduating Student in Computer Engineering', 'Milicom Ghana Ltd.(TiGO)', 'GH&#162;2000','James Ainooson');
                        $secondRow = array('<b/>SISCO Annual Award for best Research Project in Computer Engineering', 'Somuah Information Systems Company Ltd', 'GH&#162;750','Hans Nana Siaw');
                        
                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable14(array('AWARD', 'SPONSORING COMPANY', 'VALUE','WINNERS'), $tableData);
                        ?>
                        <BR><BR>
         <strong></strong><BR><BR>
			
 		</div>
		<div class="tabcontent" id="tab_content_2">
			<strong>2008-2009</strong> <BR><BR>                    
                        <h2 style="color: green;">AWARD WINNERS</h2>
                        <?
                                         
                        
                        $tableTester = new tableGenerator('col', '');
                         
                        //for all students
                        $firstRow = array('<b/>Milicom Ghana Ltd (TiGO) Annual prize for best Graduating Student in Computer Engineering', 'Milicom Ghana Ltd.(TiGO)', 'GH&#162;2000','Augustine Gyawu');
                        $secondRow = array('<b/>SISCO Annual Award for best Research Project in Computer Engineering', 'Somuah Information Systems Company Ltd', 'GH&#162;750','Augustine Gyawu');
                        
                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable14(array('AWARD', 'SPONSORING COMPANY', 'VALUE','WINNERS'), $tableData);
                        ?>
		</div>

		<div class="tabcontent" id="tab_content_3">
		<strong>2009-2010</strong><BR><BR>
                <h2 style="color: green;">AWARD WINNERS</h2>
                        <?
                                         
                        
                        $tableTester = new tableGenerator('col', '');
                         
                        //for all students
                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');
                        
                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable14(array('AWARD', 'SPONSORING COMPANY', 'VALUE','WINNERS'), $tableData);
                        ?>To be filled
		</div>
			<div class="tabcontent" id="tab_content_4">
		<strong>2010-2011</strong><BR><BR>
		<h2 style="color: green;">AWARD WINNERS</h2>
                        <?
                                         
                        
                        $tableTester = new tableGenerator('col', '');
                         
                        //for all students
                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');
                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable14(array('AWARD', 'SPONSORING COMPANY', 'VALUE','WINNERS'), $tableData);
                        ?>To be filled
		</div>
		<div class="tabcontent" id="tab_content_5">
			<strong>2011-2012</strong><BR><BR>
                        <?
                                         
                        
                        $tableTester = new tableGenerator('col', '');
                         
                        //for all students
                        $firstRow = array('', '', '','');
                        $secondRow = array('', '', '','');
                        $tableData = array($firstRow, $secondRow);
                        $tableTester->generateTable14(array('AWARD', 'SPONSORING COMPANY', 'VALUE','WINNERS'), $tableData);
                        ?>
			To be filled
		</div>          
           
	</div>
</div>

</div>


</BODY>
</HTML>

