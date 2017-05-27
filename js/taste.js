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
customssw2 = new Swiper('#customs-swiper2',{
	effect : 'fade',
	loop:true,
});
customssw1.params.control = customssw2;
customssw2.params.control = customssw1;