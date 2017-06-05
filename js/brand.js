var brandlistsw1;
if($(window).width()<=767){
  brandlistsw1 = new Swiper('#brandlist-swiper1',{
    // effect : 'fade',
    // loop:true,
    prevButton:'.brandlistsw-prev',
    nextButton:'.brandlistsw-next',
    pagination: '.swiper-pagination',
    paginationType : 'fraction',
    slidesPerView : 2,
    slidesPerColumn : 1,
    // slidesPerColumnFill : 'row',
    paginationFractionRender: function (swiper, currentClassName, totalClassName) {
      return '<span class="' + currentClassName + '"></span>' +
          '/' +
          '<span class="' + totalClassName + '"></span>';
      },    
  });
  // 移动端品牌列表宽高
  var slWH = $(window).width()/2;
  $('#brandlist-swiper1 .swiper-slide').width(slWH).height(slWH);
}else{
   lifelistsw1 = new Swiper('#brandlist-swiper1',{
    // effect : 'fade',
    // loop:true,
    prevButton:'.brandlistsw-prev',
    nextButton:'.brandlistsw-next',
    pagination: '.swiper-pagination',
    paginationType : 'fraction',
    slidesPerView : 4,
    slidesPerColumn : 2,   
  });
}

// 品牌图片列表sw
var brandcontsw = Swiper('#brandcont-swiper',{
  prevButton:'.brandcontsw-prev',
  nextButton:'.brandcontsw-next',
  // pagination: '.swiper-pagination',
}); 

var brandpicsw = new Swiper('#brandpic-swiper',{
  prevButton:'.brandpicsw-prev',
  nextButton:'.brandpicsw-next',
  pagination: '.brandpicsw-pagination',
  paginationClickable: true,
  paginationBulletRender: function (swiper, index, className) {
      return '<span class="' + className + '">' + (index + 1) + '</span>';
  }
});
brandcontsw.params.control = brandpicsw;
brandpicsw.params.control = brandcontsw;