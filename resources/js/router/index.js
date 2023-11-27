import { createRouter, createWebHistory, RouterView } from 'vue-router'
import HomeView from '../page/HomeView.vue'
import LoginView from '../page/Login.vue'
import NotFound from '../page/NotFound.vue'
import Tr from "@/i18n/translation"

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
          component: HomeView
        },
		{
			path: 'login',
			name: 'login',
			component: LoginView
		},
		{
			path: '/:pathMatch(.*)*',
			component: NotFound
		}
      ] 
    }
  ]
})

export default router
