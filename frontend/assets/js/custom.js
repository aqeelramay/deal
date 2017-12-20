$(document).ready(function () {
    $('.popular_stores_cont').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 8,
      slidesToScroll: 1,
      nextArrow: '<span class="glyphicon glyphicon-menu-right"></span>',
      prevArrow: '<span class="glyphicon glyphicon-menu-left"></span>',
      responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 7,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    $('#back_top').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate({
        scrollTop: 0
      }, 700);
    });

  });