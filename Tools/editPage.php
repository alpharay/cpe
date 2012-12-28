<?php //USING THE CKEDITOR
         require_once '../ClassesIncluded.php';
         //USING THE CKEDITOR; TO DO THIS, YOU'LL WILL HAVE TO INCLUDE THE 'ckeditor' FOLDER
         
         
         //create a class instance
         $ckeditting=new CKEditor();
         
         //do not print the code directly to browser, return it instead
         $ckeditting->returnOutput=true;
         
         //Path to CKEditor, ideally ,instead of relative dir, use an absolute path:
         //$ckeditting->basePath='/ckeditor/'
         //If not set, CKEditor will try to detect the correct path.
         $ckeditting->basePath='ckeditor/';
         
         //set global configuration (will be used for all instances of CKEditor).
         $ckeditting->config['width']=600;
         
         //change default textarea attributes
         $ckeditting->textareaAttributes=array("cols"=>80,"rows"=>10);
         
         //the initial value to be displayed in the editor
         $initialValue="This is what has to be displayed first";
         
         //creating the first instance
         $code=$ckeditting->editor("editor1",$initialValue);
         
         echo $code;
         ?>