/*  ---------------------------------------------------
    Templater Name: Aesthetic
    Description: Aesthetic medical template
    Author: Colorib
    Author URI: https://colorlib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        //Masonary
        $('.gallery__container').masonry({
            columnWidth: '.grid-sizer',
            itemSelector: '.gc__item',
            gutter: 20
        });
    });


    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".header__menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true,
        'closedSymbol': '<i class="fa fa-angle-right"></i>', // Character after collapsed parents.
        'openedSymbol': '<i class="fa fa-angle-up"></i>', // Character after expanded parents.
    });
    
    
      // Intro carousel
  var heroCarousel = $("#heroCarousel");
  var heroCarouselIndicators = $("#hero-carousel-indicators");
  heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):
      heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");
  });

  heroCarousel.on('slid.bs.carousel', function(e) {
    $(this).find('h2').addClass('animate__animated animate__fadeInDown');
    $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeInUp');
  });


     // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });
    $(".videogallery-carousel").owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            768: {
                items: 3,
                dots: true,
            },
            0: {
                items: 1,
                dots: true,
            }
        }
    });

   

    $(".imgslider-carousel").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            768: {
                items: 1,
                dots: false,
            },
            0: {
                items: 1,
                dots: false,
            }
        }
    });


 $(".imgslider-carousel").on('changed.owl.carousel', function(event) {
$('.owl-slide-animated').removeClass('is-transitioned');
setTimeout(function () {
                     $('.owl-slide-animated').addClass('is-transitioned');
                 }, 500);
});

       // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonialshomepage-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });
    /*--------------------------
        Testimonial Slider
    ----------------------------*/
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 2,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            768: {
                items: 2,
            },
            0: {
                items: 1,
            }
        }
    });
    
    
     $(".testimonial__slider1").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            768: {
                items: 3,
            },
            0: {
                items: 1,
            }
        }
    });
    
    /*------------------
		Magnific
	--------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    $('.image-popup').magnificPopup({
        type: 'image'
    });

    /*-------------------
		Nice Select
	--------------------- */
    $("select").niceSelect();

    /*-------------------
		Datepicker
	--------------------- */
    $(".datepicker").datepicker({
        minDate: 0
    });
    

})(jQuery);