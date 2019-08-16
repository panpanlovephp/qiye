<?php
namespace app\User\model;

use think\Db;
use think\Model;

class Message extends Model
{
    public function addData($data)
    {
        if ($data['title'] =='')  {
            return ['status'=>0,'info'=>'用户名不能为空！'];
        }
        if ($data['tel']=='')  {
            return ['status'=>0,'info'=>'手机为必填项！'];
        }
        if (!preg_match('/^1[34578]\d{9}$/',$data['tel']))  {
            return ['status'=>0,'info'=>'手机格式不正确！'];
        }
        if ($data['email']=='')  {
            return ['status'=>0,'info'=>'Email不能为空！'];
        }
        if (!preg_match('/^([a-z0-9_\\.-]+)@([\\da-z\\.-]+)\\.([a-z\\.]{2,6})$/',$data['email']))  {
            return ['status'=>0,'info'=>'Email格式不正确！'];
        }
        $data['addtime'] = time();
        $id = $this->allowField(true)->insertGetId($data);
        if($id){
            return ['status'=>1,'info'=>'信息提交成功','url'=>url('index')];
            }
        return ['status'=>0,'info'=>$this->getError()];
    }
}