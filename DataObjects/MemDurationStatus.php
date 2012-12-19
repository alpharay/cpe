<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MemDurationStatus
 *
 * @author cyberdex
 */
class MemDurationStatus {
     //put your code here
    private  $memStatusID;
    private  $mamStatusName;

    //setters
    public function setMemStatusID($memStatusID){$this->memStatusID= $memStatusID;}
    public function setMemStatusName($memStatusName){$this->mamStatusName=$memStatusName;}

    //getters
    public function getMemStatusID(){return $this->memStatusID;}
    public function getMemStatusName(){return $this->mamStatusName;}
}
?>
