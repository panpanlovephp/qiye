SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `dj_admin`;
CREATE TABLE `dj_admin` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '账号',
  `password` char(32) NOT NULL,
  `nickname` varchar(20) NOT NULL COMMENT '姓名',
  `email` varchar(50) NOT NULL,
  `lasttime` int(10) unsigned NOT NULL,
  `lastip` varchar(20) NOT NULL,
  `encrypt` char(6) NOT NULL,
  `shi` int(11) NOT NULL DEFAULT '0',
  `qx_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0无 1渠道经理  2区域经理',
  `bu` int(2) DEFAULT NULL COMMENT '部门',
  `phone` varchar(11) DEFAULT NULL COMMENT '电话',
  `sex` char(5) DEFAULT NULL COMMENT '性别',
  `shenfen` varchar(50) DEFAULT NULL COMMENT '角色',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `zhu` text COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

insert into `dj_admin`(`id`,`username`,`password`,`nickname`,`email`,`lasttime`,`lastip`,`encrypt`,`shi`,`qx_type`,`bu`,`phone`,`sex`,`shenfen`,`status`,`zhu`) values
('1','admin','e10adc3949ba59abbe56e057f20f883e','admin','1232@qq.com','1510624239','124.114.72.118','7weaTa','0','2','0','110','男','请选择角色','0','公用');
DROP TABLE IF EXISTS  `dj_area`;
CREATE TABLE `dj_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `content` text,
  `remark` text,
  `pic` varchar(225) DEFAULT NULL,
  `istu` tinyint(1) NOT NULL DEFAULT '0',
  `isjs` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `dj_banner`;
CREATE TABLE `dj_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(225) DEFAULT NULL COMMENT '图片',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `isfalse` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示',
  `title` varchar(225) DEFAULT NULL COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

insert into `dj_banner`(`id`,`pic`,`sort`,`addtime`,`isfalse`,`title`) values
('1','img/20171113/d2ca8c0b9bedec2b48dc3798d90d2f00.jpg','1','1510543931','1','首页图');

DROP TABLE IF EXISTS  `dj_category`;
CREATE TABLE `dj_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `corder` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `cat_name` varchar(30) NOT NULL COMMENT '分类名称',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类的Id,0:顶级分类',
  `wlbm` varchar(32) DEFAULT NULL COMMENT '物流公司',
  `remark` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='分类';


DROP TABLE IF EXISTS  `dj_comment`;
CREATE TABLE `dj_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `content` varchar(255) NOT NULL COMMENT '评论',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `aid` int(11) NOT NULL COMMENT '关联的id',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1工作汇报  2请假',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态0评论  1审批',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `dj_config`;
CREATE TABLE `dj_config` (
  `names` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`names`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into `dj_config`(`names`,`value`) values
('web_name','凯天模板'),
('web_keyword','凯天模板'),
('web_remark',''),
('web_man',''),
('web_tel',''),
('web_icp',''),
('web_tj','0');


DROP TABLE IF EXISTS  `dj_level`;
CREATE TABLE `dj_level` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `level_name` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '权限名',
  `mu_name` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '模块名',
  `kong_name` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '控制器名',
  `fang_name` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '方法名',
  `parent_id` mediumint(8) unsigned DEFAULT NULL COMMENT '上级id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='权限模块统计';

DROP TABLE IF EXISTS  `dj_message`;
CREATE TABLE `dj_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未读  1已读',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `dj_product`;
CREATE TABLE `dj_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL DEFAULT '0' COMMENT '分类id',
  `title` text COMMENT '名称',
  `pic` varchar(225) DEFAULT NULL COMMENT '图片',
  `remark` text NOT NULL,
  `content` text COMMENT '内容',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `isfalse` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示',
  `lian` text COMMENT '链接',
  `views` int(11) NOT NULL DEFAULT '0',
  `work` varchar(225) DEFAULT NULL COMMENT '职位',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS  `dj_recommend`;
CREATE TABLE `dj_recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COMMENT '名称',
  `pic` varchar(225) DEFAULT NULL COMMENT '图片',
  `remark` text NOT NULL COMMENT '说明',
  `price` demical(10,2) NOT NULL COMMENT '热推产品价格',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `isfalse` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示',
  `lian` text COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='热门推荐产品';

DROP TABLE IF EXISTS  `dj_recommend_feature`;
CREATE TABLE `dj_recommend_feature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL DEFAULT '0' COMMENT '热推产品id',
  `title` text COMMENT '名称',
  `pic` varchar(225) DEFAULT NULL COMMENT '图片',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `isfalse` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否展示',
  `lian` text COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='热门推荐产品特点';


DROP TABLE IF EXISTS  `dj_rili`;
CREATE TABLE `dj_rili` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` int(11) NOT NULL COMMENT '当天时间',
  `f_day` date NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0上班  1放假 2法定假',
  `title` char(10) NOT NULL COMMENT '备注',
  `xq` char(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=utf8;



