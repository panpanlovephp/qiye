<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Admin extends Common
{
	public function index()
	{
		$data = Db::name('admin')->select();
		$this->assign('data',$data);
		return $this->fetch();
	}
    public function password()
    {
	    if (request()->isPost()) {
            $data = input('post.');
			$id=session('fivecms_admin_id');
			$r=db('admin')->where('id',$id)->find();
			if($r['password']!= md5($data['password_o'] )){
				$this->error('原密码错误');
				}
			if($data['password_n']!=$data['password_r']){
				$this->error('新密码与重复密码不一致');
				}
			 $password=md5($data['password_n']);
			 db('admin')->where('id',$id)->update(['password'=>$password]);
			 $this->success('密码修改成功','Login/index');	
			}
		$id = input('get.id',0);
		if(!$id){
			$id = session('admin_id');
		}
		$data=  Db::name('admin')->where('id',$id)->find();
		$this->assign('data',$data);
	    return $this->fetch();
	}

	public function add()
	{
		if($this->request->isPost())
		{
             $data= model('admin')->addData(input('post.'));
			 if($data['status'] == 0){
				 $this->error($data['info']);
			 }else{
				 $this->success($data['info'],'index');
			 }
		}
		return $this->fetch();
   	}

	//设置权限
	public function setauth()
	{
		header("Content-type: text/html; charset=utf-8");
		if($this->request->isPost())
		{
			Db::name('admin')->where('id',input('id'))->update([
				'qx_type'=>input('qx_type',0),
				'shi'=>input('shi',0),
			]);
			$this->success('设置成功','index');
			exit;
		}
		//生成区域经理组
		$quyu = Db::name('area')->where('pid=1')->field('id,title')->select();
		$this->assign('quyu',$quyu);
		$data = Db::name('admin')->where('id',input('get.id'))->find();
		$this->assign('data',$data);
		return $this->fetch();
	}
	public function delete()
	{
		$catid = input('id');
		if (!$catid) {
			$this->error('参数错误');exit;
		}
//		$data = db('admin')->where('pid',$catid)->find();
//		if($data){
//			$this->error('该区域下还有区域,不能直接删除');exit;
//		}
		db('admin')->where('id', $catid)->delete();
		$this->success('删除成功','index');
	}
}
