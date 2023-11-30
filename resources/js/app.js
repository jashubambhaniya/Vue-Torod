import './bootstrap';
import '../../public/assets/css/style-en.css'
import '../sass/app.scss'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import i18n from './i18n'
import VueProgressBar from "@aacassandra/vue3-progressbar";
import store from '@/store'
const options = {
	color: "#6702f9",
	failedColor: "#874b4b",
	thickness: "5px",
	transition: {
	  speed: "0.2s",
	  opacity: "0.6s",
	  termination: 300,
	},
	autoRevert: true,
	location: "top",
	inverse: false,
};
const app = createApp(App)
app.use(VueProgressBar, options)
app.use(router)
app.use(store)
app.use(i18n)
app.mount('#app')
