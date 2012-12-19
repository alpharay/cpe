<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author cyberdex
 */
//class Student implements Person {
class Student {
    //put your code here
    private  $studentID;
    private  $firstName;
    private  $surName;
    private  $otherNames;
    private  $yearGroup;
    


    //setters
    public function setStudentID($studentID){$this->studentID= $studentID;}
    public function setFirstName($firstName){$this->firstName= $firstName;}
    public function setSurName($surName){$this->surName= $surName;}
    public function setOtherNames($otherNames){$this->otherNames=$otherNames;}
    public function setYearGroup($yearGroup){$this->yearGroup=$yearGroup;}
   
   


    //getters
    public function getStudentID(){return $this->studentID;}
    public function getFirstName(){return $this->firstName;}
    public function getSurName(){return $this->surName;}
    public function getOtherNames(){return $this->otherNames;}
    public function getYearGroup(){return $this->yearGroup;}
   
   
}
?>