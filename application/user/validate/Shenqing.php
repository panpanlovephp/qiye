<?php 
namespace app\user\validate;
use think\Validate;

class Shenqing extends Validate{
	protected $rule = [
        ['typeame'  ,'require','申请类型请选择'],
        ['title'  ,'require','标题不能为空'],
        ['beizhu'  ,'require','请输入备注'],
    ];

    protected $scene = [
        'add'   =>  ['typeame','title','beizhu'],
        'edit'  =>   ['typeame','title','beizhu'],
    ];
}