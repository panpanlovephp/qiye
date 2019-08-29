<?php


namespace app\user\controller;
use think\Db;
use think\Request;
use think\Validate;

class Register extends Com
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
            $repassword =input('repassword');
//            $check_data = ['username' => $username, 'password' =>$password, 'repassword' =>$repassword];
//            print_r($check_data);
//            exit();
            $check_data = ['username' => $username, 'password' =>md5($password), 'repassword' =>md5($repassword)];
//            print_r($check_data);
//            exit();
            $validate = validate('User');
            if (!$validate->check($check_data)) {
                $this->error($validate->getError());
            }

            $r = db('user')->where('username', $username)->find();

            if ($r) {
                $this->success('此用户名已经注册');
            }else{
                $res = Db::name('User')->insert($check_data);
                if($res>0){
                    $this->success('注册成功', 'http://127.0.0.3/user.php/Index/index');
                }
            }

        }
    }
}