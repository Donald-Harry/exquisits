<?php
include "../model/connection.php";
include '../controller/Usercontroller.php';
include '../controller/Investmentcontroller.php';
$count = $_GET['count'];

$deleteinvestment = new Investmentcontroller();
$deleteinvestment->deleteinvestment($count);
?>