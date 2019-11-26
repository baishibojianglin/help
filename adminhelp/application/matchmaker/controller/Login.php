<?php
namespace app\matchmaker\controller;
use app\common\lib\Aes;



class Login
{
    public function login()
    {
       //$str=input('post.text');
       $str='QYY+uYR3xIA4Mu5SP6Ni9Q==';
       $key='1234123412341234';
       $aes=new Aes();
       $data=$aes->decrypt($str,$key);
       return json($data);
    }
}

