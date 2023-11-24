<template>
		<header class="tadweer-header header-3">
		<div class="d-flex align-items-center nav-wrap new_navigation-bar row">
			<nav class="nav-primary d-flex justify-content-start widescreen-nav col-lg-5 col-md-5">
				<ul class="nav-3 nav align-items-center d-flex justify-content-between">
					<li>
						<a href="">Home</a>
					</li>
					<li>
						<a href="">Pricing</a>
					</li>
					<li>
						<a href="">Partners</a>
					</li>
					<li>
						<a href="">Resources</a>
					</li>
				</ul>
			</nav>
			<div class=" nav-logo  col-lg-2 col-md-2">
				<a class="brand" href="index-en.php"> <img alt="Shippo" src="@/assets/image/logo.png" class="dark-logo" >
				</a>
			</div>
			<div class="col-lg-5 col-md-5 d-flex justify-content-end dynamic-menu align-items-center hide_mob">
				<!-- <a href="index.php" class="lan_ar"> العربية </a> -->
				<LanguageSwitcher />
				<RouterLink :to="Tr.i18nRoute({ name: 'login' })" class="user mr-2">{{ $t("login") }}</RouterLink>
				<!-- <router-link to="/login" class="user mr-2">Login</router-link> -->
				<a class="btn btn-transparent login-register" href="signup.php" id="cta-signup-link-main-nav">
				Sign Up Free
				</a>
			</div>
			<div class="mobile-logo-new  nav-logo-mobile ">
				<a class="brand" href=""> <img alt="Shippo" src="image/icon-logo.png" class="dark-logo" >
				</a>
			</div>
			<div class="mob_header">
				<div class="mob_menu">
					<a href="index.php" class="lan_ar"> العربية </a>
					<a href="login.php" class="user">Login</a>
					<a class="btn btn-transparent login-register" href="signup.php" id="cta-signup-link-main-nav">
					Sign Up Free
					</a>
				</div>
				<div id="clickmobmenu">
					<span><i class="fa fa-bars" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
	</header>
</template>

<script>
  import LanguageSwitcher from "@/components/LanguageSwitcher.vue"
  import Tr from "@/i18n/translation"

  export default {
    components: { LanguageSwitcher },
    setup() {
      return { Tr }
    }
  }
</script>