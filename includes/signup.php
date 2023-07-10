<?php 

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// exit();
if(isset($_POST['submit'])){
  //grabing the data
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $Cpassword=$_POST['Cpassword'];
    //instantiating signupcont class
    include '../classes/db.php';
    include '../includes/singup.inc.php';
    include '../classes/signup.cont.php';
    $signup=new SignupContr($username,$email,$password,$Cpassword);
    //run error handlr and user signup
    $signup->signupUser();
    //going back to frontend
    header("Location:../main.php?error=none");
}

