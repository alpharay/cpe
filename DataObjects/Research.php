<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Research
 *
 * @author cyberdex
 */
class Research {
    //put your code here
    private  $researchID;
    private  $researchName;
    private  $progLevID;

    //setters
    public function setResearchID($researchID){$this->researchID= $researchID;}
    public function setResearchName($researchName){$this->researchName= $researchName;}
    public function setProgLevID($progLevID){$this->progLevID=$progLevID;}

    //getters
    public function getResearchID(){return $this->researchID;}
    public function getResearchName(){return $this->researchName;}
    public function getProgLevID(){return $this->progLevID;}
}
?>
