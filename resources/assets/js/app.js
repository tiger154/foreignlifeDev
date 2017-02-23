/**
 * I't using ES5
 * This is my first module import from
 */

window.first = require('./modules/first');
window.common = require('./modules/module1');
common.callFirstFromModule1();

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// ajax csrf set before vue loading
console.log('ajaxSetup for csrftoken : '+$('meta[name="csrf-token"]').attr('content'));
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('Example', require('./components/Example.vue'));
Vue.component('Slider', require('./components/Slider.vue'));
Vue.component('Questionlist', require('./components/Questionlist.vue'));

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

