<?php
include "../model/connection.php";
include '../controller/Usercontroller.php';
include '../controller/Trade.php';
$id = $_GET['id'];
$profit = $_POST['profit'];
$success = $_POST['success'];

$trader = new Trade();
$trader->updatetrader($profit, $success, $id);

