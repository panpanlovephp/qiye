<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\login\login.html";i:1561075122;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link href="__PUBLIC__/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="__PUBLIC__/admin/assets/js/ace-extra.min.js"></script>
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/admin/assets/js/html5shiv.js"></script>
    <script src="__PUBLIC__/admin/assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="__PUBLIC__/admin/js/jquery-1.9.1.min.js"></script>
    <script src="__PUBLIC__/admin/assets/layer/layer.js" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/css/main.css"/>
    <script type="text/javascript" src="__PUBLIC__/admin/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/admin/js/common.js"></script>
    <script charset="utf-8" src="__PUBLIC__/kd/kindeditor-all-min.js"></script>
    <script charset="utf-8" src="__PUBLIC__/kd/lang/zh_CN.js"></script>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/admin/uploadify/uploadify.css"/>
    <script type="text/javascript" src="__PUBLIC__/admin/uploadify/jquery.uploadify.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/laydate/laydate.js"></script>
    <style>
        .sidebar-wrap{
            position: absolute;
            top:0;
            bottom: 0;
            /*background-color: #1A1A1A;*/
        }
    </style>
</head>
<body class="login-layout Reg_log_style">
<div class="logintop">
    <span>欢迎后台管理界面平台</span>
    <ul>
        <li><a href="#">返回首页</a></li>
        <li><a href="#">帮助</a></li>
        <li><a href="#">关于</a></li>
    </ul>
</div>
<div class="loginbody">
    <div class="login-container">
        <div class="center">
            <!--<img src="__PUBLIC__/admin/images/logo.png" />-->
        </div>

        <div class="space-6"></div>

        <div class="position-relative">
            <div id="login-box" class="login-box widget-box no-border visible">
                <div class="widget-body">
                    <div class="widget-main">
                        <h4 class="header blue lighter bigger">
                            <i class="icon-coffee green"></i>
                            管理员登陆
                        </h4>

                        <div class="login_icon"><img src="__PUBLIC__/admin/images/login.png" /></div>

                        <form action="<?php echo url('Login/check'); ?>" method="POST">
                            <fieldset>
                                <ul>
                                    <li class="frame_style form_error"><label class="user_icon"></label><input name="username" title="用户名" type="text" id="username"/><i>用户名</i></li>
                                    <li class="frame_style form_error"><label class="password_icon"></label><input name="password" title="密码" type="password"  id="userpwd"/><i>密码</i></li>
                                    <li class="frame_style form_error"><label class="Codes_icon"></label><input name="code" type="text" title="验证码" id="Codes_text"/><i>验证码</i>
                                        <div class="Codes_region">
                                            <img src="/api.php/code/index.html" alt="captcha" title="看不清？点击刷新" style="display:inline; width:79px; height:38px; float:left;cursor:pointer;" onclick="this.src=this.src+'?'" />
                                        </div>
                                    </li>
                                </ul>
                                <div class="space"></div>

                                <div class="clearfix">

                                    <button type="submit" class="width-35 pull-right btn btn-sm btn-primary" id="login_btn">
                                        <i class="icon-key"></i>登陆</button>
                                </div>

                                <div class="space-4"></div>
                            </fieldset>
                        </form>

                        <div class="social-or-login center">
                            <span class="bigger-110">通知</span>
                        </div>

                        <div class="social-login center">
                            本网站系统不再对IE8以下浏览器支持，请见谅。
                        </div>
                    </div><!-- /widget-main -->

                    <div class="toolbar clearfix">



                    </div>
                </div><!-- /widget-body -->
            </div><!-- /login-box -->
        </div><!-- /position-relative -->
    </div>
</div>
<div class="loginbm">版权所有  2017  <a href=""></a> </div><strong></strong>
</body>
<script>
    $('#login_btn').on('click', function(){
        var num=0;
        var str="";
        $("input[type$='text'],input[type$='password']").each(function(n){
            if($(this).val()=="")
            {

                layer.alert(str+=""+$(this).attr("title")+"不能为空！\r\n",{
                    title: '提示框',
                    icon:0,
                });
                num++;
                return false;
            }
        });

    });
    $(document).ready(function(){
        $("input[type='text'],input[type='password']").blur(function(){
            var $el = $(this);
            var $parent = $el.parent();
            $parent.attr('class','frame_style').removeClass(' form_error');
            if($el.val()==''){
                $parent.attr('class','frame_style').addClass(' form_error');
            }
        });
        $("input[type='text'],input[type='password']").focus(function(){
            var $el = $(this);
            var $parent = $el.parent();
            $parent.attr('class','frame_style').removeClass(' form_errors');
            if($el.val()==''){
                $parent.attr('class','frame_style').addClass(' form_errors');
            } else{
                $parent.attr('class','frame_style').removeClass(' form_errors');
            }
        });
    })

</script>
