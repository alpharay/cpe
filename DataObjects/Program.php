<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Program
 *
 * @author cyberdex
 */
class Program {
    //put your code here
    private  $progID;
    private  $progName;
    private  $progLevID;
    private  $admissionReq;
    private  $graduationReq;



    //setters
    public function setProgID($progID){$this->progID= $progID;}
    public function setProgName($progName){$this->progName= $progName;}
    public function setProgLevID($progLevID){$this->progLevID= $progLevID;}
    public function setAdmissionReq($admissionReq){$this->admissionReq=$admissionReq;}
    public function setGraduationReq($graduationReq){$this->graduationReq=$graduationReq;}




    //getters
    public function getProgID(){return $this->progID;}
    public function getProgName(){return $this->progName;}
    public function getProgLevID(){return $this->progLevID;}
    public function getAdmissionReq(){return $this->admissionReq;}
    public function getGraduationReq(){return $this->graduationReq;}
}
?>
