<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ComboBox
 *
 * @author cyberdex
 */
class ComboBox {
    //put your code here
    private $labelName;
    private $position;
    private $classUsed;
    private $idUsed;
   // private $noOfEnteries;

    //constructor
    public function ComboBox(){
        $this->idUsed="";
        $this->classUsed="";
        $this->position="";
        $this->labelName="";
       // $this->noOfEnteries=1;
    }

    //setters
    public function setLabelName($lableName){$this->labelName=$labelName;}
    public function setComboBoxPosition($position){$this->position=$position;}
    public function setComboBoxClass($classUsed){$this->classUsed=$classUsed;}
    public function setIdUsed($idUsed){$this->idUsed;}
    //public function setNoOfEnteries($noOfEnteries){$this->noOfEnteries=$noOfEnteries;}

    //getters
    public function getLabelName(){return $this->labelName;}
    public function getComboBoxPosition(){return $this->position;}
    public function getComboBoxClass(){return $this->classUsed;}
    public function getIdUsed(){return $this->idUsed;}
   // public function getNoOfEnteries(){return $this->noOfEnteries;}

    //others
    public function creatComboBox($enteries){
       $generateTextBox="<div class='".$this->getComboBoxClass()."'>";
       $generateComboBox.="<select>";
       for( $i=0;$i<sizeof($enteries);$i++){//come back and check the size of
       $generateComboBox.="<option>".$enteries[$i];
       $generateComboBox.="<option>";
       }
       $generateComboBox.="</option>";
        $generateTextBox.="<div>";
       echo $generateComboBox;
    }
}
?>