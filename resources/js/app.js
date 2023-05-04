/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import 'tailwindcss/tailwind.css';

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/vue2'

createInertiaApp({
    resolve: name => {
      const pages = require.context('./Pages', true, /\.vue$/i)
      return pages(`./${name}.vue`)
    },
    setup({ el, App, props, plugin }) {
      Vue.use(plugin)
  
      new Vue({
        render: h => h(App, props),
      }).$mount(el)
    },
  });
  