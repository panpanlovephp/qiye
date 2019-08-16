<?php
namespace app\User\model;

use think\Model;
use think\Db;

class Order extends Model
{

    public function addData($data)
    {

        $data['addtime'] = time();
        $data['uid'] = session('userid');
        $data['order_num'] = time().rand(0,999);
        $id = $this->allowField(true)->insertGetId($data);
        $pt = Db::name('Car')->where('vid','in',$data['uid'])->where('isfu',1) ->order('id desc')->select();
        foreach ($pt as $k) {
            $oid = time().rand(0,999);
            $zs = getmoney($k['pid']);
            $pc = ['oid'=>$id,'vid'=>$data['uid'],'mxoid'=>$oid,'pid'=>$k['pid'],'pronum'=>$k['pronum'],'p_price'=>$zs,'addtime'=>$data['addtime']];
            Db::name('Orderlist')->insert($pc);
            Db::name('Car')->where('id',$k['id'])->delete();
        }
        if(!$id){
            return ['status'=>0,'info'=>'订单生成失败'];
        }

        return ['status'=>1,'url'=>url('index/order').'?id='.$id];
    }
}