$(function(){
	navshow();
	search();
});

// 导航显示隐藏
function navshow(){
	$(".nav-show").click(function (e) {
        $(".navlist").fadeIn();
        e.stopPropagation();//阻止冒泡
    });

    $(document).bind('click', function () {
        $(".navlist").fadeOut();
    });

    $('.hider').bind('click', function () {
        $(".navlist").fadeOut();
    });

    $(".navlist").click(function (e) {
        e.stopPropagation();
    });
}
// 搜索动作
function search(){
	// 获取焦点
	$('.nav-search').find("input").on('keydown',function(e) {
			console.log('0');
			if(e.keyCode == 13){
				alert('暂时没有搜索内容！');
			}
		});		
		
}

