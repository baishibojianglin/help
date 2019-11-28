import Vue from 'vue'
import App from './App'

/**
 * 公用全局变量
 */
//阻止启动生产消息
Vue.config.productionTip = false
//接口地址
Vue.prototype.$url = 'http://www.countryside.com/index.php/';
//签名值
Vue.prototype.$sign = 'dist_agriculture';

App.mpType = 'app'

const app = new Vue({
    ...App
})
app.$mount()
