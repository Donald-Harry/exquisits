<?php
include "../model/connection.php";
include "../controller/Usercontroller.php"; 
$amount = $_POST['amount'];
$user_id = $_GET['user_id'];
$update = new Usercontroller();
$update->edituseramount($amount, $user_id);


?>