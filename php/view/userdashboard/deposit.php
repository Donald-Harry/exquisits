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
                                                <p class="fs-20 text-white">Fund your account</p>
                                                <?php
												if (isset($_SESSION['deposit'])) {
													echo 	$_SESSION['deposit'];
													unset($_SESSION['deposit']);
												}
												?>

                                                <form method="post" class="form-group" action="../deposit.php"
                                                    enctype="multipart/form-data">
                                                    <div class="input-group input-group-lg my-2">
                                                        <input type="number" name="amount" value=""
                                                            class="form-control rounded-0" placeholder="Amount in USD">
                                                    </div>
                                                    <div class="input-group my-2">
                                                        <input type="file" name="receipt" class="form-control">
                                                    </div>
                                                    <div class="input-group input-group-lg my-2">
                                                        <button class="btn btn-outline-primary rounded-0" name="deposit"
                                                            type="submit">Deposit</button>

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
                        <div class="row">


                            <div class="col-xl-12">
                                <div class="">
                                    <div class="card-header border-0 d-sm-flex d-block">
                                        <div>
                                            <h4 class="fs-20 text-white">Deposit Activity</h4>
                                        </div>

                                    </div>
                                    <div class="card-body p-0 tab-content card-table">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div class="table-responsive">
                                                <table class="table table-sm mb-0 table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Amount</th>
                                                            <th>Receipt</th>
                                                            <th>Status</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody id="walletaddress">
                                                        <?php $mydeposit->userpendingdeposit(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Weekly">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <span class="bgl-primary p-3 mr-3">
                                                                        <svg width="27" height="27" viewBox="0 0 15 27"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z"
                                                                                fill="#6418C3" stroke="#6418C3"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="media-body align-self-center">
                                                                        <h5 class="font-w600 text-white">Withdraw</h5>
                                                                        <p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-w600 text-center">-$2,000</td>
                                                            <td><a class="btn-link text-success float-right"
                                                                    href="javascript:void(0);">COMPLETED</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <span class="bgl-primary p-3 mr-3">
                                                                        <svg width="27" height="27" viewBox="0 0 15 27"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z"
                                                                                fill="#6418C3" stroke="#6418C3"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="media-body align-self-center">
                                                                        <h5 class="font-w600 text-white">Withdraw</h5>
                                                                        <p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-w600 text-center">-$2,000</td>
                                                            <td><a class="btn-link text-dark float-right"
                                                                    href="javascript:void(0);">PENDING</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <span class="bgl-primary p-3 mr-3">
                                                                        <svg width="27" height="27" viewBox="0 0 15 27"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z"
                                                                                fill="#6418C3" stroke="#6418C3"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="media-body align-self-center">
                                                                        <h5 class="font-w600 text-white">Topup</h5>
                                                                        <p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-w600 text-center">+$5,553</td>
                                                            <td><a class="btn-link text-success float-right"
                                                                    href="javascript:void(0);">COMPLETED</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <span class="bgl-primary p-3 mr-3">
                                                                        <svg width="27" height="27" viewBox="0 0 15 27"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z"
                                                                                fill="#6418C3" stroke="#6418C3"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="media-body align-self-center">
                                                                        <h5 class="font-w600 text-white">Withdraw</h5>
                                                                        <p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-w600 text-center">-$2,000</td>
                                                            <td><a class="btn-link text-danger float-right"
                                                                    href="javascript:void(0);">CANCELED</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Today">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <span class="bgl-primary p-3 mr-3">
                                                                        <svg width="27" height="27" viewBox="0 0 15 27"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z"
                                                                                fill="#6418C3" stroke="#6418C3"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="media-body align-self-center">
                                                                        <h5 class="font-w600 text-white">Topup</h5>
                                                                        <p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-w600 text-center">+$5,553</td>
                                                            <td><a class="btn-link text-success float-right"
                                                                    href="javascript:void(0);">COMPLETED</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="media">
                                                                    <span class="bgl-primary p-3 mr-3">
                                                                        <svg width="27" height="27" viewBox="0 0 15 27"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z"
                                                                                fill="#6418C3" stroke="#6418C3"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="media-body align-self-center">
                                                                        <h5 class="font-w600 text-white">Withdraw</h5>
                                                                        <p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-w600 text-center">-$2,000</td>
                                                            <td><a class="btn-link text-danger float-right"
                                                                    href="javascript:void(0);">CANCELED</a></td>
                                                        </tr>
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