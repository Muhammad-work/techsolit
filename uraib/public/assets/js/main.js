/* testimonials slick slider */
jQuery(document).ready(function () {
  jQuery('.reviews-area').slick({
    autoplay: false,
    autoplaySpeed: 0,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.adobe-logo').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 1500,

  });

  jQuery('li.nav-item.dropdown.service-menu a').click(function () {
    jQuery('.dropdown-sec').slideToggle(200);
  })
  var scene = document.getElementById('scene');
  var parallax = new Parallax(scene);

  var scene1 = document.getElementById('scene1');
  var parallax = new Parallax(scene1);



});


// right btn
// jQuery(document).ready(function(){
//     jQuery('div#client-sticky-button a.client-btn').click(function(){
//         jQuery('div#client-sticky-button').toggleClass("activeS");
//     })
// })



// AOS ANIMATION
// AOS.init();

// jQuery(window).scroll(function (event) {
// 	var scroll = jQuery(window).scrollTop();
// 	jQuery('.about-sec').toggleClass('active-animation',
// 	scroll >= jQuery('#lead-form').offset().top
// 	)
// })
