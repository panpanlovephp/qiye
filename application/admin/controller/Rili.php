<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Rili extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $year = input('year');
        $mon  = input('mon');
        if(!$year){
            $year = date('Y');
        }
        if(!$mon){
            $mon = date('m');
        }
        $m = model('Rili');
        $data = $m->serch($year,$mon);
        $this->assign('data',$data);
        $this->assign('year',$year);
        $this->assign('mon',$mon);
        return $this->fetch();
    }

    public function crate()
    {
        $year = input('year');
        $mon  = input('mon');
        $time = strtotime($year.'-'.$mon);
        $res = Db::name('rili')->where('day','>',$time)->count();
        if($res){
            $this->error('已经存在，不需要重复生成');exit;
        }
        $this->sc($year,$mon);
    }
    //生成日历
    protected function sc($year,$com)
    {
        $d = strtotime("$year-$com");
        $r = date('t',$d);
        $m = Db::name('rili');
        for($i=1; $i<=$r; $i++)
        {
            $time = strtotime("$year-$com-$i");
            $w = date('w',$time);
            if($w == 0){
                $title = '周末';
                $type = 1;
            }elseif($w == 6){
                $title = '周末';
                $type = 1;
            }else{
                $title = '';
                $type = 0;
            }

            $m->insert([
                'day'   => $time,
                'f_day' => date('Y-m-d',$time),
                'type'  =>$type,
                'title' => $title,
                'xq'     => cnWeek($time)
            ]);
        }
        $this->success('生成完成',url('index',array('year'=>$year,'mon'=>$com)));
    }

    //修改
    public function edit()
    {
        if(Request::instance()->isPost())
        {
            $res = Db::name('Rili')->where('id',input('id'))->update([
                'type'=>input('type'),
                'title'=>input('title'),
            ]);
            if($res !== false){
                $this->success('设置成功','index');exit;
            }else{
                $this->error('设置失败');
            }
            exit;
        }
        $id = input('id');
        $data = Db::name('Rili')->where('id',$id)->find();
        $this->assign('data',$data);
        return $this->fetch('add');
    }


}
