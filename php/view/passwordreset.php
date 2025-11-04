<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
$email = $_POST['email'];
$password = $_POST['password'];
$reset = new Usercontroller();
$reset->passwordreset($email, $password);


?>