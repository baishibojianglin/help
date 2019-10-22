<template>
	<div id="regist">
		<van-row>
			<van-col span="8">span: 8</van-col>
			<van-col span="8">span: 8</van-col>
			<van-col span="8">span: 8</van-col>
		</van-row>
	</div>
</template>

<script>

import Vue from 'vue';
import { Row, Col } from 'vant';

Vue.use(Row).use(Col);

export default {
	name:'regist',
	components:{
		
	}

}
</script>

<style>
</style>
