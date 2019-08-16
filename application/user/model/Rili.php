<?php

namespace app\user\model;

use think\Model;

class Rili extends Model
{
    public function zhuanhuan($data,$year,$mon)
    {
        //这个月的第一天
        $start_time =  strtotime($year.'-'.$mon.'-01');
        $firstday   = date('Y-m-d', $start_time);
        $end_time   = strtotime("$firstday +1 month -1 day");
        $map['day'] = array(array('>=',$start_time),array('<=',$end_time),'and');
        $data1 = $this->where($map)->column('day,f_day,type,title,xq');
        //这个月打卡记录
        $userMap['time'] = $map['day'];
        $userMap['uid']  = session('userid');
        $kaoqin =  db('kaoqin')->where( $userMap )->column('time,start_dk,end_dk');
        foreach($data as $k=>$v)
        {
            if( $v2 = $data1[ $v['time'] ] )
            {
                $data[$k]['type']   =  $v2['type'];
                $data[$k]['title']  =  $v2['title'];
                $data[$k]['xq']     =  $v2['xq'];
                $data[$k]['type']     =  $v2['type'];

                //统计打卡
                if($kq = $kaoqin[ $v['time'] ])
                {
                    $data[$k]['sw'] = (int) $kq['start_dk'];
                    $data[$k]['xw'] = (int) $kq['end_dk'];
                }

                if($v2['type'] == 0){
                    $data[$k]['class'] = 'rl_zi';
                }elseif ($v2['type'] == 1){
                    $data[$k]['class'] = 'rl_zi3';
                }elseif ($v2['type'] == 2){
                    $data[$k]['class'] = 'rl_zi3';
                }

                if($v['time'] ==  strtotime(date('Y-m-d') )){
                    $data[$k]['class'] = 'rl_zi2';
                }
            }
            if($v['type'] == -1 || $v['type'] == -2){
                $data[$k]['class'] = 'qt';
            }
        }
        return $data;
    }

}
