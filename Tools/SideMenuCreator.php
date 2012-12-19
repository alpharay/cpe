<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SideMenuCreator
 *
 * @author cyberdex
 */
class SideMenuCreator {
    //put your code here
    private $builder="";
    public function SideMenuCreator($arrowPicLink){
        echo  "<div id = 'upcoming'><!--THIS IS FOR THE SIDE-MENU-->";
        echo  "<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color='#804000'>UPCOMING NEWS</font></h4>";
        
        
        echo  "<img src='{$arrowPicLink}' class='previous'/>";
        echo  "<div id='newsticker-demo'><!--this id helps it to use the carousel effect provided by the jquery above-->";
        echo  "<ul>";
    }
   
    public function addToSideMenu($item,$link,$extra,$more_info){
        echo  "<li>";
        echo  "<p>";
        echo  "<span class='title'>{$item}: </span><a href='{$link}'>{$extra}</a><br>";
        echo  "{$more_info} .";
        echo  "</p>";
        echo  "</li>";        
    }
    
    public function endSideMenu($downArrowPickLink){
        echo  "</ul>";        
        echo  "</div>";
        echo  "<img src='{$downArrowPickLink}' class='next'/>";
        echo  "</div>";


        //echo $this->builder;
    }
}

?>
