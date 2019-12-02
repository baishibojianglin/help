<?php
namespace app\matchmaker\model;
use think\Model;

/**
 * 村红娘数据表模型类
 */
class Matchuser extends  Model
{
    /**
	 * 登录
	 */ 
	 public function checklogin($phone,$password){
         $map['phone']=$phone;
         $map['password']=$password;
         $list=$this->where($map)->find();
         return $list;
	 }   
}

