<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\systems\index.html";i:1505485188;}*/ ?>

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
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="__PUBLIC__/admin/js/jquery-1.9.1.min.js"></script>
    <!--<script src="__PUBLIC__/admin/assets/js/bootstrap.min.js"></script>-->
    <title>系统设置</title>

</head>

<body>
<div class="margin clearfix">
    <div class="stystems_style">
        <div class="tabbable">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active">
                    <a data-toggle="tab" href="#home"><i class="green fa fa-home bigger-110"></i>&nbsp;基本设置</a></li>
            </ul>
            <form action="<?php echo url('Systems/index'); ?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
            <div class="tab-content">
                <div id="home" class="tab-pane active">
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right" ><i>*</i>网站名称 </label>
                        <div class="col-sm-9"><input type="text" name="web_name" placeholder="控制在25个字、50个字节以内" value="<?php echo $ls['web_name']; ?>" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right"><i>*</i>关键词： </label>
                        <div class="col-sm-9"><input type="text" name="web_keyword" placeholder="5个左右,8汉字以内,用'|'隔开" value="<?php echo $ls['web_keyword']; ?>" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right"><i>*</i>网站描述： </label>
                        <div class="col-sm-9"><input type="text" name="web_remark" placeholder="控制在80个汉字，160个字符以内" value="<?php echo $ls['web_remark']; ?>" class="col-xs-10"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right"><i>*</i>联系人： </label>
                        <div class="col-sm-9"><input type="text" name="web_man" placeholder="网站联系人" value="<?php echo $ls['web_man']; ?>" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right"><i>*</i>联系电话： </label>
                        <div class="col-sm-9"><input type="text" name="web_tel" placeholder="网站联系人电话号码" value="<?php echo $ls['web_tel']; ?>" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right"><i>*</i>备案号： </label>
                        <div class="col-sm-9"><input type="text" name="web_icp" placeholder="网站备案号" value="<?php echo $ls['web_icp']; ?>" class="col-xs-10 "></div>
                    </div>
                    <div class="form-group"><label class="col-sm-1 control-label no-padding-right"><i>*</i>统计代码： </label>
                        <div class="col-sm-9"><textarea class="textarea" name="web_tj" style="width: 84%"><?php echo $ls['web_tj']; ?></textarea></div>
                    </div>
                    <div class="Button_operation">
                        <button class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存设置</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>