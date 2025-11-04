<?php
include "../model/connection.php";
include "../controller/walletdetails.php";
$count = $_GET['count'];
// echo $count;
$deletewallet = new Walletdetails();
$deletewallet->deleteaddress($count);
?>