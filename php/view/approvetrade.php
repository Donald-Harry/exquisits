<?php
include "../model/connection.php";
include "../controller/Trade.php";
$trade_id = $_GET['id'];

$trade = new Trade();
$trade->approvetrade($trade_id);