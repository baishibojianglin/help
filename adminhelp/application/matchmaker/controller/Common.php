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

       $header=request()->header();
       if(empty($header['sign'])){
         return false; 
       }else{
         $aes=new Aes();
         $data=$aes->decrypt($header['sign']);
         var_dump($data);
         exit;       
       }
       
    }







}

