
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

$(window).on('scroll', function() {
    let headerNavbar = $('#header .header__nav .nav');
    let win = $(window);
    let winTop = win.scrollTop();
    let winWidth = win.width();

    if (winWidth < 768) return;

    if (winTop > 135) {
        headerNavbar.addClass('fixed-top');
    } else {
        headerNavbar.removeClass('fixed-top');
    }
}).on('resize', function() {
    if ($(this).width() > 768) {
        $('.header__nav .nav').removeClass('active');
        $('body').removeClass('overflow-hidden');
    }
});

$('.nav-list li a').on('click', function() {
    $(this).toggleClass('active').next().toggleClass('active');
});

$('#btn-open-menu').on('click', function() {
    $('.header__nav .nav').addClass('active');
    $('body').addClass('overflow-hidden');
});

$('#btn-close-menu').on('click', function() {
    $('.header__nav .nav').removeClass('active');
    $('body').removeClass('overflow-hidden');
});