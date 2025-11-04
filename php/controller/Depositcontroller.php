<?php
// session_start();
class Depositcontroller extends db{
    protected $amount;
    protected $receipt;
    protected $uploadapth;
    protected $fileextension;
    // get current user account balance
    public function getuserbalance(){
        $sql = "SELECT amount FROM `users` WHERE id = '".$_SESSION['id']."'";
        $getbalance = $this->connection()->query($sql);
        $currentbalance = $getbalance->fetch_assoc();
        // return current amount from user table
        return $currentbalance['amount'];
    }
    // get user fullname
    public function getuserfullname(){
        $sql = "SELECT fullname FROM `users` WHERE id = '".$_SESSION['id']."'";
        $getbalance = $this->connection()->query($sql);
        $currentbalance = $getbalance->fetch_assoc();
        // return current amount from user table
        return $currentbalance['fullname'];
    }
    // deposit from funding
    public function deposit($amount, $receipt){
        $this->amount = $amount;
        $this->receipt = $receipt;
        // path to store receipt uploaded
        $filepath = "admindashboard/images/receipts/";
        $this->uploadapth = $filepath.$this->receipt['name'];
        $this->fileextension = strtolower(pathinfo($this->receipt['name'], PATHINFO_EXTENSION));
        // check for amount to be paid
        if (empty($this->amount) || $this->amount < 50) {
            $_SESSION['errordpt'] = 'Amount must be >$49.99';
            echo "<script>window.history.back()</script>";
        // check for file size
        }elseif ($this->receipt['size'] >500000) {
            $_SESSION['errordpt'] = 'File size is too large (max. 500kb)';
            echo "<script>window.history.back()</script>";
        // check for file extension name
        }elseif ($this->fileextension != 'jpg' && $this->fileextension != 'png' && $this->fileextension != 'jpeg' && $this->fileextension != 'jfif' && $this->fileextension != 'pdf') {
            $_SESSION['errordpt'] = 'Only jpg, jpeg, pdf, png and jfif files are allowed';
            echo "<script>window.history.back()</script>";
        // upload to table
        }else{
            $sql = "INSERT INTO `deposit`(`receipt`, `amount`, `status`, `id`) VALUES ('".$this->receipt['name']."','$this->amount', 'pending', '".$_SESSION['id']."')";
            $run = $this->connection()->query($sql);
            if ($run == true) {
                // upload receipt
                $_SESSION['deposit'] = "<script>
                        Swal.fire(
                      'Congratulation!',
                      'Your deposit has been submitted Successfully!',
                      'success'
                    )
                    </script>";
                move_uploaded_file($this->receipt["tmp_name"], $this->uploadapth);
                // create a notice to admin
                $userfullname = $this->getuserfullname();
                $date = date("Y-m-d");
                $statement = $userfullname .' made a deposit of $' .$this->amount .' on '.$date;
                $sql="INSERT INTO `notification`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '$date', '".$_SESSION['id']."')";
                $run = $this->connection()->query($sql);
                if ($_SESSION['id'] == 1) {
                    header("location: admindashboard/deposit.php");
                }else {
                    header("location: userdashboard/deposit.php");
                }
            }
        }
    }
    // get user deposits
    public function pendingdeposit(){
        $sql = "SELECT * FROM `deposit` WHERE status = 'pending' ORDER BY count DESC";
        $getpending = $this->connection()->query($sql);
        while ($row = $getpending->fetch_assoc()) {
            echo'<tr>
                    <form action="../approvedeposit.php" method="post">
                        <td> <input type="number" name="cash" class="form-control" value="'.$row['amount'].'">
                        <input type="hidden" name="mark" class="form-control" value="'.$row['count'].'">
                        </td>
                        <td> <img src="images/receipts/'.$row['receipt'].'" alt="" class="img-fluid" width="100px"></td>
                        <td> '.$row['status'].' </td>
                        <td><button class="btn">Approve</button></td>
                         <td> <a href="../deletedeposit.php?count='.$row['count'].'"> Delete </a> </td>
                    </form>
                </tr>';
                
            }
            
        }

    // pending deposit for users
    public function userpendingdeposit(){
        $sql = "SELECT * FROM `deposit` WHERE id = '".$_SESSION['id']."' AND status = 'pending' ORDER BY count DESC";
        $getpending = $this->connection()->query($sql);
        while ($row = $getpending->fetch_assoc()) {
            echo '<tr>
                    <td> '.$row['amount'].' </td>
                    <td> <img src="../admindashboard/images/receipts/'.$row['receipt'].'" alt="" class="img-fluid" width="100px"></td>
                    <td> '.$row['status'].' </td>
                    </tr>';
        }
    }
    // get all pending deposits
    public function approveddeposit(){
        $sql = "SELECT * FROM `deposit` WHERE status = 'approved' ORDER BY count DESC";
        // $sql = "SELECT * FROM `deposit` WHERE id = '".$_SESSION['id']."' AND status = 'approved' ORDER BY count DESC";
        $getpending = $this->connection()->query($sql);
        while ($row = $getpending->fetch_assoc()) {
            echo '<tr>
                    <td> <input type="number" class="form-control" value="'.$row['amount'].'"> </td>';
                    if ($_SESSION['id'] == 1) {
               echo     '<td> <img src= "images/receipts/'.$row['receipt'].'" alt="" class="img-fluid" width="100px"></td>';
                    }else {
                 echo  '<td> <img src= "../admindashboard/images/receipts/'.$row['receipt'].'" alt="" class="img-fluid" width="100px"></td>';
                    }
                    
               echo     '<td> '.$row['status'].' </td>
                    </tr>';
        }
    }
    // approve deposit
    public function approvedeposit($mark,$cash){
        // $previousbalance = $this->getuserbalance();
        $sql = "SELECT * FROM `deposit` WHERE count = '$mark'";
        $getfund = $this->connection()->query($sql);
        if($getfund == true) {
           $row = $getfund->fetch_assoc();
           $sql = "SELECT * FROM `users` WHERE id = '".$row['id']."'";
           $getpreviousbalance = $this->connection()->query($sql);
           if ($getpreviousbalance == true) {
                $row1 = $getpreviousbalance->fetch_assoc();
                $previousbalance = $row1['amount'];
                $newbalance = $cash + $previousbalance;
                $sql = "UPDATE `users` SET `amount`='$newbalance' WHERE id = '".$row['id']."'";
                $updatefund = $this->connection()->query($sql);
                // echo $mark;
                if ($updatefund == true) {
                    $sql = "UPDATE `deposit` SET `status`='Approved', `amount`='$cash' WHERE count = '$mark'";
                    $updatestatus = $this->connection()->query($sql);
                        if ($updatestatus == true) {
                            $date = date("Y-m-d");
                            $statement = 'Your deposit of ' .$cash .' on '.$date .' has been approved';
                            $sql="INSERT INTO `notificationuser`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '$date', '".$row['id']."')";
                            $run = $this->connection()->query($sql);
                            header("location: admindashboard/deposit.php");
                        }else {
                            echo "<script>window.history.back()</script>";
                        }
                }
           }
           
        }
    }
     public function approveupgrade($mark){
        // $previousbalance = $this->getuserbalance();
        $sql = "SELECT * FROM `upgrade` WHERE count = '$mark'";
        $upgrade = $this->connection()->query($sql);
        if($upgrade == true) {
           $row = $upgrade->fetch_assoc();
           $sql = "SELECT * FROM `users` WHERE id = '".$row['user_id']."'";
           $getpreviousbalance = $this->connection()->query($sql);
           if ($getpreviousbalance == true) {
                $row1 = $getpreviousbalance->fetch_assoc();
                $sql = "UPDATE `users` SET `account_type`='Premium' WHERE id = '".$row['user_id']."'";
                $updateaccount = $this->connection()->query($sql);
                // echo $mark;
                if ($updateaccount == true) {
                    $sql = "UPDATE `upgrade` SET `status`='Approved' WHERE count = '$mark'";
                    $updatestatus = $this->connection()->query($sql);
                        if ($updatestatus == true) {
                            $date = date("Y-m-d");
                            $statement = 'Your account upgrade has been approved';
                            $sql="INSERT INTO `notificationuser`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '$date', '".$row['user_id']."')";
                            $run = $this->connection()->query($sql);
                            header("location: admindashboard/upgrade.php");
                        }else {
                            echo "<script>window.history.back()</script>";
                        }
                }
           }
           
        }
    }
    public function deletedeposit($count){
        $sql = "DELETE FROM `deposit` WHERE count = '$count'";
        $delete = $this->connection()->query($sql);
        if ($delete == TRUE) {
            header('location: admindashboard/deposit.php');
        }
    }
    // upgrade account
     public function upgrade($receipt){
        $this->receipt = $receipt;
        // path to store receipt uploaded
        $filepath = "admindashboard/images/receipts/";
        $this->uploadapth = $filepath.$this->receipt['name'];
        $this->fileextension = strtolower(pathinfo($this->receipt['name'], PATHINFO_EXTENSION));
        // check for amount to be paid
        if ($this->receipt['size'] >5000000) {
            $_SESSION['errordpt'] = 'File size is too large (max. 500kb)';
            echo "<script>window.history.back()</script>";
        // check for file extension name
        }elseif ($this->fileextension != 'jpg' && $this->fileextension != 'png' && $this->fileextension != 'jpeg' && $this->fileextension != 'jfif' && $this->fileextension != 'pdf') {
            $_SESSION['errordpt'] = 'Only jpg, jpeg, pdf, png and jfif files are allowed';
            echo "<script>window.history.back()</script>";
        // upload to table
        }else{
            $sql = "INSERT INTO `upgrade`(`receipt`, `user_id`, `status`) VALUES ('".$this->receipt['name']."','".$_SESSION['id']."','pending')";
            $run = $this->connection()->query($sql);
            if ($run == true) {
                // upload receipt
                $_SESSION['deposit'] = "<script>
                        Swal.fire(
                      'Congratulation!',
                      'Your upgrade request has been submitted Successfully!',
                      'success'
                    )
                    </script>";
                move_uploaded_file($this->receipt["tmp_name"], $this->uploadapth);
                // create a notice to admin
                $userfullname = $this->getuserfullname();
                $date = date("Y-m-d");
                $statement = $userfullname .' just upgraded his account' .' on '.$date;
                $sql="INSERT INTO `notification`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '$date', '".$_SESSION['id']."')";
                $run = $this->connection()->query($sql);
                if ($_SESSION['id'] == 1) {
                    header("location: admindashboard/index.php");
                }else {
                    header("location: userdashboard/index.php");
                }
            }
        }
    }
    public function pendingupgrade(){
        $sql = "SELECT * FROM `upgrade` WHERE status = 'pending' ORDER BY count DESC";
        $getpending = $this->connection()->query($sql);
        while ($row = $getpending->fetch_assoc()) {
            echo'<tr>
                    <form action="../approveupgrade.php" method="post">
                        <input type="hidden" name="mark" class="form-control" value="'.$row['count'].'">
                        <td> <img src="images/receipts/'.$row['receipt'].'" alt="" class="img-fluid" width="100px"></td>
                        <td> '.$row['status'].' </td>
                        <td><button class="btn">Approve</button></td>
                         <td> <a href="../deleteupgrade.php?count='.$row['count'].'"> Delete </a> </td>
                    </form>
                </tr>';
                
            }
            
        }
    public function approvedupgrade(){
        $sql = "SELECT * FROM `upgrade` WHERE status = 'approved' ORDER BY count DESC";
        // $sql = "SELECT * FROM `deposit` WHERE id = '".$_SESSION['id']."' AND status = 'approved' ORDER BY count DESC";
        $getpending = $this->connection()->query($sql);
        while ($row = $getpending->fetch_assoc()) {
            echo '<tr>
                    <td> <img src= "images/receipts/'.$row['receipt'].'" alt="" class="img-fluid" width="100px"></td>
                    <td> '.$row['status'].' </td>
                    </tr>';
        }
    }
        
}

?>