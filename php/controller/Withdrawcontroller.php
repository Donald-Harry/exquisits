<?php
// session_start();
class Withdrawcontroller extends Usercontroller{
    protected $amount;
    protected $cryptoaddress;
    protected $currentdate;
    protected $address;
    protected $userbalance;
    
    // get current user account balance
    public function userwithdraw($amount, $cryptoaddress, $address, $currentdate){
        $this->amount = $amount;
        $this->cryptoaddress = $cryptoaddress;
        $this->currentdate = $currentdate;
        $this->address = $address;
        $this->userbalance = $this->usersamount();

        if (empty($this->amount) || $this->amount < 500) {
            $_SESSION['errorwd'] = 'Amount must be >$499.99';
            echo "<script>window.history.back()</script>";
        }elseif ($this->amount > $this->userbalance) {
            $_SESSION['errorwd'] = 'Insufficient balance. Kindly fund your account';
            echo "<script>window.history.back()</script>";
        } elseif (empty($this->cryptoaddress)) {
            $_SESSION['errorwd'] = 'select a wallet address';
            echo "<script>window.history.back()</script>";
        }elseif (empty($this->address)) {
            $_SESSION['errorwd'] = 'Input a wallet address';
            echo "<script>window.history.back()</script>";
        }else {
            $accounttype = $this->accounttype();
            if($accounttype == 'Standard'){
                $_SESSION['withdraw'] = "<script>
                        Swal.fire(
                      'Attention!',
                      'An upgrade is required for your Account!',
                      'error'
                    )
                    </script>";
                     header("location: userdashboard/withdraw.php");
            }else{
                  $sql = "INSERT INTO `withdraw`(`amount`, `crytoaddress`, `address`, `currentdate`, `status`,`id`) VALUES ('$this->amount','$this->cryptoaddress','$this->address', '$this->currentdate','pending', '".$_SESSION['id']."')";
                $run = $this->connection()->query($sql);
                if ($run == true) {
                    header("location: userdashboard/withdraw.php");
                }else{
                    $_SESSION['errorwd'] = 'Something went wrong';
                    echo "<script>window.history.back()</script>";
                }
                
            }
             
            
           
            
        }

    }
    public function userpendingwithdraw(){
        $sql = "SELECT * FROM `withdraw` WHERE id = '".$_SESSION['id']."' ORDER BY count DESC";
        $getinvestment = $this->connection()->query($sql);
        while ($row = $getinvestment->fetch_assoc()) {
            echo '<tr>
                    <td> '.$row['amount'].' </td>
                    <td> '.$row['address'].' </td>
                    <td> '.$row['crytoaddress'].' </td>
                    <td> '.$row['currentdate'].' </td>
                    <td> '.$row['status'].' </td>
                    </tr>';
        }
    }
    public function userwithdrawal(){
        $sql = "SELECT * FROM `withdraw` ORDER BY count DESC";
        $getinvestment = $this->connection()->query($sql);
        while ($row = $getinvestment->fetch_assoc()) {
            echo '<tr>
                    <form action="../approvewithdraw.php" method="post">
                    <td> '.$row['amount'].' <input type="hidden" class="form-control" name="count" value="'.$row['count'].'"></td>
                    <td> '.$row['crytoaddress'].' </td>
                    <td> '.$row['address'].' </td>
                    <td> '.$row['currentdate'].' </td>
                    <td> '.$row['status'].' </td>';
                    if ($row['status'] == 'pending') {
                    echo  '<td> <button type="submit" class="btn text-success" name="investmentapproval"> Approve </button> </td>';
                    }
                    
                   echo '</form>
                    </tr>';
        }
    }
    
    public function approvewithdraw($count){   
        
        $sql = "SELECT * FROM `withdraw` WHERE count = '$count'";
        $run = $this->connection()->query($sql);
        if ($run == true) {
            $row = $run->fetch_assoc();
            $sql1 = "SELECT * FROM `users` WHERE id = '".$row['id']."'";
            $run1 = $this->connection()->query($sql1);
            // exit();
            if ($run1 == true) {
                $row1 = $run1->fetch_assoc();
                $this->userbalance = $row1['amount'];
                $newbalance = $this->userbalance - $row['amount'];
                $sqlminus = "UPDATE `users` SET `amount`='$newbalance' WHERE id = '".$row['id']."'";
                $run2 = $this->connection()->query($sqlminus);
                if ($run2 == true) {
                    $statement = 'Your withdrawal of ' .$row['amount'] .' on '.$row['currentdate'] .' has been approved';
                    $sql="INSERT INTO `notificationuser`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '".$row['currentdate']."', '".$row['id']."')";
                    $run = $this->connection()->query($sql);
                    $sqlapp = "UPDATE `withdraw` SET `status`='Approved' WHERE count = '$count'";
                    $approvewithdraw = $this->connection()->query($sqlapp);
                    header("location: admindashboard/withdraw.php");
    
                }else {
                    echo "<script>window.history.back()</script>";
                    }
            }     
        }else {
            echo "<script>window.history.back()</script>";
            }
    }

    public function autoupdate(){   
        $this->userbalance = $this->usersamount();
        $sql = "SELECT * FROM `investment` WHERE status = 'Approved' AND id = '".$_SESSION['id']."'";
        $run = $this->connection()->query($sql);

        while ($row = $run->fetch_assoc()) {
            if (strtotime(date("Y-m-d")) >= strtotime(date($row['maturitydate']))) {
                $sqlupdate = "UPDATE `investment` SET `status`='Paid' WHERE status = 'Approved' AND id = '".$_SESSION['id']."'";
                $run1 = $this->connection()->query($sqlupdate);
                
                if ($run1 == true) {
                    $newbalance = $this->userbalance + $row['profit'];
                   $sqladd = "UPDATE `users` SET `amount`='$newbalance' WHERE id = '".$_SESSION['id']."'";
                   $run2 = $this->connection()->query($sqladd);
                   if ($run2 == true) {
                    
                   }
                }
            }
            
        }
    }
}

?>