<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\admin\password.html";i:1505483430;}*/ ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="__PUBLIC__/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css"/>
    <link href="__PUBLIC__/admin/assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/font/css/font-awesome.min.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="__PUBLIC__/admin/js/jquery-1.9.1.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/typeahead-bs2.min.js"></script>
    <script src="__PUBLIC__/admin/js/lrtk.js" type="text/javascript" ></script>
    <script src="__PUBLIC__/admin/assets/js/jquery.dataTables.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
    <script src="__PUBLIC__/admin/assets/layer/layer.js" type="text/javascript" ></script>
    <script src="__PUBLIC__/admin/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="__PUBLIC__/admin/js/H-ui.js" type="text/javascript"></script>
    <script src="__PUBLIC__/admin/js/displayPart.js" type="text/javascript"></script>
    <script charset="utf-8" src="__PUBLIC__/kd/kindeditor-all-min.js"></script>
    <script charset="utf-8" src="__PUBLIC__/kd/lang/zh_CN.js"></script>
    <link href="__PUBLIC__/admin/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/admin/Widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="__PUBLIC__/admin/Widget/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/admin/Widget/webuploader/0.1.5/webuploader.min.js"></script>
    <script src="__PUBLIC__/admin/js/lrtk.js" type="text/javascript" ></script>
    <title>文章管理</title>
</head>
<body>
<div class="clearfix" style="width: 100%">
    <div class="page_right_style" style="width: 100%">
        <div class="type_title">添加管理员</div>
                <form action="<?php echo url('Admin/password'); ?>" class="form form-horizontal" method="post" id="form-article-add" name="myform">
                    <div class="clearfix cl">
                        <label class="form-label col-2"><span class="c-red">*</span>用户名：</label>
                        <div class="formControls col-10">
                            <span><?php echo $data['username']; ?></span>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2"><span class="c-red">*</span>原密码：</label>
                        <div class="formControls col-10">
                            <input type="password" class="input-text" placeholder="请填写密码" name="password"></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2"><span class="c-red">*</span>新密码：</label>
                        <div class="formControls col-10">
                            <input type="password" class="input-text" placeholder="请填写密码" name="password_n"></div>
                    </div>
                    <div class="clearfix cl">
                        <label class="form-label col-2"><span class="c-red">*</span>新密码：</label>
                        <div class="formControls col-10">
                            <input type="password" class="input-text" placeholder="请再次填写密码" name="password_r"></div>
                    </div>
                    <div class="clearfix cl">
                        <div class="Button_operation">
                            <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="icon-save "></i>保存</button>
                            <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</body>
</html>
