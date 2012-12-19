<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemDurationStatusService
 *
 * @author cyberdex
 */
//require_once '../DataObjects/MemDurationStatus.php';
require_once 'ConnectionToUG.php';

class MemDurationStatusService {
    public function MemDurationStatusService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from memDurationStatus",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new MemDurationStatus();
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemStatusName($info['memStatusName']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from memDurationStatus where memStatusID = {$entered_id}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new MemDurationStatus();
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemStatusName($info['memStatusName']);


        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByEventName($entered_username){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from memDurationStatus where memStatusName = '{$entered_username}'",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new MemDurationStatus();
        $aNewClass->setMemStatusID($info['memStatusID']);
        $aNewClass->setMemStatusName($info['memStatusName']);

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
    mysql_query("DELETE from memDurationStatus");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from memDurationStatus where memStatusID = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methods
}
?>
