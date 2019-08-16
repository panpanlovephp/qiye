<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\area\index.html";i:1510568727;}*/ ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css"/>
    <link href="__PUBLIC__/admin/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome-ie7.min.css" />
    <script src="__PUBLIC__/admin/assets/js/jquery.min.js"></script>
    <script src="__PUBLIC__/admin/assets/layer/layer.js" type="text/javascript"></script>
    <title>分类管理</title>
    <style>
        table > tbody > tr > td {
            font-size: 14px;
            color: rgb(68, 68, 68);
        }
        table > tbody > tr >th {
            font-size: 14px;
            background-color: rgba(255, 141, 7, 0.5);
            color: rgb(4, 64, 93);
        }
    </style>
</head>
<body>
<div class="clearfix" style="width:100%">
    <div class="left_Treeview" style="width:100%">
        <div class="show_btn"><span></span></div>
        <div class="widget-box side_content" style="width: 100%">
            <div class="side_list">
                <div class="Operate_btn" style="margin-top: 10px;margin-left: 10px">
                    <a href="<?php echo url('area/add'); ?>" class="btn  btn-warning">新增</a>
                </div>
                <div style="margin-top: 10px; border-bottom: #c2c2c2 1px solid"></div>
                <div class="widget-body">
                    <div class="widget-main padding-8">
                        <table class="result-tab" width="100%" >
                            <tr style="border: 1px solid rgba(153, 153, 153, 0.88)">
                                <th style="text-align: center; width:80px; height: 40px">排序</th>
                                <th style="text-align: left;">名称</th>
                                <th style="text-align: center; width:200px;">操作</th>
                            </tr>
                            <?php if(is_array($area_list) || $area_list instanceof \think\Collection || $area_list instanceof \think\Paginator): $i = 0; $__LIST__ = $area_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <tr style="text-align: center; width:80px; height: 40px; background-color: rgba(236, 238, 244, 0.16);border: 1px solid #ddd">
                                <?php if($v['pid']==0): ?>
                                <td><b><?php echo $v['sort']; ?></b></td>
                                <?php else: ?>
                                <td><?php echo $v['sort']; ?></td>
                                <?php endif; if($v['pid']==0): ?>
                                <td style="text-align: left;"><b><?php echo $v['title']; ?></b></td>
                                <?php else: ?>
                                <td style="text-align: left; font-size: 13px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└<?php echo $v['title']; ?></td>
                                <?php endif; ?>
                                <td>
                                    <a title="编辑" href="<?php echo url('edit'); ?>?id=<?php echo $v['id']; ?>" style="height: 30px; line-height: 30px; color: #006600">编辑</a>&nbsp;&nbsp;|&nbsp;
                                    <a title="删除" href="<?php echo url('delete'); ?>?id=<?php echo $v['id']; ?>" style="height: 30px; line-height: 30px; color: red">删除</a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /*分类-删除*/
    function member_del(id){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type:"POST",
                url:"<?php echo url('delete'); ?>",
                dataType:"json",
                data:{"id":id},
                success:function(data){
                    if(data.error == 0){
                        $("#li"+id).remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }else{
                        layer.msg('该分类下有子分类，不能直接删除或信息错误!',{icon:1,time:2000});
                    }
                }
            });
        });
    }
</script>

</body>
</html>