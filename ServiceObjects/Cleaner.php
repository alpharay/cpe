<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cleaner
 *
 * @author cyberdex
 */
class Cleaner {//THIS CLASS IS NOT BROKEN BY USER INPUTTING OF CODES VIA POST
    //put your code here
    function mysql_prep($value){
        $magic_quotes_active=get_magic_quotes_gpc();//to check if magic quotes has been activated returns 0 if off and 1 if on
        $newness_of_php=function_exists("mysql_real_escape_string");//to check if the function is present in php; whether new or old php version
        
        if($newness_of_php){
            if($magic_quotes_active){$value= stripslashes($value);}
            $value=mysql_real_escape_string($value);
        }else{
            if(!$magic_quotes_active){$value=addslashes($value);}            
            }
            return $value;
    }
}

?>
