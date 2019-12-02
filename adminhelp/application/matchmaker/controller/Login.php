<?php
namespace app\matchmaker\controller;
use app\matchmaker\model\Matchuser;
use app\common\lib\Aes;

class Login extends Common
{
    /**
     * 村红娘登录
     *@return array message
     */
    public function login()
    {   
           $str=input();
           //解密手机号和登录密码
           $aes=new Aes();
           $str=$aes->decrypt($str['text']);
           //字符串分解成变量
           parse_str($str,$data);
           
           //检测登录信息是否正确
           if( empty($data['phone'])){
             $message['status']=0;
             $message['word']='请填写手机号';
             return json($message); 
           }
           if( empty($data['password'])){
             $message['status']=0;
             $message['word']='请填写登录密码';
             return json($message); 
           }

           //密码md5加密
           $data['password']=md5($data['password']).'dlst';
           
           //查询数据表模型类
           $list=model('Matchuser')->checklogin($data['phone'],$data['password']);
           
           //验证手机号或密码是否匹配
           if(empty($list)){
             $message['status']=0;
             $message['word']='手机号或密码错误';
             return json($message);
           } 

           //信息正确,放行登录 
           $message['status']=1;
           $message['word']='登录成功';
           $message['data']=$list;
           
           return json($message);          

           
    }


}

