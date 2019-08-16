<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class News extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
         $m = model('News');
         $this->assign('data',$m->search(10));
         return $this->fetch();
    }

    public function add()
    {
        if(Request::instance()->isPost())
        {
            $file = request()->file('image');
            $data  = input('post.');
            if(isset($file)){
                $info = $file->move(ROOT_PATH . 'public/img');
                if($info){
                    $a=$info->getSaveName();
                    $imgp= str_replace("\\","/",$a);
                    $imgpath='img/'.$imgp;
                    $data['img']= $imgpath;
                }else{
                    echo $file->getError();
                }
            }
            $data['status'] = ($data['status']!=""?"1":"0");
            $data['addtime'] = time();
            $res = Db::name('News')->insertGetId($data);
            if($res)
            {
                $this->success('发布成功',url('index'));exit;
            }
            else
            {
                $this->error('发布失败');exit;
            }
        }
        $bq = Db::name('Area')->where('pid',1)->select();
        $this->assign('bq',$bq);
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
            $file = request()->file('image');
            $id = input('id');
            $data  = input('post.');
            if(isset($file)){
                $info = $file->move(ROOT_PATH . 'public/img');
                if($info){
                    $a=$info->getSaveName();
                    $imgp= str_replace("\\","/",$a);
                    $imgpath='img/'.$imgp;
                    $data['img']= $imgpath;
                }else{
                    echo $file->getError();
                }
            }
            $data['status'] = ($data['status']!=""?"1":"0");
            $data['addtime'] = time();
            $res = db('News')->where('id',$id)->update($data);
            if($res !== fasle){
                $this->success('修改成功','index');
            }else{
                $this->error('保存失败');
            }
            exit;

        }
        $data = db('News')->where('id',$id)->find();
        $this->assign('data',$data);
        $bq = Db::name('Area')->where('pid',1)->select();
        $this->assign('bq',$bq);
        return $this->fetch();
    }


    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $id = intval(input('id'));
        if (!$id) {
            $this->error('非法参数');
        }
        db('News')->where('id', $id)->delete();
        $this->success('删除成功',url('index'));
    }
}
