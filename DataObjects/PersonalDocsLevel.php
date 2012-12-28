<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personalDocsLevel
 *
 * @author cyberdex
 */
class PersonalDocsLevel {
   //put your code here;
    private  $docLevID;
    private  $docName;    

    //setters
    public function setDocLevID($docLevID){$this->docLevID= $docLevID;}
    public function setDocName($docName){$this->docName= $docName;}    
   
    //getters
    public function getDocLevID(){return $this->docLevID;}
    public function getDocName(){return $this->docName;}
   

}

?>
