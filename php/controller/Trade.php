<?php
// session_start();
class Trade extends db{
    // get current user account balance
    public function usersamount($user_id)
    {
        $sql = "SELECT * FROM `users` WHERE id = '$user_id'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['amount'];
            // echo $_SESSION['id'];
        }
       
    }
    public function longtrade($pair, $orderType, $orderPrice, $amount, $tp, $sl, $user_id){
        $userbalance = $this->usersamount($user_id);
        if ($userbalance == 0 || $userbalance == '') {
            $_SESSION['trade_error'] = "Account balance is low. Kindly fund your account.";
            echo $_SESSION['trade_error'];
        }elseif (empty($orderPrice) || $orderPrice == 0) {
            $_SESSION['trade_error'] = "please fill order price";
            echo $_SESSION['trade_error'];
        }elseif(empty($amount) || $amount == 0) {
            $_SESSION['trade_error'] = "please fill amount";
            echo $_SESSION['trade_error'];
        }elseif ($amount > $userbalance ) {
            $_SESSION['trade_error'] = "Balance is too low ";
            echo $_SESSION['trade_error'];
        }elseif ($tp < $orderPrice) {
            $_SESSION['trade_error'] = "Error in trade. TP less than order price.";
            echo $_SESSION['trade_error'];
        }elseif ($sl > $orderPrice) {
            $_SESSION['trade_error'] = "Error in trade. SL greater than than order price";
            echo $_SESSION['trade_error'];
        }elseif ($tp < $sl || $sl > $tp) {
            $_SESSION['trade_error'] = "Error in trade.";
            echo $_SESSION['trade_error'];
        }else {
            $sql = "INSERT INTO `trade`(`pair`, `orderType`, `orderPrice`, `amount`, `type`, `tp`, `sl`, `user_id`, `status`) VALUES ('$pair','$orderType','$orderPrice','$amount','long','$tp','$sl','$user_id', 'pending')";
            $insert = $this->connection()->query($sql);
            if ($insert == true) {
                echo 'success';
            }else{
                echo $insert;
            }
            
        }
      
    }
    public function shorttrade($pair, $orderType, $orderPrice, $amount, $tp, $sl, $user_id){
        if (empty($orderPrice) || $orderPrice == 0) {
            $_SESSION['trade_error'] = "please fill order price";
            echo $_SESSION['trade_error'];
        }elseif(empty($amount) || $amount == 0) {
            $_SESSION['trade_error'] = "please fill amount";
            echo $_SESSION['trade_error'];
        }elseif ($tp > $orderPrice) {
            $_SESSION['trade_error'] = "Error in trade. TP greater than than order price.";
            echo $_SESSION['trade_error'];
        }elseif ($sl < $orderPrice) {
            $_SESSION['trade_error'] = "Error in trade. SL less than than order price";
            echo $_SESSION['trade_error'];
        }elseif ($tp > $sl || $sl < $tp) {
            $_SESSION['trade_error'] = "Error in trade.";
            echo $_SESSION['trade_error'];
        }else {
            $sql = "INSERT INTO `trade`(`pair`, `orderType`, `orderPrice`, `amount`, `type`, `tp`, `sl`, `user_id`, `status`) VALUES ('$pair','$orderType','$orderPrice','$amount','long','$tp','$sl','$user_id', 'pending')";
            $insert = $this->connection()->query($sql);
            if ($insert == true) {
                echo 'success';
            }else{
                echo $insert;
            }
            
        }
      
    }
    public function viewpendingtrade($user_id){
        
            $sql = "SELECT * FROM `trade` WHERE user_id = '$user_id' && status = 'pending'";
            $insert = $this->connection()->query($sql);
            if ($insert->num_rows > 0) {
                $i=1;
                foreach ($insert as $value) {
                    echo '<tr>
                            <td class="text-center"> ' . $i++ . ' </td>
                            <td class="text-center"> ' . $value['pair'] . ' </td>
                            <td class="text-center"> ' . $value['orderPrice']. ' </td>
                            <td class="text-center"> $' . $value['amount'] . ' </td>
                            <td class="text-center"> ' . $value['tp'] . ' </td>
                            <td class="text-center"> ' . $value['sl'] . ' </td>
                            <td class="text-center"> ' . $value['status'] . ' </td>
                        </tr>';
                }
            }else{
                echo '<tr>
                        <td colspan="7" class="text-center">No available data</td>
                    </tr>';
            }
            
      
    }
    public function viewtrade($user_id){
        
        $sql = "SELECT * FROM `trade` WHERE user_id = '$user_id'";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            $i=1;
            foreach ($insert as $value) {
                echo '<tr>
                        <td class="text-center"> ' . $i++ . ' </td>
                        <td class="text-center"> ' . $value['pair'] . ' </td>
                        <td class="text-center"> ' . $value['orderPrice']. ' </td>
                        <td class="text-center"> $' . $value['amount'] . ' </td>
                        <td class="text-center"> ' . $value['tp'] . ' </td>
                        <td class="text-center"> ' . $value['sl'] . ' </td>
                        <td class="text-center"> ' . $value['status'] . ' </td>
                    </tr>';
            }
        }else{
            echo '<tr>
                        <td colspan="7" class="text-center">No available data</td>
                    </tr>';
        }
        
  
    }
    public function viewalltrade(){
        
        $sql = "SELECT * FROM `trade` ORDER BY id DESC";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            foreach ($insert as $value) {
                echo '<tr>
                        <td class="text-center"> ' . $value['pair'] . ' </td>
                        <td class="text-center"> ' . $value['orderType']. ' </td>
                        <td class="text-center"> ' . $value['orderPrice']. ' </td>
                        <td class="text-center"> $' . $value['amount'] . ' </td>
                        <td class="text-center"> ' . $value['tp'] . ' </td>
                        <td class="text-center"> ' . $value['sl'] . ' </td>
                        <td class="text-center"> ' . $value['status'] . ' </td>
                        <td class="text-center">
                            <a href="../approvetrade.php?id='.$value['id'].'" class="btn btn-success">Approve</a>
                            <a href="../closetrade.php?id='.$value['id'].'" class="btn btn-danger">Close</a>
                        </td>
                    </tr>';
            }
        }else{
            echo '<tr>No available data</tr>';
        }
        
  
    }
    public function closetrade($trade_id){
        $sql = "UPDATE `trade` SET `status`='closed' WHERE id = '$trade_id'";
        $updatestatus = $this->connection()->query($sql);
        if ($updatestatus == true) {
            $_SESSION['success'] = 'Trade closed successfully';
            header("location: admindashboard/trading.php");
        }else {
            echo "<script>window.history.back()</script>";
        }
    }
    public function approvetrade($trade_id){
        $sql = "UPDATE `trade` SET `status`='running' WHERE id = '$trade_id'";
        $updatestatus = $this->connection()->query($sql);
        if ($updatestatus == true) {
            $_SESSION['success'] = 'Trade approved successfully';
            header("location: admindashboard/trading.php");
        }else {
            echo "<script>window.history.back()</script>";
        }
    }
  
    public function copyTrader($traderName, $profit, $success, $tradeType, $photo){
        
        if (empty($traderName)) {
            $_SESSION['trade_error'] = "Enter traders name";
            echo $_SESSION['trade_error'];
        }elseif(empty($profit)) {
            $_SESSION['trade_error'] = "Enter profit percentage";
            echo $_SESSION['trade_error'];
        }elseif (empty($success)) {
            $_SESSION['trade_error'] = "Enter traders success rate";
            echo $_SESSION['trade_error'];
        }elseif ($photo['name'] == '') {
            $_SESSION['trade_error'] = "Choose a photo";
            echo $_SESSION['trade_error'];
        }else {
            $filepath = "admindashboard/images/traders/";
            $mypathtosave = $filepath.$photo['name'];
            $sql = "INSERT INTO `traders`(`tradersName`, `profit`, `success`, `tradeType`, `photo`) VALUES ('$traderName','$profit','$success','$tradeType','".$photo['name']."')";
            $run = $this->connection()->query($sql);
            if ($run == true) {
                echo 'success';
                move_uploaded_file($photo["tmp_name"], $mypathtosave);
            }
        }
    }
    public function viewalltraders(){
        
        $sql = "SELECT * FROM `traders` ORDER BY id DESC";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            foreach ($insert as $value) {

                echo '<form action="../updatetrader.php?id='.$value['id'].'" method="post">
                            <tr>
                            <td class="text-center "> <img src="images/traders/' . $value['photo']. '" class="img-fluid" alt="" width="50px" height="50px"></td>
                            <td class="text-center"> ' . $value['tradersName']. ' </td>
                            <td class="text-center"> <input type="number" name="profit" value="' . $value['profit']. '"> </td>
                            <td class="text-center"> <input type="number" name="success" value="' . $value['success'] . '"> </td>
                            <td class="text-center">' . $value['tradeType'] . '</td>
                            <td class="text-center">
                                <a href="../deletetrader.php?id='.$value['id'].'" class="btn btn-danger">Delete</a>
                                <button class="btn btn-primary">Update</buton>
                            </td>
                        </tr>
                    </form>';
            }
        }else{
            echo '<tr><td colspan="6" class="text-center">No available data</td></tr>';
        }
        
  
    }
    public function showalltraders(){
        
        $sql = "SELECT * FROM `traders` ORDER BY id DESC";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            foreach ($insert as $value) {
                echo '<tr>
                        <td class="text-center "> <img src="../admindashboard/images/traders/' . $value['photo']. '" class="img-fluid" alt="" width="50px" height="50px"></td>
                        <td class="text-center text-capitalize"> ' . $value['tradersName']. ' </td>
                        <td class="text-center text-capitalize"> ' . $value['profit']. '% </td>
                        <td class="text-center text-capitalize"> ' . $value['success'] . '% </td>
                        <td class="text-center text-capitalize"> ' . $value['tradeType'] . ' </td>
                        <td class="text-center text-capitalize">
                            <button onclick="copytrader('.$value['id'].')" class="btn btn-primary">Copy</button>
                        </td>
                    </tr>';
            }
        }else{
            echo '<tr><td colspan="6" class="text-center">No available data</td></tr>';
        }
        
  
    }
    public function usercopyTrader($trader_id, $user_id){
        $sql = "SELECT * FROM `traders` WHERE id = '$trader_id'";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            $details = $insert->fetch_assoc();
            $tradersName = $details['tradersName'];
            $profit = $details['profit'];
            $success = $details['success'];
            $traderType = $details['tradeType'];
            $sql1 = "SELECT * FROM `copied` WHERE trader_id = '$trader_id' && user_id = '$user_id'";
            $check = $this->connection()->query($sql1);
            if ($check->num_rows > 0) {
                echo 'failure';
            }else{
                $prepared = "INSERT INTO `copied`(`tradersName`, `profit`, `success`, `traderType`, `user_id`, `trader_id`) VALUES ('$tradersName','$profit','$success','$traderType','$user_id','$trader_id')";
                $sql2 = $this->connection()->query($prepared);
                if ($sql2 == true) {
                    echo 'success';
                }
            }
        }
    }
    public function usershowalltraders($user_id){
        $sql = "SELECT * FROM `copied`WHERE user_id = '$user_id' ORDER BY id DESC";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            foreach ($insert as $value) {
                echo '<tr>
                        <td class="text-center text-capitalize"> ' . $value['tradersName']. ' </td>
                        <td class="text-center text-capitalize"> ' . $value['profit']. '% </td>
                        <td class="text-center text-capitalize"> ' . $value['success'] . '% </td>
                        <td class="text-center text-capitalize"> ' . $value['traderType'] . ' </td>
                        <td class="text-center text-capitalize">
                            <a href="../dt.php?id='.$value['id'].'" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>';
            }
        }else{
            echo '<tr><td colspan="6" class="text-center">No available data</td></tr>';
        }
    }
    public function usercopiedtraders($user_id){
        $sql = "SELECT * FROM `copied` WHERE user_id = '$user_id' ORDER BY id DESC";
        $insert = $this->connection()->query($sql);
        if ($insert->num_rows > 0) {
            foreach ($insert as $value) {
                echo '<tr>
                        <td class="text-center text-capitalize"> ' . $value['tradersName']. ' </td>
                        <td class="text-center text-capitalize"> ' . $value['profit']. '% </td>
                        <td class="text-center text-capitalize"> ' . $value['success'] . '% </td>
                        <td class="text-center text-capitalize"> ' . $value['traderType'] . ' </td>
                    </tr>';
            }
        }else{
            echo '<tr><td colspan="6" class="text-center">No available data</td></tr>';
        }
    }

    public function deletecopied($id){
        $sql = "DELETE FROM `copied` WHERE id = '$id'";
        $delete = $this->connection()->query($sql);
        if ($delete == TRUE) {
            header('location: userdashboard/traders.php');
        }
    }
    public function deletetrader($id){
        $sql = "DELETE FROM `traders` WHERE id = '$id'";
        $updatestatus = $this->connection()->query($sql);
        if ($updatestatus == true) {
            $_SESSION['tradersuccess'] = 'Trader deleted successfully';
            header("location: admindashboard/copytrading.php");
        }else {
            echo "<script>window.history.back()</script>";
        }
    }
    public function updatetrader($profit, $success, $id){
        $sql = "UPDATE `traders` SET `profit`='$profit',`success`='$success' WHERE id = '$id'";
        $updatestatus = $this->connection()->query($sql);
        if ($updatestatus == true) {
            $_SESSION['tradersuccess'] = 'Trader updated successfully';
            header("location: admindashboard/copytrading.php");
        }else {
            echo "<script>window.history.back()</script>";
        }
    }
  
    
        
}

