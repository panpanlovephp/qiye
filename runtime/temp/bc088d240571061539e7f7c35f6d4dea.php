<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\admin\index.html";i:1505467744;}*/ ?>

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
    <title>文章管理</title>
</head>
<body>
<div class="page-content clearfix">
    <div class="administrator">
        <div class="d_Confirm_Order_style">
            <div class="search_style">
            </div>
            <!--操作-->
            <div class="border clearfix">
               <span class="l_f">
                   <a href="<?php echo url('Admin/add'); ?>"  title="添加" id="add_page" class="btn btn-warning"><i class="fa fa-plus"></i> 添加管理员</a>
                </span>
             </div>
            <!--管理员列表-->
            <div class="clearfix administrator_style">
                <div class="table_menu_list" style="width: 98%">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th align="center" width="60">id</th>
                            <th align="center">用户名</th>
                            <th align="center">职位</th>
                            <th>最后登录时间</th>
                            <th>最后登陆IP</th>
                            <th align="center" width="160">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <tr align="center" id="tr_<?php echo $v['id']; ?>">
                            <td><?php echo $v['id']; ?></td>
                            <td><?php echo $v['username']; ?></td>
                            <td><?php if($v['id'] == 1): ?>总管理员<?php endif; ?></td>
                            <td><?php echo getTime($v['lasttime']); ?></td>
                            <td><?php echo $v['lastip']; ?></td>
                            <td>
                                <!--<?php if($v['id'] == 1): ?>-->
                                <!--<a class="btn btn-w-m btn-info" href="<?php echo url('setauth',['id'=>$v['id']]); ?>">权限</a>-->
                                <!--<?php endif; ?>-->
                                <a class="btn btn-w-m btn-info" href="<?php echo url('password',['id'=>$v['id']]); ?>">修改</a>
                                <a class="btn btn-w-m btn-danger" onClick="confirm_delete()" href="<?php echo url('delete',['id'=>$v['id']]); ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
