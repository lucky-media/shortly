// window._ = require('lodash');
//
// window.axios = require('axios');
//
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// let token = document.head.querySelector('meta[name="csrf-token"]');
//
// if (token) {
//     window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
// } else {
//     console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
// }


// window.Vue = require('vue');
//
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//
// const app = new Vue({
//     el: '#app',
// });

document.addEventListener('DOMContentLoaded', () => {

    const copyBtn = document.querySelector('#copyBtn');
    const inputField = document.querySelector('#url');

    if(copyBtn)
    {
        copyBtn.addEventListener("click", () => {

            inputField.select();
            inputField.setSelectionRange(0, 99999);

            document.execCommand("copy");

        })
    }


});

