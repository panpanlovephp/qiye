<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:34:"./template/serverconfig\index.html";i:1566892957;s:24:"./template/user\top.html";i:1566897160;s:25:"./template/user\foot.html";i:1566964098;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="__PUBLIC__/home/css/serveConfigure.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/header.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/footer.css" />
	<link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
	<link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.min.css">
	<script src="__PUBLIC__/home/js/footer/bootstrap.min.js"></script>
	<script src="__PUBLIC__/home/js/index/jquery.min.js"></script>
	<script src="__PUBLIC__/home/js/index/popper.min.js"></script>
	<script src="__PUBLIC__/home/js/index/bootstrap.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/home/js/header/header.js"></script>
	<script type="text/javascript" src="__PUBLIC__/home/lib/layui/layui.all.js"></script>
	<title>Document</title>
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
                        <li><a href="#"><i class="layui-icon layui-icon-password"></i>客户中心</a></li>
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
</header>
<div class="cofgAll">
	<div class="cofg">
		<div class="cofgTitle">
			<h2>产品配置</h2>
			<p>您所选择的产品有以下配置供您选择:</p>
			<form action="http://127.0.0.3/user.php/Cart/index" method="POST">
				<input type="hidden"  name ="uid" value="<?php echo $uid; ?>"/>
				<input type="hidden"  name ="packname" value="<?php echo $packname; ?>"/>
				<h4 class="titleImp">产品/服务</h4>
				<div class="product">
					<strong> - 【20% OFF】<?php echo $packname; ?></strong><br />
					CPU : E5-2623 V4 @ 2.6G 4核 8线<br>
					内存：8G/16G RAM <br>
					磁盘：1T HDD <br>
					IP数量：2 IPs <br>
					5M独享带宽<br>
					【20% OFF】优惠码： HKN20<br>
					活动期间，如优惠价格存在异常，请直接与在线客服或提交工单形式予以反馈调整。<br>
				</div>
				<h4 class="titleImp">订单付款周期</h4>
				<div class="product">
					<select name="price">
						<option value="月付价格 - $258.00 USD">月付价格 - $258.00 USD</option>
						<option value="季度付月价格 - $258.00 USD">季度付月价格 - $258.00 USD</option>
						<option value="半年付月价格 - $258.00 USD">半年付月价格 - $258.00 USD</option>
						<option value="年付月价格 - $258.00 USD">年付月价格 - $258.00 USD</option>
					</select>
				</div>
			<h4 class="titleImp">可配置选项</h4>
			<p>您可以选择以下选项自定义该产品/服务的订单</p>
			<div class="choseCofg">
				<table class="choseTab">
					<tr>
						<td class="fieldlabel">操作系统:</td>
						<td><select name="operating">
							<option value="CentOS 7" selected="selected">CentOS 7</option>
							<option value="CentOS 6">CentOS 6</option>
							<option value=">Windows Server 2012 R2 Standard Trial">Windows Server 2012 R2 Standard Trial</option>
							<option value="Ubuntu 16.04 LTS">Ubuntu 16.04 LTS</option>
							<option value="Ubuntu 18.04 LTS">Ubuntu 18.04 LTS</option>
						</select>
						</td>
					</tr>
					<tr>
						<td class="fieldlabel">内存::</td>
						<td><select name="memory">
							<option value="8GB DDR3(included)" selected="selected">8GB DDR3(included)</option>
							<option value="16GB DDR3(8G more) $10.00 USD">16GB DDR3(8G more) $10.00 USD</option>
						</select>
						</td>
					</tr>
					<tr>
						<td class="fieldlabel">磁盘空间:</td>
						<td><select name="diskspace">
							<option value="1T HDD" selected="selected">1T HDD</option>
						</select>
						</td>
					</tr>
					<tr>
						<td class="fieldlabel">带宽:</td>
						<td><select name="band">
							<option value="5M独享带宽" selected="selected">5M独享带宽</option>
						</select>
						</td>
					</tr>
					<tr>
						<td class="fieldlabel">IPs:</td>
						<td><select name="ips">
							<option value="2 IPs" selected="selected">2 IPs</option>
							<option value="8 IPs $15.00 USD">8 IPs $15.00 USD</option>
							<option value="64 IPs $155.00 USD">64 IPs $155.00 USD</option>
							<option value="128 IPs (限时促销) $60.00 USD">128 IPs (限时促销) $60.00 USD</option>
						</select>
						</td>
					</tr>
				</table>
			</div>
			<button type="submit" class="btnImp">添加到購物車</button>
			</form>
		</div>
	</div>
</div>
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
</body>
</html>
