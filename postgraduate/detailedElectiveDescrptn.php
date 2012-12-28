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
             <div class="link">Computer Systems</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">Telecommunication Systems</div>
             <div class="arrow"></div>
         </div>

          <div class="tab lab" id="tab_menu_3">
             <div class="link">Automation Engineering</div>
             <div class="arrow"></div>
         </div> 
         <div class="tab lab" id="tab_menu_4">
             <div class="link">Software Engineering</div>
             <div class="arrow"></div>
         </div> 
         <div class="tab lab" id="tab_menu_5">
             <div class="link">Network Engineering</div>
             <div class="arrow"></div>
         </div> 
         <div class="tab lab" id="tab_menu_6">
             <div class="link">Information System Engineering</div>
             <div class="arrow"></div>
         </div> 
         <div class="tab lab" id="tab_menu_7">
             <div class="link">Bio-Computing</div>
             <div class="arrow"></div>
         </div> 
          
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
                    <strong>Detail Computer System Elective Course Description<div style="color:green;">ELECTIVES</div></strong><BR/><BR/>
                       <?php
                       $courseName="CPEN 606	System Testability";
                       $courseInfo="The digital system testability course examines fault models and testing techniques, errors, failures, reliability and availability techniques in digital systems. Topics include designing techniques for reliable systems, redundancy management, fault modeling, fault detection, fault location and reconfiguration, testing, design for testability, self-checking circuit, fail-safe circuit, system-level fault diagnosis, fault-tolerant communication, fault tolerant multiprocessor systems, reliable software design, low-overhead high-availability techniques, and evaluation methods.";
                       $referenceMat="[1] M. Abramovici, M. Breur, and A. Friedman, Digital Systems Testing and Digital Design, Wiley Press, 1994 
[2] Koren, I., and Mani Krishna, C., Fault Tolerant Systems, Morgan Kaufmann, 2007  
[3] Isermann, R., Fault Diagnosis Systems: An Introduction from Fault Detection to Fault Tolerance, Springer, 2006 
[4] Patton, R., and Frank, P. M., Issues of Fault Diagnosis for Dynamic Systems, Springer, 2000";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 607	VLSI Systems Design";
                       $courseInfo="The VLSI systems design course examines the concepts behind the development of digital systems and their testing techniques. Topics include hardware description languages such as VHDL,Verilog, and ABEL, trends in VLSI development, CMOS and MOS digital devices and modeling techniques, design of CMOS combinational and sequential circuits, design of arithmetic building blocks and memory structures, interconnect and timing issues, testing and verification, programmable ASICs and design methodologies, architecture and programming technologies for ASICs, routing techniques, fault analysis and design for testability.";
                       $referenceMat="[1] Baker, R. J., CMOS Mixed Signal Circuit Design, 2nd Ed., Wiley-IEEE Press, 2009 
[2] Weste, N. H.E., and Harris, D., Principles of CMOS VLSI Design, 3rd Ed., Wesley 2004   
[3] Grabinski, H., Interconnects in VLSI Design, Springer, 2000  
[4] Plummer, J. D., Deal, N., and Griffin, P.D., Silicon VLSI Technology: Fundamentals, Practice and Modelling, Prentice Hall, 2000";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 608	Microprocessor Systems Design";
                       $courseInfo="The microprocessor systems design course explores the architectures for microprocessors and the supporting components for application. Topics include microprocessor components, design and analysis of microprocessor architecture, comparison of design paradigms for architectures such as CISC, RISC, and DSP, bus timing analysis, design considerations for high-performance systems, execution problems, memory architecture, benchmarking and optimization, parallel processing, microprocessor production, power dissipation, support software, and simulation tools.";
                       $referenceMat="[1] Oklobdzija, V. G., and Krishnamurthy, R. K., High Performance Energy-Efficient Microprocessor Architecture: A Quantitative Approach, Springer, 2006 
[2] Hwang, E.O., Digital Logic and Microprocessor Design with VHDL, CL-Engineering, 2005  
[3] Shriver, B., and Smith, B., Anatomy of High Performance Microprocessor: A Systems Perspective, Wiley-IEEE Computer Society, 1998  
[4] McFarland, G., Microprocessor Design: A Practical Guide from Design Planning to Manufacturing, McGraw Hill, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 609	Computer Systems Performance";
                       $courseInfo="The computer systems performance course examines the metrics for comprehensive analysis and evaluation performance of computer systems. Topics include queuing theory, stochastic processes and Markov chains, separable queuing networks, priority queuing systems, quantitative models of performance analysis, performance evaluation metrics, optimization of resource allocation, analysis of control mechanism and algorithms, interpretation of results, simulation modeling.";
                       $referenceMat="[1] Fortier, P.J., and Michel, H. W., Computer System Performance Evaluation and Prediction, Elsevier, 2003   
[2] Jain, R., The Art of Computer System Performance Analysis, Wiley India, 2008 
[3] Lilja, D.J., Measuring Computer Performance: Practitioner’s Guide, Cambridge University Press, 2005  
[4] John, L. K., and Eeckhout, L., Performance Evaluation and benchmarking, CRC Press, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 611	Parallel Computing Systems";
                       $courseInfo="The parallel computing system course examines modern parallel and distributed systems design, engineering and evaluation. Topics include parallel systems design concepts, architectural evolution of parallel systems, technological driving forces of parallel systems, programming algorithms and models, communication primitives, programming and compilation techniques, multiprogramming workloads and methodology, latency avoidance techniques, cache-coherency, protocols, directories, and memory consistency models, message passing protocols, storage management, and deadlock, network interface, protection, events, active messages, latency tolerance techniques, pre-fetching, multithreading, dynamic instruction scheduling, and software techniques, network design and synchronization.";
                       $referenceMat="[1] Culler, D., and Singh, J.P., Parallel Computer Architecture: A Hardware/Software Approach, Morgan Kaufmann, 1998  
[2] Kirk, D. B., and Hwu, W. W., Programming Massively Parallel Processors, Morgan Kaufmann, 2010 
[3] Grama, A., Karypis, G., Kumar, V., and Gupta, A., Introduction to Parallel Computing, 2nd Ed., Addison Wesley, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 612	Reconfigurable Systems";
                       $courseInfo="The reconfigurable systems course examines modern trends in computing systems. Topics include introduction to fundamental adaptive and reconfigurable computing, FPGA technology and architectures, spatial computing architectures, systolic and bit serial architectures, adaptive network architectures, bus-based and static dynamic re-arrangeable interconnection architectures, reconfigurable computing architectures for processors, pipeline, and caches, hardware/software co-design, reconfigurable computing operating systems, and recent developments in the field of reconfigurable computing and applications.";
                       $referenceMat="[1] Platzner, M., Teich,J., and When,N., Dynamically Reconfigurable Systems: Architectures, Design Methods and Applications, Springer, 2010 
[2] Voros, N., and Masselos,K., System level Design of Reconfigurable Systems On-Chip, Springer, 2005 
[3] Pao-Ann Hsiung, Santambrogio, M. D., and Chun-Hsian Huang, Reconfigurable System Design and Verification, CRC Press, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);                      
                       ?> 
                        
                </div>
		<div class="tabcontent" id="tab_content_2">
			<strong>Detail Telecoms System Elective Course Description<div style="color:green;">ELECTIVES</div></strong> <BR/><BR/>
                        
                        <?php
                       $courseName="CPEN 613	Communication Policy and Management";
                       $courseInfo="The communication and policy and management course provides the necessary policy frame work, standards and management of telecommunication systems. Topics include ICT industry and developmental issues, overview of the telecommunication systems including fixed, mobile, internet, and cable systems, telecommunications services and delivery, communications policy and regulation, role of ITU and challenges, radio frequency management, allocation of spectrum, regulations for the use of spectrum, common carriers, competition and compliance, long term policy planning, and telecommunications management including internal and external views of telecommunication management, and telecommunication network management model.";
                       $referenceMat="[1] Raghavan, S., Golden, B. L., and Wasil, E. A., Telecommunications Modeling, Policy and Technology, Springer, 2006  
[2] Anandalingam, G., and Raghavan, S., Telecommunications Network Design and Management, Kluwer Academic Publisher, 2003  
[3] Anandalingam, G., and Raghavan, S., Telecommunications Planning, Kluwer Academic Publisher, 2006  
[4] Sherif, M.H., Managing Projects in Telecommunications Services, Springer, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 614	Error Detection and Control";
                       $courseInfo="The error detection and control course examines error detection in communication and recording systems and control measures for reliable digital transmission and storage. Topics include signal detection in white and colored noise, random waveform, matched filtering, m-ary signal detection, nonparametric detection, error control coding including major classes of codes that important in practice such as binary linear block codes, Reed Muller codes, Galois fields, linear block codes over a finite field, cyclic codes, BCH and Reed Solomon codes, convolutional codes and trellis based decoding, message passing decoding algorithms, trellis based soft decision decoding of block codes, turbo codes, and low density parity check codes.";
                       $referenceMat="[1] Lin, S., Costello, D. J. Jnr., Error Control Coding: Fundamentals and Applications, 2nd Ed., Prentice-Hall, 2004
[2]  Morelos-Zaragoza, R. H., The Art of Error Correcting Code, John Wiley & Sons, 2006 
[3]  Sweeney, P., Error Control Coding: From Theory to Practice, John Wiley & Sons, 2002 
[4]  Wicker, S. B., Error Control System for Digital Communication and Storage, Prentice, 1995";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 615	Information Theory and Coding";
                       $courseInfo="The information theory and coding course provides the fundamental background on the Shannon theory and their application. Topics include information theory basics including entropy, mutual information, block coding, entropy of random numbers, source coding including Huffman code and universal code, channel capacity, differential entropy and Gaussian channels, multi-user information theory including broadcast and multiple access channels, rate distortion including quantization, proof of achievability and converse rate distortion.";
                       $referenceMat="[1] Cover, T., and Thomas, J., Elements of Information Theory, Wiley Interscience, 2nd Ed., 2006 
[2]   Roth, R. M., Introduction to Coding Theory, Cambridge University Press, 2006 
[3]  Yeung, R. W., Information Theory and Network Coding, Springer, 2008 
[4]  McEliece, R. J., Theory of Information and Coding, 2nd Ed., Cambridge Press, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 616	Communication Network Algorithms";
                       $courseInfo="The communication network algorithms course provides the methodologies and algorithms used for designing and optimizing communications networks with focus on the algorithmic aspects of network design. Topics include modeling networks as graphs, graph algorithms for finding minimum spanning trees, shortest paths, and matroids, topological design including selecting terminal concentrator locations, heuristic algorithms and network topology optimization, algorithms including flow deviation algorithm, Bertsekas-Gallager algorithm, cut-saturation algorithm for distributed computer systems, communications network optimization involving cut saturation algorithm for topological design of packet switched, communication networks algorithm for access facility location problem, dimensioning schemes, mesh topology optimization including capacity assignment and branch exchange, mesh network topology optimization and routing algorithm.";
                       $referenceMat="[1] Medhi, D., and Ramasamy, K., Network Routing: Algorithms, Protocols, and Architectures, Morgan Kaufmann, 2007     
[2] Bhandari, R., Survivable Networks: Algorithms for Diverse Routing, Kluwer, 1999    
[3] Cormode, G., and Thottan,M., Algorithm for Next Generation Networks, Springer, 2010     
[4] Wagner, D., and Wattenhofer, R., Algorithms for Sensor and Ad-Hoc Networks, Springer, 2007";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 617	Communication Networks Design";
                       $courseInfo="The communications networks design course examines the design issues for communication networks and the trade-offs. Topics include types of communication networks, routing algorithms and routing protocols, protocol processing, classification and forwarding, queuing theory, switching fabrics, network processors, network development life cycle, network analysis and design methodology, network design issues including manageability, node placement and sizing, link topology and sizing, routing, and reliability, required data to support network design, structured enterprise network design, hierarchical tree network design, network optimization, traffic flow analysis, analysis of data loss and delay in networks, and network reliability issues.";
                       $referenceMat="[1] Rising, L., and Schmidt, D. C., Design Patterns in Communication Software, Cambridge University Press, 2001   
[2] Anandalingam, G., and Raghavan, S., Telecommunications Network Design and Management, Kluwer Academic Publisher, 2003  
[3] Anandalingam, G., and Raghavan, S., Telecommunications Planning, Kluwer Academic Publisher, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 618	Digital Communication Systems";
                       $courseInfo="The digital communication course investigates the modern trends in generating digital signal for propagation and processing. Topics include basics of stochastic processes, design of baseband and passband digital communication systems, characteristics of channels, channel capacity, modulation techniques, including PAM, QAM, PSK, FSK, and spread spectrum, optimal demodulation techniques and performance, synchronization, inter-symbol interference (ISI) and equalization techniques.";
                       $referenceMat="[1] Proakis, J. G., and Salehi, M., Digital Communications, 5th Ed., McGraw-Hill, 2007 
[2]   Lathi, B. P., and Ding, Z., Modern Digital and Analog Communication Systems, 4th Ed., Oxford University Press, 2009  
[3] Gallager, R. G., Principles of Digital Communication, 5th Ed., Cambridge Press, 2008 
[4] Barry, J. R., Edward, E. A., and Messerschmitt, D. G., Digital Communications, 3rd Ed., Springer, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 619	Wireless Communication Systems";
                       $courseInfo="The wireless communication course examines the design and implementation of wireless system. Topics include introduction to mobile radio communications, statistical communication theory, elements of wireless communication systems, modeling of wireless multipath fading channel and physical parameters, coherent and non-coherent reception, diversity techniques over time and frequency and space, spread spectrum communication, multiple access, anti-jamming and interference management, frequency re-use, sectorization, multiple access techniques such as TDMA, CDMA, and OFDM, capacity of wireless channels, multiple antenna systems including spatial multiplexing, and space-time codes, error performance evaluation over radio links, applications to digital cellular systems and future of wireless communication systems.";
                       $referenceMat="[1] Rappaport, T. S., Wireless Communication: Principles and Practice, 2nd Ed., Prentice, 2002. 
[2] Stallings, W., Wireless Communications and Networks, 2nd Ed., Prentice, 2005. 
[3] Elahi, A., and Gschwender, A., Zigbee Wireless Sensor and Control Networks, Prentice Hall, 2009.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 621	Communication Network Management";
                       $courseInfo="The network management course covers modern network management models and issues. Topics include communication networks management architecture, homogenous and non-homogeneous network management systems, modern tools for managing network, management network reference models, remote network management, configuration for data collection, network management implementation, network monitoring and reconfiguration, network management application development, operational issues in managing heterogeneous networks.";
                       $referenceMat="[1] Anandalingam, G., and Raghavan, S., Telecommunications Network Design and Management, Kluwer Academic Publisher, 2003  
[2] Anandalingam, G., and Raghavan, S., Telecommunications Planning, Kluwer Publisher, 2006  
[3] Udupa, D. K., TMN: Telecommunications Management Network, McGraw Hill, 1999  
[4] Rosenblit, M., Security for Telecommunications Network Management, Wiley-IEEE, 1999";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 622	Mobile Computing Systems";
                       $courseInfo="The mobile computing course is concerned with methods and principles for the development of systems whose components show forms of mobility across networks which requires knowledge about the domain that the movement is taking place. Topics include delivery of connectivity to mobile nodes, languages that provide facilities for code migration, computational models that include the notion of locality, and design methods supporting the development of new kinds of network applications, communication protocols, application-support software, and characteristics of wireless communication medium, security, location-aware applications, and algorithms for the implementation of basic system services.";
                       $referenceMat="[1] Othman, M., Principles of Mobile Computing and Communications, 2nd Ed., Prentice, 2007. 
[2] Talukder, A. K., and Yavagal, R. R., Mobile Computing: Technology, Applications and Service Creation, 2nd Ed., McGraw Hill, 2007. 
[3] Castells, M., Mobile Communication and Society: A Global Perspective, MIT Press, 2007  
[4] Wesolowski,K., Mobile Communication Systems, John Wiley & Sons, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 623	Optical Communication Systems ";
                       $courseInfo="The optical communication course examines the techniques associated with signal transmission and detection process in optical medium. Topics include fundamentals of step index and graded index fiber waveguide, fiber transmission properties of dispersion, attenuation, and nonlinear effects of SPM, CPM, FWM, and solitons, signal generation and detection systems including modulation, transmitter design, receiver design, noise properties of fiber links, subcarrier and multichannel transmission issues, coherent modulation properties of laser diodes, homodyne and heterodyne detection, introduction to light-wave networks such WDMA, FDMA, TDMA, and CDMA, and their relative merits, optical network access, optical interconnection, and topological issues in optical switching.";
                       $referenceMat="[1] Pollock, C., and Lipson, M., Integrated Photonics, Kluwer Academic Publishers, 2003   
[2] Dutton, H. J. R., Understanding Optical Communications, Prentice Hall, 1998  
[3] Hecht, J., Understanding Fiber Optics, 5th Ed., Prentice Hall, 2005  
[4] Franz, J. H., and Jain, V. K., Optical Communications: Components and Systems, Narosa Publishing, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 624	Optical Devices";
                       $courseInfo="The optical device course examines the optoelectronic devices and their properties that facilitate optical communications. Topics include identification of optical components in photonic systems and subsystems, operation principles of lasers and LED, modulation dynamics, single frequency lasers, fundamental AM and FM noise properties, laser line-width requirements, tunable semiconductor lasers, quantum well lasers, electro-optic modulators and switches, optical filters, couplers, isolators, detectors, integrated optoelectronic circuits, semiconductor optical amplifiers, Erbium optical fiber amplifiers, low coherence sources diodes, and tunable optical filters.";
                       $referenceMat="[1] Hranilovic, S., Wireless Optical Communication Systems, Springer, 2005  
[2] Kartalopoulos, S. V, DWDM, Networks, Devices and Technology, IEEE Press and Wiley Interscience, 2003  
[3] Franz,J. H., and Jain, V. K., Optical Communications: Components and Systems, Narosa Publishing, 2002   
[4] Okoshi, T., and Kikuchi, K., Coherent Optical Fiber Communications: Advances in Opto-Electronics, Springer, 1988";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 626	Telecommunication Network Security";
                       $courseInfo="The telecommunication network security course examines security treats and design of security features necessary to protect and control telecommunication networks and components for reliable operation. Topics include network architecture and devices, telecommunication network security threats, sources of threats, threat categories and scopes, security requirements and framework for  implementation, classification of cryptosystems, security policies, security requirements for switching, access network, transport network elements and mediation devices, network security techniques, security protocols and services, network security system design model including identification, authentication, system access control, resource access control, data and system integrity, audit, security administration, and data confidentiality, network security development lifecycle, network attacks and counter measures, intrusion and extraction detection, incidence response and forensic analysis, network security implementation for securing telecommunication network infrastructure.";
                       $referenceMat="[1] Stallings, W., Network Security Essentials: Applications and Standards, 4th Ed., Prentice Hall, 2011 
[2] Stallings, W., Cryptography and Network Security, 5th Ed., Prentice Hall, 2011 
[3] Canavan, J. E., Fundamentals of Network Security, Artech, 2001 
[4] Rosenblit, M., Security for Telecommunications Network Management, Wiley-IEEE, 1999";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 627	Adaptive Signal Processing";
                       $courseInfo="The adaptive signal processing course provides introduction to relevant signal processing and basics of pattern recognition. Topics include discrete random processes, linear prediction, digital wiener filtering, digital adaptive filter structures including LMS adaptive algorithm, properties of LMS adaptive filter, normalized and finite effect and adaptive beam-forming, performance analysis of LMS algorithms, stability criteria of evaluation, and modified LMS algorithms, frequency-domain adaptive filter, least squares adaptive filters, sub-band adaptive filter, infinite impulse response filter and algorithms, lattice structure and algorithms, applications using adaptive signal processing techniques in adaptive noise cancellation in speech communication and adaptive system identification among others, practical implementations and issues in adaptive signal processing and current trends ad research in adaptive signal processing.";
                       $referenceMat="[1] Sayeed, A. H., Fundamentals of Adaptive Filtering, John Wiley, 2003  
[2] Proakis, J. G., and Manolakis, D. G., Digital Signal Processing: Principles, Algorithms and Applications, 4th Ed., Prentice Hall, 2006 
[3]   Lathi, B. P., Signal Processing and Linear Systems, 4th Ed., Oxford University Press, 2000";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       $courseName="CPEN 628	Multimedia Signal Processing";
                       $courseInfo="The multimedia processing course provides focuses on multimedia signal representation, data compression and information retrieval. Topics include multimedia signal representation of data, audio, speech, image, and graphics, analog video, data transformation techniques such as Fourier, z, and wavelets, Shannon entropy theory, data sampling and quantization, sub-sampling and up-sampling of data, multimedia data compression techniques including lossless encoding methods including Huffman, entropy, arithmetic, run-length, lossy encoding such as transform encoding, wavelet based zero-tree, differential encoding, and vector quantization, compression standards - JPEG, MPEG, multimedia data retrieval including techniques for statistical pattern recognition and probability density estimation, introduction to content based data retrieval and multimedia data fusion.";
                       $referenceMat="[1]    Quatieri, T. F., Discrete-Time Speech Signal Processing: Principles and Practice, Prentice-Hall, 2001.
[2]    Deller, J. R., Hansen, J. H. L, and Proakis, J. G., Discrete-Time Processing of Speech Signals, 2nd Ed., IEEE Press, 2000. 
[3]    Parsons, T. W., Voice and Speech Processing, McGraw-Hill, 1987.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
		</div>

		<div class="tabcontent" id="tab_content_3">


		<strong>Detail Automation Engineering Elective Course Description<div style="color:green;">ELECTIVES</div></strong><BR/><BR/>
                
                 <?php
                       $courseName="CEPN 631	System Optimization Methods";
                       $courseInfo="The system optimization methods course examines the optimization theory and techniques in the management of computer systems. Topics include classification of optimization problems, linear programming, unconstrained optimization, constrained optimization including inequality and equality constraints, Lagrange multiplier method, Kuhn-Tucker conditions, solution methods, dynamic programming, random search algorithms and search methods for optimization, convex optimization methods, and application examples from different engineering disciplines.";
                       $referenceMat="[1] Chong, E. K. P., and Zak, S. H., An Introduction to Optimization, John Wiley & Sons, 1996 
[2] Leunberger, D. G., Linear and Nonlinear Programming, 2nd Ed., Springer, 2003 
[3] Bhatti, M. A., Practical Optimization Methods with Mathematica, Springer, 2000";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 632	Industrial Controls";
                       $courseInfo="The industrial controls course present an overview of advanced controller design strategies for multivariable industrial processes, starting from PID control structure to the more advanced H-infinity design technique. Topics include feedback control systems, industrial processes and need for feedback, industrial control system components such as actuators, sensors, and controllers, classical control strategies, process modeling, PID control, state feedback, nominal feedback and performance of feedback control systems, H-optimal control uncertainty modeling for robust control, robust closed loop stability and performance, robust H control, controller technologies such as PLC, DCS, PC-based control, Matlab based control, Labview based control, and dedicated hardware for controller implementations.";
                       $referenceMat="[1] Ellis, G., Control System Design Guide: Using Your Computer to Understand and Diagnose Feedback Controllers, 3rd Ed., Academic Press, 2003  					        [2] Franklin, G. F., Powell, J. D., and Naeini, A. E., Feedback Control of Dynamic Systems, 6th Ed., Prentice, 2009 										        [3] Strom, K. J., and Hagglund, T., Advanced PID Control, ISA, 2005              		        [4] Levine, W. S., The Control Handbook, CRC Press, 1996";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 633	Control Systems Design";
                       $courseInfo="The control systems design course examines the basic issues and theoretical foundation in the analysis and design of computer control systems for industrial applications. Topics include signals and sampled data systems, zero-order hold equivalent, linear systems theory, control system modeling, dynamic systems analysis and feedback control, controller design methods, system stability analysis using Jury's test, Nyquist criterion, and Lyapunov method, observability, reachability and controllers, performance analysis, robust control, output feedback, separation theorem, optimal control, and adaptive control systems.";
                       $referenceMat="[1] Dorf, R. C., and Bishop, R. H., Modern Control Systems, 12th Ed., Prentice Hall, 2010 
[2] Nise, N. S., Control Systems Engineering, 5th Ed., Wiley, 2007  
[3] Astrom, K. J., and Wittenmark, Computer Controlled System: Theory and Design, 3rd Ed., Prentice Hall, 1997 
[4] Astrom, K. J., and Hagglund, T., PID Controllers: Theory, Design and Tuning, International Society for Measurement, 1995";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       
                       
                       
                       $courseName="CPEN 634	Programming for Industrial Automation";
                       $courseInfo="The programming for industrial automation course focuses on the programming mechanisms for modern devices in the control operations in industry. Topics include functional block diagrams, control system software for PLC and SCADA, programming techniques for PLC, computer based controllers, microcontroller, digital computer interface including isolated and non-isolated digital I/O, ADC, DAC, and engineering applications in selected industry in Ghana.";
                       $referenceMat="[1] Karl-Heinz, J., and Tiegelkamp, M., IEC61131-3: Programming Industrial Automation Systems, Springer, 1995             								        
[2] Lewsi, R. W., Programming Industrial Control Systems Using IEC 1131-3, IET, 1998         [3] Rehg, J. A., and Sartori,G. J., Programmable Logic Controllers, Prentice Hall, 2007
[4] Stenerson, J., Fundamentals of Programmable Logic Controllers, Sensors, and Communication, Prentice Hall, 1999 
[5] Leunberger, D. G., Linear and Nonlinear Programming, 2nd Ed., Springer, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 635	Robotics Systems";
                       $courseInfo="The robotic system course focuses on the design and programming of robotic systems and issues in current research in robotics. Topics include basic components of robotic systems, planning, control of realistic robotic systems, review of issues in robotics programming, robotic programming languages, classifications of robots, basic components, motion classification, control and sensing uncertainty, motion constraints, analysis of friction for assembly and grasping tasks, sensing systems for hands, environmental perception from sparse sensors for dexterous hands, grasp planning and manipulation.";
                       $referenceMat="[1] Katic, D., and Vukobratovic, M., Intelligent of Robotic Systems, Kluwer, 2003 
[2] Jacak, W., Intelligent Robotic Systems: Design, Planning, and Control, Kluwer, 1999             
[3] Siciliano, B., Sciavicco, L., Villani, L., and Oriolo, G., Robotics: Modelling, Planning, and Control, Springer, 2010             
[4] Nof, S. Y., Handbook of Industrial Robotics, Volume I, John Wiley & Sons, 1999";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 636	Communication in Industrial Automation";
                       $courseInfo="The communication in automation course examines modern communication topology and architecture employed in industrial automation systems. Topics include communication components, principles of communication in industrial automation, architecture and topology of network communication, communication protocols as used in industrial automation in wired and wireless communication such as TCP/IP, RS-232, RS-485, Fieldbus, DNP3.0, Modbus, Zigbee, Bluetooth, and IDRA, error detection and control, troubleshooting, and introduction to security in industrial automation systems.";
                       $referenceMat="[1] Merz, H., Hansemann, T., Hubner, C., Backer, J., Moser, V., and Greefer, L., Building Automation: Communication Systems with EIB/KNX, LON and BACnet, Springer, 2009             [2] NJATC, Building Automation: Control Devices and Applications, Amer Technical Publisher, 2008 	 											        [3] Tooley,M. H., PC Based Instrumentation and Control, Elsevier, 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 637	Human-Computer Interaction";
                       $courseInfo="The human computer interaction course provides key approaches to the design, development, and evaluation of human-computer interfaces, with an emphasis on usability, interaction paradigms, computer-mediated human activities, and implications to society. Topics include foundation of HCI and technologies, HCI paradigms and history, nature of human computer interaction, use and context of computers,  human characteristics including human information processing, language and communication interaction, and ergonomics, computer system and interface architecture, development process including design approaches, implementation techniques and tools, evaluation techniques, user interface software and error handling, multimedia systems, interaction design for new environment.";
                       $referenceMat="[1] Dix, A., Finlay, J., Abowd, G., and Beale, R., Human Computer Interaction, 3rd Ed., Prentice Hall, 2004 												        [2] Sears, A., and Jacko, J.A., The Human Computer Interaction Handbook: Fundamentals, Evolving Technologies and Emerging Applications, 2nd Ed., CRC Press, 2007 [3] Schneiderman, B., Plaisant, C., Cohen, M., and Jacobs, S., Designing the User Interface: Strategies for Effective Human Computer Interaction, 5th Ed., Wiley, 2007  [4] Sharp, H., Rogers, Y., and Preece, J., Interaction Design: Beyond Human Computer Interaction, Wiley, 2007";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 638	Machine Learning ";
                       $courseInfo="The machine learning course examines the field of machine learning with a focus on how to construct computer programs that automatically improve with experience. Topics include exponential family distributions, Bayesian networks, Bayesian inference, maximum likelihood, maximum entropy, mixture models, EM algorithm, graphical models, hidden Markov models, variational methods, linear classifiers, regression, generalization bounds, support vector machines, kernel methods and transduction, machine learning applications of detecting fraudulent card transactions, learning users reading preferences, and autonomous vehicles that learn to drive.";
                       $referenceMat="[1] Mikkonen, T., Programming Mobile Devices: An Introduction to Practitioners, Wiley 2007   [2] Koller, D., and Friedman, N., Probabilistic Graphical Models: Principles and Techniques - Adaptive Computation and Machine Learning, MIT Press, 2009  				        [3] Marsland, S., Machine Learning: An Algorithmic Perspective, Chapman & Hall, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
	</div>   
            
            <div class="tabcontent" id="tab_content_4">
			<strong>Detail Software Engineering Elective Course Description<div style="color:green;">ELECTIVES</div></strong> <BR/><BR/>
                        
                        <?php
                       $courseName="CPEN 641	Advanced Operating Systems";
                       $courseInfo="The advanced operating system course examines the structural aspects of operating system and how these provide support for general purpose, embedded, and real-time operating environments. Topics include survey of early systems, structural design of operating system including process model, inter-process communication, synchronization mechanisms, resource management, CPU scheduling, I/O scheduling, file systems, virtual machines, protection issues, implementation issues of modern operating systems, performance analysis, deadlock detection, recovery and avoidance, operating system for distributed and current systems, review of current research in operating systems.";
                       $referenceMat="[1] Silberschatz, A., Galvin, P. B., and Gagne, G., Operating System Concepts, 8th Ed., Wiley & Sons, 2008
[2] Tanenbaum, A., Modern Operating Systems, 3rd Ed., Prentice Hall, 2007 
[3] Stallings, W., Operating Systems: Internals and Design Principles, 6th Ed., Prentice, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 642	Real-Time Software and Systems";
                       $courseInfo="The real-time software and systems course provides a comprehensive view of real-time systems with theory, techniques and methods necessary for effective design and development of real-time computing system. Topics include fundamental concepts, terminology, real-time characteristics and issues, real-time hardware including processors, memory and transducers, operating systems and tasks, utilization and response time, periodic and aperiodic task scheduling, synchronization and blocking, resource access, rate monotonic analysis, priority servers, real-time system development process, real-time system requirements analysis, modeling techniques, architecture design, design patterns, performance analysis, verification and validation, testing strategies, system safety and reliability, languages and operating systems for real-time computing, and real-time problems in concurrent and distributed systems.";
                       $referenceMat="[1] Gomaa, H., Designing Concurrent, Distributed and Real-Time Applications with UML, Addison-Wesley, 2000 
[2] Laplante, P., Real-Time Systems Design and Analysis, 3rd Ed., IEEE/Wiley, 2004 
[3] Douglass, B., Real-Time UML: Advances in the UML for Real-Time Systems, Addison Wesley, 2004  
[4] Douglass, B., Real-Time Design Patterns: Roboust Scalable Architecture for Real-Time Systems, Addison Wesley, 2004  
[5] Cooling, J., Software Engineering for Real-Time Systems, Addison Wesley, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 643	Software Engineering";
                       $courseInfo="The software engineering course examines the concepts of system hierarchical relationships and the role of system engineers. Topics include software engineering for modern enterprise application and performance critical systems, software life cycle, software engineering process, requirements and software requirements analysis, software design, software architecture including trade-off analysis, enterprise architecture, service-oriented architecture, COTS architecture, and RAD, software implementation, software integration for systems such as enterprise application integration and COTS integration, software verification and transition, software validation, operation and maintenance, software quality assurance.";
                       $referenceMat="[1] Vliet, H. V., Software Engineering: Principles and Practice, 3rd Ed., Wiley, 2008  
[2] Schach, S., Object Oriented and Classical Software Engineering, McGraw Hill, 2010   
[3] Garcia, A., Software Engineering for Large-Scale Multi Agent Systems: Research Issues and Practical Applications, Springer, 2003  
[4] Bergenti, F., Marie-Pierre Gleizes, and Zanbonelli, F., Methodologies and Software Engineering for Agent Systems, Springer, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 644	Software Testing";
                       $courseInfo="The software testing course focuses on the techniques and processes for testing software reliability, reliability models, and techniques to improve and predict software reliability. Topics include defining necessary reliability, testing fundamentals including issues and relationships of testing to other activities, test levels ranging from target of the tests, objectives, component testing, integration, system and acceptance testing, testing techniques including specification-based, coded-based, fault-base, usage-based, and nature of application, test-related measures for system under test and evaluation of the tests performed, and test process.";
                       $referenceMat="[1] Musa, J. D., Software Reliability Engineering: More reliable Software Faster and Cheaper, 2nd Ed., Authorhouse, 2004   
[2] Perry, W. E., Effective Methods for Software Testing, John Wiley, 2000    
[3] Lyu, M. R., Handbook of Software Reliability Engineering, McGraw Hill, 1996";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 645	Software Design";
                       $courseInfo="The software design course examines the general software design concepts and design process and enabling techniques. Topics include key issues in software design, software structure and architecture styles including human computer interface design, software design quality analysis and evaluation, software design notations, software design strategies and methods including heuristic and formal methods and component-based design.";
                       $referenceMat="[1] Vliet, H. V., Software Engineering: Principles and Practice, 3rd Ed., Wiley, 2008  
[2] Schach, S., Object Oriented and Classical Software Engineering, McGraw Hill, 2010   
[3] Garcia, A., Software Engineering for Large-Scale Multi Agent Systems: Research Issues and Practical Applications, Springer, 2003  
[4] Bass, L., Clements, P., and Kazman, R., Software Architecture in Practice, Wesley, 1998";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 646	Software Measurements and Quality";
                       $courseInfo="The software measurements and quality assurance course provides an in-depth evaluation of the verification and validation process throughout the development lifecycle of software. Topics include software quality fundamentals, software engineering culture and ethics, value and costs of quality, quality models and characteristics, quality improvement, application quality requirements, and defect characterization, software quality management process, quality assurance, software quality management techniques, and software quality measurement, verification and validation including system and software verification and validation, and independent verification and validation, verification and validation techniques including testing, demonstrations, traceability, analysis, inspections, peer review, walkthrough, and audits.";
                       $referenceMat="[1] Fenton, N. E., and Pfleeger, S. L., Software Metrics: Rigorous and Practical Approach, 2nd Ed., PWS Publishing, 1998  
[2] Kan, S. H., Metrics and Models in Software Quality Engineering, 2nd Ed., Wesley, 2002    
[3] Munson, J. C., Software Engineering Measurements, Auerbach Publications, 2003  
[4] Kitchenham, B. A., Software Metrics: Measurement for Software Process Improvement, Blackwell Publications, 1996";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 647	Systems Engineering";
                       $courseInfo="The systems engineering course examines the methods, tools, and validation techniques for the analysis, specification and prototyping of software systems. Topics include basics of systems engineering, system design constraints, design and requirements allocation, eliciting requirements, analysis, concepts exploration and evaluation, design process, defining concepts, architecting systems, prototyping systems, conceptual modeling of systems and validation, designing tests, analysis of risks and failures, acceptance tests, considering users, deployment and maintenance of systems, and practical considerations for software engineering of the world wide web. ";
                       $referenceMat="[1] Blanchard, B., and Fabrycky, W., Systems Engineering and Analysis, 4th Ed., Prentice, 2006   
[2] Kossiakoff, A., and Sweet, W., Systems Engineering: Principles and Practice, Wiley-Interscience, 2003   
[3] Berenbach, B., Paulish, D., Kazmeier, J., and Rudorfer, A., Software and Systems Requirements Engineering: In Practice, McGraw Hill, 2009   
[4] Lauesen, S., Software Requirements: Styles and Techniques, Addison Wesley, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 648	Software Maintenance";
                       $courseInfo="The software maintenance course examines the principles and techniques used for the maintenance of software systems. Topics include nature of maintenance, need for maintenance, components of maintenance costs, and categories of maintenance, key issues in software maintenance such as technical issues relating to testing, impact analysis, and maintainability, management issues, maintenance cost estimation, and software maintenance measurement, maintenance process including process models, maintenance activities, unique activities, and supporting activities, techniques for maintenance such as program comprehension, reengineering, and reverse engineering";
                       $referenceMat="[1] Smith, D. D., Designing Maintainable Software, Springer, 1999  
[2] Pigoski, T. M., Practical Software Maintenance: Best Practices for Managing Your Software Investment, John Wiley, 1996    
[3] Seacord, R. C., Plakosh, D., and Lewis, G. A., Modernizing Legacy Systems: Software Technologies, Engineering Processes, and Business Practices, Addison-Wesley, 2003  
[4] Arthur, L. J., Software Evolution: A Software Maintenance Challenge, John Wiley, 1998";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 649	Enterprise Application Integration";
                       $courseInfo="The enterprise application integration course provides the techniques on how to design and deploy large-scale systems and understand the trade-offs and implications of supporting the critical backbone of modern enterprises. Topics include enterprise architecture frameworks including the Zachman enterprise framework, open group architecture framework, and enterprise architecture cube methodology, enterprise oriented service architecture design and implementation, unique aspects of enterprise architecture and development, security for large enterprise systems, reliability for distributed long running transactions, standards for intra and extra organization system integration, deployment and fault tolerance of systems.";
                       $referenceMat="[1] Coulouris, J., Dollimore, J., and Kindberg, T., Distributed Systems: Concepts and Design, 4th Ed., Addison Wesley, 2005   
[2] Erl, T., Service Oriented Architecture: A Guide to Integrating XML and Web Services, Prentice Hall, 2004   
[3] Erl, T., Service Oriented Architecture Design Patterns, Prentice Hall, 2009   
[4] Burke, B., and Monson-Haefel, R., Enterprise JavaBeans, 5th Ed., O’Reilly, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 686	Software Architecture Systems";
                       $courseInfo="The software architecture systems course examines the principles and techniques for the architectural design of complex systems using well-founded architectural paradigms. It considers commonly-used software system structures, techniques for designing and implementing these structures, models and formal notations for characterizing and reasoning about architectures, tools for generating specific instances of an architecture, and case studies of actual system architectures. Topics include overview of software architecture, architectural drivers, structures and views, data flow systems, data flow styles, call-return systems, client-server and tiered architecture, middleware, event based systems, shared information systems, techniques and methods for the architecture, design by selection, architecture evaluation, product lines, using UML for design representation, formal specification and analysis, architecture conformance, performance, availability, service oriented architecture and web services, security, usability, organizational alignment, global distributed development, platforms, and research directions in software architecture systems.";
                       $referenceMat="[1] Bass, L., Clements, P., and Kazman, R., Software Architecture in Practice, 2nd Ed., Addison Wesley, 2003  
[2] Shaw, M., and Garlan, D., Software Architecture: Perspectives on an Emerging Discipline, Prentice Hall, 1996    
[3] Bass, L., Clements, P., and Kazman, R., Documenting Software Architectures: Views and Beyond, 2nd Ed., Addison Wesley, 2011  
[4] Lattanze, A. J., Taylor, and Francis, Architecting Software Intensive Systems: A Practitioner’s Guide, Auerbach, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
		</div>

		<div class="tabcontent" id="tab_content_5">



		<strong>Detail Networks Engineering Elective Course Description<div style="color:green;">ELECTIVES</div></strong><BR/><BR/>
                
                 <?php
                       $courseName="CPEN 651	High-Speed Networks";
                       $courseInfo="The high speed data networks course focuses on the advances in LAN, MAN, and ATM. Topics include high speed data networks models, approaches to design and management of networks, high speed transmission networks and switching technologies, FDDI, DQDB, SMDS, Frame Relay, ATM networks, and SONET, congestion control and traffic management, performance modeling, queuing theory, routing algorithms, data compression, and applications demanding high-speed communication, multicasting for teleconferencing, and mobile computing.";
                       $referenceMat="[1] Stallings, W., High Speed Networks and Internet: Performance and Quality of Service, 2nd Ed., Prentice Hall, 2002 4th Ed., Prentice Hall, 2003  
[2] Warland, J., and Varaiya, P., High Performance Communication Networks, 2nd Ed., Morgan Kaufmann, 2000  
[3] Perros, H. G., An Introduction to ATM Networks, John Wiley & Sons, 2002   
[4] Perros, H. G., Connection Oriented Networks: SONET/SDH, ATM, MLPS, and Optical Networks, John Wiley & Sons, 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 652	Advanced Topics in Wireless Networks";
                       $courseInfo="The advanced topics course examines topical issues in networking with focus on wireless networking technologies, protection and the next generation networking. Topics include wireless networking services and technologies, requirements and challenges for wireless data network design, access technologies, developments in wireless networks such as WiFi (IEEE 802.11), bluetooth, wireless USB, Ultra wideband, sensor networks such as zigbee, wide area networks such as WiMAX (IEEE 802.16) and 3G/4G cellular networks, mobility management, handoff, protocol adaptations for wireless networking including mobile IP, WAP, mobile TCP, wireless resources management, including packet scheduling power management and ad-hoc routing, issues of mobile data network security, emerging mobile data architectures and services, quality of service, issues of mobile data application, wireless cache invalidation, multimedia transport over wireless, and location dependent services.";
                       $referenceMat="[1] Stallings, W., Wireless Communications and Networks, 2nd Ed., Prentice Hall, 2005  
[2] Smith, C., and Collins, D., 3G Wireless Networks, McGraw Hill, 2007   
[3] Yacoub, M. D., Wireless Technology: Protocols, Standards and Techniques, CRC, 2002  
[4] Sheikh, A. U. H., Wireless Communications: Theory and Techniques, Springer, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 653	Network Protocols and Services";
                       $courseInfo="The networks protocols and services course examines network protocols, standards, performance analysis, and implementation of existing and emerging network protocols. Topics include fundamental of networks, performance metrics, internet backbone and access technologies, protocols including multiple access protocols such as CSMA/CD, token ring, network layer and routing, IP addressing, transport layer and TCP, UDP, high-speed bulk transfer protocols, and routing protocols such as BGP and OSPF, application layer and WWW, HTTP, network services, SMTP and send-mail, DNS and BIND, network management and SNMP, mechanism for reliable packet delivery, host-network interfacing, protocol implementation models, introduction to secure protocols, IPSec, SSL, and TLS.";
                       $referenceMat="[1] Stallings, W., Computer Networking with Internet Protocols and Technology, Prentice, 2004  
[2] Forouzan,B. A., and Fegan,S. C., TCP/IP Protocol Suite, 3rd Ed., McGraw Hill, 2007 
[3] Keshav, S., An Engineering Approach to Computer Networking, Addison Wesley, 1997";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       
                       
                       
                       $courseName="CPEN 654	Multimedia Networks and Storage";
                       $courseInfo="The multimedia networks and storage course covers a broad range of topics in the frontier of multimedia networking systems with focus on transmission techniques and protocols, massive storage architectures and data security. Topics include concepts of multimedia systems, resource management issues in distributed/networked multimedia systems, QoS routing and multicasting, traffic shaping, task and message scheduling, internet QoS, adaptive multimedia applications over internet, operating system support for multimedia, characteristics of multimedia data, storage architecture and scalable media servers, processor architectures for multimedia, compression techniques, synchronization techniques, jitter management, error control and loss recovery, video-on-demand, voice-over-IP, wide area caching systems and techniques, encryption and group key management.";
                       $referenceMat="[1] Steinmetz, R., and Nahrstedt, K., Multimedia Systems, Springer, 2004   
[2] Jeffay, K., Zhang, H. J., Multimedia Computing and Networking, Morgan Kaufmann, 2002    
[3] Farley, M., Building Storage Networks, 2nd Ed., Osborne/McGraw Hill, 2001   
[4] Simitci, H., Storage Network Performance, Wiley, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 655	Distributed Networks";
                       $courseInfo="The distributed networks course provides the concepts underlying the architecture and operations of distributed networks. Topics include distributed network architectures and processing, communication primitives, resource sharing, event ordering and synchronization, distributed deadlocks and management, naming, load balancing, distributed network operating systems and languages, distributed databases, fault tolerance and recovery strategies, file service, protection issues, design issues, distributed office information systems, and related applications.";
                       $referenceMat="[1] Coulouris, G. F., Dollimore, J., and Kinberg, T., Distributed Systems: Concepts and Design, Addison Wesley, 2005 
[2] Jia, W., and Zhou, W., Distributed Network Systems: From Concepts to Implementations, Springer, 2005 
[3] Birman, K. P., Reliable Distributed Systems: Technologies, Web services, and Applications, Springer, 2005 
[4] Ghosh, S., Distributed Systems: An Algorithimic Approach, Chapman & Hall, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 656	Networks Security";
                       $courseInfo="The network security course examines the treatment of network security for secure operation. Topics include principles and practice of network and internet security, mathematical principles of cryptography and data security, conventional and modern encryption algorithm techniques, secure communication protocols, public key cryptography, remote access security, firewalls, VPNs, and PKI architecture, secure IP and SSL, intrusion detection systems, electronic mail security, routing protocol security, wireless network security, traffic analysis and alert tools, modern applications such as digital cash and secure distributed computing, operational aspects of network security.";
                       $referenceMat="[1] Kizza, J. M., A Guide to Computer Network Security, Springer, 2008  
[2] Canavan, J. E., Fundamentals of Network Security, Artech, 2001 
[3] Stallings, W., Network Security Essentials:  Applications and Standards, 4th Ed., Prentice Hall, 2011  
[4] Anderson, R., Security Engineering: A Guide to Building Dependable Distributed Systems, 2nd Ed., John Wiley & Sons, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 657	Sensor Networks";
                       $courseInfo="The wireless sensor network course examines the fundamental issues of sensor network and design of collections of smart sensors that are networked to form self-configuring pervasive computing systems. Topics include introduction to ad-hoc and senor network including challenges and unique constraints, wireless communication characteristics, ad-hoc wireless networks, media access control protocols, routing protocols, networking sensors including unique features, deployment techniques, sensor tasking and control, and transport layer and security protocols, sensor network platforms and tools including sensor network programming challenges, operating systems, and middleware devices, applications of ad-hoc and sensors networks and future trends including ultra wide band radio communication and wireless fidelity systems, and applications such as embedded sensor networks and pervasive computing.";
                       $referenceMat="[1] Raghavendra, C. S., Wireless Sensor Networks, Springer, 2006    
[2] Sohraby, K., Minoli, D., and Znati, T. F., Wireless Sensor Networks: Technology, Protocols and Applications, Wiley, 2007    
[3] Karl, H., and Willig, A., Protocols and Architectures for Wireless Sensor Networks, John Wiley & Sons, 2005    
[4] Shorey, R., Mobile, Wireless and Sensor Networks: Technology, Applications and Future Directions, John Wiley & Sons, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 658	E-Commerce Technologies";
                       $courseInfo="The e-commerce technologies course examines the principles and design of secured e-commerce applications deployment over the world-wide-web systems. Topics include fundamentals of e-commerce infrastructure and implementation, social, ethical and legal considerations in e-commerce, developing application for the world-wide-web, application protocols, e-commerce models, connection and session objects, authentication services, internet security including firewalls, viruses, hacking, design issues of e-commerce, web servers, integrating database services, data transactions between database servers and servers using XML.";
                       $referenceMat="[1] Reynolds, J., The Complete e-Commerce Book: Design, Build, and Maintain a Successful Web Business, 2nd Ed., CMP, 2004   
[2] Chaffey, D., E-Business and E-Commerce Management: Strategy, Implementation and Practice, 4th Ed., Prentice Hall, 2010    
[3] Laudon, K. C., and Traver, C. G., e-Commerce, 7th Ed., Prentice Hall, 2010 
[4] McFadyen, T. M., E-Commerce Best Practices: How to Market, Sell, and Service Customers with Internet Technologies, McFadyen Solutions, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
                </div>
                
                <div class="tabcontent" id="tab_content_6">
			<strong>Detail Information Systems Engineering Elective Course Description<div style="color:green;">ELECTIVES</div></strong> <BR/><BR/>
                        
                        <?php
                       $courseName="CPEN 661	Information Security";
                       $courseInfo="The information security course examines the design and implementation of information security system that assures content confidentiality. Topics include introduction to confidentiality, integrity, availability, authentication techniques and models, controls and protection models, security kernels, secure programming, audit, intrusion, detection and response, operational security issues, physical security issues, personal security, policy formation and enforcement, access controls, information flow, legal, privacy and social issues, identification and authentication in local and distributed systems, classification and trust modeling, risks and vulnerabilities, risk assessment, database security, encryption, host based and network based security issues, secure network design, implementation and transition issues, and techniques for responding to security breaches.";
                       $referenceMat="[1] Bidgoli, H., Handbook of Information Security Vol-3, John Wiley & Sons, 2006  
[2] Stamp, M., Information Security: Principles and Practice, John Wiley & Sons, 2006 
[4] Anderson, R., Security Engineering: Guide to Building Dependable Distributed Systems, 2nd Ed., John Wiley & Sons, 2008 
[5] Kizza, J. M., and Kizza, F. M., Securing the Information Structure, IGI Global Snippet, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 662	Pattern Recognition";
                       $courseInfo="The pattern recognition course describes various methods and techniques that are used in pattern recognition. Topics include Bayes decision theory, description of patterns, feature extraction and classification, classification models, non-parametric pattern classification techniques, parameter estimation, pattern classification using linear discriminant functions, uncertainty in pattern recognition, fuzzy sets, inductive learning of rules for pattern recognition, learning discriminates, unsupervised learning and clustering, feature extraction, neural network techniques, structural recognition techniques, and other forms of pattern recognition methods and applications.";
                       $referenceMat="[1] Bishop, C. M., Pattern Recognition and Machine Learning, Springer, 2007   
[2] Ripley, B. D., Pattern Recognition and Neural Network, Cambridge University Press, 2008  
[3] Looney, C., Pattern Recognition Using Neural Network, Oxford University Press, 1997";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 663	Cryptography and Analysis";
                       $courseInfo="The cryptography course focuses on the mathematical concepts and techniques behind modern information encryption and network technologies. Topics include survey of classical and modern encryption techniques and algorithms, encryption theory and foundations, cryptographic and crypto-analysis techniques, one-way functions, pseudo-random function, encryption system modeling, authentication protocols, public-key cryptosystems, notions of security, zero-knowledge proofs, multi-party cryptographic protocols, security policies, legal and ethical issues, practical applications of encryption.";
                       $referenceMat="[1] Stallings, W., Cryptography and Network Security: Principles and Practice, 5th Ed., Prentice Hall, 2011  
[2] Mao, W., Modern Cryptography: Theory and Practice, Prentice Hall, 2003  
[3] Schneier, B., Applied Cryptography, 2nd Ed., Prentice Hall, 1999  
[4] Swenson, C., Modern Cryptanalysis: Techniques for Advanced Code Breaking, John Wiley and Sons, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 664	Artificial Intelligence";
                       $courseInfo="The artificial intelligence course focuses on the issues and principles and techniques of artificial intelligence. Topics include knowledge representation, organization and manipulation of the world and how to reason logically with the knowledge, concepts of inconsistency, uncertainty, probabilistic reasoning, structured knowledge, logic programming, computational and statistical learning theory, machine learning including supervised, unsupervised and reinforcement learning, decision making including search oriented problem solving, planning, games, Markov and decision processes, planning and temporal reasoning, inference and theorem proving, reasoning under uncertainty, search and information retrieval, principles of intelligent agents, speech and natural language processing involving parsing, machine translation, and information extraction, speech recognition, computer vision, and robotics";
                       $referenceMat="[1] Jones, T. M., Artificial Intelligence: A Systems Approach, Jones & Bartlett Learning, 2008 
[2] Nilsson, N. J., Artificial Intelligence: A New Synthesis, Morgan Kaufmann, 1998 
[3] Luger, G. F., Artificial Intelligence: Structures and Strategies for Complex Problem Solving, Addison Wesley, 2009 
[4] Russell, S., and Norvig, P., Artificial Intelligence: A Modern Approach, 3rd Ed., Prentice Hall, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 665	Neural Networks";
                       $courseInfo="The neural networks course examines models of computation that learn tasks from examples of desired input and output behavior for various applications. Topics include basic concepts behind neural network models, biological neuron model, neural network architectures, feed-forward, feed-back, Hopefield models, adaptation and learning in neural networks including perceptron, iterative learning, multilayer network with hidden layers, back-propagation, convergence and speeding up algorithms, supervised Hebbian learning, Widrow-Hoff learning, associative learning, competitive learning, self-organizing neural networks, neural network training and testing techniques including setting of training parameters, preparing training data, training the network, and testing of the network, neural network applications to speech, robotics, face and pattern recognition, implementation process using electronics and optical.";
                       $referenceMat="[1] Rising, L., and Schmidt, D. C., Design Patterns in Communication Software, Cambridge University Press, 2001   
[2] Anandalingam, G., and Raghavan, S., Telecommunications Network Design and Management, Kluwer Academic Publisher, 2003  
[3] Anandalingam, G., and Raghavan, S., Telecommunications Planning, Kluwer Academic Publisher, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 618	Digital Communication Systems";
                       $courseInfo="The digital communication course investigates the modern trends in generating digital signal for propagation and processing. Topics include basics of stochastic processes, design of baseband and passband digital communication systems, characteristics of channels, channel capacity, modulation techniques, including PAM, QAM, PSK, FSK, and spread spectrum, optimal demodulation techniques and performance, synchronization, inter-symbol interference (ISI) and equalization techniques.";
                       $referenceMat="[1] Haykin, S. S., Neural Networks and Learning Machines, Prentice Hall, 2009 
[2] Dreyfus, G., Neural Network: Methodology and Applications, Birkhauser, 2005  
[3] Haykin, S. S., Neural Network: A comprehensive Foundation, 2nd Ed., Prentice Hall, 1999 
[4] Mehrotra, K., Mohan, C., and Ranka, S., Elements of Artificial Neural Network, MIT Press, 1997 
[5] Sivanandam, S. N., Sumathi, and Deepa, Introduction to Neural Network Using Matlab, Tata McGraw Hill, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 667	Advanced Database Systems";
                       $courseInfo="The database system course examines the principles of the design of systems that can manipulate and retrieve data from large databases using high level formal languages. Topics include data base development lifecycle, data modeling, database architectures, database design theory, data acquisition, models for database systems, data integration and cleaning, query processing, concurrency control and transaction management, data search and recovery, distributed and parallel data management in cluster computing and peer-to-peer, web pages, sensor networks and RFID, data storage, inference and data mining, data security and privacy, declarative data-intensive systems, data visualization, query optimization and stream algorithms, current trends in development of database systems.";
                       $referenceMat="[1] Ramakrishnan, R., and Gehrke, J., Database Management Systems, McGraw Hill, 2002 
[2] Zaniolo, C., Advanced Database Systems, Morgan Kaufmann, 1997  
[3] Ramakrishnan, R., and Gehrke, J., Database Management Systems, McGraw Hill, 2003  
[4] O’Neal, P., and O’Neal, E., Database: Principles, Programming, and Performance, Morgan Kaufmann, 2001 
[5] Mullins, C., Database Administration: Complete Guide to Practices and Procedures, Addison Wesley, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 668	Data Compression";
                       $courseInfo="The data compression course examines the theoretical foundation of compression techniques and algorithms for lossy and lossless data compression as well as signal modeling and its extensions to data compression and applications to multimedia data compression. Topics include basics of signal encoding and decoding for compression, lossy and lossless compression, communication building blocks, and fixed and variable rates, quantization theory including uniform quantization, distortion and bit rate, high rate quantization theory and elementary distortion rate theory, architecture for data compression including signal models and spectral analysis, coding forms, entropy and variable quantization, lossless coding algorithms such as Huffman, arithmetic, universal lossless, adaptive and predictive coding algorithms, distortion and similarity measures,  lossy coding algorithms such as scalar quantization algorithm, and vector quantization coding algorithm, speech and audio compression techniques, image and video compression techniques, compression standards and formats.";
                       $referenceMat="[1] Salomon, D., Motta, G., and Bryant, D., Handbook of Data Compression, Springer, 2009 
[2] Sayood, K., Lossless Compression Handbook, Academic Press, 2003 
[3] Gibson, J. D., Berger, T., Lookabaugh, T., Lindbergh, D., and Baker, R. L., Digital Compression for Multimedia: Principles and Standards, Morgan Kauffmann, 1998 
[4] Salomon, D., A Concise Introduction to Data Compression, Springer, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 669	Speech Processing and Recognition";
                       $courseInfo="The speech processing and recognition course covers the fundamentals of speech recognition and voice interfacing with machines. Topics include overview of voice interfaces, issues with voice interfacing, recent applications successes and failures, speech technologies like recognition, synthesis, and compressed audio transmission, automated speech processing, models and theoretical concepts in speech recognition, speech articulation and perception processes, digital speech processing and phonetic feature extraction, identifying words from pronunciations, syntax and semantics in speech understanding, task constraints and natural language, alternative speech recognition system structures, voice interfacing projects, and strategies for achieving user satisfaction.";
                       $referenceMat="[1] Altmann, G. T. M., Cognitive Models of Speech Processing, MIT Press, 1995 
[2] Benesty, J., Sondhi, M. M., and Huang, Y., Handbook of Speech Processing, Springer, 2008 
[3] Sadaoki, Furui, Digital Speech Processing, Synthesis, and Recognition, Dekker Inc., 1989 
[4] Jurafski, D., and Martin, J. H., Speech and Language Processing, 2nd Ed., Prentice, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 672	Data Mining";
                       $courseInfo="The data mining course provides background information on the design and use of data mining algorithms and applications in data mining on the web, computational biology and various medical applications. Topics include models, methods and processes of data mining including search and querying, data dredging and fishing, discrete structures involving item-set mining, concept lattices, condensed representation, frequent pattern mining, customized data structures for speeding up data mining algorithms, attribute-value learning techniques including decision tree, decision lists, classification and regression trees, association rules, and rule-based mining, relational mining techniques, probabilistic techniques including conditional independence and its modeling, representational complexity, Bayesian networks, and probabilistic models for query approximation, sequences and order, compositional data mining, mining chains of relations, integrated query and mining languages, paradigms for interfacing with database systems, and application in bi-informatics, personalization, information retrieval, web modeling, filtering and text processing.";
                       $referenceMat="[1] Larose, D. T., Data Mining Methods and Models, Wiley, 2006 
[2] Han, J., and Kamber, M., Data Mining: Concepts and Techniques, Morgan Kaufmann, 2001 
[3] Wang, J., Data Mining: Opportunities and Challenges, IGI, 2003 
[4] Grossman, R. L., Data Mining for Scientific and Engineering Applications, Springer, 2001 
[5] Hastie, T., Tibshirani, R., and Friedman, J., Elements of Statistical Learning: Data Mining, Inference, and Prediction, 2nd Ed., Springer, 2009";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 674	Computer Vision";
                       $courseInfo="The computer vision course involves the development of algorithms and software that have the potential to mimic a biological organism's ability to see. Topics include the physics of vision and its computational modeling, mathematical techniques for representing and reasoning with curves, surfaces, and volumes, image formation and sensing, camera model, thin lens model, lighting and reflectance, image capture and processing including edge finding, corner detection, image segmentation and texture analysis, image reflectometry involving color, image irradiance, and reflectance map,  image analysis techniques such as convolution, filtering, noise, derivatives, and smoothing, scale space and SIFT, motion estimation and optic flow, 3D vision including shape from shading and shape from texture and defocus, geometric camera calibration, homographies, structure from motion, epipolar geometry and estimating of fundamental matrix, and dense stereo correspondence.";
                       $referenceMat="[1] Szeliski, R., Computer Vision: Algorithms and Applications, Springer, 2010  
[2] Cipolla, R., Computer Vision: Detection, Recognition, and Reconstruction, Springer, 2010  
[3] Kulkarni, A. D., Computer Vision and Fuzzy-Neural Systems, Prentice Hall, 2001  
[4] I. Guyon, Feature Extraction: Foundations and Applications, Springer, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
		</div>

		<div class="tabcontent" id="tab_content_7">



		<strong>Detail BioComputing Elective Course Description<div style="color:green;">ELECTIVES</div></strong><BR/><BR/>
                
                 <?php
                       $courseName="CPEN 673	Biomedical Signal Processing";
                       $courseInfo="The biomedical signal processing course provides an application-intensive approach to biomedical signal processing and application of mathematical tools. Topics include a review of signals and systems theory, Fourier analysis, sampling theorem, discrete signal processing, noise characteristics of real-world bio-signals such as biologic, sensor, electronics and digital processing noise, linear and adaptive filtering, wavelet transforms, denoising, compression, classification and feature extraction applications to 1D and image biosignals, review of practical considerations in medical device design as relates to signal processing such as scalability, robustness, testability, algorithm complexity and regulatory issues.";
                       $referenceMat="[1] Najarian, K., and Splinter, R., Biomedical signal and Image processing, CRC, 2006  
[2] Bruce, E. N., Biomedical Signal processing and Signal Modeling, Wiley & Sons, 2001  
[3] Reddy, Biomedical Signal Processing: Principles and Techniques, Tata McGraw Hill, 2005 
[4] Rangayyan, R. M., Biomedical Signal Analysis: A Case Study Approach, IEEE Press, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 674	Digital Image Processing";
                       $courseInfo="The digital image processing course examines the properties of digital images and the method of processing. Topics include 2-D sequences and systems, separable systems, properties of digital images, image formation, sampling, time and frequency representation of images, transformation techniques including Fourier, z transform, difference equations, and wavelets transform, human visual system including perception, vision properties, color, and sensors, image enhancement, image restoration, geometrical image modification, filtering, and edge detection, binary image processing, morphological image processing, halftoning and edge detection, image coding and compression models for loss-free, lossless, and lossy compressions, motion estimation and compensation, compression standards and formats.";
                       $referenceMat="[1] Gonzalez, R. C., and Woods, R. E., Digital Image Processing, Prentice Hall, 2008  
[2] Jahne, B., Digital Image Processing, Springer, 2005  
[3] Pitas, I., Digital Image Processing Algorithms and Applications, Wiley-IEEE, 2000  
[4] Acharya, T., and Ray, A. K., Image Processing: Principles and Applications, Wiley, 2005 
[5] Nixon, M. S., and Aguado, A. S., Feature Extraction and Image Processing, 2nd Ed., Elsevier, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 675	Theory of Computations";
                       $courseInfo="The theory of computations course provides the fundamental complexity theory and models useful for solving computational problems. Topics include basic computational theory, computational models including nondeterministic alternating and probabilistic machines, Boolean circuits, complexity classes related to models of computing including NP, polynomial hierarchy, BPP among others, complete problems, interactive proof systems and probabilistic proofs, randomized algorithms, structural complexity and complexity hierarchy.";
                       $referenceMat="[1] Ross, S. M., Simulation, Academic Press, 2006  
[2] Goldreich, O., Computational Complexity: A Conceptual Perspective, Cambridge Press, 2008  
[3] Arora, S., and Barack, B., Computational Complexity: A Modern Approach, Cambridge University Press, 2009  
[4] Zimand,M., Computational Complexity: A Quantitative Perspective, Elsevier, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       
                       
                       
                       $courseName="CPEN 676	Algorithms for Computational Biology";
                       $courseInfo="The algorithms for computational biology course provide the background knowledge useful for the design of algorithms for analysis of biological systems. Topics include vector geometry, matrix algebra and recursive relationship, algorithm concepts and optimization, basic biological techniques for predicting interactions, databases, graph algorithm libraries, network topological properties, phylogenetic profiles, predicting function including integer programming, modularity, partitioning heuristics, spectral partitioning and dense sub-graph detection, network searching and alignments, speeding-up searches and color coding, random models of biological networks including duplication model, small world, preferential attachment models, evolving modularity, generating random graphs, dynamic networks, linear programming algorithm, semi-definite, side chain packing, and phylogenetic trees and reassortment detection algorithm.";
                       $referenceMat="[1] Gusfield, D., Algorithms on Strings, Trees, and Sequences: Computer and Computational Biology, Cambridge University Press, 1997  
[2] Pevzner, P., Computational Molecular Biology: An Algorithmic Approach, MIT Press, 2000  
[3] Jiang, T., Xu, W., and Zhang, M. Q., Current Topics in Computational Molecular Biology, MIT Press, 2002  
[4] Deonier, R. C., Tavare, S., and Waterman, M. S., Computational Genome Analysis, 1st Ed., 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 677	Bioinformatics";
                       $courseInfo="The bioinformatics course provides computational methods and development of algorithms to address problems in molecular biology. Topics include molecular genetics of DNA, RNA and protein, cellular organization, modern biochemical techniques such as cloning and DNA sequencing, bioinformatics problems, bioinformatics database, representing and retrieval of sequences, sequence comparison with dot matrices and dynamic programming, statistics of pattern appearance, multiple sequence alignment, sequence database searching, learning machine basics, phylogenetic tree construction and algorithms, representing and finding sequence features, RNA and protein structure prediction, gene prediction and annotation, gene finding, retrieving and displaying macromolecular structures, microarrays and gene expression analysis models and technologies, biomolecular computing.";
                       $referenceMat="[1] Xiong, J., Essential Bioinformatics, Cambridge University Press, 2006  
[2] Mount, D. W., Bioinformatics: Sequence and Genome Analysis, CSHL Press, 2004  
[3] Gautham, N., Bioinformatics: Databases and Algorithms, Alpha Science, 2006  
[4] Baxevanis, A. D., and Francis Ouellette, B. F., Bioinformatics: A Practical Guide to the Analysis of Genes and Proteins, Wiley & Sons, 2001 
[5] Pevsner, J., Bioinformatics and Functional Genomes, Wiley & Sons, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 678	Mathematical Neurobiology";
                       $courseInfo="The mathematical neurobiology course provides insight to the elements of neurophysiology and neuroanatomy for the development of quantitative models of nerve cell and brain phenomena and to develop and analyze several different mathematical models in neurobiology. Topics include difference equations, dynamical systems theory, ordinary differential equations and partial differential equations, linear membrane and cable theory, Rall's equivalent cylinder model of the nerve cell, determination of active membrane properties using linear theory, action potentials including Hodgkin-Huxley (HH) model and FitzHugh-Nagumo (FHN) model, asymptotic and computational determination of the action potential using the FHN equations, bursting phenomena in excitable cells, nonlinear waves of spreading cortical depression, and rotating waves in excitable media.";
                       $referenceMat="[1] Miftahof, R., Gil Nam, H., and Wingate, D. L., Mathematical Modeling and Simulation in Enteric Neurobiology, World Scientific, 2009  
[2] Laing, C., and Lord, G. J., Stochastic Methods in Neuroscience, Oxford Press, 2010 
[3] Poznanski, R. R., Modeling in Neurosciences: From Ironic Channels to Neural Networks, Harwood Academic Press, 1999  
[4] Feng, J., Computational Neuroscience: A Comprehensive Approach, Chapman & Hall, 2004  
[5] Ascoli, G. A., Computational Neuroanatomy: Principles and Trends, Human Press, 2002 ";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 679	Advanced Algorithm Design";
                       $courseInfo="The algorithm design course provides the basic concepts and principles to examine and design efficient algorithms for a variety of computational problems and applications. Topics include dynamic programming, methods of algorithm design and analysis including data structures, network flows, matching, and linear programming, ellipsoid algorithm, probabilistic algorithm techniques, approximation algorithms for NP problems, geometric algorithms, number theoretic algorithms, on-line computation, and parallel computing.";
                       $referenceMat="[1] Hopcroft, J. E., Motwani, R., and Ullman, J. D., Introduction to Automata Theory, Languages and Computation, 3rd Ed., Addison Wesley, 2006  
[2] Cormen, T. H., Lieserson,C. E., Rivest, R. L., and Stein, C., Introduction to Algorithms, 3rd Ed., MIT Press, 2009  
[3] Kleinberg, J., Algorithm Design, Person Education, 2006   
[4] Goodrich, M. T., and Tamassia, R., Algorithm Design: Foundations, Analysis, and Internet Examples, Wiley, 2006   
[5] Skiena, S. S., The Algorithm Design Manual, 3rd Ed., MIT Press, 2009  ";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 682	Analysis of Genomic Data";
                       $courseInfo="The analysis of genomic data course examines the approach for the analysis and display of large scale biological data sets using various algorithms and machine learning techniques. Topics include clustering techniques for gene expression and protein data analysis, machine learning techniques, biological networks, joint learning from multiple data sources, visualization issues for large scale biological data sets.";
                       $referenceMat="[1] Berrar, D. P., Dubitzky, W., and Granzow, M., A Practical Approach to Micro-array Data analysis, Springer, 2003  
[2] Zhang, A., Advanced Analysis of Gene Expression Micro-array Data, World Scientific, 2006  
[3] Allison, B. D., DNA Micro-arrays and Related Genomic Techniques: Designs, Analysis, and   Interpretation of Experiments, Chapman & Hall, 2006  
[4] Azuaje, F., and Dopazo, J., Data Analysis and Visualization in Genomics and Proteomics, Wiley & Sons, 2005 ";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
	</div>
	</div>

	</div>
</div>

</div>


</BODY>
</HTML>

