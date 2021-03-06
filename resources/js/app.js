require('./bootstrap');
import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import VueConfirmDialog from 'vue-confirm-dialog'
import ToggleButton from 'vue-js-toggle-button'
import moment from 'moment';
import titleMixin from './titleMixin'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import './estilos.css'

Vue.mixin(titleMixin)
Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('MM/DD/YYYY hh:mm')
    }
});

Vue.use(ToggleButton)
Vue.use(VueConfirmDialog)
Vue.component('vue-confirm-dialog', VueConfirmDialog.default)

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.use(plugin)

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)
