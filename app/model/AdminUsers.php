<?php

namespace app\model;

use think\facade\Db;

class AdminUsers extends Db
{
    public function user()
    {
       $users = Db::name('wxapp_adminusers')->select()->toArray();
       return $users;
    }
}