<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramService
 *
 * @author cyberdex
 */
//require_once '../DataObjects/Program.php';
require_once 'ConnectionToUG.php';

class ProgramService {
   public function ProgramService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from program",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new Program();
        $aNewClass->setProgID($info['progID']);
        $aNewClass->setProgName($info['progName']);
        $aNewClass->setProgLevID($info['$progLevID']);
        $aNewClass->setAdmissionReq($info['$admissionReq']);
        $aNewClass->setGraduationReq($info['$graduationReq']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from program where progID = {$entered_id}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new Program();
        $aNewClass->setProgID($info['progID']);
        $aNewClass->setProgName($info['progName']);
        $aNewClass->setProgLevID($info['$progLevID']);
        $aNewClass->setAdmissionReq($info['$admissionReq']);
        $aNewClass->setGraduationReq($info['$graduationReq']);
        
        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByProgName($entered_username){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from program where progName = '{$entered_username}'",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new Program();
        $aNewClass->setProgID($info['progID']);
        $aNewClass->setProgName($info['progName']);
        $aNewClass->setProgLevID($info['$progLevID']);
        $aNewClass->setAdmissionReq($info['$admissionReq']);
        $aNewClass->setGraduationReq($info['$graduationReq']);

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
    mysql_query("DELETE from program");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from program where progID = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methods
}
?>
