<?php
include "../model/connection.php";
class Notifycontroller extends db{
    public function notify(){
        $sql = "SELECT * FROM `notification` WHERE status = 'pending'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            echo $run->num_rows;
        }
    }
    
}


$notify = new Notifycontroller();
$notify->notify();

?>