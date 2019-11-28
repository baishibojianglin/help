<?php
namespace app\matchmaker\controller;
use think\Controller;
use app\common\lib\Aes;
use think\Request;



class Common extends Controller
{
   //初始化执行的方法
  	public function _initialize(){
  		$this->checkrequest();  //调用检查客户端请求
  	}

   //检查客户端请求
    public function checkrequest(){
       $header=request()->header();
       //return false;
       var_dump($header);
       // if(!empty($header['sign'])){
       //   return json($header['sign']);
       // }else{
       //   return 'sign不存在';
       // }
    }







}

