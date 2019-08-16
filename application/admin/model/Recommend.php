<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class Recommend extends Model
{
    public function search($page,$id)
    {
        $where = array();
        $name = input('get.name');
        if($name)
        {
            $where['a.title'] = array('like',"%$name%");
        }
        $data =Db::name('Recommend')->where($where)
            ->where('id','IN',function($query)use($id){
                $query->table('dj_recommend')->where('id',$id)->field('id');
            }) ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
}
