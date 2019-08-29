<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:28:"./template/server\index.html";i:1566982843;s:24:"./template/user\top.html";i:1566986666;s:25:"./template/user\foot.html";i:1566964098;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>HostEase香港服务器_新世界服务器_Telehouse服务器租用</title>
	<meta name="keywords" content="香港服务器,香港新世界服务器,香港Telehouse服务器" />
	<meta name="description" content="HostEase提供香港服务器，香港新世界服务器，香港Telehouse服务器租用服务，顶级香港数据中心，租用香港服务器首选HostEase。" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<span style="display: none;">.</span>
	<!-- <link rel="stylesheet" type="text/css" href="css/metahead.css"/> -->
	<link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/footer.css" />
	<link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.css" />
	<script type="text/javascript" src="__PUBLIC__/home/js/header/header.js"></script>
	<link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.css" />
	<script src="__PUBLIC__/home/js/index/jquery.min.js"></script>
	<script src="__PUBLIC__/home/js/index/popper.min.js"></script>
	<script src="__PUBLIC__/home/js/index/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/header.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/zhuce.css" />
	<link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.min.css">
	<script type="text/javascript" src="__PUBLIC__/home/js/header/header.js"></script>
	<script type="text/javascript" src="__PUBLIC__/home/lib/layui/layui.all.js"></script>
	<script src="__PUBLIC__/home/js/footer/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/home/css/te.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="google-site-verification" content="_Or6A7XoosUq6foFmJXMXNfkF1tRnFeaw42ZgYBjydU" />
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/home/css/re.css" />
<body>
<!-- 头部	 -->

<!-- 头部	 -->
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
                <li class="layui-nav-item" style="margin-left:50px;"> <a class="dinggou" href="http://127.0.0.3/user.php/Virtual/index/id/9">订购</a></li>
            </ul>
        </div>
    </div>
    <div class="hr-box">
        <hr class="layui-bg-gray">
    </div>
</div>

<!-- 主体 -->
<div class="subbanner" style="background:url(__PUBLIC__/home/img/background-subpage.jpg)">
	<div class="inner">
		<h1><?php echo $title; ?></h1>
		<span><a href="/">主页</a> > <a href="#"><?php echo $title; ?></a></span>
		<div class="clear">&nbsp;</div>
	</div>
</div>

</div>

<div class="domainspacer">&nbsp;</div>

<article>

	<div class="article-inner">

		<ul class="navsub">
			<?php if(is_array($label) || $label instanceof \think\Collection || $label instanceof \think\Paginator): $i = 0; $__LIST__ = $label;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<li><a href="#"><?php echo $v; ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

		<div class="clear">&nbsp;</div>
		<div class="highlightbox" id="overview">
			<p><?php echo $content; ?></p>
		</div>
	</div>

	<div class="planscontainer">

		<div class="article-inner">

			<h2 class="center" id="plans">选择您的<?php echo $title; ?>套餐</h2>
			<div class="featureboxes">
				<!--第一个产品-->
				<?php if(is_array($b) || $b instanceof \think\Collection || $b instanceof \think\Paginator): $num = 0; $__LIST__ = $b;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($num % 2 );++$num;?>
				<div class="box box1 wow animated bounceInLeft" style="width:31%;">
					<div class="popular" style="display:block;"></div>

					<div class="title">
						<h2 class="server1"><?php echo $v['packname']; ?></h2>
					</div>
					<div class="extension">
						<div class="inner">
							<p class="center"><img src="__PUBLIC__/home/img/server-icon1.png" alt="双 L5640" class="img-respond" />
							</p>
							<div class="pricing">
								<em>$</em><?php echo $v['price']; ?><span>/月</span> </div>

						</div>
					</div>

					<p><?php echo $v['packInfo']; ?></p>

					<ul>
						<?php if(is_array($v['packVal']) || $v['packVal'] instanceof \think\Collection || $v['packVal'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['packVal'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
						<li><?php echo $vv; ?></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>

					<p class="buttons">
						<a href="http://127.0.0.3/user.php/ServerList/index" class="button1 color1">详情</a>
						<a href="http://127.0.0.3/user.php/Serverconfig/index/packname/<?php echo $v['packname']; ?>" class="button1 color2" type="submit">订购</a>
				</div>
                 <?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="clear">&nbsp;</div>
			</div>
		</div>

		<div class="featuregridcontainer">

			<div class="featuregrid">
				<h2><?php echo $title; ?>特色</h2>

				<?php if(is_array($c) || $c instanceof \think\Collection || $c instanceof \think\Paginator): $i = 0; $__LIST__ = $c;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<div class="col col1 wow animated bounceInLeft" style="width:31%;">
					<div class="padding">
						<div class="contents" style="background:url(__PUBLIC__/home/img/featuresgrid-icon1.png) left top no-repeat;height:120px;" alt="HostEase香港服务器租用操作系统">
							<h3><?php echo $v['serTitle']; ?></h3>
							<p><?php echo $v['serText']; ?></p>
						</div>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>

				<div class="clear">&nbsp;</div>

			</div>

		</div>


	</div>

	<div class="featuregridcontainer">
		<div class="clear"> </div>

	</div>

	</div>


	</div>

	<div class="scriptscontainer">

		<div class="scripts">

			<div class="titleblock">
				<h2>一键安装脚本!</h2>
				<h3>一键安装无需自己添加代码.</h3>
			</div>

			<img src="__PUBLIC__/home/img/scripts.png" alt="香港独立服务器安装应用程序" class="img-respond img-scripts" />

		</div>

	</div>

	<div class="clear">&nbsp;</div>


	<div class="whychooseuscontainer">

		<div class="whychooseus">

			<div class="titleblock">
				<h2>为什么选择我们</h2>
				<h3>以下是选择我们的四大理由</h3>
			</div>

			<div class="block block1 wow animated fadeInLeft">
				<img src="__PUBLIC__/home/img/whychooseus-1.png" alt="香港服务器租用" class="img-respond img-whychooseus" />
				<div class="title">专业主机商</div>
				<div class="desc">全球知名数据中心托管，快速安全稳定，承诺99.9%在线率，兼容性强，多脚本支持。</div>
			</div>

			<div class="block block2 wow animated fadeInUp">
				<img src="__PUBLIC__/home/img/whychooseus-2.png" alt="香港服务器性能" class="img-respond img-whychooseus" />
				<div class="title">服务器性能</div>
				<div class="desc">全球知名数据中心托管，快速安全稳定，承诺99.9%在线率，兼容性强，多脚本支持。</div>
			</div>

			<div class="block block3 wow animated fadeInDown">
				<img src="__PUBLIC__/home/img/whychooseus-3.png" alt="退款保证" class="img-respond img-whychooseus" />
				<div class="title">30天退款保证</div>
				<div class="desc">如果您认定我们的非月付主机尚未达到您的标准，自购买之日30天内均可申请全额退款。</div>
			</div>

			<div class="block block4 wow animated fadeInRight">
				<img src="__PUBLIC__/home/img/whychooseus-4.png" alt="技术支持" class="img-respond img-whychooseus" />
				<div class="title">技术支持</div>
				<div class="desc">专业的技术团队，拥有丰富的运维经验，7*24小时在线技术支持，第一时间解决客户问题。</div>
			</div>

			<div class="clear">&nbsp;</div>

		</div>


	</div>

	<div class="columngrid">

		<div class="left">

			<h2>香港服务器常见问题</h2>

			<p>以下是我们最受欢迎的问题的答案.</p>

			<div class="faq-container">
				<section class="faq">
					<h3>我买的香港服务器在哪个机房？</h3>
					<div class="answer">
						<p>我们提供的香港独立服务器在香港新世界机房和TeleHouse机房，您在租用时可以选择对应的机房即可。</p>
					</div>
				</section>

				<section class="faq">
					<h3>香港独立服务器安装的是什么操作系统？</h3>
					<div class="answer">
						<p>我们的每台香港服务器支持Linux和Windows操作系统安装，您可以根据您的习惯选择合适的操作系统。</p>
					</div>
				</section>

				<section class="faq">
					<h3>我享受怎样的独立服务器访问权限？</h3>
					<div class="answer">
						<p>您拥有完全的根管理权限，意味着您对您的服务器拥有完全的管理控制。您可以选择安装任何软件，并可以完全管理您的服务器。</p>
					</div>
				</section>

				<section class="faq">
					<h3>租用的香港独立服务器多长时间可以交付使用？</h3>
					<div class="answer">
						<p>专有的配置系统能够在几分钟内完成您服务器的设置工作，确保您可以立即访问您的服务器。</p>
					</div>
				</section>

			</div>

		</div>

		<div class="right">

			<h2>客户评价</h2>

			<p>看看我们的客户都说些什么吧.</p>


			<div class="testimonials">

				<div class="testimonial">
					<div class="speech">
						<div class="inner">
							<p>HostEase香港独立服务器的速度真的很快，有利于我在亚洲开展外贸业务。</p>
						</div>
						<div class="iconbottom">&nbsp;</div>
					</div>
					<div class="author" style="background: url(__PUBLIC__/home/img/testimonial1.png) left top no-repeat;">
						<strong>Jane Goodman</strong></div>
				</div>

			</div>

			<div class="clear">&nbsp;</div>

		</div>

		<div class="clear">&nbsp;</div>

	</div>

</article>

<div class="partners">
	<div class="inner"><img src="__PUBLIC__/home/img/partners.png" alt="your company name partners"
							class="img-respond img-partners" /></div>
</div>

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
<script src="lib/layui/layui.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/header.js"></script>
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
<a href="#0" class="cd-top">&nbsp;</a>
</body>
</html>