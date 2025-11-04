<?php
include "../model/connection.php";
$userid = $_GET['userid'];
// echo $userid;
class Deactivate extends db{
    public function activateusers($userid){
        $this->id = $userid;
        $sql = "SELECT * FROM `users` WHERE id = '$this->id'";
        $getstatus = $this->connection()->query($sql);
        if ($getstatus->num_rows > 0) {
            $row = $getstatus->fetch_assoc();
            $status = $row['status'];
           if ($status == 'activated') {
            $sql = "UPDATE `users` SET `status`='deactivated' WHERE id = '$this->id'";
            $activate = $this->connection()->query($sql);
             echo "<script> window.location.href='../../Dashboard/index.php'</script>";
           }else{
            $sql = "UPDATE `users` SET `status`='activated' WHERE id = '$this->id'";
            $activate = $this->connection()->query($sql);
             echo "<script> window.location.href='../../Dashboard/index.php'</script>";
           }
        }
        
        
   }
    
}
$activator = new Deactivate();
$activator->activateusers($userid);

?>