<?php

namespace app\controller;

use think\facade\View;
use app\controller\Base;

class Login extends Base
{
    public function index()
    {
        if (session('admin_conusers')) {
            return redirect((string) url('/index'));
        }
        return View::fetch();
    }
    //登录验证
    public function login()
    {
        halt("123");
    }

}