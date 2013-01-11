<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacultyStaffOrMemService
 *
 * @author cyberdex
 */
//require_once '../ClassesIncluded.php';
require_once 'ConnectionToUG.php';

class FacultyStaffOrMemService {
     private $con;

    public function FacultyStaffOrMemService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from facultyStaffOrMem",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new FacultyStaffOrMem();
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setUserName($info['username']);
        $aNewClass->setPassWord($info['password']);
        $aNewClass->setFacLevID($info['facLevID']);
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemProfile($info['memProfile']);
        $aNewClass->setResearchInterest($info['researchInterest']);
        $aNewClass->setQualification($info['qualification']);
        $aNewClass->setEmailAddress($info['emailAddress']);
        $aNewClass->setPwdStatus($info['pwdStatus']);


        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from facultyStaffOrMem where memberID = {$entered_id}",$this->con->getConnectToSQL());

    if(@mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
       $aNewClass=new FacultyStaffOrMem();
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setUserName($info['username']);
        $aNewClass->setPassWord($info['password']);
        $aNewClass->setFacLevID($info['facLevID']);
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemProfile($info['memProfile']);
        $aNewClass->setResearchInterest($info['researchInterest']);
        $aNewClass->setQualification($info['qualification']);
        $aNewClass->setEmailAddress($info['emailAddress']);
        $aNewClass->setPwdStatus($info['pwdStatus']);


        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }
    
    public function getByFacLevID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from facultyStaffOrMem where facLevID = {$entered_id}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        //echo "Wrong login information";
        echo "EMPTY";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
       $aNewClass=new FacultyStaffOrMem();
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setUserName($info['username']);
        $aNewClass->setPassWord($info['password']);
        $aNewClass->setFacLevID($info['facLevID']);
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemProfile($info['memProfile']);
        $aNewClass->setResearchInterest($info['researchInterest']);
        $aNewClass->setQualification($info['qualification']);
        $aNewClass->setEmailAddress($info['emailAddress']);
        $aNewClass->setPwdStatus($info['pwdStatus']);


        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByUsername($entered_username){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from facultyStaffOrMem where firstName = '{$entered_username}'",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new FacultyStaffOrMem();
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setUserName($info['username']);
        $aNewClass->setPassWord($info['password']);
        $aNewClass->setFacLevID($info['facLevID']);
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemProfile($info['memProfile']);
        $aNewClass->setResearchInterest($info['researchInterest']);
        $aNewClass->setQualification($info['qualification']);
        $aNewClass->setEmailAddress($info['emailAddress']);
        $aNewClass->setPwdStatus($info['pwdStatus']);


        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();

    }

    }

    //Addition methods
    public function Add(){


    }


    //Deletion methods
    public function DeleteAll(){
    mysql_query("DELETE from facultyStaffOrMem");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from facultyStaffOrMem where memberID = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methods
    public function updateByStaffOrMem($staffOrMem){
    $updatedStaffOrMem=new FacultyStaffOrMem();
    $updatedStaffOrMem=$staffOrMem;
   // $status=mysql_query("UPDATE facultyStaffOrMem SET firstName='{$updatedStaffOrMem->getFirstName()}',surName = '{$updatedStaffOrMem->getSurName()}', otherNames = '{$updatedStaffOrMem->getOtherNames()}',memProfile='{$updatedStaffOrMem->getMemProfile()}',researchInterest='{$updatedStaffOrMem->getResearchInterest()}' WHERE memberID={$updatedStaffOrMem->getMemberID()}");    
    $status=mysql_query("UPDATE facultyStaffOrMem SET firstName='{$updatedStaffOrMem->getFirstName()}',surName = '{$updatedStaffOrMem->getSurName()}', otherNames = '{$updatedStaffOrMem->getOtherNames()}', emailAddress = '{$updatedStaffOrMem->getEmailAddress()}', researchInterest = '{$updatedStaffOrMem->getResearchInterest()}', memProfile = '{$updatedStaffOrMem->getMemProfile()}' WHERE memberID={$updatedStaffOrMem->getMemberID()}");    

    return $status;
    }
    
    public function updatePwdByID($usrWithUpDatePwd){
    $updatedStaffOrMem=new FacultyStaffOrMem();
    $updatedStaffOrMem=$usrWithUpDatePwd;
   // $status=mysql_query("UPDATE facultyStaffOrMem SET firstName='{$updatedStaffOrMem->getFirstName()}',surName = '{$updatedStaffOrMem->getSurName()}', otherNames = '{$updatedStaffOrMem->getOtherNames()}',memProfile='{$updatedStaffOrMem->getMemProfile()}',researchInterest='{$updatedStaffOrMem->getResearchInterest()}' WHERE memberID={$updatedStaffOrMem->getMemberID()}");    
    $status=mysql_query("UPDATE facultyStaffOrMem SET password='{$usrWithUpDatePwd->getPassWord()}', pwdStatus='1' WHERE memberID='{$usrWithUpDatePwd->getMemberID()}'");    

    return $status;
    }
    
    //Other methods
    public function showStaffOrMemImage($memberID=25){
    $image= mysql_query("SELECT * FROM  imageStore where imageID=$memberID");
    $image=mysql_fetch_assoc($image);
    $image=$image['image'];
    
    header("Content-type: image/jpeg");
    
    echo $image;
    }
}
?>
