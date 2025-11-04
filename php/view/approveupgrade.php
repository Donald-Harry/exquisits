<?php
include "../model/connection.php";
include "../controller/Depositcontroller.php";
$mark = $_POST['mark'];
$approve = new Depositcontroller();
$approve->approveupgrade($mark);
?>