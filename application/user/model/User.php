<?php
namespace app\User\model;

use think\Model;

class User extends Model
{
    /**
     * 微信登录后绑定用户
     * @param $data  登录表单数据
     * @return array
     */
    public function login($data)
    {
        if(!preg_match('/^1\d{10}/i',$data['username'])){
            return ['status'=>0,'info'=>'用户名错误' ];
        }
        if(!$data['password']){
            return ['status'=>0,'info'=>'密码不能为空' ];
        }

        $data1 = $this->where('username',$data['username'])->find();
        if(!$data1){
            return ['status'=>0,'info'=>'账号密码错误' ];
        }
        if($data['password'] != $data['password']){
            return ['status'=>0,'info'=>'账号密码错误' ];
        }
        //更新
        $xwinfo  = session('wxinfo');
        session('userid',$data1['userid']);
        $this->where('userid',$data1['userid'])->update([
            'nikename'=>$xwinfo['nickname'],
            'openid'  =>$xwinfo['openid'],
            'logo'    => $xwinfo['headimgurl'],
        ]);
//        include './extend/Wechat.php';
//        $wx = new \Wechat(config('weixin'));
//        $wx->push_template_msg($xwinfo['openid'],'SjzRfzY2dvlDeOhK-GNndPWyHCTUF5wuyWtnRgrNaJg',array(
//            'first'=> [
//                'value' => '恭喜你！微信绑定手机成功',
//            ],
//            'keyword1'=> [
//                'value' => $data1['username'],
//            ],
//            'keyword2'=> [
//                'value' => $data1['phone'],
//            ],
//            'keyword3'=> [
//                'value' => $data1['phone'],
//            ],
//            'keyword4'=> [
//                'value' => date('Y-m-d H:i:s'),
//            ],
//            'remark'=> [
//                'value' => '欢迎使用',
//            ],
//        ));
        return ['status'=>1 ,'url'=>url('user/index')];
    }


    /**
     * 当前用户是否存在
     * @param $openid
     * @return int|string
     */
    public function hasUser($openid)
    {
        return  $this->where('openid',$openid)->find();
    }

    /**
     * 通讯录
     * @param $uid自己的不用取出
     */
    public function txl($uid)
    {
        $data = $this->where('userid','<>',$uid)->column('username,userid,logo,phone,job,nikename,bumen');
        $list = array();
        foreach($data as $v)
        {
            $list[$v['bumen']][] = $v;
        }
        return $list;
    }
}