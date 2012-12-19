<SCRIPT language="javascript">
    var textBoxNameCounter=4;
    function add(type) {
   
        //Create an input type dynamically.    
        textBoxNameCounter++;
    
        var labeller=document.createElement("label");
        var labelText=textBoxNameCounter-4;
        labeller.innerHTML='new'+labelText+'. ';
    
        var element = document.createElement("input");
        var breaker = document.createElement("br");
        var name= type + textBoxNameCounter;
 
        //Assign different attributes to the element.    
        element.setAttribute("type", type);
        //element.setAttribute("value", type);
        //element.setAttribute("name", type);
        element.setAttribute("name", name);
        element.setAttribute("size",100);
 
        var foo = document.getElementById("fooBar");
 
        //Append the element in page (in span).
    
        foo.appendChild(labeller).appendChild(element);
        foo.appendChild(breaker);
    
 
    }
</SCRIPT>
<?php
//USING THE CKEDITOR
require_once '../ClassesIncluded.php';
require_once '../ServiceObjects/Cleaner.php';

 $timeout=new SessionTimeOuter();
 //$timeout->AutoTimeOut(10, "staffLogin.php?autoLgID=77");
 $timeout->AutoTimeOut(1800, "staffLogin.php");

//for getting the text box values that are sent here via post         
/* $textBoxVariables=$_POST;        
  foreach($textBoxVariables as $key=>$value){
  if(preg_match("|text(\d)+|",$key)){
  echo $key.":".$value."<br/>";}

  $personalDocEditor=new PersonalDocs();
  $personalDocEditor->setMemberID($memberID);
  $personalDocEditor->setDocLevID($docLevID);
  $personalDocEditor->setDoc($doc);

  } */

//seperating the document's level id and the document's name 
if (isset($_POST['submitEditPage'])) {//for submissions made by this page to itself
     $sqlCleaner=new Cleaner();
     $clean_docNameSelec=$sqlCleaner->mysql_prep($_POST['_docNameSelected']);
    list($docLev, $docName) = explode(':', $clean_docNameSelec);
    //echo "{$_POST['editMemID']},{$docLev}";
    $valueToBeEditted = '';

    $personalDoc = new PersonalDocsService();
    $clean_editMemID=$sqlCleaner->mysql_prep($_POST['_editMemID']);
    $personalDocEditor = $personalDoc->getByMemID_DocLevID($clean_editMemID, $docLev);


    //for getting the text box values that are sent here via post
    $textBoxVariables = $_POST;

    //for editing personal data
    $updatedStaffOrMem = new FacultyStaffOrMem();
    $updater = new FacultyStaffOrMemService();

    //for editing personal docs

    //cleaning post variables
    $clean_editMemID=$sqlCleaner->mysql_prep($_POST['_editMemID']);
    $clean_editFirstName=$sqlCleaner->mysql_prep($_POST['_editFirstName']);
    $clean_editOtherName=$sqlCleaner->mysql_prep($_POST['_editOtherName']);
    $clean_editSurName=$sqlCleaner->mysql_prep($_POST['_editSurname']);
    $clean_editEmailAd=$sqlCleaner->mysql_prep($_POST['_editEmailAd']);

    
    $updatedStaffOrMem->setMemberID($clean_editMemID);
    $updatedStaffOrMem->setFirstName($clean_editFirstName);
    $updatedStaffOrMem->setOtherNames($clean_editOtherName);
    $updatedStaffOrMem->setSurName($clean_editSurName);
    $updatedStaffOrMem->setEmailAddress($clean_editEmailAd);
    $updatedStaffOrMem->setMemProfile($_POST['_editMemProfile']);
    $updatedStaffOrMem->setResearchInterest($_POST['editor1_ResearchInt']);

    $updater->updateByStaffOrMem($updatedStaffOrMem);

    
    if(isset($_POST['textBoxFlag'])){
    foreach ($textBoxVariables as $key => $value) {

        if (preg_match("|texxt:(\d)+|", $key)) {//text received via these text boxes used for updates; not insertions
            list($halftxtboxName,$docid)=explode(":", $key);
            echo $key . ":" . $value . "<br/>";  
            $personalDocData = new PersonalDocs();
            $personalDocEditor = new PersonalDocsService();

            //cleaning post variables
            $clean_editMemID=$sqlCleaner->mysql_prep($_POST['_editMemID']);
            
            $personalDocData->setMemberID($clean_editMemID);
            $personalDocData->setDocLevID($docLev);
            $personalDocData->setDoc($value);
            $personalDocData->setPersonalDocID($docid);
            $personalDocEditor->updateDocFieldByPD_ID($personalDocData); //sending the textbox based updates to the database 
        }

        if (preg_match("|text(\d)+|", $key)) {//text received via these text boxes used for insertions
            echo $key . ":" . $value . "<br/>";


            //changing the personal data to reflect on the various pages; such as profile, research etc of individual
            $personalDocData = new PersonalDocs();
            $personalDocEditor = new PersonalDocsService();
            
            //cleaning post variables
            $clean_editMemID=$sqlCleaner->mysql_prep($_POST['_editMemID']);

            $personalDocData->setMemberID($clean_editMemID);
            $personalDocData->setDocLevID($docLev);
            $personalDocData->setDoc($value);

            $personalDocEditor->Add($personalDocData); //sending the edits to the database       
        }
    }
    header("location: editPg.php?successIndicator=1");
    }
    
    
    //FOR TEXTAREA UPDATES
    if (isset($_POST['editor1_ResearchInt'])) {
 
  //cleaning post variables
   $sqlCleaner=new Cleaner();
   $clean_editMemID=$sqlCleaner->mysql_prep($_POST['_editMemID']); 
   $clean_editor1_ReschInt=$sqlCleaner->mysql_prep($_POST['editor1_ResearchInt']); 
        
  //for editing personal data
  $personalDocData = new PersonalDocs();
  $personalDocEditor = new PersonalDocsService();

  $personalDocData->setMemberID($clean_editMemID);
  $personalDocData->setDocLevID($docLev);
  $personalDocData->setDoc($clean_editor1_ReschInt);
  
  //EITHER ADDITION OR UPDATE DONE
  if($personalDocEditor->getByMemID_DocLevID($clean_editMemID, $docLev)==0){
      $personalDocEditor->Add($personalDocData);
  }else{ 
      $personalDocEditor->updateDocField($personalDocData); //sending the edits to the database 
  }
  
  header("location: editPg.php?successIndicator=1");
  }
}


if(isset($_POST['docNameSelected']))list($docLevFromEditPg, $docName) = explode(':', $_POST['docNameSelected']);

//FOR TEXTBOX BASED ENTERIES/EDITS
if (isset($_POST['submitEditPg'])&&(($docLevFromEditPg==3)||($docLevFromEditPg==4)||($docLevFromEditPg==5)||($docLevFromEditPg==7)||($docLevFromEditPg==9))) {
    //list($docLev, $docName) = explode(':', $_POST['docNameSelected']);

    //GETTING THE DOCUMENTS TO EDIT   
    
    //cleaning post variables
   $sqlCleaner=new Cleaner();
   $cleaneditMemID=$sqlCleaner->mysql_prep($_POST['editMemID']);
   $cleanDocNameSel=$sqlCleaner->mysql_prep($_POST['docNameSelected']);
   $cleaneditFirstName=$sqlCleaner->mysql_prep($_POST['editFirstName']);
   $cleaneditOtherName=$sqlCleaner->mysql_prep($_POST['editOtherName']);
   $cleaneditSurName=$sqlCleaner->mysql_prep($_POST['editSurname']);
   $cleaneditEmailAddr=$sqlCleaner->mysql_prep($_POST['editEmailAd']);
    
    echo "<form action='editPage.php' method='POST'>";
    echo "<input type='hidden' name='_editMemID' value='{$cleaneditMemID}'>";
    echo "<input type='hidden' name='_docNameSelected' value='{$cleanDocNameSel}'>";
    echo "<label>FIRSTNAME:<label/><input type='textbox' name='_editFirstName' value='{$cleaneditFirstName}'><br/>";
    echo "<label>OTHER NAMES:<label/><input type='textbox' name='_editOtherName' value='{$cleaneditOtherName}'>&nbsp&nbsp";
    echo "<label>SURNAME:<label/><input type='textbox' name='_editSurname' value='{$cleaneditSurName}'><br/>";
    echo "<label>EMAIL:<label/><input type='textbox' name='_editEmailAd' value='{$cleaneditEmailAddr}'><br/>";

    //echo "<label>PROFILE:<label/><input type='texbox' name='_editMemProfile' value='{$_POST['editMemProfile']}'>";
    echo "<br/><br/>";
    echo "<label>" . strtoupper($docName) . " EDIT:<label/><br/>";

    //GETTING personal doc data ALREADY IN DATABASE FOR POSSIBLE EDIT
    $No = 0;
    list($docLevel, $docName1) = explode(':', $_POST['docNameSelected']);
    $personalD = new PersonalDocsService();
    $docs = $personalD->getByMemID_DocLevID($_POST['editMemID'], $docLevel);
    for ($i = 0; $i < sizeof($docs); $i++) {
        $No = $i + 1; 
        if($i==0)echo "<input type='hidden' name='textBoxFlag' value='present'>";
        if($docs!=false){
        echo "{$No}. <input name='texxt:{$docs[$i]->getPersonalDocID()}' type='text' size=100 value='{$docs[$i]->getDoc()}'/><br>";
        }
    }

    //FOR TEXT BOXES
    /*for ($j = 1; $j < 5; $j++) {
        $No++;
        echo "{$No}. <input name='text1' type='text' size=100/><br>";
    }*/
    
    echo "<input type='hidden' name='textBoxFlag' value='present'>";
    echo "<input type='hidden' name='element' value='text'/>";

    echo "<INPUT type='button' value='Add New Entry' onclick='add(document.forms[0].element.value)'/><br/>";
    echo "<span id=\"fooBar\"></span>";

    /* //PNB: USING THE CKEDITOR; TO DO THIS, YOU'LL WILL HAVE TO INCLUDE THE 'ckeditor' FOLDER         

      //create a class instance
      $ckeditting=new CKEditor();

      //do not print the code directly to browser, return it instead
      $ckeditting->returnOutput=true;

      //Path to CKEditor, ideally ,instead of relative dir, use an absolute path:
      //$ckeditting->basePath='/ckeditor/'
      //If not set, CKEditor will try to detect the correct path.
      $ckeditting->basePath='../Tools/ckeditor/'; //DIRECTED TO THE TOOLS DIRECTORY

      //set global configuration (will be used for all instances of CKEditor).
      $ckeditting->config['width']=600;

      //change default textarea attributes
      $ckeditting->textareaAttributes=array("cols"=>80,"rows"=>10); */

    //THE INITIAL DISPLAY VALUE TO BE DISPLAYED IN THE EDITOR
    /* $initialValue="This is what has to be displayed first";

      //creating the first instance
      $code=$ckeditting->editor("editor1",$initialValue); */

    //PNB: creating the first instance
    //$code=$ckeditting->editor("editor1",$_POST['researchIn']);
    //PNB: in this part the textarea element is first created and replace using the ckeditor when the replace() method
    //is called. so when it is this page is sent in the form the value sent over would be that sent from the
    //ckeditor which has come to 'overlie' the textarea; Note that the textarea and the
    //ckeditor have the same name for the field i.e editor1
    /* echo "<tr><td width=600 valign=top></td><td><textarea  name='editor1_ResearchInt' cols='80' rows='10' class='editor1 inputers' name='post' />'.{$valueToBeEditted}.'</textarea>";
      $code=$ckeditting->replace("editor1_ResearchInt",$valueToBeEditted);
      echo $code; */
    echo "<br/><input type='submit' name='submitEditPage' value='submit'>";
    echo "</form>";
}


//FOR TEXTAREA BASED ENTERIES/EDITS
elseif (isset($_POST['submitEditPg'])&&(($docLevFromEditPg==1)||($docLevFromEditPg==2)||($docLevFromEditPg==6)||($docLevFromEditPg==8)||($docLevFromEditPg==10))) {
     $valueToBeEditted1 = '';
    //list($docLev, $docName) = explode(':', $_POST['docNameSelected']);

    //GETTING THE DOCUMENTS TO EDIT  
     
     //cleaning post variables
   $sqlCleaner=new Cleaner();
   $cleaneditMemID=$sqlCleaner->mysql_prep($_POST['editMemID']);
   $cleanDocNameSel=$sqlCleaner->mysql_prep($_POST['docNameSelected']);
   $cleaneditFirstName=$sqlCleaner->mysql_prep($_POST['editFirstName']);
   $cleaneditOtherName=$sqlCleaner->mysql_prep($_POST['editOtherName']);
   $cleaneditSurName=$sqlCleaner->mysql_prep($_POST['editSurname']); 
   $cleaneditEmailAddr=$sqlCleaner->mysql_prep($_POST['editEmailAd']);


    echo "<form action='editPage.php' method='POST'>";
    echo "<input type='hidden' name='_editMemID' value='{$cleaneditMemID}'>";
    echo "<input type='hidden' name='_docNameSelected' value='{$cleanDocNameSel}'>";
    echo "<label>FIRSTNAME:<label/><input type='textbox' name='_editFirstName' value='{$cleaneditFirstName}'><br/>";
    echo "<label>OTHER NAMES:<label/><input type='textbox' name='_editOtherName' value='{$cleaneditOtherName}'>&nbsp&nbsp";
    echo "<label>SURNAME:<label/><input type='textbox' name='_editSurname' value='{$cleaneditSurName}'><br/>";
    echo "<label>EMAIL:<label/><input type='textbox' name='_editEmailAd' value='{$cleaneditEmailAddr}'><br/>";
    //echo "<label>PROFILE:<label/><input type='texbox' name='_editMemProfile' value='{$_POST['editMemProfile']}'>";
    echo "<br/><br/>";
    echo "<label>" . strtoupper($docName) . " EDIT:<label/><br/>";

    //GETTING personal doc data ALREADY IN DATABASE FOR POSSIBLE EDIT    
    list($docLevel, $docName1) = explode(':', $cleanDocNameSel);
    $personalD = new PersonalDocsService();
    $docs = $personalD->getByMemID_DocLevID($cleaneditMemID, $docLevel);
    
    if($docs!=false){//meaning function doesn't return false but actually returns something
    for ($i = 0; $i < sizeof($docs); $i++) {        
        $valueToBeEditted1.=$docs[$i]->getDoc();
    }    
    }

    

     //PNB: USING THE CKEDITOR; TO DO THIS, YOU'LL WILL HAVE TO INCLUDE THE 'ckeditor' FOLDER         

      //create a class instance
      $ckeditting=new CKEditor();

      //do not print the code directly to browser, return it instead
      $ckeditting->returnOutput=true;

      //Path to CKEditor, ideally ,instead of relative dir, use an absolute path:
      //$ckeditting->basePath='/ckeditor/'
      //If not set, CKEditor will try to detect the correct path.
      $ckeditting->basePath='../Tools/ckeditor/'; //DIRECTED TO THE TOOLS DIRECTORY

      //set global configuration (will be used for all instances of CKEditor).
      $ckeditting->config['width']=600;

      //change default textarea attributes
      $ckeditting->textareaAttributes=array("cols"=>80,"rows"=>10); 

    //THE INITIAL DISPLAY VALUE TO BE DISPLAYED IN THE EDITOR
    /* $initialValue="This is what has to be displayed first";

      //creating the first instance
      $code=$ckeditting->editor("editor1",$initialValue); */

    //PNB: creating the first instance
    //$code=$ckeditting->editor("editor1",$_POST['researchIn']);
    //PNB: in this part the textarea element is first created and replace using the ckeditor when the replace() method
    //is called. so when it is this page is sent in the form the value sent over would be that sent from the
    //ckeditor which has come to 'overlie' the textarea; Note that the textarea and the
    //ckeditor have the same name for the field i.e editor1
      echo "<tr><td width=600 valign=top></td><td><textarea  name='editor1_ResearchInt' cols='80' rows='10' class='editor1 inputers' name='post' />'.{$valueToBeEditted1}.'</textarea>";
      $code=$ckeditting->replace("editor1_ResearchInt",$valueToBeEditted1);
      echo $code; 
    echo "<br/><input type='submit' name='submitEditPage' value='submit'>";
    echo "</form>";
}

else {
    if (isset($_POST['logout'])) {
        $authenticationCloser = new AuthorizationAndConf();
        $authenticationCloser->logout('../index.php');
    }
    //echo $_POST['confirm'];             
}

//CODE FOR UPDATING AND EDITING THE DATABASE; GOTTEN FROM THE REDIRECTION OF THIS PAGE TO ITSELF   
/* if (isset($_POST['submit'])) {

  //for editing personal data
  $updatedStaffOrMem = new FacultyStaffOrMem();
  $updater = new FacultyStaffOrMemService();

  //for editing personal docs


  $updatedStaffOrMem->setMemberID($_POST['_editMemID']);
  $updatedStaffOrMem->setFirstName($_POST['_editFirstName']);
  $updatedStaffOrMem->setOtherNames($_POST['_editOtherName']);
  $updatedStaffOrMem->setSurName($_POST['_editSurname']);
  $updatedStaffOrMem->setMemProfile($_POST['_editMemProfile']);
  //$updatedStaffOrMem->setResearchInterest($_POST['editor1_ResearchInt']);

  $updater->updateByStaffOrMem($updatedStaffOrMem);



  echo "{$_POST['editFirstName']}, Edit successful<br/>";
  } else {
  echo "*&nbsp<a href='staffBase.php'>Back</a>";
  } */
?>