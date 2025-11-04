<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
$email = $_POST['email'];
$passcode = $_POST['passcode'];
$reset = new Usercontroller();
$reset->passcode($email, $passcode);


?>