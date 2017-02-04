/**
 * This is my first module import from
 */
window.common = require('./modules/module1');

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('Example', require('./components/Example.vue'));

var app = new Vue({
    el: '#app',
    data : {
        message: 'Hello Vue3!!'
    }
});
/**
 * To call inside component function fallow this way
 *  - app.$children[0].greet('from app.js!! called vue components method');
 */

