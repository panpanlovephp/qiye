<?php 
namespace app\user\validate;
use think\Validate;

class Work extends Validate{
	protected $rule = [
        ['title'  ,'require','标题不能为空'],
        ['content'  ,'require','请输入汇报内容'],
    ];

    protected $scene = [
        'add'   =>  ['title','content'],
        'edit'  =>   ['title','content'],
    ];
}