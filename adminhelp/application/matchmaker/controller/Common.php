<?php
namespace app\matchmaker\controller;
use app\common\lib\Aes;


class Common 
{
   //初始化执行的方法
  	public function _initialize(){
  		$this->checkrequest();  //调用检查客户端请求
  	}

   //检查客户端请求
    public function checkrequest(){
       $header=request()->header();

    }

    public function my(){
       //$str='abc123';
       $str='28a42139a9d95b72402b2877ad0e261e';
       $key='dlst';
      // return Aes::encrypt($str,$key);
       //return (new Aes())->encrypt($str,$key);
       $aes=new Aes();

       return $aes->decrypt($str,$key);
    }

}

