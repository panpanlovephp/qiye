<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\recommend\edit.html";i:1565659861;}*/ ?>

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
    <title>添加推荐</title>
    <script>
        var editor4;
        KindEditor.ready(function(K) {
            editor4 = K.create('#content',{
                resizeType: 0,
                allowImageRemote:false,
                afterBlur:function(){this.sync();}
            });
        });
        var editor3;
        KindEditor.ready(function(K) {
            editor3 = K.create('#conten',{
                resizeType: 0,
                allowImageRemote:false,
                afterBlur:function(){this.sync();}
            });
        });
    </script>
</head>

<body>
<div class="clearfix" style="width: 100%">
    <div class="page_right_style" style="width: 100%">
        <div class="type_title">推荐信息</div>
        <form action="" method="post" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>名称：</label>
                <div class="formControls col-10">
                    <input type="hidden" name="id" value="<?php echo $vo['id']; ?>">
                    <input type="text" class="input-text" value="<?php echo $vo['title']; ?>" placeholder="请填写信息名称" name="title">
                </div>
            </div>

            <?php if($sid==13): ?>
            <div class="clearfix cl">
                <label class="form-label col-2">会员职位：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $vo['work']; ?>" placeholder="职位简介" name="work"></div>
            </div>
            <?php endif; ?>
            <div class=" clearfix cl">
                <label class="form-label col-2">说明：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $vo['remark']; ?>" placeholder="简单50字描述" name="remark"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2">特征：</label>
                <div class="formControls col-10">
                    <textarea name="feature" id="feature" style="width:100%; height:300px;"><?php echo $vo['feature']; ?></textarea>
                </div>
            </div>

            <div class=" clearfix cl">
                <label class="form-label col-2">价格：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $vo['price']; ?>" placeholder="例如:3.55" name="price"></div>
            </div>



            <div class=" clearfix cl">
                <label class="form-label col-2">首页展示：</label>
                <div class="formControls col-10" style="margin-top: 8px">
                    <input name="isfalse" type="checkbox" value="1" <?php if($vo['isfalse'] == 1): ?>checked<?php endif; ?>/><span style="color: red">*(展示请打钩)</span></div>
            </div>
            <div class="clearfix cl">
                <div class="Button_operation">
                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="icon-save "></i>保存</button>
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </form>
    </div>
</div>
</div>
</body>
</html>