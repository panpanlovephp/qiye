<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\area\add.html";i:1565664066;}*/ ?>

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
    <title>产品编辑</title>
    <script>
        var editor4;
        KindEditor.ready(function(K) {
            editor4 = K.create('#content',{
                resizeType: 0,
                allowImageRemote:false,
                afterBlur:function(){this.sync();}
            });
        });
    </script>
    <script>
        function qaq (chk) {
            if (chk.checked) {
                $("#pt").slideToggle();
            }else {
                $("#pt").slideToggle();
            }
        }
    </script>
    <script>
        function qbq (chk) {
            if (chk.checked) {
                $("#pa").slideToggle();
            }else {
                $("#pa").slideToggle();
            }
        }
    </script>
</head>
<body>
<?php if($data['istu']==1): ?>
<style>#pt{display: none}</style>
<?php endif; if($data['isjs']==1): ?>
<style>#pa{display: none}</style>
<?php endif; ?>
<div class="clearfix" style="width: 100%">
    <div class="page_right_style" style="width: 100%">
        <div class="type_title">单页面编辑</div>
        <form action="<?php echo $data['module_tj']; ?>" method="post" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>名称：</label>
                <div class="formControls col-10">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="text" class="input-text" value="<?php echo $data['title']; ?>" placeholder="请填写名称" name="title">
                </div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>其他：</label>
                <div class="formControls col-10">
                    <input name="istu" type="checkbox" value="1" onclick="qaq(this);" <?php if($data['istu'] == 1): ?>checked<?php endif; ?>/>无图
                    <input name="isjs" type="checkbox" value="1" onclick="qbq(this);" <?php if($data['isjs'] == 1): ?>checked<?php endif; ?>/>无简述
                </div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2">分类：</label>
                <div class="formControls col-10">
                    <select name="pid">
                        <option value="0">顶级分类</option>
                        <?php if(is_array($area_list) || $area_list instanceof \think\Collection || $area_list instanceof \think\Paginator): $i = 0; $__LIST__ = $area_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $data['pid']): ?>selected<?php endif; ?>><?php echo $v['_title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="clearfix cl" id="pt">
                <label class="form-label col-2">图片：</label>
                <div class="formControls col-10"><input type="file" name="image"/></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2">排序：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['sort']; ?>" placeholder="请填写序列" name="sort"></div>
            </div>
            <div class="clearfix cl" id="pa">
                <label class="form-label col-2">简述：</label>
                <div class="formControls col-10">
                    <textarea name="remark" cols="30" rows="10" style="width:30%; height:80px;"><?php echo $data['remark']; ?></textarea></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2">价格：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['price']; ?>" placeholder="请填写价格" name="price"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2">内容：</label>
                <div class="formControls col-10">
                    <textarea name="content" id="content" cols="30" rows="10" style="width:100%; height:300px;"><?php echo $data['content']; ?></textarea>
                </div>
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