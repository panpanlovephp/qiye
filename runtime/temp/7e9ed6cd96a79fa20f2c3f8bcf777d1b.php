<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\order\index.html";i:1566110864;}*/ ?>

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
            <div class="article_list">
                <table class="table table-striped table-bordered table-hover" id="sample-table">
                    <thead>
                    <tr>
                        <th width="60">ID</th>
                        <th width="200px" align="center">订单号</th>
                        <th width="200px" align="center">分类名称</th>
                        <th width="200px" align="center">套餐名称</th>
                        <th width="200px" align="center">商品总价</th>
                        <th width="200px" align="center">支付方式</th>
                        <th width="200px" align="center">第三方支付方式</th>
                        <th width="200px" align="center">联系方式</th>
                        <th width="150px"   align="center">时间</th>
                        <th width="160px" align="center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <tr align="center">
                        <td><?php echo $v['id']; ?></td>
                        <td><?php echo $v['orderid']; ?></td>
                        <td><?php echo $v['cname']; ?></td>
                        <td><?php echo $v['pname']; ?></td>
                        <td><?php echo $v['sumprice']; ?></td>
                        <td><?php echo $v['payment']; ?></td>
                        <td><?php echo $v['paymethod']; ?></td>
                        <td><?php echo $v['contact']; ?></td>
                        <td><?php echo $v['time']; ?></td>
                        <td>[修改]|[删除]</td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr><td colspan="11"><?php echo $data->render();; ?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
