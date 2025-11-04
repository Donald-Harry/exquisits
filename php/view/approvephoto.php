<?php
include "../model/connection.php";
include "../controller/Usercontroller.php"; 
$user_id = $_GET['user_id'];
$update = new Usercontroller();
$update->updatephoto($user_id);



?>