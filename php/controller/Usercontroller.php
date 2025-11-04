<?php
// session_start();
class Usercontroller extends db
{
    public $fullname;
    public $email;
    public $password;
    public $cpassword;
    public $sessionMsg;
    public $user_id;
    public $fileextension;
    public $uploadapth;
    
    // set user signin details
    public function usersignindetails($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    // set user signup details
    public function usersignupdetails($fullname, $email, $password, $cpassword)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->password = $password;
        $this->cpassword = $cpassword;
    }
    public function mailverification($verificationcode, $userfullname)
    {
        $to = "$this->email";
        $subject = "Exquisits Verification Email";
        $message = '
        <html>

        <head>
            <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exquisits - Email Verification</title>
            <style>
                .email {
                    margin: 50px auto;
                    background-color: #004190;
                    opacity: 0.9;
                    color: #fff;
                    padding: 20px;
                }
                .logo {
                    border-bottom: 1px solid #fff;
                    opacity: 0.9;
                    color: #fff;
                    padding: 20px;
                    text-align: center;
                }
                .footer{
                    border-top: 1px solid #fff;
                    opacity: 0.9;
                    color: #fff;
                    padding: 20px;
                }
                .footer p{
                    text-align: center;
                }
        
                h2, h4 {
                    text-align: center;
                    font-size: 16px;
                    color: #fff;
                    
                }
        
                p {
                    font-size: 14px;
                    text-align: justify;
                    
        
                }
        
                
                .container{
                    background-color: #222;
                    width: 100%;
                    margin: 0px auto;
                    padding: 30px;
                }
        
                span {
                    color: #222;
                }
            </style>
        </head>
        
        <body>
            <div class="container">
        
                <div class="logo">
                    <img src="https://exquisits/assets/img/logo.png" alt="" width="100">
                </div>
                <div class="email">
            
                    <h2> Verify your Email Address</h2>
                    <h4>Dear '.$userfullname.', </h4>
                    <p> Please verify your email address using the code below;</p>
                    <span> Verification code: '.$verificationcode.' </span>
                    <p> Thank You!.</p>
                    <p> Best regards, </p>
                </div>
                <div class="footer">
                    <p>&copy; 2024 Exquisits, All rights reserved</p>
                    <p>Email: <code>supports@exquisits.online</code></p>
                </div>
            </div>
        </body>
        
        </html>
                    ';


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <supports@exquisits.online>' . "\r\n";
        $headers .= "X-Priority: 3\r\n";


        $send = mail($to, $subject, $message, $headers);
        if ($send == true) {
            $_SESSION['email'] = $this->email;
        } else {
            // echo 'no';
        }
    }
    public function welcomemail($userfullname)
    {
        $to = "$this->email";
        $subject = "Exquisits Verification Email";
        $message = '
        <html>

        <head>
            <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Welcome to Exquisits</title>
            <style>
                .email {
                    margin: 50px auto;
                    background-color: #004190;
                    opacity: 0.9;
                    color: #fff;
                    padding: 20px;
                }
                .logo {
                   
                    border-bottom: 1px solid #fff;
                    opacity: 0.9;
                    color: #fff;
                    padding: 20px;
                    text-align: center;
                }
                .footer{
                    border-top: 1px solid #fff;
                    opacity: 0.9;
                    color: #fff;
                    padding: 20px;
                }
                .footer p{
                    text-align: center;
                }
        
                h2 {
                    text-align: center;
                    font-size: 16px;
                }
        
                p {
                    font-size: 14px;
                    text-align: justify;
        
                }
        
                a {
                    text-decoration: none;
                    font-size: 13px;
                    padding: 15px;
                    border-radius: 8px;
                    width: fit-content;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #004190;
                    color: #fff;
                }
                .container{
                    background-color: #222;
                    width: 100%;
                    margin: 0px auto;
                    padding: 30px;
                }
        
                span {
                    color: #222;
                }
            </style>
        </head>
        
        <body>
            <div class="container">
        
                <div class="logo">
                    <img src="http://localhost/equifort/assets/img/logo.png" alt="" width="100">
                </div>
                <div class="email">
                <h1>Welcome to Exquisits!</h1>
                <p>Dear '.$userfullname.',</p>
                <p>Thank you for joining Exquisits. We are delighted to have you on board. Our mission is to empower you with the tools you need to make informed investment decisions and grow your financial portfolio.</p>
                <p>As a valued member, you will have access to:</p>
                <ul>
                    <li>Personalized investment trading</li>
                    <li>Real-time updates and alerts on your portfolio</li>
                    <li>Special copy trading from  experts</li>
                </ul>
                <p>If you have any questions or need assistance, our dedicated support team is here to help. Feel free to reach out to us.</p>
                <p>We look forward to helping you achieve your investment goals. Welcome aboard!</p>
                <p>Best regards,<br>The Exquisits Team</p>
                    
                </div>
                <div class="footer">
                    <p>&copy 2024 Exquisits, All rights reserved</p>
                    <p>Email: supports@exquisits.online</p>
                </div>
            </div>
        </body>
        
        </html>
                    ';


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <support@exquisits.online>' . "\r\n";
        $headers .= "X-Priority: 3\r\n";


        $send = mail($to, $subject, $message, $headers);
        if ($send == true) {
            $_SESSION['email'] = $this->email;
        } else {
            // echo 'no';
        }
    }
    // user forgot password
    public function forgetpassword($email)
    {
        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $run = $this->connection()->query($sql);
        if ($run == true) {
            $passcode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            echo
            $row = $run->fetch_assoc();
            $sql = "UPDATE `users` SET `trade`='$passcode' WHERE email = '" . $row['email'] . "'";
            if ($runmail == true) {
                $to = "$email";
                $subject = "Exquisits Password Reset";
                $message = '<html>
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Exquisits - Password Reset</title>
                            <style>
                                .email {
                                    margin: 50px auto;
                                    background-color: #004190;
                                    opacity: 0.9;
                                    color: #fff;
                                    padding: 20px;
                                }
                                .logo {
                                   
                                    border-bottom: 1px solid #fff;
                                    opacity: 0.9;
                                    color: #fff;
                                    padding: 20px;
                                    text-align: center;
                                }
                                .footer{
                                    border-top: 1px solid #fff;
                                    opacity: 0.9;
                                    color: #fff;
                                    padding: 20px;
                                }
                                .footer p{
                                    text-align: center;
                                }
                                h2, h4 {
                                    text-align: center;
                                    font-size: 16px;
                                    color: #fff;
                                    
                                }
                                p {
                                    font-size: 14px;
                                    text-align: justify;
                                    
                        
                                }
                                .container{
                                    background-color: #222;
                                    width: 100%;
                                    margin: 0px auto;
                                    padding: 30px;
                                }
                                span {
                                    color: #222;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <div class="logo">
                                    <img src="http://localhost/equifort/assets/img/logo.png" alt="" width="100">
                                </div>
                                <div class="email">
                            
                                    <h2> Verify your Email</h2>
                                    <h4>Dear '.$row["fullname"].' </h4>,
                                    <p> A password reset was initiated on your account. If this is you, confirm the code given. </p>
                                    <h3>Code: <span>$passcode</span> </h3>
                                </div>
                                <div class="footer">
                                    <p>&copy 2024 Exquisits, All rights reserved</p>
                                    <p>Email: supports@exquisits.online</p>
                                </div>
                            </div>
                        </body>
                    </html>
                    ';
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: <supports@exquisits.online>' . "\r\n";
                $send = mail($to, $subject, $message, $headers);
                if ($send == true) {
                    header("location: ../../passcode.php?email=$email");
                }
            }
        }
    }
    // passcode check
    public function passcode($email, $passcode)
    {
        $sql = "SELECT * FROM `users` WHERE email ='$email'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            $row = $run->fetch_assoc();
            if ($passcode == $row['trade']) {
                header("location: ../../passwordreset.php?email=$email");
            } else {
                $_SESSION['message'] = 'Enter valid reset code';
                echo "<script> window.history.back()</script>";
            }
        }
    }
    // password reset
    public function passwordreset($email, $password)
    {
        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $run = $this->connection()->query($sql);
        if ($run == true) {
            $row = $run->fetch_assoc();
            if (empty($password) or strlen($password) < 8) {
                $_SESSION['message'] = "Enter password (Min. 8 characters, must include atleast one uppercase, lowercase and number)";
                echo "<script> window.history.back()</script>";
            } else {
                $lockpassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `password`='$lockpassword', `cpassword`='$password' WHERE email = '" . $row['email'] . "'";
                $run = $this->connection()->query($sql);
                if ($run == true) {
                    $_SESSION['message'] = "Password Reset Successful";
                    header("location: ../../signin.php");
                }
            }
        }
    }
    // user sign up
    public function usersignup($fullname, $email, $password, $cpassword)
    {
        $this->email = $email;
        $this->fullname = $fullname;
        $this->password = $password;
        $this->cpassword = $password;
         
        // create array for cleaning
        $specials = array('.', '/', ';', '-', '_', '$');
        // replace special characters in name with empty string
        $this->fullname = str_replace($specials, "", $this->fullname);
        // validate fullname
        if (strlen($this->fullname) < 4 or empty($this->fullname)) {
            $_SESSION['message'] = "Fullname too short. Please enter your fullname";
            echo "<script> window.history.back()</script>";
            // validate email
        } elseif (empty($this->email)) {
            $_SESSION['message'] = "Enter a valid email";
            echo "<script> window.history.back()</script>";
            // // validate password length
        } elseif (strlen($this->password) < 8) {
            $_SESSION['message'] = "Password too short. Length must be greater than 7";
            echo "<script> window.history.back()</script>";
            // validate password for numbers
        } elseif (!preg_match_all("/[0-9]/i", $this->password)) {
            $_SESSION['message'] = "Password must contain a number";
            echo "<script> window.history.back()</script>";
            // validate password for uppercase
        } elseif (!preg_match_all("/[a-z]/i", $this->password)) {
            $_SESSION['message'] = "Password must contain an lowercase";
            echo "<script> window.history.back()</script>";
            // validate password and confirm password
        } elseif ($this->cpassword != $this->password) {
            $_SESSION['message'] = "Password mismatch. Check Password";
            echo "<script> window.history.back()</script>";
        } else {
            // hash password before entering database
            // $this->password = password_hash($this->password, PASSWORD_DEFAULT);
            $sql = "SELECT * FROM `users` WHERE email = '$this->email'";
           
            $run = $this->connection()->query($sql);
            if ($run->num_rows > 0) {
                $_SESSION['message'] = "Email already exist. Enter a different Email";
                echo "<script> window.history.back()</script>";
            }
            $verificationcode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            //  $userfullname = $this->fullname;
             
          
            // insert to database
            $sql1 = "INSERT INTO `users`(`fullname`, `email`, `password`, `cpassword`, `status`, `amount`, `trade`, `mail_verification`, `account_type`, `upgrade_cost`, `profit`, `photo`, `photostatus`) VALUES ('$this->fullname','$this->email','$this->password','$this->cpassword', 'deactivated', '0', '$verificationcode', 'unverified', 'Standard', '', '0', '', 'unverified')";
            $senddetails = $this->connection()->query($sql1);
                
            if ($senddetails) {
                 
                $this->mailverification($verificationcode, $userfullname);
                
                // $userfullname = $this->username();
               
                $date = date("Y-m-d");
                $statement = $userfullname . ' registered on the system on ' . $date;
                $sql = "INSERT INTO `notification`(`statement`, `status`, `date`) VALUES ('$statement','pending', '$date')";
                $run = $this->connection()->query($sql);

                echo "<script> window.location.href='../../signupinfo.php?email=$this->email'</script>";
            } else {
                echo "no";
            }
        }
    }
    // verifyemail
    public function verifymail($email, $code)
    {
        $sql = "SELECT * FROM `users` WHERE email = '$email'";
        $run = $this->connection()->query($sql);

        if ($run->num_rows > 0) {
            $row = $run->fetch_assoc();
            $userfullname = $row['fullname'];
            if ($row['trade'] == $code) {
                $sql = "UPDATE `users` SET `mail_verification`='verified' WHERE email = '$email'";
                $verify = $this->connection()->query($sql);
                if ($verify == true) {
                    $this->welcomemail($userfullname);
                    header("location: verified.php");
                } else {
                    $_SESSION['message'] = "Unable to verifiy";
                    echo "<script> window.history.back()</script>";
                }
                echo "<script> window.history.back()</script>";
            } else {
                $_SESSION['message'] = "Incorrect verification code";
                echo "<script> window.history.back()</script>";
            }
        } else {
            $_SESSION['message'] = "User does not exist";
            echo "<script> window.history.back()</script>";
        }
    }

    // user sign in
    public function signinuser($email, $password)
    {
       
        $this->email = $email;
        $this->password = $password;
        
        // validate email and password
        if (empty($this->email) or empty($this->password)) {
            $_SESSION['message'] = "Invalid login information. Please enter details";
            // echo "<script> window.history.back()</script>";
        } else {
            // select user from database using email
            $sql = "SELECT * FROM `users` WHERE email = '$this->email'";
            $getdetails = $this->connection()->query($sql);
            // input info in a row
            if ($getdetails->num_rows > 0) {
                $row = $getdetails->fetch_assoc();
                // validate status
                if ($row['status'] == 'deactivated') {
                    $_SESSION['message'] = "Please contact Admin to activate your account";
                    echo "<script> window.history.back()</script>";
                    // confirm and enter admin
                } elseif ($row['email'] == 'admin@exquisits.online') {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    echo "<script> window.location.href='admindashboard/index.php'</script>";
                } else {
                    // confirm and enter users
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    echo "<script> window.location.href='userdashboard/inactive.php'</script>";
                }
            } else {

                $_SESSION['message'] = "User does not exist. Please signup";
                echo "<script> window.history.back()</script>";
            }
        }
    }
    public function setid()
    {
        $sql = "SELECT * FROM `users` WHERE email = '$this->email'";
        $getdetail = $this->connection()->query($sql);
        if ($getdetail->num_rows > 0) {
            $row = $getdetail->fetch_assoc();
            global $id, $fullname, $email, $status;
            $id = $row['id'];
            $fullname = $row['fullname'];
            $email = $row['email'];
            $status = $row['status'];
        }
    }
    // get user fullname logged in
    public function username()
    {
        $sql = "SELECT * FROM `users` WHERE id = '" . $_SESSION['id'] . "'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['fullname'];
            // echo $_SESSION['id'];
        }
    }
    // get user account type logged in
   public function accounttype()
    {
        $sql = "SELECT * FROM `users` WHERE id = '" . $_SESSION['id'] . "'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['account_type'];
            // echo $_SESSION['id'];
        }
    }
    // get user account type logged in
    public function upgradecost()
    {
        $sql = "SELECT * FROM `users` WHERE id = '" . $_SESSION['id'] . "'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['upgrade_cost'];
            // echo $_SESSION['id'];
        }
    }
    // get user fullname

    // get all user names
    public function userfullname($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getamount = $this->connection()->query($sql);
        if ($getamount->num_rows > 0) {
            $row = $getamount->fetch_assoc();
            return $row['fullname'];
        }
    }
    public function userupgradecost($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getamount = $this->connection()->query($sql);
        if ($getamount->num_rows > 0) {
            $row = $getamount->fetch_assoc();
            return $row['upgrade_cost'];
        }
    }
    // get user amount logged in
    public function usersamount1()
    {
        $sql = "SELECT SUM(amount) as usersbalance FROM `users` WHERE id != 1";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['usersbalance'];
            // echo $_SESSION['id'];
        }
    }
    // get users total profits
    public function usersprofits()
    {
        $sql = "SELECT SUM(profit) as usersprofit FROM `investment` WHERE id != 1";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['usersprofit'];
            // echo $_SESSION['id'];
        }
    }
    // user total deposits individually
    public function userdepositindividually()
    {
        $sql = "SELECT SUM(amount) as userdeposits FROM `deposit` WHERE id = '" . $_SESSION['id'] . "' AND status = 'Approved'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['userdeposits'];
            // echo $_SESSION['id'];
        }
    }
    // get users total investments
    public function usersinvestments()
    {
        $sql = "SELECT SUM(amount) as usersinvestments FROM `investment` WHERE id != 1";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['usersinvestments'];
            // echo $_SESSION['id'];
        }
    }
    // user amount individually
    public function usersamount()
    {
        $sql = "SELECT * FROM `users` WHERE id = '" . $_SESSION['id'] . "'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['amount'];
            // echo $_SESSION['id'];
        }
    }
    // user total investment individually
    public function userinvestmentindividually()
    {
        $sql = "SELECT SUM(amount) as userinvestments FROM `investment` WHERE id = '" . $_SESSION['id'] . "'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            return $row['userinvestments'];
            // echo $_SESSION['id'];
        }
    }
    // user total deposits individually
    public function userprofitindividually()
    {
        $sql = "SELECT SUM(profit) as userinvestments FROM `investment` WHERE id = '" . $_SESSION['id'] . "' AND status = 'Approved'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            $investmentedamounts = $row['userinvestments'];
        }
        $sql = "SELECT SUM(percent) as userpercent FROM `investment` WHERE id = '" . $_SESSION['id'] . "' AND status = 'Approved'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            $investmentedpercentage = $row['userpercent'] / 100;
        }
        $sql1 = "SELECT * FROM `users` WHERE id = '" . $_SESSION['id'] . "'";
        $userinfo1 = $this->connection()->query($sql1);
        if ($userinfo1->num_rows > 0) {
            $row1 = $userinfo1->fetch_assoc();
            $inprofits = $row1['profit'];
        }
        // $totalprofit =  $investmentedamounts * $investmentedpercentage;
        return $investmentedamounts + $inprofits;
    }
    public function userprofitindividual($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT SUM(profit) as userinvestments FROM `investment` WHERE id = '$this->user_id' AND status = 'Approved'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            $investmentedamounts = $row['userinvestments'];
        }
        $sql = "SELECT SUM(percent) as userpercent FROM `investment` WHERE id = '$this->user_id' AND status = 'Approved'";
        $userinfo = $this->connection()->query($sql);
        if ($userinfo->num_rows > 0) {
            $row = $userinfo->fetch_assoc();
            $investmentedpercentage = $row['userpercent'] / 100;
        }
        $sql1 = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $userinfo1 = $this->connection()->query($sql1);
        if ($userinfo1->num_rows > 0) {
            $row1 = $userinfo1->fetch_assoc();
            $inprofits = $row1['profit'];
        }
        // $totalprofit =  $investmentedamounts * $investmentedpercentage;
        return $investmentedamounts + $inprofits;
    }
    // get total deposits
    public function usersdeposits()
    {
        $sql = "SELECT SUM(amount) as deposits FROM `deposit`";
        $deposit = $this->connection()->query($sql);
        if ($deposit == true) {
            $row = $deposit->fetch_assoc();
            return $row['deposits'];
        }

        // echo $_SESSION['id'];
    }
    // get all users amount
    public function useramount($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getamount = $this->connection()->query($sql);
        if ($getamount->num_rows > 0) {
            $row = $getamount->fetch_assoc();
            return $row['amount'];
        }
    }
    // get user trade
    public function usertrade($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getamount = $this->connection()->query($sql);
        if ($getamount->num_rows > 0) {
            $row = $getamount->fetch_assoc();
            return $row['trade'];
        }
    }
    // get user profit
    public function userprofit($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `investment` WHERE id = '$this->user_id' ORDER BY count DESC LIMIT 2";
        $getprofits = $this->connection()->query($sql);
        while ($row = $getprofits->fetch_assoc()) {
            echo '<form action="" method=""  class="p-2">
                    <p> Package: ' . $row['package'] . ' </p>
                    <p> <input type="number" class="form-control" name="amount" value="' . $row['amount'] . '">  </p>
                    <input type="hidden" name="count" value="' . $row['count'] . '">
                    <p><button class="btn border-primary border-1 d-block w-100" name="update">Update</button> </p>
                    <p><button class="btn border-primary border-1 d-block w-100" name="delete">Delete</button> </p>
                </form>';
        }
    }
    public function usermaturitydate($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `investment` WHERE id = '$this->user_id'  AND status = 'Approved' ORDER BY count DESC LIMIT 5";
        $getprofits = $this->connection()->query($sql);
        while ($row = $getprofits->fetch_assoc()) {
            echo '<form action="../extenddate.php?user_id=' . $user_id . '" method="post"  class="p-2">
                    <p> Package: ' . $row['package'] . ' </p>
                    <p> <input type="date" class="form-control" name="date" value="' . $row['maturitydate'] . '">  </p>
                    <input type="hidden" name="count" value="' . $row['count'] . '">
                    <p><button class="btn border-primary border-1 d-block w-100" name="extend">Extend</button> </p>
                </form>';
        }
    }
    public function updatematuritydate($count, $date, $user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `investment` SET `maturitydate`='$date' WHERE count = '$count'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            header("location: admindashboard/userdetails.php?user_id=$user_id");
        }
    }
    public function updateaccountcost($amount, $user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `users` SET `upgrade_cost`='$amount' WHERE id = '$this->user_id'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            header("location: admindashboard/userdetails.php?user_id=$user_id");
        }
    }
    public function updateaccountprofit($amount, $user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `users` SET `profit`='$amount' WHERE id = '$this->user_id'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            header("location: admindashboard/userdetails.php?user_id=$user_id");
        }
    }
    public function edituseramount($amount, $user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `users` SET `amount`='$amount' WHERE id = '$this->user_id'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            header("location: admindashboard/userdetails.php?user_id=$user_id");
        }
    }
    public function edituserprofit($amount, $user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `users` SET `amount`='$amount' WHERE id = '$this->user_id'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            header("location: admindashboard/userdetails.php?user_id=$user_id");
        }
    }
    // get number of users
    public function usercount()
    {
        $sql = "SELECT * FROM `users`";
        $usercount = $this->connection()->query($sql);
        $row = $usercount->num_rows;
        return $row;
    }
    // displays users
    public function getusers()
    {
        $sql = "SELECT * FROM `users` WHERE id != 1";
        $getusers = $this->connection()->query($sql);
        $i = 1;
        while ($row = $getusers->fetch_assoc()) {
            echo '<tr>
                    <td> ' . $i++ . ' </td>
                    <td> ' . $row['fullname'] . ' </td>
                    <td> ' . $row['email'] . ' </td>
                    <td> ' . $row['password'] . ' </td>
                    <td><button class="btn" onclick="activateuser(' . $row['id'] . ')">' . $row['status'] . ' </button> </td>
                    <td><button class="btn" onclick="deleteuser(' . $row['id'] . ')">delete</button></td>
                  </tr>';
        }
    }
    // displays users notification
    public function getusersnotification()
    {
        $sql = "SELECT * FROM `notificationuser` WHERE id = '" . $_SESSION['id'] . "' ORDER BY count DESC";
        $getnotice = $this->connection()->query($sql);
        while ($row = $getnotice->fetch_assoc()) {
            echo '<tr>
                    <td> ' . $row['statement'] . ' </td>
                    <td> ' . $row['date'] . ' </td>
                  </tr>';
        }
    }
    // delete users
    public function deleteusers($user_id)
    {
        $this->user_id = $user_id;
        $sql = "DELETE FROM `users` WHERE id = '$this->user_id'";
        $delete = $this->connection()->query($sql);
        if ($delete == TRUE) {
            return $this->getusers();
        }
    }
    // activate/deactivate users
    public function activateusers($user_id)
    {
        $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getuser = $this->connection()->query($sql);
        if ($getuser == TRUE) {
            $row = $getuser->fetch_assoc();
            if ($row['status'] == 'deactivated') {
                $sql = "UPDATE `users` SET `status`= 'activated' WHERE id = '$this->user_id'";
                $activate = $this->connection()->query($sql);
                if ($activate == TRUE) {
                    return $this->getusers();
                }
            } else {
                $sql = "UPDATE `users` SET `status`= 'deactivated' WHERE id = '$this->user_id'";
                $activate = $this->connection()->query($sql);
                if ($activate == TRUE) {
                    return $this->getusers();
                }
            }
        }
    }
    // set users edit
    public function users()
    {
        $sql = "SELECT * FROM `users`";
        $getusers = $this->connection()->query($sql);
        $i = 1;
        echo 'yes';
        while ($row = $getusers->fetch_assoc()) {
            echo '<tr>
                 <td class="py-2">' . $i++ . '</td>
                 <td class="py-2">' . $row['fullname'] . '</td>
                 <td class="py-2">' . $row['email'] . '</td>
                 <td class="py-2">' . $row['password'] . '</td>
                 <td class="py-2"><a class="btn" href="userdetails.php?user_id=' . $row["id"] . '"><i style="color: green;">edit</i></a></td>
                 </tr>';
        }
    }
    // check user status
    public function mailstatus()
    {
        $userid = $_SESSION['id'];
        $sql = "SELECT * FROM `users` WHERE id = '$userid'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            $row = $run->fetch_assoc();
            if ($row['mail_verification'] == 'verified') {
                header("location: index.php");
            }
        }
    }
    // check user photostatus
    public function photostatus()
    {
        $userid = $_SESSION['id'];
        $sql = "SELECT * FROM `users` WHERE id = '$userid'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            $row = $run->fetch_assoc();
            if ($row['photostatus'] == 'unverified' or $row['photostatus'] == '') {
                header("location: profile.php");
            }
        }
    }
    public function photoname($user_id)
    {
       $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getphotoname = $this->connection()->query($sql);
        if ($getphotoname->num_rows > 0) {
            $row = $getphotoname->fetch_assoc();
            return $row['photo'];
        }
    }
    public function photoapproval($user_id)
    {
       $this->user_id = $user_id;
        $sql = "SELECT * FROM `users` WHERE id = '$this->user_id'";
        $getphotoname = $this->connection()->query($sql);
        if ($getphotoname->num_rows > 0) {
            $row = $getphotoname->fetch_assoc();
            return $row['photostatus'];
        }
    }
    public function updatephoto($user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `users` SET `photostatus`='verified' WHERE id = '$this->user_id'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            if($this->user_id == 1){
                header("location: admindashboard/userdetails.php?user_id=$user_id");
            }else{
                header("location: userdashboard/index.php");
            }
            
        }
    }
    public function updatedisapprovephoto($user_id)
    {
        $this->user_id = $user_id;
        $sql = "UPDATE `users` SET `photostatus`='unverified' WHERE id = '$this->user_id'";
        $update = $this->connection()->query($sql);
        if ($update == true) {
            header("location: admindashboard/userdetails.php?user_id=$user_id");
        }
    }
     public function uploadphoto($validid){
         $userid = $_SESSION['id'];
        // path to store receipt uploaded
        $filepath = "admindashboard/images/receipts/";
        $this->uploadapth = $filepath.$validid['name'];
        $this->fileextension = strtolower(pathinfo($validid['name'], PATHINFO_EXTENSION));
        // check for amount to be paid
        if ($validid['size'] > (500 * 1024)) {
            $_SESSION['errorphoto'] = 'File size is too large (max. 500kb)';
            echo "<script>window.history.back()</script>";
        // check for file extension name
        }elseif ($this->fileextension != 'jpg' && $this->fileextension != 'png' && $this->fileextension != 'jpeg' && $this->fileextension != 'jfif' && $this->fileextension != 'pdf') {
            $_SESSION['errorphoto'] = 'Only jpg, jpeg, pdf, png and jfif files are allowed';
            echo "<script>window.history.back()</script>";
        // upload to table
        }else{
            $sql = "UPDATE `users` SET `photo`='".$validid['name']."' WHERE id = '$userid'";
            $run = $this->connection()->query($sql);
            if ($run == true) {
                // upload receipt
                $_SESSION['successphoto'] = "Verification completed. Awaiting confirmation";
                move_uploaded_file($validid["tmp_name"], $this->uploadapth);
                header("location: userdashboard/profile.php");
            }
        }
    }
    public function resendmail($email)
    {
        $this->email = $email;
        $verificationcode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
        $this->mailverification($verificationcode, $email);
        $sql = "UPDATE `users` SET `trade`= '$verificationcode' WHERE email = '$this->email'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            header("location: userdashboard/inactive.php");
        }else{
            echo "<script> window.history.back()</script>";
        }
    }
    

    public function userstatus()
    {
        $userid = $_SESSION['id'];
        $sql = "SELECT * FROM `users` WHERE id = '$userid'";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            $row = $run->fetch_assoc();
            if ($row['status'] == 'deactivated') {
                header("location: ../../../signin.php");
            }
        }
    }


    // change admin password
    public function changepass($ppass, $npass, $cpass)
    {
        $sql = "SELECT * FROM `users` WHERE id = 1";
        $run = $this->connection()->query($sql);
        if ($run->num_rows > 0) {
            $row = $run->fetch_assoc();
            if (!password_verify($ppass, $row['password'])) {
                $_SESSION['message'] = "Incorrect password";
                echo "<script> window.history.back()</script>";
            } elseif (strlen($npass) < 8) {
                $_SESSION['message'] = "Password too short. Length must be greater than 7";
                echo "<script> window.history.back()</script>";
                // validate password for numbers
            } elseif (!preg_match_all("/[0-9]/i", $npass)) {
                $_SESSION['message'] = "Password must contain a number";
                echo "<script> window.history.back()</script>";
                // validate password for uppercase
            } elseif (!preg_match_all("/[a-z]/i", $npass)) {
                $_SESSION['message'] = "Password must contain an lowercase";
                echo "<script> window.history.back()</script>";
                // validate password and confirm password
            } elseif ($cpass != $npass) {
                $_SESSION['message'] = "Password mismatch. Check Password";
                echo "<script> window.history.back()</script>";
            } else {
                $npass = password_hash($npass, PASSWORD_DEFAULT);
                $sql = "UPDATE `users` SET `password`= '$npass', `cpassword`='$cpass' WHERE id = 1";
                $run = $this->connection()->query($sql);
                if ($run == TRUE) {
                    $_SESSION['message'] = "Password Reset Successful";
                    header("location: admindashboard/index.php");
                }
            }
        }
    }
}

