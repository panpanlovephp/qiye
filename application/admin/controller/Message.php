<?php
namespace app\admin\controller;

class Message extends Common
{
    public function index()
    {
        $data = model('Message')->search(10);
        $this->assign('data',$data);
        return $this->fetch();
    }

    /**
     * 删除
     */
    public function delete()
    {
        $id = intval(input('id'));
        if (!$id) {
            $this->error('非法参数');
        }
        $row = db('message')->where('id', $id)->find();
        if($row){
            db('message')->where('id', $id)->delete();
            $this->success('删除成功');
        }
    }
}