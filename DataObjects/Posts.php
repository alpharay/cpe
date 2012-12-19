<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Posts
 *
 * @author cyberdex
 */
class Posts {
    //put your code here
    private $postID="";
    private $memberID="";
    private $post="";
    
    //setters
    public function setPostID($postID){
        $this->postID=$postID;
    }
    public function setMemberID($memberID){
        $this->memberID=$memberID;
    }
    public function setPost($post){
        $this->post=$post;
    }
    
    //getters
    public function getPostID(){
        return $this->postID;
    }
    public function getMemberID(){
        return $this->postID;
    }
    public function getPost(){
        return $this->postID;
    }
}

?>
