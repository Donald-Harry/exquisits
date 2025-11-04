<?php

include "../model/connection.php";
include "../controller/Usercontroller.php";
$email = $_POST['email'];
$code = $_POST['code'];
$verifymail = new Usercontroller();
$verifymail->verifymail($email, $code);

