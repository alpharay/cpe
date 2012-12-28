<?php
session_start();
//require_once '../ServiceObjects/FacultyStaffOrMemService.php';
//require_once '../ServiceObjects/Cleaner.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthorizationAndConf
 *
 * @author cyberdex
 */
class AuthorizationAndConf {
    //put your code here
    
    public function staffAuthenticate($username,$password,$redirect){
        $encryptor= new Encryption(); 
        $personfound=False;
        $staff= new FacultyStaffOrMemService();
        $staffPersons=$staff->getAll();
        for($i=0; $i<sizeof($staffPersons);$i++){
           $staffID=$staffPersons[$i]->getMemberID();
           $staffName=$staffPersons[$i]->getUserName();
           $staffPass=$staffPersons[$i]->getPassWord();
          
           if(isset($username)&&($username==$staffName)){
            
               if($staffPersons[$i]->getPwdStatus()==1)$password=$encryptor->encryptPassW2($password);//check to see if password is ecncrypted first
               if(isset($password)&&($password==$staffPass)){
               $personfound=True;
               $_SESSION['useRID']=$staffID;
               $_SESSION['username']=$username;
               $_SESSION['authentic']=true;
               header("location:{$redirect}");               
               //return $personfound;
               }
               else continue;               
           }
        
            }
         if($personfound==False){return $personfound;}         
    }
    
    public function logout($landingPage,$autoLogout=false){
        if($autoLogout==true){
            //1.  find the session/session variable so as to unset all
        session_start();      
        $_SESSION['autoLgID']=77;        
        //5. finally, redirect it to the login page
        header("location: {$landingPage}");//PAGE YOU WOULD GO TO ON LOGOUT
        }
        
        else{
        //1.  find the session/session variable so as to unset all
        session_start();
        //2. unset all session variables
        $_SESSION=array();
        //3. destroy the session cookie; session cookie would have the session name
        if(isset($_COOKIE[session_name()])){
           // setcookie(session_name(),'',time()-42000,'/');
        }
        //4. destroy the session      
        session_destroy();
        
        //5. finally, redirect it to the login page
        header("location: {$landingPage}");//PAGE YOU WOULD GO TO ON LOGOUT
        }
    }
}

?>
