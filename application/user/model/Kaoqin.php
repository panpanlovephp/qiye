<?php

namespace app\user\model;

use think\Db;
use think\Model;

class Kaoqin extends Model
{

    public function addData($data)
    {

        $data['isfalse']  = 1;
        $time =  strtotime(date('Y-m-d'));
        $data['time'] = $time;
        $map['time'] = $time;
        $map['uid']  = $data['uid'];
        $map['isfalse'] = 1;
        $cont = $this->where($map)->count();
        if($cont){
            return ['status'=>0,'info'=>'您已经签过到了'];
        }
        $id = $this->allowField(true)->insertGetId($data);
        if(!$id)
        {
            return ['status'=>0,'info'=>$this->getError()];
        }
        return ['status'=>1,'url'=>url('index/vip'),'info'=>'签到成功'];
    }



}
