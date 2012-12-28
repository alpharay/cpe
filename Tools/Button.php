<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Button
 *
 * @author cyberdex
 */
class Button {
      //put your code here
    private $Name;
    private $position;
    private $classUsed;
    private $idUsed;
    private $value;

    //constructor
    public function TextBox(){
        $this->idUsed="";
        $this->classUsed="";
        $this->position="";
        $this->Name="";
        $this->value="";
    }

    //setters
    public function setName($Name){$this->Name=$Name;}
    public function setButtonPosition($position){$this->position=$position;}
    public function setButtonClass($classUsed){$this->classUsed=$classUsed;}
    public function setIdUsed($idUsed){$this->idUsed;}
    public function setValue($value){$this->value=$value;}

    //getters
    public function getName(){return $this->Name;}
    public function getButtonPosition(){return $this->position;}//this is to set the position of the textbox class
    public function getButtonClass(){return $this->classUsed;}//this is to set the class field of the button class
    public function getIdUsed(){return $this->idUsed;}//this is to set the id field of the button class
    public function getValue(){return $this->value;}//this is to set the value field of the button class

    //others
    public function createButton(){
        $generateTextBox="<div class='".$this->getButtonClass()."'>";
        $generateTextBox.="<input type='submit' value='{$this->getValue()}'";
        $generateTextBox.="</input>";
        $generateTextBox.="<div>";
        echo $generateTextBox;
    }
}
?>