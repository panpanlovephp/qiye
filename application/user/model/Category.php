<?php

namespace app\user\model;
use think\Db;
use think\Model;

class Category extends Model
{
    protected $table = 'dj_category';
    public function getfl()
    {
        $pname=Db::name('Category')->where('parent_id',0)->field('cat_name')->select();
        $lian=Db::name('Category')->where('parent_id',0)->field('lian')->select();
        $pid=Db::name('Category')->distinct(true)->field('parent_id')->select();
        foreach($pid as $v){
        if($v['parent_id'] != 0){
           $sname[] =  Db::name('Category')->where('parent_id',$v['parent_id'])->field('cat_name,lian')->select();
        }
        }
        for($i = 0;$i<count($pname);$i++){
           $cateTree[]  = [
               "pid"=>$pid[$i],
               "parent_name"=>$pname[$i],
               "lian"=>$lian[$i],
               "sname"=>$sname[$i]
           ];
        }
        return $cateTree;
    }
}