<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacultyLevel
 *
 * @author cyberdex
 */
class FacultyLevel {
     //put your code here
    private  $facLevID;
    private  $facLevName;

    //setters
    public function setFacLevID($facLevID){$this->facLevID= $facLevID;}
    public function setFacLevName($facLevName){$this->facLevName= $facLevName;}

    //getters
    public function getFacLevID(){return $this->facLevID;}
    public function getFacLevName(){return $this->facLevName;}
}
?>
