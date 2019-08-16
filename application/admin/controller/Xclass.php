<?php
namespace app\admin\controller;

class Xclass extends Common
{
    public function _initialize()
    {
        $list = model('Xclass')->getTreeList();
        $this->assign('area_list', $list);
    }
    public function index()
    {
        return $this->fetch();
    }
    /**
     * 添加
     * @return type
     */
    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            if(!trim($data['title'])){
                 $this->error('请填写名称');exit;
            }
            $catid = db('xclass')->insertGetId($data);
            if ($catid > 0) {
                $this->success('添加成功', 'index');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->assign('url',url('add'));
            return $this->fetch();
        }
    }
 
    public function edit()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $catid = intval($data['id']);
            db('xclass')->where('id', $catid)->update($data);
            $this->success('修改成功', 'index');
        } else {
            $catid = input('id');
            if (!$catid) {
                $this->error('参数错误');
            }
            $detail = db('xclass')->where('id', $catid)->find();
            $this->assign('xclass', $detail);
            $this->assign('url',url('edit'));
            return $this->fetch('add');
        }
    }

    public function delete()
    {
        $catid = input('id');
        if (!$catid) {
            $this->error('参数错误');exit;
        }
        $data = db('xclass')->where('pid',$catid)->find();
        if($data){
            $this->error('该区域下还有区域,不能直接删除');exit;
        }
        db('xclass')->where('id', $catid)->delete();
        $this->success('删除成功','index');
    }
}