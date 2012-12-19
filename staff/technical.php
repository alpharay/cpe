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
<?php require_once '../Tools/topNavigationMenu.php'; ?>      
     
<?php     
//require_once('../Tools/PageLinkedSideMenu.php');

$staffLoginPgLnk='../CMS_Pages/staffLogin.php';
$item=new FacultyStaffOrMemService();

$item=new FacultyStaffOrMemService(); 
    

$sideMenuItem1=array('name'=>'Technical');   
$sideMenuItemList=array($sideMenuItem1);
    
    
$sidemenuLinkedPg=new PageLinkedSideMenu($staffLoginPgLnk);  
$sidemenuLinkedPg->createSideMenu($sideMenuItemList);
    ?>    
	
    <?php
    //$sidemenuLinkedPg->sideMenu_sPage();//currently customised for all full time teaching staff   
   // $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(7),'1',false,false);  
    $sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(9),'1',false,true);    
    //$sidemenuLinkedPg->genericSideMenu_sPage($item->getByFacLevID(8),'3',true,false);//the 'true' third parameter used to end the side menu
    ?>

</BODY>
</HTML>



