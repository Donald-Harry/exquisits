<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";

if (isset($_POST['extend'])) {
    $user_id = $_GET['user_id'];
    $date = $_POST['date'];
    $count = $_POST['count'];
$extend = new Usercontroller();
$extend->updatematuritydate($count, $date, $user_id);
}




?>