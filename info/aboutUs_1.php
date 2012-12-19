<?php ob_start(); ?>
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
                            <div class="link">Computer Engineering @ Legon</div>
                            <div class="arrow"></div>
                        </div>
                        <div class="tab" id="tab_menu_2">
                            <div class="link">Mission & Vision</div>
                            <div class="arrow"></div>
                        </div>
                         <div class="tab" id="tab_menu_3">
                            <div class="link">Strategic Plan</div>
                            <div class="arrow"></div>
                        </div>
                         <div class="tab" id="tab_menu_4">
                            <div class="link">Statistics</div>
                            <div class="arrow"></div>
                        </div>
                         <div class="tab" id="tab_menu_5">
                            <div class="link">Visitors</div>
                            <div class="arrow"></div>
                        </div>
                         <div class="tab" id="tab_menu_6">
                            <div class="link">Past HODs</div>
                            <div class="arrow"></div>
                        </div>
                         <div class="tab" id="tab_menu_7">
                            <div class="link">Location and Directions</div>
                            <div class="arrow"></div>
                        </div>
                         <div class="tab" id="tab_menu_8">
                            <div class="link">Contact Us</div>
                            <div class="arrow"></div>
                        </div>


                    </div>
                    <div class="curvedContainer">
                        <div class="tabcontent" id="tab_content_1" style="display:block">
                            <strong>Overview of Department</strong><BR><BR>Computer Engineering at Legon was established in August 2003 as one of the five (5) Engineering Departments under the Faculty of Engineering Sciences. 
                            The Department was founded as part of the University's strategic objective of developing the manpower needs in key technologies required to provide the foundation for the 21st century technological developmental base for the country. 
                            The Department has since its establishment, successfully graduated 49 out of 54 students (90.7%) from the first four pioneering groups.  
                            The current number of students in the Department as at December 2011 stands at 80, comprising 32 students at Level 100, 17 students at Level 200, 6 students at Level 300, and 18 students at Level 400. Population of female students is 18.5%. 
                            The Department currently has 8 full time teaching staff (2 staff on PhD study leave), 3 part-time staff, 2 teaching assistant, 2 national service personnel, 2 technical supporting staff, and 1 administrative assistant. 
                            The state of the Department generally remains strong as a result of a combination of aggressive efforts to provide quality teaching, bring new faculty, facilitate upgrading of teaching staff with MPhil degree to PhD, 
                            revitalize the undergraduate curriculum, and promoting short term visits by visiting scholars. Since its establishment, the Department has continued its efforts to run a broadly based Engineering discipline in software systems, 
                            computer networks, information processing and transmission, wireless system, embedded technologies, and hardware systems. These areas provide the undergraduates with skills required to solve emerging problems in industry as well
                            as serving as the foundation for research and graduate studies.<BR><BR>
                            
                            <strong></strong><BR><BR>                            
                            </div>
                        <div class="tabcontent" id="tab_content_2">
                            <strong>Mission</strong> <BR><BR>
                            The mission is to provide our student with outstanding and innovative engineering education that 
                            reflect the attributes of the University of Ghana to compete successfully in the job market, and 
                            to conduct leading research that will serve the people of Ghana and the global world.<BR><BR> 
                            
                            <strong>Vision</strong><BR><BR> 
                            The vision of the Department is to achieve excellence in undergraduate education, graduate education, research, 
                            and public service. In pursuit of this, the Department has sort to: 
                            <ul>
                                <li/>attract, train and retain outstanding students, faculty, and staff;  
                                <li/>foster innovation in research that will advance the industrial base of Ghana; 
                                <li/>develop infrastructure necessary to achieve the academic and research goals; 
<li/>foster interdisciplinary research within the department and with other disciplines in the University; 
<li/>promote strong relationships with industry and foster entrepreneurship spirit among the faculty and students; 
<li/>facilitate establishment of a Computing and ICT research conference and annual open-day sessions to make visible the technological contributions of both faculty and students of the Department; 
<li/>facilitate the establishment of research and developmental park for both mature technical companies and start-ups to provide direct support to teaching, faculty, and the programme; 
                            </ul>
                        </div>
                        <div class="tabcontent" id="tab_content_3">
                         <strong>Strategic Plan</strong><BR/><BR/>                            
  
                        </div>
                        <div class="tabcontent" id="tab_content_4">
                         <strong>Statistics</strong><BR/><BR/>                            
  
                        </div>
                        <div class="tabcontent" id="tab_content_5">
                         <strong>Visitors</strong><BR/><BR/>                            
  
                        </div>
                        <div class="tabcontent" id="tab_content_6">
                         <strong>Past HODs</strong><BR/><BR/>                            
  
                        </div>
                        <div class="tabcontent" id="tab_content_7">
                         <strong>Location and Directions</strong><BR/><BR/>                            
  
                        </div>
                        <div class="tabcontent" id="tab_content_8">
                         <strong>Contact Us</strong>
                         <?
                         $tableTester = new tableGenerator('col', '');


                        $firstRow = array('', 'Computer Engineering Department', '');
                        $secondRow = array('', 'University Of Ghana', '');
                        $thirdRow = array('', 'Faculty Of Engineering Sciences', '');
                        $fourthRow = array('', 'LG 25', '');
                        $fifthRow = array('', 'Legon Accra', '');
                        $sixthRow = array('', '<em>compeng@ug.edu.gh</em>', '');
                        $totalRow=array('','+233-028-990-9106, Ext.2469','');

                        $tableData = array($firstRow, $secondRow, $thirdRow, $fourthRow,$fifthRow,$sixthRow,$totalRow);
                        $tableTester->generateTable13(array('', '<b/>CONTACT US', ''), $tableData);

                         ?>
                        <p><a class="modal" href="../contact/index.php"><h2>&nbsp;&nbsp;&nbsp;&nbsp;Request For Information</h2></a>.</p>

                         <BR/><BR/>                            
                        </div>


                    </div>
                </div>

            </div>


    </BODY>
</HTML>

