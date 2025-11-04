<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exquisits">

    <!-- ========== Page Title ========== -->
    <title>Login: N0 1 :: Bitcoin investment company in the world</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/bootsnav.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/particles.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="../css?family=Open+Sans" rel="stylesheet">
    <link href="../css-1?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <script src="js/loginRegAjaxf9e3f9e3.js?v=1.1"></script>
    <style>
        .signin {
            border: 1px solid #004977;
            padding: 30px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .signin p {
            font-size: 1.5rem;
            line-height: 1.5;
            color: #727272;
            font-weight: 300;
            margin-bottom: 0px;
        }

        .signin p:nth-child(2) {
            margin-bottom: 40px !important;
        }

        .signin div {
            display: inline-block;
            position: relative;
            width: 100%;
            vertical-align: middle;
            margin-top: 10px;
        }

        .signin input {
            width: 100%;
            padding: 10px 15px;
        }

        .signin div span {
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
            position: absolute;
            right: 5%;
            top: 35%;
        }

        .signin button {
            width: 100%;
            padding: 10px 15px;
            background-color: #004977;
            color: #fff;
            border: none;
        }

        .signin p a {
            color: #004977;
        }

        .signin label a {
            color: #004977;
        }
    </style>
</head>

<body>
    <!-- Header 
    ============================================= -->
    <?php include "header.php" ?>
    <!-- End Header -->
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-12 col-md-4">
                <div class="signin">
                    <!-- module logo begin -->
                    <!-- <a class="uk-logo" href="index.html">
                                    <img class="uk-margin-small-right in-offset-top-10" src="i" data-src="img/in-logo-2.svg" alt="wave" width="134" height="23" data-uk-img>
                                </a> -->
                    <!-- module logo begin -->
                    <p style="color: #222;">
                        <?php
                        // echo $_SESSION['verification'];
                        if (isset($_SESSION['verification'])) {
                            echo $_SESSION['verification'];
                            unset($_SESSION['verification']);
                        }

                        ?>

                    </p>
                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom py-1" style="font-weight:bold; font-size:2em">EXQUISITS</p>
                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Sign into your account</p>
                     <!-- login form begin -->
                    <form class="uk-grid uk-form" method="post" action="php/view/signin.php">
                        <p style="color: red; font-size: 12px;"><?php if (isset($_SESSION['message'])) {
                                                                    echo $_SESSION['message'];
                                                                    unset($_SESSION['message']);
                                                                } ?></p>
                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="username" value="" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="password" value="" name="password" type="password" placeholder="Password">
                        </div>

                        <div class="uk-margin-small uk-width-expand uk-text-small">
                            <label class="uk-align-right"><a class="uk-link-reset" href="forget-password.php">Forgot
                                    password?</a></label>
                        </div>
                        <div class="uk-margin-small uk-width-1-1">
                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit">Sign in</button>
                        </div>
                    </form>
                    <!-- login form end -->
                    <p class="uk-heading-line uk-text-center"><span>Don't have an account? <a href="signup.php">Sign up</a></span></p>
                    <!-- <div class="uk-margin-medium-bottom uk-text-center">
                                    <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Our About
============================================= -->
    <!-- End Our About -->

    <!-- Start Footer 
    ============================================= -->
    <?php include "footer.php" ?>
    <!-- End Footer -->
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/particles_app.js"></script>

    <script src="assets/js/recents.js"></script>


</body>



</html>