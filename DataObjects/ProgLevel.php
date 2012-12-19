<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgLevel
 *
 * @author cyberdex
 */
class ProgLevel {
     //put your code here
    private  $progLevID;
    private  $levelName;

    //setters
    public function setProgLevID($progLevID){$this->progLevID= $progLevID;}
    public function setLevelName($levelName){$this->levelName= $levelName;}

    //getters
    public function getProgID(){return $this->progLevID;}
    public function getLevelName(){return $this->levelName;}
}
?>
