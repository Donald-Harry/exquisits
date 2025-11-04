<?php
include "../model/connection.php";
include "../controller/editprofile.php";
if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];

}
$update = new Editprofile();
$update->edit($fullname, $password, $newpassword, $email);



?>