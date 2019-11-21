import Vue from 'vue'
import VueRouter from 'vue-router'
import ExampleComponent from '../components/ExampleComponent'
import AppLogin from '../components/AppLogin'
import AppHome from '../components/AppHome'
import AppSignup from '../components/AppSignup'
import AppAddQuestion from '../components/AppAddQuestion'
import Applogout from '../components/Aplogout'

Vue.use(VueRouter)

// const Foo = { template: '<div>foo</div>' }
// const Bar = { template: '<div>bar</div>' }

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: AppHome },

{path:'/signup',component:AppSignup},
{path:'/addquestion',component:AppAddQuestion},
  { path: '/login', component: AppLogin },
  {path:'/logout',component:Applogout}

  // { path: '/bar', component: Bar }
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  mode:"history",
  routes // short for `routes: routes`
})
export default router;