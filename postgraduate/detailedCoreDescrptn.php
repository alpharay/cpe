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
            
            <?php
            require_once '../Tools/topNavigationMenu.php';
            require_once '../Tools/PagePainter.php';
            ?>  
            
<div id ="undergrad">
<div class="tabscontainer">
     <div class="tabs">

         <div class="tab selected first" id="tab_menu_1">
             <div class="link">Detailed Description-MENG</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">Detailed Description-MPHIL</div>
             <div class="arrow"></div>
         </div>

          <div class="tab lab" id="tab_menu_3">
             <div class="link">Detailed Description-PHD</div>
             <div class="arrow"></div>
         </div> 
          
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>Detailed Course Description: MENG Programme</strong><BR/><BR/>
                       <?php
                       $courseName="CPEN 600	MEng Project";
                       $courseInfo="The MEng project work involves a candidate working closely with an approved supervisor to investigate an industry-oriented project idea in a selected specialization discipline, and writing a project report. The report will be evaluated based either on its academic contribution or contribution to the relevant industrial application.";
                       $referenceMat="[1] Madsen, D., Successful Dissertations and Theses: A Guide to Graduate Student Research from Proposal to Completion, 2nd Ed., Jossey-Bass Inc. Publishers, 1991. 
[2] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 601	Engineering Research Methods";
                       $courseInfo="The engineering research method course highlights on the principle and developmental process for conducting effective research and documentation. Topics include research process, development of research proposals, design of questionnaire and interviewing techniques, content analysis, research report writing, quantitative and qualitative research, measurement strategies, sources of data and collection procedures, literature survey, statistical evaluation of data and testing, experimental research design, factorial experiment, nested design, split-plot design, statistical software packages.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Bryman, A., Social Research Methods, 1st Ed., Oxford University Press, 2001
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 602	Engineering Project Management";
                       $courseInfo="The engineering project management course provides the tools necessary to manage a project. Topics include scope and value of project, project clarity and goals, project life cycle and organization, management process, process control and monitoring, project integration management, project scope management, project time management, cost management, communications management and reporting, project quality management, risk management, human resource management, procurement management, engineering economics including for-profit and not-for profit decision-making, present economy, uncertainty, and multiple attribute decisions.";
                       $referenceMat="[1] Lock, D., Project Management, Gower Publishing, 2007  
[2] Ross, S. M., Project Management, Planning, and Control: Managing Engineering, Constructions, and Manufacturing Projects to PMI, APM, and BSI Standards, Butterworth-Heinemann, 2006  
[3] Kerzner, H., Project Management: A Systems Approach to Planning, Scheduling, and Controlling, Wiley & Sons, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 603	System-On-Chip Design";
                       $courseInfo="The system-on-chip design course examines the tools and techniques necessary for modeling, designing, verification and implementation of system-on chip designs on a single chip using programmable logic devices such as field programmable gate arrays (FPGA). Topics include introduction to system-on-chip concepts, design flow process and IP reuse, Verilog and VHDL synthesis, FPGA design, software design, embedded processor architecture, hardware/software co-design  in FPGA, high-level synthesis, scheduling system, system modeling, system analysis, testing, ASIP design, reconfigurable computing, and case studies.";
                       $referenceMat="[1] Palnitkar, S., Verilog HDL, 2nd Ed., Prentice Hall, 2003 
[2] Maxfield, C., The Design Warriors Guide to FPGAs, Newnes, 2004 [3] De Micheli, G., Ernst, R., and Wolf, W.,  Readings in Hardware/Software Co-Desgin, Morgan Kaufmann, 2001 [4] Jerraya, A.,  and Wolf, W., Multiprocessor Systems-on-Chips, Morgan Kaufmann, 2004 ";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 604	Real Time Computing Systems";
                       $courseInfo="The real-time systems course examines technologies used for real-time systems and networks for systems such as multimedia, telecommunication management, and smart manufacturing. Topics include overview of real-time systems, design and implementation issues, system interfacing concepts, real-time scheduling paradigms, resource management issues in uniprocessor and multiprocessor real-time systems, embedded software design constraints, feedback control real-time scheduling, performance management, reliability, software timing and functional validation, supporting applications from real-time wireless sensor networks, distributed real-time systems, and real-time networks.";
                       $referenceMat="[1] Liu, J. W. S., Real-time Systems, Prentice Hall, 2000
[2] Li, Q., and Yao, C., Real Time Concepts for Embedded Systems, CMP Books, 2003            
[3] Buttazzo, G. C., Hard Real-time Computing Systems: Predictable Scheduling Algorithms and Applications, 2nd Ed., Springer 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 605	Probability and Random Processes";
                       $courseInfo="The probability and random processes course provides in-depth analysis of the statistical tools for engineering applications. Topics include basic probability, conditional probability, Bayes' theorem, PDF and CDF, random variables, transformations, expected values, moments, characteristic functions, limit theorem, random processes, wide sense stationary processes, spectral density, Markov processes and Markov chains, Gaussian, Poisson and shot noise processes, and elementary queuing analysis.";
                       $referenceMat="[1] Papoulis, A., and Pillai, S. U., Probability, Random Variables, and Stochastic Processes, 4th Ed., McGraw Hill, 2002 
[2] Leon-Garcia, A., Probability, Statistics, and Random Processes for Electrical Engineering, 3rd Ed., Prentice Hall, 2008  
[3] Yates, R. D., and Goodman, D., Probability and Stochastic Processes: A Friendly Introduction for Electrical and Computer Engineers, 2nd Ed., Wiley, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 610	Seminar I";
                       $courseInfo="The seminar I course focuses on the study of various advance subjects in computer engineering through special seminars on topics to be selected each year as well as problem solving skill development. As part of the course, candidates will be involved in informal group studies of special problems, group participation in comprehensive design problems, or group research on complete problems for analysis and experimentation. Each candidate will give at least one oral presentation as well as a full write up of the presentation for assessment.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990 
";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);                      
                       ?> 
                        
                </div>
		<div class="tabcontent" id="tab_content_2">
			<strong>Detailed Course Description: MPHIL Programme</strong> <BR/><BR/>
                        
                        <?php
                        echo "<h3 style='color:red;'>Year I Courses</h3>";
                       $courseName="CPEN 601	Engineering Research Methods";
                       $courseInfo="The engineering research method course highlights on the principle and developmental process for conducting effective research and documentation. Topics include research process, development of research proposals, design of questionnaire and interviewing techniques, content analysis, research report writing, quantitative and qualitative research, measurement strategies, sources of data and collection procedures, literature survey, statistical evaluation of data and testing, experimental research design, factorial experiment, nested design, split-plot design, statistical software packages.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Bryman, A., Social Research Methods, 1st Ed., Oxford University Press, 2001
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 602	Engineering Project Management";
                       $courseInfo="The engineering project management course provides the tools necessary to manage a project. Topics include scope and value of project, project clarity and goals, project life cycle and organization, management process, process control and monitoring, project integration management, project scope management, project time management, cost management, communications management and reporting, project quality management, risk management, human resource management, procurement management, engineering economics including for-profit and not-for profit decision-making, present economy, uncertainty, and multiple attribute decisions.";
                       $referenceMat="[1] Lock, D., Project Management, Gower Publishing, 2007  
[2] Ross, S. M., Project Management, Planning, and Control: Managing Engineering, Constructions, and Manufacturing Projects to PMI, APM, and BSI Standards, Butterworth-Heinemann, 2006  
[3] Kerzner, H., Project Management: A Systems Approach to Planning, Scheduling, and Controlling, Wiley & Sons, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 603	System-On-Chip Design";
                       $courseInfo="The system-on-chip design course examines the tools and techniques necessary for modeling, designing, verification and implementation of system-on chip designs on a single chip using programmable logic devices such as field programmable gate arrays (FPGA). Topics include introduction to system-on-chip concepts, design flow process and IP reuse, Verilog and VHDL synthesis, FPGA design, software design, embedded processor architecture, hardware/software co-design  in FPGA, high-level synthesis, scheduling system, system modeling, system analysis, testing, ASIP design, reconfigurable computing, and case studies.";
                       $referenceMat="[1] Palnitkar, S., Verilog HDL, 2nd Ed., Prentice Hall, 2003 
[2] Maxfield, C., The Design Warriors Guide to FPGAs, Newnes, 2004 [3] De Micheli, G., Ernst, R., and Wolf, W.,  Readings in Hardware/Software Co-Desgin, Morgan Kaufmann, 2001 [4] Jerraya, A.,  and Wolf, W., Multiprocessor Systems-on-Chips, Morgan Kaufmann, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 604	Real Time Computing Systems";
                       $courseInfo="The real-time systems course examines technologies used for real-time systems and networks for systems such as multimedia, telecommunication management, and smart manufacturing. Topics include overview of real-time systems, design and implementation issues, system interfacing concepts, real-time scheduling paradigms, resource management issues in uniprocessor and multiprocessor real-time systems, embedded software design constraints, feedback control real-time scheduling, performance management, reliability, software timing and functional validation, supporting applications from real-time wireless sensor networks, distributed real-time systems, and real-time networks.";
                       $referenceMat="[1] Liu, J. W. S., Real-time Systems, Prentice Hall, 2000
[2] Li, Q., and Yao, C., Real Time Concepts for Embedded Systems, CMP Books, 2003            
[3] Buttazzo, G. C., Hard Real-time Computing Systems: Predictable Scheduling Algorithms and Applications, 2nd Ed., Springer 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 605	Probability and Random Processes";
                       $courseInfo="The probability and random processes course provides in-depth analysis of the statistical tools for engineering applications. Topics include basic probability, conditional probability, Bayes' theorem, PDF and CDF, random variables, transformations, expected values, moments, characteristic functions, limit theorem, random processes, wide sense stationary processes, spectral density, Markov processes and Markov chains, Gaussian, Poisson and shot noise processes, and elementary queuing analysis.";
                       $referenceMat="[1] Papoulis, A., and Pillai, S. U., Probability, Random Variables, and Stochastic Processes, 4th Ed., McGraw Hill, 2002 
[2] Leon-Garcia, A., Probability, Statistics, and Random Processes for Electrical Engineering, 3rd Ed., Prentice Hall, 2008  
[3] Yates, R. D., and Goodman, D., Probability and Stochastic Processes: A Friendly Introduction for Electrical and Computer Engineers, 2nd Ed., Wiley, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 610	Seminar I";
                       $courseInfo="The seminar I course focuses on the study of various advance subjects in computer engineering through special seminars on topics to be selected each year as well as problem solving skill development. As part of the course, candidates will be involved in informal group studies of special problems, group participation in comprehensive design problems, or group research on complete problems for analysis and experimentation. Each candidate will give at least one oral presentation as well as a full write up of the presentation for assessment.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 684	Advanced Engineering Mathematics";
                       $courseInfo="The advanced mathematics course provides the necessary applied mathematical and analytical tools useful for solving practical engineering problems. Topics include first ordinary differential equations and solutions, second order differential equations and higher order differential equations, series solution of ordinary differential equation including power series method, Bessel functions, Legendre function, and hyper-geometric functions, linear algebra and calculus including matrices, eigen-values eigen-vectors, vector differential calculus, divergence and curl vector fields, vector integral calculus including Green's theorem and Stoke's theorem, Laplace transforms, Fourier analysis of differential equations, partial differential equations including basic concepts, vibrating strings, D'Alembert solution, wave equation and heat equation.";
                       $referenceMat="[1] Kreyszig, E., Advanced Engineering Mathematics, 9th Ed., John Wiley & Sons, 2008 
[2] Salas, S. L., and Hille, E., Calculus: One and Several Variables, 10th Ed., John Wiley & Sons, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       
                       
                       
                       echo "<h3 style='color:red;'>Year II Courses</h3>";
                       
                       $courseName="CPEN 620	Seminar II ";
                       $courseInfo="The seminar II course emphasizes on development of the skills of critical thinking and technical sophistication for candidates to reach the research frontier of these fast developing fields research. As part of the course, candidates will be required to read many papers or book chapters and give presentations on a few selected papers. In the second year, each candidate will be expected to make a presentation soon after the year one examination on a research proposal the candidate intends to work on for the thesis. During the middle part of the second semester of the second year, the candidate will be required to give a progress report on the research. ";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 650	MPhil Thesis";
                       $courseInfo="The thesis involves a candidate working closely under the guidance of a graduate supervisor for one year to investigate an approved original project idea from a selected field of specialization, and writing a thesis. The investigation will conform to the principles of research and will include the relationship of the proposed idea to previous related work reported in the literature, study of possible implications and potential application. The thesis will be evaluated based either on the academic contribution or contribution to the relevant industrial application. The contributions and results obtained from the investigation will be synthesized and compiled into a publication-quality research paper.";
                       $referenceMat="[1] Madsen, D., Successful Dissertations and Theses: A Guide to Graduate Student Research from Proposal to Completion, 2nd Ed., Jossey-Bass Inc. Publishers, 1991. 
[2] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
		</div>

		<div class="tabcontent" id="tab_content_3">



		<strong>Detailed Course Description: PhD Programme</strong><BR/><BR/>
                
                 <?php
                 
                       echo "<h3 style='color:red;'>Year I Courses</h3>";
                       $courseName="CPEN 701	Research and Project Proposal";
                       $courseInfo="The research and project proposal development course examines in depth the theory and application of research with emphasis on building up the research proposal required for the doctoral thesis and also for funding solicitation. Topics include basis for research and appraisal of factors that influence choice of research methods, nature of research process, ethics in research, types of research, tools of research, starting a research project and proposal, choosing research topic and developing the research, writing a research proposal including writing style for publication, critique, literature review and research ethics (plagiarism), research design, literature review and secondary analysis, questionnaire design, building oral presentation of the research proposal, building written presentation of the research results including journal writing and thesis, fundamentals of experimental and quasi-experimental designs, qualitative research designs including focus groups, expanded designs and single subject design, survey methods, and conferences and technicalities for publishing in first class scientific journals.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Bryman, A., Social Research Methods, 1st Ed., Oxford University Press, 2001
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 702	Research Management";
                       $courseInfo="The research project management course provides practical guidance on how research project and facilities are managed from commencement to the end. Topics include introduction to life cycle models and paradigms, life cycle phases, project management processes including project initiation, project planning, execution, control, and close-up, and project risk analysis, project management activities and models for undertaking project activities, project control including project break-downs and scheduling, research cost estimation techniques and procurement, research reviews and quality assurance, research project integration and documentation, use of modern tools and techniques for project planning, evaluation, analysis, management, and control.";
                       $referenceMat="[1] Lock, D., Project Management, Gower Publishing, 2007  
[2] Ross, S. M., Project Management, Planning, and Control: Managing Engineering, Constructions, and Manufacturing Projects to PMI, APM, and BSI Standards, Butterworth-Heinemann, 2006  
[3] Kerzner, H., Project Management: A Systems Approach to Planning, Scheduling, and Controlling, Wiley & Sons, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 710	Seminar I";
                       $courseInfo="The doctorial seminar I course focuses on presentation on selected topics of recent interest in computer engineering during the first year. Candidates will perform comprehensive review of scholarly articles - read, present, discuss, and implement recent works from the research literature. The topics may include special problems, design problem, or group research on complete problems for analysis and experimentation. Each candidate will give at least one oral presentation as well as a full write up of the presentation for assessment.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Bryman, A., Social Research Methods, 1st Ed., Oxford University Press, 2001
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       
                       
                       echo "<h3 style='color:red;'>Year II Courses</h3>";
                       $courseName="CPEN 700	PhD Thesis";
                       $courseInfo="The doctorial thesis involves a candidate working closely under the guidance of a supervisor(s) in the Department to investigate an approved original project idea from the candidate’s preferred field of specialization, and writing a thesis. The investigation will include a comprehensive review of related works reported in scholarly articles, formulation and development of necessary concepts, implementation, testing, study of the implications of work and potential application. The thesis will be evaluated based either on its academic contribution and advancement to knowledge or contribution to the relevant industrial application. The contributions and results from the research work will be synthesized and compiled into publication-quality research papers.";
                       $referenceMat="[1] Madsen, D., Successful Dissertations and Theses: A Guide to Graduate Student Research from Proposal to Completion, 2nd Ed., Jossey-Bass Inc. Publishers, 1991. 
[2] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 720	Seminar II";
                       $courseInfo="The doctorial seminar II course focuses on the research proposal presentation and progress report on the research. Each candidate will be expected to make a presentation soon after the year one examination on the research the candidate intends to work on for the thesis. During the middle part of the second semester of the second year, the candidate will be required to give a progress report on the research. As part of the seminar session, candidates will also be required to participate in presentations on special topics as well as any intellectual dialogues.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Bryman, A., Social Research Methods, 1st Ed., Oxford University Press, 2001
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 730	Seminar III";
                       $courseInfo="The doctorial seminar III course focuses on progress report presentations on the research. Each candidate will be required to make periodic presentations preliminary findings of the research. The candidates will also be required to participate in presentations on special topics and any intellectual dialogues.";
                       $referenceMat="[1] Robson, C., Real World Research: A Resource for Social Scientist and Practitioners, 2nd Ed., Blackwell Publishers, 2002. 
[2] Bryman, A., Social Research Methods, 1st Ed., Oxford University Press, 2001
[3] Campbell, D. T., and Stanley, J. C., Experimental and Quasi-Experimental Designs for Research, Houghton Mifflin Publishers, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
	</div>            

	</div>
</div>

</div>


</BODY>
</HTML>

