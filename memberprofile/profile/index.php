<?php 
 include_once("common/doctype-and-head.php"); 
 require_once '../../ClassesIncluded.php'; 
?>

<body id="index">

	<?php include_once("common/nav-and-title.php"); ?>

 <p>
       <?php
       if(isset($_GET['dl'])){
       $level=$_GET['dl'];
       if(isset($_GET['md']))$_SESSION['md']=$_GET['md'];
       $memID=$_SESSION['md'];       
       }
       
       if(isset($level)&&($level!=null)){
       $pdocLev=new PersonalDocsLevelService();
       $pdoc=new PersonalDocsService();
       
       $docNameGet=$pdocLev->getByID($level);
       $docOut=$pdoc->getByMemID_DocLevID($memID, $level);
           
 echo "<h2>{$docNameGet[0]->getDocName()}</h2>";  
      
        if($docOut!=false){
        for($i=0; $i<sizeof($docOut);$i++){
            echo "{$docOut[$i]->getDoc()}<br/>";
        }
        }
            }
?>

<p>

<?php include_once("common/footer.php"); ?>

