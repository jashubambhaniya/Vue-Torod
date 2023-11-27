import './bootstrap';
import '../../public/assets/main.css'
import '../../public/assets/css/dashboard.css'
import '../../public/assets/css/bootstrap.css'
import '../../public/assets/css/style-en.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import i18n from "./i18n"

const app = createApp(App)

app.use(router)
app.use(i18n)
app.mount('#app')
