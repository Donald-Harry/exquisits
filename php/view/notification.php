<?php
include "../model/connection.php";
class Notifycontroller extends db{
    public function notifyshow(){
        $sql = "SELECT * FROM `notification` WHERE status = 'pending'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
        while ($row = $run->fetch_assoc()) {
            echo '<li>
                    <div class="timeline-panel">

                        <div class="media-body">
                            <h6 class="mb-1">'.$row['statement'].'</h6>
                        </div>
                        <span class="badge light text-white bg-primary btn" onclick="closenotify('.$row['count'].')">X</span>
                    </div>
                </li>';
        }
        }
    }
    
}


$notify = new Notifycontroller();
$notify->notifyshow();
?>