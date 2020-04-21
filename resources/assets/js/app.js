require('./bootstrap');

window.Vue = require('vue');

//Import v-from
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

//prism editor
import Vue from 'vue';
import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );

//component
Vue.component('register-component', require('./components/forum/RegisterComponent.vue').default);
Vue.component('login-component', require('./components/forum/LoginComponent.vue').default);
Vue.component('ask-component', require('./components/forum/AskComponent.vue').default);
Vue.component('dislike-component', require('./components/forum/DislikeComponent.vue').default);

const app = new Vue({
    el: '#app',
});
