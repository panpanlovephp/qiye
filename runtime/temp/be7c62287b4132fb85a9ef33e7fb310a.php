<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:27:"./template/index\index.html";i:1566983806;s:24:"./template/user\top.html";i:1567048607;s:25:"./template/user\foot.html";i:1566964098;}*/ ?>
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
                        <li><a href="http://127.0.0.3/user.php/Myorder/index"><i class="layui-icon layui-icon-password"></i>客户中心</a></li>
                        <?php endif; if($id == ''): ?>
                        <li><a href="#"><i class="layui-icon layui-icon-password"></i>客户中心</a></li>
                        <?php endif; ?>
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
<!-- index -->
<div class="index">
  <!-- 头部图片 -->
  <div class="topBground">
    <div class="topCenter container hidden-xs">
      <ul>
        <?php if(is_array($recommend) || $recommend instanceof \think\Collection || $recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <li class="row">
          <div class="img box">
            <h1 class="text-write text-h1"><?php echo $v['title']; ?></h1>
            <h2 class="text-color text-h2"><?php echo $v['remark']; ?></h2>
            <div class="topList row">
              <div class="list text-write">
                <?php if(is_array($v) || $v instanceof \think\Collection || $v instanceof \think\Paginator): $i = 0; $__LIST__ = $v;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;if(is_array($vv) || $vv instanceof \think\Collection || $vv instanceof \think\Paginator): $i = 0; $__LIST__ = $vv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?>
                <div class="listItem"><?php echo $vvv; ?></div>
                  <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
              </div>
              <div class="pic text-color hidden-sm">
                <div class="line1"><br></div>
                <div class="line2">$3.95/月</div>
                <div class="line3">起<br></div>
              </div>
              <div class="btn text-write bg-color ">开始订购</div>
            </div>
          </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <!-- 产品承诺 -->
  <?php if(is_array($host) || $host instanceof \think\Collection || $host instanceof \think\Paginator): $i = 0; $__LIST__ = $host;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  <div class="notice">
    <div class="noticeCenter">
      <h2><?php echo $vo['title']; ?></h2>
      <?php if(is_array($content) || $content instanceof \think\Collection || $content instanceof \think\Paginator): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <p><?php echo $v; ?></p>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  <!-- 产品列表 -->
  <div class="choseCard">
    <div class="cardAll">
      <h2><?php echo $title; ?></h2>
      <ul class="cardList">
        <?php if(is_array($hostInfo) || $hostInfo instanceof \think\Collection || $hostInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $hostInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="cardItem">
          <div class="cardTitle">
            <h2><?php echo $vo['remark']; ?></h2>
          </div>
          <div class="cardPic">
            <div class="cardimg">
              <img src="__PUBLIC__/home/img/index/server-icon1.png" alt="">
            </div>
            <div class="cardText">
              <em>$</em><?php echo $vo['price']; ?><span>/月</span>
            </div>
          </div>
          <p class="importLine"></p>
          <ul class="cardDis">
            <?php if(is_array($vo['content']) || $vo['content'] instanceof \think\Collection || $vo['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <li><?php echo $v; ?></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
          <div class="cardGo">
            <a href="jacascript:;">更多</a>
            <a href="jacascript:;">订购</a>
          </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <!-- 产品描述 -->
  <div class="characteristic">
    <div class="describe">
      <div class="desTitle">
        <h2><?php echo $feaTitle; ?></h2>
      </div>
      <ul class="desCrd">
        <?php if(is_array($hostFea) || $hostFea instanceof \think\Collection || $hostFea instanceof \think\Paginator): $i = 0; $__LIST__ = $hostFea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <li class="desCrdItem">
          <div class="itemList">
            <div class="itemImg">
              <h3><?php echo $v['remark']; ?></h3>
              <p><?php echo $v['content']; ?></p>
            </div>
          </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
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
            <img src="__PUBLIC__/home/img/index/whychooseus-2.png" alt="">
            <h4>服务器性能</h4>
            <p>全球知名数据中心托管，快速安全稳定，乘诺99.9%在线率，兼容性强，多脚本支持。</p>
          </li>
          <li class="choseItem">
            <img src="__PUBLIC__/home/img/index/whychooseus-3.png" alt="">
            <h4>30天退款保证</h4>
            <p>如果您认定我们的非月付主机尚未达到您的标准，自购买之日30天内可申请全额退款。</p>
          </li>
          <li class="choseItem">
            <img src="__PUBLIC__/home/img/index/whychooseus-4.png" alt="">
            <h4>技术支持</h4>
            <p>专业的技术团队，拥有丰富的运维经验，7*24小时在线技术支持，第一时间解决客户问题。</p>
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
