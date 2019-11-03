<template>
	<view class="content">
		<image class="logo" src="/static/logo.png"></image>
		<view class="inputcontent">
		    <text class="icon iconcolor">&#xe6a0;</text>			
			<input type="number" placeholder="输手机号码" />
		</view>
		<view class="inputcontent">
		    <text class="icon iconcolor">&#xe69e;</text>			
			<input type="number" placeholder="输用户密码" />
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
				title: 'Hello'
			}
		},
		onLoad() {

		},
		methods: {

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
</style>
