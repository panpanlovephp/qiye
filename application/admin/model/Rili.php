<?php

namespace app\admin\model;

use think\Model;
use think\Db;

class Rili extends Model
{
     public function serch($year,$mon)
     {
           //这个月的第一天
           $start_time =  strtotime($year.'-'.$mon.'-01');
           $firstday = date('Y-m-d', $start_time);
           $end_time   = strtotime("$firstday +1 month -1 day");
//           echo date('Y-m-d',$end_time);exit;
           $map['day'] = array(array('>=',$start_time),array('<=',$end_time),'and');
           $data = Db('Rili')->where($map)->select();
           return $data;
     }
}
