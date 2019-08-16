<?php

namespace app\user\model;

use think\Model;

class Gzap extends Model
{
    public function search($page=10)
    {
        $where = array();
        $data =   $this->alias('a')->where($where)
            ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
}
