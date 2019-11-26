$(function(){
  
    var swiper = new Swiper('.carousel-gallery .swiper-container', {
      effect: 'slide',
      speed: 900,
      slidesPerView: 5,
      spaceBetween: 20,
      simulateTouch: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false
      },
      pagination: {
        el: '.carousel-gallery .swiper-pagination',
        clickable: true
      },
      breakpoints: {
        // when window width is <= 480px
        425: {
          slidesPerView: 1,
          spaceBetween: 20
        },

        // when window width is <= 640px
        768: {
          slidesPerView: 2,
          spaceBetween: 10
        }
      }
    }); 
  
    
  
});