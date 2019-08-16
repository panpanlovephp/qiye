//导航条滚动变换样式
$(function(){
	$(".tabbar-box2").hide();
	$(window).scroll(function() {
		if ($(document).scrollTop() >= 200) {
			$(".tabbar-box2").addClass("fixnav").slideDown();
		} else {
			$(".tabbar-box2").hide();
		}
	});
	//注意：导航 依赖 element 模块，否则无法进行功能性操作
	layui.use('element', function() {
		var element = layui.element;
	});
})

function login() {
	layer.open({
		type: 2,
		title: '登录' //不显示标题栏
			,
		closeBtn: 1,
		area: ['600px', '300px'],
		shade: 0.8,
		id: 'LAY_layuipro' //设定一个id，防止重复弹出
			,
		btnAlign: 'c',
		moveType: 1 //拖拽模式，0或者1
			,
		content: 'denglv.html',
		success: function(layero) {
			var btn = layero.find('.layui-layer-btn');
			btn.find('.layui-layer-btn0').attr({
				href: 'http://www.layui.com/',
				target: '_blank'
			});
		}
	});
}
