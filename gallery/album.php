<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $page=$_SERVER['PHP_SELF'];
        
        //settings
        $column=3;
        
        //directories
        $base='data';
        $thumbs='thumbs';
        
        //get album
        if(isset($_GET['album'])){$get_album=$_GET['album'];}else{$get_album=false;}
        
        if(!$get_album){//this portion displays the albums available
          echo "<b>Select an album</b><p/>"; 
          $handle=opendir($base);
          while(($file=readdir($handle))!==false){
              if(is_dir($base."/".$file) && $file!='.'&& $file!='..' && $file != $thumbs){
                 
                  echo "<a href='$page?album=$file'>$file</a><br/>";
              }
          }closedir($handle);
        }else{//this portion displays the contents of each album
            if(!is_dir($base."/".$get_album) || strstr($get_album,".")!=NULL|| strstr($get_album,"/")!=NULL|| strstr($get_album,"\\")!=NULL){
                echo "Album doesn't exist";
            }else{
                $counter=0;
                echo "<b>$get_album</b><p/>";
                $handle=opendir($base."/".$get_album);
                while(($file=readdir($handle))!==false){
                    if($file!="." &&  $file!=".."){
                    echo "<table style='display: inline;'><tr><td><a href='$base/$get_album/$file'><img src='$base/$thumbs/$file' height='100' width='100'></a></td></tr></table>";                    
                    $counter++;
                    if($counter==$column){
                        echo "<br/>";
                        $counter=0;
                    }
                    }
                    }
                    closedir($handle);
                    echo "<p/><a href='$page'>Back to album</a>";
                 }
            }
        
        
        ?>
    </body>
</html>
