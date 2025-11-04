<?php
include "../../rootholder.php";
include "../model/connection.php";
include "../controller/Usercontroller.php";
include "../controller/Withdrawcontroller.php";
if (isset($_POST['withdraw'])) {
    $amount = htmlspecialchars($_POST['amount']);
    $address =  htmlspecialchars($_POST['address']);
    $cryptoaddress =  htmlspecialchars($_POST['cryptoaddress']);
    $currentdate = date("Y-m-d");
    $withdraw= new Withdrawcontroller();
    $withdraw->userwithdraw($amount, $cryptoaddress, $address, $currentdate);
}