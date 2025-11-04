<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
include "../controller/Withdrawcontroller.php";
$count = $_POST['count'];
$approvewithdraw = new Withdrawcontroller();
$approvewithdraw->approvewithdraw($count);
?>