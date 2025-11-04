<?php
include "../../../rootholder.php";
include "../../model/connection.php";
include "../../controller/Usercontroller.php";
include "../../controller/walletdetails.php";
include "../../controller/Trade.php";
include "includes/session.php";
include "includes/details.php";
$user_id = $_GET['user_id'];
$allusers = new Usercontroller();
$userwallet = new Walletdetails();
$trade = new Trade();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from chrev.dexignzone.com/xhtml/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:15 GMT -->

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
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-body bg-white border-bottom">
                                        <h4 class="text-black fs-20">User Balance</h4>
                                        <div class="media profile-bx">
                                            <!--<img src="images/profile/16.jpg" alt=""/>-->
                                            <div class="media-body align-items-center">
                                                <h2 class="text-black font-w600">
                                                    <?= $allusers->userfullname($user_id) ?>
                                                </h2>
                                                <h2 class="text-black font-w600">$
                                                    <?= $allusers->useramount($user_id) ?>
                                                </h2>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-white border-bottom">
                                        <h4 class="text-black fs-20">User I'D</h4>
                                        <div class="media profile-bx">
                                            <!--<img src="images/profile/16.jpg" alt=""/>-->
                                            <div class="media-body align-items-center">
                                                <img src="images/receipts/<?=$allusers->photoname($user_id)?>" alt="">
                                                <?php
                                                if($allusers->photoapproval($user_id) == "unverified"){
                                                    echo '<a href="../approvephoto.php?user_id='.$user_id.'">Approve</a>';
                                                }else{
                                                     echo '<a href="../disapprovephoto.php?user_id='.$user_id.'">Disapprove</a>';
                                                }
                                                    
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-white border-bottom">
                                        <h4 class="text-black fs-20">Account Upgrade</h4>
                                        <div class="media profile-bx">
                                            <!--<img src="images/profile/16.jpg" alt=""/>-->
                                            <div class="media-body align-items-center">
                                                <!--<h2 class="text-black font-w600">-->
                                                <!--    <?= $allusers->userfullname($user_id) ?>-->
                                                <!--</h2>-->
                                                <h2 class="text-black font-w600">$
                                                    <?= $allusers->userupgradecost($user_id) ?>
                                                </h2>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-white border-bottom">
                                        <h4 class="text-black fs-20">User Profit</h4>
                                        <div class="media profile-bx">
                                            <!--<img src="images/profile/16.jpg" alt=""/>-->
                                            <div class="media-body align-items-center">
                                                <!--<h2 class="text-black font-w600">-->
                                                <!--    <?= $allusers->userfullname($user_id) ?>-->
                                                <!--</h2>-->
                                                <h2 class="text-black font-w600">$
                                                    <?= $allusers->userprofitindividual($user_id) ?>
                                                </h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="card">
                                    <h4 class="mb-0 text-center text-black fs-20">Edit Users Details</h4>

                                    <div class="card-body row">
                                        <div class="col-md-4">
                                            <div
                                                class="bgl-warning border border-warning media align-items-center justify-content-center p-4">
                                                <!--<img class="mr-3" src="images/svg/bitcoin-1.svg" alt="">-->
                                                <h4 class="mb-0 text-center text-black fs-20">User Balance</h4>
                                                <div class="media-body">
                                                    <!--<form method="post" class="form-group" action="../editamount.php">-->
                                                    <form method="post" class="form-group" action="../editamount.php?user_id=<?= $user_id ?>">
                                                        <div class="">
                                                            <input type="number" name="amount"
                                                                value="<?= $allusers->useramount($user_id) ?>"
                                                                class="form-control rounded-0">
                                                        </div>
                                                        <div class="">
                                                            <button class="btn border-primary border-1 d-block w-100"
                                                                name="editamount" type="submit">Update</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div
                                                class="bgl-warning border border-warning align-items-center justify-content-center p-4">
                                                <!--<img class="mr-3" src="images/svg/bitcoin-1.svg" alt="">-->
                                                <h4 class="mb-0 text-center text-black fs-20">Last Investments</h4>
                                                <div class="media-body d-flex justify-content-center ">

                                                    <?= $allusers->userprofit($user_id) ?>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div
                                                class="bgl-warning border border-warning media align-items-center justify-content-center p-4">
                                                <!--<img class="mr-3" src="images/svg/bitcoin-1.svg" alt="">-->
                                                <h4 class="mb-0 text-center text-black fs-20">Account Upgrade</h4>
                                                <div class="media-body">
                                                    <form method="post" class="form-group"
                                                        action="../editupgrade.php?user_id=<?= $user_id ?>">
                                                        <div class="">
                                                            <input type="number" name="amount"
                                                                value="<?= $allusers->userupgradecost($user_id) ?>"
                                                                class="form-control rounded-0">
                                                        </div>
                                                        <div class="">
                                                            <button class="btn border-primary border-1 d-block w-100"
                                                                name="update" type="submit">Update</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <div
                                                class="bgl-warning border border-warning  align-items-center justify-content-center p-4">
                                                <!--<img class="mr-3" src="images/svg/bitcoin-1.svg" alt="">-->
                                                <h4 class="mb-0 text-center text-black fs-20 d-block">Maturity Date</h4>
                                                <div class="media-body d-flex justify-content-center">
                                                    <?= $allusers->usermaturitydate($user_id) ?>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
											<div class="bgl-warning border border-warning media align-items-center justify-content-center p-4">
												<!--<img class="mr-3" src="images/svg/bitcoin-1.svg" alt="">-->
												<h4 class="mb-0 text-center text-black fs-20">Users Profit Topup</h4>
												<div class="media-body">
												    <form method="post" class="form-group" action="../editprofit.php?user_id=<?=$user_id?>">
    													<div class="">
    														<input type="number" name="amount" value="<?= $allusers->userprofitindividual($user_id)?>" class="form-control rounded-0" >
    													</div>
    													<div class="">
    														<button class="btn border-primary border-1 d-block w-100" name="editamount" type="submit">Update</button>
    													</div>
												    </form>
												
												</div>
											</div>
										</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header border-0 d-xl-flex d-lg-block d-md-flex d-sm-flex d-block">
                                        <div class="mr-2">
                                            <h4 class="fs-20 text-black">Latest Funding Activity</h4>
                                        </div>

                                    </div>
                                    <div class="card-body p-0 tab-content card-table">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600 text-center">S/N</td>
                                                            <td class="font-w600 text-center">Amount</td>
                                                            <td class="font-w600 text-center">Status</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 text-center">1</td>
                                                            <form action="" method="post">
                                                                <td class="font-w600 text-center">
                                                                    <input type="number">
                                                                </td>
                                                                <td class="font-w600 text-center">Pending</td>
                                                            </form>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- <div class="tab-pane" id="Weekly">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-dark float-right" href="javascript:void(0);">PENDING</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-danger float-right" href="javascript:void(0);">CANCELED</a></td>
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
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-danger float-right" href="javascript:void(0);">CANCELED</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header border-0 d-xl-flex d-lg-block d-md-flex d-sm-flex d-block">
                                        <div class="mr-2">
                                            <h4 class="fs-20 text-black">Latest Investment Activity</h4>
                                        </div>

                                    </div>
                                    <div class="card-body p-0 tab-content card-table">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600 text-center">S/N</td>
                                                            <td class="font-w600 text-center">Amount</td>
                                                            <td class="font-w600 text-center">Status</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-w600 text-center">1</td>
                                                            <form action="" method="post">
                                                                <td class="font-w600 text-center">
                                                                    <input type="number">
                                                                </td>
                                                                <td class="font-w600 text-center">Pending</td>
                                                            </form>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header border-0 d-xl-flex d-lg-block d-md-flex d-sm-flex d-block">
                                        <div class="mr-2">
                                            <h4 class="fs-20 text-black">Copied Traders</h4>
                                        </div>

                                    </div>
                                    <div class="card-body p-0 tab-content card-table">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-w600 text-center">Name</td>
                                                            <td class="font-w600 text-center">Profit</td>
                                                            <td class="font-w600 text-center">Success</td>
                                                            <td class="font-w600 text-center">Type</td>
                                                        </tr>
                                                        <tr>
                                                            <?=$trade->usercopiedtraders($user_id)?>

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
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                        <div>
                                            <h4 class="text-black fs-20">User History Activity</h4>

                                        </div>
                                    </div>
                                    <div class="card-body p-0 tab-content card-table">
                                        <div class="tab-pane fade active show" id="monthly">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                S/N
                                                            </td>
                                                            <td class="font-w600 text-center">Description</td>
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
                <p>Copyright © Designed &amp; Developed by DexignZone 2020</p>
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
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!--dashboard-chart-->
    <script src="js/dashboard/portfolio.js"></script>
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
    <script src="includes/darkmood.js"></script>



</body>

<!-- Mirrored from chrev.dexignzone.com/xhtml/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 16:02:22 GMT -->

</html>