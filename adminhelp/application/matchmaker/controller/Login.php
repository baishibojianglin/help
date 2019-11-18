<?php
namespace app\matchmaker\controller;
use think\Request;


class Login
{
    public function login()
    {
       $data=$_POST['text'];
       return json($data);
    }
}

