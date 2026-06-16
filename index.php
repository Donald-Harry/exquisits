<?php
include "details.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Premiumedge" />


    <!-- ========== Page Title ========== -->
    <title>
        <?= $companyname ?>: Home
    </title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link href="assets/css/particles.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="../css?family=Open+Sans" rel="stylesheet" />
    <link href="../css-1?family=Poppins:400,500,600,700,800" rel="stylesheet" />
    <script src="js/loginRegAjaxf9e3f9e3.js?v=1.1"></script>
</head>

<body>
    <!-- Header 
    ============================================= -->
    <?php include "header.php" ?>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div id="particles-js"></div>
    <div class="banner-area">
        <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixe" style="background-image: url(assets/img/bitcoin-5.webp)"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 class="header_h1" data-animation="animated slideInLeft ">
                                                We employ top-tier traders to <span>enhance your experience.</span>
                                            </h1>
                                            <h3 class="header_h3" data-animation="animated slideInRight">
                                                We're here to elevate your <span>Experience.</span>
                                            </h3>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="about.php">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixe" style="background-image: url(assets/img/bitcoin-2.jpg)"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 class="header_h1" data-animation="animated slideInDown">
                                                Consider investing with a reputable company you have <br />
                                                <span>confidence in.</span>
                                            </h1>
                                            <h3 class="header_h3" data-animation="animated slideInUp" class="text-orange">
                                                Rest easy knowing your investment is under constant 24/7 surveillance.
                                            </h3>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="about.php">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixe" style="background-image: url(assets/img/bitcoin.jpg)"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 class="header_h1" data-animation="animated slideInLeft">
                                                Very much <span>convenient </span>than others
                                            </h1>
                                            <h3 class="header_h3" data-animation="animated slideInRight">
                                                Invest with us <span>Today</span><br />Let your money
                                                do the <span>hardwork.</span>
                                            </h3>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Achivement
    ============================================= -->
    <div class="achivement-area bg-fixed shadow dark text-light default-padding" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 achivement-items">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 item">
                            <div class="fun-fact" style="background-color:grey;">
                                <div class="timer" data-to="2729" data-speed="5000"></div>
                                <span class="medium">Skilled agents</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 item">
                            <div class="fun-fact" style="background-color:brown;">
                                <div class="timer" data-to="24" data-speed="5000"></div>
                                <span class="medium">Hours support</span>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 item">
                            <div class="fun-fact" style="background-color:gray;">
                                <div class="timer" data-to="2767267" data-speed="5000"></div>
                                <span class="medium">Investors</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Achivement Area -->
    <!-- About Us Starts Here
    ============================================= -->
    <div class="about-area full-width inc-shadow mt default-padding bottom-less">
        <div class="container">
            <div class="row">
                <!-- Start About -->
                <div class="about-content content-left">
                    <div class="col-md-6 info">
                        <h2>About Us</h2>
                        <p style="color:grey">
                            Premiumedge serves as an investment manager based in the United Kingdom, maintaining a
                            widespread global footprint with offices located in the United States, Canada, Australia,
                            Europe, and Russia. Comprising a dynamic team, we are committed to providing exceptional
                            service to our clients. Our investment management philosophy is grounded in a systematic and
                            quantitative approach, aiming to produce outstanding and diversified alpha for our clients'
                            portfolios.
                        </p>
                        <p style="color:grey">
                            Established in 2002, Bluegate Financial Service offers a diverse array of investment
                            opportunities covering both extended and brief durations. Originally concentrating on
                            stocks, shares, and bonds, the firm broadened its horizons to incorporate forex trading in
                            2008. Demonstrating forward-looking vision, it positioned itself as an early entrant into
                            the realm of cryptocurrencies, entering the market with the advent of Bitcoin in 2010.
                        </p>
                        <a href="about.php" class="btn btn-theme effect btn-md" data-animation="animated slideInUp">Discover Us</a>
                    </div>
                    <div class="col-md-6 thumb">
                        <img src="https://nbcconferencecentre.com/content/uploads/sites/2/2018/03/Theateropstelling-zaal-28-e1563458120194.jpg" alt="Thumb" />
                    </div>
                </div>
                <!-- End About -->

                <!-- Start Our Features -->
                <div class="col-md-12 text-center about-items" style="background-color: white;">
                    <h2 style="color: black; padding-top:.5em">What Sets Us Apart.</h2>

                    <div class="row" style="background-color: white;">
                        <!-- Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-fit"></i>
                                    <h5>Extremely Safeguarded</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-target"></i>
                                    <h5>HIGH ROI</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- End Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-chart"></i>
                                    <h5>
                                        Assured Profit Growth</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="flaticon-customer-service"></i>
                                    <h5>24/7 Continuous Support</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <!-- End Our Features -->
            </div>
        </div>
    </div>
    <!-- About Us Ends Here -->

    <!-- Services starts here 
    ============================================= -->
    <div class="services-inc-area half-bg carousel-shadow default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-light text-center">
                        <h2>Our Services</h2>
                        <!-- <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it
                            examine express promise no. Past add size game cold girl off how old
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-4 mb-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/bitcoin.jpg" alt="Thumb" />
                                    <div class="overlay">
                                        <a href="cryptocurrency-2.php">
                                            <i class="flaticon-report"></i>
                                            <h4> Digital-currencies</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Digital-currencies which is also referred to as Cryptocurrencies encompass
                                        software protocols
                                        designed to generate digital tokens and facilitate
                                        transaction tracking, employing measures that significantly deter counterfeiting
                                        or unauthorized
                                        token reuse...
                                    </p>
                                    <a href="cryptocurrency.php">Explore Further <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 mb-5">
                            <div class="item">
                                <div class="thumb">
                                    <!-- <img src="assets/img/5.jpg" alt="Thumb" /> -->
                                    <img src="https://fxmedia.s3.amazonaws.com/articles/best_forex_traders.jpeg" alt="Thumb" />
                                    <div class="overlay">
                                        <a href="#">
                                            <i class="flaticon-research"></i>
                                            <h4>Forex</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Forex (FX), represents the Foreign Exchange market where trading
                                        involves predicting the performance of one currency against another.
                                        Participants in the forex market include banks, financial institutions,
                                        corporations, governments, and individual traders.
                                    </p>
                                    <a href="forex.php">Explore Further <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 mb-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/3.jpg" alt="Thumb" />
                                    <div class="overlay">
                                        <a href="#">
                                            <i class="flaticon-piggy-bank"></i>
                                            <h4>Loans</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Securing a loan is straightforward with the right dedicated lender guiding you
                                        through the process.
                                    </p>
                                    <a href="loan.php">Explore Further <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 mb-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/1.jpg" alt="Thumb" />
                                    <div class="overlay">
                                        <a href="#">
                                            <i class="flaticon-graph"></i>
                                            <h4>Non Farm Payroll [NFP]</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        The non-farm payroll report triggers some of the most significant rate
                                        fluctuations among all news
                                        announcements in the forex market. Consequently, numerous analysts.
                                    </p>
                                    <a href="nfp.php">Explore Further <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 mb-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/hedge.jpg" alt="Thumb" />
                                    <div class="overlay">
                                        <a href="#">
                                            <i class="flaticon-graph"></i>
                                            <h4>Investment Pools</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Sure, here's a rephrased version: "An online platform resembling traditional
                                        capital introduction
                                        programs, tailored for Investment Pools primarily utilizing CIS as their main
                                        investment strategy,
                                        creating an Investment Pools Marketplace.
                                    </p>
                                    <a href="hedge.php">Explore Further <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 mb-5">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/soft6.jpeg" alt="Thumb" />
                                    <div class="overlay">
                                        <a href="#">
                                            <i class="flaticon-plan"></i>
                                            <h4>Escrow Service</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Escrow becomes necessary when two parties are finalizing a transaction, and
                                        there's uncertainty
                                        about which party will...
                                    </p>
                                    <a href="escrow.php">Explore Further <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services ends here -->
    <section>
        <script type="text/javascript">
            baseUrl = "https://widgets.cryptocompare.com/";
            var scripts = document.getElementsByTagName("script");
            var embedder = scripts[scripts.length - 1];
            (function() {
                var appName = encodeURIComponent(window.location.hostname);
                if (appName == "") {
                    appName = "local";
                }
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl =
                    baseUrl +
                    "serve/v1/coin/multi?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP";
                s.src =
                    theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                embedder.parentNode.appendChild(s);
            })();
        </script>
    </section>

    <!-- Start Skill-->

    <!-- End Skill -->

    <div class="section-block">
        <section>
            <div style="width: 100%; height: 530px">
                <style>
                    .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        font-family: "Trebuchet MS", Arial, sans-serif !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright .blue-text {
                        color: #2196f3 !important;
                    }

                    .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:hover .blue-text {
                        color: #38acdb !important;
                    }

                    .tradingview-widget-copyright a:active .blue-text {
                        color: #299dcd !important;
                    }

                    .tradingview-widget-copyright a:visited .blue-text {
                        color: #2196f3 !important;
                    }
                </style><iframe allowtransparency="true" style="box-sizing: border-box; height: calc(468px); width: 100%" src="https://s.tradingview.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22500%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22expertoptionstrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D" frameborder="0"></iframe>
                <div style="
              height: 32px;
              line-height: 32px;
              width: 100%;
              text-align: center;
              vertical-align: middle;
            ">
                    <a style="
                color: rgb(173, 174, 176);
                font-family: 'Trebuchet MS', Tahoma, Arial, sans-serif;
                font-size: 13px;
              " href="http://www.tradingview.com/" target="_blank" ref="nofollow noopener">Cryptocurrency Market by
                        <span style="color: #3bb3e4">TradingView</span></a>
                </div>
            </div>
        </section>
        <div class="tradingview-widget-container" style="width: 100%; height: 104px">
            <iframe scrolling="no" allowtransparency="true" style="box-sizing: border-box; height: calc(72px); width: 100%" src="https://s.tradingview.com/embed-widget/tickers/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22BITFINEX%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITFINEX%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%2C%7B%22description%22%3A%22ZEC%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3AZECUSD%22%7D%2C%7B%22description%22%3A%22LTC%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3ALTCUSD%22%7D%2C%7B%22description%22%3A%22BTG%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3ABTGUSD%22%7D%2C%7B%22description%22%3A%22XMR%2FUSD%22%2C%22proName%22%3A%22BITFINEX%3AXMRUSD%22%7D%5D%2C%22width%22%3A%22100%25%22%2C%22height%22%3A104%2C%22utm_source%22%3A%22expertoptionstrade.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22tickers%22%7D" frameborder="0"></iframe>

            <div class="tradingview-widget-copyright">
                <a href="https://tradingview.com/" rel="noopener" target="_blank"><span class="blue-text">Quotes</span>
                    by
                    TradingView</a>
            </div>

            <style>
                .tradingview-widget-copyright {
                    font-size: 13px !important;
                    line-height: 32px !important;
                    text-align: center !important;
                    vertical-align: middle !important;
                    font-family: "Trebuchet MS", Arial, sans-serif !important;
                    color: #9db2bd !important;
                }

                .tradingview-widget-copyright .blue-text {
                    color: #2196f3 !important;
                }

                .tradingview-widget-copyright a {
                    text-decoration: none !important;
                    color: #9db2bd !important;
                }

                .tradingview-widget-copyright a:visited {
                    color: #9db2bd !important;
                }

                .tradingview-widget-copyright a:hover .blue-text {
                    color: #38acdb !important;
                }

                .tradingview-widget-copyright a:active .blue-text {
                    color: #299dcd !important;
                }

                .tradingview-widget-copyright a:visited .blue-text {
                    color: #2196f3 !important;
                }
            </style>
        </div>
    </div>

    <!-- Start Testimonial & Faq
    ============================================= -->
    <div class="testimonials-faq about-area default-padding" style="background-color:black;">
        <div class="container">
            <div class="row">
                <!-- Start Faq -->
                <div class="col-md-12 faq-area">
                    <div class="heading">
                        <h2 style="color:red;">Frequently Asked Questions</h2>
                    </div>
                    <div class="acd-items acd-arrow">
                        <div class="panel-group symb" id="accordion">
                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:black;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac2" style="color:white;">
                                            What's the duration for completing the withdrawal process?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Typically, withdrawals are processed within a few hours, but occasionally,
                                            there might be delays
                                            due to financial institutions. Rest assured, we strive to expedite
                                            withdrawals as swiftly as
                                            possible.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:black;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac1" style="color:white;">
                                            How much time does it typically take for my deposit to show up in my
                                            account?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Upon receipt of the deposit, it usually takes 1 to 2 hours.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:black;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac4" style="color:white;">
                                            Do any of your services come with fees?
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            We don't bill for our services since we cover our profits first before
                                            allocating investors their
                                            agreed-upon profit rates. Occasionally, certain investment options may
                                            involve fees, and in those
                                            instances, we ensure investors are thoroughly informed and advised.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:black;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#ac3" style="color:white;">
                                            What are the odds that I'll
                                        </a>
                                    </h4>
                                </div>
                                <div id="ac3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            While there's inherent risk in fund investments, we prioritize safety by
                                            insuring all invested
                                            funds. This means that if trading takes an unfavorable turn, the amount
                                            invested at the time is
                                            protected by insurance. Additionally, we have a one million dollar Employee
                                            Negligence cover in
                                            place.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
                <!-- End Faq -->
            </div>
        </div>
    </div>
    <!-- End Testimonial & Faq -->

    <!-- Start Skill
    ============================================= -->
    <!--<div class="skill-area default-padding">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6">-->
    <!--                <table class="table table-striped">-->
    <!--                    <thead style="background:#117BDC;  color:#ffffff;">-->
    <!--                        <tr>-->
    <!--                            <th scope="col">Latest Deposits</th>-->
    <!--                            <th scope="col"></th>-->
    <!--                            <th scope="col"></th>-->
    <!--                        </tr>-->
    <!--                    </thead>-->
    <!--                    <tbody id="ld_body">-->
    <!--                    </tbody>-->
    <!--                </table>-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
    <!--                <table class="table table-striped">-->
    <!--                    <thead style="background:#121212;  color:#ffffff;">-->
    <!--                        <tr>-->
    <!--                            <th scope="col">Latest Withdrawals</th>-->
    <!--                            <th scope="col"></th>-->
    <!--                            <th scope="col"></th>-->
    <!--                        </tr>-->
    <!--                    </thead>-->
    <!--                    <tbody id="lw_body">-->
    <!--                    </tbody>-->
    <!--                </table>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End Skill -->

    <!-- Start Clients Area
    ============================================= -->

    <!-- End Clients Area -->

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