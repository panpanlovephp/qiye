<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Notice extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = model('Message')->search(10);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function add()
    {
        return $this->fetch();
    }
    public function edit()
    {
        return $this->fetch();
    }
}
