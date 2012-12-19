<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormsCreator
 *
 * @author cyberdex
 */
 //require_once '../ClassesIncluded.php';
 
class FormsCreator {
    //put your code here
    public function createLoginForm(){
    $generateForm="<html>";
    //$generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />"; THIS CAN BE ACTIVATED IF LINK NOT PRESENT ON PAGE
    $generateForm.="<body id='public'>";


   $generateForm.="<div id='container'>";
   $generateForm.="<form method='post' action='../morning_glory/Tools/auth.php'>";
   $generateForm.="<div class='info'>";
   $generateForm.="<h2>Member Login</h2>";
   $generateForm.="<div></div>";
   $generateForm.="</div>";
   $generateForm.="<ul>";

   $generateForm.="<li class='notStacked'>";
   $generateForm.="<label class='desc' id='membertype'>";
   $generateForm.="Member Type<span id='req_1' class='req'>*</span>";
   $generateForm.="</label>";
   $generateForm.="<div>";
   $generateForm.="<span>";
   $generateForm.="<input name='accesslevel' type='radio' class='field radio' value='1'/>";
   $generateForm.="<label class='choice'>Student</label>";
   $generateForm.="</span>";
   $generateForm.="<span>";
   $generateForm.="<input name='accesslevel' type='radio' class='field radio' value='2'/>";
   $generateForm.="<label class='choice'>Staff</label>";
   $generateForm.="</span>";
   $generateForm.="<span>";
   $generateForm.="<input name='accesslevel' type='radio' class='field radio' value='3'/>";
   $generateForm.="<label class='choice'>Parent</label>";
   $generateForm.="</span>";
   $generateForm.="</div>";
   $generateForm.="</li>";

   $generateForm.="<li class='notStacked'>";
   $generateForm.="<label class='desc' id='details'>";
   $generateForm.="Details<span id='req_2' class='req'>*</span>";
   $generateForm.="</label>";

   $generateForm.="<span>";
   $generateForm.="<input name='username' type='text' size='' />";
   $generateForm.="<label>Username</label>";
   $generateForm.="</span>";

   $generateForm.="</li>";

   $generateForm.="<li>";
   $generateForm.="<span>";
   $generateForm.="<input name='password' type='password' size='20' />";
   $generateForm.="<label>Password</label>";
   $generateForm.="</span>";
   $generateForm.="</li>";

   $generateForm.="<li>";
   $generateForm.="<div>";
   $generateForm.="<input class='button' type='submit' class='btTxt submit' name='submit' value='Login'/>";
   $generateForm.="</div>";
   $generateForm.="</li>";
   $generateForm.="</ul>";
   $generateForm.="<div class='info'></div>";
   $generateForm.="</form>";
   $generateForm.="</div>";
   $generateForm.="</body>";
   $generateForm.="</html>";

   echo $generateForm;
    }


   public function createResultsForm(){
    $generateForm.="<html>";
   // $generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />";
    $generateForm.="<body id='public'>";
    $generateForm.="<div id='container'>";

    $generateForm.="<form action='#' >";

    $generateForm.="<div class='info'>";
    $generateForm.="<h2>";
    $generateForm.=$subject_name;
    $generateForm.="Results</h2>";
    $generateForm.="<div></div>";
    $generateForm.="</div>";

    $generateForm.="<ul>";

    $generateForm.="<li class='likert'>";

    $generateForm.="<table>";
    $generateForm.="<thead>";
    $generateForm.="<tr>";
    $generateForm.="<td class='col1'>Student</td>";
    $generateForm.="<td class='col1'>Class Score</td>";
    $generateForm.="<td class='col1'>Exam Score</td>";
    $generateForm.="</tr>";
    $generateForm.="</thead>";
    $generateForm.="<tbody>";


            for ($i=1; $i<=10; $i++)//change loop to depend on database array
            {
                $generateForm.="<tr>";
                $generateForm.="<td>{$i}</td>";//where $i in this case is student name
                $generateForm.="'<td><input name=\"class_score'{$i}'\" class='other' size='5' type='text' value=''/></td>'";
                $generateForm.="<td><input name=\"exam_score'{$i}'\" class='other' size='5' type='text' value=''/></td>";
                $generateForm.="</tr>";
            }




          $generateForm.="</tbody>";
          $generateForm.="</table>";

          $generateForm.="</li>";

          $generateForm.="<li class='buttons'>";
          $generateForm.="<div>";
          $generateForm.="<input id='save' name='save' class='btTxt submit' type='submit' value='Save' />";
          $generateForm.="</div>";
          $generateForm.="</li>";
          $generateForm.="</ul>";

          $generateForm.="</form>";

          $generateForm.="</div>";
          $generateForm.="</body>";
          $generateForm.="</html>";

          echo $generateForm;
   }

   public function createSubjectRegForm(){
       $generateForm.="<html>";
       $generateForm.="<head>";

       $generateForm.="<title></title>";
       $generateForm.="</head>";
       $generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />";
       $generateForm.="<body id='public'>";
       $generateForm.="<div id='container'>";

       include("functions.php");

       $generateForm.="<form action='#' >";

       $generateForm.="<div class='info'>";
       $generateForm.="<h2>Subject Registration Form</h2>";
       $generateForm.="<div></div>";
       $generateForm.="</div>";

       $generateForm.="<ul>";
       $generateForm.="<li id='foli1' class=''>";
       $generateForm.="<label class='desc' id='subjectinfo'>";
       $generateForm.="Subject Information<span id='req_1' class='req'>*</span>";
       $generateForm.="</label>";

       $generateForm.="<span>";
       $generateForm.="<input name='subject_name' type='text' class='field text fn' size='25' />";
       $generateForm.="<label>Subject Name</label>";
       $generateForm.="</span>";
       $generateForm.="</li>";

       $generateForm.="<li id='foli1' class=''>";
       $generateForm.="<label class='desc' id='classinfo'>";
       $generateForm.="Class Information<span id='req_1' class='req'>*</span>";
       $generateForm.="</label>";

       $generateForm.="<span>";
       $generateForm.="<select name='term'>".createTerm()."</select>";
       $generateForm.="<label>Term</label>";
       $generateForm.="</span>";
       $generateForm.="<span>";
       $generateForm.="<select name='class'>".createClass()."</select>";
       $generateForm.="<label>Class</label>";
       $generateForm.="</span>";
       $generateForm.="</li>";

       $generateForm.="<li id='foli111' class=''>";
       $generateForm.="<label class='desc' id='title111' for='Field111'>Description";
       $generateForm.="<span id='req_1' class='req'>*</span>";
       $generateForm.="</label>";
       $generateForm.="<div>";
       $generateForm.="<textarea name='subject_description' class='field textarea medium' rows='10' cols='25'></textarea>";
       $generateForm.="</div>";

       $generateForm.="</li>";


       $generateForm.="<li class='buttons'>";
       $generateForm.="<div>";
       $generateForm.="<input id='send' name='send' class='btTxt submit' type='submit' value='Add Subject' />";
       $generateForm.="</div>";
       $generateForm.="</li>";

       $generateForm.="</ul>";

       $generateForm.="</form>";
       $generateForm.="</div>";
       $generateForm.="</body>";


       $generateForm.="</html>";
       echo $generateForm;
   }

   public function createUploadForm(){
       $generateForm.="<html>";
   // $generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />";
    $generateForm.="<body id='public'>";
    $generateForm.="<div id='container'>";

    $generateForm.="<form action='#' >";

    $generateForm.="<div class='info'>";
    $generateForm.="<h2>";
    $generateForm.="Assignment Upload";
    $generateForm.="</h2>";
    $generateForm.="<div></div>";
    $generateForm.="</div>";

    $generateForm.="<ul>";

    $generateForm.="<li id='foli1' class=''>";
    $generateForm.="<label class='desc' id='assignment_no'>";
    $generateForm.="Assignment No:<span id='req_1' class='req'>*</span>";
    $generateForm.="</label>";
    $generateForm.="<span>";
    $generateForm.="<input name='title' type='text' class='field text fn' size='5' />";
    $generateForm.="</span>";
    $generateForm.="</li>";

    $generateForm.="<li id='foli111' class=''>";
    $generateForm.="<label class='desc' id='title111' for='Field111'>File";
    $generateForm.="<span id='req_1' class='req'>*</span>";
    $generateForm.="</label>";
    $generateForm.="<span>";
    $generateForm.="<input type='hidden' name='max_file_size' value='10000' />";
    $generateForm.="<input name='txtfile' type='file' />";
    $generateForm.="</span>";
    $generateForm.="</li>";

    $generateForm.="<li class='buttons'>";
    $generateForm.="<div>";
    $generateForm.="<input id='upload' name='upload' class='btTxt submit' type='submit' value='Upload' />";
    $generateForm.="</div>";
    $generateForm.="</li>";

    $generateForm.="</ul>";


    $generateForm.="</form>";
    $generateForm.="</div>";
    $generateForm.="</body>";
    $generateForm.="</html>";

     echo $generateForm;
   }



   public function createMailForm(){
       $generateForm.="<html>";
   // $generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />";
    $generateForm.="<body id='public'>";
    $generateForm.="<div id='container'>";

    $generateForm.="<form action='#' >";

    $generateForm.="<div class='info'>";
    $generateForm.="<h2>";
    $generateForm.="Send Mail";
    $generateForm.="</h2>";
    $generateForm.="<div></div>";
    $generateForm.="</div>";

    $generateForm.="<ul>";

    $generateForm.="<li id='foli1' class=''>";
    $generateForm.="<label class='desc' id='title'>";
    $generateForm.="Title:<span id='req_1' class='req'>*</span>";
    $generateForm.="</label>";
    $generateForm.="<span>";
    $generateForm.="<input name='title' type='text' class='field text fn' size='5' />";
    $generateForm.="</span>";
    $generateForm.="</li>";

    $generateForm.="<li id='foli1' class=''>";
    $generateForm.="<label class='desc' id='receipient'>";
    $generateForm.="To:<span id='req_1' class='req'>*</span>";
    $generateForm.="</label>";
    $generateForm.="<span>";
    $generateForm.="<input name='receipient' type='text' class='field text fn' size='5' />";
    $generateForm.="</span>";
    $generateForm.="</li>";

    $generateForm.="<li id='foli111' class=''>";
    $generateForm.="<label class='desc' id='title111' for='Field111'>Body";
    $generateForm.="<span id='req_1' class='req'>*</span>";
    $generateForm.="</label>";
    $generateForm.="<div>";
    $generateForm.="<textarea name='body' class='field textarea medium' rows='10' cols='25'></textarea>";
    $generateForm.="</div>";

    $generateForm.="</li>";

    $generateForm.="<li class='buttons'>";
    $generateForm.="<div>";
    $generateForm.="<input id='send' name='send' class='btTxt submit' type='submit' value='Send' />";
    $generateForm.="</div>";
    $generateForm.="</li>";

    $generateForm.="</ul>";


    $generateForm.="</form>";
    $generateForm.="</div>";
    $generateForm.="</body>";
    $generateForm.="</html>";

     echo $generateForm;
   }
   
   
   public function ViewResultsForm(){
    $generateForm.="<html>";
   // $generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />";
    $generateForm.="<body id='public'>";
    $generateForm.="<div id='container'>";

    $generateForm.="<form action='#' >";

    //$generateForm.="<div class='info'>";
    //$generateForm.="<h2>";
    //$generateForm.=$subject_name;
    //$generateForm.="Results</h2>";
    //$generateForm.="<div></div>";
    //$generateForm.="</div>";

    //$generateForm.="<ul>";

    //$generateForm.="<li class='likert'>";

    $generateForm.="<table border='1'>";
    $generateForm.="<thead border='0'>";
	$generateForm.="<tr>";
	$generateForm.="<td colspan='5'>Name: ".$_SESSION['student_surname'].", ".$_SESSION['student_firstname']." ".$_SESSION['student_othername']."</td>";
	$generateForm.="</tr>";
	$generateForm.="<tr>";
	$generateForm.="<td colspan='2'>No. in Class: </td>";
	$generateForm.="<td colspan='3'>Position in Class: </td>";
	$generateForm.="</tr>";
	$generateForm.="<tr>";
	$yr2=1+$_SESSION['year'];
	$generateForm.="<td colspan='2'>Year: ".$_SESSION['year']."/".$yr2."</td>";
	$generateForm.="<td colspan='3'>Term: ".$_SESSION['term']."</td>";
	$generateForm.="</tr>";
    $generateForm.="<tr align='center'>";
    $generateForm.="<td class='col1'>Subject</td>";
    $generateForm.="<td class='col1'>Class Score</td>";
    $generateForm.="<td class='col1'>Exam Score</td>";
	$generateForm.="<td class='col1'>Total Score</td>";
	$generateForm.="<td class='col1'>Position</td>";
    $generateForm.="</tr>";
    $generateForm.="</thead>";
    $generateForm.="<tbody>";
	
	$thisResult=new ResultsService();
    $thisResult->getByIDandYear($_SESSION['student_id'], $_SESSION['year'], $_SESSION['term']);
	
	//echo $_SESSION['student_id'];
	//echo $year;
	//echo $term;
	//echo sizeof($thisResult->getByIDandYear($_SESSION['student_id'], $_SESSION['year'], $_SESSION['term']));
	
	for($i=0;$i<sizeof($thisResult->getByIDandYear($_SESSION['student_id'], $_SESSION['year'], $_SESSION['term']));$i++){
            $printArr=$thisResult->getByIDandYear($_SESSION['student_id'], $_SESSION['year'], $_SESSION['term']);
            $generateForm.="<tr align='center'><td>{$printArr[$i]->getSubjectName()}</td>";//Have to include subject name here
			$generateForm.="<td>{$printArr[$i]->getClassScore()}</td>";
            $generateForm.="<td>{$printArr[$i]->getExamScore()}</td>";
			$sum=$printArr[$i]->getClassScore() + $printArr[$i]->getExamScore();
			$generateForm.="<td>".$sum."</td></tr>";
			
            //echo $printArr[$i]->getSubjectID();
			//echo 'yes';
        }

          $generateForm.="</form>";

          $generateForm.="</div>";
          $generateForm.="</body>";
          $generateForm.="</html>";

          echo $generateForm;
   }
   
   public function select_Year_Term(){
		  //$generateForm.="<html>";
	      // $generateForm.="<link rel='stylesheet' href='Tools/form.css' type='text/css' />";
		  //$generateForm.="<body id='public'>";
		  //$generateForm.="<div id='container'>";
	
		  //$generateForm.="<form action='#' >";
		  
		  $generateForm.="<div class='info'>";
		  //$generateForm.="<h2>View Results</h2>";
		  $generateForm.="<div></div>";
		  $generateForm.="</div>";
		  $generateForm.="<form method='post' action='#'>";
		  $generateForm.="<li class='notStacked'>";
		  $generateForm.="<label class='desc' id='year'>";
		  $generateForm.="Year<span id='req_1' class='req'>*</span>";
		  $generateForm.="</label>";
		  $generateForm.="<div>";
		  $generateForm.="<span>";
		  $generateForm.="<input name='year' type='radio' class='field radio' value='2000' checked/>";
		  $generateForm.="<label class='choice'>2000</label>";
		  $generateForm.="</span>";
		  $generateForm.="</div>";
		  $generateForm.="<label class='desc' id='term'>";
		  $generateForm.="Term<span id='req_1' class='req'>*</span>";
		  $generateForm.="</label>";
		  $generateForm.="<div>";
		  $generateForm.="<span>";
		  $generateForm.="<input name='term' type='radio' class='field radio' value='1' checked/>";
		  $generateForm.="<label class='choice'>First</label>";
		  $generateForm.="</span>";
		  $generateForm.="<span>";
		  $generateForm.="<input name='term' type='radio' class='field radio' value='2'/>";
		  $generateForm.="<label class='choice'>Second</label>";
		  $generateForm.="</span>";
		  $generateForm.="<span>";
		  $generateForm.="<input name='term' type='radio' class='field radio' value='3'/>";
		  $generateForm.="<label class='choice'>Three</label>";
		  $generateForm.="</span>";
		  //$generateForm.="</div>";
		  $generateForm.="</li>";
		  $generateForm.="<li>";
		  $generateForm.="<div>";
		  $generateForm.="<input class='button' type='submit' class='btTxt submit' name='submit' value='View'/>";
		  $generateForm.="</div>";
		  $generateForm.="</li>";
		  $generateForm.="</form>";
		  //$generateForm.="</form>";

          //$generateForm.="</div>";
          //$generateForm.="</body>";
          //$generateForm.="</html>";

          echo $generateForm;
   }
}
?>