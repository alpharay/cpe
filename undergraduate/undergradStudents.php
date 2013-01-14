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

            $result=mysql_query("SELECT `surName`, `otherNames`, `emailAddress`, `hall`, `yearGroup`, `studLevel` FROM `student` ORDER BY `surName`");
            //this function gets students according to their level
            function getStudents($queryResult, $level)
            {
				if(mysql_num_rows($queryResult)>0)
				{
					$tableData = array();
					while($row=mysql_fetch_array($queryResult))
					{
						if ($row['studLevel']==$level)
						{
							$surname=$row['surName'];
							$otherNames=$row['otherNames'];
							$emailAddress=$row['emailAddress'];
							$fillRow = array($surname, $otherNames, $emailAddress);
							array_push($tableData,$fillRow);
						}
					}
					mysql_data_seek($queryResult,0);
					return $tableData;
				}
            }
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

          <div class="tab" id="tab_menu_3">
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
                        //$fillRow = array($one, $two, $three);
                        //$secondRow = array('', '', '','');

                        //$tableData = array($firstRow,$secondRow);
                        $tableTester->generateTable15(array('Surname', 'Other Names','Email'), getStudents($result,100));
                        
                        ?>
                        <BR><BR>
 		</div>
		<div class="tabcontent" id="tab_content_2">
                    <strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
			<h4><font color="#000080">L200 Students</font></h4>
			 <?php
            //$tableTester = new tableGenerator('col', '');
            /*$tableData = array();
            while($row=mysql_fetch_array($result))
            {
                $surname=$row['surName'];
                $otherNames=$row['otherNames'];
                $emailAddress=$row['emailAddress'];
                echo $surname;
                if ($row['studLevel']==200)
                {
                    $fillRow = array($surname, $otherNames, $emailAddress);
                    array_push($tableData,$fillRow);
                }
            }*/

            $tableTester->generateTable15(array('Surname', 'Other Names','Email'), getStudents($result,200));
            
                        ?>
            <BR><BR>
		</div>

		<div class="tabcontent" id="tab_content_3">
                    <strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
            <h4><font color="#000080">L300 Students</font></h4>
            <?php
            $tableTester->generateTable15(array('Surname', 'Other Names','Email'), getStudents($result,300));
            
                        ?>
            <BR><BR>			
	</div>
            <div class="tabcontent" id="tab_content_4">
		<strong style="color:green;">UNDERGRAD MEMBERS</strong><BR><BR>
            	<h4><font color="#000080">L400 Students</font></h4>
			 <?php
                $tableTester->generateTable15(array('Surname', 'Other Names','Email'), getStudents($result,400));
                ?>
		</div>	
</div>

</div>


</BODY>
</HTML>

