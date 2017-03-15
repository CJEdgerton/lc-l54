
window._ = require('lodash');

// jQuery
window.$ = window.jQuery = require('jquery');

// Bootstrap
require('bootstrap-sass');

// Hightlight JS
let hljs = require('highlight.js');
hljs.initHighlightingOnLoad();

// Load Vue and assign to window
window.Vue = require('vue');

// Load axios and assign to window
window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
