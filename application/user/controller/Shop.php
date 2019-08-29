<?php


namespace app\user\controller;
use think\Db;
use think\Request;
use think\Validate;

class Shop extends Com
{
    public function index()
    {
        return $this->fetch();
    }
}