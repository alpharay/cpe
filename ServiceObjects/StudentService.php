<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentService
 *
 * @author cyberdex
 */

//require_once '../DataObjects/Student.php';
require_once 'ConnectionToUG.php';

class StudentService {
    private $con;

    public function StudentService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from student",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new Student();
        $aNewClass->setStudentID($info['studentID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurname($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setYearGroup($info['yearGroup']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from student where studentID = {$entered_id}",$this->con->getConnectToSQL());
    
    if(mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }
    
    else{

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new Student();
        $aNewClass->setStudentID($info['studentID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurname($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setYearGroup($info['yearGroup']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByUsername($entered_username){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from student where username = '{$entered_username}'",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new Student();
        $aNewClass->setStudentID($info['studentID']);
        $aNewClass->setFirstName($info['firstName']);
        $aNewClass->setSurname($info['surName']);
        $aNewClass->setOtherNames($info['otherNames']);
        $aNewClass->setYearGroup($info['yearGroup']);

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
    mysql_query("DELETE from student");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from student where student_id = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methods
}
?>