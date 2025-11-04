<?php
class Editprofile extends db{
    public $fullname;
    public $password;
    public $newpassword;
    public $email;

    public function edit($fullname, $password, $newpassword, $email){
        $this->fullname = $fullname;
        $this->password = $password;
        $this->newpassword = $newpassword;
        $this->email = $email;
        
        if (strlen($this->newpassword) < 8) {
            $_SESSION['message'] = "Password too short. Length must be greater than 7";
            echo "<script>window.history.back()</script>";
        }else{
            $sql = "SELECT * FROM `users` WHERE email = '$this->email'";
             $editor = $this->connection()->query($sql);
             if ($editor->num_rows > 0) {
                $row = $editor->fetch_assoc();
                $verifypass = password_verify($this->password, $row['password']);
            if ($verifypass) {
                $hashnew = password_hash($this->newpassword, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `fullname`='$this->fullname',`password`='$hashnew',`cpassword`='$this->newpassword' WHERE email = '$this->email'";
                $updatedetails = $this->connection()->query($sql);
                echo "<script>window.location.href='../../Dashboard/profile.php'</script>";
            }   else{
                echo "<script>window.history.back()</script>";
            }
            //    if ($status == 'activated') {
            //     $sql = "UPDATE `users` SET `status`='deactivated' WHERE id = '$this->id'";
            //     $activate = $this->connection()->query($sql);
            //      echo "<script> window.location.href='../../Dashboard/index.php'</script>";
            //    }else{
            //     $sql = "UPDATE `users` SET `status`='activated' WHERE id = '$this->id'";
            //     $activate = $this->connection()->query($sql);
            //      echo "<script> window.location.href='../../Dashboard/index.php'</script>";
            //    }
            }
        }
        
        
        
        
       
        
        
   }
    
}


?>