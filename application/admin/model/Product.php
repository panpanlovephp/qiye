<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class Product extends Model
{
    public function search($page,$sid)
    {
        $where = array();
        $name = input('get.name');
        if($name)
        {
            $where['a.title'] = array('like',"%$name%");
        }
        $data =Db::name('Product')->where($where)
            ->where('sid','IN',function($query)use($sid){
                $query->table('dj_category')->where('parent_id',$sid)->field('id');
            }) ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
}
