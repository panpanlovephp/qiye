<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\PHPTutorial\WWW\qiye/application/admin\view\product\edit.html";i:1565944478;}*/ ?>

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
        <div class="type_title">编辑信息</div>
        <form action="" method="post" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>名称：</label>
                <div class="formControls col-10">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="wid" value="<?php echo $sid; ?>">
                    <input type="text" class="input-text" value="<?php echo $data['title']; ?>" placeholder="请填写信息名称" name="title"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2">分类：</label>
                <div class="formControls col-10">
                    <select name="sid">
                        <?php if(is_array($bq) || $bq instanceof \think\Collection || $bq instanceof \think\Paginator): $i = 0; $__LIST__ = $bq;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $v['id']; ?>" <?php if($v['id'] == $data['sid']): ?>selected<?php endif; ?>><?php echo $v['cat_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <?php if($sid==13): ?>
            <div class="clearfix cl">
                <label class="form-label col-2">会员职位：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $data['work']; ?>" placeholder="职位简介" name="work"></div>
            </div>
            <?php endif; if($pid!=4&&$pid!=5&&$pid!=7): ?>
            <div class=" clearfix cl">
                <label class="form-label col-2">链接：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $data['lian']; ?>" placeholder="请输入链接" name="remark"></div>
            </div>
            <div class=" clearfix cl">
                <label class="form-label col-2">简述：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $data['remark']; ?>" placeholder="简单50字描述" name="remark"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2">上传图片：</label>
                <div class="formControls col-10"><input type="file" name="image"/></div>
            </div>
            <?php endif; if($sid==14): ?>
            <div class="clearfix cl">
                <label class="form-label col-2">视频地址：</label>
                <div class="formControls col-10"><input type="text" class="input-text" value="<?php echo $data['lian']; ?>" placeholder="视频连接地址" name="lian"></div>
            </div>
            <?php endif; if($pid!=4&&$pid!=5&&$sid!=23): ?>
            <div class="clearfix cl">
                <label class="form-label col-2">详细内容：</label>
                <div class="formControls col-10">
                    <textarea name="content" id="content" style="width:100%; height:300px;"><?php echo $data['content']; ?></textarea>
                </div>
            </div>
            <?php endif; if($pid==4||$pid==5): ?>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>标签：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['label']; ?>" placeholder="请填写标签信息，每个标签之间用||分隔" name="title"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2">特征：</label>
                <div class="formControls col-10">
                    <textarea name="content" id="content" style="width:100%; height:300px;"><?php echo $data['content']; ?></textarea>
                </div>
            </div>
            <?php endif; if($pid==4||$pid==5): ?>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>套餐名称：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['packname']; ?>" placeholder="请填写套餐名称" name="packname"></div>
            </div>
            <?php endif; if($pid==4): ?>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>套餐简介：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['packInfo']; ?>" placeholder="请填写套餐简介" name="packInfo"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>主要功能：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['info']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="info">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['infoVal']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="infoVal">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>方案：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['caseInfo']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="caseInfo">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['caseVal']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="caseVal">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>主要功能：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['funcInfo']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="funcInfo">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['funcVal']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="funcVal">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>电子商务功能：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['caseInfo']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="caseInfo">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['info']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="info">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>支持功能：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['caseInfo']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="caseInfo">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['info']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="info">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>定价&订购：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['caseInfo']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="caseInfo">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['info']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="info">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>主机特色：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['hostTitle']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="hostTitle">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['hostText']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="hostText">
                </div>
            </div>
            <?php endif; if($pid==5): ?>
            <div class="clearfix cl">
                <label class="form-label col-2">套餐图片：</label>
                <div class="formControls col-10"><input type="file" name="image"/></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>套餐价格：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['packname']; ?>" placeholder="请填写套餐名称" name="packname"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>套餐信息：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['packInfo']; ?>" placeholder="请填写套餐信息,每个信息之间用||分隔" name="packInfo"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>服务器特色：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['serTitle']; ?>" placeholder="请填写标题信息，每个信息之间用||分隔" name="serTitle">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['serText']; ?>" placeholder="请填写具体信息，每个信息之间用||分隔" name="serText">
                </div>
            </div>
            <?php endif; if($sid==23): ?>
            <div class="clearfix cl">
                <label class="form-label col-2">公司简介：</label>
                <div class="formControls col-10">
                    <textarea name="content" id="content" style="width:100%; height:300px;"><?php echo $data['content']; ?></textarea>
                </div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>具体介绍：*</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text"  style="width:45%;" value="<?php echo $data['comTitle']; ?>" placeholder="请填写标题信息,每个信息之间用||分隔" name="comTitle">
                    <input type="text" class="input-text" style="width:45%;" value="<?php echo $data['comText']; ?>" placeholder="请填写具体信息,每个信息之间用||分隔" name="comText">
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>团队信息：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['teamTitle']; ?>" placeholder="请填写标题" name="teamTitle"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>团队简述：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['teamInfo']; ?>" placeholder="请填写具体信息" name="teamInfo"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>团队成员：*</label>
                <div class="formControls col-10" style="display:flex;white-space:nowrap;">
                    <input type="text" class="input-text" style="width:25%;margin-right:1%;" value="<?php echo $data['memName']; ?>" placeholder="请填写姓名,每个信息之间用||分隔" name="memName">
                    <input type="text" class="input-text" style="width:25%;margin-right:1%;" value="<?php echo $data['memPost']; ?>" placeholder="请填写职位,每个信息之间用||分隔" name="memPost">
                    <input type="file" name="memImg" style="margin-right:1%;"/>
                </div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>承诺区域：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['proTitle']; ?>" placeholder="请填写标题" name="proTitle"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>简述：</label>
                <div class="formControls col-10">
                    <input type="text" class="input-text" value="<?php echo $data['proInfo']; ?>" placeholder="请填写信息" name="proInfo"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red"></span>*</label>
                <div class="formControls col-10" style="display:flex;white-space:nowrap;">
                    <input type="text" class="input-text" style="width:25%;margin-right:1%;" value="<?php echo $data['proItem']; ?>" placeholder="请填写标题,每个信息之间用||分隔" name="proItem">
                    <input type="text" class="input-text" style="width:25%;margin-right:1%;" value="<?php echo $data['proText']; ?>" placeholder="请填写信息,每个信息之间用||分隔" name="proText">
                    <input type="file" name="image" style="margin-right:1%;"/>
                </div>
            </div>
            <?php endif; ?>
            <div class="clearfix cl">
                <div class="Button_operation">
                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="icon-save "></i>保存</button>
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>