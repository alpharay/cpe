<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PersonalDocsService
 *
 * @author cyberdex
 */
require_once 'ConnectionToUG.php';

class PersonalDocsService {
 public function PersonalDocsService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from personalDocs",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new PersonalDocs();
        $aNewClass->setPersonalDocID($info['personalDocID']);
        $aNewClass->setDocLevID($info['docLevID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setDoc($info['doc']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from personalDocs where personalDocID = {$entered_id}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new PersonalDocs();
        $aNewClass->setPersonalDocID($info['personalDocID']);
        $aNewClass->setDocLevID($info['docLevID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setDoc($info['doc']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByMember($entered_ID){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from personalDocs where memberID = {$entered_username}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new PersonalDocs();
        $aNewClass->setPersonalDocID($info['personalDocID']);
        $aNewClass->setDocLevID($info['docLevID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setDoc($info['doc']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();

    }

    }
    
     public function getByMemID_DocLevID($memberID,$docLevID){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from personalDocs where memberID = {$memberID} and docLevID={$docLevID}" ,$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "<B style='color:red;'>nothing entered in this section yet</B>";
        return false;
        
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new PersonalDocs();
        $aNewClass->setPersonalDocID($info['personalDocID']);
        $aNewClass->setDocLevID($info['docLevID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setDoc($info['doc']);

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();

    }

    }

    //Addition methods
    public function Add($personalDocData){
    $personalDoc=$personalDocData;
    if(!mysql_query("INSERT INTO personalDocs VALUES(NULL,'{$personalDoc->getDocLevID()}','{$personalDoc->getMemberID()}','{$personalDoc->getDoc()}')")){
        echo "Data Update Unsuccessful";
    }else{echo "Successful";}
    }


    //Deletion methods
    public function DeleteAll(){
    mysql_query("DELETE from personalDocs");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from personalDocs where personalDocsID = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methods
    public function updatePersonalDocInfo($personalDoc){
    $personalDOC=new PersonalDocs();
    $personalDOC=$personalDoc;
   // $status=mysql_query("UPDATE facultyStaffOrMem SET firstName='{$updatedStaffOrMem->getFirstName()}',surName = '{$updatedStaffOrMem->getSurName()}', otherNames = '{$updatedStaffOrMem->getOtherNames()}',memProfile='{$updatedStaffOrMem->getMemProfile()}',researchInterest='{$updatedStaffOrMem->getResearchInterest()}' WHERE memberID={$updatedStaffOrMem->getMemberID()}");    
    $status=mysql_query("UPDATE personalDocs SET personalDocID='{$personalDOC->getPersonalDocID()}',docLevID = '{$personalDOC->getDocLevID()}', memberID = '{$personalDOC->getMemberID()}, doc= '{$personalDOC->getDoc()}' WHERE memberID={$personalDOC->getMemberID()}");    

    return $status;
    }
    
    public function updateDocField($personalDoc){//for editing just the document
    $personalDOC=new PersonalDocs();
    $personalDOC=$personalDoc;
   // $status=mysql_query("UPDATE facultyStaffOrMem SET firstName='{$updatedStaffOrMem->getFirstName()}',surName = '{$updatedStaffOrMem->getSurName()}', otherNames = '{$updatedStaffOrMem->getOtherNames()}',memProfile='{$updatedStaffOrMem->getMemProfile()}',researchInterest='{$updatedStaffOrMem->getResearchInterest()}' WHERE memberID={$updatedStaffOrMem->getMemberID()}");    
    $status=mysql_query("UPDATE personalDocs SET doc= '{$personalDOC->getDoc()}' WHERE memberID={$personalDOC->getMemberID()} and docLevID = '{$personalDOC->getDocLevID()}'");    

    return $status;     
    }
    
    public function updateDocFieldByPD_ID($personalDoc){//for editing just the document
    $personalDOC=new PersonalDocs();
    $personalDOC=$personalDoc;
   // $status=mysql_query("UPDATE facultyStaffOrMem SET firstName='{$updatedStaffOrMem->getFirstName()}',surName = '{$updatedStaffOrMem->getSurName()}', otherNames = '{$updatedStaffOrMem->getOtherNames()}',memProfile='{$updatedStaffOrMem->getMemProfile()}',researchInterest='{$updatedStaffOrMem->getResearchInterest()}' WHERE memberID={$updatedStaffOrMem->getMemberID()}");    
    $status=mysql_query("UPDATE personalDocs SET doc= '{$personalDOC->getDoc()}' WHERE memberID={$personalDOC->getMemberID()} and personalDocID = '{$personalDOC->getPersonalDocID()}'");    

    return $status;     
    }
}

?>
