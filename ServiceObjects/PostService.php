<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostService
 *
 * @author cyberdex
 */
//require_once '../DataObjects/Posts.php';
require_once 'ConnectionToUG.php';
class PostService {
     public function PostService(){
    $this->con =new ConnectionToUG();
    $this->con->setConnectToSQL();
    $this->con->setConnectToDB();
    }

    //Retrieval Methods
    public function getAll(){
    $i=0;//for iterating through the array to return the class row
    $classTable;
    $result=mysql_query("SELECT * from post",$this->con->getConnectToSQL());
    //$result1=mysql_query("SELECT * from levels");
    while($info =  mysql_fetch_array($result)){
        $aNewClass=new Posts();
        $aNewClass->setPostID($info['postID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setPost($info['post']);        

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }

    public function getByPostID($entered_id){//getting the results based on the ID
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from posts where postID = {$entered_id}",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong login information";
    }

    else{

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new Posts();
        $aNewClass->setPostID($info['postID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setPost($info['post']);    

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();
    }
    }

     public function getByMemberID($memberID){//getting the results based on the username
    $i=0;
    $classTable;

    $result1=mysql_query("SELECT * from posts where memberID = '{$memberID}'",$this->con->getConnectToSQL());

    if(mysql_num_rows($result1)<1){
        echo "Wrong Login Information";
    }

    else {

    while($info =  mysql_fetch_array($result1)){
        $aNewClass=new Posts();
        $aNewClass->setPostID($info['postID']);
        $aNewClass->setMemberID($info['memberID']);
        $aNewClass->setPost($info['post']);    

        $classTable[$i++]=$aNewClass;
    }
    return $classTable;
    $this->con->closeSQ();

    }

    }

    //Addition methods
    public function Add(){


    }


    //Deletion methods
    public function DeleteAll(){
    mysql_query("DELETE from posts");//deleting all the rows from the classes table
    $this->con->closeSQ();
    }

    public function DeleteByPostID($entered_id){     // make the deletion based on the entered Id
    mysql_query("DELETE from posts where postID = {$entered_id}");
    $this->con->closeSQ();
    }

    //Update methodsput your code here
}

?>
