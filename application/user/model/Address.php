<?php
namespace app\User\model;

use think\Db;
use think\Model;

class Address extends Model
{
    public function search($page=10)
    {
        $data =  $this->alias('a')->where('vid',session('userid'))
            ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
    public function addData($data)
    {
        $data['vid'] = session('userid');
        $id = $this->validate('Address.add')->allowField(true)->insertGetId($data);
        $ct = Db::name('User')->where('userid',$data['vid'])->value('aid');
        if($ct==0){
           Db::name('User')->where('userid',$data['vid'])->update(['aid'=>$id]);
        }
        if($id){
            return ['status'=>1,'info'=>'地址新增成功','url'=>url('index/address')];
            }
        return ['status'=>0,'info'=>$this->getError()];
    }
    public function editData($data)
    {
        $data['vid'] = session('userid');
        $id = Db::name('Address')->where('id',$data['id'])->update($data);
        if($id){
            return ['status'=>1,'info'=>'地址修改成功','url'=>url('index/address')];
        }
        return ['status'=>0,'info'=>'您什么都没有修改'];
    }

    public function vip_addData($data)
    {
        $data['vid'] = session('userid');
        $id = $this->validate('Address.add')->allowField(true)->insertGetId($data);
        $ct = Db::name('User')->where('userid',$data['vid'])->value('aid');
        if($ct==0){
            Db::name('User')->where('userid',$data['vid'])->update(['aid'=>$id]);
        }
        if($id){
            return ['status'=>1,'info'=>'地址新增成功','url'=>url('index/vip_address')];
        }
        return ['status'=>0,'info'=>$this->getError()];
    }


    public function vip_editData($data)
    {
        $data['vid'] = session('userid');
        $id = Db::name('Address')->where('id',$data['vid'])->update($data);
        if($id){
            return ['status'=>1,'info'=>'地址修改成功','url'=>url('index/vip_address')];
        }
        return ['status'=>0,'info'=>'您什么都没有修改'];
    }
}