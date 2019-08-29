<?php


namespace app\user\controller;
use think\Db;
use think\Request;
use think\Validate;

class Login extends Com
{
    public function index()
    {
        return $this->fetch();
    }
    public function check()
    {
        if (request()->isPost()) {
            $username = input('username');
            $password = input('password');
            $check_data = ['username' => $username, 'password' =>md5($password)];

            $validate = validate('Login');
            if (!$validate->check($check_data)) {
                $this->error($validate->getError());
            }

            $r = db('user')->where('username', $username)->field('id,password')->find();

            if (!$r) {
                $this->error('用户名不存在');
            }
            if ($r['password'] != MD5($password)){
                $this->error('密码错误');
            }
            session('id', $r['id']);
            session('', $r['username']);
            $this->success('登录成功', 'http://127.0.0.3/user.php/Index/index');
        }

    }
    public function logout()
    {
        session('id',null);
        session('username',null);
        $this->success('退出成功', 'http://127.0.0.3/user.php/Index/index');
    }
}