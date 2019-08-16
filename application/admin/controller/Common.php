<?php
namespace app\admin\controller;

use think\Controller;

class Common extends Controller
{
//  protected function _initialize()
//  {
//      if (!session('admin_id') ) {
//          $this->redirect(url('Login/index'));
//      }
//      $this->webconfig = db('system')->where('id', 1)->find();
//  }
    public function logout()
    {
        session('admin_id', null);
        $this->success('退出成功', 'Login/index');
    }
    public function cache()
    {
		$path = RUNTIME_PATH;
        delDirAndFile($path);
        $this->success('清除缓存成功');
    }
}