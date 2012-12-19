<?php ob_start();?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    
</head>  
     <body>        
        <div id="container">
          <?php require_once '../Tools/topNavigationMenu.php';?>        
            
     <?php 
    
    $staffLoginPgLnk='../CMS_Pages/staffLogin.php';
    $item=new FacultyStaffOrMemService(); 
    
    $sideMenuItem1=array('name'=>'Full Time Faculty');
    $sideMenuItem2=array('name'=>'Part Time Faculty');
    $sideMenuItem3=array('name'=>'Visiting Scholars');
    $sideMenuItem4=array('name'=>'Post Retirement Faculty');
    $sideMenuItem5=array('name'=>'Graduate Assistant');
    $sideMenuItem6=array('name'=>'Teaching Assistant','last');
    $sideMenuItemList=array($sideMenuItem1,$sideMenuItem2,$sideMenuItem3,$sideMenuItem4,$sideMenuItem5,$sideMenuItem6);
    
    
    $sidemenuLinkedPg=new PageLinkedSideMenu($staffLoginPgLnk);  
    $sidemenuLinkedPg->createSideMenu($sideMenuItemList);
    ?>    
	
    <?php
    //$sidemenuLinkedPg->sideMenu_sPage();//currently customised for all full time teaching staff   
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(1),'1');  
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(2),'2');
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(3),'3');
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(4),'4');
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(5),'5');
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(6),'6',true,'teaching');//the 'true' third parameter used to end the side menu
    ?>

</BODY>
</HTML>

