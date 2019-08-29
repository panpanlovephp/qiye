<?php
namespace app\api\controller;
use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    //市
    public function shi()
    {
        if(Request::instance()->isAjax())
        {
            $sid = input('id');
            $mrid = input('mrid');
            $data = Db::name('area')->where('pid',$sid)->order('sort asc')->select();
            if($data){
                $html = '<option value="0">--请选择--</option>';
                foreach($data as $v){
                    if($v['id'] == $mrid)
                    {
                        $html .= '<option selected="selected" value="'.$v['id'].'">'.$v['title'].'</option>';
                    }
                    else
                    {
                        $html .= '<option value="'.$v['id'].'">'.$v['title'].'</option>';
                    }
                }
                return $html;
            }
        }
    }
    //区
    public function qu()
    {
        if(Request::instance()->isAjax())
        {
            $sid = input('id');
            $mrid = input('mrid');
            $data = Db::name('area')->where('pid',$sid)->order('sort asc')->select();
            if($data){
                $html = '<option value="0">--请选择--</option>';
                foreach($data as $v){
                    if($v['id'] == $mrid)
                    {
                        $html .= '<option value="'.$v['id'].'" selected="selected">'.$v['title'].'</option>';
                    }
                    else
                    {
                        $html .= '<option value="'.$v['id'].'">'.$v['title'].'</option>';
                    }
                }
                return $html;
            }
        }
    }
}
