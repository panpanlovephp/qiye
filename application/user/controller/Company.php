<?php


namespace app\user\controller;
use think\Db;
use think\Loader;
use think\Request;
use Overtrue\ChineseCalendar\Calendar;
use think\Session;
use think\Url;


class Company extends Com
{
 public function index()
 {
     $id  =input('id');
     $data =comInfo(Db::name('Product')->where('sid',$id)->select());

     $this->assign('title',$data['c']['title']);
     $this->assign('content',$data['c']['content']);
     $this->assign('teamTitle',$data['c']['teamTitle']);
     $this->assign('teamInfo',$data['c']['teamInfo']);
     $this->assign('proTitle',$data['c']['proTitle']);
     $this->assign('proInfo',$data['c']['proInfo']);
     $this->assign('proText',$data['c']['proText']);
     $this->assign('text',$data['text']);
     $this->assign('mem',$data['mem']);
     $this->assign('cateTree',model('Category')->getfl());

//     print_r($data['text']);
//     exit();
     return $this->fetch();
 }
}