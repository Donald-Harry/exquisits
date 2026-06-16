<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
$user_id = $_GET['user_id'];
$signin = new Usercontroller();
$signin->verifyusers($user_id);
?>