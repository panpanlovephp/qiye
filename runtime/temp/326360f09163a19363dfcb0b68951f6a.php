<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\index\home.html";i:1565510768;}*/ ?>

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
    <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
        <i class="icon-ok green"></i>欢迎使用<strong class="green">鑫佰发后台管理系统</strong>,你上次登陆时间为<?php echo date("Y-m-d H:i:s",$go['lasttime']); ?>，登陆IP:<?php echo $go['lastip']; ?>.
    </div>
    <!--实时交易记录-->
    <div class="clearfix">
        <div class="Order_Statistics ">
            <div class="title_name">系统信息</div>
            <table class="table table-bordered">
                <tbody>
                    <?php if(is_array($server_info) || $server_info instanceof \think\Collection || $server_info instanceof \think\Paginator): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr><td class="name"><?php echo $key; ?>：</td><td class="munber"><a><?php echo $vo; ?></a></td></tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--记录-->
    <div class="clearfix">
        <div class="home_btn">
            <div>
                <a href="<?php echo url('Systems/index'); ?>"  title="系统设置" class="btn  btn-info btn-sm no-radius">
                    <i class="bigger-200"><img src="__PUBLIC__/admin/images/xtsz.png" /></i>
                    <h5 class="margin-top">系统设置</h5>
                </a>
                <a href="<?php echo url('Product/add'); ?>?sid=6"  title="添加产品" class="btn  btn-info btn-sm no-radius">
                    <i class="bigger-200"><img src="__PUBLIC__/admin/images/icon-addp.png" /></i>
                    <h5 class="margin-top">添加产品</h5>
                </a>
                <a href="<?php echo url('Category/index'); ?>"  title="信息分类" class="btn  btn-primary btn-sm no-radius">
                    <i class="bigger-200"><img src="__PUBLIC__/admin/images/icon-cpgl.png" /></i>
                    <h5 class="margin-top">信息分类</h5>
                </a>
                <a href="<?php echo url('Area/add'); ?>"  title="添加文章" class="btn  btn-info btn-sm no-radius">
                    <i class="bigger-200"><img src="__PUBLIC__/admin/images/icon-addwz.png" /></i>
                    <h5 class="margin-top">添加文章</h5>
                </a>
            </div>
        </div>

    </div>

</div>
</body>
</html>
<script type="text/javascript">
    //面包屑返回值
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.iframeAuto(index);
    $('.no-radius').on('click', function(){
        var cname = $(this).attr("title");
        var chref = $(this).attr("href");
        var cnames = parent.$('.Current_page').html();
        var herf = parent.$("#iframe").attr("src");
        parent.$('#parentIframe').html(cname);
        parent.$('#iframe').attr("src",chref).ready();;
        parent.$('#parentIframe').css("display","inline-block");
        parent.$('.Current_page').attr({"name":herf,"href":"javascript:void(0)"}).css({"color":"#4c8fbd","cursor":"pointer"});
        parent.layer.close(index);

    });
    $(document).ready(function(){

        $(".t_Record").width($(window).width()-640);
        //当文档窗口发生改变时 触发
        $(window).resize(function(){
            $(".t_Record").width($(window).width()-640);
        });
    });


</script>