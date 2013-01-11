<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PictureProcessing
 *
 * @author cyberdex
 */
require_once 'ConnectionToUG.php';

class PictureProcessing {
    //put your code here
	
    public function PictureProcessing(){       
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }
  
    
    public function personHasPic($memID){//this is to verify that person with indicated id has a picture uploaded already or not
      $id =$memID;
      $image=mysql_query("SELECT * FROM imageStore WHERE imageID={$id}");
      $noOrRows=mysql_num_rows($image);
      
      if($noOrRows<1)return false;
      else{
      return true;
      }           
    }
    
    //FIRST PAGE FROM WHICH THE IMAGE IS SUPPOSE TO BE BOUNCED
    public function firstPageImageLoad($page,$backPg,$memberID,$operation,$memberLevID){
    
    echo "<html>";
    echo "<head>";
    echo "<title>Upload an image</title>";
    echo "</head>";
    echo "<body>";
    echo "<form action='{$page}' method='POST' enctype='multipart/form-data'>";
    echo "File:"."<input type='file' name='image'><input type='submit' value='Upload'>";
    echo "</form>";
    
    if(isset($_FILES['image']['tmp_name'])){
    $file=$_FILES['image']['tmp_name'];
        }else $file=NULL;
        
    if(!isset($file)){//PAGE GIVES THIS FIRST WHEN THE FUNCTION IS LOADED
        $message= "Please select a file";
        echo $message;       
    }else{
        if($file!=NULL){
        //echo $_FILES['image']['tmp_name'];
        $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name=addslashes($_FILES['image']['name']);
        $image_size=getimagesize($_FILES['image']['tmp_name']);
        
        $AppRoot=$_SERVER['DOCUMENT_ROOT'];//for getting the root of the path
        $path=$AppRoot.'/cpe/';//path to the project folder
        
        if($image_size==FALSE)echo "That's not an image";
        else{
           //for insertion of new picture 
            if($operation=="upload"){
           if(!$imageInsertion=mysql_query("INSERT INTO imageStore VALUES('$memberID','{$memberLevID}','$image_name','$image')"))
           {
               echo "Problem Uploading the image<br>";
               echo "<a href='{$backPg}'>back</a>";
           }else{
               $lastid=mysql_insert_id();     
               $_SESSION['memID']=null;
               $_SESSION['facLevID2']=null;
               echo "Your image uploaded.<p/>Your image:<p/><img src='getTest.php?id={$lastid}'><br/>";
               echo "<a href='{$backPg}'>back</a>";
           }
            }
           //for update of old pictures; ie changing profile pic
           elseif($operation=="update"){
           if(!$imageInsertion=mysql_query("UPDATE imageStore SET image='{$image}' WHERE imageID='{$memberID}'"))
           {
               echo "Problem Updating the image</br>";
               echo "<a href='{$backPg}'>back</a>";
           }else{
               $lastid=mysql_insert_id();
               $_SESSION['memID1']=null;
               $_SESSION['facLevID1']=null;
               echo "Your image updated.<p/>Your image:<p/><img src='getTest.php?id={$lastid}'><br/>";
               echo "<a href='{$backPg}'>back</a>";
           }    
           } 
        }
        
        }else echo "Please select an image first";//THIS IS VALID WHEN UPLOAD IS PRESSED WITHOUT SELECTING AN IMAGE FIRST
    }
    
    echo "</body>";
    echo "</html>";
    //return $firstPage;
    }
    
    
    //SECOND PAGE FROM WHICH THE IMAGE IS SUPPOSE TO BOUNCE
    public function secondPageImageGet(){
      $id =addslashes($_REQUEST['id']);
      $image=mysql_query("SELECT * FROM imageStore WHERE imageID={$id}");
      $noOrRows=mysql_num_rows($image);
      
      if($noOrRows<1)$image='no image';//where no image exists for the particular id given
      else{
      $image=mysql_fetch_assoc($image);
      $image=$image['image'];      
      header("Content-type: image/jpeg");      
      }      
      echo $image;
    }
    //other functions
    
	public function generatePicAndAlbumPanel($imagePanel){        
      echo "<div id='content'>";
	  $choice='fade';
	  $cnt = 0;
	  $cl = 0;
	  for( $i = 0; $i < sizeof($imagePanel); $i++){
          //if($i<3)$choice='fade';else $choice='fade';
		  $j = $i+1;
		  if ($cnt == 3) { $cnt = 0; $cl++;}
		  $top = 10+(90*$cl);
		  $left = 10+(330*($i%3));
		  $cnt++;
		  echo '<div class="mosaic-block fade" style="top:'. $top .'px; left:'.$left.'px;">';
		  echo "<a href='{$imagePanel[$i]['link']}' class='mosaic-overlay'>";
		  echo "<div class='details'>";
		  echo "<img src='../img/{$imagePanel[$i]['image']}' id='".$i."' onClick='setCookie(".$i.")' />";
		  // echo "<p>Click To View</p>";
		  echo "</div>";
		  echo "</a>";
		  echo "<div class='mosaic-backdrop'><img src='{$imagePanel[$i]['linkImage']}' /></div>";
		  echo "</div>";
		  }
	echo "</div>";
    }
	
	public function createAlbum($imagePanel, $album_name, $logo, $overlay_logo){
		$link = "../gallery/display.php";
		array_push($imagePanel, array('name'=>$album_name,'image'=>'../img/'. $logo,'link'=>$link,'linkImage'=>'../img/'. $overlay_logo));
		return $imagePanel;
		}
	
	public function getAlbumImages($imagePanel)
	{
		echo "<br/>";
		if( isset($_COOKIE["index"])) {
			$ind = $_COOKIE["index"];}
		echo '<div id="thumbs" class="navigation">
				<ul class="thumbs noscript">';
		$result = mysql_query("SELECT * FROM galleryimages WHERE album_name = '" . $imagePanel[$ind]['name'] . "';");
		
		while($row = mysql_fetch_array($result))
		{
			echo '<li>
					<a class="thumb" name="leaf" href="../gallery/images/' . $row['picture_name'] . '" title="' . $imagePanel[$ind]['name'] . '">
						<img src="../gallery/images/' . $row['picture_name'] . '" width="80" height="70" alt="' . $imagePanel[$ind]['name'] . '" /></a>
							<div class="caption">
								<div class="download">
									<a href="../gallery/images/' . $row['picture_name'] . '">Download Original</a>
								</div>
								<!--<div class="image-title">' . $imagePanel[$ind]['name'] . '</div>-->
								<div class="image-desc">' . $row['picture_description'] . '</div>
							</div>
						</li>';
			}
		echo '</ul></div>';
		}
    
    //FOR PROCESSING PICS IN ALBUMS AND THOSE NOT IN ALBUMS
    //CAN BE CUSTOMISED AND USED WITH ANY JQUERY AS displayImages below(a customised version of 
    //this function)
    public function getAlbumPics($base,$picLimit,$get_album=NULL){
        $thisFile=$_SERVER['PHP_SELF'];        
        $picCounter = 0;  
        $i=0;        
        $directoryList=array();//for building the directory list per directory
        $exceptionFound=false;
        
        if(strstr($get_album,".")!=NULL|| strstr($get_album,"/")!=NULL|| strstr($get_album,"\\")!=NULL) {echo "Not a directory";$exceptionFound=true;}
        
        if($exceptionFound==false){
        $handle = opendir($base);
        while (($pics = readdir($handle)) !== false) {
            //checking to see if it is a file            
            
          //echo "<li><a href='slides/$pics'><img src='$base/$pics'></a></li>";  
            if (!is_dir($base . "/" . $pics) ) {

               echo "<table style='display:inline;'><tr><td><img src='$base/$pics' height=10 width=10></td></tr></table>";              
                $picCounter++;
                if ($picCounter == $picLimit) {
                    echo "<br/>";
                    $picCounter = 0;
                }
            }
            //checking to see if it is a directory
            if (is_dir($base . "/" . $pics) && ($pics != ".") && ($pics != "..")) {  
                //array counter;
                $album=$pics; //the pic is an album instead
                $directoryList[]="$album";
                $i++;                
            }           
        }   
        closedir($handle);
        }
      for($j=0;$j<sizeof($directoryList)&&sizeof($directoryList)!=0;$j++)
      {
          $link=$base."/".$directoryList[$j];
          //echo "<br/><a href='$link'>$directoryList[$j]</a>";     
         echo "<br/><a href='$thisFile?album=$directoryList[$j]'>$directoryList[$j]</a>";
		}
    }
    
    //UPGRADED FORM OF getAlbumPics ABOVE; works with the slideshow jquery in 
    //'xposure/gallery.php'
    public function displayImages($base,$thumbs,$picLimit,$get_album=NULL){ 
        $thisFile=$_SERVER['PHP_SELF'];        
        $picCounter = 0;  
        $i=0;        
        $directoryList=array();//for building the directory list per directory
        $exceptionFound=false;
        
        if(strstr($get_album,".")!=NULL|| strstr($get_album,"/")!=NULL|| strstr($get_album,"\\")!=NULL) {echo "Not a directory";$exceptionFound=true;}
        
        if($exceptionFound==false){
        $handle = opendir($base);
        while (($pics = readdir($handle)) !== false) {
            //checking to see if it is a file            
            
          
            if (!is_dir($base . "/" . $pics) ) {
               echo "<li><a class='selected' href='$base/$pics'><img src='$thumbs/$pics'></a></li>";               
            }
            //checking to see if it is a directory
            if (is_dir($base . "/" . $pics) && ($pics != ".") && ($pics != "..")) {  
                //array counter;
                $album=$pics; //the pic is an album instead
                $directoryList[]="$album";
                $i++;                
            }          
        }   
        closedir($handle);
        }
      for($j=0;$j<sizeof($directoryList)&&sizeof($directoryList)!=0;$j++)
      {
          $link=$base."/".$directoryList[$j];
          //echo "<br/><a href='$link'>$directoryList[$j]</a>";     
         echo "<br/><a href='$thisFile?album=$directoryList[$j]'>$directoryList[$j]</a>";
      }
    }
}
?>
