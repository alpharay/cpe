<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuCreator
 *
 * @author cyberdex
 */
//require_once '../ClassesIncluded.php';

class MenuCreator {
    //put your code here
    private $name="";
    private $menubuilder="";
    public function MenuCreator(){
        $this->name="";
        $this->menubuilder="";
    }
    
    public function BuildMainMenu($menuItems,$css){//for building the main top menu
        echo "<link type='text/css' href='{$css}' rel='stylesheet' />";
        echo "<div id = 'menucover'>";
        echo " <div id='menu'>";
        echo "<ul class='menu'>";
        if(isset($menuItems)){
            for($i=0;$i<sizeof($menuItems);$i++){
                echo "<li><a href='{$menuItems[$i]['link']}' class='parent'><span>{$menuItems[$i]['item']}</span>";
                if(isset($menuItems[$i]['submenu'])){
                $this->BuildSubMenu($menuItems[$i]['submenu']);}
                echo "</a></li>";
            }
        }
        echo "</ul>";
        echo "</div>";
        echo "</div>";
    }
    
    public function BuildSubMenu($submenuItem){//for building the submenu
        echo "<ul>";
        if(isset($submenuItem)){
            for($i=0;$i<sizeof($submenuItem);$i++){
                echo "<li><a href='{$submenuItem[$i]['link']}'><span>{$submenuItem[$i]['subItem']}</span></a>";
                if(isset($submenuItem[$i]['subsubmenu'])){
                $this->BuildSubSubMenu($submenuItem[$i]['subsubmenu']);}
                echo "</li>";
            }
        }
        echo "</ul>";
    }
    
    public function BuildSubSubMenu($subSubMenuItem){
        echo "<ul>";
        if(isset($subSubMenuItem)){
            for($i=0;$i<sizeof($subSubMenuItem);$i++){
                echo "<li><a href='{$subSubMenuItem[$i]['link']}'><span>{$subSubMenuItem[$i]['subSubItem']}</span></a></li>";
            }
        }
        echo "</ul>";
    }
    
    public function AddMenuItems($items){}
    
    public function template(){
//         <li><a href="faculty/faculty.php" class="parent"><span>Faculty/Staff</span></a>
//                    <ul>
//                        <li><a href="faculty/faculty.php"><span><font color="#FF8080">Academic Faculty</font></span></a>
//
//                        </li>
//
//
//
//                        <li><a href="faculty/faculty.php"  class="parent"><span>Faculty Members</span></a>
//                            <ul>
//
//                                <li><a href="faculty/faculty.php"><span>Full-Time Faculty</span></a></li>
//                                <li><a href="faculty/faculty.php"><span>Part-Time Faculty</span></a></li>
//                            </ul>
//                        </li>
//                        <li><a href="faculty/faculty.php"><span>Visiting Faculty</span></a></li>
//
//                        <li><a href="faculty/faculty.php"><span>Post-Ret. Faculty</span></a></li>
//                        <li><a href="faculty/faculty.php"><span>Graduate Assistant</span></a></li>
//                        <li><a href="faculty/faculty.php"><span>Teaching Assistant</span></a></li>
//                        <li><a href="staff/staff.php"><span><font color="#FF8080">Administrative Staff</font></span></a>
//
//                        <li><a href="staff/staff.php"><span>Technical Staff</span></a></li>
//                        <li><a href="staff/staff.php"><span>Student Advisors</span></a></li>
//                </li>
//                </li>
//            </ul>
//                </li>
    }
}

?>
