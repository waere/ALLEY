$(function(){
	navshow();
	search();
});

// 导航显示隐藏
function navshow(){
	$(".nav-show").click(function (e) {
        $(".navlist").fadeIn();
        $(".fullbg").fadeIn();
        e.stopPropagation();//阻止冒泡
    });

    $(document).bind('click', function () {
        $(".navlist").fadeOut();
        $(".fullbg").fadeOut();
    });

    $('.hider').bind('click', function () {
        $(".navlist").fadeOut();
        $(".fullbg").fadeOut();
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
// 锚点平滑滚动
$(function(){
    $('a[href*="#"]').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body').animate({
              scrollTop: targetOffset
            },
            400);
            return false;
          }
        }
    });
});

