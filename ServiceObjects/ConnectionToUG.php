<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnectionToMG
 *
 * @author cyberdex
 */
require_once 'SessionTimeOuter.php';

class ConnectionToUG {
    //put your code here
     const SERVER="localhost";
//     const USER="lnrdefusr";
//     const PASSWORD="!2jumpers";
     const USER="root";
    // const PASSWORD="cyberdex";
     const PASSWORD="hope";
     const DATABASE="compEngDb";
     private $connection;
     private $selected_db;
     
     public function ConnectionToUG(){
         /*$timeout=new SessionTimeOuter();
         $timeout->AutoTimeOut(10, "");*/
     }

    //setters
    public function setConnectToSQL(){
    $this->connection=mysql_connect(self::SERVER,self::USER,self::PASSWORD);
    if(!$this->connection){die("There was a connection error".mysql_error());}
    }
    public function setConnectToDB(){
     $this->selected_db= mysql_select_db(self::DATABASE,$this->getConnectToSQL());
     if(!$this->selected_db){die("There was an error in database selection".mysql_error());}
        }

    //getters
    public function getConnectToSQL(){return $this->connection;}

    //extra functions
    public function closeSQ(){
        mysql_close($this->getConnectToSQL());
        }
}
?>
