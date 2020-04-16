// TODO:: separate route definitions by modules and just import here
import routeModules from 'features/routes-index.js'
const routes = [
  {
    path: '/home',
    component: () => import('layouts/default.vue'),
    children: [
      {
        path: '',
        meta: {
          needAuth: true
        },
        component: () => import('pages/Index.vue')
      },
      { path: '', component: () => import('pages/Index.vue') },
      { path: '/timeTraveling', component: () => import('pages/htmm/timeTraveling.vue') },
      { path: '/MemeOfTheDay', component: () => import('pages/htmm/memeOfTheDay.vue') },
      { path: '/calendar', component: () => import('pages/htmm/calendar.vue') },
      { path: '/legendary', component: () => import('pages/htmm/legendary.vue') },
      { path: '/about', component: () => import('pages/htmm/about.vue') },
      { path: '/createPost', component: () => import('pages/htmm/createPost.vue') }
    ]
  },
  // add other routes
  ...Object.keys(routeModules).map(v => routeModules[v])
]

// Always leave this as last one
if (process.env.MODE !== 'ssr') {
  routes.push({
    path: '*',
    component: () => import('pages/Error404.vue')
  })
}

export default routes
