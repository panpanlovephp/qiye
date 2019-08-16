<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Banner extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */

    public function index()
    {
        $data =  Db::name('Banner')->select();
        $this->assign('data',$data);
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
            $data['addtime'] = time();
            $data['isfalse'] = ($data['isfalse']!=""?"1":"0");
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
            $res = Db::name('Banner')->insertGetId($data);
            if($res)
            {
                $this->success('添加成功',url('index'));exit;
            }
            else
            {
                $this->error('添加失败');exit;
            }
        }
        return $this->fetch('edit');
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
            $data['addtime'] = time();
            $data['isfalse'] = ($data['isfalse']!=""?"1":"0");
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
            $res = Db::name('Banner')->where('id',$data['id'])->update($data);
            if($res)
            {
                $this->success('修改成功',url('index'));exit;
            }
            else
            {
                $this->error('修改失败');exit;
            }
        }
        $res = Db::name('Banner')->where('id',input('id'))->find();
        $this->assign('data',$res);
        return $this->fetch('edit');
    }

    public function delete($id)
    {
        $da = Db::name('Banner')->where('id',$id)->find();
        if (!$da) {
            $data['error'] = 1;
            exit;
        }
        if ($id) {
            db('Banner')->where('id',$id)->delete();
            $data['error'] = 0;
        } else {
            $data['error'] = 1;
        }
        return $data;
    }
}
