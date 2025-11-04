<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include "../model/connection.php";
include "../controller/Usercontroller.php";

// Validate email and get password
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password = $_POST['password'];



// Instantiate the Usercontroller class
$signin = new Usercontroller();
$signin->signinuser($email, $password);




?>




