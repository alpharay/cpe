<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Encryption
 *
 * @author cyberdex
 */
class Encryption {
    //put your code here
    
    //for md5 encryption
    public function encryptPassW1($password){
        $hashed_password=md5($password);  
        return $hashed_password;
    }
    
    //for sha1 encryption
    public function encryptPassW2($password){
        $hashed_password=sha1($password);
        return $hashed_password;
    }
}

?>
