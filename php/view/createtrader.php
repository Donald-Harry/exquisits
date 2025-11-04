<?php 
include "../model/connection.php";
include "../controller/Trade.php";

$traderName = $_POST['traderName'];
$profit = $_POST['profit'];
$success = $_POST['success'];
$tradeType = $_POST['tradeType'];
$photo = $_FILES['photo'];


$trader = new Trade();
$trader->copyTrader($traderName, $profit, $success, $tradeType, $photo);