<template>
	<view class="content">
		<image class="logo" src="/static/logo.png"></image>
		<view class="inputcontent">
		    <text class="icon iconcolor">&#xe6a0;</text>			
			<input type="number" placeholder="输手机号码" v-model="phone" />
		</view>
		<view class="inputcontent">
		    <text class="icon iconcolor">&#xe69e;</text>			
			<input type="number" placeholder="输用户密码" v-model="password" />
		</view>	
		<view class="buttoncon">
			<button class="loginbutton" @click="login()">登 录</button>
		</view>			
        <navigator class="forgetpassword">忘记密码？找回密码</navigator>
	</view>
</template>

<script>
	import aesjs from '@/common/js/aes.js'
	
	export default {
		components:{
		
		},
		data() {
			return {
				phone:"",
				password:""
			}
		},
		onLoad() {

		},
		methods: {
           login(){

               let value='phone='+this.phone+'&password='+this.password;
			   var str=aesjs.Encrypt('name');
			   uni.request({
			       url:this.$url+'login', 
			       data: {
			           text:str
			       },
				   method:'POST',
				   header: {
                       'content-type':'application/x-www-form-urlencoded'
					},
			       success: (res) => {
			           console.log(res.data);
			       }
			   });

		   }
		   
		}
	}
</script>

<style>
.content {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.logo {
	height: 200rpx;
	width: 200rpx;
	margin: 100rpx auto 50rpx auto;
}
.inputcontent{
	display:flex;
	flex-direction:row;
	width: 90%;
	border-bottom: 1px solid #ccc;
	text-align:center;
	font-size: 15px;
	justify-content:center;
	margin-top: 35px;
}
.iconcolor{
	color:#E84242;
}
.forgetpassword{
	font-size: 12px;
	margin-top: 30px;
}
.buttoncon{
	display:flex;
	flex-direction:row;
	width: 90%;
	text-align:center;
	justify-content:center;
	margin-top: 35px;	
}
.loginbutton{
	width: 100%;
	background-color: #E84242;
	color:#fff;
}
</style>
