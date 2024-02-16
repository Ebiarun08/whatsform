<?php

class signupcontr extends signup{

    private $username;
    private $email;
    private $password;
    private $password1;

    public function __construct($username, $email, $password, $password1){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->password1 = $password1;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location:signup.php?error=emptyinput");
            exit();
        }
        if($this->invalidUsername() == false){
            header("location:signup.php?error=InvalidUsername");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location:signup.php?error=InvalidEmail");
            exit();
        }
        if($this->passwordMatch() == false){
            header("location:signup.php?error=passwordMatch");
            exit();
        }
        if(!$this->checkUserId()){
            header("location:signup.php?error=UserIdExists");
            exit();
        }
        $this->setUser($this->username, $this->email, $this->password);    
    }

    private function emptyInput(){
        if(empty($this->username) || empty($this->email) || empty($this->password) || empty($this->password1)){
            return false;
        }
        return true;
    }

    private function invalidUsername(){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            return false;
        }
        return true;
    }

    private function invalidEmail(){
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }

    private function passwordMatch(){
        if($this->password !== $this->password1){
            return false;
        }
        return true;
    }

    private function checkUserId(){
        if(!$this->checkUser($this->username, $this->email)){
            return false;
        }
        return true;
    }

}

?>
