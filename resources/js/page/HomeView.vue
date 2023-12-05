<script setup>
import Footer from '../components/layouts/Footer.vue';
import Header from '../components/layouts/Header.vue';
</script>

<template>
	<Header></Header>
	<section class="service-style banner ">
		<div class="container">
			<div class="banner-box">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="banner-content">
							<div>
								<h1 data-aos="fade-right" data-aos-delay="100"> {{ $t("eCommerce Shipping Easier") }} </h1>
								<div class="btn_divbanner" data-aos="fade-up" data-aos-delay="100">
									<a href="login.php">{{ $t("Start Shipping Now") }}
										<i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box-images">
							<img src="../../../assets/image/torod-en.gif" class="img_02" data-aos="fade-left"
								data-aos-delay="100" style="width: 100%;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<section class=" pbm-20  new_section">
		<div class="container ">
			<div class="row">
				<div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center">
					<h2 data-aos="fade-up" data-aos-delay="100"> {{ $t("How It Works?") }}</h2>
					<div class="divider divider-center divider-light" data-aos="fade-up" data-aos-delay="100"><span></span>
					</div>
				</div>
			</div>
			<br>
			<br>
			<div class="row align-items-center">
				<div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center">
					<div class="howitwork">
						<div class="col_01 col_css ani">
							<img src="../../../assets/image/ecomerce.png" data-aos="fade-fadein"
								data-aos-delay="100">
							<br>
							<div class="text_how">
								{{ $t("Make Your Order Ready") }}
							</div>
						</div>
						<div class="col_02 col_css">
							<span> {{ $t("Choose Shipper") }} </span>
							<div class="arrow">
								<img src="../../../assets/image/arrow.png">
							</div>
						</div>
						<div class="col_01 col_css ani">
							<img src="../../../assets/image/icon-logo.png" data-aos="fade-fadein"
								data-aos-delay="100">
						</div>
						<div class="col_02 col_css">
							<span>{{ $t("Track Your Shipment") }}</span>
							<div class="arrow">
								<img src="../../../assets/image/arrow-01.png">
							</div>
						</div>
						<div class="col_01 col_css ani">
							<img src="../../../assets/image/customer.png" data-aos="fade-fadein"
								data-aos-delay="100">
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
		</div>
	</section>
	<section class="ptop-80 pbm-20  new_section" style="position: relative;">
		<div class="left-blue"></div>
		<div class="container ">
			<div class="row">
				<div class="col-12 col-lg-6 col-md-6 col-sm-12 text-right">
					<div class="lap_bg" data-aos="fade-up" data-aos-delay="100">
						<img src="../../../assets/image/lap-bg.png">
					</div>
				</div>
				<div class="col-12 col-lg-6 col-md-6 col-sm-12">
					<h2 data-aos="fade-up" data-aos-delay="100">{{ $t("Why Choose %PlatForm%") }} </h2>
					<div class="divider divider-right divider-light text-right" data-aos="fade-up" data-aos-delay="100">
						<span></span></div>
					<div>
						<ul class="ul_lap">
							<li data-aos="fade-up" data-aos-delay="100">
								<img src="../../../assets/image/icon-logo.png"> <span> {{ $t("Connect with multiple shipping delivery services.") }}</span>
							</li>
							<li data-aos="fade-up" data-aos-delay="100">
								<img src="../../../assets/image/icon-logo.png"> <span> {{ $t("Single Integration.") }}</span>
							</li>
							<li data-aos="fade-up" data-aos-delay="100">
								<img src="../../../assets/image/icon-logo.png"> <span>{{ $t("Enable ship from store operations.") }}</span>
							</li>
							<li data-aos="fade-up" data-aos-delay="100">
								<img src="../../../assets/image/icon-logo.png"> <span> {{ $t("Automate your operations with easy shipping.") }}</span>
							</li>
							<li data-aos="fade-up" data-aos-delay="100">
								<img src="../../../assets/image/icon-logo.png"> <span>{{ $t("Access multiple same day delivery options.") }}
									 </span>
							</li>
							<li data-aos="fade-up" data-aos-delay="100"> <img
									src="../../../assets/image/icon-logo.png"> <span> {{ $t("Track all your shipping expenses in one place.") }}   
									</span></li>
							<li data-aos="fade-up" data-aos-delay="100"> <img
									src="../../../assets/image/icon-logo.png"> <span> {{ $t("Enhance your parcel real-time tracking.") }}
								</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ptop-80 pbm-50  new_section"
		style="position: relative; background-image: url(../../../assets/image/back_bg.png);background-repeat: no-repeat;background-position: center;background-attachment: fixed;background-size: contain;">
		<div class="container ">
			<div class="row">
				<div class="col-12 col-lg-12 col-md-12 col-sm-12 text-center">
					<h2 data-aos="fade-up" data-aos-delay="100"> {{ $t("What %PlatForm% Can Do") }}</h2>
					<div class="divider divider-center divider-light" data-aos="fade-up" data-aos-delay="100"><span></span>
					</div>
				</div>
			</div>
			<br>
			<div class="row align-items-center">
				<div class="col-12 col-lg-4 col-md-4 col-sm-12 text-center">
					<h4 class="css_head" data-aos="fade-up" data-aos-delay="100"> {{ $t("Online Store") }} </h4>
					<ul class="left_images">
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-left01.jpg">
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-left02.jpg">
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-left03.jpg">
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-left04.jpg">
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-left05.jpg">
						</li>
					</ul>
				</div>
				<div class="col-12 col-lg-4 col-md-4 col-sm-12">
					<div class="ct-banner-inner" data-aos="fade-down" data-aos-delay="100">
						<img width="100%" height="auto" src="../../../assets/image/phone-2.png"
							class="ct-banner-image1 attachment-full" alt="">
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-4 col-sm-12 text-center">
					<h4 class="css_head" data-aos="fade-up" data-aos-delay="100">{{ $t("Shippers") }} </h4>
					<ul class="right_images">
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-right01.jpg">
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-right02.jpg">
						</li>
						<li data-aos="fade-up" data-aos-delay="100">
							<img src="../../../assets/image/logo-right03.jpg">
					</li>
					<li data-aos="fade-up" data-aos-delay="100">
						<img src="../../../assets/image/logo-right04.jpg">
					</li>
					<li data-aos="fade-up" data-aos-delay="100">
						<img src="../../../assets/image/logo-right05.jpg">
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<Footer></Footer></template>
