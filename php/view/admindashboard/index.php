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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $companyname ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
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
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                       
                                        <svg viewBox="-2.4 -2.4 28.80 28.80" height="50px" width="50px" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#ede8e8">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="0"
                                                    fill="#4b60b4" strokewidth="0"></rect>
                                            </g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M15.5385 11.4899C17.7949 11.4899 19.641 9.65316 19.641 7.40826C19.641 5.16336 17.7949 3.32663 15.5385 3.32663C15.4359 3.32663 15.3334 3.32663 15.2308 3.32663C15.8462 4.34704 16.2564 5.57153 16.2564 6.79602C16.2564 8.53071 15.5385 10.1634 14.4103 11.3879C14.718 11.4899 15.1282 11.4899 15.5385 11.4899Z"
                                                    fill="#030D45"></path>
                                                <path
                                                    d="M17.2821 13.6326H16.2565C17.7949 14.9591 18.8206 17 18.8206 19.2448C18.8206 19.7551 18.718 20.1632 18.6154 20.5714C19.9488 20.3673 20.7693 20.0612 21.2821 19.7551C21.7949 19.4489 22.0001 18.9387 22.0001 18.3265C22.0001 15.7755 19.8462 13.6326 17.2821 13.6326Z"
                                                    fill="#030D45"></path>
                                                <path
                                                    d="M9.38459 11.4898C10.6154 11.4898 11.641 11.0817 12.5641 10.2654C13.5897 9.44903 14.1025 8.1225 14.1025 6.79597C14.1025 5.77556 13.7948 4.75515 13.1795 4.04087C12.3589 2.81638 11.0256 2.00005 9.38459 2.00005C6.82049 2.00005 4.66664 4.14291 4.66664 6.69393C4.66664 9.34699 6.82049 11.4898 9.38459 11.4898Z"
                                                    fill="#030D45"></path>
                                                <path
                                                    d="M12.1538 13.9389C11.8462 13.9389 11.641 13.8369 11.3333 13.8369H7.4359C4.46154 13.8369 2 16.2859 2 19.245C2 19.9593 2.30769 20.4695 2.82051 20.8777C3.64103 21.3879 5.58974 22.0001 9.38461 22.0001C13.1795 22.0001 15.0256 21.3879 15.9487 20.8777C15.9487 20.8777 16.0513 20.7757 16.1538 20.7757C16.5641 20.4695 16.8718 19.9593 16.8718 19.245C16.7692 16.592 14.8205 14.3471 12.1538 13.9389Z"
                                                    fill="#030D45"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="text-white fs-10">Users</h5>
                                        <h3 class="text-white mb-0"><?php echo $allusers->usercount(); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6 ">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center d-flex">
                                    <div class="media-body">
                                        
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
                                        <h5 class="text-white fs-10">Deposits</h5>
                                        <h3 class="text-white mb-0">$<?php echo $allusers->usersdeposits(); ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <svg fill="#fafafa" height="50px" width="50px" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-34.5 -34.5 414.00 414.00" xml:space="preserve" stroke="#fafafa">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                <rect x="-34.5" y="-34.5" width="414.00" height="414.00" rx="0"
                                                    fill="#4f46c8" strokewidth="0"></rect>
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
                                        <h5 class="text-white fs-10">Balance</h5>
                                        <h3 class="text-white mb-0">$<?php echo $allusers->usersamount1(); ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
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
                                        <h5 class="text-white fs-10">Total Profits</h5>
                                        <h3 class="text-white mb-0">$<?php echo $allusers->usersprofits(); ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-6">
                        <div class="currency-bx overflow-hidden relative bg-mine">
                            <div class="card-body p-4">
                                <div class="media align-items-center">
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
                                        <h5 class="text-white fs-10">Total Investments</h5>
                                        <h3 class="text-white mb-0">$<?php echo $allusers->usersinvestments(); ?></h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-header d-block d-sm-flex border-0 pb-0">
                            <div>
                                <h4 class="text-white fs-20">Payment Methods</h4>
                                <p class="fs-13 mb-0">All payments are done via BTC and Ethereum</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="">
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
                                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track
                                                    all markets on TradingView</span></a></div>
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
                                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track
                                                    all markets on TradingView</span></a></div>
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

                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12 col-lg-12">
                    <div class="">
                        <div class="card-header d-block d-sm-flex border-0">
                            <div>
                                <h4 class="fs-20 text-white">List of Users</h4>
                            </div>
                        </div>
                        <div class="card-body tab-content p-0">
                            <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table shadow-hover card-table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="bgl-success p-3 d-inline-block">S/N</span>
                                                </td>
                                                <td class="font-w900 text-center">Name</td>
                                                <td class="font-w900 text-center">Email</td>
                                                <td class="font-w900 text-center">Password</td>
                                                <td class="font-w900 text-center">Status</td>
                                                <td class="font-w900 text-center">Delete</td>
                                            </tr>



                                        </tbody>
                                        <tbody id="usertable">
                                            <?php $allusers->getusers(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-xxl-8 col-lg-8">
                    <div class="card">
                        <!--<h3>Change Password</h3>-->
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="../changeprofile.php" method="post">
                                    <h6 class="text-danger">
                                        <?php
										if (isset($_SESSION['message'])) {
											echo $_SESSION['message'];
											unset($_SESSION['message']);
										}

										?>
                                    </h6>
                                    <div class="form-group">
                                        <label>Previous Password</label>
                                        <input type="password" class="form-control rounded-0" name="ppass"
                                            placeholder="Previous Password">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control rounded-0" name="npass"
                                            placeholder="Previous Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control rounded-0" name="cpass"
                                            placeholder="Previous Password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn border" type="submit" name="submit">Change</button>
                                    </div>
                                </form>
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
            <p>Copyright © Broker 2020</p>
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

   
</body>

</html>