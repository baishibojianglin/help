<?php
namespace app\matchmaker\controller;
use think\Controller;
use app\common\lib\Aes;
use think\Request;



class Common extends Controller
{
    /**
     *初始化执行的方法
     */
  	public function _initialize(){

      //检查客户端请求
  		$this->checkrequest();  
  	}

    /**
     *检查客户端请求
     */
    public function checkrequest(){

       //签名,前后台必须一致
       $sign='dist_agriculture';
       //取得header信息
       $header=request()->header();
       if(empty($header['sign'])){  //签名为空,退出
          exit;
       }else{   //签名不为空,进行解密比对

          //aes解密
          $aes=new Aes();
          $data=$aes->decrypt($header['sign']);

          //解密后比对
          if($sign==$data){  //比对成功放行通过
            return true;
          }else{  //不成功拦截退出
            exit;
          }    
       }
       
    }







}

