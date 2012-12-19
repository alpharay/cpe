<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//function to validate username
function validateUsername($str){
    //if it's NOT valid
    if(!preg_match("/^[a-z0-9]*$/i", $str))
	return false;
    //if it's valid
    else
    	return true;
}

// function to validate passwords
function validatePasswords($pass1, $pass2) {
    //check if the length is at least 6 characters and they are equal
    return (strlen($pass1) >= 6 && $pass1 == $pass2);
}

// check if username has already been selected
function userNameDuplicate($str){
    $staff = Staff::getStaffByUsername($str);
    return ($staff->staff_id) ? true : false;
}

//function to set term list
function createTerm($selected=null){
    $term_array = array("1", "2");
    $selected = is_null($selected) ? "1" : $selected;
    foreach($term_array as $k => $v){
        $term .= "<option value='$v'";
        $term .= ($v == $selected) ? 'selected="selected"' : '';
        $term .= ">$v&nbsp;&nbsp;&nbsp;</option><br />";
    }
    return $term;
}

function createClass($selected=null) {
    //$class_array=; array created from database
    $selected = is_null($selected) ? $class_array['1'] : $class_array[$selected];
    foreach($class_array as $k=>$v){
        $class .="<option value='$k'";
        $class .= ($v==$selected) ? 'selected="selected"' : '';
        $class .= ">$v&nbsp;&nbsp;&nbsp;</option><br />";
    }
    return $class;
}

function createSubject($selected=null) {
    //$subject_array=; array created from database
    $selected = is_null($selected) ? $subject_array['1'] : $subject_array[$selected];
    foreach($subject_array as $k=>$v){
        $subject .="<option value='$k'";
        $subject .= ($v==$selected) ? 'selected="selected"' : '';
        $subject .= ">$v&nbsp;&nbsp;&nbsp;</option><br />";
    }
    return $subject;
}


//create year list for year of admission
function createYears($start_year, $selected=null)
    {
        /*** the current year ***/
        $selected = is_null($selected) ? date('Y') : $selected;

        /*** start with current year ***/
        $end_year = date(Y);

        /*** create the select ***/

        for($year=$end_year; $year >= $start_year; --$year){
            $years .= "<option value='$year'";
            $years .= ($year==$selected) ? ' selected="selected"' : '';
            $years .= ">$year&nbsp;&nbsp;</option><br />";
        }

        return $years;
    }


    //create year list for year of completion
    function createYears1($start_year, $selected=null)
    {
        /*** start with current year ***/
        $end_year = date(Y)+18;

        /*** the current year ***/
        $selected = is_null($selected) ? $end_year : $selected;

        /*** create the select ***/

        for($year=$end_year; $year >= $start_year; --$year){
            $years .= "<option value='$year'";
            $years .= ($year==$selected) ? ' selected="selected"' : '';
            $years .= ">$year&nbsp;&nbsp;</option><br />";
        }

        return $years;
    }

?>