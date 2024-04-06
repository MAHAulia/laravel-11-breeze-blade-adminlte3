import axios from 'axios';
// Add jQuery to App
import $ from 'jquery';
import Swal from "sweetalert2";
import loadash from "lodash";
import * as Popper from "@popperjs/core";
// Add Bootstrap to App
import "bootstrap";
import "admin-lte";
// import Chart from "chart.js/auto";
// Add Select2
import select2 from 'select2';
// Add summernote
import "summernote";
import "summernote/dist/summernote";
import "icheck-bootstrap";
import "@fortawesome/fontawesome-free";
import DataTable from "datatables.net-bs4";
import "datatables.net-buttons-bs4";
import "datatables.net-responsive-bs4";
// @import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
// @import 'admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css';
// @import 'admin-lte/dist/css/adminlte.min.css';

import.meta.glob([
  '../img/**',
  '../fonts/**',
]);

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.jQuery = window.$ = $;

// Add SweetAlert 2 to App
window.Swal = Swal;

// Add Loadash to App
window._ = loadash;

// Add PooperJs to App
window.Popper = Popper;


// Add Chartjs
// window.Chart = Chart;


window.DataTable = DataTable;

select2();
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
// window.Tagify = Tagify