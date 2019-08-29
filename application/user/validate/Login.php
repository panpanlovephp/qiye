<?php
namespace app\user\validate;

use think\Validate;
class Login extends Validate
{
    protected $rule = ['username' => 'require',
	                   'password' => 'require'
					  ];
					  
    protected $message = ['username.require' => '用户名必须填写',
	                      'password.require' => '密码必须填写'
						 ];
}