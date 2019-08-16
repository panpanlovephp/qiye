<?php

namespace app\user\model;

use think\Model;
use think\Db;

class News extends Model
{
    public function search($page=8,$id)
    {
        $data =  Db::name('Product')->where('sid',$id)
            ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
}
