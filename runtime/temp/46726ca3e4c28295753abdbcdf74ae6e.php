<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\index\index.html";i:1565925023;s:74:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\public\header.html";i:1505379532;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>网站后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <!--[if !IE]> -->
    <script src="__PUBLIC__/admin/js/jquery-1.9.1.min.js"></script>
    <!-- <![endif]-->
    <!--[if IE]>
    <script type="text/javascript">window.jQuery || document.write("<script src='__PUBLIC__/admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");</script>
    <![endif]-->
    <script type="text/javascript">
        if("ontouchend" in document) document.write("<script src='__PUBLIC__/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
    </script>
    <script src="__PUBLIC__/admin/assets/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/typeahead-bs2.min.js"></script>
    <!--[if lte IE 8]>
    <script src="__PUBLIC__/admin/assets/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="__PUBLIC__/admin/assets/js/ace-elements.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/ace.min.js"></script>
    <script src="__PUBLIC__/admin/assets/layer/layer.js" type="text/javascript"></script>
    <script src="__PUBLIC__/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            var cid = $('#nav_list> li>.submenu');
            cid.each(function(i){
                $(this).attr('id',"Sort_link_"+i);
            })
        })
        jQuery(document).ready(function(){
            $.each($(".submenu"),function(){
                var $aobjs=$(this).children("li");
                var rowCount=$aobjs.size();
                var divHeigth=$(this).height();
                $aobjs.height(divHeigth/rowCount);
            });
            //初始化宽度、高度

            $("#main-container").height($(window).height()-76);
            $("#iframe").height($(window).height()-140);

            $(".sidebar").height($(window).height()-99);
            var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
            $(".submenu").height();
            $("#nav_list").children(".submenu").css("height",thisHeight);

            //当文档窗口发生改变时 触发
            $(window).resize(function(){
                $("#main-container").height($(window).height()-76);
                $("#iframe").height($(window).height()-140);
                $(".sidebar").height($(window).height()-99);

                var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
                $(".submenu").height();
                $("#nav_list").children(".submenu").css("height",thisHeight);
            });
            $(document).on('click','.iframeurl',function(){
                var cid = $(this).attr("name");
                var cname = $(this).attr("title");
                $("#iframe").attr("src",cid).ready();
                $("#Bcrumbs").attr("href",cid).ready();
                $(".Current_page a").attr('href',cid).ready();
                $(".Current_page").attr('name',cid);
                $(".Current_page").html(cname).css({"color":"#333333","cursor":"default"}).ready();
                $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display","none").ready();
                $("#parentIfour").html(''). css("display","none").ready();
            });
        });
        /******/
        $(document).on('click','.link_cz > li',function(){
            $('.link_cz > li').removeClass('active');
            $(this).addClass('active');
        });
        /*********************点击事件*********************/
        $( document).ready(function(){
            $('#nav_list,.link_cz').find('li.home').on('click',function(){
                $('#nav_list,.link_cz').find('li.home').removeClass('active');
                $(this).addClass('active');
            });
        //时间设置
            function currentTime(){
                var d=new Date(),str='';
                str+=d.getFullYear()+'年';
                str+=d.getMonth() + 1+'月';
                str+=d.getDate()+'日';
                str+=d.getHours()+'时';
                str+=d.getMinutes()+'分';
                str+= d.getSeconds()+'秒';
                return str;
            }

            setInterval(function(){$('#time').html(currentTime)},1000);
//修改密码
            $('.change_Password').on('click', function(){
                layer.open({
                    type: 1,
                    title:'修改密码',
                    area: ['300px','300px'],
                    shadeClose: true,
                    content: $('#change_Pass'),
                    btn:['确认修改'],
                    yes:function(index, layero){
                        if ($("#password").val()==""){
                            layer.alert('原密码不能为空!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }
                        if ($("#Nes_pas").val()==""){
                            layer.alert('新密码不能为空!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }

                        if ($("#c_mew_pas").val()==""){
                            layer.alert('确认新密码不能为空!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }
                        if(!$("#c_mew_pas").val || $("#c_mew_pas").val() != $("#Nes_pas").val() )
                        {
                            layer.alert('密码不一致!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }
                        else{
                            layer.alert('修改成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                        }
                    }
                });
            });
            $('#Exit_system').on('click', function(){
                layer.confirm('是否确定退出系统？', {
                            btn: ['是','否'] ,//按钮
                            icon:2,
                        },
                        function(){
                            location.href="login.html";

                        });
            });
        });
        function link_operating(name,title){
            var cid = $(this).name;
            var cname = $(this).title;
            $("#iframe").attr("src",cid).ready();
            $("#Bcrumbs").attr("href",cid).ready();
            $(".Current_page a").attr('href',cid).ready();
            $(".Current_page").attr('name',cid);
            $(".Current_page").html(cname).css({"color":"#333333","cursor":"default"}).ready();
            $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display","none").ready();
            $("#parentIfour").html(''). css("display","none").ready();
        }
    </script>
</head>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <img src="__PUBLIC__/admin/images/logo.png" width="470px">
                </small>
            </a>
        </div>
        <div class="navbar-header operating pull-left"></div>
        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span  class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small><?php echo $go['username']; ?></span>
                        <i class="icon-caret-down"></i>
                    </a>
                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li><a href="javascript:void(0)" name="Systems.html" title="系统设置" class="iframeurl"><i class="icon-cog"></i>网站设置</a></li>
                        <li><a href="javascript:void(0)" name="<?php echo url('/admin/administrator/'); ?><?php echo \think\Session::get('uid'); ?>" title="个人信息" class="iframeurl"><i class="icon-user"></i>个人资料</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo url('Common/logout'); ?>" id="Exit_system"><i class="icon-off"></i>退出</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>
            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <a class="btn btn-success">
                        <i class="icon-signal"></i>
                    </a>

                    <a class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </a>

                    <a class="btn btn-warning">
                        <i class="icon-group"></i>
                    </a>

                    <a class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </a>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->
            <div id="menu_style" class="menu_style">
                <ul class="nav nav-list" id="nav_list">
                    <li class="home"><a href="javascript:void(0)" name="<?php echo url('/admin/index/home'); ?>" class="iframeurl" title=""><i class="icon-home"></i><span class="menu-text"> 系统首页 </span></a></li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-desktop"></i><span class="menu-text"> 信息管理 </span><b class="arrow icon-angle-down"></b></a>
                    <ul class="submenu">
                        <li class="home"><a href="javascript:void(0)" name="<?php echo url('Category/index'); ?>" title="分类信息"  class="iframeurl"><i class="icon-double-angle-right"></i>分类信息</a></li>
                        <li class="home"><a  href="javascript:void(0)" name="<?php echo url('Product/index'); ?>"  title="信息列表" class="iframeurl"><i class="icon-double-angle-right"></i>信息列表</a></li>
                    </ul>
                   </li>

<!--                    <li><a href="#" class="dropdown-toggle"><i class="icon-desktop"></i><span class="menu-text">热门推荐 </span><b class="arrow icon-angle-down"></b></a>-->
<!--                        <ul class="submenu">-->
<!--                            <li class="home"><a  href="javascript:void(0)" name="<?php echo url('Recommend/prolist'); ?>"  title="推荐信息" class="iframeurl"><i class="icon-double-angle-right"></i>推荐信息</a></li>-->
<!--                            <li class="home"><a  href="javascript:void(0)" name="<?php echo url('Recommend/index'); ?>"  title="信息列表" class="iframeurl"><i class="icon-double-angle-right"></i>信息列表</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <li><a href="#" class="dropdown-toggle"><i class="icon-bookmark"></i><span class="menu-text"> 企业介绍 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('Area/index'); ?>" title="单页面管理" class="iframeurl"><i class="icon-double-angle-right"></i>单页面管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 其他管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('Banner/index'); ?>" title="首页Banner"  class="iframeurl"><i class="icon-double-angle-right"></i>首页Banner</a></li>
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('Message/index'); ?>" title="加入我们"  class="iframeurl"><i class="icon-double-angle-right"></i>加入我们</a></li>
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('Order/index'); ?>" title="全部订单"  class="iframeurl"><i class="icon-double-angle-right"></i>全部订单</a></li>
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('Notice/index'); ?>" title="公告信息"  class="iframeurl"><i class="icon-double-angle-right"></i>公告信息</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-cogs"></i><span class="menu-text"> 系统管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('Systems/index'); ?>" title="系统设置" class="iframeurl"><i class="icon-double-angle-right"></i>系统设置</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle"><i class="icon-group"></i><span class="menu-text"> 管理员管理 </span><b class="arrow icon-angle-down"></b></a>
                        <ul class="submenu">
                            <li class="home"><a href="javascript:void(0)" name="<?php echo url('admin/index'); ?>" title="管理员列表" class="iframeurl"><i class="icon-double-angle-right"></i>管理员列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">
                $("#menu_style").niceScroll({
                    cursorcolor:"#888888",
                    cursoropacitymax:1,
                    touchbehavior:false,
                    cursorwidth:"5px",
                    cursorborder:"0",
                    cursorborderradius:"5px"
                });
            </script>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <div class="main-content">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>
            <div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="index.html">首页</a>
                    </li>
                    <li class="active"><span class="Current_page iframeurl"></span></li>
                    <li class="active" id="parentIframe"><span class="parentIframe iframeurl"></span></li>
                    <li class="active" id="parentIfour"><span class="parentIfour iframeurl"></span></li>
                </ul>
            </div>

            <iframe id="iframe" style="border:0; width:100%; background-color:#FFF;"name="iframe" frameborder="0" src="<?php echo url('/admin/index/home'); ?>">  </iframe>

        </div>

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!--底部样式-->
<div class="footer_style" id="footerstyle">
    <script type="text/javascript">try{ace.settings.check('footerstyle' , 'fixed')}catch(e){}</script>
    <p class="l_f"></p>
    <p class="r_f"></p>
</div>


