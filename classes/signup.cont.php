<?php

class SignupContr extends Signup{
private $username;
private $email;
private $password;
private $Cpassword;
public function __construct($username,$email,$password,$Cpassword){
$this->username=$username;
$this->email=$email;
$this->password=$password;
$this->Cpassword=$Cpassword;
}
public  function signupUser(){
//Empty input
    if($this->emptyInput()==false){
        header("Location:../sign-up.php?error=emptyuser");
        exit(); 
    }
    //invalid user
    if($this->invalidUsername()==false){
        header("Location:../sign-up.php?error=username");
        exit(); 
    }
        //invalid email
        if($this->invalidEmail()==false){
            header("Location:../sign-up.php?error=email");
            exit(); 
        }
           //not match password
           if($this->passwordMatch()==false){
            header("Location:../sign-up.php?error=passworNotMatch");
            exit(); 
        }
              // invalid user or email
               if($this->takenCheck()==false){
                header("Location:../sign-up.php?error=useroremailtaken");
                exit(); 
            }
            $this->setUser($this->username,$this->email,$this->password);
    
}
private function emptyInput(){
    $result=false;
    if(empty($this->username)||empty($this->email)||empty($this->password)||empty($this->Cpassword)){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}
private function invalidUsername( ){
    $result=false;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}
private function invalidEmail( ){
    $result=false;
    if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}
private function passwordMatch (){
    $result=false;
    if($this->password !==$this->Cpassword){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}
private function takenCheck (){
    $result=false;
    if($this->checkUser($this->username,$this->email)){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}

}
