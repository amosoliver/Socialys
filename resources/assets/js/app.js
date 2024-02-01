import Vue from 'vue';
import AutoCompleteComponent from './components/AutoCompleteComponent.vue';

Vue.config.productionTip = false;

var appId = document.getElementById('app');
if (appId) {
    new Vue({
        el: '#app',
        components: {
            autoComplete: AutoCompleteComponent,
        }
    });
}
