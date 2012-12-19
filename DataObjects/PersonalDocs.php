<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonalDocs
 *
 * @author cyberdex
 */
class PersonalDocs {
    //put your code here
    
    private  $personalDocID;
    private  $docLevID;
    private  $memberID;
    private  $doc;
    

    //setters
    public function setPersonalDocID($personalDocID){$this->personalDocID= $personalDocID;}
    public function setDocLevID($docLevID){$this->docLevID= $docLevID;}
    public function setMemberID($memberID){$this->memberID= $memberID;}
    public function setDoc($doc){$this->doc=$doc;}
   
    //getters
    public function getPersonalDocID(){return $this->personalDocID;}
    public function getDocLevID(){return $this->docLevID;}
    public function getMemberID(){return $this->memberID;}
    public function getDoc(){return $this->doc;}


}

?>
