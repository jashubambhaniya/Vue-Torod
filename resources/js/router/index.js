import { createRouter, createWebHistory, RouterView } from 'vue-router'
import HomeView from '../page/HomeView.vue'
import LoginView from '../page/Login.vue'
import NotFound from '../page/NotFound.vue'
import Tr from "@/i18n/translation"
import store from '@/store'

const router = createRouter({
  history: createWebHistory(import.meta.env.VITE_BASE_URL),
  routes: [
    {
      path: "/",
      component: RouterView,
      beforeEnter: Tr.routeMiddleware,
      children: [
        {
          	path: '',
          	name: 'home',
          	component: HomeView,
			meta: {
				middleware: "guest",
				title: `Home`
			}
        },
		{
			path: 'login',
			name: 'login',
			component: LoginView,
			meta: {
				middleware: "guest",
				title: `Login`
			}
		},
		{
			path: '/:pathMatch(.*)*',
			component: NotFound
		}
      ] 
    }
  ]
})

router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    if (to.meta.middleware == "guest") {
        if (store.state.auth.authenticated) {
            next({ name: "dashboard" })
        }
        next()
    } else {
        if (store.state.auth.authenticated) {
            next()
        } else {
            next({ name: "login" })
        }
    }
})

export default router
