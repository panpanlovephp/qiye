<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Product extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = Db::name('Category')->where('parent_id',0)->select();
        $i = 0;
        foreach($data as $pt){
            $data[$i]['num'] = Db::name('Product')->where('sid',$pt['id'])->count('id');
            $i++;
        }
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function prolist()
    {
        $sid= input('sid');
        $data =  model('Product')->search(10,$sid);
        $this->assign('data',$data);
        $this->assign('sid',$sid);
        return $this->fetch();
    }
    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function add()
    {
        if(Request::instance()->isPost())
        {
            $data  = input('post.');
            print_r($data);
            exit();
            $data['isfalse'] = ($data['isfalse']!="0"?"1":"0");
            $file = request()->file('image');
            if(isset($file)){
                $info = $file->move(ROOT_PATH . 'public/img');
                if($info){
                    $a=$info->getSaveName();
                    $imgp= str_replace("\\","/",$a);
                    $imgpath='img/'.$imgp;
                    $data['pic']= $imgpath;
                }else{
                    echo $file->getError();
                }
            }
            $res = Db::name('Product')->insertGetId($data);
            if($res)
            {
                $this->success('发布成功',url('prolist'));exit;
            }
            else
            {
                $this->error('发布失败');exit;
            }
        }
        $sid = input('sid');
        $bq = Db::name('Category')->where('parent_id',$sid)->select();
        $this->assign('bq',$bq);
        $pid = $bq[1]['parent_id'];
        $this->assign('pid',$pid);
        $this->assign('sid',$sid);
        return $this->fetch('add');
    }
    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        if(Request::instance()->isPost())
        {
            $data  = input('post.');
            $data['isfalse'] = ($data['isfalse']!="0"?"1":"0");
            if(isset($file)){
                $info = $file->move(ROOT_PATH . 'public/img');
                if($info){
                    $a=$info->getSaveName();
                    $imgp= str_replace("\\","/",$a);
                    $imgpath='img/'.$imgp;
                    $data['pic']= $imgpath;
                }else{
                    echo $file->getError();
                }
            }
            $res = Db::name('Product')->update($data);
            if($res)
            {
                $this->success('修改成功',url('prolist'));exit;
            }
            else
            {
                $this->error('修改失败');exit;
            }
        }
        $sid = input('sid');
        $bq = Db::name('Category')->where('id',$sid)->select();
        $pid = $bq[0]['parent_id'];
        $this->assign('bq',$bq);
        $res = Db::name('Product')->where('id',input('id'))->find();
        $this->assign('data',$res);
        $this->assign('sid',$sid);
        $this->assign('pid',$pid);
        return $this->fetch('edit');
    }

    public function delete($id)
    {
        $da = Db::name('Product')->where('id',$id)->find();
        if (!$da) {
            $data['error'] = 1;
            exit;
        }
        if ($id) {
            db('Product')->where('id',$id)->delete();
            $data['error'] = 0;
        } else {
            $data['error'] = 1;
        }
        return $data;
    }
}
