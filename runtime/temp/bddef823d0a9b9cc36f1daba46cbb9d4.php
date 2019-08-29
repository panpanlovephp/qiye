<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:26:"./template/cart\index.html";i:1566985912;s:24:"./template/user\top.html";i:1566986666;s:25:"./template/user\foot.html";i:1566964098;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="__PUBLIC__/home/css/car.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/header.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/footer.css" />
    <link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/lib/layui/css/layui.css" />
    <link rel="stylesheet" href="__PUBLIC__/home/css/bootstrap.min.css">
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script src="__PUBLIC__/home/js/footer/bootstrap.min.js"></script>
    <script src="__PUBLIC__/home/js/index/jquery.min.js"></script>
    <script src="__PUBLIC__/home/js/index/popper.min.js"></script>
    <script src="__PUBLIC__/home/js/index/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/home/js/header/header.js"></script>
    <script type="text/javascript" src="__PUBLIC__/home/lib/layui/layui.all.js"></script>
    <link rel="stylesheet" href="__PUBLIC__/home/css/pay.css">
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
</header>

<div class="car">
    <div class="carBox">
        <h1>订单概况</h1>
        <form action="">
            <table class="data">
                <tr>
                    <th>描述</th>
                    <th>价格</th>
                </tr>

                <?php if(is_array($cartInfo) || $cartInfo instanceof \think\Collection || $cartInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $cartInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td class="textLeft">
                        <strong><em>HongKong Dedicated Server</em> - 【20% OFF】<?php echo $v['packname']; ?></strong><br />
                        &nbsp;&raquo; Operating System: <?php echo $v['operating']; ?><br />
                        &nbsp;&raquo; Additional RAM:: <?php echo $v['memory']; ?><br/>
                        &nbsp;&raquo; 磁盘空间: <?php echo $v['diskspace']; ?><br />
                        &nbsp;&raquo; 带宽: <?php echo $v['band']; ?><br />
                        &nbsp;&raquo; IPs: <?php echo $v['ips']; ?><br />
                    </td>
                    <td>
                        <strong><?php echo $v['price']; ?></strong>
                    </td>
                </tr>
                <tr class="cofg">
                    <td class="importA">
                        <a href="">[编辑购物车产品配置]</a>
                        <a href="" onclick="clearOne(<?php echo $v['id']; ?>)">[删除]</a>
                    </td>
                    <td></td>
                </tr>
                <tr class="sum colorText">
                    <td>小计：</td>
                    <td>$258.00 USD</td>
                </tr>
                <tr class="payFor colorText">
                    <td>今日应付总额：</td>
                    <td>$258.00 USD</td>
                </tr>
                <tr class="renew colorText">
                    <td>续费金额：</td>
                    <td>$258.00 USD 月付</td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
        <div class="goBuy">
            <button onclick="clearAll(<?php echo $v['uid']; ?>)">清空购物车</button>
            <button onclick="window.location.href='http://127.0.0.3/user.php/Virtual/index/id/9'">继续购物</button>
            <button id="payfor">结账</button>
        </div>
    </div>
    <div class="bigbak" id="big" style="display:none;">
        <div class="pay-for w">
            <h3>付款方式</h3>
        </div>
        <div class="w ali">
            <p class="ali-l"><input type="radio"> PayPal</p>
            <p><input type="radio"> 支付宝（Alipay)</p>
        </div>
        <div class="pay-for w">
            <h3>备注/附加信息</h3>
        </div>
        <div class="can">
            <input type="text" value="您可以输入任何附加信息以及包括您的订单内的其他信息...">
        </div>
        <div class="fu w">
            <p><input type="checkbox"> 我已阅读并同意 <a href="#">服务条款</a></p>
        </div>
        <div class="okay">
            <a href="http://127.0.0.3/user.php/Shop/index">订单完成</a>
        </div>
        <div class="w thie">
            该订单表格的安全环境可以防止您当前IP地址的欺诈行为：（<span>1.86.242.213</span>）感谢您的使用！
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
    layui.use('element', function(){
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

    function Toast(msg,duration){
        duration=isNaN(duration)?3000:duration;
        var m = document.createElement('div');
        m.innerHTML = msg;
        m.style.cssText="width:10%; min-width:150px; background:#000000; opacity:0.7; height:40px; color:#fff; line-height:40px; text-align:center; border-radius:5px; position:fixed; top:30%; left:20%; z-index:999999; font-weight:bold;";
        document.body.appendChild(m);
        setTimeout(function() {
            var d = 0.5;
            m.style.webkitTransition = '-webkit-transform ' + d + 's ease-in, opacity ' + d + 's ease-in';
            m.style.opacity = '0';
            setTimeout(function() { document.body.removeChild(m) }, d * 1000);
        }, duration);
    }
    function clearOne(id){
        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: 'http://127.0.0.3/user.php/Cart/clearOne',
            data:{"id":id},
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert(XMLHttpRequest.status);
                // alert(XMLHttpRequest.readyState);
                // alert(textStatus);
            },
            success: function(result){
                Toast(result,10000);
            }
        });
    }
    function clearAll(uid){
        if(uid){
          if(confirm('确定要清空购物车吗？')){
              $.ajax({
                  dataType: 'json',
                  type: 'POST',
                  url: 'http://127.0.0.3/user.php/Cart/clearAll',
                  data:{"uid":uid},
                  error: function(XMLHttpRequest, textStatus, errorThrown) {
                      //alert(XMLHttpRequest.status);
                      // alert(XMLHttpRequest.readyState);
                      // alert(textStatus);
                  },
                  success: function(result){
                      Toast(result,10000);
                      if(result.indexof("删除成功,刷新试试！")){

                      }
                  }
              });
            }
        }
    }
    $(document).ready(function(e) {
        $("#payfor").click(function(e) {
            $("#big").show();
        });
    });
</script>
</body>
</html>
