<?php
namespace app\User\model;

use think\Model;

class Shenqing extends Model
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
    public function addData($data)
    {
        $data['addtime'] = time();
        $data['uid'] = session('userid');
        $id = $this->validate('Shenqing.add')->allowField(true)->save($data);
        if(!$id){
            return ['status'=>0,'info'=>$this->getError()];
        }
        return ['status'=>1,'url'=>url('index/fwsq')];
    }
}