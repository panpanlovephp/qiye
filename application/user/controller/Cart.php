<?php

namespace app\user\controller;
use think\Db;
use think\Loader;
use think\Request;
use think\Session;
use think\Url;


class Cart extends Com
{
    public function index()
    {
        if (Request::instance()->isPost()) {
            $data = input('post.');
            if (session('id')) {
                $res = Db::name('cart')->insertGetId($data);
                if ($res) {
                    $this->success('添加成功', 'http://127.0.0.3/user.php/Cart/index');
                }
            } else {
                $this->error('请先登录', 'http://127.0.0.3/user.php/Index/index');
            }
        }
        $cartInfo = Db::name('cart')->where('uid', session('id'))->select();
        $this->assign('cartInfo', $cartInfo);
        $this->assign('info', $cartInfo[0]);
        $this->assign('cateTree',model('Category')->getfl());
        return $this->fetch();
    }
    public function clearOne()
    {
        $id = input('id');
        if($id!=''){
            $res = Db::name('cart')->where('id',$id)->delete();
            if($res){
                return "删除成功";
            }
        }
    }
    public function clearAll()
    {
                $uid = input('uid');
                $res = Db::name('cart')->where('uid',$uid)->delete();
                if($res){
                    return "删除成功,刷新试试！";
                }
    }
}