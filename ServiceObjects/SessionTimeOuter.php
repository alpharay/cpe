<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionTimeOuter
 *
 * @author cyberdex
 */
require_once 'AuthorizationAndConf.php';

class SessionTimeOuter {
    //put your code here
    public function AutoTimeOut($inactiveTimeLimit=1200,$landingPage=''){
     //session_start();
     
    //$path=$_SERVER['DOCUMENT_ROOT'];
    //$path=$_SERVER['PHP_SELF'];
    // set timeout period in seconds
    $inactive = $inactiveTimeLimit;
    $logoutPg=$landingPage;
     
    // check to see if $_SESSION['timeout'] is set
    if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
    { 
        //session_destroy(); header("Location: {$path}/{$logoutPg}"); 
       // session_destroy(); header("Location: {$logoutPg}"); 
        $timeouter=new AuthorizationAndConf();        
        $timeouter->logout($logoutPg,true);

        }
    }
    $_SESSION['timeout'] = time();    
    }
}

?>
