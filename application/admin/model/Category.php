<?php

namespace app\admin\model;
use think\Model;

class Category extends Model
{
	protected $table = 'dj_category';
	public function getfl()
	{
		$lis = $this->order('id asc')->select();
		return $this->_getfl($lis);
	}
	public function _getfl($lis, $parent_id=0, $level=0)
	{
		static $list = array();
		foreach ($lis as $k => $v) {
			if ($v['parent_id'] == $parent_id) {
				$v['level'] = $level;  // 用来标记这个分类是第几级的
				$list[] = $v;
				// 找子分类
				$this->_getfl($lis, $v['id'], $level + 1);
			}
		}
		return $list;
	}
	
}