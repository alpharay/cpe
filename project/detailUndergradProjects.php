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
             <div class="link">2007-2008 Graduating Class</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">2008-2009 Graduating Class</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_3">
             <div class="link">2009-2010 Graduating Class</div>
             <div class="arrow"></div>
         </div>

          <div class="tab lab" id="tab_menu_4">
             <div class="link">2010-2011 Graduating Class</div>
             <div class="arrow"></div>
         </div>
         
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>This represents a collection of the abstracts of the thesis projects undertaken by the graduating class </strong>
  <?php
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The aim of this project was to design and implement a computer-based broadcast automation system. The actual job of the system is to automate the playback of recorded information for broadcasting and also to coordinate presentation of live events. One area where this software system can be very useful is the section where broadcasters keep track of which media is used on which show so that the appropriate intellectual property owner can be compensated or credited if necessary. The system was built using an object oriented software design approach in the C++ programming language. Different pieces of software running together (either on a single computer or over a network) coordinate and provide the broadcast automation. The system was optimized particularly for video broadcasting. The various subsystems developed were the broadcast server, the scheduler, the media library manager, and an associated library to provide the framework for all the other programs. A feature that allowed for embedding information such as the logo of the station, scrolling of texts at the bottom of the screen, etc during streaming of the video was also incorporated. The system implementation was based on the Linux operating system. To test the performance of the system, recorded videos were used. The system broadcast the videos according to the given time schedule and also kept a log of every activity that was performed. The system performed satisfactorily as expected but could be enhanced further by incorporating additional features to make it work better. ');
                        $nameOfStudent="James Ainooson";  
                        $supervisor="Mr. Isaac K. Nti";
                        $projectTitle="A COMPUTERISED BROADCAST AUTOMATION SYSTEM";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Until recently, information display for adverts and notices were done by direct writing on billboards which did not provide avenue for flexibility and management of what to present. However, with the advent of microprocessors/ microcontrollers and LED display systems, it is now possible to display the information in digital form and in a dynamic and more graphical way in real-time. This project aims at introducing reconfigurable FPGA (Field Programmable Gate Arrays) technology as a core system for flexible information display on dot-matrix LED display. The project covered the design and implementation of three main modules: input module, processing module, and output module using the VHDL (Very High Level Description Programming Language) to drive the information on a 7-segment LED system. The DRAM of the FPGA serves as a storage area the information to be displayed, which makes modification easy to handle. For the system development, the Actel ProAsic plus FPGA board was used and the display was synthesized using the Actel Libero 8.3. To test the performance of the system, two short phrases "FPGA4FUN" and "UNIVERSITY OF GHANA" were created and displayed on the 7-segment LED system, which was multiplexed on a breadboard. The results showed that with the 7-segment LED display system, messages can be displayed at a rate of 2ms per character whereas with the dot-matrix LED, higher rate such as 2ns per character could be attained.');
                        $nameOfStudent="Hotor Bless";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="PROGRAMMABLE DISPLAY SYSTEM USING FPGA";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The project aims at developing a device that has the ability to numerically count a train of periodic pulses of heart beat captured from the human body using transducers. As part of the objective, a graphical user interface was designed using Visual Basic (VB) to lend the following usefulness to the project: display the waveform, count and display the rate of pulses numerically, store the data in a secured database, enable playback of the data and pulse the recording. The project was implemented using 74LS190N (counter), 74LS47 (decoder) and LM555 (timer). The possibility of using FPGA instead of the 74LS190N integrated circuit was also explored. This was accomplished through the use of VHDL (Very high speed hardware descriptive language) software for programming the FPGA chip. The counting was regulated by a timer which enabled the counting for a period of 1min or 60 seconds. The output was displayed by three 7-segment displays (common cathode type). The developed system was tested using square waves and sine waves from a signal generator as well as arbitrary clock signal. The counting was continuous for the square wave until the timer halted the count. The output observed with the sine wave, unlike the square wave, indicated fluctuations about the number 3 and sometimes 8 or 9. The negative half cycle was forcing a backward count. In using a half sine wave, however, in simulation the pulse rate count was successful. The prototype was extended to the counting of the human heart rate using the Silver/Silver-Chloride electrode as a sensor. The expected result was not accomplished due to the use of an inappropriate signal wire in interfacing the circuit and the electrode.');
                        $nameOfStudent="Lamptey Joseph";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="A PULSE RATE COUNTER";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}<br/>CO-SUPERVISOR:Dr. Elsie E. Kaufmann</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Facility management involves efficient allocation of resources amongst all assets owned, bearing in mind all constraints necessary to make decisions taken successful. The decisions that are needed to heighten management performance in this domain involve having enough relevant data on the assets. Computerizing this process allows for fast and easy access to the data as well as to generate informative results required to aid in management decisions. This project reports on the design and development of the software system for the computerization operation to enable managers and administrators know all assets in a particular facility and with the help of the computer analyze the information. The software development was based on two-tier architecture; a back-end for information, and a front-end for users. The back-end constitutes a database that stored information about the facility as well as items in it and users who will be interacting with the software. The front-end constitutes of a GUI (graphical user interface) through which users would see the information in the database and interact with them. The developed system was tested and it performed satisfactorily as expected. ');
                        $nameOfStudent="Hans Nana Siaw";  
                        $supervisor="Mr. Isaac K. Nti";
                        $projectTitle="FACILITY MANAGEMENT SOFTWARE";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The aim of this project was to develop a Web-based monitoring system for the monitoring of homes, offices, and places of interest or installations where security systems are needed. To accomplish the work, a centralised database was developed with MySQL and a server application (Move action) for the security camera was customised and integrated to the system. A file transfer mechanism (FileZilla FTP) to upload pictures to an Apache web server was also configured, customised and integrated to the system.  A front-end in the form of a GUI (Graphical User Interface) was developed using HTML and PHP. Provision was also made for user to log-on to the system in order to have authorized access to live activities at remote locations. The system was developed on a Windows (Vista Ultimate 6.0) platform. To test the performance of the system, a webcam camera was connected to a computer hosting the camera server. The camera took pictures automatically anytime motion was detected. The pictures were first stored on the hard drive of the computer and then transferred to the web server hosting the website through a File Transfer Protocol. ');
                        $nameOfStudent="Jonas Malm";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DEVELOPMENT OF A WEB BASED SECURITY SYSTEM";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Output voltages from inverter circuits are required to be very stable and constant and this is accomplished by using multiple components which tend to make the device quite expensive. This project work seeks to employ basic components to design low-cost low-power inverter device to support low power consuming devices. The design was first carried out using a PSpice simulation model. An output voltage of 240Vac at 50 Hz was achieved by connecting the positive terminal of a 12Vdc battery to a single 4060B IC chip and two of 4013B IC chips. The current to the IC chips was limited by connecting resistors between the battery unit and the ICs. Decoupling capacitors was used to pass the direct current to the ground. A 32.768kHz crystal oscillator was used to generate an input signal to the 4060B chip and the output was fed as an input to one of the 4013B chips. The output of the second 4013B chip was used to drive two switching transistors to saturation in order to provide a 12Vac as an input to a step-up center-tap transformer. The transformer stepped up the 12Vac to a 240Vac to operate the load. To test the functionality and performance of the system, the design was implemented using a 10kHz crystal oscillator due to unavailability of the required oscillator. The voltage measured at the output of the transformer was 35Vac instead of the desired 240Vac due to the choice of crystal oscillator. The output voltage of the inverter varied with the frequency of the crystal oscillator used and to obtain stability of the output, a feedback system consisting of a PIC microcontroller was used to compare the input of the transformer to the output of the inverter. ');
                        $nameOfStudent="Benson-Lamidi Ayuba";  
                        $supervisor=" Mr. Charles K. Nartey";
                        $projectTitle="DESIGN OF A COST EFFECTIVE INVERTER";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}<br/>CO-SUPERVISORS:Dr. Godfrey A. Mills and Mr. Agyare Debra</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Emergence of the internet technology has come along with it a renewed approach to voice communication. It is now possible to use specialized phones known as IP-phones to transmit voice data over the internet. This project work seeks to take advantage of the existing wide area network (WAN) and the internet infrastructure of the University of Ghana to provide voice communication within the Legon campus and between the main campus and its satellite stations using the conventional analog or intercom telephones rather than the IP-phones. To accomplish the system, the connectivity and number of extensions to use were first designed. This was followed by installation of the software for the system and configuration. The main server software used was the Asterisk, which is an open-source code. A dial plan for call routing was also developed and configured to the system. The developed system was integrated to the data network of the University and phone calls were established using two analog phones in the Offices of the Faculty of Engineering. The tests conducted gave expected results. However, small latency in the order of few seconds was noticed as two users communicated. ');
                        $nameOfStudent="Yenkyi Emmanuel";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="DEVELOPMENT OF VOICE OVER IP SYSTEM FOR THE UNIVERSITY COMMUNITY";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Access to spatial data in the country has been a very huge impediment in the country\'s quest to improve upon easy dissemination of spatial information. This project work was therefore intended to explore the use of open source software to create spatial information system which will make geo-data available over the web for easy access. A simple geo-data was acquired from a MapServer UMN\'s website and developed as a prototype. The MapServer was used to produce the web maps for users to interact with. The developed system provided the platform for users to provide query, analyse, and easily interpret the data. Testing of the system yielded the expected results. ');
                        $nameOfStudent="Awuah-Baffour Chrispin";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DESIGN AND IMPLEMENTATION OF A WEB-BASED SPATIAL INFORMATION SYSTEM";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable1(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                          

                        

?>
                 </div>
		<div class="tabcontent" id="tab_content_2">
			<strong>This represents a collection of the abstracts of the thesis projects undertaken by the graduating class </strong> 
 <?php
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'This project is about the development of a web-based hospital management system for the University of Ghana Hospital. The motivation for the project was based on the observation of general process of patients\' health record keeping and scheduling system at the university hospital and other hospitals visited. To execute the project, the business operation logic for the university hospital was studied. This involved the record flow procedures and the inter-dependencies between the various departments in the hospital. The analysis of the process led to the selection of the waterfall model, analysis of system users, logical system operation design, system design tools and the system architecture development. The system design was accomplished using an apache Web Server, PHP and JavaScript scripting languages at server and client side respectively, MySQL database management system and HTML bases for the user forms. The project was structured into two modules. The first module involved the provision of a secured online scheduling system. This facility enables patients to book an appointment with the hospital over the internet as well as view their basic medical records. The second module integrated and coordinated activities of the various departments in the hospital: the OPD, consulting units, medical laboratories, pharmaceutical sections, mortuary unit, and the accounts section. Security was considered important to ensure confidentiality of information as well as secured payment transactions from health insurance and other systems. The functionality of the system was tested on both the Linux and Windows operating system platforms. With the developed system, registered patients could use the online facility to book an appointment with their preferred medical physician and also view their basic medical reports. Again, various departments within the hospital could use their defined functionalities within the system to accomplish their routine tasks. Queries about a patient at any department could be initiated using the patient\'s folder number to access the relevant information unique to that department. Privileged staff of the recognized departments could be granted access to view files electronically as well as generate necessary report on some key activities. ');
                        $nameOfStudent="ANTHONY AWULEY";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="WEB BASED HOSPITAL MANAGEMENT SYSTEM FOR THE UNIVERSITY HOSPITAL";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'This project is about the design and development of a mobile phone application software that would serve as a miniature form of the University of Ghana students\' Management Information System (MIS). With this, students can request and receive examination results, examination time table, register semester courses, view registered courses, and query financial status by sending predefined query syntax to a short code. The waterfall process model was used. The project was divided into three phrases: mobile interface, web handler, and database development. The mobile interface is used to send all queries and the web handler for processing the query by accessing a database for results and giving a reply to the sender. The mobile interface was developed with java programming language for java Micro Edition platform using Mobile Information Device Profile 1.1 (MIDP 1.1) on Connected Limited Device Configuration (CLDC). The web handler was developed on the ASP NET web development platform using C# programming language. The database was implemented in MySQL using InnoDB as the engine. At the end, the phrases were integrated. The web handler successfully processed and replied all queries from the mobile interface. ');
                        $nameOfStudent="ADJEI AUGUSTINE GYAWU";  
                        $supervisor="Mr. Isaac K. Nti";
                        $projectTitle="DEVELOPING A MOBILE INTERFACE FOR UNIVERSITY OF GHANA STUDENTS\' MANAGEMENT INFORMATION SYSTEM (MIS)";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The emergence of information technology has made it possible for management processes to be automated to make operational processes quite transparent and easy. The recruitment process into the Ghana Armed Forces is characterised by paperwork with considerable human involvements. The system is confronted with a number of problems ranging from congestion of applicants at the headquarters during submission, limited access to application forms through to challenges of timely delivery of application forms for early processing and missing of application forms in transit among others. This project is aimed at developing a web-based automated recruitment system for the Ghana Armed Forces to enhance the recruitment process and also provide a comprehensive database for all the recruits. To develop the system the operational process of the recruitment from the purchase of the application form through to the body selection, medical process to the final selection was studied and modeled. The system development was divided into five modules: voucher module for generating randomly distributed numbers for the vouchers, authentication module for verifying the legitimacy of the vouchers used by applicants, user interface to capture the details of applicants and supporting documentation as well as feedback mechanism for tracking, database for the storage of the records, and the automated scheduling process which allows applicants to be moved from one stage to the other upon meeting a set of stated criteria at a particular stage. The system also took into consideration some of the security requirements for online recruitment over the internet, including multiple applications, completeness, impersonation, soundness, privacy, eligibility, transparency and verifiability. Provision was also made for defining the number of vouchers to be released for a recruitment year or season. The performance of the system was tested and it yielded expected results. To ensure that only authorised personnel have access to specific, different levels of access systems was incorporated. Further, the system has provision for keeping the records of both selected and non-selected applicants.');
                        $nameOfStudent="GOKAH OSCAR";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="WEB BASED RECRUITMENT SYSTEM FOR THE GHANA ARMED FORCES";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The proposed online campus shuttles information system is a web-based information system designed to give timely and accurate information about the shuttle services on the campus of the University of Ghana. The shuttles include the Legon campus shuttles, the Metro Mass Transport buses provided by the government and some buses of the hostels around the campus. The main aim of putting the services of the buses on the Web is to grant users access to information about these services in an unrestricted manner. These users include students, lecturers, non-teaching staff, workers of the University and also outsiders. The users will have knowledge of the availability of the buses, the arrival times of the buses, the routes the buses use and regular updates of the condition of the various buses and the roads The database was implemented using MySQL in the XAMPP package. The XAMPP come with the Apache as the server. PHP programming language was used at the server side. The client side was designed and developed to be user friendly interface with information to guide the user as he or she surfs about on the software. The Dreamweaver was used at the client side for the development. After the development of the online transportation information system, it was successfully tested and it gave positive output with little time lapses. But a lot could be done in other aspects to improve the software, like the inclusion of a GPS system which could track the exact location of the various buses on campus.');
                        $nameOfStudent="DUAH SAMUEL FOSU";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="AN ONLINE TRANSPORT INFORMATION SYSTEM FOR SHUTTLE SERVICES ON THE UNIVERSITY OF GHANA, LEGON, CAMPUS.";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The Integrated Assets Management System is a system that has been developed to manage the activities of the transport section of the Physical Development and Municipal Services Directorate (PDMSD) of the University of Ghana. This system provides the platform for the transport section to keep records on activities of the staff, schedule of vehicles including servicing, maintenance records, and insurance schedules. It also allows users or staff of the university to make requests of vehicles as well as track their requests. To develop the system, the business or operational process of vehicle scheduling to users, tracking, maintenance, and request procedures at the PDMSD was studied and modeled. The system was developed using a three-tier architecture: database, web application, and client which comprise the user request forms and other application forms. A PHP scripting was employed to connect the GUI and the database. The system was tested and yielded expected results.');
                        $nameOfStudent="LAUREL OSEI-ASSIBEY";  
                        $supervisor="Mr. Isaac K. Nti";
                        $projectTitle="INFORMATION MANAGEMENT SYSTEM FOR THE UNIVERSITY OF GHANA TRANSPORT UNIT";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Construction of teaching timetable and lecture hall scheduling for teaching and examinations are among the most difficult operations in educational planning. This project seeks to develop an automated software based timetable scheduler for the University of Ghana for generating timetables for lectures and examinations taking into consideration the class size and space capacity. To develop the system, the operational process of a typical timetable development for scheduling of courses and venue were studied and modeled.  The timetable system was developed using a three-tier architecture: administrator module responsible for assigning the needed information to a database, a centralised database module responsible sorting the information, and client module responsible for the actual timetabling task. The scheduling operation was based on a simple mathematical process and a look-up table rather than using a linear optimization programming. The performance of the developed system was tested using the available courses, seating capacity of lecture spaces, and Lecturers for the courses at the Department of Computer Engineering and also the Faculty of Engineering. The system was able to generate timetable without any clashes and utilized spaces in an optimal way. Further, the system was able to detect an already assigned or scheduled time slot for a course and name of Lecturer denied access to such space. The system was also used to generate a sample examination timetable which gave expected results. ');
                        $nameOfStudent="KISSIEDU BENJAMIN SAKYI";  
                        $supervisor="Dr Godfrey A. Mills";
                        $projectTitle="DEVELOPMENT OF A TIMETABLE SCHEDULING SYSTEM FOR UNIVERSITY OF GHANA";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'In our world today, the development of video surveillance systems is growing fast and as such IP based solutions are growing at a tremendous speed. A lot of manufacturers are coming out with a wide range of IP video cameras and video servers for the purpose of IP enabled video system that can be used at both the domestic and professional level to monitor homes, schools, offices, hospitals, or any place where surveillance is required. The system generally is made up of two main parts which are the server side and the client side. At the server side an application code that supports the camera was developed using the visual C# programming language, and MySQL was used to build a centralised database that holds information on the users of the system and the streamed video files as well as the archives. At the client side is the graphical User Interface (GUI) which was developed using the HTML and PHP. The camera server has features such as select camera where the camera to be used for the streaming is selected because this server actually supports more than one camera. The "save to folder" feature helps to select where the videos being streamed are to be saved, the "stream to file "determines the format of the streamed video, the "streaming port" is what provides connection at the user\'s end, the maximum connections enable the selection of the number of clients to access the system, and finally, the start and stop buttons starts and ends the camera respectively. The video is then streamed live via the internet after which the video files can be saved onto the hard disk by means of the MySQL connector which is a NET platform. The platform on which this system was built is the Microsoft Windows XP Home Edition (5.1, Build 2600).');
                        $nameOfStudent="AMOAFO ATUOBI BENNETT";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DEVELOPING A WEB-BASED SURVEILLANCE SYSTEM";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                        $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'This project is aimed at developing a web-based management information system for the security service unit of the University of Ghana to aid the security service to carry out the management of the daily scheduling and reporting routine of the unit. To execute the project, the operation logic of the security services unit and the procedures for staff scheduling and reporting as well as requests procedures from the university community were studied and modeled. The system development was structured into three layers namely: Client (front end), Application (middle), and Database (back-end) system architecture. The development was done using a centralised relational database management system - MySQL to store all data within the security service unit, Apache web server for the communication over the web, and a user friendly Graphical User Interface (GUI) client-end which was developed using HTML, PHP and CSS to access the database. The performance of the system was tested and expected results were obtained. Security personnel of the university were scheduled to the various security stations on campus and reports were created directly for the immediate viewing by the chief security officer and any other authorized officer of the university. The system also provides opportunity for members of the university community to report of any observed crisis on campus for attention and also tracks the requests.');
                        $nameOfStudent="GUNU SENYO AMENYENU YAO";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="AN INFORMATION MANAGEMENT SYSTEM FOR THE SECURITY SERVICE OF UNIVERSITY OF GHANA";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'This project aims at designing and implementing a ticket reservation system which would be implemented by sending a simple SMS (Short Message Service) message from a user\'s phone to a specified short code. The user then receives a response via his/her phone which is used in the reservation process. This should enable the user to book a place in a bus without being physically present at the transport yard. This is to help reduce the congestion that is characteristic of transport companies in Ghana most especially during festive seasons. A database was implemented using MySQL Relational Database Management System (RDBMS) to store information about the bus schedules. A web handler and a desktop application were implemented using C# programming language which runs on Microsoft\'s NET platform. The web handler was responsible for processing the SMS which would be sent by the user providing the appropriate response. The desktop application was to serve as a monitoring system for the transport company\'s system administrators. A mobile phone was used to send SMS messages and a Personal Identification Number (PIN) was received accordingly to serve as the bus ticket.');
                        $nameOfStudent="KLU KOFI EVANS";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DEVELOPING A TICKET RESERVATION SYSTEM via SMS";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'A Customer Access Point (CAP) is an office or point of call where potential and existing subscribers to services (in this case utility providers) organisations can receive client services such as reporting faults, making enquiries and applying for new services. In this project activities at customer service points for utility companies in Ghana were analysed and problems detected. To solve these problems a web based CAP was designed and implemented based on the Ghana Telecommunications Company Limited customer access point concept. The web based customer access point allows customers to carryout activities at the customer access point such as fault reporting and application for new service via the internet (or online) without being physically present at the customer access point. In this project, the activities of customer access points of Ghana Telecom (GT), Electricity Company of Ghana (ECG) and Ghana Water Company Limited (GWCL) were analysed. A database was designed and implemented with the MySQL database management system to store data on faults and service applications as well as users. User friendly graphical user interfaces were also created to provide a friendly means for users to interact with the database. This graphical user interfaces allow users to report new faults , check on the status of reported faults, apply for new services, check on the status of new applications and so on. Administrators of the system can also carryout various updates of data in the database via the graphical user interface. The business logic and database connection was programmed and implemented.');
                        $nameOfStudent="EMMANUEL SARBAH";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DEVELOPMENT OF A WEB BASED CUSTOMER ACCESS POINT FOR UTILITY COMPANIES";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'This project seeks to develop an information management system for the management of staff housing units for the University of Ghana to resolve the challenges confronting the Housing Unit of the Physical Development and Municipal Services Department (PDMSD). To facilitate development of the system, the operational process of the Housing unit of the PDMSD and the procedure for application for housing on campus as well as off-campus, maintenance of the facilities, and occupancy by staff was studied and modeled. The housing management system was developed using Java Server Pages (JSP) and MySQL on the NetBeans Integrated Development Environment (IDE) 6.1 and MySQL Enterprise 5.1 platforms respectively. The user interface (front end) was developed using Java Server Faces (JSF) while the JSP was used for the server-side scripting. The database (back-end) for the system was developed using MySQL. The system ran on GlassFish server provided by the NetBeans IDE 6.1. The functionality of the system tested and it provided quick access, availability and management of data regarding the housing units. In addition to management of housing units, the system provided inventory of university properties in the housing units such as mowers, electric heaters, air conditioners, and furniture as well as maintenance status. With this system the tenureship of an occupant in a particular house is known since information regarding the date of entry and date of exit of the occupant is recorded.  The system also provides update information to the university community on vacant houses on the campus and application form for requesting for the housing accommodation and a feedback mechanism to the applicant on the status of the application.');
                        $nameOfStudent="KODUA FERDINAND APPIAH";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="INFORMATION MANAGEMENT SYSTEM FOR THE UNIVERSITY OF GHANA HOUSING UNITS";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The aim of this project was to design, develop and implement network monitoring and management software. This software monitors computer systems on a network, manages the systems and also checks for any intrusion on the network with full report system to report problems to the administrator of the software. The software was developed using an object oriented software design approach which uses Java as the programming language. In this software, different programmes run together to provide the services for monitoring and managing. The software was developed to be optimised particularly for monitoring computer systems on any network. The various programmes which were developed were the report center, intrusion detector, device monitoring programmes and device management programme which provides a framework for the development of the reset of software. Software which has the capabilities to monitor and manage devices on the network was achieved. The software is platform independent, monitors the performance and availability of the computer system on a network, provides logs of activities  that were preformed and errors that occur in the software as well as provides report messaging to the administrator  from the users in case any problem arises. Although the system performed as expected it can be enhanced.');
                        $nameOfStudent="ADELEKE ADEDAMOLA ODUNAYO";  
                        $supervisor="Mr. Isaac K. Nti";
                        $projectTitle="NETWORK MONITORING AND MANAGEMENT SOFTWARE";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The growing demand for accurate recognition of people over the last few decades has given rise to the development of a number of biometric systems to accomplish the task. One of the favourable biometric systems known to have gained recognition is the face identification, which is gradually replacing some of the traditional identification systems such as cards, passwords, PIN among others. This project is aimed at developing a simplified face identification and recognition system for identification of students in the University of Ghana to reduce the problem of false identity registration of students. The eigenface approach which is a Principal Component Analysis (PCA) method was used to implement the project. The eigenface approach is based on the idea of principal component analysis and decomposition of the face images into smaller sets of characteristic feature images called eigenfaces which are used for the face recognition task. The system development was divided into five main modules: data capture or acquisition, preprocessing, feature extraction, pattern matching, and identification and display. The system was implemented using the Matlab simulation package. Face data of level 400 students of the Computer Engineering Department (2008 year group) was used for as test data. Only one face data per student was used as against the general practice of many face data per candidate to get the different postures and features. The implemented system was able to adequately recognise students in the database and those not in the database.');
                        $nameOfStudent="JOSEPH ATTA BENNIN";  
                        $supervisor="Dr. Godfrey A. Mills";
                        $projectTitle="FACE IDENTIFICATION AND RECOGNITION SYSTEM FOR STUDENTS IDENTIFICTION";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The web based library management system is a software that is meant to provide both the users of the library and librarian with the ease of accessibility to the library resources and information on the resources. The patrons of the library can make reservations for books or journals online and view notices from the library as well. The librarian can also have access to all administrative rights such that it will be possible for him/her to perform all administrative tasks online .The method of approach employed is the iterative and incremental model of software development. This involves producing different versions of the software implementation out of every iteration: with each version having an increment of functionality toward the desired final functionality of the product. The main focus of the project is to create a facility where patrons of the faculty of engineering sciences can comfortably make reservations over the internet for books and journals. Because the system is centralised, the main sections of the library including the catalogue, and circulation sections are accessible online. Finally, the web based library management system that has been developed will be capable of automatically taking requests, registering validated patrons and keeping records both on the patron and library assets. Suggestions for future work include the capability of the system to send notifications as e-mails to students, informing them about due date for return of borrowed assets, outstanding fines and library notices.');
                        $nameOfStudent="PRAH GEORGE EBO FYNN";  
                        $supervisor="Mr. Isaac K. Nti";
                        $projectTitle="A WEB BASED LIBRARY MANAGEMENT SYSTEM";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'The issue of employee performance and how to measure their inputs on a set out project has come up several times in many organisations. In institutions where managers want to measure the progress of employees, it becomes difficult to determine who is and who is not performing by monitoring without any data being recorded. The web based employee appraisal system seeks to solve this problem by providing a means of performance management. It allows the administrator to rate employees based on certain set out performance criteria. With the performance scores recorded, the appraisal system uses mathematical modules to calculate a total score and the administrator can view the results graphically to aid in making accurate judgments. This topic was chosen to help solve the problems in corporate institutions pertaining to performance management. The approach employed was to build a web based system based on the XAMPP web server and PHP scripting language. The development of the system was divided into two sections i.e. the front-end thus the graphical user interface which was developed with the aid of the Adobe Dream Weaver Software and the backend which is basically the business logic and the database which was developed using PHP and MySQL. The two sections were put together using the PHP scripting language to realise the web based employee appraisal system. It is believed this web based employee appraisal system will go a long way to assist in corporate institutions, governmental and security institutions and also sports teams for the management of their respective employees. Finally, further work such as addition of a more dynamic grading scheme could be incorporated to improve the system.');
                        $nameOfStudent="NYAKPO ANDREW KWAME";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DEVELOPMENT OF A WEB BASED EMPLOYEE APPRAISAL SYSTEM";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                        
                        
                         $tableTester = new tableGenerator('col', '');
                        
                        $firstRow = array( 'Floss are distributed free of charge and are also liberally licensed to give users the ability to study, change and improve its design through the availability of its source code. This research deals with conceptualising and implementing a fully functional distributed application warehouse hosted on a Linux server (Ubuntu 8.0.4) for open source software based on the data warehousing concept. Further work was done to categorise the software in the application warehouse based on some common characteristics and also to provide a full text search engine. Users are able to easily find software by typing either the full name or part of it. Interaction with the system is through graphical user interface designed to create the platform for users to easily query and update the warehouse. Queries and updates include adding new categories of software, upholding and developing of software and searching for software. Testing of the system was done on a distributed platform using two servers  each running Ubuntu 8.0.4 and several other clients some running on the windows platform (windows xp and windows vista) and others running on the Linux platform (Ubuntu 8.0.4).');
                        $nameOfStudent="WILSON FRANCIS NORTEI";  
                        $supervisor="Mr. Wiafe Owusu-Banahene";
                        $projectTitle="DEVELOPING A FLOSS BASED DISTRIBUTED APPLICATION WAREHOUSE";
                        //$totalRow=array('','<b/>Total','18');

                        $tableData = array($firstRow);
                        $tableTester->generateTable4(array("{$projectTitle}<br/><div style='color:green;'>STUDENT:{$nameOfStudent}&nbsp&nbsp</div><div style='color:black;'>SUPERVISOR:{$supervisor}</div>"), $tableData);
                          

                        

?>
		</div>

		<div class="tabcontent" id="tab_content_3">
		<strong>This represents a collection of the abstracts of the thesis projects undertaken by the graduating class </strong><BR><BR>
         to be filled
                </div>

		<div class="tabcontent" id="tab_content_4">
			<strong>This represents a collection of the abstracts of the thesis projects undertaken by the graduating class </strong><br/><br/>
        
                to be filled
                </div>
           
	</div>
</div>

</div>


</BODY>
</HTML>
