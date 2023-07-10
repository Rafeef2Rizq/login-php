<?php

class LoginContr extends Login{
private $username;

private $password;

public function __construct($username,$password,){
$this->username=$username;

$this->password=$password;

}
public  function loginUser(){
//Empty input
    if($this->emptyInput()==false){
        header("Location:../sign-up.php?error=emptyuser");
        exit(); 
    }

            $this->getUser($this->username,$this->password);
    
}
private function emptyInput(){
    $result=false;
    if(empty($this->username)||empty($this->password)){
        $result=false;
    }else{
        $result=true;
    }
    return $result;
}


}
