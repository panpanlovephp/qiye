<?php
namespace app\user\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\Url;

class Com extends Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Content-type:text/html;charset=utf-8');
        Url::root('/index.php');
    }

}