<template>
	<div id="regist">
<!-- 		<van-row class="registcon">
			<van-col span="24">
				<van-image round width='10rem' :src="logo" />
			</van-col>		
		</van-row> -->
		
		<van-row class="registcon">
			<van-col span="24">手机号码</van-col>
			<van-col span="24">
				<input type="number" />
			</van-col>		
		</van-row>		
		<van-password-input
			:value="value"
			:focused="showKeyboard"
			@focus="showKeyboard = true"
		/>

		<!-- 数字键盘 -->
		<van-number-keyboard
			:show="showKeyboard"
			@input="onInput"
			@delete="onDelete"
			@blur="showKeyboard = false"
		/>	
		
	</div>
</template>

<script>

import Vue from 'vue';
import { Row, Col } from 'vant';
import { Image } from 'vant';
import { PasswordInput, NumberKeyboard } from 'vant';

Vue.use(Row).use(Col);
Vue.use(Image);
Vue.use(PasswordInput).use(NumberKeyboard);

export default {
	name:'regist',
	data:function(){
		return {
			//logo:require('../assets/images/logo.png'),
			username:'',
			password:'',
            value: '',
            showKeyboard:false
		}
	},
	components:{

	},
	methods: {
			onInput(key) {
			this.value = (this.value + key).slice(0, 6);
			},
			onDelete() {
			this.value = this.value.slice(0, this.value.length - 1);
			}
	}
}
</script>

<style>
	
	#regist{
		position: fixed;
		left: 0;
		right: 0;
		top:0;
		bottom: 0;
		background-image: url(../assets/images/login.jpg);
		background-size: 100% 100%;
	}
	.registcon{
		margin-top:45%;
	}
	.telcon{
		
	}
</style>
