<?php
include "../../rootholder.php";
include "../model/connection.php";
include "../controller/Usercontroller.php";
if (isset($_POST['deposit'])) {
    $validid = $_FILES['validid'];
    $photo = new Usercontroller();
    $photo->uploadphoto($validid);
}