<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:29:"./template/company\index.html";i:1566811108;s:24:"./template/user\top.html";i:1567048206;s:25:"./template/user\foot.html";i:1566964098;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/header.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/zhuce.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/company.css" />
    <script type="text/javascript" src="__PUBLIC__/home/js/header/header.js"></script>
    <script type="text/javascript" src="__PUBLIC__/home/lib/layui/layui.all.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/metahead.css"/> -->
    <link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.min.css">
    <script src="__PUBLIC__/home/js/footer/bootstrap.min.js"></script>
    <style>
        * {
            list-style: none;
            margin: 0;
            outline: none;
            padding: 0;
        }

        footer {
            width: 100%;
            clear: both;
            font-size: 1.2em;
            color: #9ca0b4;
        }

        .footerinner {
            background-color: #242738;
            padding: 35px 0 35px 0;
        }

        .footercontent {
            margin: 0 auto;
            max-width: 1250px;
            width: 90%;
        }

        .col-md-3 {
            border-right: 1px solid gray
        }

        h4 {
            margin: 0 0 10px 0;
            padding: 0 0 10px 0;
            color: #fffefe;
            font-size: 1.7em;
            text-shadow: none;
            text-transform: none;
        }

        a {
            padding: 3px 0 3px 20px;
            line-height: 27px;
            text-decoration: none;
            display: block;
            color: #9ca0b4;
        }

        .footerbar {
            background: #1C1F2D;
            margin: 0 0 0px 0;
            padding: 30px 0;
        }

        .footerbarinner {
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
            background-color: #242738;
        }

        .copyrightinner {
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
    <!-- 头部 -->
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
                        <?php if($id == null): ?>
                        <li><a href="http://127.0.0.3/user.php/Login/index"><i class="layui-icon layui-icon-friends"></i>登录</a></li>
                        <?php else: ?>
                        <li><a href="#"><i class="layui-icon layui-icon-friends"></i><?php echo $username; ?>,欢迎您</a></li>
                        <li><a href="http://127.0.0.3/user.php/Login/logout">退出</a></a></li>
                        <?php endif; ?>
                        <li><a href="http://127.0.0.3/user.php/Myorder/index/"><i class="layui-icon layui-icon-password"></i>客户中心</a></li>
                        <li><a href="#"><i class="layui-icon layui-icon-home"></i>English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab" id="tab">
        <div class="logo">
            <img src="__PUBLIC__/home/img/header/logo.png" />
        </div>
        <div class="tabbar-box">
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item"><a class="index-icon" href=""><i class="layui-icon layui-icon-home"></i></a></li>
                <?php if(is_array($cateTree) || $cateTree instanceof \think\Collection || $cateTree instanceof \think\Paginator): $i = 0; $__LIST__ = $cateTree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="layui-nav-item">
                    <a href="<?php echo $vo['lian']['lian']; ?>"><?php echo $vo['parent_name']['cat_name']; ?></a>

                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <?php if(is_array($vo['sname']) || $vo['sname'] instanceof \think\Collection || $vo['sname'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sname'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <dd><a href="<?php echo $v['lian']; ?>"><?php echo $v['cat_name']; ?></a></dd>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </dl>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <li class="layui-nav-item" style="margin-left:50px;"><a class="dinggou" href="http://127.0.0.3/user.php/Virtual/index/id/9">订购</a></li>
            </ul>
        </div>
    </div>
    <div class="hr-box">
        <hr class="layui-bg-gray">
    </div>
</div>
    <!-- <div id="public_header"></div> -->
    <div class="login-tit">
        <span><?php echo $title; ?></span>
    </div>


    <!-- 主体 -->

    <div class="company-main">
        <div class="company-main-box">
            <div class="company-main-left">
                <div class="company-txt" style="text-align:left;padding:0 10px;">
                    <p><?php echo $content; ?></p>
                </div>
                <div class="company-txt2">
                    <div class="company-txt2-1">
                        <div class="yu">
                            <span>免费域名服务</span>
                        </div>
                        <p>当您购买年付及以上的虚拟主机套餐时，我们将提供一个免费注册/免费转移的域名。主机使用期间域名将享受永久免费。</p>
                        <div class="yu">
                            <span>免费域名服务</span>
                        </div>
                        <p>当您购买年付及以上的虚拟主机套餐时，我们将提供一个免费注册/免费转移的域名。主机使用期间域名将享受永久免费。</p>
                    </div>
                    <div class="company-img">
                        <img src="__PUBLIC__/home/img/header/loginbg.jpg" />
                    </div>
                </div>
                <?php if(is_array($text) || $text instanceof \think\Collection || $text instanceof \think\Paginator): $i = 0; $__LIST__ = $text;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <div class="company-txt3">
                    <div class="mu">
                        <span><?php echo $v['comTitle']; ?></span>
                    </div>
                    <p><?php echo $v['comText']; ?></p>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="company-main-right">
                <div class="main-right">
                    <div class="main-right-box">
                        <div class="mright-box-tit">
                            <span>为什么选择我们?</span>
                        </div>
                        <div class="mright-box-txt">
                            <p>你应该选择我们的首要原因.</p>
                        </div>
                        <div class="mright-box-txt">
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                        </div>
                    </div>
                    <div class="main-right-box">
                        <div class="mright-box-tit">
                            <span>为什么选择我们?</span>
                        </div>
                        <div class="mright-box-txt">
                            <p>你应该选择我们的首要原因.</p>
                        </div>
                        <div class="mright-box-txt">
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                        </div>
                    </div>
                    <div class="main-right-box">
                        <div class="mright-box-tit">
                            <span>为什么选择我们?</span>
                        </div>
                        <div class="mright-box-txt">
                            <p>你应该选择我们的首要原因.</p>
                        </div>
                        <div class="mright-box-txt">
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                            <img src="__PUBLIC__/home/img/header/checkmark.png" /><span>&nbsp;我们对自己的工作充满激情</span><br />
                        </div>
                    </div>
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
                    <h4>主机</h4>
                    <ul>
                        <li><a href="#">美国Linux主机</a></li>
                        <li><a href="#">美国Windows主机</a></li>
                        <li><a href="#">香港Linux主机</a></li>
                        <li><a href="#">香港Windows主机</a></li>
                    </ul>
                    <h4>服务器</h4>
                    <ul>
                        <li><a href="#">美国服务器</a></li>
                        <li><a href="#">香港服务器</a></li>
                        <li><a href="#">高防服务器</a></li>
                        <li><a href="#">站群服务器</a></li>
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
                    <h4></h4>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <h4>特别促销</h4>
                    <ul>
                        <li><a href="#">选择我们</a></li>
                        <li><a href="#">客户评价</a></li>
                        <li><a href="#">客户公告</a></li>
                    </ul>
                    <h4></h4>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" style="border-right: 0px">
                <div class="inner">
                    <a href="#">
                        <img src="__PUBLIC__/home/img/logo.png" alt="">
                    </a>
                    <h4>Payments</h4>
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

    <script src="__PUBLIC__/home/lib/layui/layui.js"></script>
    <script type="text/javascript" src="__PUBLIC__/home/js/header/jquery.js"></script>
    <script src="__PUBLIC__/home/js/header/header.js"></script>
    <script>
        //注意：导航 依赖 element 模块，否则无法进行功能性操作
        layui.use('element', function () {
            var element = layui.element;
        });
        //form表单
        layui.use('form', function () {
            var form = layui.form;

            //监听提交
            form.on('submit(formDemo)', function (data) {
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
    </script>
</body>

</html>