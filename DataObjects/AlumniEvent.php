<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlumniEvent
 *
 * @author cyberdex
 */
class AlumniEvent {
   //put your code here
    private  $eventID;
    private  $eventName;

    //setters
    public function setEventID($eventID){$this->eventID= $eventID;}
    public function setEventName($eventName){$this->eventName= $eventName;}

    //getters
    public function getEventID(){return $this->eventID;}
    public function getEventName(){return $this->eventName;}
}
?>
