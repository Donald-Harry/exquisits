<?php
include "../model/connection.php";
include "../controller/walletdetails.php";
if ($_SERVER["REQUEST_METHOD"] = 'POST') {
    $user_id = $_SESSION['id'];
    $coin = $_POST['coin'];
    $address = $_POST['address'];
    $walletObj = new Walletdetails();
    $walletObj->walletdetail($coin, $address, $user_id);
    $walletObj->addWallet();
   
}





?>