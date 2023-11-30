<template>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<a href="#" class="logo_dashboard"><img src="image/logo.png" alt="LOGO" width="150"></a>
				<a class="logo_dashboardmob" href=""> <img alt="Shippo" src="image/icon-logo.png" class="dark-logo"></a>
				<div id="clickmobmenu1">
					<span><i class="fa fa-bars" aria-hidden="true"></i></span>
				</div>
				<a href="#" class="lang_menu mob_lan">العربية </a>
				<a class="css-createlabel mob_createla" data-pendo="orders-create-order" data-e2e="create-label" href="create-label.php"><i class="fa fa-edit"></i> Create Shipment</a>
				<a href="#" class="notification_a mob_notification"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="count_notification">1</span> </a>
				<div class="dropdown_noti mob_notidrop" style="display: none;">
					<div class="head_noti">
						<h6>Notifications</h6>
						<a href="notifications.php"> Settings</a>
					</div>
					<div class="date_timenoti"> Sun, 27 June 2021 </div>
					<div class="notification_box">
						<div class="content_noti">
							<div class="col_content">
								Download orders from Shopify seamlessly <a href="#">Store settings</a>
							</div>
							<div class="time_deli-noti">
								<span>12:00</span>
								<a href="#"><i class="fa fa-trash"></i> </a>
							</div>
						</div>
						<div class="showfull_noti" style="display: none;">
							Save time shipping by automatically syncing your orders to your Easyship account
						</div>
					</div>
					<div class="notification_box">
						<div class="content_noti">
							<div class="col_content">
								Download orders from Shopify seamlessly <a href="#">Store settings</a>
							</div>
							<div class="time_deli-noti">
								<span>12:00</span>
								<a href="#"><i class="fa fa-trash"></i> </a>
							</div>
						</div>
						<div class="showfull_noti" style="display: none;">
							Save time shipping by automatically syncing your orders to your Easyship account
						</div>
					</div>
				</div>
				<div id="noti_backg"></div>
			</div>
			<div class="col-md-9">
				<ul class="navbara-right">
					<li>
						<a class="css-createlabel" data-pendo="orders-create-order" data-e2e="create-label" href="create-label.php"><i class="fa fa-edit"></i> Create Shipment</a>
					</li>
					<li><a href="#" class="lang_menu">العربية </a></li>
					<li>
						<a href="#" class="notification_a"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="count_notification">1</span> </a>
						<div class="dropdown_noti" style="display: none;">
							<div class="head_noti">
								<h6>Notifications</h6>
								<a href="notifications.php"> Settings</a>
							</div>
							<div class="date_timenoti"> Sun, 27 June 2021 </div>
							<div class="notification_box">
								<div class="content_noti">
									<div class="col_content">
										Download orders from Shopify seamlessly <a href="#">Store settings</a>
									</div>
									<div class="time_deli-noti">
										<span>12:00</span>
										<a href="#"><i class="fa fa-trash"></i> </a>
									</div>
								</div>
								<div class="showfull_noti" style="display: none;">
									Save time shipping by automatically syncing your orders to your Easyship account
								</div>
							</div>
							<div class="notification_box">
								<div class="content_noti">
									<div class="col_content">
										Download orders from Shopify seamlessly <a href="#">Store settings</a>
									</div>
									<div class="time_deli-noti">
										<span>12:00</span>
										<a href="#"><i class="fa fa-trash"></i> </a>
									</div>
								</div>
								<div class="showfull_noti" style="display: none;">
									Save time shipping by automatically syncing your orders to your Easyship account
								</div>
							</div>
						</div>
						<div id="noti_backg"></div>
					</li>
					<li class="">
						<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<img src="image/user_icon.png" alt=""> User
							<!-- <span><i  class=" fa fa-angle-down"></i> </span> -->
						</a>
						<div class="user_acc" style="display: none;">
							<ul class="css-12eett4">
								<li><a href="#">My profile</a></li>
								<li><a href="https://torod.co/"><i class="fa fa-power-off fa-lg"></i><span> Logout</span></a></li>
							</ul>
						</div>
						<div id="useracc_backg"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</template>