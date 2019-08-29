<?php


namespace app\user\controller;
use think\Db;


class Serverlist extends Com
{
 public function index()
 {
     $this->assign('cateTree',model('Category')->getfl());
     return $this->fetch();
 }
}