$(window).load(function() {
	var FoodGetleft=$('.pagenav-list').offset().left+50;
	if($(window).width()>=767){
		$('.slide-L-conter').css({'margin-left':FoodGetleft+'px'});
		$('#cuisine-swiper1').height($('#cuisine-swiper2').height());
		$('#coffee-swiper1').height($('#coffee-swiper2').height());
		$('#greentea-swiper1').height($('#greentea-swiper2').height());
	}	
});



// 中式佳肴
var cuisinesw1 = new Swiper('#cuisine-swiper1',{
	// effect : 'fade',
	loop:true,
	prevButton:'.cuisinesw-prev',
	nextButton:'.cuisinesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var cuisinesw2 = new Swiper('#cuisine-swiper2',{
	effect : 'fade',
	loop:true,
	prevButton:'.cuisinesw-prev',
	nextButton:'.cuisinesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
cuisinesw1.params.control = cuisinesw2;
cuisinesw2.params.control = cuisinesw1;



// 时尚咖啡
var coffeesw1 = new Swiper('#coffee-swiper1',{
	effect : 'fade',
	// loop:true,
	prevButton:'.coffeesw-prev',
	nextButton:'.coffeesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var coffeesw2 = new Swiper('#coffee-swiper2',{
	effect : 'fade',
	// loop:true,
	prevButton:'.coffeesw-prev',
	nextButton:'.coffeesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
coffeesw1.params.control = coffeesw2;
coffeesw2.params.control = coffeesw1;



// 醇美绿饮
var greenteasw1 = new Swiper('#greentea-swiper1',{
	effect : 'fade',
	// loop:true,
	prevButton:'.greenteasw-prev',
	nextButton:'.greenteasw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var greenteasw2 = new Swiper('#greentea-swiper2',{
	effect : 'fade',
	// loop:true,
	prevButton:'.greenteasw-prev',
	nextButton:'.greenteasw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
greenteasw1.params.control = greenteasw2;
greenteasw2.params.control = greenteasw1;



// 问巷美酒
var foodwinesw1 = new Swiper('#foodwine-swiper1',{
	effect : 'fade',
	// loop:true,
	prevButton:'.foodwinesw-prev',
	nextButton:'.foodwinesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var foodwinesw2 = new Swiper('#foodwine-swiper2',{
	effect : 'fade',
	// loop:true,
	prevButton:'.foodwinesw-prev',
	nextButton:'.foodwinesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
foodwinesw1.params.control = foodwinesw2;
foodwinesw2.params.control = foodwinesw1;


//底部图片展示
 
var bottomimgsw2 = new Swiper('#bottomimg-container2',{
watchSlidesProgress : true,
watchSlidesVisibility : true,
slidesPerView : 4,
onTap: function(){
			bottomimgsw1.slideTo( bottomimgsw2.clickedIndex)
		}
});
var bottomimgsw1 = new Swiper('#bottomimg-container1',{
	prevButton:'.bottomimgsw-prev',
	nextButton:'.bottomimgsw-next',
	onSlideChangeStart: function(){
		updateNavPosition();
	}

});

function updateNavPosition(){
	$('#bottomimg-container2 .active-nav').removeClass('active-nav')
	var activeNav = $('#bottomimg-container2 .swiper-slide').eq(bottomimgsw1.activeIndex).addClass('active-nav');


	if (!activeNav.hasClass('swiper-slide-visible')) {
		console.log(1);
		if (activeNav.index()>bottomimgsw2.activeIndex) {
			console.log(2);
			var thumbsPerNav = Math.floor(bottomimgsw2.width/activeNav.width())-1;
			bottomimgsw2.slideTo(activeNav.index()-thumbsPerNav)
		}
		else {
			console.log(3);
			bottomimgsw2.slideTo(activeNav.index())
		}	
	}
}
