<?php
include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Usercontroller.php";
include "../../controller/Investmentcontroller.php";
include "includes/session.php";
include "includes/details.php";
$allusers = new Usercontroller();
$update = new Investmentcontroller();
$allusers->userstatus();
$allusers->photostatus();
$update->autoupdate();
if (isset($_SESSION['investmentmatured'])) {
    echo "<script> alert(" . $_SESSION['investmentmatured'] . ");</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from chrev.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:01:01 GMT -->

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
    <link rel="stylesheet" href="icons/flaticon/flaticon.css">

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
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6 fig ">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <svg fill="#f4f0f0" height="50px" width="50px" version="1.2" baseProfile="tiny"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-351 153 256 256"
                                            xml:space="preserve">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M-122.1,236.9l4.4-11.3h-20.6l3.7,11.3H-122.1z M-117.7,240.6L-117.7,240.6l-20.6-0.1v0.1c-7.2,3.7-12.1,11.2-12.1,19.8 c0,12.4,10,22.3,22.3,22.3c12.4,0,22.3-10,22.3-22.3C-105.6,251.8-110.5,244.3-117.7,240.6z M-126.6,271.2v3.2h-3.1v-2.9 c-2.1-0.1-4.1-0.7-5.3-1.3l0.9-3.7c1.3,0.7,3.2,1.3,5.2,1.3c1.7,0,3.1-0.7,3.1-2c0-1.2-1.1-2-3.3-2.7c-3.3-1.1-5.6-2.7-5.6-5.7 c0-2.8,2-4.9,5.3-5.6v-2.9h3.1v2.8c2.1,0.1,3.5,0.5,4.5,1.1l-0.9,3.6c-0.8-0.4-2.3-1.1-4.5-1.1c-2,0-2.7,0.9-2.7,1.7 c0,1.1,1.1,1.7,3.7,2.7c3.7,1.3,5.2,3.1,5.2,5.8C-121,268.1-123,270.5-126.6,271.2z M-302.2,208.3l6.9-18.3h-33.2l5.8,18.3H-302.2z M-295.3,214.3v-0.1h-33.4v0.1c-11.7,6-19.5,18.2-19.5,32.2c0,20.1,16.2,36.3,36.3,36.3c20.1,0,36.3-16.2,36.3-36.3 C-275.6,232.5-283.6,220.3-295.3,214.3z M-309.6,264v5.2h-4.9v-4.8c-3.5-0.1-6.6-1.1-8.6-2.1l1.5-6c2.1,1.2,5.2,2.3,8.4,2.3 c2.9,0,4.9-1.1,4.9-3.2c0-1.9-1.6-3.2-5.3-4.4c-5.5-1.9-9.2-4.4-9.2-9.3c0-4.5,3.2-8,8.6-9v-4.8h4.9v4.5c3.5,0.1,5.7,0.8,7.3,1.7 l-1.5,5.7c-1.3-0.5-3.7-1.7-7.3-1.7c-3.3,0-4.4,1.5-4.4,2.8c0,1.7,1.7,2.8,6.1,4.4c6,2.1,8.5,4.9,8.5,9.4 C-300.6,259.1-303.8,262.9-309.6,264z M-218.3,238.7c14.6,0,26.3-11.7,26.3-26.3c0-14.6-11.7-26.3-26.3-26.3s-26.3,11.7-26.3,26.3 C-244.6,227-232.9,238.7-218.3,238.7z M-279.3,315.1h-47.3c-15.4,0-16.2-23.4,0.3-23.4h40.8l23.7-34.6c6.9-9.6,14.9-14.1,26.1-14.1 h35.1c11.2,0,19.1,4.3,26.1,14.1l23.7,34.6h41.2c16.5,0,15.4,23.4,0.5,23.4h-47.3c-3.7,0-8.2-1.3-10.9-5.3l-18.1-25.8l-0.1,67.3 h-64.7l-0.1-67.3l-17.9,25.8C-271.1,313.7-275.6,315.1-279.3,315.1z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-white fs-15">Investments</h5>
                                        <h3 class="text-white mb-0">$<?php
                                                                        if ($allusers->userinvestmentindividually() == "") {
                                                                            echo '0.00';
                                                                        } else {
                                                                            echo $allusers->userinvestmentindividually();
                                                                        }; ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6 fig">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center d-flex">
                                    <div class="media-body">
                                        <!--<svg fill="#2cba69" width="50px" height="50px" viewBox="0 0 24 24" id="investment" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M14,10H11.5A1.5,1.5,0,0,0,10,11.5h0A1.5,1.5,0,0,0,11.5,13h1A1.5,1.5,0,0,1,14,14.5h0A1.5,1.5,0,0,1,12.5,16H10" style="fill: none; stroke: #2cba69; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="secondary-2" data-name="secondary" d="M12,10V9m0,8V16" style="fill: none; stroke: #2cba69; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><polyline id="primary" points="11.04 5 10.5 3 13.5 3 12.97 4.97" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><path id="primary-2" data-name="primary" d="M12,21a14.43,14.43,0,0,0,4.19-.57A4,4,0,0,0,19,16.61h0a11.29,11.29,0,0,0-.46-3.16L17.15,8.83A5.38,5.38,0,0,0,12,5h0A5.38,5.38,0,0,0,6.85,8.83L5.46,13.45A11.29,11.29,0,0,0,5,16.61H5a4,4,0,0,0,2.81,3.82A14.43,14.43,0,0,0,12,21Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>-->

                                        <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#fcfcfc">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12.75 6C12.75 5.58579 12.4142 5.25 12 5.25C11.5858 5.25 11.25 5.58579 11.25 6V6.31673C9.61957 6.60867 8.25 7.83361 8.25 9.5C8.25 11.4172 10.0628 12.75 12 12.75C13.3765 12.75 14.25 13.6557 14.25 14.5C14.25 15.3443 13.3765 16.25 12 16.25C10.6235 16.25 9.75 15.3443 9.75 14.5C9.75 14.0858 9.41421 13.75 9 13.75C8.58579 13.75 8.25 14.0858 8.25 14.5C8.25 16.1664 9.61957 17.3913 11.25 17.6833V18C11.25 18.4142 11.5858 18.75 12 18.75C12.4142 18.75 12.75 18.4142 12.75 18V17.6833C14.3804 17.3913 15.75 16.1664 15.75 14.5C15.75 12.5828 13.9372 11.25 12 11.25C10.6235 11.25 9.75 10.3443 9.75 9.5C9.75 8.65573 10.6235 7.75 12 7.75C13.3765 7.75 14.25 8.65573 14.25 9.5C14.25 9.91421 14.5858 10.25 15 10.25C15.4142 10.25 15.75 9.91421 15.75 9.5C15.75 7.83361 14.3804 6.60867 12.75 6.31673V6Z"
                                                    fill="#1C274C"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-white fs-15">Balance</h5>
                                        <h3 class="text-white mb-0">$<?php

                                                                        if ($allusers->usersamount() == "") {
                                                                            echo '0.00';
                                                                        } else {
                                                                            echo $allusers->usersamount();
                                                                        }


                                                                        ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6 fig">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center d-flex">
                                    <div class="media-body">
                                        <svg fill="#f7f3f3" height="50px" width="50px" viewBox="-2.4 -2.4 28.80 28.80"
                                            data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="0"
                                                    fill="#686fca" strokewidth="0"></rect>
                                            </g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title></title>
                                                <path
                                                    d="M22,11V7.83L12,2.06,2,7.83V11H4v8H2v2H22V19H20V11ZM4,9l8-4.62L20,9H4ZM6,19V11H8v8Zm4,0V11h4v8Zm8,0H16V11h2Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-white fs-15">Total Deposits</h5>
                                        <h3 class="text-white mb-0">$<?php
                                                                        if ($allusers->userdepositindividually() == "") {
                                                                            echo '0.00';
                                                                        } else {
                                                                            echo $allusers->userdepositindividually();
                                                                        }; ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6 fig">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center d-flex">
                                    <div class="media-body">
                                        <svg fill="#fafafa" height="50px" width="50px" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-34.5 -34.5 414.00 414.00" xml:space="preserve" stroke="#fafafa">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                <rect x="-34.5" y="-34.5" width="414.00" height="414.00" rx="0"
                                                    fill="#0f0a57" strokewidth="0"></rect>
                                            </g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <path
                                                        d="M203.922,233.952H93.189c-12.501,0-22.671-10.17-22.671-22.671v-83.513c0-2.762-2.238-5-5-5H9.356 c-5.159,0-9.356,4.197-9.356,9.356v130.63c0,5.158,4.197,9.355,9.356,9.355H24.41c1.618,0,3.143,0.788,4.079,2.108l25.405,35.859 c0.938,1.323,2.459,2.109,4.08,2.109c1.622,0,3.143-0.786,4.08-2.109l25.403-35.857c0.937-1.321,2.462-2.11,4.081-2.11h108.026 c5.159,0,9.357-4.197,9.357-9.355v-23.803C208.922,236.19,206.684,233.952,203.922,233.952z">
                                                    </path>
                                                    <path
                                                        d="M332.329,32.813H98.189c-6.986,0-12.671,5.684-12.671,12.671v160.798c0,6.986,5.685,12.671,12.671,12.671h132.973 c1.619,0,3.145,0.788,4.08,2.109l33.157,46.801c0.938,1.323,2.459,2.109,4.08,2.109c1.622,0,3.143-0.786,4.08-2.109l33.155-46.8 c0.936-1.321,2.463-2.11,4.081-2.11h18.533c6.985,0,12.671-5.685,12.671-12.671V45.483C345,38.496,339.315,32.813,332.329,32.813z M227.577,166.411v11.15c0,1.156-0.938,2.094-2.093,2.094h-16.049c-1.155,0-2.092-0.938-2.092-2.094v-11.559 c-8.457-2.031-16.275-6.367-21.653-12.047l-3.118-3.294c-0.381-0.403-0.586-0.941-0.572-1.497c0.017-0.554,0.253-1.08,0.654-1.463 l11.657-11.031c0.84-0.794,2.165-0.757,2.958,0.082l3.117,3.294c3.964,4.189,11.004,7.002,17.515,7.002 c5.149,0,13.862-1.36,13.862-6.458c0.036-4.405-1.871-6.174-15.357-10.259c-11.533-3.493-30.834-9.34-30.834-31.07 c0-12.172,8.297-21.852,21.771-25.582V61.737c0-1.156,0.937-2.094,2.092-2.094h16.049c1.155,0,2.093,0.938,2.093,2.094v10.834 c6.972,1.027,13.736,3.429,18.799,6.699l3.809,2.461c0.973,0.628,1.25,1.923,0.621,2.895L242.1,98.105 c-0.627,0.97-1.924,1.249-2.895,0.622l-3.811-2.461c-3.6-2.327-9.936-4.016-15.061-4.016c-5.396,0-14.528,1.477-14.528,7.01 c0,5.204,2.161,7.372,16.465,11.705c11.905,3.605,29.898,9.055,29.729,29.707C251.999,153.786,242.693,163.529,227.577,166.411z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>

                                    <div class="media-body">
                                        <h5 class="text-white fs-15">Total Profits</h5>
                                        <h3 class="text-white mb-0">$<?php
                                                                        if ($allusers->userprofitindividually() == "") {
                                                                            echo '0.00';
                                                                        } else {
                                                                            echo $allusers->userprofitindividually();
                                                                        }
                                                                        ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12 col-lg-12">
                        <div class="">
                            <div class="card-header d-block d-sm-flex border-0 pb-0">
                                <div>
                                    <h4 class="text-white fs-20">Payment Methods</h4>
                                    <p class="fs-13 mb-0">All payments are done via BTC and Ethereum</p>

                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div class="tradingview-widget-container__widget"></div>
                                        <div class="tradingview-widget-copyright">
                                            <a href="https://www.tradingview.com/" rel="noopener nofollow"
                                                target="_blank"><span class="blue-text">Track all markets on
                                                    TradingView</span></a>
                                        </div>
                                        <script type="text/javascript"
                                            src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js"
                                            async>
                                        {
                                            "symbols": [{
                                                    "proName": "FOREXCOM:SPXUSD",
                                                    "title": "S&P 500"
                                                },
                                                {
                                                    "proName": "FOREXCOM:NSXUSD",
                                                    "title": "US 100"
                                                },
                                                {
                                                    "proName": "FX_IDC:EURUSD",
                                                    "title": "EUR to USD"
                                                },
                                                {
                                                    "proName": "BITSTAMP:BTCUSD",
                                                    "title": "Bitcoin"
                                                },
                                                {
                                                    "proName": "BITSTAMP:ETHUSD",
                                                    "title": "Ethereum"
                                                }
                                            ],
                                            "colorTheme": "dark",
                                            "isTransparent": false,
                                            "showSymbolLogo": true,
                                            "locale": "en"
                                        }
                                        </script>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"><a
                                                    href="https://www.tradingview.com/" rel="noopener nofollow"
                                                    target="_blank"><span class="blue-text">Track all markets on
                                                        TradingView</span></a></div>
                                            <script type="text/javascript"
                                                src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                                async>
                                            {
                                                "symbol": "BINANCE:BTCUSDT",
                                                "width": 350,
                                                "height": 220,
                                                "locale": "en",
                                                "dateRange": "12M",
                                                "colorTheme": "dark",
                                                "isTransparent": false,
                                                "autosize": false,
                                                "largeChartUrl": ""
                                            }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- TradingView Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <div class="tradingview-widget-copyright"><a
                                                    href="https://www.tradingview.com/" rel="noopener nofollow"
                                                    target="_blank"><span class="blue-text">Track all markets on
                                                        TradingView</span></a></div>
                                            <script type="text/javascript"
                                                src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js"
                                                async>
                                            {
                                                "symbol": "BINANCE:ETHUSDT",
                                                "width": 350,
                                                "height": 220,
                                                "locale": "en",
                                                "dateRange": "12M",
                                                "colorTheme": "dark",
                                                "isTransparent": false,
                                                "autosize": false,
                                                "largeChartUrl": ""
                                            }
                                            </script>
                                        </div>
                                        <!-- TradingView Widget END -->
                                    </div>
                                </div>
                                <!-- <div class="media align-items-center d-none d-sm-flex">
									<h4 class="fs-20 text-white">Percentage of Successful Transactions</h4>
									<div class="d-inline-block relative donut-chart-sale mr-4">
										<span class="donut" data-peity='{ "fill": ["rgb(60, 75, 165)", "rgba(236, 236, 236, 1)"],   "innerRadius": 32, "radius": 10}'>7/8</span>
										<small class="text-primary">71%</small>
									</div>
								</div> -->
                            </div>
                        </div>
                    </div>



                    <div class="col-12">
                        <div class="">
                            <div class="card-header">
                                Transaction Details
                            </div>
                            <table class="table table-sm mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th>Statment</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody id="">
                                    <?php $allusers->getusersnotification(); ?>
                                </tbody>
                            </table>

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
        <div class="footer" id="footer">
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



    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>


    <!-- Dashboard 1 -->
    <script src="js/dashboard/dashboard-1.js"></script>
    <script>
    function carouselReview() {
        /*  testimonial one function by = owl.carousel.js */
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
                    items: 3
                },
                1600: {
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
                    items: 8
                },
                1600: {
                    items: 6
                }
            }
        })
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            carouselReview();
        }, 1000);
    });
    </script>
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
        xmlhttp.open("GET", "../notificationuser.php", true);
        xmlhttp.send();
    }
    setInterval(notification, 1000);

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
        xmlhttp.open("GET", "../notificationcountuser.php", true);
        xmlhttp.send();
    }
    setInterval(notificationcount, 1000);

    function closenotify(count) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            }
        };
        xmlhttp.open("GET", "../closenotifyuser.php?count=" + count, true);
        xmlhttp.send();
    }
    </script>
    <script>
    // function status(){
    // 	var stat = document.getElementById('status');
    // 	if (stat.innerHTML == 'deactivate') {
    // 		stat.innerHTML= 'activate';
    // 		alert(stat.innerHTML);
    // 	}
    // 	elseif(stat.innerHTML == 'activate'){
    // 		stat.innerHTML = 'deactivate';
    // 		alert(stat.innerHTML);
    // 	}

    // }
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

</html>