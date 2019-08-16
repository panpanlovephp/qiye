<?php


namespace app\user\controller;
use think\Db;


class ServerList extends Com
{
 public function index()
 {
  return $this->fetch();
 }
}