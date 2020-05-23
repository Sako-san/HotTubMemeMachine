const load = view => () => import(`features/Auth/ui/${view}.vue`)

// const register = {
//   path: '',
//   name: 'register',
//   meta: {
//     title: 'Register'
//   },
//   component: load('Register')
// }

export default {
  path: '/1a2s3d4f5gt5r4e3w2q1',
  component: load('Login')
}
