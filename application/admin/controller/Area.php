<?php
namespace app\admin\controller;

class Area extends Common
{
    public function _initialize()
    {
        $list = model('Area')->getTreeList();
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
            $data['istu'] = ($data['istu']!=""?"1":"0");
            $data['isjs'] = ($data['isjs']!=""?"1":"0");
            $catid = db('area')->insertGetId($data);
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
            $data['istu'] = ($data['istu']!=""?"1":"0");
            $data['isjs'] = ($data['isjs']!=""?"1":"0");
            db('area')->where('id', $catid)->update($data);
            $this->success('修改成功', 'index');
        } else {
            $catid = input('id');
            if (!$catid) {
                $this->error('参数错误');
            }
            $detail = db('area')->where('id', $catid)->find();
            $this->assign('data', $detail);
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
        $data = db('area')->where('pid',$catid)->find();
        if($data){
            $this->error('该区域下还有内容,不能直接删除');exit;
        }
        db('area')->where('id', $catid)->delete();
        $this->success('删除成功','index');
    }
}