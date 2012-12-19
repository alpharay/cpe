<?php ob_start();
//require_once 'PictureProcessing.php';
require_once '../ClassesIncluded.php';
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//THESE TWO LINES ARE FOR PROVIDING FUNCTIONALITY FOR UPLOADING IMAGES
         $picUpload= new PictureProcessing();
          //$picUpload->firstPageImageLoad('picUploadUpdate.php',1,"update");          

        if(isset($_GET['ch'])&&!($_GET['ch']='')||isset($_SESSION['memID1'])){
             if(isset($_GET['ch'])){$_SESSION['memID1']=$_GET['memID'];$_SESSION['facLevID1']=$_GET['facLevID1'];}
          $picUpload->firstPageImageLoad('picUploadUpdate.php',"staffBase.php",$_SESSION['memID1'],"update",$_SESSION['facLevID1']);          
          }
          elseif(isset($_GET['up'])&&!($_GET['up']='')||isset($_SESSION['memID'])){//echo "Here";  
              if(isset($_GET['up'])){$_SESSION['memID']=$_GET['memID'];$_SESSION['facLevID2']=$_GET['facLevID1'];}
          $picUpload->firstPageImageLoad('picUploadUpdate.php',"staffBase.php",$_SESSION['memID'],"upload",$_SESSION['facLevID2']);          
          }

   /* $item=new FacultyStaffOrMemService(); // FOR GETTING PICTURE FACULTY MEMBER PICTURE ON A PAGE, THIS SHOULD BE THERE
    $alumnusUser=$item->getByID(26);//THE PARAMETER WHEN IN USE SHOULD BE CHANGED FROM THE 26 TO THE MEMBER ID TO BE USED
            //echo $alumnusUser[0]->getFacLevID();
            
    echo "<table>";
    echo "<tr>";
    echo "<th rowspan='5' width='20%'><img src = 'getTest.php?id={$alumnusUser[0]->getMemberID()}' height='100px' width='100px' ></th>";
    echo "</tr></table>";*/

//FOR UPLOADING THE PDF OF THE PERSON
//$pdfUpload=new profileUploader();
//$pdfUpload->pdfIntoDbUploader('testObjects.php',1);
//$pdfUpload->readPdfFromDb(2);
//echo $_SERVER['PHP_SELF'];
        
        ob_end_flush();
?>

