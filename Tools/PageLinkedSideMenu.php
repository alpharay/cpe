<?php
//require_once '../ServiceObjects/FacultyStaffOrMemService.php';
//require_once '../ServiceObjects/FacultyLevelService.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageLinkedSideMenu
 *
 * @author cyberdex
 */
class PageLinkedSideMenu {

    private $buider = "";
    private $stafforMemDetail='';
    private $facStafforMemPopulator='';
    private $loginLink="";

    public function PageLinkedSideMenu($loginLink=null) {
    $this->facStafforMemPopulator=new FacultyStaffOrMemService();
    $this->stafforMemDetail=$this->facStafforMemPopulator->getAll();
    $this->loginLink=$loginLink;
//    $stafforMemDetail[1]->getEmailAddress();
//    $stafforMemDetail[1]->getFacLevID();
//    $stafforMemDetail[1]->getFirstName();
//    $stafforMemDetail[1]->getMemStatusID();
//    $stafforMemDetail[1]->getMemProfile();
//    $stafforMemDetail[1]->getMemberID();
//    $stafforMemDetail[1]->getOtherNames();
//    $stafforMemDetail[1]->getPassWord();
//    $stafforMemDetail[1]->getQualification();
//    $stafforMemDetail[1]->getResearchInterest();
//    $stafforMemDetail[1]->getSurName();
//    $stafforMemDetail[1]->getUserName();
    }

    public function createSideMenu($sideMenuItems,$distinct='fas') {
        echo "<div id ='undergrad'>";
        echo "<div class='tabscontainer'>";
        echo "<div class='tabs'>";
        
        for($i=0;$i<sizeof($sideMenuItems);$i++){
            $tabMenuNo=$i+1;
            $id='tab_menu_'.$tabMenuNo;
        if($tabMenuNo==1){echo "<div class='tab selected first' id='tab_menu_{$tabMenuNo}'>";}
        else{echo "<div class='tab {$distinct}' id='tab_menu_{$tabMenuNo}'>";}
        echo "<div class='link'>{$sideMenuItems[$i]['name']}</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";
        
        
        
        /*echo "<div class='tab selected first' id='tab_menu_1'>";
        echo "<div class='link'>Full Time Faculty</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";
        
         
        echo "<div class='tab' id='tab_menu_2'>";
        echo "<div class='link'>Part Time Faculty</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";
        
        echo "<div class='tab' id='tab_menu_3'>";
        echo "<div class='link'>Visiting Scholars</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";

        echo "<div class='tab lab' id='tab_menu_4'>";
        echo "<div class='link'>Post Retirement Faculty</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";
        
        echo "<div class='tab fas' id='tab_menu_5'>";
        echo "<div class='link'>Graduate Assistant</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";

        echo "<div class='tab last' id='tab_menu_6'>";
        echo "<div class='link'>Teaching Assistant</div>";
        echo "<div class='arrow'></div>";
        echo "</div>";*/        
        }

        echo "</div>";    
        echo "<div class='curvedContainer'>";
    }

    public function sideMenu_sPage() {// THE PAGE THAT IS LINKED TO THE SIDE MENU
        $imageDisplayer=new FacultyStaffOrMemService();        
        echo "<div class='tabcontent' id='tab_content_1' style='display:block'>";
        echo "<strong><h3><font color='black'>Full Time Faculty</font></h3></strong><BR><BR>";
        for($i=0;$i<sizeof($this->stafforMemDetail);$i++)
        {        
        echo "<table bgcolor='#eeeeea' width='100%' border='0'>";
        echo "<tr>";
        //echo "<th rowspan='5' width='20%'><img src = '{$imageDisplayer->showStaffOrMemImage($this->stafforMemDetail[$i]->getMemberID())}' height='150px' ></th>";
        echo "<th rowspan='5' width='20%'><img src = 'getTest.php?id={$this->stafforMemDetail[$i]->getMemberID()}' height='150px' ></th>";        
        echo "<td><h4><font color='#000080'>{$this->stafforMemDetail[$i]->getFirstName()} {$this->stafforMemDetail[$i]->getOtherNames()} {$this->stafforMemDetail[$i]->getSurName()}</font></h4></td>";//name
        
        
        echo "</tr>";
        echo "<tr>";
        echo "<td> {$this->stafforMemDetail[$i]->getQualification()} </td>";//qualification
        echo "</tr>";
        echo "<tr>";
        echo "<td>{$this->stafforMemDetail[$i]->getEmailAddress()}</td>";//email Address
        echo "</tr>";
        echo "<tr>";//research interest
        echo "<td><font color='black'>Research Interest</font>: {$this->stafforMemDetail[$i]->getResearchInterest()}</td>";
        echo "</tr>";
        echo "<tr>";//profile
        echo "<td><a href = '../memberprofile/profile/index.php'>Profile</a></td>";
        echo "</tr>";
        echo "</table> <BR>";//end of the user's profile        
         }
        echo "<div>";          
    }
    
    
    //GENERIC SIDEMENU PAGE CREATOR FOR ALL PAGES
    public function genericSideMenu_sPage($grpOrPersonsToDisplay,$tabcontentid,$end=false,$researchInterestOff=true,$anchor='') {// THE PAGE THAT IS LINKED TO THE SIDE MENU        
        $facLevelName=new FacultyLevelService();
        $anchor='#'.$anchor;
        $tabContentID="tab_content_".$tabcontentid;
        if(!isset($grpOrPersonsToDisplay)or($grpOrPersonsToDisplay==Null)){$grpOrPersonsToDisplay=$this->stafforMemDetail;}
        //echo "<div class='tabcontent' id='tab_content_1' style='display:block'>";
        echo "<div class='tabcontent' id='{$tabContentID}'";if($tabcontentid==1)echo " style='display:block'>";else echo">";
        $facName=$facLevelName->getByID($grpOrPersonsToDisplay[0]->getFacLevID());
        
        if($this->loginLink==null){
        echo "<a name='{$anchor}'><strong><h3><font color='black'>{$facName[0]->getFacLevName()}</font></h3></strong></a><BR><BR>";
        }else {
            echo "<a name='{$anchor}'><strong><h3><font color='black'>{$facName[0]->getFacLevName()}</font></h3></strong></a><td><a href='{$this->loginLink}'>Login</a></td><BR><BR>";//name
        }  
        
        for($i=0;$i<sizeof($grpOrPersonsToDisplay);$i++)
        {     
        $_SESSION['md']=null;$_SESSION['flid']=null;    
        echo "<table bgcolor='#eeeeea' width='100%' border='0'>";
        echo "<tr>";
        //echo "<th rowspan='5' width='20%'><img src = '{$imageDisplayer->showStaffOrMemImage($this->stafforMemDetail[$i]->getMemberID())}' height='150px' ></th>";
        echo "<th rowspan='5' width='20%'><img src = 'getTest.php?id={$grpOrPersonsToDisplay[$i]->getMemberID()}' height='150px' width='110px' ></th>";
        echo "<td><h4><font color='#000080'>{$grpOrPersonsToDisplay[$i]->getFirstName()} {$grpOrPersonsToDisplay[$i]->getOtherNames()} {$grpOrPersonsToDisplay[$i]->getSurName()}</font></h4></td>";//name        
        echo "</tr>";
        echo "<tr>";
        echo "<td> {$grpOrPersonsToDisplay[$i]->getQualification()} </td>";//qualification
        echo "</tr>";
        echo "<tr>";
        echo "<td>{$grpOrPersonsToDisplay[$i]->getEmailAddress()}</td>";//email Address
        echo "</tr>";
        if($researchInterestOff==true){
        echo "<tr>";//research interest
        echo "<td><font color='black'>Research Interest</font>: {$grpOrPersonsToDisplay[$i]->getResearchInterest()}</td>";
        echo "</tr>";}
        echo "<tr>";//profile
        echo "<td><a href = '../memberprofile/profile/index.php?md={$grpOrPersonsToDisplay[$i]->getMemberID()}&flid={$grpOrPersonsToDisplay[$i]->getFacLevID()}&dl=1'>Profile</a></td>";
        echo "</tr>";
        echo "</table> <BR>";//end of the user's profile          
         }
        echo "</div>"; 
        if($end==true){
        echo "</div>";
        echo "</div>";
        echo "</div>";            
        }
        }

}

?>