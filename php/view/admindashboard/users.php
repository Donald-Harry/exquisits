<?php
include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Usercontroller.php";
include "includes/session.php";
include "includes/details.php";
$allusers = new Usercontroller();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from chrev.dexignzone.com/xhtml/ecom-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $companyname ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo2.svg">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="dark">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php include "includes/navstart.php" ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <?php include "includes/chatbox.php" ?>
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <?php include "includes/header.php" ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include "includes/nav-menu.php" ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card-body">
                                <h4>Users</h4>
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th><i class="online_icon"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <?php $allusers->users(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Cryptoconnect, 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>


    <script src="vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->

    <script>
    function deleteuser(user_id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // if (this.responseText == 'successfully deleted') {
                // 	alert('User deleted successfully');
                // }
                document.getElementById('usertable').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../deleteuser.php?user_id=" + user_id, true);
        xmlhttp.send();
    }

    function activateuser(user_id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // if (this.responseText == 'successfully deleted') {
                // 	alert('User deleted successfully');
                // }
                document.getElementById('usertable').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../activateuser.php?user_id=" + user_id, true);
        xmlhttp.send();
    }

    function notification() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // if (this.responseText == 'success') {
                // 	console.log('yes');
                // }
                document.getElementById('notify').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../notification.php", true);
        xmlhttp.send();
    }
    setInterval(notification, 2000);

    function notificationcount() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // if (this.responseText == 'success') {
                // 	console.log('yes');
                // }
                console.log(this.responseText)
                document.getElementById('notifynumb').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../notificationcount.php", true);
        xmlhttp.send();
    }
    setInterval(notificationcount, 2000);

    function closenotify(count) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            }
        };
        xmlhttp.open("GET", "../closenotify.php?count=" + count, true);
        xmlhttp.send();
    }
    </script>
    <script src="includes/darkmood.js"></script>



</body>


<!-- Mirrored from chrev.dexignzone.com/xhtml/ecom-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:46 GMT -->

</html>