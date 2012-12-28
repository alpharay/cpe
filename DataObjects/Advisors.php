<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Advisors
 *
 * @author cyberdex
 */
class Advisors {
   //put your code here
    private  $advisorID;
    private  $firstName;
    private  $surName;
    private  $otherNames;
    private  $progLevID;



    //setters
    public function setAdvisorID($advisorID){$this->advisorID= $advisorID;}
    public function setFirstName($firstName){$this->firstName= $firstName;}
    public function setSurName($surName){$this->surName= $surName;}
    public function setOtherNames($otherNames){$this->otherNames=$otherNames;}
    public function setProgLevID($progLevID){$this->progLevID=$progLevID;}




    //getters
    public function getAdvisorID(){return $this->studentID;}
    public function getFirstName(){return $this->firstName;}
    public function getSurName(){return $this->surName;}
    public function getOtherNames(){return $this->otherNames;}
    public function getProgLevID(){return $this->yearGroup;}


}
?>
