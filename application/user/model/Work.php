<?php
namespace app\User\model;

use think\Db;
use think\Model;

class Work extends Model
{
    public function search($page=10)
    {
        $data =  $this->alias('a')->where('uid',session('userid'))->whereOr('spr','in',[session('userid')])
            ->order('id desc')
            ->paginate($page, false,
                ['query' => request()->param()]);
        return $data;
    }
    public function addData($data)
    {
        $data['addtime'] = time();
        $data['uid'] = session('userid');
        $data['zyr']  = trim($data['zyr'],',');
        if(!$data['spr']){
            exit(json_encode(array('status'=>0,'info'=>'请选择审批人')) );exit;
        }
        $id = $this->validate('Work.add')->allowField(true)->insertGetId($data);
        if($id)
        {
            include_once "./extend/Wechat.php";
            $wx = new \Wechat(config('weixin'));
            $qjr = Db::name('user')->where('userid',$data['uid'])->find();
            $spr = Db::name('user')->where('userid',$data['spr'])->find();
            $wx->push_template_msg($spr['openid'],'GXQih3QcAC2A1VpPqqXdqlescXFTTh8r8i1Ux9p-Etw','http://dj.xazbwl.com/index.php/index/gzhb_xx.html?id='.$id,array(
                'first'=> array(
                    'value' => $data['title'],
                ),
                'keyword1'=> array(
                    'value' => $qjr['username'],
                ),
                'keyword2'=> array(
                    'value' => date('Y-m-d H:i:s'),
                ),
                'keyword3'=> array(
                    'value' => $data['content'],
                 ),
                'remark'=> array(
                    'value' =>  '请您及时批复',
                ),
            ));
            return ['status'=>1,'url'=>url('index/gzhb')];
        }
        return ['status'=>0,'info'=>$this->getError()];
    }
}