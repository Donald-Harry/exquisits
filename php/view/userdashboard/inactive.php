<?php
include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Depositcontroller.php";
include "../../controller/walletdetails.php";
include "../../controller/Usercontroller.php";
include "includes/session.php";
include "includes/details.php";
$mywallets = new Walletdetails();
$mydeposit = new Depositcontroller();
$allusers = new Usercontroller();

$allusers->mailstatus();
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
            Header start
        ***********************************-->
        <?php include "includes/header.php" ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p>Pending Email Verification</p>
                    </div>
                    <div class="col-12">
                        <p>Please verify your email address.</p>
                    </div>
                </div>
            </div>
            <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-12 col-md-4">
                <div class="signin">
                    <!-- module logo begin -->
                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Thank you for Signing Up!</p>
                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Check the verification email
                        at <?php echo $_SESSION['email'] ?> and enter your verification code below.</p>
                    <div class="col-12 ">
                        <div class="bgl-info border border-info media align-items-center">
                            <div class="p-4">
                                <h2 class="text-black">Enter verification code:</h2>
                                <?php
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                                ?>
                                <form action="../verifymail.php" method="post">
                                    <?php $email = $_SESSION['email'] ?>
                                    <div>
                                        <input type="hidden" name="email" value="<?= $email ?>">
                                        <input type="text" name="code" placeholder="Verification code"
                                            class="form-control p-2">
                                    </div>

                                    <div>
                                        <button type="submit" class="form-control btn d-block text-center text-primary">Verify</button>
                                    </div>
                                    <div>
                                        <a href="../resendmail.php?email=<?=$email?>" class="text-primary fs-1">Resend Code</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">Please be advised that if you have not received the email within a few
                        minutes:</span>
                    <ul>
                        <li>Please check your spam folder</li>
                        <li>Please ensure that you have accurately typed your email address.</li>
                        <li>If you have not received an email, we kindly request that you contact
                            support@capitaledgetrade.com for further assistance.</li>
                    </ul>


                    <!-- login form begin -->

                    <!-- login form end -->
                    <!-- <p class="uk-heading-line uk-text-center"><span>Already have an account? <a href="signin.php"> Sign in</a></span></p> -->

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

</body>

<!-- Mirrored from chrev.dexignzone.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:10 GMT -->

</html>