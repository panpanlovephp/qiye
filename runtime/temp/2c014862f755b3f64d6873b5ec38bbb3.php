<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"./template/register\index.html";i:1566554385;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/header.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/zhuce.css" />
    <script type="text/javascript" src="__PUBLIC__/home/js/header.js"></script>
    <script type="text/javascript" src="__PUBLIC__/home/lib/layui/layui.all.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/metahead.css"/> -->
    <link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.min.css">
    <script src="__PUBLIC__/home/js/bootstrap.min.js"></script>
    <style>
        *{
            list-style: none;
            margin: 0;
            outline: none;
            padding: 0;
        }
        footer{
            width: 100%;
            clear: both;
            font-size: 1.2em;
            color: #9ca0b4;
        }
        .footerinner{
            background-color:#242738;
            padding: 35px 0 35px 0;
        }
        .footercontent{
            margin: 0 auto;
            max-width: 1250px;
            width: 90%;
        }
        .col-md-3{
            border-right: 1px solid gray
        }
        h4{
            margin: 0 0 10px 0;
            padding: 0 0 10px 0;
            color: #fffefe;
            font-size: 1.7em;
            text-shadow: none;
            text-transform: none;
        }
        a{
            padding: 3px 0 3px 20px;
            line-height: 27px;
            text-decoration: none;
            display: block;
            color: #9ca0b4;
        }
        .footerbar{
            background: #1C1F2D;
            margin: 0 0 0px 0;
            padding: 30px 0;
        }
        .footerbarinner{
            margin: 0 auto;
            max-width: 1250px;
            width: 90%;
        }
        .footer>.footerbar>ul>li {
            float: left;
            width: 33.33%;
            padding: 0 20px;
            line-height: 1.2em;
            padding-left: 70px;
            min-height: 52px;
            display: block;
        }
        .copyright {
            line-height: 1.7em;
            font-size: 0.8em;
            padding: 25px 0 30px 0;
            clear: both;
            background-color:#242738;
        }
        .copyrightinner{
            margin: 0 auto;
            max-width: 1250px;
            width: 90%;
        }
        .footer .copyright p {
            line-height: 1;
            margin: 0;
            text-align: center;
        }
        .footer .copyright a {
            padding: 0 10px;
            border-left: #777 1px solid;
            line-height: 1.7em;
            color: #9ca0b4;
            text-decoration: underline;
        }
        .copyright p {
            line-height: 1;
            margin: 0;
            text-align: center;
        }

    </style>
</head>
<body>
<div class="top-box" id="public_header">
    <div class="header" id="header">
        <div class="menu">
            <div class="toobar">
                <div class="menu-left">
                    <a href="#">我们提供优质的</a>
                    <a href="#">美国主机、美国服务器、香港主机、香港服务器</a>
                    <a href="#"> 租用服务</a>
                </div>
                <div class="menu-right">
                    <ul>
                        <li><a href="#"><i class="layui-icon layui-icon-survey"></i>工单中心</a></li>
                        <li onclick="login()"><a href="http://127.0.0.3/user.php/Login/index" onclick="login()"><i class="layui-icon layui-icon-friends"></i>登录</a></li>
                        <li><a href="#"><i class="layui-icon layui-icon-password"></i>客户中心</a></li>
                        <li><a href="#"><i class="layui-icon layui-icon-home"></i>English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab" id="tab">
        <div class="logo">
            <img src="__PUBLIC__/home/img/logo.png" />
        </div>
        <div class="tabbar-box">
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item"> <a class="index-icon" href=""><i class="layui-icon layui-icon-home"></i></a> </li>
                <li class="layui-nav-item">
                    <a href="">域名</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="">域名注册</a></dd>
                        <dd><a href="">转移域名</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="Virtual Host.html">虚拟主机</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="">美国Windows主机</a></dd>
                        <dd><a href="">美国Linux主机</a></dd>
                        <dd><a href="">香港windows主机</a></dd>
                        <dd><a href="">香港Linux主机</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="">独立服务器</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="">美国服务器</a></dd>
                        <dd><a href="">香港服务器</a></dd>
                        <dd><a href="">高防服务器</a></dd>
                        <dd><a href="">站群服务器</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item" style="margin-left: 50px;"> <a class="dinggou" href=""><i class="layui-icon layui-icon-rate-solid"></i>订购</a>
                </li>
            </ul>
        </div>
        <div class="tabbar-box2" style="display: none;">
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item"> <a class="index-icon" href=""></a> </li>
                <li class="layui-nav-item">
                    <a href="">域名</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="">域名注册</a></dd>
                        <dd><a href="">转移域名</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="">虚拟主机</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="">美国Windows主机</a></dd>
                        <dd><a href="">美国Linux主机</a></dd>
                        <dd><a href="">香港windows主机</a></dd>
                        <dd><a href="">香港Linux主机</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="">独立服务器</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="">美国服务器</a></dd>
                        <dd><a href="">香港服务器</a></dd>
                        <dd><a href="">高防服务器</a></dd>
                        <dd><a href="">站群服务器</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item" style="margin-left: 50px;"> <a class="dinggou" href="">订购</a> </li>
            </ul>
        </div>
    </div>
    <div class="hr-box">
        <hr class="layui-bg-gray">
    </div>
</div>
<!-- <div id="public_header"></div> -->
<div class="login-tit">
    <span>注册</span>
</div>
<div class="login-main">
    <div class="zhanwei">&nbsp;</div>
    <div class="login_tab">
        <ul class="layui-nav layui-bg" lay-filter="">
            <li class="layui-nav-item"><a href="">家</a></li>
            <li class="layui-nav-item">
                <a href="">商店</a>
                <!-- 二级菜单 -->
                <dl class="layui-nav-child">
                    <dd><a href="">Browse All</a></dd>
                    <dd><a href="">Browse All</a></dd>
                    <dd><a href="">Browse All</a></dd>
                    <dd><a href="">Browse All</a></dd>
                    <dd><a href="">Browse All</a></dd>
                    <dd><a href="">Browse All</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">通告</a></li>
            <li class="layui-nav-item"><a href="javascript:;">知识库</a></li>
            <li class="layui-nav-item"><a href="">网络状态</a></li>
            <li class="layui-nav-item"><a href="">关联公司</a></li>
            <li class="layui-nav-item"><a href="">联系我们</a></li>
        </ul>
        <script>
            //注意：导航 依赖 element 模块，否则无法进行功能性操作
            layui.use('element', function() {
                var element = layui.element;
            });
        </script>
    </div>
    <!-- 注册表单 -->
    <div class="login-formbox">
        <div class="login-formbox_box">
            <div class="layui-collapse">
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title"><i class="layui-icon layui-icon-username"></i>&nbsp;已经登记了？</h2>
                    <div class="layui-colla-content layui-show">
                        <p>已经在我们这里注册？如果是这样，请点击下面的按钮登录我们的客户区域，您可以从那里管理您的帐户。</p>
                    </div>
                    <div class="layui-colla-content layui-show">
                        <a href="http://127.0.0.3/user.php/Login/index" onclick="login()"><i class="layui-icon layui-icon-cellphone"></i>&nbsp;登录</a>
                    </div>
                    <div class="layui-colla-content layui-show">
                        <a href=""><i class="layui-icon layui-icon-cellphone"></i>&nbsp;丢失密码重置</a>
                    </div>
                </div>
            </div>
            <div class="formbox_box_item1">
                <form class="layui-form" method="post"  action="http://127.0.0.3/user.php/Register/check">
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off"
                                   class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">请输入6位以上数字字母混合密码</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">确认密码</label>
                        <div class="layui-input-inline">
                            <input type="password" name="repassword" required lay-verify="required" placeholder="请输入密码" autocomplete="off"
                                   class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn layui-bg" type="submit">立即提交</button>
                            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 尾部 -->
<footer>
    <div class="footerinner">
        <div class="footercontent row">
            <div class="col-md-3">
                <div class="inner" style="list-style:none">
                    <h4>服务</h4>
                    <ul>
                        <li><a href="#">美国Linux主机</a></li>
                        <li><a href="#">美国Windows主机</a></li>
                        <li><a href="#">香港Linux主机</a></li>
                        <li><a href="#">香港Windows主机</a></li>
                        <li><a href="#">美国服务器</a></li>
                        <li><a href="#">香港服务器</a></li>
                        <li><a href="#">高防服务器</a></li>
                        <li><a href="#">站群服务器</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <h4>域名</h4>
                    <ul>
                        <li><a href="#">域名注册</a></li>
                        <li><a href="#">转移域名</a></li>
                    </ul>
                    <h4>支持</h4>
                    <ul>
                        <li><a href="#">学院文章</a></li>
                        <li><a href="#">提交工单</a></li>
                        <li><a href="#">知识库</a></li>
                        <li><a href="#">中文博客</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <h4>公司</h4>
                    <ul>
                        <li><a href="#">选择我们</a></li>
                        <li><a href="#">客户评价</a></li>
                        <li><a href="#">客户公告</a></li>
                    </ul>
                    <h4>佣金</h4>
                    <ul>
                        <li><a href="#">网站联盟</a></li>
                        <li><a href="#">联盟注册</a></li>
                        <li><a href="#">联盟入口</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" style="border-right: 0px">
                <div class="inner">
                    <a href="#">
                        <img src="__PUBLIC__/home/img/logo.png" alt="">
                    </a>
                    <h4>&nbsp;&nbsp;&nbsp;Payments</h4>
                    <a href="#">
                        <img src="__PUBLIC__/home/img/creditcards.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footerbar">
        <div class="footerbarinner">
            <ul class="row">
                <li class="col-md-4"><img src="__PUBLIC__/home/img/footerbar1.png" alt=""><strong style="color: #fff">地址：</strong>311 E Valley Blvd #112 PMB26 San &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gabriel CA 91776</li>
                <li class="col-md-4"><img src="__PUBLIC__/home/img/footerbar2.png" alt=""><strong style="color: #fff">电话：</strong> 联系我们请拨打电话 (美国)  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 (818) 301-5026</li>
                <li class="col-md-4"><img src="__PUBLIC__/home/img/footerbar3.png" alt=""><strong style="color: #fff">邮件：</strong> 联系我们请发送邮件至 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 (818) 301-5026</li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <div class="coryrightinner ">
            <p>
                HostEase.com LLC. © 2008 - 2018&nbsp;|&nbsp;隐私&nbsp;|&nbsp;隐私政策
            </p>
        </div>
    </div>
</footer>


<script src="lib/layui/layui.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/header.js"></script>
<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function() {
        var element = layui.element;
    });
    //form表单
    layui.use('form', function() {
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function(data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>
</body>
</html>
