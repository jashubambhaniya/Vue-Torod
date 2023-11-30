<template>
	<div class="box_menudashboard">
		<ul class="menu_uldash">
			<li><a href="dashboard.php"><img src="../../../../../public/assets/image/dashboard_icon01.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon01w.png" class="white_iconmenu"> <span>Dashboard</span></a></li>
			<li><a href="dashboard-orders.php"><img src="../../../../../public/assets/image/dashboard_icon02.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon02w.png" class="white_iconmenu"> <span>Orders</span></a></li>
			<li><a href="list-orders.php"><img src="../../../../../public/assets/image/dashboard_icon04.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon04w.png" class="white_iconmenu"> <span>Shipments</span></a></li>
			<li> <a href="tracking-page.php"><img src="../../../../../public/assets/image/dashboard_icon12.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon12w.png" class="white_iconmenu"><span>Tracking</span></a></li>
			<li><a href="customers.php"><img src="../../../../../public/assets/image/dashboard_icon05.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon05w.png" class="white_iconmenu"> <span>Customers</span></a></li>
			<li> <a href="return-page.php"><img src="../../../../../public/assets/image/dashboard_icon03.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon03w.png" class="white_iconmenu"><span>Returns</span></a></li>
			<li class="menu-item-has-children parent">
				<a href="#" class="level-top"> <img src="../../../../../public/assets/image/dashboard_icon07.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon07w.png" class="white_iconmenu"> <span>Settings</span></a>
				<div class="sub_menudash " style="display: none;">
					<div class="head_cssdash"><i class="fa fa-angle-left" aria-hidden="true"></i> Settings</div>
					<ul class="menu_uldash">
						<div class="sub_menu2">
							<h5 class="head_2menu"> <img src="../../../../../public/assets/image/dashboard_icon13.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon13w.png" class="white_iconmenu"> My Account</h5>
							<ul>
								<li> <a href="profile.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Profile </a> </li>
								<li> <a href="myaccount-plan.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Plan </a></li>
								<li> <a href="wallet.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Wallet </a></li>
								<li> <a href="billing.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Billing & Invoices </a></li>
								<li><a href="branding.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Company \ Brand </a></li>
								<li> <a href="team.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Team </a></li>
								<li> <a href="addresses.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Address </a></li>
							</ul>
						</div>
						<div class="sub_menu2">
							<h5 class="head_2menu"><img src="../../../../../public/assets/image/dashboard_icon14.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon14w.png" class="white_iconmenu"> Integration</h5>
							<ul>
								<li> <a href="all-store.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Connect store</a> </li>
								<li> <a href="carriers.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Carriers </a></li>
								<li> <a href="api.php"><i class="fa fa-angle-right" aria-hidden="true"></i> API </a></li>
							</ul>
						</div>
						<div class="sub_menu2">
							<h5 class="head_2menu"><img src="../../../../../public/assets/image/dashboard_icon15.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon15w.png" class="white_iconmenu"> Configuration</h5>
							<ul>
								<li> <a href="international-shipping.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Internation Shipping</a> </li>
								<li> <a href="label-settings.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Labels</a> </li>
								<li class=""> <a href="packages.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Package </a></li>
								<li> <a href="notifications.php"> <i class="fa fa-angle-right" aria-hidden="true"></i> Notification </a></li>
								<li> <a href="automations.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Automation </a></li>
							</ul>
						</div>
						<li>
							<a href="#"> </a>
						</li>
					</ul>
				</div>
			</li>
			<li><a href="#"><img src="../../../../../public/assets/image/dashboard_icon09.png" class="black_iconmenu"><img src="../../../../../public/assets/image/dashboard_icon09w.png" class="white_iconmenu"> Support</a></li>
		</ul>
		<footer class="css-1esnxoi">
			<article><a href="https://torod.co/" class="css-1wwqr0i"><i class="fa fa-power-off fa-lg"></i><span> Logout</span></a></article>
		</footer>
	</div>
</template>
<script setup>
	import { useSlots } from 'vue'
</script>