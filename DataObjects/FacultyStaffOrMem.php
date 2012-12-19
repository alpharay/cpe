<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacultyStaffOrMem
 *
 * @author cyberdex
 */
class FacultyStaffOrMem {
      //put your code here
    private  $memberID;
    private  $firstName;
    private  $surName;
    private  $otherNames;
    private  $username;
    private  $password;
    private  $facLevID;
    private  $memStatusID;
    private  $memProfile;
    private  $researchInterest;
    private  $qualification;
    private  $emailAddress;
    private  $pwdStatus;

    //setters
    public function setMemberID($memberID){$this->memberID= $memberID;}
    public function setFirstName($firstName){$this->firstName= $firstName;}
    public function setSurName($surName){$this->surName= $surName;}
    public function setOtherNames($otherNames){$this->otherNames= $otherNames;}
    public function setUserName($username){$this->username= $username;}
    public function setPassWord($password){$this->password= $password;}
    public function setFacLevID($facLevID){$this->facLevID=$facLevID;}
    public function setMemStatusID($memStatusID){$this->memStatusID=$memStatusID;}
    public function setMemProfile($memProfile){$this->memProfile=$memProfile;}
    public function setResearchInterest($researchInterest){$this->researchInterest=$researchInterest;}
    public function setQualification($qualification){$this->qualification=$qualification;}
    public function setEmailAddress($emailAddress){$this->emailAddress=$emailAddress;}
    public function setPwdStatus($pwdStatus){$this->pwdStatus=$pwdStatus;}

    //getters
    public function getMemberID(){return $this->memberID;}
    public function getFirstName(){return $this->firstName;}
    public function getSurName(){return $this->surName;}
    public function getOtherNames(){return $this->otherNames;}
    public function getUserName(){return $this->username;}
    public function getPassWord(){return $this->password;}
    public function getFacLevID(){return $this->facLevID;}
    public function getMemStatusID(){return $this->memStatusID;}
    public function getMemProfile(){return $this->memProfile;}
    public function getResearchInterest(){return $this->researchInterest;}
    public function getQualification(){return $this->qualification;}
    public function getEmailAddress(){return $this->emailAddress;}
    public function getPwdStatus(){return $this->pwdStatus;}
}
?>
