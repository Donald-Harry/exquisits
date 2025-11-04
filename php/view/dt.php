<?php
include "../model/connection.php";
include '../controller/Trade.php';
$id = $_GET['id'];

$dt = new Trade();
$dt->deletecopied($id);
