<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Request;

class Systems extends Common
{

    public function index()
        {
            if (request()->isPost()) {
                $data = input('post.');
                foreach($data as $k=>$v){
                    $res = Db::name('Config')->where(array('names'=>$k))->count();
                    if($res){
                        Db::name('Config')->where(array('names'=>$k))->setField('value',$v);
                    }else{
                        Db::name('Config')->insert(array('names'=>$k, 'value'=>$v));
                    }
                }
                $this->success('修改成功',url('index'));
                exit;
            }
            $apple =  Db::name('Config')->Field('names,value',true)->select();
            foreach($apple as $list){
                $ls[$list['names']]= $list['value'];
            }
            $this->assign('ls',$ls);
            return $this->fetch();
        }
    public function tong()
    {
        $this->assign('pnum',Db::name('User')->where('type',0)->count('userid'));
        $this->assign('tnum',Db::name('User')->where('type',1)->count('userid'));
        $this->assign('dnum',Db::name('User')->where('type',2)->count('userid'));
        $this->assign('lnum',Db::name('User')->where('type',3)->count('userid'));
        $this->assign('yesnum',Db::name('User')->where('isguan',0)->count('userid'));
        $this->assign('nonum',Db::name('User')->where('isguan',1)->count('userid'));
        $this->assign('ordernum',Db::name('Order')->count('id'));
        $this->assign('wfum',Db::name('Order')->where('isfalse',0)->count('id'));
        $this->assign('wum',Db::name('Order')->where('isfalse',1)->count('id'));
        $this->assign('yum',Db::name('Order')->where('status',2)->count('id'));
        $this->assign('qum',Db::name('Order')->where('status',3)->count('id'));
        $cum=Db::name('User')->sum('chong');
        $zum=Db::name('Chong')->sum('hnum');
        $this->assign('cum',$cum+$zum);
        $this->assign('lum',$cum);
        $this->assign('zum',$zum);
        return $this->fetch();
    }
}
