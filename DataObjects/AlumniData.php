<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlumniData
 *
 * @author cyberdex
 */
//require_once '../ClassesIncluded.php';

class AlumniData {
    //put your code here
    //parameters inside
    private $alumniID;
    private $studentID;
    private $firstName;
    private $otherName;
    private $surName;
    private $dateOfBirth;
    private $yearGroup;
    private $imageID;
    private $accountActive;
    
    //setters
    public function setAlumniID($alumniID){$this->alumniID=$alumniID;}
    public function setStudentID($studentID){$this->studentID=$studentID;}
    public function setFirstName($firstName){$this->firstName=$firstName;}
    public function setOtherName($otherName){$this->otherName=$otherName;}
    public function setSurName($surName){$this->surName=$surName;}
    public function setDateOfBirth($dateOfBirth){$this->dateOfBirth=$dateOfBirth;}
    public function setYearGroup($yearGroup){$this->yearGroup=$yearGroup;}
    public function setImageID($imageID){$this->imageID=$imageID;}
    public function setAccountActive($accountActive){$this->accountActive=$accountActive;}  
    
    
    //getters
    public function getAlumniID(){return $this->alumniID;}
    public function getStudentID(){return $this->studentID;}
    public function getFirstName(){return $this->firstName;}
    public function getOtherName(){return $this->otherName;}
    public function getSurName(){return $this->surName;}
    public function getDateOfBirth(){return $this->dateOfBirth;}
    public function getYearGroup(){return $this->yearGroup;}
    public function getImageID(){return $this->imageID;}
    public function getAccountActive(){return $this->accountActive;}
    //others
}

?>
