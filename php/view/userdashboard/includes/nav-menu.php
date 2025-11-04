<div class="deznav" id="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class=" ai-icon" href="index.php" aria-expanded="false" title="Home">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<li><a class=" ai-icon" href="my-wallet.php" aria-expanded="false" title="Wallet">
							<i class="flaticon-381-folder"></i>
							<span class="nav-text">Wallet</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="deposit.php" aria-expanded="false" title="Deposit">
							<i class="flaticon-381-transfer"></i>
							<span class="nav-text">Deposit</span>
						</a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="deposit.php">Deposits</a></li>
                            <li><a href="app-profile.html">Payments</a></li>
							<li><a href="my-wallet.php">Wallet Address</a></li>
                        </ul> -->
                    </li>
                    <li><a class="ai-icon" href="investment.php" aria-expanded="false" title="Investments">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Investments</span>
						</a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Silver</a></li>
                            <li><a href="chart-morris.html">Gold</a></li>
                            <li><a href="chart-chartjs.html">Platinum</a></li>
                            <li><a href="chart-chartist.html">Regular</a></li>
                        </ul> -->
                    </li>
					<li><a class="ai-icon" href="trading.php" aria-expanded="false" title="Live trading">
							<i class="flaticon-381-map"></i>
							<span class="nav-text">Live Trading</span>
						</a>
                        
                    </li>
					<li><a class="ai-icon" href="copytrading.php" aria-expanded="false" title="Copy trading">
							<i class="flaticon-381-map"></i>
							<span class="nav-text">Copy Trading</span>
						</a>
                        
                    </li>
					<li><a class=" ai-icon" href="withdraw.php" aria-expanded="false" title="Withdraw">
						<i class="flaticon-381-box"></i>
						<span class="nav-text">Withdraw</span>
						</a>
					</li>
                    <li><a class="ai-icon" href="../logout.php" aria-expanded="false" title="Logout">
							<i class="flaticon-381-off"></i>
							<span class="nav-text">Logout</span>
						</a>  
                    </li>
                    <li class="text-center border-white border-1 mt-5">
                        <a class="ai-icon" href="#" aria-expanded="false" style="border: 1px solid white">
							<!--<i class="flaticon-381-off"></i>-->
							<span class="nav-text"><?=$allusers->accounttype();?></span>
						</a>  
						<?php
						$typeofacct = $allusers->accounttype();
						
						if($typeofacct == 'Standard'){
						    echo '<a class="ai-icon" href="upgrade.php" aria-expanded="false" style=" background-color: white; color: #363940;">
							<!--<i class="flaticon-381-off"></i>-->
							<span class="nav-text" >Upgrade to Premium</span>
						</a>';
						}
						
						?>
                    </li>
                    
                </ul>
			</div>
        </div>