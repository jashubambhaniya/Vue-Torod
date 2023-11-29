<template>
<div class="flex-col-c-sb size1">
	<div class="flex-col-c-m p-l-15 p-r-15 p-t-80 p-b-90">
		<div class="content">
			<div>
				<RouterLink :to="Tr.i18nRoute({ name: 'home' })" class="user mr-2">
					<img src="../../../public/assets/image/logo.png" alt="LOGO" width="180">	
				</RouterLink>
			</div>
			<br>
			<form class="form" action="dashboard.php" id="form" methods="post">
				<p class="fieldset">
					<input class="full-width has-padding has-border" id="signin-email" v-model="auth.email" type="email" placeholder="Enter email" required="">
					<label class="email_label" for="email">Enter email</label>
				</p>
				<p class="fieldset">
					<input class="full-width has-padding has-border" id="password-field" v-model="auth.password" type="password" placeholder="Password" required="">
					<label class="password_label" for="signin-password">{{ $t('password') }}</label>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password hide-password"></span>
					<!--             <a href="#0" class="hide-password">Show</a> -->
				</p>
				<p class="forgot_password"><a href="#">Forgot Password? </a></p>
				<p class="fieldset">
					<button type="submit" :disabled="processing" @click="login" class="btn btn-primary btn-block">
						{{ processing ? "Please wait" : "Login" }}
					</button>
				</p>
				<p class="form-bottom-message">New to Torod?<a href="signup.php"> Sign Up Now</a></p>
			</form>
			<!-- <LanguageSwitcher></LanguageSwitcher> -->
		</div>
	</div>
	<div class="site-footer login_footer p-2">
		<p style="color: #000;font-size: 14px;margin-bottom: 0rem;background-color: #fff;">© Torod 2021 | Legal</p>
	</div>
</div>
</template>

<style>

</style>

<script type="module">
import { mapActions } from 'vuex'
import LanguageSwitcher from "@/components/LanguageSwitcher.vue"
import Tr from "@/i18n/translation"

export default {
    setup() {
      return { Tr }
    },
    data(){
        return {
            auth:{
                email:"",
                password:""
            },
            validationErrors:{},
            processing:false
        }
    },
	components: { LanguageSwitcher },
    methods:{
        ...mapActions({
            signIn:'auth/login'
        }),
        async login(){
            this.processing = true
            await axios.get('/sanctum/csrf-cookie')
            await axios.post('api/login',this.auth).then(({data})=>{
                this.signIn()
            }).catch(({response})=>{
                if(response.status===422){
                    this.validationErrors = response.data.errors
                }else{
                    this.validationErrors = {}
                    alert(response.data.message)
                }
            }).finally(()=>{
                this.processing = false
            })
        },
    }
}
</script>