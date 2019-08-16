<?php
namespace app\admin\validate;

use think\Validate;
class User extends Validate
{
    protected $rule = [
                       'username' => 'require',
	                   'phone' => 'require|is_phone',
					  ];
					  
    protected $message = [
                            'username.require' => '姓名必须填写',
	                        'phone.require' => '手机号必须填写',
						 ];

    public function is_phone($mb)
    {
        if(preg_match('/^1\d{10}$/i',$mb)){
            return true;
        }else{
            return '手机格式错误';
        }
    }
}