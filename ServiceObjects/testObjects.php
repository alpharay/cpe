<?php ob_start();
//require_once 'PictureProcessing.php';
require_once '../ClassesIncluded.php';
?>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//THESE TWO LINES ARE FOR PROVIDING FUNCTIONALITY FOR UPLOADING filesInDirectory
/*$picUpload= new PictureProcessing();
$picUpload->firstPageImageLoad('testObjects.php',1);*/

   /* $item=new FacultyStaffOrMemService(); // FOR GETTING PICTURE FACULTY MEMBER PICTURE ON A PAGE, THIS SHOULD BE THERE
    $alumnusUser=$item->getByID(26);//THE PARAMETER WHEN IN USE SHOULD BE CHANGED FROM THE 26 TO THE MEMBER ID TO BE USED
            //echo $alumnusUser[0]->getFacLevID();
            
    echo "<table>";
    echo "<tr>";
    echo "<th rowspan='5' width='20%'><img src = 'getTest.php?id={$alumnusUser[0]->getMemberID()}' height='100px' width='100px' ></th>";
    echo "</tr></table>";*/

//FOR UPLOADING AND RETRIEVING THE PDF OF THE PERSON TO A FOLDER
$pdfUpload=new profileUploader();
//$pdfUpload->pdfIntoDirUploader();//uploading pdf into directory
$pdfUpload->getPdfFromDir(2);//getting the uploaded pdfs




//FOR UPLOADING AND RETRIEVING THE PDFs OF A PERSON FROM THE DATABASE
//$pdfUpload->pdfIntoDbUploader('testObjects.php',1);
//$pdfUpload->readPdfFromDb(2);
//echo $_SERVER['DOCUMENT_ROOT']."<br>";
//echo $_SERVER['HTTP_HOST']."<br>";
//echo $_SERVER['PHP_SELF']."<br>";
//echo $_SERVER['SCRIPT_FILENAME']."<br>";
/*
//FOR TESTING THE TABLE CLASS
$tableTester=new tableGenerator('col','');
//$tableTester->createtableHeaders();

$firstRow=array('Stephen C. Cox','$300','$50','Bob');
$secondRow=array('Josephin Tan','$150','-','Annie');
$thirdRow=array('Joyce Ming','$200','$35','Andy');
$fourthItem=array('James A. Pentel','$172','$23','Annie');
$tableData=array($firstRow,$secondRow,$thirdRow,$fourthItem);
$tableTester->generateTable13(array('Employee','Salary','Bonus','Supervisor'),$tableData);
        */
        ob_end_flush();
?>

