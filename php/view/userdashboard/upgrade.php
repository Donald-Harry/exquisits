<?php
// include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Depositcontroller.php";
include "../../controller/walletdetails.php";
include "../../controller/Usercontroller.php";
include "includes/session.php";
include "includes/details.php";
$mywallets = new Walletdetails();
$mydeposit = new Depositcontroller();
$allusers = new Usercontroller();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from chrev.dexignzone.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $companyname . ' - ' . $allusers->username() ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo1.svg">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="icons/icofont/icofont.css">
    <link rel="stylesheet" href="icons/icofont/icofont.min.css">
    <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
    <script src="js/sweetalert/sweetalert2.all.min.js"></script>
    <!--<script src="js/sweetalert/sweetalert2.min.js"></script>-->


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
                                    <div class="card-header d-block d-sm-flex border-0 pb-0">
                                        <div>
                                            <h4 class="fs-20 text-white">Payment Address</h4>
                                        </div>

                                    </div>

                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-sm-8 col-md-6 m-3 ">
                                                <p class="fs-16 text-white">Copy Wallet Address</p>

                                                <?php $mywallets->walletcopy() ?>

                                            </div>
                                            <div class="col-sm-8 col-md-6 mb-4 pl-3">
                                                <p class="fs-20 text-white">Upgrade to Premium</p>
                                                <p class="fs-20 text-white">
                                                    <?php
													$cost = $allusers->upgradecost();

													if ($cost == 0) {
														echo	'Contact administrator for upgrade';
													} else {
														echo 'Amount required for upgrade: USD $' . $cost;
													}

													?></p>

                                                <?php
												if (isset($_SESSION['deposit'])) {
													echo 	$_SESSION['deposit'];
													unset($_SESSION['deposit']);
												}
												?>

                                                <form method="post" class="form-group" action="../upgrade.php"
                                                    enctype="multipart/form-data">
                                                    <div class="input-group my-2">
                                                        <input type="file" name="receipt" class="form-control">
                                                    </div>
                                                    <div class="input-group input-group-lg my-2">
                                                        <button class="btn btn-outline-primary rounded-0" name="upgrade"
                                                            type="submit">Confirm</button>

                                                    </div>
                                                    <p class="form-text" style="color: red;">
                                                        <?php
														if (isset($_SESSION['errordpt'])) {
															echo $_SESSION['errordpt'];
															unset($_SESSION['errordpt']);
														}
														?>
                                                    </p>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">

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
                <p>Copyright © <?= $companyname ?>, 2023</p>
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
    function addwallet() {
        var form = document.getElementById('formwallet');
        event.preventDefault();
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // if (this.responseText == 'successfully deleted') {
                // alert(this.responseText);
                // }
                document.getElementById('walletaddress').innerHTML = this.responseText;
            }
        };
        let formdata = new FormData(form)
        xmlhttp.open("post", "../addwallet.php", true);
        xmlhttp.send(formdata);
        console.log(formdata);
    }

    function deletewalletaddress(count) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('walletaddress').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../deletewalletaddress.php?count=" + count, true);
        xmlhttp.send();
    }
    var copyText = document.querySelectorAll('.copytext');
    var copier = document.querySelectorAll('.copy');

    copier.forEach((btn, index) => {
        btn.addEventListener('click', function() {
            navigator.clipboard.writeText(copyText[index].value);
            // console.log(copyText[index].value);
        })


    });
    </script>
    <script src="includes/darkmood.js"></script>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <style>
    .goog-te-gadget .goog-te-combo {
        background-color: #495376 !important;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 6px 8px
    }

    .goog-logo-link {
        display: none !important;
    }

    .goog-te-gadget {
        color: transparent !important;
    }

    .goog-te-banner-frame {
        display: none !important;
    }
    </style>

</body>

<!-- Mirrored from chrev.dexignzone.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:10 GMT -->

</html>