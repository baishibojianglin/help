<?php
namespace app\matchmaker\controller;
use app\common\lib\Aes;
<<<<<<< HEAD

=======
>>>>>>> 2360f3bc14239c37893a506d7d76379c3569c55c



class Login extends Common  
{
    public function login()
    {
<<<<<<< HEAD
       //$str=input('post.text');
       $str='QYY+uYR3xIA4Mu5SP6Ni9Q==';
       $key='1234123412341234';
       $aes=new Aes();
       $data=$aes->decrypt($str,$key);
       return json($data);
=======
          // $str=input();
          // $key='1234123412341234';
          // $aes=new Aes();
          // $data=$aes->decrypt($str['text'],$key);
          // //parse_str($data,$arry);
          // return json($data); 
         //return json($str);    
>>>>>>> 2360f3bc14239c37893a506d7d76379c3569c55c
    }
}

