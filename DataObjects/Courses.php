<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Courses
 *
 * @author cyberdex
 */
class Courses {
     //put your code here
    private  $courseID;
    private  $courseName;
    private  $progLevID;

    //setters
    public function setCourseID($courseID){$this->courseID= $courseID;}
    public function setCourseName($courseName){$this->courseName= $courseName;}
    public function setProgLevID($progLevID){$this->progLevID=$progLevID;}

    //getters
    public function getCourseID(){return $this->courseID;}
    public function getCourseName(){return $this->courseName;}
    public function getProgLevID(){return $this->progLevID;}
}
?>
