var templDirec = $("#template_directory").html(); /*змінна яка отримує шлях до каталогу Wordpress*/

$(document).ready(function() {
$('.header-slider').slick({
    dots: true,
    prevArrow:'<button type="button" class="slick-prev">   <img src="' + templDirec + '/assets/images/prev.svg" alt=""></button>',
    nextArrow:'<button type="button" class="slick-next">   <img src="' + templDirec + '/assets/images/next.png" alt=""></button>',
    fade: true,
    responsive: [{
      breakpoint:361, /*при 360 розмірі екрану*/
     settings: {
        dots: false,
        arrows:false,
        autoplay:true,
        autoplaySpeed:2000,

      }
    }
    
    ]
});



 $('.product__name').slick({
  slidesToShow: 6, /*Кількість показів*/
  slidesToScroll: 1,
  focusOnSelect:true,
  asNavFor: '.product__content',
  vertical:true,
  prevArrow:'<button type="button" class="product-prev">   <img src="' + templDirec + '/assets/images/product-prev.png" alt=""></button>',
    nextArrow:'<button type="button" class="product-next">   <img src="' + templDirec + '/assets/images/product-next.png" alt=""></button>',
      responsive: [{
      breakpoint:891, /*при 891 розмірі екрану*/
     settings: {
    vertical:false,
      slidesToShow: 1,
      arrows:false,
      dots:true,
      },
    }
    
    ]
});
$('.product__content').slick({
 slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.product__name',
  fade:true,
  arrows:false
});
  

/*Для бургер меню*/
$('.menu__btn').on('click',function(){

  $('.menu__list').toggleClass('menu__list--active');
});

});