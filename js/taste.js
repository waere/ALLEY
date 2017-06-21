// 风情swiper
var customssw1 = new Swiper('#customs-swiper1',{
	// effect : 'fade',
	loop:true,
	prevButton:'.customssw-prev',
	nextButton:'.customssw-next',
	pagination: '.swiper-pagination',
  	paginationType : 'fraction',
  	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var customssw2 = new Swiper('#customs-swiper2',{
	effect : 'fade',
	loop:true,
	prevButton:'.customssw-prev',
	nextButton:'.customssw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
customssw1.params.control = customssw2;
customssw2.params.control = customssw1;

// 问巷文化
var culturesw1 = new Swiper('#culture-swiper1',{
	// effect : 'fade',
	loop:true,
	prevButton:'.culturesw-prev',
	nextButton:'.culturesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var culturesw2 = new Swiper('#culture-swiper2',{
	effect : 'fade',
	loop:true,
	prevButton:'.culturesw-prev',
	nextButton:'.culturesw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
culturesw1.params.control = culturesw2;
culturesw2.params.control = culturesw1;

// 问巷环境
var ambientsw1 = new Swiper('#ambient-swiper1',{
	effect : 'fade',
	loop:true,
	prevButton:'.ambientsw-prev',
	nextButton:'.ambientsw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
var ambientsw2 = new Swiper('#ambient-swiper2',{
	effect : 'fade',
	loop:true,
	prevButton:'.ambientsw-prev',
	nextButton:'.ambientsw-next',
	pagination: '.swiper-pagination',
	paginationType : 'fraction',
	paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    	return '<span class="' + currentClassName + '"></span>' +
        	'/' +
        	'<span class="' + totalClassName + '"></span>';
  	}
});
ambientsw1.params.control = ambientsw2;
ambientsw2.params.control = ambientsw1;

$(window).load(function() {
	var colLeftHeight=$('.oper-column1 img').height();
	$('.oper-column1 .column1-L').height(colLeftHeight);
});
$(window).resize(function(){
	var colLeftHeight=$('.oper-column1 img').height();
	$('.oper-column1 .column1-L').height(colLeftHeight);
});