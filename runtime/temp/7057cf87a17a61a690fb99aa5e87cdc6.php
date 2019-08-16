<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\category\index.html";i:1565678139;}*/ ?>

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
    <script>
        $(document).ready(function(){
            $("#pta").bind("click",function(){
                if($(this).html()=="删除分类"){
                    $(this).html("完成删除");
                    $(".pt").show();
                }else{
                    $(this).html("删除分类");
                    $(".pt").hide();
                }
            });
        });
    </script>
</head>
<body>
<div class="clearfix">
    <div class="left_Treeview" style="width:100%">
        <div class="show_btn"><span></span></div>
        <div class="widget-box side_content" style="width: 100%">
            <div class="side_list">
                <div class="Operate_btn" style="margin-top: 10px;margin-left: 10px">
                    <a href="<?php echo url('category/add'); ?>" class="btn btn-warning">新增类型</a>
                </div>
                <div style="margin-top: 10px; border-bottom: #c2c2c2 1px solid"></div>
                <div class="widget-body">
                    <div class="widget-main padding-8">
                        <table class="table table-striped table-bordered table-hover" id="sample-table">
                            <tr>
                                <td width="8%" height="32" bgcolor="#0099FF"><div align="center"><strong>序号</strong></div></td>
                                <td width="10%" bgcolor="#0099FF"><strong>总类别</strong></td>
                                <td width="54%" bgcolor="#0099FF" style="text-align: left"><strong>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;子分类
                                </strong></td>
                                <td width="20%" bgcolor="#0099FF"><strong>操作</strong></td>
                            </tr>
                            <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?>
                            <tr id="li<?php echo $vol['id']; ?>">
                                <?php if($vol['level']==0): ?>
                                <td bgcolor="#FFFFFF"><div align="center"><B style="color: red"><?php echo $vol['corder']; ?></B></div></td>
                                <?php else: ?>
                                <td bgcolor="#FFFFFF"><div align="center">&nbsp;└<?php echo $vol['corder']; ?></div></td>
                                <?php endif; if($vol['level']==0): ?>
                                <td bgcolor="#FFFFFF"><strong class="hei16"><?php echo $vol['cat_name']; ?></strong></td>
                                <?php else: ?>
                                <td bgcolor="#FFFFFF">&nbsp;</td>
                                <?php endif; if($vol['level']!=0): ?>
                                <td bgcolor="#FFFFFF" style="text-align: left"><?php echo str_repeat('&nbsp;',15*$vol['level']); ?><?php echo $vol['cat_name']; ?></td>
                                <?php else: ?>
                                <td bgcolor="#FFFFFF">&nbsp;</td>
                                <?php endif; ?>
                                <td bgcolor="#FFFFFF">[<a href="<?php echo url('category/edit'); ?>?id=<?php echo $vol['id']; ?>" style="color: #7c7c7c" >修改</a>] [<a href="javascript:;" onclick="member_del('<?php echo $vol['id']; ?>')" style="color: #7c7c7c">删除</a>]</td>
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