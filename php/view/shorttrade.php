<?php 
include "../model/connection.php";
include "../controller/Trade.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pair = htmlspecialchars($_POST['pair']);
    $orderType = htmlspecialchars($_POST['orderType']);
    $orderPrice = htmlspecialchars($_POST['orderPrice']);
    $amount = htmlspecialchars($_POST['amount']);
    $tp = htmlspecialchars($_POST['tp']);
    $sl = htmlspecialchars($_POST['sl']);
    $user_id = $_SESSION['id'];
   
    $longtrade = new Trade();
    $longtrade->shorttrade($pair, $orderType, $orderPrice, $amount, $tp, $sl, $user_id);
}