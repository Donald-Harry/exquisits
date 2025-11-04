<?php
include "../model/connection.php";
include '../controller/Usercontroller.php';
include '../controller/Depositcontroller.php';
$count = $_GET['count'];

$deletedeposit = new Depositcontroller();
$deletedeposit->deletedeposit($count);
?>