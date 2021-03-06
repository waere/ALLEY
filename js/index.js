$(function(){
	swTab(0);
	swTab(1);
	swTab(2);
	winWidth();
	TakeTab();
	mosertab();
	winetab();
});

// banner swiper 控制
var swiper = new Swiper('#swiper-container', {
	        pagination: '.swiper-pagination',
	        nextButton: '.swiper-button-next',
        	prevButton: '.swiper-button-prev',
        	paginationType: 'fraction',
	        paginationClickable: true,
	        loop:true,
	        autoplay : 5000,
			speed:300,
			resistanceRatio: 0
});
// 生活swiper菜单绑定
var swiper2 = new Swiper('#swiper-container2',{
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    autoplay : 5000,
	speed:500,
	// loop:true,
	
	onSlideChangeEnd:function(swiper){
		// 获取swiper当前活动块的index
		$('.cont1').eq(swiper.activeIndex).addClass(' cont-show').siblings('.cont1').removeClass(' cont-show');
		$('.act-tab').find('li').eq(swiper.activeIndex).addClass(' swtab').siblings('li').removeClass(' swtab');
	}
});
// 鼠标滑过改变样式
function swTab(n){
	$('.act-tab').find('li').eq(n).mouseover(function(index){
		swiper2.slideTo(n, 500, false);
		$(this).addClass(' swtab').siblings('li').removeClass(' swtab');
		$('.cont1').eq(n).addClass(' cont-show').siblings('.cont1').removeClass(' cont-show');
	});
}


// 判断屏幕大小
function winWidth(){
	var _width = $(window).width();
	if (_width <= 767) {
		// 控制swiper可否滑动
		$('.swbox2 .swiper-slide').removeClass('swiper-no-swiping');
		// 生活内容块高度
		var actconheight = $('.cont1').outerHeight(true) + $('.act-conenter>a').outerHeight(true);
		$('.act-conenter').height(actconheight);
	}
}

//采味集控制脚本
function TakeTab(){
	$('.take-tab a').click(function(index){
		var imgindex=$(this).index()/3;
		$(this).addClass('thistab').siblings('a').removeClass('thistab');
		console.log($(this).index()/3);
		$('.takeimg').eq(imgindex).addClass(' currimg').siblings('.takeimg').removeClass(' currimg');
	});
}


// 摩瑟
// swiper
var swiper3 = new Swiper('#swiper-container3',{
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    onSlideChangeEnd:function(swiper){
		// 获取swiper当前活动块的index
		$('.mosertab a').eq(swiper.activeIndex).addClass(' thistab').siblings('.mosertab a').removeClass(' thistab');
		$('.videoplay').css({'color':'#fff'});
		$('.swvideo video').trigger('pause');
		if(swiper.activeIndex == 2){
			$('.videoplay').css({'color':'#e50044'}).siblings('a').removeClass('thistab');
			$('.swvideo video').trigger('play');
		}
	}
});
function mosertab(){
	$('.mosertab').find('a').click(function(){
		$(this).addClass('thistab').siblings('a').removeClass('thistab');
		console.log();
		var moserswindex=$(this).index()/2;
		swiper3.slideTo(moserswindex, 500, false);
		$('.videoplay').css({'color':'#fff'});
		$('.swvideo video').trigger('pause');
	})
	$('.videoplay').click(function(){
		swiper3.slideTo(2, 500, false);
		$(this).css({'color':'#e50044'}).siblings('a').removeClass('thistab');
		$('.swvideo video').trigger('play');
	});
}

// 生态
var ecologyswiper1 = new Swiper('#ecologyswiper1',{
	// effect : 'fade',
	loop:true,
	autoplay:5000
});
var ecologyswiper2 = new Swiper('#ecologyswiper2',{
	loop:true,
	simulateTouch : false,
	nextButton: '.ecolconter-next',
});
ecologyswiper1.params.control=ecologyswiper2;
ecologyswiper2.params.control=ecologyswiper1;

// 问巷美酒
var wineswiper = new Swiper('#wineswiper',{
	// loop:true,
    nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	onSlideChangeEnd:function(swiper){
		// 获取swiper当前活动块的index
		$('.winetab a').eq(swiper.activeIndex).addClass(' thistab').siblings('.winetab a').removeClass(' thistab');
	}
})
function winetab(){
	$('.winetab').find('a').click(function(){
		$(this).addClass('thistab').siblings('a').removeClass('thistab');
		console.log($(this).index());
		var wineswindex=$(this).index()/2;
		wineswiper.slideTo(wineswindex, 500, false);
	})
}
// 产品速递
	window.onload=function(){
		var ulWidth=$('.cpsdlist li').outerWidth(true)*4;
		// console.log(ulWidth);
		$('.cpsdlist ul').width(ulWidth);
		// 采味集获取高度
		if($(window).width()<=767){
			var padbott = $('.takeimg').height();
			$('.takebox').css({'padding-bottom':padbott+'px'});
		}
		// $('.takebox').height($('.takeimg').height()*2);
	}
	

