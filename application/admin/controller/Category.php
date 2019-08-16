<?php
namespace app\admin\controller;

use think\Db;
class Category extends Common
{
    public function index()
    {
        $list=model('Category')->getfl();
        $lxf=array(
            'xxl'=>'分类管理',
            'paw'=>'分类列表',
        );
        $this->assign(array(
            'lxf'=>$lxf,
            'info'=>$list,
        ));
        $this->assign('data',$this->data);
        return $this->fetch();
    }
    public function add()
    {
        $info=model('Category')->getfl();
        if (request()->isPost()) {
            $data = input('post.');
            if(!trim($data['cat_name'])){
                $this->error('请填写名称');exit;
            }
            $catid = db('category')->insertGetId($data);
            if ($catid > 0) {
                $this->success('添加成功', 'Category/index');
            } else {
                $this->error('添加失败');
            }
        } else {
            $this->assign('data',$this->data);
            $dd=0;
            $this->assign(array(
                'info'=>$info,
                'dd'=>$dd,
            ));
            return $this->fetch();
        }
    }
    public function edit()
    {
        $info=model('Category')->getfl();
        if (request()->isPost()) {
            $data = input('post.');
            $catid = intval($data['id']);
            db('category')->where('id', $catid)->update($data);
            $this->success('修改成功', 'Category/index');
        } else {
            $catid = input('id');
            if (!$catid) {
                $this->error('参数错误');
            }
            $item = db('category')->where('id', $catid)->find();
            $this->assign('item', $item);
            $dd=db('category')->find($catid);
            $this->assign('data',$this->data);
            $this->assign(array(
                'info'=>$info,
                'dd'=>$dd,
            ));
            return $this->fetch();
        }
    }
    public function delete($id)
    {
        $da = Db::name('Category')->where('parent_id',$id)->find();
        if($da){
            $data['error'] = 1;
        }else{
            Db::name('Category')->where('id',$id)->delete();
            $data['error'] = 0;
        }
        return $data;
    }
}