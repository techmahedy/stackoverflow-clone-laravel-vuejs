require('./bootstrap');

window.Vue = require('vue');

//Import v-from
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.component('register-component', require('./components/forum/RegisterComponent.vue').default);

const app = new Vue({
    el: '#app',
});
