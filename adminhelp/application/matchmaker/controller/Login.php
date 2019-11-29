<?php
namespace app\matchmaker\controller;
use app\matchmaker\model\Matchuser;
use app\common\lib\Aes;

class Login extends Common
{
    /**
     * 登录
     */
    public function login()
    {   
           $str=input();
           //解密手机号和登录密码
           $aes=new Aes();
           $str=$aes->decrypt($str['text']);
           //字符串分解成变量
           parse_str($str,$data);
           //密码md5加密
           $data['password']=md5($data['password']).'dlst';

           $matchuser=new Matchuser();
           $list=$matchuser->where('id',1)->find();
           var_dump($list['phone']);

             
    }

}

