<?php 

session_start();
session_unset();
session_destroy();
 //going back to frontend
 header("Location:../login.php?error=none");