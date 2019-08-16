<?php
namespace app\User\model;

use think\Model;

class Xiangmu extends Model
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
       if(!$data['name']){
           return ['status'=>0,'info'=>'项目名称不能为空' ];
       }
       if($data['shen'] == 0  || $data['shi'] == 0 || $data['qu'] == 0){
           return ['status'=>0,'info'=>'区域请选择' ];
       }
        if(!$data['kh_name']){
            return ['status'=>0,'info'=>'客户姓名不能为空' ];
        }


        $data['addtime'] = time();
        $data['uid'] = session('userid');
        $data['status'] = 0;

        $xx = [
            'lu'  => $data['lu'],
            'hao'  => $data['hao'],
            'xiaoqu'  => $data['xiaoqu'],
            'qi'  => $data['qi'],
            'lou'  => $data['lou'],
            'danyuan'  => $data['danyuan'],
            'qita'  => $data['qita'],
        ];
        $data['address_info'] = serialize($xx);
        $id = $this->allowField(true)->insertGetId($data);
        if(!$id){
            return ['status'=>0,'info'=>'发布失败'];
        }
        return ['status'=>1,'url'=>url('index/xmgl')];
    }
}