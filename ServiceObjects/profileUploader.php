<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profileUploader
 *
 * @author cyberdex
 */
require_once 'ConnectionToUG.php';

class profileUploader {     
    
    //put your code here
    
    //Template for basic file upload
    
    //$personalUploadingID indicates the Id of the person doing the pdf upload
    //$uploadDir indicate the directory to which the id has been uploaded
    public function uploadFile($personUploadingID=1,$uploadDir='/opt/lampp/htdocs/cpe/pdfFiles/'){
        
         $uploaddir = $uploadDir; //Relative path under webroot
         $uploadfile = '';         

        if (isset($_POST['upload'])) {
            /* $uploadfile= $uploaddir.basename($_FILES['userfile']['name']); */
            
            //$prefixer is to prefix the uploaded pdf with the id of the person uploading the file
            //this to ensure that uploaders can keep track of their files
            $prefixer=$personUploadingID."_".$_FILES['upfile']['name'];
;
            $uploadfile = tempnam($uploaddir,$prefixer);

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded to.$uploadfile.\n";
            } else {
                echo "File uploading failed. \n";
            }
        } else {
            echo "No file upload done yet ";
        }
    }

    //public function pdfIntoDirUploader($personUploadingID='1',$uploadDir='/opt/lampp/htdocs/cpe/pdfFiles/') {//for uploading the pdf into a directory
  public function pdfIntoDirUploader($personUploadingID='1',$uploadDir='/home/cyberdex/Desktop/mov/') {//for uploading the pdf into a directory
    
        
        $uploaddir = $uploadDir; //Relative path under webroot
        $uploadfile = '';
        
        //I just set this for testing purposes in actual program, this variable should come external from another page(ie via a form) or be passed to the function
        //$_POST['upload']='set';
        

        if (isset($_POST['upload'])) {
            /* $uploadfile= $uploaddir.basename($_FILES['userfile']['name']); */
            $prefixer=$personUploadingID."_".basename($_FILES['userfile']['name']);
            
            $uploadfile = tempnam($uploaddir,$prefixer);
            $newFileName=$uploaddir.$prefixer;

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $newFileName)) {
                echo "File is valid, and was successfully uploaded to $uploaddir \n";
            } else {
                echo "File uploading failed. \n";
            }
        } else {
            echo "No file upload done yet ";
        }
    }
    
    public function getPdfFromDir($userID=1,$relativeDirForPdfs="../pdfFiles/"){//for reading the pdfs from the directory
        //for displaying all the uploaded one $userID is used to get the pdfs for the user with that id
 
//get all filePlusDirectoryPath files with a .pdf extension.
$filesInDirectory = glob($relativeDirForPdfs . "*.pdf");
 
//print each file name
foreach($filesInDirectory as $filePlusDirectoryPath)
{
$fileName=explode("/", $filePlusDirectoryPath);
$fileName=end($fileName);

$fileNameMinusID=explode("_",$fileName);
$fileOwnerId=$fileNameMinusID[0];
if($fileOwnerId==$userID)
    {
echo "<br/>$fileOwnerId&nbsp<a href='../../cpe/pdfFiles/$fileName'>".end($fileNameMinusID)."</a>";
}

}        
    }

    public function pdfIntoDbUploader($page, $memberID) {//for uploading the pdf into a table in the database
        echo "<html>";
        echo "<head>";
        echo "<title>Upload an pdf</title>";
        echo "</head>";
        echo "<body>";
        echo "<form action='{$page}' method='POST' enctype='multipart/form-data'>";
        echo "File:" . "<input type='file' name='pdf'><input type='submit' value='Upload'>";
        echo "</form>";

        if (isset($_FILES['pdf']['tmp_name'])) {
            $file = $_FILES['pdf']['tmp_name'];
        }else
            $file = NULL;

        if (!isset($file)) {//PAGE GIVES THIS FIRST WHEN THE FUNCTION IS LOADED
            $message = "Please select a file";
            echo $message;
        } else {
            if ($file != NULL) {
                //echo $_FILES['pdf']['tmp_name'];
                $pdf = addslashes(file_get_contents($_FILES['pdf']['tmp_name']));
                $pdf_name = addslashes($_FILES['pdf']['name']);
                $pdf_size = filesize($_FILES['pdf']['tmp_name']);

                $AppRoot = $_SERVER['DOCUMENT_ROOT']; //for getting the root of the path
                $path = $AppRoot . '/cpe/'; //path to the project folder

                if ($pdf_size == FALSE)
                    echo "That's not a pdf";
                else {
                    if (!$pdfInsertion = mysql_query("INSERT INTO profilePdfs VALUES('','$memberID','$pdf_name','$pdf')")) {
                        echo "Problem Uploading the pdf";
                    } else {
                        $lastid = mysql_insert_id();
                        echo "Your pdf uploaded.";
                        //echo "<p/>Your pdf:<p/><img src='getTest.php?id={$lastid}'>";
                    }
                }
            }else
                echo "Please select an pdf first"; //THIS IS VALID WHEN UPLOAD IS PRESSED WITHOUT SELECTING AN IMAGE FIRST
        }

        echo "</body>";
        echo "</html>";
        //return $firstPage;
    }

    public function secondPagePdfGet() {
        $id = addslashes($_REQUEST['id']);
        $pdf = mysql_query("SELECT * FROM profilePdfs WHERE pdfID={$id}");
        $pdf = mysql_fetch_assoc($pdf);
        $pdf = $pdf['image'];
        file_put_contents("profile.pdf", $pdf);
        header("Content-type: application/pdf"); //to tell the browser that we would be outputting a pdf file
        //to prompt the user to save the file which would also be called downloaded.pdf
        header('Content-Disposition: attachment; filename="profile.pdf"');


        //for reading the pdf source
        //readfile('');
        echo $pdf;
    }

    public function readPdfFromDb($id) {
        $pdfHandler = mysql_query("select * from profilePdfs where pdfID={$id}");
        $pdfHandler = mysql_fetch_assoc($pdfHandler);
        $pdfHandler = $pdfHandler["pdf"];
        $file = "profile.pdf";
        if (@file_put_contents($file, $pdfHandler) == true)
            echo "Successful read \n";
        else
            echo "read didn't work";
        //echo $pdfHandler;
        
        
        //THIS SECTION IS FOR PROMPTING THE USER TO DOWNLOAD THE PDF
        // We'll be outputting a PDF
       header('Content-type: application/pdf');

// It will be called downloaded.pdf
        header('Content-Disposition: attachment; filename="downloaded.pdf"');

// The PDF source is in original.pdf
        readfile('profile.pdf');
    }

}

?>
