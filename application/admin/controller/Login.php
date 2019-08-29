<?php
namespace app\admin\controller;

use think\Controller;
use think\Validate;
class Login extends Controller
{
    public function index()
    {
        return $this->fetch('login');
    }
    public function check()
    {
        if (request()->isPost()) {
            $username = input('username');
            $password = input('password');
            $code = input('code');
            $check_data = ['username' => $username, 'password' =>$password, 'code' =>$code];
            $validate = validate('Login');
          if (!$validate->check($check_data)) {
              $this->error($validate->getError());
          }
          $captcha = new \org\Captcha();
          if (!$captcha->check($code)) {
              $this->error('验证码错误');
          }
            $r = db('admin')->where('username', $username)->field('id,password,lasttime')->find();

            if (!$r) {
                $this->error('用户名不存在');
            }
            if ($r['password'] != md5($password)){
                $this->error('密码错误');
            }
            session('admin_id', $r['id']);
            session('qx_type', $r['qx_type']);
            session('shi', $r['shi']);
            db('admin')->where('username', $username)->update(['lasttime' => request()->time()]);
            $this->success('登录成功', 'index/index');
        }
    }
    }