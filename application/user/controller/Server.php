<?php


namespace app\user\controller;
use think\Db;
use think\Loader;
use think\Request;
use Overtrue\ChineseCalendar\Calendar;
use think\Session;
use think\Url;


class Server extends Com
{
 public function index()
 {
     $data =serInfo(Db::name('Product')->where('sid',13)->select());
     $this->assign('title',$data['a']['title']);
     $this->assign('label',$data['a']['label']);
     $this->assign('content',$data['a']['content']);
     $this->assign('serTitle',$data['a']['serTitle']);
     $this->assign('serText',$data['a']['serText']);
     $this->assign('b',$data['b']);
     $this->assign('c',$data['c']);
     $this->assign('cateTree',model('Category')->getfl());
     return $this->fetch();
 }
}