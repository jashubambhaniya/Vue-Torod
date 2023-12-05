import "./bootstrap";

import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import i18n from "./i18n";
import VueProgressBar from "@aacassandra/vue3-progressbar";
import store from "@/store";
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
import "aos/dist/aos.css";
import AOS from "aos";

AOS.init({
    easing: "ease",
    once: true,
    duration: 1000,
});
const options = {
    color: "#6702f9",
    failedColor: "#874b4b",
    thickness: "5px",
    transition: {
        speed: "0.2s",
        opacity: "0.6s",
        termination: 300,
    },
    autoRevert: false,
    location: "top",
    inverse: false,
};
const app = createApp(App);
app.use(VueProgressBar, options);
app.use(router);
app.use(store);
app.use(i18n);
app.use(VueSweetalert2);
app.mount("#app");
