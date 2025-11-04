<?php
// include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Depositcontroller.php";
include "../../controller/walletdetails.php";
include "../../controller/Usercontroller.php";
include "../../controller/Trade.php";
include "includes/session.php";
include "includes/details.php";
$mywallets = new Walletdetails();
$mydeposit = new Depositcontroller();
$allusers = new Usercontroller();
$trade = new Trade();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $companyname ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo2.svg">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="icons/icofont/icofont.css">
    <link rel="stylesheet" href="icons/icofont/icofont.min.css">
    <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
    <script src="js/sweetalert/sweetalert2.min.js"></script>

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
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="fs-20 text-white"><a href="traders.php" class="btn btn-primary">View Traders  >></a></p>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="card-header border-0 d-block">
                                                        <div>
                                                            <h4 class="fs-20 text-white">Traders</h4>
                                                        </div>
                                                        <table class="table table-sm mb-0 table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>S/N</th>
                                                                    <th>Trader Name</th>
                                                                    <th>Profit</th>
                                                                    <th>Success Rate</th>
                                                                    <th>Type</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <?=$trade->showalltraders()?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php 
                                                    
                                                        if (isset($_SESSION['success'])) {
                                                            echo '<script>
                                                            Swal.fire({
                                                                title: "Congratulation!",
                                                                text: '.$_SESSION['success'].',
                                                                icon: "success"
                                                                });
                                                        </script>';
                                                        unset($_SESSION['success']);
                                                        }
                                                    ?>
                                                </div>
                                        </div>
                                    </div>
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
                <p>Copyright © Cryptoconnect, 2023</p>
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
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Counter Up -->
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <!--chart-moris-->
    <script src="js/dashboard/my-wallet.js"></script>

    <script>
    function carouselReview() {
        /*  testimonial one function by = owl.carousel.js */
        jQuery('.owl-bank-wallet').owlCarousel({
            loop: true,
            autoplay: false,
            margin: 0,
            nav: false,
            center: true,
            dots: false,
            navText: [''],
            responsive: {
                0: {
                    items: 2
                },

                480: {
                    items: 2
                },

                991: {
                    items: 3
                },
                1200: {
                    items: 2
                }
            }
        })
        jQuery('.testimonial-one').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 15,
            nav: true,
            dots: false,
            center: true,
            navText: ['', '<i class="las la-long-arrow-alt-right"></i>'],
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 5
                },
                991: {
                    items: 8
                },

                1200: {
                    items: 4
                },
                1600: {
                    items: 6
                }
            }
        })
        /*Custom Navigation work*/
        jQuery('#next-slide').on('click', function() {
            $('.testimonial-one').trigger('next.owl.carousel');
        });

        jQuery('#prev-slide').on('click', function() {
            $('.testimonial-one').trigger('prev.owl.carousel');
        });
        /*Custom Navigation work*/
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });
    </script>
    <script>
        function createtrader() {
            var form = document.getElementById('copytrade');
            event.preventDefault();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == 'success') {
                        Swal.fire({
                    title: "Congratulation!",
                    text: "Trader created successfully",
                    icon: "success"
                    });
                }else{
                    Swal.fire({
                    title: "Failed",
                    text: this.responseText,
                    icon: "error"});
                }
                    
                   
                }
            };
            let formdata = new FormData(form)
            xmlhttp.open("post", "../createtrader.php", true);
            xmlhttp.send(formdata);
        }
        


    </script>
    <script>
    function copytrader(id){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // alert(this.responseText);
                var response = this.responseText;
                if (response == 'success') {
                	Swal.fire({
                    title: "Added",
                    text: "Trader copied",
                    icon: "success"
                    });
                }else{
                    Swal.fire({
                    title: "Added",
                    text: "Trader copied",
                    icon: "success"
                    });
                }
                // alert(this.responseText)
                // document.getElementById('notifynumb').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../copytrader.php?id=" + id, true);
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

<!-- Mirrored from chrev.dexignzone.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:10 GMT -->

</html>