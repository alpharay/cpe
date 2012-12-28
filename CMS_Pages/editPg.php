<?php //USING THE CKEDITOR
         require_once '../ClassesIncluded.php';
         require_once '../ServiceObjects/Cleaner.php';
         
        $timeout=new SessionTimeOuter();
        //$timeout->AutoTimeOut(10, "staffLogin.php?autoLgID=77");
        $timeout->AutoTimeOut(1800, "staffLogin.php");
        $picUploadOrUpdater=new PictureProcessing();
        
        
        if(isset($_POST['changePic1'])||isset($_POST['UploadPic1'])){
            if(isset($_POST['changePic1']))header("location: picUploadUpdate.php?ch={$_POST['changePic1']}&memID={$_POST['memID']}&facLevID1={$_POST['facLevID1']}"); 
            if(isset($_POST['UploadPic1']))header("location: picUploadUpdate.php?up={$_POST['UploadPic1']}&memID={$_POST['memID']}&facLevID1={$_POST['facLevID1']}"); 
            
          /*if(isset($_POST['changePic1'])&&!($_POST['changePic1']='')||isset($_SESSION['memID1'])){
             if(isset($_POST['ch']))$_SESSION['memID1']=$_POST['memID'];
          $picUpload->firstPageImageLoad('editPg.php',$_SESSION['memID1'],"update");          
          }
          elseif(isset($_POST['UploadPic1'])&&!($_POST['UploadPic1']='')||isset($_SESSION['memID'])){//echo "Here";  
              if(isset($_POST['UploadPic1']))$_SESSION['memID']=$_POST['memID'];
          $picUpload->firstPageImageLoad('editPg.php',$_SESSION['memID'],"upload");           
          }*/
          }
        
        //CHECKING FOR REDIRECT FROM staffBase.php,AlumnusBase.php or editPage.php page         
         if((isset($_POST['edit'])||isset($_SESSION['memID']))&&(!isset($_POST['logout'])))
         {
             //Session variables set to the corresponding post vaiables if redirect is from staffBase.php
             //or AlumnusBase.php. if it is from editPage.php, these session variables would already have 
             //been reseted and would not need to be reset again
             if(isset($_POST['memID'])){
                 //cleaning the post variables
                 $sqlCleaner=new Cleaner();
                 $cleanMemID=$sqlCleaner->mysql_prep($_POST['memID']);
                 $cleanFirstName=$sqlCleaner->mysql_prep($_POST['firstName']);
                 $cleanOtherName=$sqlCleaner->mysql_prep($_POST['otherName']);
                 $cleanSurName=$sqlCleaner->mysql_prep($_POST['surName']);
                 $cleanEmailAddr=$sqlCleaner->mysql_prep($_POST['emailAddr']);
                 
             $_SESSION['memID']=$cleanMemID;
             $_SESSION['firstName']=$cleanFirstName;
             $_SESSION['otherName']=$cleanOtherName;
             $_SESSION['surName']=$cleanSurName;
             $_SESSION['emailAddr']=$cleanEmailAddr;
             }
          if(isset($_GET['successIndicator'])&&($_GET['successIndicator']==1)){
               echo "<div style=\"color: green;\">Edit successful</div><br><br/>";
          }
          
          echo "<form action='editPage.php' method='POST'>";          
          echo "<input type='hidden' name='editMemID' value='{$_SESSION['memID']}'>";
          echo "<label>FIRSTNAME:<label/><input type='texbox' name='editFirstName' value='{$_SESSION['firstName']}'><br/>";
          echo "<label>OTHER NAMES:<label/><input type='texbox' name='editOtherName' value='{$_SESSION['otherName']}'>&nbsp&nbsp";
          echo "<label>SURNAME:<label/><input type='texbox' name='editSurname' value='{$_SESSION['surName']}'><br/>";
          echo "<label>EMAIL:<label/><input type='texbox' name='editEmailAd' value='{$_SESSION['emailAddr']}'><br/>";
          //echo "<label>PROFILE:<label/><input type='texbox' name='editMemProfile' value='{$_POST['memProfile']}'>";
          echo "<br/><br/>";
          echo "<label>SECTION TO EDIT:&nbsp<label/>";
         
          $docNameFinder=new PersonalDocsLevelService();
          $docNames=$docNameFinder->getAll();
          
          echo "<select name='docNameSelected' >";
          for($i=0;$i<sizeof($docNames);$i++){
              //$docName[$i]->getAll()->getDocLevID();
          echo "<option>{$docNames[$i]->getDocLevID()}:{$docNames[$i]->getDocName()}";
          }
         echo "</select>";
         echo "<br/><br/>";
         echo "<input type='submit' name='submitEditPg' value='EDIT'>";
         echo "</form>";         
          
         }else {
             if(isset($_POST['logout'])){                 
                $authenticationCloser=new AuthorizationAndConf();
                $authenticationCloser->logout('../faculty/faculty.php');             
             }
             //echo $_POST['confirm'];             
             } 
             
         //code for editing and updating the database    
         if(isset($_POST['submit'])){         
         $updatedStaffOrMem=new FacultyStaffOrMem();
         $updater=new FacultyStaffOrMemService();
         $sqlCleaner=new Cleaner();
         //cleaning the post variables
         $cleanEditMemID=$sqlCleaner->mysql_prep($_POST['editMemID']);
         $cleanEditFirstName=$sqlCleaner->mysql_prep($_POST['editFirstName']);
         $cleanEditOtherName=$sqlCleaner->mysql_prep($_POST['editOtherName']);
         $cleanEditSurName=$sqlCleaner->mysql_prep($_POST['editSurname']);
         $cleanEditMemProf=$sqlCleaner->mysql_prep($_POST['editMemProfile']);
         
         $updatedStaffOrMem->setMemberID($cleanEditMemID);
         $updatedStaffOrMem->setFirstName($cleanEditFirstName);         
         $updatedStaffOrMem->setOtherNames($cleanEditOtherName);
         $updatedStaffOrMem->setSurName($cleanEditSurName);
         $updatedStaffOrMem->setMemProfile($cleanEditMemProf);
         //$updatedStaffOrMem->setResearchInterest($_POST['editor1_ResearchInt']);
         
         //$updater->updateByStaffOrMem($updatedStaffOrMem);
        
         
         }else{echo "*";echo "<br/><br/><a href='staffBase.php' style=\"color:blue; font-size:18px\">back</a>";}
         ?>