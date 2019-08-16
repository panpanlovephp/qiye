<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\category\add.html";i:1565673091;}*/ ?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link href="__PUBLIC__/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="__PUBLIC__/admin/css/style.css"/>
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome.min.css" />
    <link href="__PUBLIC__/admin/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/font-awesome-ie7.min.css" />
    <link rel="stylesheet" href="__PUBLIC__/admin/assets/css/ace-ie.min.css" />
    <script src="__PUBLIC__/admin/js/jquery-1.9.1.min.js"></script>
    <script src="__PUBLIC__/admin/assets/js/bootstrap.min.js"></script>
    <title>添加产品分类</title>
</head>
<body>
<div class="type_style">
    <div class="type_content">
        <div class="Operate_btn">
            <a class="btn  btn-warning"><i class="icon-edit align-top bigger-125"></i>新增子类型</a>
        </div>
        <form action="<?php echo $data['module_tj']; ?>" method="post" class="form form-horizontal" id="form-user-add">
            <div class="Operate_cont clearfix">
                <label class="form-label"><span class="c-red">*</span>产品类型：</label>
                <div class="formControls " style="margin-left:20px;">
                    <select name="parent_id" id="ct" onchange="getQid()">
                        <option value='0'>-顶级分类-</option>
                        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$v): ?>
                        <option value='<?php echo $v['id']; ?>'>
                            <?php if($v['level']!=0): ?>&nbsp;&nbsp;|<?php endif; ?>
                            <?php echo str_repeat('----',$v['level']); ?><?php echo $v['cat_name']; ?>
                        </option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="Operate_cont clearfix">
                <label class="form-label"><span class="c-red">*</span>分类名称：</label>
                <div class="formControls ">
                    <input type="text" class="input-text"  name="cat_name">
                </div>
            </div>
            <div class="Operate_cont clearfix">
                <label class="form-label"><span class="c-red">*</span>链接：</label>
                <div class="formControls ">
                    <input type="text" class="input-text"  name="lian">
                </div>
            </div>
            <div class="Operate_cont clearfix">
                <label class="form-label"><span class="c-red">*</span>排序：</label>
                <div class="formControls ">
                    <input type="text" class="input-text" value="" name="corder">
                </div>
            </div>
            <div class="">
                <div class="" style=" text-align:center">
                    <input class="btn btn-primary radius" type="submit" value="提交">
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>