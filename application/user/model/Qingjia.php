<?php
namespace app\User\model;

use think\Db;
use think\Model;

class Qingjia extends Model
{
    //提交请假
    public function addData($data)
    {
        $data['time'] = time();
        $data['uid'] = session('userid');
        if(!$data['spr']){
            exit(json_encode(array('status'=>0,'info'=>'请选择审批人')) );exit;
        }
        if(!trim($data['content']))
        {
            exit(json_encode(array('status'=>0,'info'=>'请填写请假原因')) );exit;
        }
        $res = $this->allowField(true)->insertGetId($data);
        if($res)
        {
            include_once "./extend/Wechat.php";
            $wx = new \Wechat(config('weixin'));
            $qjr = Db::name('user')->where('userid',$data['uid'])->find();
            $spr = Db::name('user')->where('userid',$data['spr'])->find();
            $wx->push_template_msg($spr['openid'],'HIM8IB-jOxW2G202HchhYSzuVsLEgDd0lgZCP-A3i0U','http://dj.xazbwl.com/index.php/index/qjsp.html?id='.$res,array(
                'first'=>  array(
                    'value' => '请假提醒',
                ),
                'keyword1'=>  array(
                    'value' => $qjr['username'],
                ),
                'keyword2'=>  array(
                    'value' => $qjr['jq_time'],
                ),
                'keyword3'=>  array(
                    'value' => $data['jq_type'],
                ),
                'keyword4'=>  array(
                    'value' => $data['content'],
                ),
                'keyword5'=>  array(
                    'value' => date('Y-m-d H:i:s'),
                ),
            ));
            exit(json_encode(array('status'=>1,'info'=>'申请提交成功')) );exit;
        }else{
            exit(json_encode(array('status'=>0,'info'=>'申请提交失败')) );exit;
        }
    }

    //请假列表
    public function search($page=10,$status)
    {
        $where['a.uid'] = session('userid');
        if($status==''){
            $data =   $this->alias('a')->where($where)
                ->order('a.id desc')
                ->paginate($page, false,
                    ['query' => request()->param()]);
        }else{
            $data =   $this->alias('a')->where($where)->where('status',$status)
                ->order('a.id desc')
                ->paginate($page, false,
                    ['query' => request()->param()]);
        }
        return $data;
    }
}