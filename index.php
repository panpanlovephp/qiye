<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
define('BIND_MODULE','admin');

// 加载框架引导文件
require  __DIR__ . '/thinkphp/start.php';

