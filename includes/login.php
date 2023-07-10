<?php 

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// exit();
if(isset($_POST['submit'])){
  //grabing the data
    $username=$_POST['username'];

    $password=$_POST['password'];
 
    //instantiating signupcont class 
    include '../classes/db.php';
    include '../includes/login.inc.php';
    include '../classes/login.cont.php';
    $login=new LoginContr($username,$password);
    //run error handlr and user signup
    $login->loginUser();
    //going back to frontend
    header("Location:../main.php?error=none");
}

