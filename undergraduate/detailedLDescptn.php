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
             <div class="link">Detailed Description-L100</div>
             <div class="arrow"></div>
         </div>
         <div class="tab" id="tab_menu_2">
             <div class="link">Detailed Description-L200</div>
             <div class="arrow"></div>
         </div>

          <div class="tab lab" id="tab_menu_3">
             <div class="link">Detailed Description-L300</div>
             <div class="arrow"></div>
         </div> 
          <div class="tab lab" id="tab_menu_4">
             <div class="link">Detailed Description-L400</div>
             <div class="arrow"></div>
         </div> 
    </div>
	<div class="curvedContainer">
		<div class="tabcontent" id="tab_content_1" style="display:block">
			<strong>Detailed Course Description: LEVEL 100</strong><BR/><BR/>
                       <?php
                       $courseName="FAEN 101	Algebra (4 credits)";
                       $courseInfo="Concept of a function of a single variable, graphs of functions - linear, quadratic and higher degree polynomial
functions, rational functions, inequalities in one and two variables, binomial theorem, circular measure, trigonometric
functions, exponential and logarithmic functions, hyperbolic functions. Algebra of complex numbers. Vectors and matrices
, the solution of linear systems of equations, vector spaces and subspaces, orthogonality, determinants, eigenvalues and
eigenvectors, linear transformations.";
                       $referenceMat="J. K. Backhouse and S. P. T Houldsworth, Pure Mathematics I and II, 4th Ed., Longman, 1985. 
G. James, Modern Engineering Mathematics, 3rd Ed., Prentice Hall, 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 102	Calculus I (4 credits) ";
                       $courseInfo="Limits and Continuity of a function of a single variable. Differentiation: Rules of differentiation, chain
                           rule and parametric differentiation, differentiation of trigonometric functions and their inverses, exponential and logarithmic functions, higher order derivatives, Leibnitz's rule. Differentiability: Rolle's Theorem, 
                           mean-value theorem, approximate methods of solving equations (graphical and Newton-Raphson methods). Integration and its applications: Area under curve, volumes of solids of revolution. Numerical integration: 
                           Trapezium and Simpson's rules. Vector function of a single variable: Differentiation and integration of vector functions, kinematics of a single particle in motion. Newton's laws of motion, motion in a straight
                           line and in a plane, projectiles and circular motion, work, energy and power; impulse and momentum, moment of a force, couple, conditions for equilibrium of rigid bodies. ";
                       $referenceMat="J. K. Backhouse and S. P. T Houldsworth, Pure Mathematics Book I and II, 4th Ed., Longman, 1985. 
G. James, Modern Engineering Mathematics, 3rd Ed., Prentice Hall, 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 103	Basic Mechanics I (3 credits)";
                       $courseInfo="General principles of mechanics, methods of problem solution, and numerical accuracy. Force vectors and mathematical operations. Static Particles: Coplanar 
                           force on a particle, resultant of forces, resolution of forces, conditions for the equilibrium of a particle, Newton's first law, free-body diagram, forces in space. Force System Resultants. Statics of a rigid 
                           body and conditions for equilibrium. Centroids and centers of gravity ";
                       $referenceMat="D. Kleppner and R. J. Kolenkow, An introduction to Mechanics, McGraw-Hill, 1997  
F. P. Beer and R. Russell Johnson Jnr., Vector Mechanics for Engineers, 6th Ed., McGraw-Hill, 1988  
R. C. Hibbeler, Engineering Mechanics: Statics, 5th Ed., Prentice Hall, 2006";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 105	Engineering Drawing with CAD (3 credits)";
                       $courseInfo="Technical Drawing: Introduction to Engineering Drawing, sketching and line techniques, geometric constructions, multiview drawings and orthographic projection, auxiliary views, descriptive geometry.
                           Engineering Drawing: Dimensioning, sectioning, tolerances, fits, Assembly drawings, cross sectional views, half sections. AutoCAD. Starting AutoCAD, object construction in AutoCAD, isometric drawings in AutoCAD,
                           3D AutoCAD and solid modeling, application of AutoCAD to the following: Technical surface finish, measurement, methods of examination and specification";
                       $referenceMat="T. E. French, A Manual of Engineering Drawing for Students and Draftsmen, McGraw-Hill,   
J. A. Leach and B. A. Duffy, AutoCAD 2002 Assistant, McGraw-Hill, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 106	Applied Electricity (3 credits)";
                       $courseInfo="Foundations of electricity: charge, voltage, current, power and energy, computation of power and
                           energy for electrical gadgets and household, simple billing calculations. Electricity supply: definition and characteristics of AC and DC voltages and currents and their applications, calculation of Instantaneous
                           , RMS and Average voltage and current values and their relevance. Transformer: definition and components of a transformer, principle of operation, ideal transformer and characteristics, transformer types and 
                           ratings used by utilities in Ghana. AC circuit systems: definition of 1-phase 2-phase and 3-phase circuit systems, voltage and current relationship between the circuit systems, sample voltage drop and
                           line loss calculation for electricity supply from source to destination. Electricity supply: electricity utilities and functional roles, electricity generation sources, hydro power generation process, 
                           transmission process, distribution process to users in Ghana. Power factor: definition and relevance, active power, reactive power, and apparent power, calculation of power factor and correction.
                           Electric Motors: components of an electric motor, basic principle of operation, motor types and applications. Electrical Safety: importance of electrical safety, shock current, common sources of
                           hazards, safe practices.";
                       $referenceMat="E. Hughes, I. Mckenzie-Smith, J. Hiley and K. Brown, Electrical and Electronic Technology, 9th Ed., Prentice-Hall, 2005   
C. W. Wadhwa, Basic Electrical Engineering, 4th Ed., New Age International Publishers, 2007";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 108	Basic Electronics (3 credits)";
                       $courseInfo="History and overview of electronics from vacuum tubes to large scale integration, including reasons for studying electronics, selected important areas of application, role of
                           electronics in computer engineering. Semi-conductivity: materials and properties, electrons and holes, concept of doping, acceptors and donors, p and n-type materials, conductivity and 
                           resistivity. Diodes and Circuits: symbol and representation, diode operation and characteristics, region of operation and limitations, zener and schottky diodes, diode circuit and load
                           line, diode application in rectifier and dc/dc converter, diode logic functions - AND and OR . Bipolar Junction Transistors (BJT): physical structure of BJT, symbol and circuit 
                           representation, NPN and PNP transistor operation, voltage-current characteristics of transistors, transistor region of operation and limitation, transistor circuit analysis, 
                           biasing for logic application, transistor operation as logic functions - OR and  AND logics.";
                       $referenceMat="A. P. Malvino, Electronics Principles, 6th Ed., McGraw-Hill, 1999. 
Donald A. Neamen, Electronic Circuit Analysis and Design, 2nd Ed., McGraw-Hill, 2001.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 109	General Physics (3 credits)";
                       $courseInfo="Vibrations: Simple harmonic motion, damped harmonic motion, forced harmonic motion. Waves: Wave types, wave phenomena -
                           interference and diffraction. Electricity and Magnetism: Coulomb's law, electric field, Gauss's law, electric potential, current electricity -
                           EMF, Kirchhoff's laws, DC circuits, Magnetic field: Bio-Savart's law, Ampere's law. Induction: Faraday and Lenz's law, AC circuits. Introductory 
                           Modern Concept of a function of a single variable, graphs of functions - linear, quadratic and higher degree polynomial
functions, rational functions, inequalities in one and two variables, binomial theorem, circular measure, trigonometric
functions, exponential and logarithmic functions, hyperbolic functions. Algebra of complex numbers. Vectors and matrices
, the solution of linear systems of equations, vector spaces and subspaces, orthogonality, determinants, eigenvalues and
eigenvectors, linear transformations.
Physics: Bohr's atom, quantum theory of atom, electronic transitions, optical spectrum, X-rays, photo-electric effect, motion of charges in electric and magnetic fields";
                       $referenceMat="D. C. Giancolli, Physics for Scientists and Engineers with Modern Physics, Prentice-Hall,  
D. Halliday and R Resnick, Physics (Part 1 and 2), John Wiley and Sons, New York, 1977";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 112	C Programming (2 credits)";
                       $courseInfo="History of the C language. Structure of the C Program. Variables Declarations: Global variables, type and range of 
                           variables, declaration of variables, scope of variables, reading and printing of variables. Constants Declarations.  The C Operators: 
                           Arithmetic, Relational, Logical, and order of operation precedence.  Conditional Instructions. Looping and Iterations.  
                           Arrays and Strings: Single and multi-dimensional. Functions: VOID function, Functions and Arrays, Function prototyping. 
                           Data Types: Unions, type casting, enumerated types, static variables. Pointers: pointers and variable, pointers and functions,
                           pointers and arrays, arrays of pointers, multi-dimensional arrays and pointers, static initialization of pointer arrays,
                           pointers and structures, common pointer pitfalls. Dynamic Memory Allocation and Dynamic Structures: MALLOC and SIZEOF 
                           and FREE, CALLOC and REALLOC, Linked Lists, random number generation, sample full C program ";
                       $referenceMat="H. M. Deitel and P. J. Deitel, C: How to Program,7th Ed., Prentice Hall,  2010 
H. H. Tan and T. B. D'Orazio, C Programming for Engineering and Computer Science, McGraw-Hill, 1999";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 101	Engineering Computational Tools (2 credits)";
                       $courseInfo="Computing systems: computer hardware components and organization, computer software -
                           operating system, types of computer languages, concept for executing a computer program.
                           Engineering problem solving methodology, software tools for solving engineering problems. 
                           Spreadsheet:  characteristics of spreadsheet, arithmetic operations, common engineering 
                           functions and operations, logical operations, plotting capabilities, simple engineering 
                           model application with spreadsheet. MATLAB: user interface, characteristics of Matlab
                           program. Working with Variables: creating variables, data import from external sources,
                           data entry, scalars, vector and matrix data, vector and matrix arithmetic, plotting and
                           visualization. MATLAB file: Matlab editor, creating M-files, editing and running files.
                           MATLAB functions: Basic mathematical functions, data analysis functions, random functions
                           , logical functions, relational and logical operators, if statements, loop. Data Input
                           and Output: data types and formats in Matlab, constructing and accessing data types, 
                           converting data types, import and export of files types. Matlab applications for solving
                           basic engineering problems.";
                       $referenceMat="D. M. Etter, Engineering Problem solving with MATLAB, 2nd Ed., Prentice-Hall, 1997  
B. S. Gottfried, Spreadsheet Tools for Engineers using Excel, McGraw-Hill, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 102	Introduction to Database Systems (3 credits)";
                       $courseInfo="History and overview of database and management systems including reasons for 
                           studying database, database access method, application, role of database in computer 
                           engineering. Database Environments: data model hierarchy, network, entity relation,
                           enhanced entity relation, relational database, object oriented database. Relational 
                           Data Model: entity relationship modelling. Normalization of Database Tables: data 
                           redundancy and associated problems, Normalisation Process,1NF, 2NF, 3NF, BCNF,4NF.
                           Query Language: Language paradigms and database languages, user interfaces and 
                           graphical query languages, query optimization, data dictionary. Distributed 
                           Database System: distributed DBMS concepts and design, distributed relational
                           database, distributed transaction management. Replication and Mobile Databases: 
                           basic components of database replication, replication environments, replication 
                           servers, mobile databases. Selected database issues: security, concurrency. 
                           Introduction to business intelligence, data warehousing, data mining";
                       $referenceMat="Mannino Michael V., Database Design, Application Development and Administration McGraw Hill, 2004
Thomas Connolly, Carolyn Begg, Database Systems: Practical Approach to Design, Implementation and Management, 5th Ed., Addison-Wesley, 2010";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="UGRC 110	Academic Writing I (3 credits)";
                       $courseInfo="Refer to University curriculum for course details";
                       $referenceMat="";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="UGRC 150	Critical Thinking and Practical Reasoning (3 credits)";
                       $courseInfo="Refer to University curriculum for course details";
                       $referenceMat="";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?> 
                        
                </div>
		<div class="tabcontent" id="tab_content_2">
			<strong>Detailed Course Description: LEVEL 200</strong> <BR/><BR/>
                        
                        <?php
                       $courseName="FAEN 201	Calculus II (4 credits)";
                       $courseInfo="Sequences and Series: Evaluating limits of sequences,
                           tests of convergence of finite series, power series; radius and 
                           interval of convergence, Maclaurin and Taylor series.   Improper
                           integrals: Convergence, Special functions: Gamma and Beta functions
                           etc, Lagrange polynomials, finite differences, and least square
                           approximation.  Functions of Several Variables: Limits and 
                           continuity, partial differentiation, critical points and their 
                           classifications, increments and differentials, implicit differentiation,
                           the chain rule, directional derivatives. Differential operators: 
                           The gradient, the divergence and the curl operators, line integrals,
                           multiple integrals, integration of vector functions, Green's theorem,
                           divergence and Stokes theorem";
                       $referenceMat="A. Jeffrey, Mathematics for Engineers, Chapman-Hall,    
A. Himonas and A. Howard, Calculus: Ideas and Applications, John-Wiley and Sons, 2003.     
E. W. Swokowski, Calculus, Weber-Schmidt,";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 202	Differential Equations (4 credits)";
                       $courseInfo="Differential Equations: First and Second order 
                           ordinary differential equations, series solutions, system 
                           of ordinary differential equations. Initial-value problems:
                           Laplace transform, partial differential equations, boundary-value 
                           problems, Fourier series and transforms, applications";
                       $referenceMat="E. J. Purcell and D. Varberg, Calculus, Prentice-Hall,    
G. Ledder, Differential Equations: A Modeling Approach, McGraw-Hill, 2005.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 201	C++ Programming (3 credits)  Prerequisite: FAEN 112 ";
                       $courseInfo="History of C++, ANSI C++, C++ programming environment and programming style. Extensions of
                           C to C++. Creating of Files and Streams in C++, connecting and disconnecting.
                           Arrays as parameter functions, sorting arrays, 2-dimensional arrays, dynamic 
                           arrays, automatic and dynamic variables, linked lists. Declaration of Pointers 
                           and Addresses and their usage. Functions and Procedural Abstractions: 
                           User-defined functions, value and reference parameters, functions using 
                           value parameters, reference parameters, procedural abstraction and good 
                           programming style, splitting programs into different files. Basic concepts
                           of recursion, mechanics of a recursive call, recursion and iteration, 
                           recursive data structures, recursive procedure for sorting. C++ extensions
                           to Object-Oriented Programming: Creating basic classes and objects, 
                           constructors and destructors, inheritance, construction, destruction,
                           and multiple inheritances. Polymorphism. Abstract Classes. Operator 
                           overloading. A case study: Generic types (templates), shape and traversal,
                           properties of singly linked lists, shape implementation, 
                           Iterator implementation and example usage";
                       $referenceMat="H. M. Deitel and P. J. Deitel, C++: How to Program, 7th Ed., Prentice Hall, 2008 
W. Savitch, Problem Solving with C++, 6th Ed., Addison-Wesley, 2007 
T. Gaddis, Starting Out with C++: Control Structures through Objects, 5th Ed., Addison-Wesley, 2007";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 202	Digital Systems Design (3 credits)  Prerequisite: CPEN 203";
                       $courseInfo="Introduction to VHDL: overview of VHDL and characteristics, user 
                           interface and features, assignment statements, signal assignment, conditional
                           signal assignment, statement generation, concurrent and sequential assignment
                           statement, process statement, case statement, VHDL operator. Digital Systems
                           Design: hierarchy and modular design of digital systems, design principles,
                           functional units and building blocks and components, control concepts, timing
                           concepts. Programmable devices: PLD, FPGA, PLA, ROM, PAL, CPLD. Modeling and
                           Simulation: block diagram development, hierarchical schematic modeling, digital
                           system modeling with VHDL, functional simulation of combinational and sequential
                           circuits, flip-flop selection, timing models of digital circuit elements, timing
                           simulation to measure delays, simulation and testing of circuit. Formal 
                           Verification: relationship between good design practice and formal verification,
                           verification by model checking, verification by proof, verification by equivalence
                           checking, verification by simulation, verification by testing, economics of 
                           verification, other verification - signal integrity, specification, reliability,
                           safety, power, cooling. Fault models and testing of logic circuits: types and
                           characteristics of common faults in digital circuits, single and multiple faults,
                           test coverage, fault equivalence and dominance, fault simulation and grading,
                           test generation algorithms, test generation algorithm for sequential circuits,
                           memory testing and PLA testing.";
                       $referenceMat="S. Brown and Z. Vranesic, Fundamentals of Digital Logic with 
                           VHDL Design, 2nd Ed., McGraw-Hill, 2005.  
J. F. Wakerly, Digital Design Principles and Practices, 4th Ed., Prentice-Hall, 2001";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 203	Digital Circuits (3 credits) Prerequisite: FAEN 108";
                       $courseInfo="History and overview of digital logic including reasons for studying digital 
                           circuits, important areas of application, role of digital circuits in computer 
                           engineering. Switching theory: number systems and codes, binary arithmetic and 
                           logical operations, Boolean and switching algebra, representation and
                           manipulations of functions, minimization of functions. Combinational 
                           Logic: truth tables, basic logic gates, realization of switching functions
                           with networks of logic gates, relations between electronic circuits and 
                           Boolean functions. Design of Combinational Circuits: multiplexers, arithmetic 
                           functions - half and full adders, subtractors, multipliers and dividers, 
                           arithmetic and logic units. Memory Elements:  basic circuits for latches,
                           clocked and unclocked memory devices, basic Flip-Flops (RS, D and JK), 
                           asynchronous flip-flop inputs (preset, clear), timing constraints 
                           (setup time, hold time), data registers (selection, clocking timing),
                           random access memory. Sequential Logic Circuit: finite state machines (FSM),
                           Mealy and Moore models of FSM, modeling FSM behavior (state diagram, table,
                           timing diagram, algorithm state, machine chart), synchronous and asynchronous 
                           circuits and analysis, design of synchronous sequential circuits 
                           (state minimization, assignment, next state, output realization),
                           sequential functional units 
                           (data registers, shift registers, counters, sequence detectors, synchronizers, debouncers)";
                       $referenceMat="Roger L. Tokheim, Digital Electronics: Principles and Applications, 6th  Ed., McGraw-Hill, 2003.  
S. Brown and Z. Vranesic, Fundamentals of Digital Logic with VHDL Design, 2nd Ed., McGraw-Hill, 2005.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 204	Data Structures and Algorithms (3 credits)";
                       $courseInfo="History and overview of data structures and algorithms, 
                           role of algorithms in computing. Pointers and Structures: Pointer
                           Data Types and Pointer Variables, Introduction to Structures, Accessing
                           Structure Members, Pointers and Structures as Structure Members.
                           Fundamental concepts: Recursion, Divide-and-Conquer , Backtracking.
                           Data Abstraction and Abstract Data Types (ADT). Fundamental Data Structures
                           : Arrays and Lists. Linked Lists: Introduction to the concepts of linked
                           lists. Doubly linked-list, circular doubly linked list with a sentinel. 
                           Applications of linked list. Queues: Introduction to the concepts of 
                           queues and double ended-queues. Applications and implementations of
                           queues. Stacks: Introduction to the concepts of stacks. Applications
                           and implementations of stacks. Analysis of Algorithms: Asymptotic 
                           Notation, Performance of searching and sorting algorithms. Searching 
                           Algorithms: Search algorithms, sequential search, and binary search.
                           Sorting Algorithms: Quick Sort, Merge sort, Selection sort, Insertion 
                           sort, Bubble sort. Graphs: Graph representation, Operations on graphs,
                           Graph Traversals, Shortest Path algorithms, Minimal Spanning Trees. Trees:
                           Concepts of trees, binary trees, binary search trees, binary tree traversal
                           algorithms. *Standard Template Library(STL): Components of STL, containers, 
                           iterators, algorithms.";
                       $referenceMat="Thomas H. Cormen, Introduction to Algorithms, 2nd Edition, McGraw- Hill/MIT Press.2001 
Malik D.S., C++ Programming: Program Design Including Data Structures, 4th Ed., Thomson Course Technology, USA, 2007";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 205	Discrete Mathematical Structures (3 credits)";
                       $courseInfo="History and overview of discrete mathematical structures including reasons for studying 
                           the course and application areas, and how computer engineering makes use of the 
                           discrete structures. Functions and relations: functions, discrete versus continuous
                           function, relations, continuous and discrete relations, sets - Venn diagram, power 
                           sets, complements.  Foundations of logic: propositional logic, logical connectives,
                           truth table, normal forms, validity, predicate logic and limitations, universal and
                           existential quantifications. Proof techniques: notion of implication, contradiction
                           , structure of formal proofs, direct proofs, proof by counter example, 
                           proof by contraposition and contradiction, mathematical induction. Recursion
                           and Recurrence Relations: concepts of recursion and recurrence, derivation of
                           recurrence equations, initial condition, first order linear recurrence, constant
                           coefficient recurrence, solution to a first order constant coefficient linear 
                           recurrence, iterating a recurrence. Counting: permutations and combinations,
                           counting arguments rule of products, rule of sums, generating functions, 
                           modeling combinational problems. Graphs and trees: trees, directed and undirected graphs, spanning trees, shortest paths, applications.";
                       $referenceMat="K. H. Rosen, Discrete Mathematics and Its Applications, 4th Ed., McGraw-Hill, 1999  
A. R. Kenneth, C. R. B. Wright, Discrete mathematics, 2nd Ed., Prentice- Hall, 1985  
J. L. Gersting, Mathematical Structures for Computer Science, 5th Ed., VHPS, 1999 ";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 206	Linear Circuits (3 credits)";
                       $courseInfo="History and overview of linear circuits, reasons for studying
                           linear circuits, areas of applications, relevance of linear circuits
                           to computer engineering. Circuit components - resistance, reactance,
                           inductance, capacitance, active and reactive elements, resistance 
                           and impedance. Circuit configurations: series, parallel and hybrid 
                           configuration of circuits and applications. Circuit laws: Ohm's law, 
                           Kirchhoff law, dependent and independent sources, voltage and current
                           divider circuits. Network analysis: nodal analysis and mesh analysis
                           methods. Network theorems: source transformation, superposition,
                           Thevenin, Norton, Maximum power transfer. Operational amplifier:
                           symbol and circuit representation, ideal operational amplifier,
                           inverting and non-inverting amplifiers, integrator and differentiator
                           circuits, design of simple amplifiers. First order circuits: inductance,
                           capacitance, derivation of time constants for RC and RL circuits,
                           response of first order circuits under source-free and step input
                           conditions, switching in first order circuits and applications.
                           Second order circuits: characteristic equation of series and parallel
                           RLC circuits, response of RLC circuit under source-free and step input
                           conditions. Circuit frequency response: frequency response of RC and
                           RLC circuits, transfer functions, resonance of RC and RLC circuits and 
                           applications. Sinusoidal analysis: phase representation of voltage and
                           current, impedance and admittance, forced response to sinusoidal function,";
                       $referenceMat="C. K. Alexander and M. N. O. Sadiku, Fundamentals of Electric Circuits, 2nd Ed., McGraw-Hill, 2004. 
C. Visweswaraiah, L. T. Pillage, and R. A. Rohrer, Electronic Circuit and Systems Simulation Methods, 2nd Ed., McGraw-Hill, 1998";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 207	Introduction to Software Engineering (3 credits)";
                       $courseInfo="History and overview of software engineering, reasons for studying 
                           the software engineering, and role of software engineering in computer engineering
                           . Introduction to the process of creating software systems. Software processes: 
                           software life cycle, process model, process assessment models, and software
                           process metrics. Requirements and specification: software requirements 
                           specification, requirements analysis modeling techniques, functional and
                           nonfunctional requirements, prototyping, concepts of formal specification
                           techniques. Software design: design concepts and principles, software 
                           , structured design; object oriented analysis and design, component
                           level design, design for reuse. Software testing: validation planning,
                           test plan creation and generation, black-box testing techniques, 
                           object oriented testing, inspections. Software evolution: 
                           different forms of software maintenance, impact analysis, 
                           characteristics of maintainable software, reengineering,
                           and software reuse strengths and weaknesses. Software tools
                           and environment: programming environments, requirements 
                           analysis and design modeling tools, testing tools, 
                           configuration management tools, software tools based on 
                           databases, tool integration mechanisms. Software project
                           management: organization and management of teams including
                           roles and responsibilities of team and tracking, project 
                           scheduling, software measurements, risk analysis, software
                           quality assurance, project management tools. ";
                       $referenceMat="R. Pressman, Software Engineering - A Practitioner's Approach, 6th Ed., McGraw Hill, 2005 
S. R. Schach, Object-Oriented and Classical Software Engineering, 6th Ed. McGraw Hill, 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);                       
                    
                       
                       $courseName="UGRC 130	Understanding Human Societies (3 credits)";
                       $courseInfo="Refer to University curriculum for course details";
                       $referenceMat="";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="UGRC 220	Liberal and African Studies (3 credits)";
                       $courseInfo="Refer to University curriculum for course details";
                       $referenceMat="";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
		</div>

		<div class="tabcontent" id="tab_content_3">



		<strong>Detailed Course Description: LEVEL 300</strong><BR/><BR/>
                
                 <?php
                       $courseName="FAEN 301	Numerical Methods (3 credits) ";
                       $courseInfo="Matrices and Vector operations, linear homogenous systems, Eigen-vectors and values. Numerical errors, absolute and relative errors, stability and convergence of numerical algorithms. Interpolation Methods: Lagrange polynomials, finite differences, least square approximation. Numerical solutions to Nonlinear Equations: Newton Raphson method, secant, false position, bisection, fixed point algorithm. Numerical Integration: Simpson's rule, trapezoidal rule, Newton-Cotes method. Numerical solutions to Ordinary Differential Equations: Taylor series method, Euler method, Runge-Kutta method. Numerical solutions to Partial Differential Equations: Second order quasi-linear equations, numerical solutions";
                       $referenceMat="M. J. Maron, Numerical Analysis, Macmillan Publishing Co., 1987 
S. Chapra and R. P. Canale, Numerical Methods for Engineers, 5th Ed., McGraw-Hill, 2006  
Schilling and Harris, Numerical Methods for Engineers: Using MATLAB and C, 1st Ed., 2000";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 302	Statistics for Engineers (3 credits)";
                       $courseInfo="Probability functions axioms and rules, counting techniques, conditional probability, independence and mutually exclusive events. Discrete Random Variable: Expectation and variance, Binomial distribution, Hypergeometric distribution, Poisson distribution, relationship between Poisson and Binomial. Continuous Random Variable: Percentiles and cumulative distribution function, expectation and variance, uniform distribution, normal distribution, exponential distribution and other distributions. Joint Distributions. 
Covariance and Correlation. Sampling Distributions: Distributions of statistics, central limit theorem, samples from normal distribution (t-distribution, X² distribution and F-distributions). Estimation: Common point estimators, interval estimators. Hypothesis Testing. Introduction to Regression Analysis. Engineering applications in quality control, process control, communication systems and speech recognition";
                       $referenceMat="W. A. Rosenkrantz, Introduction to Probability & Statistics for Scientists and Engineers, McGraw-Hill, 1997 
M. H. Degroot, Probability and statistics, Addison Wisely Publishing Co. Inc., 1986 
A. Leon-Garcia, Probability & Random Processes for Electrical Engineering, 2nd Ed., Prentice-Hall, 1994";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 301	Signals and Systems (3 credits)";
                       $courseInfo="History and overview of signals and systems including reasons for studying signals and systems, areas of application, and role of signals and systems in computer engineering. Signals: representation and properties, continuous and discrete time signals, signals in engineering applications. Systems: representation, common system types and classifications, system properties of linearity, causality, BIBO stability, time invariance, memory and invertibility. Difference equation: differential equations, transformation of time domain differential equations to difference equations. Convolution: impulse response, convolution integral, convolution summation, circuit analysis using convolution. Fourier analysis: signal representation by Fourier series, continuous time Fourier series, discrete time Fourier series, discrete Fourier transform, difference between the transformation methods, circuit analysis using Fourier. Fourier transform: continuous time Fourier transform definition, discrete time Fourier transform, transfer functions. Sampling: sampling theorem, Nyquist criteria, sampling of signals, aliasing, up and down sampling, concept of signal quantization and reconstruction of samples. Laplace transform: Laplace transform integral, properties of Laplace, impulse response, step and ramp functions, inverse transform, poles and zeros, circuit analysis using Laplace transform. Filter circuits: passive and active filter circuits, transfer function.";
                       $referenceMat="Roberts, Signals and System Analysis using Transform Methods and MATLAB, McGraw-Hill,
Alan V. Oppenheim, Alan S. Willsky, With S. Hamid, Signals and Systems, 2nd Ed., Prentice-Hall, 1997";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 302	Computer Systems Engineering (3 credits)";
                       $courseInfo="History and overview of computer systems engineering including reasons for studying computer systems, and role of computer systems in computer engineering. Computer system engineering process: life cycle, requirements analysis, specification, architectural design, testing, maintenance, and implementation in computer systems engineering. Packaging in computer systems. Wires in computer systems: electrical properties of transmission lines, models of lines, lossy and lossless lines, and buses. Noise in computer systems: noise characteristics and sources in digital systems, estimation of noise budget. Signaling in computer systems: signaling and associated problems, pseudo-differential signaling, signaling over lumped media, low-voltage signaling, signaling over on-chip and off-chip systems. Timing: timing components in computer systems, timing uncertainties of skew and jitter, sources of timing uncertainties and evaluation, timing uncertainties and data rates, synchronous and pipelining timing systems, synchronization in computer systems. Clock distribution in computer systems: clock distribution and problems associated with distribution in on-chip and off-chip. Power distribution: static and dynamic power consumption, estimation of power consumption in systems, power distribution network, power distribution in on-chip and off-chip systems.";
                       $referenceMat="W. J. Dally and J. Poulton, Digital Systems Engineering, Cambridge University Press, 1998";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 303	Computer Architecture (3 credits)";
                       $courseInfo="History and general overview of computer architecture and organization, including reasons for studying computer architecture, the contrast between computer organization and computer architecture, and the role of computer architecture in computer engineering. Basics of computer architecture: Von Neumann machine structure, instruction formats, fetch and execute cycle, registers, instruction types and addressing, Interrupts and I/O. Programming in assembly language. Computer arithmetic: integer and real number representations, algorithm for basic mathematical operations, algorithm for floating-point operations, hardware and software implementation of arithmetic unit. Memory system and architecture: memory types and hierarchy, main memory organization and its performance, cache memory, virtual memory, reliability of memory systems. Interfacing and communication: I/O systems and handshaking, I/O techniques of programmed I/O, interrupt-driven I/O and DMA, interrupt structures, memory system design and interfacing, system buses and protocols. Processor system design: CPU interface - clock, control bus, data bus, and address bus; address decoding, memory interfacing, serial and parallel interfaces, timers. CPU organization: single and multiple bus datapaths, instruction set architecture, implementing instructions, instruction pipelining, pipeline hazards and reducing effects of hazards, trends in computer architecture - CISC, RISC, VLIW. Performance: metrics for computer performance - clock rate, MIPS, etc, strengths and weaknesses of performance metrics, averaging metrics - arithmetic, geometric, harmonic, role of Amdahl's law in computer performance.";
                       $referenceMat="D. A. Patterson and J. L. Hennessy, Computer Organization and Design: The Hardware-Software Interface, 3rd Ed., Morgan Kaufmann, 2005  
William Stallings, Computer Organization and Architecture, Design and Performance 8th Ed.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 304	Digital Signal Processing  (3 credits) Prerequisites: CPEN 301";
                       $courseInfo="History and overview of digital signal processing, reasons for studying digital signal processing, difference between analog and digital signals, application areas of digital signal processing, and benefits of digital signal processing to computer engineering. Foundations: continuous time and discrete signals and spectral analysis, continuous and discrete time systems, sampling and aliasing, decimation and interpolation, Z-Transforms: review of difference equations, z-transform definition, region of convergence, z-transform relation to Fourier transform, zero-pole diagram and  stability of systems, inverse z-transform, z-transform application to solving difference equations. Digital filters: transfer function and frequency response of discrete time systems, recursive filter design, non-recursive filter design, and windowing. FIR filter - frequency and phase response; poles and zeros in z-plane. IIR filter - frequency and phase response; design of IIR filters. Filtering random signals. Audio processing: speech coding, audio coding and MPEG algorithms, speech and audio enhancement, noise cancellation, speech recognition. Image processing: analog to digital transformation, sampling and smoothing of images and low-pass filters, reconstruction and enhancement filtering, noise and images, spatial frequency.";
                       $referenceMat="Sanjit K. Mitra, Digital Signal Processing: A Computer Based Approach, McGraw Hill, 2004 
R. G. Lyons, Understanding Digital Signal Processing, Prentice Hall, 2004 
S. W. Smith, Digital Signal Processing: A Practical Guide for Engineers and Scientists, Newness, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 305	Computer Networks (3 credits)";
                       $courseInfo="History and overview of computer networks including reasons for studying the course, description of the key components of network, networking software and hardware, terminologies, and role of networks in computer engineering. Communication network architecture: networks architecture - point-to-point and multi-point configurations, networking topologies - mesh, star, bus, ring; networking and internetworking devices - routers, repeaters, switches, gateways; connection oriented and connectionless services. Network protocols: network protocols - syntax, semantics and timing; TCP/IP protocol, OSI layering protocol software, network standard and standardization bodies. LAN and WAN architecture systems: LAN topologies - star, ring and bus; LAN technologies - Ethernet, token Ring, Gigabit Ethernet; error detection and correction, CSMA networks, circuit and packet switching, protocols - IP addressing, IP assignment and configuration, DNS, HTTP, UDP and STMP, IPv4 and IPv6, connection establishment, congestion control, flow control, virtual circuits, quality of service. Client-server computing: client-server interaction, web technologies, characteristics of web servers, support tools for website creation and web management. Data security: basics of secure networks, encryption and privacy, authentication protocols, packet filtering, firewalls, virtual private networks, transport layer security";
                       $referenceMat="B. A. Forouzan, TCP/IP Protocol Suite, 2nd Ed., McGraw-Hill, 2003.   
L. Peterson and B. Davie, Computer Networks: A Systems Approach, 3rd Ed., Morgan Kaufmann, 2003 
Leon-Garcia, Communication Networks Fundamental Concepts & Key Architectures, McGraw-Hill, 2003 
James F. Kurose and Keith W. Ross, Computer Networking: A Top-Down Approach, 4th Ed., Addison-Wesley, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 306	Microelectronic Devices and Circuits (3 credits)  Prerequisite: FAEN 108";
                       $courseInfo="History and overview of microelectronic devices and circuits, reasons for studying microelectronics and its role in computer engineering. Semiconductor physics: overview of basic properties of semiconductors and the p-n junction. MOSFET: physics of NMOS and PMOS transistors, simple fabrication concepts, modelling of MOSFET circuits, load-line analysis, bias circuits, small-signal equivalent circuits, common-source amplifiers, source follower amplifier stages, amplifier characteristics using two-port equivalent circuits, current and voltage gains, input and output impedances, frequency response and transfer function. NMOS and PMOS binary functionality in NAND and NOR logic. Logic circuits: CMOS inverters, NOR and NAND gates, the CMOS pass gates, buffers. Logic circuits: flip-flops, registers, counters, adders, multiplexers.";
                       $referenceMat="R. C. Jaeger and T. N. Blalock, Microelectronic Circuit Design, 2nd Ed., McGraw-Hill, 2004.
Howe, Roger, and Charles Sodini, Microelectronics: An Integrated Approach, Prentice Hall, 1996";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 307	Operating Systems (3 credits) Prerequisite: FAEN 112";
                       $courseInfo="History and overview of operating systems including reasons for studying operating systems, description of purpose of operating system, services and characteristics of good operating system, relevance of operating system to computer engineering. Design principles: functions of a typical operating system, mechanisms to support client-server models, design issues, structuring methods, processes and resources, concept of APIs to operating systems, device organization, interrupts and implementations, concepts of user and system states and protection. Concurrency: states and state diagrams, dispatching and context switching, role of interrupt, concurrency execution, mutual exclusion problem and solution, deadlock and its causes and prevention, semaphores and monitors, producer-consumer problems and synchronization. Process scheduling and dispatch: preemptive and non-preemptive scheduling, schedulers and policies, processes and threads, deadlines and real-time issues. Memory management: memory types and hierarchy, memory management hardware, swapping and partitions, paging and segmentation, placement and replacement policies, working sets and thrashing, caching. File systems: files - data, metadata, operations, organization, sequential and non-sequential; directories - content and structure; file system - partitioning, mount and unmount, virtual file; special purpose file, naming, searching access and backups. Device management: characteristics of parallel and serial devices, buffering strategies, direct memory access, recovery from failure. Security: overview of security systems, security methods and devices, protection, access and authentication, models of protection, memory protection, encryption and recovery management.";
                       $referenceMat="I. M. Flynn and A. M. Mchoes, Understanding Operating Systems, PWS Publishing, Boston, 1993     
Silberschatz and Galvin, Operating System Concepts, 5th Ed., Addison-Wesley, 1998     
A. Tanenbaum, Modern Operating Systems, 2nd Ed., Prentice-Hall, 1992";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);                       
                    
                       
                       $courseName="CPEN 308	Fundamentals of Information Transmission (2 credits)";
                       $courseInfo="History and overview of information transmission, reasons for studying data transmission, modern trends in telecommunication technology for data transmission, role of information transmission in computer engineering. Fundamental principles: telecommunication signals and their representation, building blocks of a telecommunication systems, description of communication systems types - optical fiber system, microwave system, satellite system, mobile communication system, basic concepts of signal transmission in transmission media, time and frequency signal bandwidth, signal-to-noise ratio, channel and channel capacity, sampling theorem. Linear communication techniques: amplitude modulation process, frequency modulation process, phase modulation process, multiplexing strategies. Digital communication principles: analog to digital conversion of voice, process of signal sampling, quantization, pulse code modulation, time division multiplexing, amplitude shift keying, frequency shift keying, phase shift keying, spread spectrum techniques, digital demodulation.";
                       $referenceMat="L. W. Couch II, Digital and Analog Communication Systems, 6th Ed., Prentice Hall, NJ, 2001 
B. P. Lathi, Modern Digital and Analog Telecommunication Systems, 3rd Ed., Oxford Press, 1998  
Ziemer and Tranter, Principles of Communications, 5th Ed., John-Wiley & Sons, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 309	Programming Language Fundamentals (3 credits)";
                       $courseInfo="History and overview of programming language from FORTRAN to modern languages such as Java, including reasons for the study of programming fundamentals, challenges and techniques involved in designing programming languages, and role of programming fundamentals in computer engineering. Programming paradigms: procedural and functional programming, object oriented design, encapsulation and information hiding, separation of behavior and implementation, classes and subclasses and inheritance, event driven programming. Syntax and Semantics of programming: basic syntax and semantics of high level language, variables and types, expressions and assignments, simple input-output, conditional and iterative control structures, functions and parameter passing.  Algorithms and problem solving: problem solving strategies, role of algorithms in problem solving, algorithms implementation strategies, debugging strategies, algorithm properties and concepts, structured decomposition. Data structures: primitive types, arrays, records, strings and string processing, data representation in memory, stack and heap allocation, runtime storage management, pointers and references, linked structures, implementation for stacks and queues and hash tables, implementation for graphs and trees, strategies for choosing right data structure. Recursions: concept of recursion, recursive mathematical functions, divide-and-conquer strategies, recursive backtracking, implementation of recursion.  Using APIs: API programming, class browsers and related tools, programming by example, debugging in API environment, component based computing, middle ware.";
                       $referenceMat="Robert W. Sebesta, Concepts of programming languages, 8th Ed., Addison Wesley, 2008 
K. C. Louden, Programming languages: Principles and practice, PWS-Kent series in Comp. Sci., 1993";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       
                       $courseName="CPEN 312	Object Oriented Programming with Java (3 credits)  Prerequisite: CPEN 201";
                       $courseInfo="Programming techniques in unstructured, procedural and modular programming, modular programming problems and strategies. Object-Oriented program development environment tools. Object-Oriented structure and development: classes, inheritance, encapsulation, polymorphism, class derivation, abstract classes, interfaces, static class members, object construction and destruction, namespaces, exception handling, function overloading and overriding, function name overload resolution, container classes, template classes, multiple treads and synchronization. Generic Classes and methods, Applets and Java Web start, Multimedia: Applets and Applications, GUI components, Multithreading. Applications in artificial intelligence, accessing database with JDBC, and software design and Web Services.";
                       $referenceMat="Harvey M. Deitel and Paul J. Deitel, Java: How to Program, 8th Ed., Prentice Hall, 2010 
R. Morelli, Object-Oriented Problem Solving: Java, 2nd Ed., Prentice-Hall, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 314	Industrial Practice (1 credit)";
                       $courseInfo="Participation in eight-week duration industrial attachment to work on projects that intend to solve real problems defined by the industry. Students will produce report on activities engaged at the industry.";
                       $referenceMat="";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);                       
                     
                       ?>
	</div>
            <div class="tabcontent" id="tab_content_4">
			<strong>Detailed Course Description: LEVEL 400</strong> <BR/><BR/>
                        
                         <?php
                       echo "<h4 style='color:red;'>CORES</h4><br/>";  
                         
                       $courseName="FAEN 401	Law for Engineers (3 credits)";
                       $courseInfo="Course discussions cover contracts (formation, performance, breach, and termination), corporations and partnerships, insurance, professional liability, risk management, environmental law, torts, property law, evidence and dispute resolution.  The course emphasizes those principles necessary to provide engineers with the ability to recognize issues which are likely to arise in the engineering profession and introduces them to the complexities and vagaries of the legal profession.";
                       $referenceMat="";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="FAEN 402	Principles of Management and Entrepreneurship (3 credits)";
                       $courseInfo="Introduction: Definition of management. Evolution and Perspectives of Management: classical, human relations and management science.  Hierarchy of Management, Managerial roles and Management Styles.  Inside and Outside an Organization:  adapting to change and understanding the environment. Management Functions: Planning and Decision Making, Organizing, Leading and Communicating. Entrepreneurial Process and types of Businesses.  Creating New Products/Services and Business plans.  Evaluation: Analysis of new ventures, valuation techniques, Intellectual Property Issues. Financing New Ventures. Elements of Marketing Management. Managing Growth and Exit Strategy.";
                       $referenceMat="Naylor J., Management, 2nd Ed., Prentice Hall, UK, 
J. A. F Stoner, R. Edward Freeman, D. R. Gilbert, Management, 6th Ed., Prentice Hall of India.
R. Kreitner, Principles of Management, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 400	Independent Project (6 credits) Prerequisite: Level 400 standing";
                       $courseInfo="Students work independently on an original, modified or extension of an engineering project under the direction of an approved advisor. Student will apply the knowledge gained from earlier course works to design and test a system, component, or process to meet desired needs using standard engineering design process. At the end of the project student will make oral presentation of the work and submit thesis.";
                       $referenceMat="Barry Hyman, Fundamentals of Engineering Design, 2nd Ed., Prentice Hall, 2003";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 401	Control Systems Analysis and Design (3 credits) Prerequisites: CPEN 301";
                       $courseInfo="History and overview including current trends in industrial control systems, reasons for studying control system and its relevance in computer engineering. Control systems: control principle, feed-back and feed-forward, control strategy. Basic operations of a minicomputer data I/O, process control, digital filter design, and optimal control. State space design methods, root locus design methods, simple pole factor, response design methods, translational mechanical system, backward rectangular rule, rotational mechanical system, independent energy storing elements, dynamic system response, root locus form, root locus gain, signal flow chart, forward rectangular rule, desired motor speed, motor position control, integrator factor, interconnection laws, diagonal canonical form, controllable canonical form, transfer functions, decentralized estimation, motor speed control system, advanced control systems, observable canonical form, observability and controllability of control systems. State Space Design Methods, Characteristics of Feedback Control Systems, Frequency Response Design Methods, Bode Diagrams, Nonlinear State Evolution, Laplace Transforms, Nyquist Diagrams, Nyquist Path, Motor Speed Closed-Loop Control, Block Diagram Solution. Analog and digital controller design such as PID, PI, and P controllers Unit step responses of PID.";
                       $referenceMat="Katsuhiko Ogata, Modern Digital Control Engineering, 4th  Ed., Prentice Hall, 2002 
J. A. Cadzow and  H. R. Martens, Discrete-Time and Computer Control Systems, Prentice Hall, 1970
Richard C. Dorf and Robert H. Bishop, Modern Control Systems, 11th Ed., Prentice-Hall, 2008";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 402	Advanced Computer Architecture (3 credits) Prerequisites: CPEN 303";
                       $courseInfo="Performance and cost: CPU performance benchmark, CPI analysis, analysis and cost of computer system. Instruction Set Architecture (ISA) Design: stack accumulator, general register ISA, CISC and RISC ISA design, DSP ISA. Basic pipelining. Advanced pipelining: Instruction-Level Parallelism (ILP), compiling for ILP, dynamic branch prediction, superscalar pipelines, dynamic scheduling. VLIW Architecture: Memory hierarchies, basic caches, memory hierarchy performance, improving time, miss time and penalty, memory interleaving, bandwidth improvement, and virtual memory support. I/O Subsystems. Parallel Architectures. Message Passing Architectures. Shared memory Architectures. Cache Coherence. Synchronization. Convergence Architectures. Introduction to Parallel programming";
                       $referenceMat="R. E. Bryant and D. R. O`Hallaron, Computer Systems: A Programmer's Perspective, Prentice Hall, 2003 
K. Hwang, Advanced Computer Architecture: Parallelism, Programmability and Scalability, McGraw Hill, 1993";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 403	Embedded Systems (3 credits) Prerequisites: CPEN 303";
                       $courseInfo="History and overview of embedded system, reasons for studying embedded systems, applications, role of embedded systems in computer engineering. Embedded microcontroller: structure of a computer system, Von Newman and Harvard models, CPU families used in microcontrollers, memory and testing algorithms for microcontrollers. Peripherals: basic I/O devices, timers/counters, ADC and DAC, GPIO, interrupt driven I/O and polled I/O, interrupt structure. Interfacing: CPU interfacing, memory interfacing, serial and parallel I/O interfacing, analog and digital interfacing. Embedded software: software architecture, super loop, delays in embedded software, sample applications. Real-time operating system: context switching mechanism, scheduling policies, priority inversion, other scheduling policies, interprocess communication styles. Power management: need for low power computing in embedded systems, sources of power consumption, strategies for level power management. Development tool support: compilers and programming environment, logic analyzers, RTOS tools, power analysis, software management tools. Safety and reliability: sources of faults in embedded computing, strategies to find problems and to minimize effects of faults. Embedded design concepts including demands for soft and hard real time features, hardware and software co-design, and evaluation performance.";
                       $referenceMat="M. Barr, A. Massa, Programming Embedded Systems with C and C++, 2nd Ed., O'Rielly Networks, 2007 
Noergard, Embedded Systems Architecture: A comprehensive guide for Engineering and programmers, Elsevier, 2004";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 404	Computer Vision and Robotics (3 credits) Prerequisites: CPEN 405 ";
                       $courseInfo="Fundamentals of pattern-recognition and image-analysis techniques, low-level representation, intrinsic images, segmentation, texture and motion analysis, and representation of 2-D and 3-D shape. Vision system and components: camera, illumination, optical systems, computer interface, frame stores, structured lighting, software support. Vision algorithm. Fundamentals of Robotic systems: Mechanics of robots including kinematics, dynamics, and trajectories. Robot types, components and subsystems. Robot Position and Motion: Coordinates and transformations, coordinate frames, kinematics of position and inverse kinematics, kinematics of motion, an introduction to Robot statics and dynamics, mobile robots, task planning and programming, accuracy and repeatability. Sensors, actuators and control. Robot application: automated assembly, robotic work cell design, safety Biological analogies and medical applications of Robotics";
                       $referenceMat="John X. Liu, Computer Vision and Robotics, Nova Science Publishers, 2006 
D. Vermon, Computer Vision: Craft, Engineering and Science, Springer-Verlag, 1994
A.J. Koivo, Fundamentals for Control of Robotic Manipulators, John Wiley & Sons, Inc., 1989";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 405	Artificial Intelligence (3 credits)  Prerequisites: CPEN 206";
                       $courseInfo="History of artificial intelligence, philosophical questions about nature of intelligence, ethical issues in artificial intelligence, nature of knowledge and knowledge based systems, issues of ordering of information, modeling the world. Artificial intelligence design considerations, challenges and issues in artificial intelligence system design. Introduction to LISP programming. Blind and heuristic search concepts and techniques. Game playing and constraint propagation. Machine learning for classification and pattern recognition. Knowledge representation.  Logical Reasoning systems. Uncertainty and Planning. Natural Language Processing. Vision: vision level and segmentation, constraint propagation and matching.";
                       $referenceMat="Stuart Russel and Peter Norvig, Artificial Intelligence: A Modern Approach, 3rd Ed., Prentice-Hall, 2003 
Eric Bonabean, Marco Dorigo, Guy Theraulaz, Swarn Intelligence: From Natural to Artificial Systems, Oxford University Press, 1999";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 406	Wireless Communication Systems (3 credits)  Prerequisites: CPEN 308";
                       $courseInfo="History and overview of wireless communication, reasons for studying wireless transmissions, areas of applications, relevance of wireless systems in computer engineering. Wireless transmission issues and challenges. System Design: Basic cellular systems and selection of parameters for system design. Multi-path channels and modulation techniques. Wireless networking, base stations, mobile stations, airlink access, jamming, spoofing, signal intercept, wireless LANs, wireless modems, cellular radiotelephones, optical links, signal modeling, propagation modeling. Wireless security: introduction to physical layer and issues associated with security of the airlink interface. Wireless and mobile computing: wireless standards and compatibility, special problem of wireless and mobile computing, wireless LAN and satellite based networks, mobile internet protocol, mobile aware adaptation, mobile data access, software packages supporting mobile, wireless computing, performance issues, and emerging technologies.";
                       $referenceMat="Theodore S. Rappaport, Wireless Communications: Principles and Practices, 2nd Ed., Addison Wesley, 2002 
Ziemer and Tranter, Principles of Communications, 5th Ed., John-Wiley & Sons, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);                       
               
                       
                       echo "<h4 style='color:red;'>ELECTIVES</h4><br/>";
                       
                       $courseName="CPEN 407	Software Engineering (3 credits) Prerequisites: CPEN 207";
                       $courseInfo="Introduction: Software Engineering. Professional and ethical responsibility. Socio-Technical Systems: Emergent system properties, Systems engineering, Organizations, people and computer systems, Legacy systems. Case Study on Socio-Technical Systems Critical Systems: A simple safety-critical system, System dependability, Availability and reliability, Safety, Security. Case Study on Critical Systems. Software Processes: Process Models. Process Iteration. Rational Unified Process. CASE Technology. Case Study on Software Process Models. Requirements Engineering: Feasibility studies. Requirements: elicitation and analysis. Requirements validation. Requirements management. System Models: Behavioural Models. Data Models. Object Models. Structured Models. UML Notations. Application Architectures: Data processing systems. Transaction processing Systems. Event processing systems. Language processing systems. Object-Oriented Analysis and Design: Objects and Objects Classes. Object oriented design process. Design Evolution. UML. Rapid Software Development: Agile methods. Extreme programming, Rapid application development. Software prototyping. Software Reuse: The reuse landscape. Design patterns. Generator based reuse. Application frameworks. Application system reuse. Introduction to Project Management: Management activities. Project planning Project scheduling. Risk management. Software costing. Mini Project: Typical software engineering project.";
                       $referenceMat="Ian Sommerville, Software Engineering, 7th Edition, Pearson Education Limited, Essex.2004
S. R. Schach, Object-Oriented and Classical Software Engineering, 6th Ed. McGraw Hill, 2005";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                       $courseName="CPEN 408	Human-Computer Interface (3 credits)";
                       $courseInfo="History and overview of human computer interaction including reasons for studying human-computer interaction in engineering, and the relevance of human-computer interaction to computer engineering. Foundations of human-computer interaction including strengths and weaknesses of ranges of human interfaces such as text based systems, graphics, sound, animations, human performance models such as perception, movement, cognition, etc., principles of good human computer interaction design in the context of computer engineering. Graphic user interface: developments interface including textual displays, displays that exhibit alarms and interactions; principles of design using GUIs, GUI toolkits, design principles for web interfaces. Intelligent systems: nature of intelligent systems and implication for sensors and software, special case of mobile systems and location aware systems, problems associated with control passing to agent and user losing control. Human centered software development:  structure of large systems that embodies human-computer interaction codes, processes associated with human centered software, functionality and usability, specification of presentation and interaction, prototyping techniques and tools, quality considerations, standards and guidelines. Interactive GUI design: choice of interaction styles, human-computer interaction aspects of common widgets and of screen design, handling human failure, interfaces for computer engineering tools, multi-modal interaction, 3D interaction and virtual reality. GUI programming: user interface management systems, kernel based and client server models for user interface, dialogue independence and level analysis, widget classes and aggregation of widgets, event management and user interaction, geometry management, GUI builders and user interface programming environment, cross platform design. ";
                       $referenceMat="Alan Dix, Gregory D. Abowd, Russel Beale, Human-Computer Interaction, 3rd Ed., Prentice-Hall, 2004      
Brenda Laurel, S. Joy Mountford, The Art of Human-Computer Design, Snippet, 1990";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 409	Computer Graphics (3 credits)";
                       $courseInfo="Fundamentals of display techniques and graphics systems. Display devices, processors, software, introduction to Graphical Kernel System, Programmer's Hierarchical Interactive Graphics System. Representation of primitive objects. Representation of composite objects. Two-and three-dimensional transformations. Polygon mesh, spline surfaces, super-quadradrics, fractal geometry, octrees, visualization of three-dimensional data sets, geometric transformations. Parallel and perspective projections, three-dimensional view volumes. Depth-buffer, scan-line, depth sorting, area subdivision, octree, and ray-casting methods. Hidden lines and surfaces. Shading and coloring. Interactive graphics and the user interface. Structure of graphics packages 2-dimensional viewing, structures and segments, hierarchical model, graphical user interfaces, interactive input methods. Animation techniques. Color models.";
                       $referenceMat="H. Donald and M. P. Baker, Computer Graphics: C Version, 2nd Ed., Prentice-Hall, 1997  
J. D. Foly, A. Van Dam, S. K. Feiner, and J. F. Hughes, Computer Graphics: Principles and Practice in C, 2nd Ed., Addison Wesley, 1995 ";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 411	VLSI Systems Design (3 credits)";
                       $courseInfo="Historical perspective and future trends of large-scale integrated circuits. Behavioral models and circuit simulation of digital systems. Design methodology. CMOS devices and deep sub-micron manufacturing technology.  CMOS inverters and complex gates. Modeling of interconnect wires. Optimization of designs with respect to a number of metrics: cost, reliability, performance, and power dissipation. Designing combinational logic gates in CMOS. Designing sequential circuits. Interconnect and timing considerations, and clocking approaches. Design of large system blocks, including arithmetic, interconnect, memories, and programmable logic arrays. VLSI combinatorial and sequential testing and verification, scan design. Introduction to system design methodologies including hands-on experience";
                       $referenceMat="Jan M. Rabaey, Digital Integrated Circuits: A Design Perspective, 2nd Ed., Prentice Hall, 2003 
N. H. E. Weste and K. Eshraghian, Principles of CMOS VLSI Design: A Systems Perspective, 2nd Ed., Prentice-Hall, 1993.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 412	Web Software Architecture (3 credits)";
                       $courseInfo="History and overview of web software architecture models and programming environments pertinent to developing web applications.  Web software architecture models. Internet/Web protocols. Web programming environments. Client-server models. Multi-tier software architecture. Front-end design. Client-side scripting. Web server development. Application server development. Server-side programming. Middle ware development. Database servers. Database connectivity. Introduction to XML. Service oriented architecture (SOA). Web services. Web based business Intelligence. Mobile Information systems. Mobile-web applications. Component reuse. Concurrency. Web security. Mini Project.";
                       $referenceMat="Ian Sommerville, Software Engineering, 7th Ed., Pearson Education Limited, Essex.2004. 
Connolly Thomas M., Begg Carolyn E., Database Systems, 5th Ed., Pearson Education Limited, 2010.
Michael P. Papazoglou, Web Services, Principles and Technology, Prentice Hall, 2008.";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 413	Microprocessor Systems and Integration (3 credits)";
                       $courseInfo="Historic and overview of microprocessors, reasons for studying microprocessors, application areas, and benefits to computer engineering. Logic design techniques, electrical and timing characteristics of logic components, use of programming logic devices, state machine design. Simple computer architecture: machine instructions and programming; design of a simple computer - ALU, memory system, various internal registers, instruction decoder, basic accumulator-mapped input/output (I/O) design, stack characteristics, context save and subroutine linkage mechanisms, micro-coded control store, additional addressing modes. Programming model of practical microcontroller: inherent/register, immediate, absolute, relative, and indexed/indirect addressing modes; data transfer, arithmetic, logical, branch, and machine control instruction groups. Assembly language programming of microcontrollers: translation of high level language control structures into assembly code, assembly style loop structures, linear and non-linear table lookup techniques, loop control examples, subroutine parameter passing techniques, macros, conditional assembly, structured (top-down, bottom-up) programming techniques. Microprocessor system design. Microcontroller bus signals and timing, address space mapping, memory system timing analysis, external multiplexed bus memory, I/O expansion, interrupts, polled interfaces, I/O ports. Microcontroller peripheral overview: asynchronous serial communications interface, synchronous peripheral interface, analog-to-digital converter, timer subsystem, design applications and device drivers. Microcontroller system design case study using Texas Instruments TMS320-series or Motorola 68HC12.";
                       $referenceMat="J. F. Wakerly, Digital Design Principles and Practices, 3rd Ed., Prentice-Hall, 2000 
D. G. Meyer, Microcontroller based Digital System Design, 2001 
CPU12 Reference Manual (CPU12RM/AD), Motorola, 2000";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 414	DSP System Implementation (3 credits) Prerequisites: CPEN 304";
                       $courseInfo="Common DSP systems and functional elements. Discrete Fourier transforms, Fast Fourier Transform (FFT) and architecture for the FFT. Digital Filter Structures: Structures for FIR and IIR filters, cascade and parallel realization for higher order filters, introduction to the effect of finite word length. Architecture for signal processing: Computer architectures, implementation of bit-parallel, bit-serial, and digit-serial multiplier and adder structures, Harvard architecture and pipelining, general purpose DSP devices (T1 TMS320 family and Motorola DSP family ADSP2100 family), real-time FIR filtering using the general purpose DSP, FFT processing on a general purpose DSP";
                       $referenceMat="Sanjit K. Mitra, Digital Signal Processing: A Computer Based Approach, McGraw Hill, 2004 
Van Valkenburg, Analog Filter Design, 2nd Ed., Oxford, 1995 
T. W. Parks and C. S. Burns, Digital Filter Design,";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 415	Distributed Computing (3 credits)";
                       $courseInfo="History and overview of distributed computing, reasons for studying distributed computing, modern trends in distributing computing and application areas, role of distributed computing in computer engineering.  Design, engineering, and evaluation of modern distributed computers. Design: naming, synchronization, latency, and bandwidth. Architectural support: messages versus remote procedure calls versus shared memory models. Structural alternatives: master-slave, client-server, fully distributed, cooperating objects. Coupling: tight versus loose. Distributed filing systems and directory services. Verification, validation and maintenance issues in distributed computing. Fault tolerance and reliability. Replication and avoidabilty. Standards and protocols. Temporal concerns. Data coherence. Load balancing and scheduling. Scalability. Applications. Parallel programming models, communication primitives, programming and compilation techniques, multiprogramming workloads and methodology for quantitative evaluation.";
                       $referenceMat="Hagit Attiya and Jennifer Welch, Distributed Computing: Fundamentals, Simulations and Advanced Topics, John Wiley & Sons, 2004 
Vijay K. Garg, Elements of Distributed Computing, John Wiley & Sons, 2002";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 416	Integrated Circuits for Communications (3 credits)";
                       $courseInfo="Analysis and design of electronic circuits for communication systems, with an emphasis on integrated circuits for wireless communication systems. Analysis of distortion in amplifiers with application to radio receiver design. Power amplifier design with application to wireless radio transmitters. Class A, Class B, and Class C power amplifiers. Radio-frequency mixers, oscillators, phase-locked loops, modulators, and demodulators.";
                       $referenceMat="R. C. Jaeger and T. N. Blalock, Microelectronic Circuit Design, 2nd Ed., McGraw-Hill, 2004.
Howe, Roger, and Charles Sodini, Microelectronics: An Integrated Approach, Prentice Hall, 1996";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 417	Applications of Parallel Computers (3 credits)";
                       $courseInfo="Models for parallel programming. Fundamental theoretical issues in designing parallel algorithms and architectures for linear algebra, sorting, Fourier Transform, etc. Survey of parallel machines and machine structures. Exiting parallel programming languages, vectorizing compilers, environments, libraries and toolboxes. Data partitioning techniques. Techniques for synchronization and load balancing. Detailed study and algorithm and program development of medium sized applications.";
                       $referenceMat="Vipin Kumar, InAtroduction to Parallel Computing: Design and Analysis of Algorithm, Snippet, 1994 
R. W. Hockney, C. R. Jesshope, Parallel Computers 2: Architecture, Programming, and Algorithms, IOP Publishing, 1988";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPEN 418	Security in Computer Systems (3 credits)";
                       $courseInfo="History and overview of computer systems security, reasons for studying security in computer systems, modern trends in computer systems security, role of computer system security in computer engineering. Security risk identification: Descriptive account of the value and cost of acquiring information, privacy and integrity, risk assessment and management, information flow and covert channels, malicious software, analysis of the threat to information security. Protection of computer systems: Coding and cryptography, authentication methods, capabilities, access list and protection domain, standards, principles of security audit and control methods, physical and electronic counter measures to minimize threats, legal factors, database and inference control, security kernels, verification methods. Modeling: Algorithm design, modeling and optimization of secure communication networks, introduction to principles of network management";
                       $referenceMat="W. Stallings, Cryptography and Network Security: Principles and Practice, 5th Ed., Prentice Hall, 2010.
Matt Bishop, Computer Security: Art and Science, Prentice Hall, 2003 
Ross Anderson, Security Engineering: A Guide to Building Dependable Distributed Systems, John Wiley, 2001";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       
                        $courseName="CPNG 422	Multimedia Systems (3 credits)";
                       $courseInfo="Fundamentals concepts in multimedia systems. Resource management issues in distributed/networked multimedia systems. QoS routing and multicasting. Traffic shaping, Task and message scheduling, Internet QoS. Adaptive multimedia applications over the Internet. Operating system support for multimedia. Storage architecture and scalable media servers. Compression techniques, synchronization techniques, processor architectures for multimedia.";
                       $referenceMat="Ralf Steinmetz, Klara Nahrstedt, Multimedia Applications, Springer, 2004 
Tim Morris, Multimedia Systems: Delivering, Generating and Interacting with Multimedia, Springer, 2000 
Alistair D. W. Edwards, Simon Holland, Multimedia Interface Design in Education, Springer Verlag, 1994";
                       $painter= new PagePainter();
                       $painter->detailedCourseDscrptor($courseName,$courseInfo,$referenceMat);
                       ?>
		</div>

	</div>
</div>

</div>


</BODY>
</HTML>

