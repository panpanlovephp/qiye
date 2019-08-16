<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\product\index.html";i:1565933774;}*/ ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css"/>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome.min.css" />
    <link href="__PUBLIC__/admin/assets/css/codemirror.css" rel="stylesheet">
    <!--[if IE 7]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="__PUBLIC__/admin/assets/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/admin/assets/js/html5shiv.js"></script>
    <script src="__PUBLIC__/admin/assets/js/respond.min.js"></script>
    <![endif]-->
    <!--[if !IE]> -->
    <script src="__PUBLIC__/admin/assets/js/jquery.min.js"></script>
    <!-- <![endif]-->
    <script src="__PUBLIC__/admin/assets/dist/echarts.js"></script>
    <script src="__PUBLIC__/admin/assets/js/bootstrap.min.js"></script>
    <title>首页</title>
</head>

<body>
<div class="page-content clearfix">
    <div class="state-overview clearfix">
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="col-lg-3 col-sm-6">
            <section class="panel">
                <a href="<?php echo url('Product/prolist'); ?>?sid=<?php echo $vo['id']; ?>" title="<?php echo $vo['cat_name']; ?>">
                    <div class="symbol terques" style="background: #8057<?php echo $i; ?>1">
                        <?php echo $vo['cat_name']; ?>
                    </div>
                    <div class="value">
                        <p>点击管理</p>
                    </div>
                </a>
            </section>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</body>
</html>
