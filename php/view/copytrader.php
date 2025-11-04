<?php 
include "../model/connection.php";
include "../controller/Trade.php";

$trader_id = $_GET['id'];
$user_id = $_SESSION['id'];

$trader = new Trade();
$trader->usercopyTrader($trader_id, $user_id);