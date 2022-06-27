var companySwiper = new Swiper(".company_main_container .swiper-container", {
  slidesPerView: 1,
  slidesPerGroup: 1,
  loop: true,
  speed: 650,
  autoplay: {
      delay: 6000,
  },
  grabCursor: true,
  pagination: {
    el: '.company_main_container .swiper-pagination',
    clickable: true
  }
});

// special order
function swiperFlag(){
  let bottomSwiper = $('.same_grid_boxes')
  for (let index = 0; index < bottomSwiper.length; index++) {
    const element = bottomSwiper[index];
    let slideLength = $(element).find('.swiper-slide').length;
    let wrapper = $(element).find('.swiper-wrapper');
    

    if($(window).width() > 1200 && slideLength < 7){
      wrapper.addClass('disabled')
    }
    else{
      wrapper.removeClass('disabled')
    }
  }

  let imgSwiper = $('.same_img_boxes');
  for (let index = 0; index < imgSwiper.length; index++) {
    const element = imgSwiper[index];
    let slideLength = $(element).find('.swiper-slide').length;
    let wrapper = $(element).find('.swiper-wrapper');

    if($(window).width() > 991 && slideLength < 4){
      wrapper.addClass('disabled')
    }
    else{
      wrapper.removeClass('disabled')
    }
  }

  if($(window).width() > 991 ){
    $('.four_swiper').find('.swiper-wrapper').addClass('disabled');
  }
  else{
    $('.four_swiper').find('.swiper-wrapper').removeClass('disabled')
  }
}

$(window).on('load' ,function(){
  swiperFlag();
})
$(window).on('resize' ,function(){
  swiperFlag();
})

var sameSwiper = new Swiper(".same_swiper .same_grid_boxes", {
  speed: 650,
  autoplay: {
      delay: 6000,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.8,
      slidesPerGroup: 1,
      spaceBetween: 10,
      slidesOffsetAfter: 25
    },
    400: {
      slidesPerView: 2.1,
      slidesPerGroup: 1,
      spaceBetween: 10,
      slidesOffsetAfter: 25
    },
    576: {
      slidesPerView: 2.7,
      slidesPerGroup: 1,
      spaceBetween: 15
    },
    991: {
      slidesPerView: 4.5,
      slidesPerGroup: 1,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 6,
      slidesPerGroup: 1,
      spaceBetween: 20,
    }
  }
});

var imgSwiper = new Swiper(".same_swiper .same_img_boxes", {
  speed: 650,
  autoplay: {
      delay: 6000,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      
    },
    576: {
      slidesPerView: 2,
      slidesPerGroup: 1,
      spaceBetween: 15
    },
    768: {
      slidesPerView: 2.5,
      slidesPerGroup: 1,
      spaceBetween: 20
    },
    991: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      spaceBetween: 20,
    }
  }
});

var fourSwiper = new Swiper(".same_swiper .four_swiper", {
  speed: 650,
  autoplay: {
      delay: 6000,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.8,
      slidesPerGroup: 1,
      spaceBetween: 10,
      slidesOffsetAfter: 25
    },
    400: {
      slidesPerView: 2.1,
      slidesPerGroup: 1,
      spaceBetween: 10,
      slidesOffsetAfter: 25
    },
    576: {
      slidesPerView: 2.5,
      slidesPerGroup: 1,
      spaceBetween: 15
    },
    991: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 4,
      slidesPerGroup: 1,
      spaceBetween: 20
    }

  }
});






