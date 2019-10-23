<template>
	<div id="regist">
		<van-row class="registcon">
			<van-col span="24">
				<van-image :src="logo" />
			</van-col>		
		</van-row>
		<van-cell-group>
            <van-field v-model="username" placeholder="请输入用户名" />
		</van-cell-group>
	</div>
</template>

<script>

import Vue from 'vue';
import { Row, Col } from 'vant';
import { Image } from 'vant';
import { Cell, CellGroup } from 'vant';
import { Field } from 'vant';

Vue.use(Row).use(Col);
Vue.use(Image);
Vue.use(Field);
Vue.use(Cell).use(CellGroup);

export default {
	name:'regist',
	data:function(){
		return {
			logo:require('../assets/images/logo.png'),
			username:''
		}
	},
	components:{

	}
}
</script>

<style>
	.registcon{margin-top:15%;}
</style>
