<?php
include "../model/connection.php";
include "../controller/Depositcontroller.php";
$mark = $_POST['mark'];
$cash = $_POST['cash'];
// echo $cash;
$approve = new Depositcontroller();
$approve->approvedeposit($mark,$cash);
?>