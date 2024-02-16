<?php
 class Dbh{
    protected function connect(){
        try {
           $uname="root";
           $pword="";
           $dbh= new PDO('mysql:host=localhost;dbname=whatslogin',$uname,$pword);
           return $dbh;
        } catch (PDOException $e) {
        print "Error!:". $e->getMessage()."<br/>";
        die();
        }
    }
 }

?>