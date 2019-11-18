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
			   uni.request({
			       url:this.$url+'login', 
			       data: {
			           text: 'test'
			       },
				   header: {
						'sign': 'aa', // 签名
						'version':'bb', // 应用大版本号
						'model': 'cc', // 手机型号
						'apptype': 'dd', // 客户端平台
						'did': '12345dg', // 设备号
					},
			       success: (res) => {
			           console.log(res.data);
			           this.text = 'request success';
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
