<?php
include "../model/connection.php";
$count = $_GET['count'];
class Notifycontroller extends db{
    public function closenotify($count){
        $sql = "UPDATE `notification` SET `status`='seen' WHERE count = '$count'";
        $run = $this->connection()->query($sql);
        if ($run== true) {
        echo 'success';
    }
    
    }
}


$notify = new Notifycontroller();
$notify->closenotify($count);
?>