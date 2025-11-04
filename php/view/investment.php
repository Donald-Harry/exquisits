<?php
include "../../rootholder.php";
include "../model/connection.php";
include "../controller/Usercontroller.php";
include "../controller/Investmentcontroller.php";
if (isset($_POST['investment'])) {
    $amount = htmlspecialchars($_POST['amount']);
    $currentdate = date("Y-m-d");
    $maturitydate = date("Y-m-d", strtotime($currentdate ." +4days"));
    $investment = new Investmentcontroller();
    $investment->userinvest($amount, $currentdate, $maturitydate);
}