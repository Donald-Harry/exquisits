<?php
include "../model/connection.php";
include "../controller/Usercontroller.php";
if (isset($_POST['submit'])) {
    $ppass = $_POST['ppass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $change = new Usercontroller();
    $change->changepass($ppass, $npass, $cpass);
}

?>