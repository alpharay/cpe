<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TextBox
 *
 * @author cyberdex
 */
class TextBox {
    //put your code here
    private $labelName;
    private $position;
    private $classUsed;
    private $idUsed;
    private $textBoxName;

    //constructor
    public function TextBox(){
        $this->idUsed="";
        $this->classUsed="";
        $this->position="";
        $this->labelName="";
        $this->textBoxName="";
    }

    //setters
    public function setLabel($labelName){$this->labelName=$labelName;}
    public function setTextBoxPosition($position){$this->position=$position;}
    public function setTextBoxClass($classUsed){$this->classUsed=$classUsed;}
    public function setIdUsed($idUsed){$this->idUsed;}
    public function setTextBoxName($textBoxName){$this->textBoxName=$textBoxName;}

    //getters
    public function getLabel(){return $this->labelName;}
    public function getTextBoxPosition(){return $this->position;}
    public function getTextBoxClass(){return $this->classUsed;}
    public function getIdUsed(){return $this->idUsed;}
    public function getTextBoxName(){return $this->textBoxName;}

    //others
    public function creatTextBox(){
        $generateTextBox="<div class='".$this->getTextBoxClass()."'>";
        $generateTextBox.="<label class='desc'>".$this->getLabel()."</label>";
        $generateTextBox.="<input type='text' name='".$this->getTextBoxName()."'>";
        $generateTextBox.="</input>";
        $generateTextBox.="<div>";
        echo $generateTextBox;
    }
}
?>