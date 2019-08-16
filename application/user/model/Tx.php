<?php
namespace app\User\model;

use think\Model;
use think\Db;

class Tx extends Model
{

    public function addData($data)
    {
       if(!$data['price']){
           return ['status'=>0,'info'=>'金额不能为空'];
       }
        if(!is_numeric($data['price'])){
            return ['status'=>0,'info'=>'请填写正确金额'];
        }
        $wow = Db::name('user')->where('userid',session('userid'))->find();
        $pprice = $wow['price'];
        if($data['price']==0){
            return ['status'=>0,'info'=>'填写金额不能为0'];
        }
        if($pprice==0){
            return ['status'=>0,'info'=>'您余额不足，无法提现'];
        }
        if($data['price']>$pprice){
            return ['status'=>0,'info'=>'您可提取金额不足'];
        }
        $data['vid'] = session('userid');
        $bank = Db::name('bank')->where('vid',session('userid'))->find();
        $data['bankname']=$bank['bankname'];
        $data['banknum']=$bank['banknum'];
        $data['sname']=$bank['sname'];
        $data['znum']=$bank['znum'];
        $data['tel']=$bank['tel'];
        $data['addtime']=time();
        $id = $this->allowField(true)->insertGetId($data);
        if(!$id){
            return ['status'=>0,'info'=>'提交失败'];
        }
        $cy = $pprice-$data['price'];
        Db::name('user')->where('userid',session('userid'))->update(['price'=>$cy]);
        return ['status'=>1,'url'=>url('index/moneybao')];
    }
}