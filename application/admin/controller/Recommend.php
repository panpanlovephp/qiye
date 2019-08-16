<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Recommend extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = Db::name('Recommend')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function prolist()
   {
    $data = Db::name('Recommend')->select();
    $this->assign('info',$data);
    return $this->fetch();
   }

    public function add()
    {
            if(Request::instance()->isPost())
        {
            $data  = input('post.');
            $res = Db::name('Recommend')->insertGetId($data);
            if($res)
            {
                $this->success('新增成功',url('prolist'));exit;
            }
            else
            {
                $this->error('新增失败');exit;
            }
    }
        $id = input('id');
        $bq = Db::name('Recommend')->where('id',$id)->select();
        $this->assign('bq',$bq);
        $this->assign('id',$id);

        return $this->fetch('add');
    }

    public function edit($id)
    {
        if(Request::instance()->isGet())
       {
            $id=$_GET['id'];
            $data = Db::name('Recommend')->where('id',$id)->select();
        }

        if(Request::instance()->isPost())
        {
            $data  = input('post.');
            $res = Db::name('Recommend')->where('id',$id)->update($data);
            if($res)
            {
                $this->success('修改成功',url('prolist'.'?id='.$data['id']));exit;
            }
            else
            {
                $this->error('修改失败');exit;
            }
        }

        $this->assign('data',$data);
        return $this->fetch();
    }

    public function delete($id)
    {
        $da = Db::name('Recommend')->where('id',$id)->find();
        if (!$da) {
            $data['error'] = 1;
            exit;
        }
        if ($id) {
            db('Recommend')->where('id',$id)->delete();
            $data['error'] = 0;
        } else {
            $data['error'] = 1;
        }
        return $data;
    }
}
