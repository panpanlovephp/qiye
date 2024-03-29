<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\banner\index.html";i:1510572908;}*/ ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="__PUBLIC__/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css"/>
    <link href="__PUBLIC__/admin/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/font/css/font-awesome.min.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="__PUBLIC__/admin/js/jquery-1.9.1.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/typeahead-bs2.min.js"></script>
    <script src="__PUBLIC__/admin/js/lrtk.js" type="text/javascript" ></script>
    <script src="__PUBLIC__/admin/assets/js/jquery.dataTables.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="__PUBLIC__/admin/assets/layer/layer.js" type="text/javascript" ></script>
    <script src="__PUBLIC__/admin/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="__PUBLIC__/admin/js/H-ui.js" type="text/javascript"></script>
    <script src="__PUBLIC__/admin/js/displayPart.js" type="text/javascript"></script>
    <title>文章管理</title>
</head>

<body>
<div class="clearfix">
    <div class="article_style" id="article_style">
        <!--文章列表-->
        <div class="Ads_list" style="width: 100%; margin-left: 0px">
            <div class="border clearfix">
       <span class="l_f">
        <a href="<?php echo url('add'); ?>?sid=<?php echo $sid; ?>" title="添加banner" id="add_page" class="btn btn-warning"><i class="fa fa-plus"></i> 添加banner</a>
       </span>
            </div>
            <div class="article_list">
                <table class="table table-striped table-bordered table-hover" id="sample-table">
                    <thead>
                    <tr>
                        <th width="80px">ID</th>
                        <th align="center" width="150px">名称</th>
                        <th align="center">图片</th>
                        <th align="center">是否展示</th>
                        <th align="center">发布时间</th>
                        <th width="150px">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['title']; ?></td>
                        <td><img src="__PUBLIC__/<?php echo $v['pic']; ?>" alt="" width="500px"></td>
                        <td><?php echo getfalse($v['isfalse']); ?></td>
                        <td><?php echo getTime($v['addtime']); ?></td>
                        <td class="td-manage">
                            <a title="编辑" href="<?php echo url('edit',['id'=>$v['id'],'sid'=>$sid]); ?>"  class="btn btn-xs btn-info" ><i class="fa fa-edit bigger-120"></i></a>
                            <a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo $v['id']; ?>')" class="btn btn-xs btn-danger" ><i class="fa fa-trash  bigger-120"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    /*文章-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type:"POST",
                url:"<?php echo url('delete'); ?>",
                dataType:"json",
                'data':{"id":id},
                success:function(data){
                    if(data.error == 0){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }
                }
            });
        });
    }


</script>
