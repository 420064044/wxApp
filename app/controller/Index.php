<?php

namespace app\controller;

use app\controller\Base;
use think\facade\View;

class Index extends Base
{
    public function index()
    {
        // halt($this->user());
        return View::fetch();
    }

}
