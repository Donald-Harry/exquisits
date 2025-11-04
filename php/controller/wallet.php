<?php
session_start();
class Wallet extends db{
    protected $email;
    protected $coin;
    protected $address;
    protected $userid;
    public function walletdetails($email, $coin, $address, $userid){
        $this->email = $email;
        $this->coin = $coin;
        $this->address = $address;
        $this->userid = $userid;
    }
    public function addWallet(){
        $sql = "INSERT INTO `wallet`(`email`, `coin`, `address`, `userid`) VALUES ('$this->email','$this->coin','$this->address','$this->userid')";
        $addwallet = $this->connection()->query($sql);
        if ($addwallet) {
            echo 'yes';
        }else{
            echo 'no';
        }
        // echo $this->coin;

    }
    public function displaywallet(){
        $sql = "SELECT * FROM `wallet` WHERE email = '$this->email'";
        $displaywallet = $this->connection()->query($sql);
        while ($row = $displaywallet->fetch_assoc()) {
            
            echo '<div class="items">';
            if ($row['coin'] == 'btc') {
                echo '<span class="icofont-bitcoin d-block rounded-1 m-3 fs-20 text-primary"></span>';
            }elseif ($row['coin'] == 'eth') {
                echo '<span class="icofont-diamond d-block rounded-1 m-3 fs-20 text-primary"></span>';
            }else{
                echo '<span class="icofont-coins d-block rounded-1 m-3 fs-20 text-primary"></span>';
            }
            echo '<span class=""></span>';
            echo '<input class="form-control rounded-0" type="text" value=" '. $row['address'] .'" readonly>';
            echo '<button class="btn btn-outline-primary rounded-0" id="btncopy">' .'copy' .'</button>';
            echo '</div>';
        }
    }


}




?>