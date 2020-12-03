window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

// Interceptor for checking if user is loggedIn but unauthorized
axios.interceptors.response.use (response => response,
    error => {
        if (error.response.status === 401 && user.loggedIn()) {
            user.logout();
        }
        console.log("Loggout from interceptors");
        throw error;
    }
);

const token = user.token();

axios.defaults.baseURL = 'http://social-media.live/api';
// axios.defaults.baseURL = 'https://social.dedezigners.com/api';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['Content-Type'] = 'application/json';
axios.defaults.headers.common['Accept'] = 'application/json';
axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
