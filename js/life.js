var lifelistsw1;
if($(window).width()<=767){
  lifelistsw1 = new Swiper('#lifelist-swiper1',{
    // effect : 'fade',
    // loop:true,
    prevButton:'.lifelistsw-prev',
    nextButton:'.lifelistsw-next',
    pagination: '.swiper-pagination',
    paginationType : 'fraction',
    slidesPerView : 2,
    slidesPerColumn : 2,
    // slidesPerColumnFill : 'row',
    paginationFractionRender: function (swiper, currentClassName, totalClassName) {
      return '<span class="' + currentClassName + '"></span>' +
          '/' +
          '<span class="' + totalClassName + '"></span>';
      },    
  });
  
}else{
   lifelistsw1 = new Swiper('#lifelist-swiper1',{
    // effect : 'fade',
    // loop:true,
    prevButton:'.lifelistsw-prev',
    nextButton:'.lifelistsw-next',
    pagination: '.swiper-pagination',
    paginationType : 'fraction',
    slidesPerView : 4,
    slidesPerColumn : 2,
    // slidesPerColumnFill : 'row',
    // paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    //   return '<span class="' + currentClassName + '"></span>' +
    //       '/' +
    //       '<span class="' + totalClassName + '"></span>';
    //   },    
  });
}

// 详细内容
var lifedetailssw = new Swiper('#lifedetails-swiper',{
    loop:true,
    prevButton:'.lifedetailssw-prev ',
    nextButton:'.lifedetailssw-next',
    pagination: '.swiper-pagination',
    paginationType : 'fraction',
    // paginationFractionRender: function (swiper, currentClassName, totalClassName) {
    //   return '<span class="' + currentClassName + '"></span>' +
    //       '/' +
    //       '<span class="' + totalClassName + '"></span>';
      // },    
});