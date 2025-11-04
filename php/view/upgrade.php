<?php
include "../../rootholder.php";
include "../model/connection.php";
include "../controller/Depositcontroller.php";
if (isset($_POST['upgrade'])) {
    $receipt = $_FILES['receipt'];
    $fund = new Depositcontroller();
    $fund->upgrade($receipt);
}