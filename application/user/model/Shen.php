<?php
namespace app\User\model;

use think\Db;
use think\Model;

class Shen extends Model
{
    //提交请假
    public function upData($data)
    {
        if($data['status']==1){
            Db::name('Qingjia')->where('id',$data['id'])->update([
                'status'=>1
            ]);
        }else{
            Db::name('Qingjia')->where('id',$data['id'])->update([
                'status'=>2
            ]);
        }
        $res = Db::name('Qingjia')->where('id',$data['id'])->find();
        if($res)
        {
            include_once "./extend/Wechat.php";
            $wx = new \Wechat(config('weixin'));
            $qjr = Db::name('user')->where('userid',$data['uid'])->find();
            $spr = Db::name('user')->where('userid',$data['spr'])->find();
            $wx->push_template_msg($qjr['openid'],'HIM8IB-jOxW2G202HchhYSzuVsLEgDd0lgZCP-A3i0U','http://dj.xazbwl.com/index.php/index/qjsp.html?id='.$res,array(
                'first'=>  array(
                    'value' => '请假提醒',
                ),
                'keyword1'=>  array(
                    'value' => $spr['username'],
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
            return ['status'=>1,'url'=>url('index/qjsp')];
        }else{
            return ['status'=>0,'info'=>'提交失败'];
        }
    }

}