<?php 
namespace app\user\validate;
use think\Validate;

class Comment extends Validate
{
	protected $rule = [
        ['content'  ,'require','请输入内容'],
    ];
}