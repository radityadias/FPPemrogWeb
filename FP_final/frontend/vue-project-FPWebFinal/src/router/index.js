import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '../views/HomePage.vue'
import PemesananPage from '../views/PemesananPage.vue'
import MobilPage from '../views/MobilPage.vue'
import BeritaPage from '../views/BeritaPage.vue'
import TentangKamiPage from '../views/TentangKamiPage.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },
    {
      path: '/pemesanan',
      name: 'pemesanan',
      component: PemesananPage
      
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      // component: () => import('../views/AboutView.vue')
    },
    {
      path: '/mobil',
      name: 'mobil',
      component: MobilPage
    },
    {
      path: '/berita',
      name: 'berita',
      component: BeritaPage
    },
    {
      path: '/tentang-kami',
      name: 'Tentang Kami',
      component: TentangKamiPage
    }
  ]
})

export default router
