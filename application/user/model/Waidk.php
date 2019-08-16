<?php

namespace app\user\model;

use think\Db;
use think\Model;

class Waidk extends Model
{

    public function addData($data)
    {


        $data['uid'] = session('userid');
        $data['dtime']  = trim($data['dtime']);
        $data['isfalse']  = 1;
        $data['address']  = trim($data['address']);
        $data['remark']  = trim($data['remark']);

        $time =  strtotime(date('Y-m-d'));
        $map['time'] = $time;
        $data['time'] = $time;
        $map['uid']  = session('userid');
//        $map['isfalse'] = 1;
//        $cont = $this->where($map)->count();
//        if($cont){
//            return ['status'=>0,'info'=>'您已经签过到了'];
//        }
        $id = $this->allowField(true)->insertGetId($data);
        if(!$id)
        {
            return ['status'=>0,'info'=>$this->getError()];
        }
        return ['status'=>1,'url'=>url('index/info'),'info'=>'签到成功'];
    }



}
