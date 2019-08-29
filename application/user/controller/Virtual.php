<?php


namespace app\user\controller;
use think\Db;
use think\Loader;
use think\Request;
use Overtrue\ChineseCalendar\Calendar;
use think\Session;
use think\Url;


class Virtual extends Com
{
 public function index()
 {
     $id = input('id');
     $data = Db::name('Product')->where('sid',$id)->select();
     $info = getHinfo($data);
//     print_r($data[0]['title']);
//     exit();
     $this->assign('title',$data[0]['title']);
     $this->assign('label',$info['a']['label']);
     $this->assign('content',$info['a']['content']);
     $this->assign('info',$info['a']['info']);
     $this->assign('caseInfo',$info['a']['caseInfo']);
     $this->assign('funcInfo',$info['a']['funcInfo']);
     $this->assign('busFunc',$info['a']['busFunc']);
     $this->assign('supFunc',$info['a']['supFunc']);
     $this->assign('priceTitle',$info['a']['priceTitle']);
     $this->assign('b',$info['b']);
     $this->assign('cateTree',model('Category')->getfl());
     return $this->fetch();
 }
}