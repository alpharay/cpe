<?php
            /*
             * To change this template, choose Tools | Templates
             * and open the template in the editor.
             */

            session_start();
            ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel='stylesheet' href='form.css' type='text/css' />
    </head>


<?php
            require_once 'FormsCreator.php';
            //include_once 'tools/auth.php';

/*
            //redirect to appropriate homepage if logged in
            if(isset ($_SESSION['student_id'])){
                header("location: Student/studentindex.php");
		exit();

                //echo $_SESSION['student_id'];

            }

            elseif(isset ($_SESSION['staff_id'])){
                header("location: Staff/staffindex.php");
		exit();

            }

            elseif(isset ($_SESSION['parent_id'])){
                header("location: Parent/parentindex.php");
		exit();

            }

            else{
*/

            $thisform=new FormsCreator();
            $thisform->createLoginForm();
           // }
        ?>

      </html>

