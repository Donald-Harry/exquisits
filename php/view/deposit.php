<?php
include "../../rootholder.php";
include "../model/connection.php";
include "../controller/Depositcontroller.php";
if (isset($_POST['deposit'])) {
    $amount = htmlspecialchars($_POST['amount']);
    $receipt = $_FILES['receipt'];
    $fund = new Depositcontroller();
    $fund->deposit($amount, $receipt);
}