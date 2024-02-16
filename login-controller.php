<?php


 class logincontr extends login{
    
 private $username;
 private $email;

 
 public function _construct( $username,$password){
    $this->username=$username;
    $this->email=$email;
   
 }

 public function loginUser(){
    if($this->emptyInput()==false){
    //  echo"Empty Input";
     header("location:index.php?error=emptyinput");
     exit();
    }
   
    $this->getUser($this->username,$this->password);    
 }

 private function emptyInput(){

    $result;
    if(empty($this->username  || $this->password )){
       $result=false;
    }
    else{
        $result=true;
    }
    return $result;
 }
 
  

 }


?>