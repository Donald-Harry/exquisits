<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
include "../controller/Investmentcontroller.php";
if (isset($_POST['investmentapproval'])) {
    $count = $_POST['count'];
    $profit = $_POST['profit'];
    $percent = $_POST['percent'];
    $approve = new Investmentcontroller();
    $approve->approveinvestment($count,$profit,$percent);
}
if (isset($_POST['updateprofit'])) {
    $count = $_POST['count'];
    $profit = $_POST['profit'];
    $percent = $_POST['percent'];
    $approve = new Investmentcontroller();
    $approve->updateprofit($count,$profit);
}

?>