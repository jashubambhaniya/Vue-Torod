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
			
			<form class="form" id="form" methods="post">
				<p class="d-flex mb-5"><LanguageSwitcher></LanguageSwitcher></p>
				<p class="fieldset">
					<input class="full-width has-padding has-border" id="signin-email" v-model="auth.email" type="email" placeholder="{{ $t('Enter email') }}" required="">
					<label class="email_label" for="email">{{ $t('Enter email') }}</label>
				</p>
				<p class="fieldset">
					<input class="full-width has-padding has-border" id="password-field" v-model="auth.password" type="password" placeholder="{{ $t('password') }}" required="">
					<label class="password_label" for="signin-password">{{ $t('password') }}</label>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password hide-password"></span>
					<!--             <a href="#0" class="hide-password">Show</a> -->
				</p>
				<p class="forgot_password"><a href="#">{{ $t('Forgot Password?') }}</a></p>
				<p class="fieldset">
					<button type="submit" :disabled="processing" @click="login" class="full-width">
						{{ processing ? $t('Please wait') :  $t('Login') }}
					</button>
				</p>
				<p class="form-bottom-message">{{ $t('New to Torod?') }}<a href="signup.php">{{ $t('Sign Up Now') }}</a></p>
			</form>
		</div>
	</div>
	<div class="site-footer login_footer p-2">
		<p style="color: #000;font-size: 14px;margin-bottom: 0rem;background-color: #fff;">{{ $t('© Torod 2021 | Legal') }}</p>
	</div>
</div>
</template>

<style>
	.form button[type=submit] {
		padding: 10px 0;
		cursor: pointer;
		background: #6900ff;
		color: #FFF;
		font-weight: 500;
		border-radius: 8px;
		overflow: hidden;
		border: aliceblue;
		-webkit-appearance: none;
		-moz-appearance: none;
		-ms-appearance: none;
		-o-appearance: none;
		appearance: none;
		-webkit-transition: all 0.30s ease-in-out;
		-moz-transition: all 0.30s ease-in-out;
		-ms-transition: all 0.30s ease-in-out;
		-o-transition: all 0.30s ease-in-out;
	}
	.form button.full-width {
    width: 100%;
}
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
			this.$Progress.start();
			var config = {
				headers: { 'Content-Type': 'application/json',"Accept-Language": localStorage.getItem("user-locale") }
			};
            await axios.get('/sanctum/csrf-cookie')
            await axios.post('api/login', this.auth, config)
			.then(({data})=>{
				if(data.status===false){
					toast.fire({
						icon: 'error',
						title: data.message
					});
                }else{
					this.signIn(data)
                }
            }).catch(({response})=>{
                if(response.status===422){
                    this.validationErrors = response.data.errors
                }else{
                    this.validationErrors = {}
                    alert(response.data.message)
                }
            }).finally(()=>{
                this.processing = false
				this.$Progress.finish();
            })
        },
    }
}
</script>