

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let appheader=require('./components/appheader.vue');
let appfooter=require('./components/appfooter.vue');

let Home=require('./components/home.vue');
let About=require('./components/about.vue');


const routes = [
  { path: '/home', component: Home },
   { path: '/', component: Home },
  { path: '/about', component: About }
]

const router = new VueRouter({
  mode:'history',
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    components:{'app-header':appheader,'app-footer':appfooter},
    router

});
