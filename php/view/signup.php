<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
   
    
    $signup = new Usercontroller();

    $signup->usersignup($fullname, $email, $password, $cpassword);


?>