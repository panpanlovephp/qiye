<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:27:"./template/index\index.html";i:1565920968;s:24:"./template/user\top.html";i:1515751005;s:25:"./template/user\foot.html";i:1515751011;}*/ ?>
<!--<!DOCTYPE html>-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--  <title><?php echo $ls['web_name']; ?></title>-->
<!--  <meta name="description" content="<?php echo $ls['web_remark']; ?>" />-->
<!--  <meta name="keywords" content="<?php echo $ls['web_keyword']; ?>" />-->
<!--  <link href="__PUBLIC__/user/css/css_yy.css" rel="stylesheet" type="text/css" />-->
<!--  <script type="text/javascript" src="__PUBLIC__/user/js/jquery.js"></script>-->
<!--  &lt;!&ndash;<script type="text/javascript" src="js/banner_jq.js"></script>&ndash;&gt;-->
<!--  <script type="text/javascript" src="__PUBLIC__/user/js/jquery.yy.js"></script>-->
<!--  <script type="text/javascript" src="__PUBLIC__/user/js/common.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--<div id="header_bg">
    <div id="header">
        <div id="logo" class="float-lt"><a href="index.html"><img src="__PUBLIC__/user/images/shanghui_03.jpg" width="645" height="74"></a></div>
        <div class="top_rt">
            <div class="top_rfanh"><a href="<?php echo url('index'); ?>">返回首页</a><span>|</span><a href="<?php echo url('contact'); ?>">联系我们</a></div>
            <br/>
            <div class="top_sousuo">
                <input name="" type="text" class="sous_text">
                <input name="" type="button" class="sous_bot" value="搜索">
            </div>
        </div>
        <div class="spacer"></div>
    </div>
</div>-->

<!--<div class="indfooer_bg">
    <div class="wrap">
    </div>
</div>-->
<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/footer.css" />
  <link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.css" />
  <link rel="stylesheet" href="__PUBLIC__/home/css/index.css">
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
  <!-- <link rel="stylesheet" type="text/css" href="css/metahead.css"/> -->
</head>
<body>
<!-- 头部 -->
<div class="top-box" id="public_header">
  <div class="header" id="header">
    <div class="menu">
      <div class="toobar">
        <div class="menu-left001">
          <a href="#">我们提供优质的</a>
          <a href="#">美国主机、美国服务器、香港主机、香港服务器</a>
          <a href="#"> 租用服务</a>
        </div>
        <div class="menu-right001">
          <ul>
            <li><a href="#"><i class="layui-icon layui-icon-survey"></i>工单中心</a></li>
            <li><a href="#" onclick="login()"><i class="layui-icon layui-icon-friends"></i>登录</a></li>
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

<!-- index -->
<div class="index">
  <!-- 头部图片 -->
  <div class="topBground">
    <div class="topCenter ">
      <ul>
        <li>
          <div class="img box">
            <h1 class="text-write text-h1">美国主机</h1>
            <h2 class="text-color text-h2">快速，稳定，安全</h2>
            <div class="topList">
              <div class="list text-write">
                <div class="listItem">美国虚拟主机无限空间，流量</div>
                <div class="listItem">访问速度快，安全性高</div>
                <div class="listItem">灵活，易于使用控制面板</div>
                <div class="listItem">7*24小时中文技术支持</div>
                <div class="listItem">主机30天全额退款保证</div>
              </div>
              <div class="pic text-color">
                <div class="line1"><br></div>
                <div class="line2">$3.95/月</div>
                <div class="line3">起<br></div>
              </div>
              <div class="btn text-write bg-color ">开始订购</div>
            </div>
          </div>
        </li>
        <li>
          <div class="img2 box">
            <h1 class="text-write text-h1">CPANEL</h1>
            <h2 class="text-color text-h2">功能强大的美国主机管理面板</h2>
            <div class="topList">
              <div class="list text-write">
                <div class="listItem">Linux美国主机面板</div>
                <div class="listItem">强大的网站管理功能</div>
                <div class="listItem">友好的图形化界面</div>
                <div class="listItem">安全稳定可靠的面板</div>
                <div class="listItem">支持应用程序一键安装</div>
              </div>
              <div class="pic text-color">
                <div class="line1"><br></div>
                <div class="line2">$3.95/月</div>
                <div class="line3">起<br></div>
              </div>
              <div class="btn text-write bg-color">开始订购吧！</div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- 产品承诺 -->
  <div class="notice">
    <div class="noticeCenter">
      <h2>我们提供专业的美国主机服务器租用服务</h2>
      <p>HostEase美国主机商提供专业的美国虚拟主机，香港主机，美国服务器租用， 香港服务器租用服务。可以为个人，组织和企业提供多样化的主机解决方案，满足不同用户的需求。
        目前HostEase所有的虚拟主机套餐年付型都提供一个免费的国际域名，域名是基于主机免费的，只要您的主机一直使用，域名就一直免费。</p>
      <p>我们所有的主机方案承诺99.9%的在线时间保证，24/7/365的技术支持!如果您有任何主机相关问题，域名注册，域名转移等需要协助处理的，可以随时联系我们！</p>
    </div>
  </div>
  <!-- 产品列表 -->
  <div class="choseCard">
    <div class="cardAll">
      <h2>选择您喜欢的主机产品</h2>
      <ul class="cardList">
        <li class="cardItem">
          <div class="cardTitle">
            <h2>美国虚拟主机</h2>
          </div>
          <div class="cardPic">
            <div class="cardimg">
              <img src="__PUBLIC__/home/img/index/server-icon1.png" alt="">
            </div>
            <div class="cardText">
              <em>$</em>3.95<span>/月</span>
            </div>
          </div>
          <p class="importLine"></p>
          <ul class="cardDis">
            <li>2GB 磁盘空间</li>
            <li>20GB 带宽</li>
            <li>5个子域名</li>
            <li>cPanel/Plesk面板</li>
            <li>软件安装</li>
          </ul>
          <div class="cardGo">
            <a href="jacascript:;">更多</a>
            <a href="jacascript:;">订购</a>
          </div>
        </li>
        <li class="cardItem">
          <div class="cardTitle">
            <h2>美国虚拟主机</h2>
          </div>
          <div class="cardPic">
            <div class="cardimg">
              <img src="__PUBLIC__/home/img/index/server-icon1.png" alt="">
            </div>
            <div class="cardText">
              <em>$</em>3.95<span>/月</span>
            </div>
          </div>
          <p class="importLine"></p>
          <ul class="cardDis">
            <li>2GB 磁盘空间</li>
            <li>20GB 带宽</li>
            <li>5个子域名</li>
            <li>cPanel/Plesk面板</li>
            <li>软件安装</li>
          </ul>
          <div class="cardGo">
            <a href="jacascript:;">更多</a>
            <a href="jacascript:;">订购</a>
          </div>
        </li>
        <li class="cardItem">
          <div class="cardTitle">
            <h2>美国虚拟主机</h2>
          </div>
          <div class="cardPic">
            <div class="cardimg">
              <img src="__PUBLIC__/home/img/index/server-icon1.png" alt="">
            </div>
            <div class="cardText">
              <em>$</em>3.95<span>/月</span>
            </div>
          </div>
          <p class="importLine"></p>
          <ul class="cardDis">
            <li>2GB 磁盘空间</li>
            <li>20GB 带宽</li>
            <li>5个子域名</li>
            <li>cPanel/Plesk面板</li>
            <li>软件安装</li>
          </ul>
          <div class="cardGo">
            <a href="jacascript:;">更多</a>
            <a href="jacascript:;">订购</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- 产品描述 -->
  <div class="characteristic">
    <div class="describe">
      <div class="desTitle">
        <h2>主机特色</h2>
      </div>
      <ul class="desCrd">
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3>cPanel/Plesk控制面板</h3>
              <p>我们的美国主机、香港主机使用cPanel/Plesk控制面板，您可以轻松地管理您的web托管帐户，创建电子邮箱账户以及管理您的网站文件。</p>
            </div>
          </div>
        </li>
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3>cPanel/Plesk控制面板</h3>
              <p>我们的美国主机、香港主机使用cPanel/Plesk控制面板，您可以轻松地管理您的web托管帐户，创建电子邮箱账户以及管理您的网站文件。</p>
            </div>
          </div>
        </li>
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3>cPanel/Plesk控制面板</h3>
              <p>我们的美国主机、香港主机使用cPanel/Plesk控制面板，您可以轻松地管理您的web托管帐户，创建电子邮箱账户以及管理您的网站文件。</p>
            </div>
          </div>
        </li>
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3>cPanel/Plesk控制面板</h3>
              <p>我们的美国主机、香港主机使用cPanel/Plesk控制面板，您可以轻松地管理您的web托管帐户，创建电子邮箱账户以及管理您的网站文件。</p>
            </div>
          </div>
        </li>
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3>cPanel/Plesk控制面板</h3>
              <p>我们的美国主机、香港主机使用cPanel/Plesk控制面板，您可以轻松地管理您的web托管帐户，创建电子邮箱账户以及管理您的网站文件。</p>
            </div>
          </div>
        </li>
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3>cPanel/Plesk控制面板</h3>
              <p>我们的美国主机、香港主机使用cPanel/Plesk控制面板，您可以轻松地管理您的web托管帐户，创建电子邮箱账户以及管理您的网站文件。</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- 公用 -->
  <div class="public">
    <!-- 一键安装脚本 -->
    <div class="installFoot">
      <div class="boxAll">
        <h1>一键安装脚本</h1>
        <h2>一键安装无需自己添加代码</h2>
        <div class="boxImg">
          <img src="__PUBLIC__/home/img/index/scripts.png" alt="">
        </div>
      </div>
    </div>
    <!-- 选择我们 -->
    <div class="installChose">
      <div class="boxChose">
        <h1>为什么选择我们</h1>
        <h2>以下是选择我们的四大理由</h2>
        <ul class="choseList">
          <li class="choseItem">
            <img src="__PUBLIC__/home/img/index/whychooseus-1.png" alt="">
            <h4>专业主机商</h4>
            <p>十年主机服务器租用经验，多样化主机配置，满足用户的多样化需求，具有极高的性价比。</p>
          </li>
          <li class="choseItem">
            <img src="__PUBLIC__/home/img/index/whychooseus-1.png" alt="">
            <h4>专业主机商</h4>
            <p>十年主机服务器租用经验，多样化主机配置，满足用户的多样化需求，具有极高的性价比。</p>
          </li>
          <li class="choseItem">
            <img src="__PUBLIC__/home/img/index/whychooseus-1.png" alt="">
            <h4>专业主机商</h4>
            <p>十年主机服务器租用经验，多样化主机配置，满足用户的多样化需求，具有极高的性价比。</p>
          </li>
          <li class="choseItem">
            <img src="__PUBLIC__/home/img/index/whychooseus-1.png" alt="">
            <h4>专业主机商</h4>
            <p>十年主机服务器租用经验，多样化主机配置，满足用户的多样化需求，具有极高的性价比。</p>
          </li>
        </ul>
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
            <img src="__PUBLIC__/home/img/footer/logo.png" alt="">
          </a>
          <h4>&nbsp;&nbsp;&nbsp;Payments</h4>
          <a href="#">
            <img src="__PUBLIC__/home/img/footer/creditcards.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footerbar">
    <div class="footerbarinner">
      <ul class="row">
        <li class="col-md-4"><img src="__PUBLIC__/home/img/footer/footerbar1.png" alt=""><strong style="color: #fff">地址：</strong>311 E Valley
          Blvd #112 PMB26 San
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gabriel CA 91776</li>
        <li class="col-md-4"><img src="__PUBLIC__/home/img/footer/footerbar2.png" alt=""><strong style="color: #fff">电话：</strong> 联系我们请拨打电话 (美国)
          <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 (818) 301-5026</li>
        <li class="col-md-4"><img src="__PUBLIC__/home/img/footer/footerbar3.png" alt=""><strong style="color: #fff">邮件：</strong> 联系我们请发送邮件至 <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+1 (818) 301-5026</li>
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
