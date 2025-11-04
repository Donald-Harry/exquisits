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
$allusers->photostatus();
$trade = new Trade();
$user_id = $_SESSION['id'];

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
    <!-- <link rel="stylesheet" href="includes/css/bootstrap.css"> -->
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
                                    <div class="card-header d-block d-sm-flex border-0 py-0">
                                        <div>
                                            <h4 class="fs-20 text-white">Live Trading</h4>
                                        </div>

                                    </div>


                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 p-3">

                                                <form method="post" class="form-group" id="trade">
                                                    <div class="p-1">
                                                        <select name="pair" class="form-control">
                                                            <option value="BTCUSDT">BTCUSDT, Bitcoin vs USD Tether</option>
                                                            <option value="ETHUSDT">ETHUSDT, Ethereum vs USD Tether</option>
                                                            <option value="BNBUSDT">BNBUSDT, Binance Coin vs USD Tether</option>
                                                            <option value="ADAUSDT">ADAUSDT, Cardano vs USD Tether</option>
                                                            <option value="DOGEUSDT">DOGEUSDT, Dogecoin vs USD Tether</option>
                                                            <option value="XRPUSDT">XRPUSDT, Ripple vs USD Tether</option>
                                                            <option value="SOLUSDT">SOLUSDT, Solana vs USD Tether</option>
                                                            <option value="DOTUSDT">DOTUSDT, Polkadot vs USD Tether</option>
                                                            <option value="UNIUSDT">UNIUSDT, Uniswap vs USD Tether</option>
                                                            <option value="LINKUSDT">LINKUSDT, Chainlink vs USD Tether</option>
                                                            <option value="LTCUSDT">LTCUSDT, Litecoin vs USD Tether</option>
                                                            <option value="MATICUSDT">MATICUSDT, Polygon vs USD Tether</option>
                                                        </select>
                                                    </div>
                                                    <div class="p-1">
                                                        <select name="orderType" onchange="checkorder()"
                                                            class="form-control" id="orderType">
                                                            <option value="limit">Limit</option>
                                                            <option value="market">Market</option>
                                                        </select>
                                                    </div>
                                                    <div class="p-1">
                                                        <input type="number" name="orderPrice" id="orderPrice"
                                                            class="form-control" placeholder="Order Price">
                                                    </div>
                                                    <div class="p-1">
                                                        <input type="number" name="amount" class="form-control"
                                                            placeholder="Amount in USD">
                                                    </div>
                                                    <!-- <div class="p-1">
                                                        <input type="number" name="quantity" class="form-control"
                                                            placeholder="Qty">
                                                    </div> -->

                                                    <div class="p-1 d-flex gap-1" style="gap:10px">
                                                        <input type="number" class="form-control" name="tp"
                                                            placeholder="TP">
                                                        <input type="number" class="form-control" name="sl"
                                                            placeholder="SL">
                                                    </div>

                                                    <div class="p-1 d-flex flex-column">
                                                        <button class="btn rounded-0 btn-success" name="buy"
                                                            onclick="longtrade()" type="submit">BUY/LONG</button>
                                                        <button class="btn btn-danger mt-2" name="short"
                                                            onclick="shorttrade()" type="submit">SELL/SHORT</button>

                                                    </div>
                                                    <div id="messageTrade">
                                                        
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="col-md-8 chartbox p-3">
                                                <!-- TradingView Widget Container -->
                                                <div class="tradingview-widget-container"
                                                    style="height:100%;width:100%">
                                                    <div class="tradingview-widget-container__widget"
                                                        style="height:calc(100% - 32px); width:100%"></div>
                                                </div>
                                            </div>

                                            <script>
                                                function loadTradingViewWidget(symbol) {
                                                    const script = document.createElement('script');
                                                    script.src = "https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js";
                                                    script.async = true;
                                                    script.innerHTML = JSON.stringify({
                                                        "autosize": true,
                                                        "symbol": symbol,
                                                        "interval": "D",
                                                        "timezone": "Etc/UTC",
                                                        "theme": "light",
                                                        "style": "1",
                                                        "locale": "en",
                                                        "hide_side_toolbar": false,
                                                        "allow_symbol_change": true,
                                                        "details": true,
                                                        "calendar": false,
                                                        "support_host": "https://www.tradingview.com"
                                                    });

                                                    const container = document.querySelector('.tradingview-widget-container__widget');
                                                    container.innerHTML = ''; // Clear the current widget
                                                    container.appendChild(script); // Add the new script to load the widget

                                                    // Wait for the widget to load and set up the observer

                                                }


                                                // Load the initial widget with the default symbol
                                                loadTradingViewWidget("COINBASE:BTCUSD");
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="">
                                    <div class="card-header border-0 d-sm-flex d-block">
                                        <div>
                                            
                                            <h4 class="fs-20 text-white">Order History</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link px-2"
                                                    style="background-color: #363940; margin: 2px;" id="home-tab"
                                                    data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true">Order</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link  px-2 "
                                                    style="background-color: #363940; margin: 2px;" id="profile-tab"
                                                    data-bs-toggle="tab" data-bs-target="#profile" type="button"
                                                    role="tab" aria-controls="profile"
                                                    aria-selected="false">History</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm mb-0 table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">S/N</th>
                                                                <th class="text-center">Pair</th>
                                                                <th class="text-center">Order Price</th>
                                                                <th class="text-center">Amount</th>
                                                                <th class="text-center">Take Profit</th>
                                                                <th class="text-center">Stop Loss</th>
                                                                <th class="text-center">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?=$trade->viewpendingtrade($user_id)?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <div class="table-responsive">
                                                    <table class="table table-sm mb-0 table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">S/N</th>
                                                                <th class="text-center">Pair</th>
                                                                <th class="text-center">Order Price</th>
                                                                <th class="text-center">Amount</th>
                                                                <th class="text-center">Take Profit</th>
                                                                <th class="text-center">Stop Loss</th>
                                                                <th class="text-center">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?=$trade->viewtrade($user_id)?>
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
    <script src="vendor/"></script>

    <!-- Counter Up -->
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <!--chart-moris-->
    <script src="includes/js/bootstrap.js"></script>

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
            jQuery('#next-slide').on('click', function () {
                $('.testimonial-one').trigger('next.owl.carousel');
            });

            jQuery('#prev-slide').on('click', function () {
                $('.testimonial-one').trigger('prev.owl.carousel');
            });
            /*Custom Navigation work*/
        }

        jQuery(window).on('load', function () {
            setTimeout(function () {
                carouselReview();
            }, 1000);
        });
    </script>
    <script>
        function longtrade() {
            var form = document.getElementById('trade');
            event.preventDefault();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == 'success') {
                        Swal.fire({
                    title: "Congratulation!",
                    text: "Order placed successfully",
                    icon: "success"
                    });
                }else{
                    Swal.fire({
                    title: "Failed",
                    text: this.responseText,
                    icon: "error"});
                }
                    // alert(this.responseText);
                   
                }
            };
            let formdata = new FormData(form)
            xmlhttp.open("post", "../longtrade.php", true);
            xmlhttp.send(formdata);
        }
        function shorttrade() {
            var form = document.getElementById('trade');
            event.preventDefault();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == 'success') {
                        Swal.fire({
                    title: "Congratulation!",
                    text: "Order placed successfully",
                    icon: "success"
                    });
                }else{
                    Swal.fire({
                    title: "Failed",
                    text: this.responseText,
                    icon: "error"});
                }
                    // alert(this.responseText);
                   
                }
            };
            let formdata = new FormData(form)
            xmlhttp.open("post", "../shorttrade.php", true);
            xmlhttp.send(formdata);
        }


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
    <script>
        function checkorder() {
            const orderType = document.getElementById('orderType');
            const orderPrice = document.getElementById('orderPrice');
            console.log(orderType.value)
            if (orderType.value == 'market') {
                orderPrice.style.display = 'none';
            } else {
                orderPrice.style.display = 'block';
            }
        }
    </script>

    <script>
        function fetchInitialData() {
            const url = 'https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=1&interval=minute';

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const chartData = data.prices.map(d => ({
                        time: Math.floor(d[0] / 1000),
                        value: d[1],
                    }));
                    lineSeries.setData(chartData);

                    const latestPrice = chartData[chartData.length - 1].value;
                    document.getElementById('priceContainer').innerHTML = `Current BTC/USDT Price: $${latestPrice.toFixed(2)}`;
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    document.getElementById('priceContainer').innerHTML = 'Error fetching pric';
                });
        }

        fetchInitialData();

        setInterval(fetchInitialData, 60000);
    </script>

</body>


<!-- Mirrored from chrev.dexignzone.com/xhtml/my-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:10 GMT -->

</html>