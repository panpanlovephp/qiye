<?php

namespace app\user\controller;
use think\Db;
use think\Loader;
use think\Request;
use think\Session;
use think\Url;


class ServerConfig extends Com
{
    public function index()
    {
        $packname= input('packname');
        $uid= session('id');
        $this->assign('uid',$uid);
        $this->assign('packname',$packname);
        $this->assign('cateTree',model('Category')->getfl());
        return $this->fetch();
    }
}