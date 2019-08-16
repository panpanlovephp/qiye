<?php


namespace app\user\controller;
use think\Db;


class Server extends Com
{
 public function index()
 {
  return $this->fetch();
 }
}