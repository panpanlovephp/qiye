<?php

namespace app\admin\model;

use think\Model;

class Area extends Model
{

	public  function getTreeList()
    {
		vendor('houduwang/arr');
		$list = $this->order('sort asc')->select();
        $arr =  \houdunwang\arr\Arr::tree($list, 'title', $fieldPri = 'id', $fieldPid = 'pid');
        return $arr;
	}
	
	
	
}