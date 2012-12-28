<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlumniDataService
 *
 * @author cyberdex
 */
require_once 'ConnectionToUG.php';

class AlumniDataService {
    public function AlumniDataService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from alumniData",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new AlumniData();
        $aNewClass->setAlumniID($info['alumniID']);
        $aNewClass->setStudentID($info['studentID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setOtherName($info['otherName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setDateOfBirth($info['dateOfBirth']);
        $aNewClass->setYearGroup($info['yearGroup']);
        $aNewClass->setImageID($info['imageID']);
        $aNewClass->setAccountActive($info['accountActive']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from alumniData where alumniID = {$entered_id}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new AlumniData();
        $aNewClass->setAlumniID($info['alumniID']);
        $aNewClass->setStudentID($info['studentID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setOtherName($info['otherName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setDateOfBirth($info['dateOfBirth']);
        $aNewClass->setYearGroup($info['yearGroup']);
        $aNewClass->setImageID($info['imageID']);
        $aNewClass->setAccountActive($info['accountActive']);


        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByUsername($entered_username){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from alumniData where firstName = '{$entered_username}'",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new AlumniData();
        $aNewClass->setAlumniID($info['alumniID']);
        $aNewClass->setStudentID($info['studentID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setOtherName($info['otherName']);
        $aNewClass->setSurName($info['surName']);
        $aNewClass->setDateOfBirth($info['dateOfBirth']);
        $aNewClass->setYearGroup($info['yearGroup']);
        $aNewClass->setImageID($info['imageID']);
        $aNewClass->setAccountActive($info['accountActive']);


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
    mysql_query("DELETE from alumniData");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from alumniData where alumniID = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methods
}

?>
