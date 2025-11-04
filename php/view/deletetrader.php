<?php
include "../model/connection.php";
include '../controller/Usercontroller.php';
include '../controller/Trade.php';
$id = $_GET['id'];

$trader = new Trade();
$trader->deletetrader($id);

