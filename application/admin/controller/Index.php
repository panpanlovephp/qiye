<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Index extends Common
{
    public function index()
    {
		$go = db('admin')->where('id', session('admin_id'))->find();
	    $this->assign('go',$go);
	    return $this->fetch();
	}
	public function home()
	{
		$go = db('admin')->where('id',session('admin_id'))->find();
		$mysql=Db::query('select VERSION() as version');
		$server_info  = [
			'THINKPHP版本'=>THINK_VERSION,
			'服务器软件'     => strpos($_SERVER['SERVER_SOFTWARE'], 'PHP')===false ? $_SERVER['SERVER_SOFTWARE'].'PHP/'.phpversion() : $_SERVER['SERVER_SOFTWARE'],
			'MYSQL版本'=>$mysql[0]['version']?$mysql[0]['version']:'unknown',
			'上传附件限制' => @ini_get('file_uploads') ? ini_get('upload_max_filesize') :'unknown',
		];
		$this->assign('server_info',$server_info);
		$this->assign('go',$go);
		return $this->fetch();
	}
   	
}
