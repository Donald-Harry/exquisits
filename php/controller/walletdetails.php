<?php
// session_start();
class Walletdetails extends db{
    protected $email;
    protected $coin;
    protected $address;
    protected $user_id;
    protected $walletid;
    public function walletdetail($coin, $address, $user_id){
        $this->coin = $coin;
        $this->address = $address;
        $this->user_id = $user_id;
    }
    public function addWallet(){
        $sql = "INSERT INTO `wallet`(`coin`, `address`, `id`) VALUES ('$this->coin','$this->address','$this->user_id')";
        $addwallet = $this->connection()->query($sql);
        if ($addwallet == true) {
            
            return $this->getwallet();
        }        
    }
    // display all address
    public function getwallet(){
        $sql = "SELECT * FROM `wallet` WHERE id = '".$_SESSION['id']."'";
        $getwallets = $this->connection()->query($sql);
        $i = 1;
        while ($row = $getwallets->fetch_assoc()) {
            echo '<tr>
                    <td> '.$i++.' </td>
                    <td> '.$row['coin'].' </td>
                    <td> '.$row['address'].' </td>
                    <td><button class="btn" onclick="deletewalletaddress('.$row['count'].')">delete</button></td>
                  </tr>';
        }
       
    }
    // display all admin wallet
    public function walletcopy(){
        $sql = "SELECT * FROM `wallet` WHERE id = 1";
        $getwallets = $this->connection()->query($sql);
        $i = 1;
        while ($row = $getwallets->fetch_assoc()) {
            echo '
            <p class="fs-14 text-white" style="text-transform: uppercase;">'.$row['coin'].' Address</p>
            <div class="input-group input-group-lg my-2">
            <input type="text" class="copytext" value="'.$row['address'].'" class="form-control rounded-0">
            <button class="btn btn-outline-primary rounded-0 copy">Copy Address</button>
			</div>';
        }
    }
    public function deleteaddress($count){
        $this->walletid = $count;
        $sql ="DELETE FROM `wallet`WHERE count = '$this->walletid'";
        $delete = $this->connection()->query($sql);
        if ($delete == TRUE) {
            return $this->getwallet();
        }
    }
   
    

}
?>