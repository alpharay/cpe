<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RadioButton
 *
 * @author cyberdex
 */
class RadioButton {
    //put your code here
 private $radioName;
 private $noOfRadioButs;
 private $radioButName;
    public function RadioButton(){
        $this->radioName="";
        $this->noOfRadioButs=1;
        $this->radioButName="";
    }

    //setters
public function setRadioName($radioName){$this->radioName=$radioName;}
public function setNoOfRadioButs($noOfRadioButs){$this->noOfRadioButs=$noOfRadioButs;}
public function setRadioButName($radioButName){$this->radioButName=$radioButName;}

    //getters
public function getRadioName(){return $this->radioName;}
public function getNoOfRadioButs(){return $this->noOfRadioButs;}
public function getRadioButName(){return $this->radioButName;}//for getting the general name for radio buttons

    //others
public function createRadioButton(){
   // static $radioCreator="";
    //for($i=0;$i<$this->getNoOfRadioButs();$i++){
   for($i=0;$i<sizeof($this->getRadioName());$i++){
    $element=$this->getRadioName();
    $radioCreator="<input type='radio' value='".$element[$i]."' name='".$this->getRadioButName()."'>";
    $radioCreator.="".$element[$i];
    $radioCreator.="</input>";
    echo $radioCreator;
    }

    }
}
?>