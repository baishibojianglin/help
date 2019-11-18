import Vue from 'vue'
import App from './App'

Vue.config.productionTip = false
Vue.prototype.$url = 'http://countryside.com/index.php/';

App.mpType = 'app'

const app = new Vue({
    ...App
})
app.$mount()
