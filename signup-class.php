<?php

class signup extends Dbh{
    protected function setUser ($username,$email,$password){
        $stmt=$this->connect()->prepare('INSERT INTO `users`( `username`, `email`, `password`) VALUES (?,?,?)');

        $hashedpwd=password_hash($password,PASSWORD_DEFAULT);

        if(!$stmt->excute(array($username,$email,$hashedpwd))){
           $stmt=null;
           header("location:index.php?error=stmtfailed");
            exit();
        }
        
       $stmt=null;
    }
    protected function checkUser ($username,$email){
        $stmt=$this->connect()->prepare('SELECT username FROM users WHERE username =? OR email=?;');

        if(!$stmt->excute(array($username,$email))){
           $stmt=null;
           header("location:index.php?error=stmtfailed");
            exit();
        }
        $resultCheck;
        if ($stmt->rowcount()>0){
            $resultCheck=false;

        }
        else{
            $resultCheck=true;
        }
        return $resultCheck;
    }
    
}

?>