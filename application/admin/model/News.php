<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class News extends Model
{
    public function search($page=10)
    {
        $where = array();
        $name = input('get.name');
        if($name)
        {
            $where['a.title'] = array('like',"%$name%");
        }

        $data =   Db::name('News')->alias('a')->where($where)
            ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
}
