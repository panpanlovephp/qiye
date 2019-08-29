<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:32:"./template/serverlist\index.html";i:1566791587;s:24:"./template/user\top.html";i:1566986666;s:25:"./template/user\foot.html";i:1566964098;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>HostEase香港服务器_新世界服务器_Telehouse服务器租用</title>
	<meta name="keywords" content="香港服务器,香港新世界服务器,香港Telehouse服务器" />
	<meta name="description" content="HostEase提供香港服务器，香港新世界服务器，香港Telehouse服务器租用服务，顶级香港数据中心，租用香港服务器首选HostEase。" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<span style="display: none;">.</span>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/footer.css" />
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
		<h1>香港服务器</h1>
		<span><a href="/">主页</a> > <a href="#">香港服务器</a></span>
		<div class="clear">&nbsp;</div>
	</div>
</div>

</div>

<div class="domainspacer">&nbsp;</div>

<article>

	<div class="article-inner">

		<ul class="navsub">
			<li><a href="#">浏览</a></li>
			<li><a href="#">套餐</a></li>
			<li><a href="#">特征</a></li>
		</ul>

		<div class="clear">&nbsp;</div>

		<div class="highlightbox" id="overview">

			<p>HostEase香港服务器位于香港新世界机房，以及HKColo.NET数据中心中最顶级的Telehouse机房，针对中国大陆用户特别推出，经过的网络节点更少，比美国服务器拥有更低ping值，带给您极速访问，比快更快！HostEase香港服务器同样避开了国内网站需要备案的烦恼，让您在更快速的基础上，更省心做网站。快来加入我们，HostEase香港服务器全新配置、流畅运行、安全保障、无忧管理，至尊享受，更快更省心，带给您极致体验！。 </p>


		</div>

	</div>





	<div class="planscontainer">

		<div class="article-inner">

			<h2 class="center" id="plans">选择您需要的服务器配置</h2>

			<div class="pricingtable pricingtable6">

				<div class="block-features wow animated bounceInRight">

					<div class="title">
						<h2>Main Information</h2>
					</div>

					<div class="desc">
						<p>&nbsp;</p>
					</div>


					<div class="featureslist">
						<ul>
							<li>CPU型号</li>					<li>内存</li>						<li>磁盘</li>	     	<li>带宽/流量</li>	  		<li>IP</li>
						</ul>
					</div>


					<div class="button">
						&nbsp;
					</div>

					<div class="showdiv" id="full-comparison">


						<div class="subtitle">
							<h3>Plan Comparison</h3>
						</div>

						<div class="featureslist">
							<ul>
								<li>CPU</li>					<li>内存</li>						<li>磁盘</li>	     	<li>带宽/流量</li>	  		<li>IP</li>		<li>价格</li>
							</ul>
						</div>

						<div class="button">
							&nbsp;
						</div>


					</div><!-- .showdiv -->
				</div><!-- .block-features -->

				<!--- 第一个产品 --->

				<div class="block box1 wow animated bounceInLeft">
					<div class="popular"></div>

					<div class="title">
						<h2>L5630/L5640 X2</h2>
					</div>

					<div class="desc">
						<p>香港新世界机房</p>
					</div>


					<div class="featureslist">
						<ul>
							<li class="overfeat">CPU</li>           <li>L5630/L5640 X2</li>
							<li class="overfeat">内存</li>          <li>24G RAM</li>
							<li class="overfeat">硬盘</li>          <li>1T HDD Storage</li>
							<li class="overfeat">带宽/流量</li>     <li>5M/无限流量</li>
							<li class="overfeat">ip</li>            <li>2个免费独立ip </li>
							<li class="overfeat">价格</li>          <li>$109/月 </li>

						</ul>
					</div>


					<div class="button">
						<a href="http://127.0.0.3/user.php/Serverconfig/index" class="button1 color2">订购</a>
					</div>

				</div><!-- .block -->



				<!--- 第二个产品 --->

				<div class="block box2 wow animated bounceInLeft highlight">
					<div class="popular"></div>

					<div class="title">
						<h2>E5-2603 V4</h2>
					</div>

					<div class="desc">
						<p>香港新世界机房</p>
					</div>


					<div class="featureslist">
						<ul>
							<li class="overfeat">CPU</li>           <li>E5-2603 V4</li>
							<li class="overfeat">内存</li>          <li>8GB/16G RAM</li>
							<li class="overfeat">硬盘</li>          <li>1TB HDD Storage</li>
							<li class="overfeat">带宽/流量</li>     <li>5M/无限流量</li>
							<li class="overfeat">ip</li>            <li>2个免费独立ip</li>
							<li class="overfeat">价格</li>          <li>$219/月 </li>


						</ul>
					</div>


					<div class="button">
						<a href="#" class="button1 color2">订购</a>
					</div>
				</div><!-- .block -->


				<!--- 第三个产品 --->

				<div class="block box3 wow animated bounceInLeft">
					<div class="popular"></div>

					<div class="title">
						<h2>E5-2623 V4<h2>
					</div>

					<div class="desc">
						<p>香港新世界机房</p>
					</div>


					<div class="featureslist">
						<ul>
							<li class="overfeat">CPU</li>           <li>E5-2623 V4</li>
							<li class="overfeat">内存</li>          <li>8G/16G RAM</li>
							<li class="overfeat">硬盘</li>          <li>1TB HDD Storage</li>
							<li class="overfeat">带宽/流量</li>     <li>5M/无限流量</li>
							<li class="overfeat">ip</li>            <li>2个免费独立ip </li>
							<li class="overfeat">价格</li>          <li>$258/月 </li>


						</ul>
					</div>


					<div class="button">
						<a href="#" class="button1 color2">订购</a>
					</div>
				</div>


				<!--- 第四个产品 --->

				<div class="block box4 wow animated bounceInLeft" >
					<div class="popular"></div>

					<div class="title">
						<h2>I3-4170 3.7GHZ<h2>
					</div>

					<div class="desc">
						<p>香港新世界机房</p>
					</div>


					<div class="featureslist">
						<ul>
							<li class="overfeat">CPU</li>           <li>I3-4170 3.7GHz</li>
							<li class="overfeat">内存</li>          <li>16GB RAM </li>
							<li class="overfeat">硬盘</li>          <li>1TB HDD Storage</li>
							<li class="overfeat">带宽/流量</li>     <li>5M/无限流量</li>
							<li class="overfeat">ip</li>            <li>2个免费独立ip </li>
							<li class="overfeat">价格</li>          <li>$119/月 </li>


						</ul>
					</div>


					<div class="button">
						<a href="#" class="button1 color2">订购</a>
					</div>
				</div>


				<!--- 第五个产品 --->

				<div class="block box5 wow animated bounceInLeft highlight" >
					<div class="popular"></div>

					<div class="title">
						<h2>E3-1220v3</h2>
					</div>

					<div class="desc">
						<p>Telehouse数据中心</p>
					</div>


					<div class="featureslist">
						<ul>
							<li class="overfeat">CPU</li>           <li>E3-1220v3 Linux系统</li>
							<li class="overfeat">内存</li>          <li>6G RAM </li>
							<li class="overfeat">硬盘</li>          <li>1TB HDD Storage</li>
							<li class="overfeat">带宽/流量</li>     <li>5M/无限流量</li>
							<li class="overfeat">ip</li>            <li>2个免费独立ip</li>
							<li class="overfeat">价格</li>          <li>$135/月 </li>

						</ul>
					</div>


					<div class="button">
						<a href="#" class="button1 color2">订购</a>
					</div>
				</div>


				<!--- 第六个产品 --->

				<div class="block box6 wow animated bounceInLeft nomarginright">
					<div class="popular"></div>


					<div class="title">
						<h2>E3-1265v3</h2>
					</div>

					<div class="desc">
						<p>Telehouse数据中心</p>
					</div>


					<div class="featureslist">
						<ul>
							<li class="overfeat">CPU</li>           <li>E3-1265v3 windwos系统</li>
							<li class="overfeat">内存</li>          <li>8G RAM </li>
							<li class="overfeat">硬盘</li>          <li>1TB HDD Storage</li>
							<li class="overfeat">带宽/流量</li>     <li>5M/无限流量</li>
							<li class="overfeat">ip</li>            <li>2个免费独立ip</li>
							<li class="overfeat">价格</li>          <li>$199/月 </li>
						</ul>
					</div>


					<div class="button">
						<a href="#" class="button1 color2">订购</a>
					</div>
				</div>




				<div class="cleartable">&nbsp;</div>

			</div>
		</div>

	</div>


	<div class="featuregridcontainer">

		<div class="featuregrid">
			<h2>香港服务器特色</h2>

			<div class="col col1 wow animated bounceInLeft">
				<div class="padding">
					<div class="contents" style="background: url(__PUBLIC__/home/img/featuresgrid-icon1.png) left top no-repeat;">
						<h3>操作系统</h3>
						<p>我们提供Linux、Windows等多操作系统供您选择，可以实现计算机硬件与软件的直接控制，并进行管理协调。</p>
					</div>
				</div>
			</div>

			<div class="col col2 wow animated bounceInDown">
				<div class="padding">
					<div class="contents" style="background: url(__PUBLIC__/home/img/featuresgrid-icon2.png) left top no-repeat;">
						<h3>控制面板</h3>
						<p>我们的香港服务器提供可选的cPanel/WHM控制面板，客户即使通过网页也可以轻松管理账号。使用cPanel/WHM软件，轻松开展主机业务。</p>
					</div>
				</div>
			</div>

			<div class="col col3 wow animated bounceInRight">
				<div class="padding">
					<div class="contents" style="background: url(__PUBLIC__/home/img/featuresgrid-icon3.png) left top no-repeat;">
						<h3>99.9%在线率</h3>
						<p>我们所有的香港独立服务器位于知名的香港数据中心，集成多条国际线路，让客户享受极致的速度和稳定性。</p>
					</div>
				</div>
			</div>

			<div class="col col4 wow animated bounceInLeft">
				<div class="padding">
					<div class="contents" style="background: url(__PUBLIC__/home/img/featuresgrid-icon4.png) left top no-repeat;">
						<h3>环境搭建</h3>
						<p>根据您的需要免费为您搭建服务器环境，比如LAMP，IIS，FTP等，为您充分提供了基础运维下的环境预实现，让您建站省时又高效。</p>
					</div>
				</div>
			</div>

			<div class="col col5 wow animated bounceInDown">
				<div class="padding">
					<div class="contents" style="background: url(__PUBLIC__/home/img/featuresgrid-icon5.png) left top no-repeat;">
						<h3>数据中心</h3>
						<p>我们的独立服务器位于香港新世界机房、香港Telehouse机房，中国大陆访问速度快。 24/7全天候监控，确保所有服务器的运行和安全。</p>
					</div>
				</div>
			</div>

			<div class="col col6 wow animated bounceInRight">
				<div class="padding">
					<div class="contents" style="background: url(__PUBLIC__/home/img/featuresgrid-icon6.png) left top no-repeat;">
						<h3>奖项</h3>
						<p>我们已经赢得了一系列著名的奖项，作为一个可靠的网络主机供应商，提供高质量的服务和高水平的支持。</p>
					</div>
				</div>
			</div>

			<div class="clear">&nbsp;</div>

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
					<div class="speech"><div class="inner"><p>HostEase香港独立服务器的速度真的很快，有利于我在亚洲开展外贸业务。</p></div><div class="iconbottom">&nbsp;</div></div>
					<div class="author" style="background: url(__PUBLIC__/home/img/testimonial1.png) left top no-repeat;"><strong>Jane Goodman</strong></div>
				</div>

			</div>

			<div class="clear">&nbsp;</div>

		</div>

		<div class="clear">&nbsp;</div>

	</div>

</article>

<div class="partners"><div class="inner"><img src="__PUBLIC__/home/img/partners.png" alt="your company name partners" class="img-respond img-partners" /></div></div>

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
<script type="text/javascript" src="__PUBLIC__/home/js/jquery.js"></script>
<script src="__PUBLIC__/home/js/header.js"></script>
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
<a href="#0" class="cd-top">&nbsp;</a>
</body>
</html>