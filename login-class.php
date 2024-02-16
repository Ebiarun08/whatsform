<?php

class login extends Dbh{
    protected function getUser ($username,$password){
        $stmt=$this->connect()->prepare('SELECT `password` FROM users WHERE username=? OR email=?;');

       

        if(!$stmt->excute(array($username,$password))){
           $stmt=null;
           header("location;index.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount==0){
          $stmt=null;
          header("location:index.php?error=usernotfound");
          exit();
        }
        $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd=password_verify($password,$pwdHashed[0]["password"]);
        if($checkPwd == false){
            $stmt=null;
            header("location:index.php?error=Wrongpassword");
            exit();
          }
          elseif($checkPwd==true){
            $stmt=$this->connect()->prepare('SELECT * FROM users WHERE username=? OR email=? AND `password`=? ;');
            if(!$stmt->excute(array($username,$password))){
                $stmt=null;
                header("location:index.php?error=stmtfailed");
                exit();

            }
            if($stmt->rowCount==0){
                $stmt=null;
                header("location:index.php?error=usernotfound");
                exit();

            }
            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["id"]=$user[0]["id"];
            $_SESSION["username"]=$user[0]["username"];

          }
       $stmt=null;
    }
  
    
}

?>