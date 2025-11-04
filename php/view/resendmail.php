<?php

include "../model/connection.php";
include "../controller/Usercontroller.php";
$email = $_GET['email'];
$verifymail = new Usercontroller();
$verifymail->resendmail($email);

