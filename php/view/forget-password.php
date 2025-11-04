<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$reset = new Usercontroller();
$reset->forgetpassword($email);


?>