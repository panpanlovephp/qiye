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
	    $username = input('username');
		if($username!='')
		{
            $password = input('password');
            $check_data = ['username' => $username, 'password' =>$password];
            $validate = validate('Admin');
            if (!$validate->check($check_data)) {
                $this->error($validate->getError());
            }
             $res= Db::name('admin')->insert(input('post.'));

			 if($res){
                 $this->success("添加成功",'index');
			 }else{
                 $this->error("添加失败");
			 }
		}
		return $this->fetch();
   	}

	public function delete()
	{
		$catid = input('id');
		if (!$catid) {
			$this->error('参数错误');exit;
		}

		db('admin')->where('id', $catid)->delete();
		$this->success('删除成功','index');
	}
}
