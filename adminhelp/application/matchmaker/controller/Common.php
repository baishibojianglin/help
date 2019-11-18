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
       if(!empty($header['sign'])){
         return json($header['sign']);
       }else{
         return 'sign不存在';
       }
    }

    public function my(){
       $aes=new Aes();
       //$str='name=张三&age=25';
       $str='d0afe8fe9f14e8c8cdcf8894260720d9413b1a6fc4b00016c64e3d1d87d8d2bd';
       $key='dlst';
       //return $aes->encrypt($str,$key);
       //return $aes->decrypt($str,$key);
       $data=$aes->decrypt($str,$key);
       parse_str($data,$arry);
       return json($arry);
    }

}

