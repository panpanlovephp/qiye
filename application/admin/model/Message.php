<?php

namespace app\admin\model;

use think\Model;
use think\Db;
class Message extends Model
{
    public function search($page=10)
    {
        $list = $this->order('id desc')->paginate($page, false, ['query' => request()->param()]);
        return $list;
    }

}