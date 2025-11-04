<?php
// session_start();
class Investmentcontroller extends Usercontroller{
    protected $amount;
    protected $package;
    protected $currentdate;
    protected $maturitydate;
    protected $userbalance;
    // get user fullname
    public function getuserfullname(){
        $sql = "SELECT fullname FROM `users` WHERE id = '".$_SESSION['id']."'";
        $getbalance = $this->connection()->query($sql);
        $currentbalance = $getbalance->fetch_assoc();
        // return current amount from user table
        return $currentbalance['fullname'];
    }
    
    // get current user account balance
    public function userinvest($amount, $currentdate, $maturitydate){
        $this->amount = $amount;
        $this->currentdate = $currentdate;
        $this->maturitydate = $maturitydate;
        $this->userbalance = $this->usersamount();

        if (empty($this->amount) || $this->amount < 50) {
            $_SESSION['errorinv'] = 'Amount must be >$49.99';
            echo "<script>window.history.back()</script>";
        }elseif ($this->amount > $this->userbalance) {
            $_SESSION['errorinv'] = 'Insufficient balance. Kindly fund your account to make a deposit';
            echo "<script>window.history.back()</script>";
        } else {
            if ($this->amount <= 3999) {
                $package = 'Fundamental';
                $percentage = 5;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 4000 && $this->amount <= 17999) {
                $package = 'Enthusiast';
                $percentage = 6.7;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 18000 && $this->amount <= 39999) {
                $package = 'Professional';
                $percentage = 8.4;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 40000 && $this->amount <= 59999) {
                $package = 'Expert';
                $percentage = 10.8;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 60000 && $this->amount <= 79999) {
                $package = 'Veteran';
                $percentage = 11.7;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 80000 && $this->amount <= 109999) {
                $package = 'Gold';
                $percentage = 12.5;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 110000 && $this->amount <= 129999) {
                $package = 'Platinum';
                $percentage = 13.2;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }elseif ($this->amount >= 130000 && $this->amount <= 159999) {
                $package = 'Diamond';
                $percentage = 14.1;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }else {
                $package = 'Ultimate';
                $percentage = 15.2;
                $profit = $this->amount * ($percentage/100);
                $netprofit = $this->amount + $profit;
            }
            
            $sql = "INSERT INTO `investment`(`amount`, `package`, `percent`, `profit`, `currentdate`, `maturitydate`, `status`,`id`) VALUES ('$this->amount','$package','$percentage','$netprofit','$this->currentdate','$this->maturitydate','pending', '".$_SESSION['id']."')";
            $run = $this->connection()->query($sql);
            if ($run == true) {
                 $_SESSION['investment'] = "<script>
                        Swal.fire(
                      'Congratulation!',
                      'Your investment has been submitted Successfully!',
                      'success'
                    )
                    </script>";
                $newbalance = $this->userbalance - $this->amount;
                $sql="UPDATE `users` SET `amount`='$newbalance' WHERE id = '".$_SESSION['id']."'";
                $run = $this->connection()->query($sql);
                $userfullname = $this->getuserfullname();
                $date = date("Y-m-d");
                $statement = $userfullname .' made an investment of $' .$this->amount .' on '.$date;
                $sql="INSERT INTO `notification`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '$date', '".$_SESSION['id']."')";
                $run = $this->connection()->query($sql);
                    header("location: userdashboard/investment.php");
                }else{
                    $_SESSION['errorinv'] = 'Something went wrong';
                    echo "<script>window.history.back()</script>";
                }
        }

    }
    public function userpendinginvestment(){
        $sql = "SELECT * FROM `investment` WHERE id = '".$_SESSION['id']."' ORDER BY count DESC";
        $getinvestment = $this->connection()->query($sql);
        while ($row = $getinvestment->fetch_assoc()) {
            echo '<tr>
                    <td> '.$row['amount'].' </td>
                    <td> '.$row['package'].' </td>
                    <td> '.$row['currentdate'].' </td>
                    <td> '.$row['maturitydate'].' </td>
                    <td> '.$row['status'].' </td>
                    </tr>';
        }
    }
    public function userinvestment(){
        $sql = "SELECT * FROM `investment` ORDER BY count DESC";
        $getinvestment = $this->connection()->query($sql);
        while ($row = $getinvestment->fetch_assoc()) {
            echo '<tr>
                    <form action="../approveinvestment.php" method="post">
                    <td> '.$row['amount'].' <input type="hidden" class="form-control" name="count" value="'.$row['count'].'"> </td>
                    <td> '.$row['package'].' </td>
                    <td> '.$row['currentdate'].' </td>
                    <td> '.$row['maturitydate'].' </td>
                    <td> <input type="number" class="form-control" name="percent" value="'.$row['percent'].'"> </td>
                    <td> <input type="number" class="form-control" name="profit" value="'.$row['profit'].'"> </td>
                    <td> '.$row['status'].' </td>';
                    if ($row['status'] == 'pending') {
                    echo  '<td> <button type="submit" class="btn" name="investmentapproval"> Approve </button> </td>';
                    }
                    
                   echo '<td> <button type="submit" class="btn" name="updateprofit"> Update </button> </td>
                   <td> <a href="../deleteinvest.php?count='.$row['count'].'"> Delete </a> </td>
                   </form>
                    </tr>';
        }
    }
    
    public function approveinvestment($count,$profit,$percent){   
        $sql = "UPDATE `investment` SET `status`='Approved', `profit`='$profit', `percent`='$percent' WHERE count = '$count'";
        $approveinvestment = $this->connection()->query($sql);
        if ($approveinvestment == true) {
            $sql = "SELECT * FROM `investment` WHERE count = '$count'";
            $run = $this->connection()->query($sql);
            $row = $run->fetch_assoc();
            $date = date("Y-m-d");
            $statement = 'Your investment of ' .$row['amount'] .' on '.$date .' has been approved';
            $sql="INSERT INTO `notificationuser`(`statement`, `status`, `date`, `id`) VALUES ('$statement','pending', '$date', '".$row['id']."')";
            $run = $this->connection()->query($sql);
            header("location: admindashboard/investment.php");
        }else {
            echo "<script>window.history.back()</script>";
            }
    }
    public function updateprofit($count,$profit){   
        $sql = "UPDATE `investment` SET `status`='Approved', `profit`='$profit' WHERE count = '$count'";
        $updateprofit = $this->connection()->query($sql);
        if ($updateprofit == true) {
            header("location: admindashboard/investment.php");
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
                        $_SESSION['investmentmatured'] = 'Investment Mastured';
                        
                   }
                }
            }
        }
    }
     
    public function deleteinvestment($count){
        $sql = "DELETE FROM `investment` WHERE count = '$count'";
        $delete = $this->connection()->query($sql);
        if ($delete == TRUE) {
            header('location: admindashboard/investment.php');
        }
    }
}

?>