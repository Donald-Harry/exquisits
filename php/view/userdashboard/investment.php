<?php
// include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Depositcontroller.php";
include "../../controller/walletdetails.php";
include "../../controller/Usercontroller.php";
include "../../controller/Investmentcontroller.php";
include "includes/details.php";
$mywallets = new Walletdetails();
$mydeposit = new Depositcontroller();
$allusers = new Usercontroller();
$allinvestment = new Investmentcontroller();
$allusers->photostatus();
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
                                        <div class="pl-3 pr-2">
                                            <h4 class="fs-20 text-white">Investment Packages</h4>
                                            <p class="text-justify small-font-size text-white">We are excited to present
                                                a unique investment opportunity that combines stability and growth
                                                potential.</p>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 p-2">
                                                <div class="card-body my-1"
                                                    style="color: white; border: 1px solid white">
                                                    <h3>Basic</h3>
                                                    <p class="text-justify small-font-size">This investment combines
                                                        stability and growth and the package is designed to deliver a
                                                        competitive return on investment (ROI) of 15% Weekly.</p>
                                                    <ul>
                                                        <li class="text-blue">Min-Max $1,000 - $9,999</li>
                                                        <!--<li>ROI - 15% Weekly</li>-->
                                                        <li>Lock-In Period - 4days</li>
                                                        <li>Transparency - Investors will receive regular updates</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-2">
                                                <div class="card-body my-1"
                                                    style="color: white; border: 1px solid white">
                                                    <h3>Silver</h3>
                                                    <p class="text-justify small-font-size">This investment combines
                                                        stability and growth and the package is designed to deliver a
                                                        competitive return on investment (ROI) of 21% Weekly.</p>
                                                    <ul>
                                                        <li class="text-blue">Min-Max $10,000 - $49,999</li>
                                                        <!--<li>ROI - 15% Weekly</li>-->
                                                        <li>Lock-In Period - 4days</li>
                                                        <li>Transparency - Investors will receive regular updates</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-2">
                                                <div class="card-body my-1"
                                                    style="color: white; border: 1px solid white">
                                                    <h3>Premium</h3>
                                                    <p class="text-justify small-font-size">This investment combines
                                                        stability and growth and the package is designed to deliver a
                                                        competitive return on investment (ROI) of 30% Weekly.</p>
                                                    <ul>
                                                        <li class="text-blue">Min-Max $50,000 - Unlimited</li>
                                                        <!--<li>ROI - 15% Weekly</li>-->
                                                        <li>Lock-In Period - 4days</li>
                                                        <li>Transparency - Investors will receive regular updates</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Fundamental</h3>-->
                                            <!--        <p class="text-justify small-font-size">This investment combines-->
                                            <!--            stability and growth and the package is designed to deliver a-->
                                            <!--            competitive return on investment (ROI) of 8.7% Weekly.</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $200 - $3,999</li>-->
                                                        <!--<li>ROI - 8.7% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Enthusiast</h3>-->
                                            <!--        <p class="text-justify small-font-size">This investment plan seeks a-->
                                            <!--            strategic partnerships to fuel its growth and capitalize on-->
                                            <!--            promising market trends with an (ROI) of 10.2% Weekly.</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $4,000 - $17,999</li>-->
                                                        <!--<li>ROI - 10.2% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Professional</h3>-->
                                            <!--        <p class="text-justify small-font-size">Platinum package brings an-->
                                            <!--            exclusive investment opportunity that promises lucrative returns-->
                                            <!--            (11.2%) and a secure investment environment</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $18,000 - $39,999</li>-->
                                                        <!--<li>ROI - 11.2% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Expert</h3>-->
                                            <!--        <p class="text-justify small-font-size">Platinum package brings an-->
                                            <!--            exclusive investment opportunity that promises lucrative returns-->
                                            <!--            (11.8%) and a secure investment environment</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $40,000 - $59,999</li>-->
                                            <!--            <li>ROI - 11.8% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Veteran</h3>-->
                                            <!--        <p class="text-justify small-font-size">Platinum package brings an-->
                                            <!--            exclusive investment opportunity that promises lucrative returns-->
                                            <!--            (12.5%) and a secure investment environment</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $60,000 - $79,999</li>-->
                                                        <!--<li>ROI - 12.5%</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Gold</h3>-->
                                            <!--        <p class="text-justify small-font-size">Platinum package brings an-->
                                            <!--            exclusive investment opportunity that promises lucrative returns-->
                                            <!--            (13.1%) and a secure investment environment</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $80,000 - $109,999</li>-->
                                                        <!--<li>ROI - 13.1% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Platinum</h3>-->
                                            <!--        <p class="text-justify small-font-size">Platinum package brings an-->
                                            <!--            exclusive investment opportunity that promises lucrative returns-->
                                            <!--            (14%) and a secure investment environment</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $110,000 - $130,999</li>-->
                                                        <!--<li>ROI - 14% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Diamond</h3>-->
                                            <!--        <p class="text-justify small-font-size">Platinum package brings an-->
                                            <!--            exclusive investment opportunity that promises lucrative returns-->
                                            <!--            (15.3%) and a secure investment environment</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $131,000 - $160,999</li>-->
                                                        <!--<li>ROI - 15.3% Weekly</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-4 p-2">-->
                                            <!--    <div class="card-body my-1"-->
                                            <!--        style="color: white; border: 1px solid white">-->
                                            <!--        <h3>Ultimate</h3>-->
                                            <!--        <p class="text-justify small-font-size">This carefully curated-->
                                            <!--            investment package offers a unique chance to participate in-->
                                            <!--            across investment opportunities including Equity, Bonds, Real-->
                                            <!--            Estate, etc.</p>-->
                                            <!--        <ul>-->
                                            <!--            <li class="text-blue">Min-Max $170,000 - Unlimited</li>-->
                                                        <!--<li>ROI - 17%</li>-->
                                            <!--            <li>Lock-In Period - 30days</li>-->
                                            <!--            <li>Transparency - Investors will receive regular updates</li>-->
                                            <!--        </ul>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="">


                                    <div class="card-body">
                                        <div class="row pl-3">
                                            <div class="col-sm-8 col-md-6 mb-4">
                                                <p class="fs-20 text-white">Invest in the Market</p>
                                                <?php
												if (isset($_SESSION['investment'])) {
													echo 	$_SESSION['investment'];
													unset($_SESSION['investment']);
												}
												?>
                                                <form method="post" class="form-group" action="../investment.php">
                                                    <p class="form-text text-danger">
                                                        <?php
														if (isset($_SESSION['errorinv'])) {
															echo $_SESSION['errorinv'];
															unset($_SESSION['errorinv']);
														}
														?>
                                                    </p>
                                                    <div class="input-group input-group-lg">
                                                        <input type="number" name="amount" value=""
                                                            class="form-control rounded-0" id="investmentamount"
                                                            onchange="amountset()" placeholder="Amount in USD">
                                                    </div>
                                                    <div class="">
                                                        <p>Package: <span id="investmentpackage"></span></p>
                                                        <!--<p>ROI: <span id="investmentroi"></span></p>-->
                                                        <!--<p>Profit: $<span id="investmentprofit"></span></p>-->

                                                    </div>
                                                    <div class="input-group input-group-lg">
                                                        <button class="btn btn-outline-primary rounded-0"
                                                            name="investment" type="submit">Invest</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">


                            <div class="col-xl-12">
                                <div class="">
                                    <div class="card-header border-0 d-sm-flex d-block">
                                        <div>
                                            <h4 class="fs-20 text-white">Investment Activity</h4>
                                        </div>

                                    </div>
                                    <div class="card-body p-0 tab-content card-table">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div class="table-responsive">
                                                <table class="table table-sm mb-0 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Amount</th>
                                                            <th>Package</th>
                                                            <th>Invested Date</th>
                                                            <th>Return Time</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="">
                                                        <?php $allinvestment->userpendinginvestment(); ?>
                                                    </tbody>
                                                </table>
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
    <script src="includes/darkmood.js"></script>
    <script>
    function amountset() {
        var investmentpackage = document.getElementById('investmentpackage');
        var investmentroi = document.getElementById('investmentroi');
        var investmentprofit = document.getElementById('investmentprofit');
        var investmentamount = document.getElementById('investmentamount').value;
        if (investmentamount <= 3999) {
            investmentpackage.innerHTML = 'Fundamental';
            investmentroi.innerHTML = '5%';
            investmentprofit.innerHTML = (investmentamount * 0.05).toFixed(2);
        } else if (investmentamount > 3999 && investmentamount <= 17999) {
            investmentpackage.innerHTML = 'Enthusiast';
            investmentroi.innerHTML = '6.7%';
            investmentprofit.innerHTML = (investmentamount * 0.067).toFixed(2);
        } else if (investmentamount > 18000 && investmentamount <= 39999) {
            investmentpackage.innerHTML = 'Professional';
            investmentroi.innerHTML = '8.4%';
            investmentprofit.innerHTML = (investmentamount * 0.084).toFixed(2);
        } else if (investmentamount > 40000 && investmentamount <= 59999) {
            investmentpackage.innerHTML = 'Expert';
            investmentroi.innerHTML = '10.8%';
            investmentprofit.innerHTML = (investmentamount * 0.108).toFixed(2);
        } else if (investmentamount > 60000 && investmentamount <= 79999) {
            investmentpackage.innerHTML = 'Veteran';
            investmentroi.innerHTML = '11.7%';
            investmentprofit.innerHTML = (investmentamount * 0.117).toFixed(2);
        } else if (investmentamount > 80000 && investmentamount < 109999) {
            investmentpackage.innerHTML = 'Gold';
            investmentroi.innerHTML = '12.5%';
            investmentprofit.innerHTML = (investmentamount * 0.125).toFixed(2);
        } else if (investmentamount > 110000 && investmentamount <= 129999) {
            investmentpackage.innerHTML = 'Platinum';
            investmentroi.innerHTML = '13.2%';
            investmentprofit.innerHTML = (investmentamount * 0.132).toFixed(2);
        } else if (investmentamount > 130000 && investmentamount <= 159999) {
            investmentpackage.innerHTML = 'Diamond';
            investmentroi.innerHTML = '14.1%';
            investmentprofit.innerHTML = (investmentamount * 0.141).toFixed(2);
        } else if (investmentamount > 160000) {
            investmentpackage.innerHTML = 'Ultimate';
            investmentroi.innerHTML = '15.2%';
            investmentprofit.innerHTML = (investmentamount * 0.152).toFixed(2);
        }
    }
    </script>
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

</html>