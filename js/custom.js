// Js Document

    // Created on   : 08/09/2017. 
    // Theme Name   : Farmfresh.
    // Description  : Farm Fresh - Organic Food & Eco Farm HTML Template.
    // Version      : 1.0.
    // Author       : @Unifytheme.
    // Developed by : @Unifytheme.



"use strict";

// Prealoder
 function prealoader () {
   if ($('#loader').length) {
     $('#loader').fadeOut(); // will first fade out the loading animation
     $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
     $('body').delay(350).css({'overflow':'visible'});
  };
 }

// Theme-banner slider 
function BannerSlider () {
  var banner = $("#theme-main-banner");
  if (banner.length) {
      banner.camera({ //here I declared some settings, the height and the presence of the thumbnails 
        height: '47%',
        pagination: true,
        thumbnails: false,
        playPause: false,
        autoplay:true,
        pauseOnClick: false,
        hover: false,
        overlayer: true,
        loader: 'none',
        time: 6000000,
        minHeight: '700px',
      });
  };
}

// Client slider
function clientSlider () {
  if($('#client-slider').length) {
    $('#client-slider').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed:1400,
        lazyLoad:true,
        items:1,
    })
  }
}

// Testimonial Slider 
function testimonialSlider () {
  if($('#testimonial-slider').length) {
    $('#testimonial-slider').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplaySpeed:1000,
        lazyLoad:true,
        singleItem:true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    })
  }
}

// Partner Slider
function partnerSlider () {
  if($('.owl-partners').length) {
    $('.owl-partners').owlCarousel({
        loop:true,
        nav:false,
        navText:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:1250,
        lazyLoad:true,
        responsive:{
          0:{
              items:1
          },
          450:{
              items:2
          },
          768:{
              items:3
          },
          1200:{
              items:4
          }
        }
    })
  }
}


// Product Slider
function productSlider () {
  if($('.theme-product-slider').length) {
    $('.theme-product-slider').owlCarousel({
        loop:true,
        nav:false,
        navText:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:1250,
        lazyLoad:true,
        autoplayHoverPause:true,
        responsive:{
          0:{
              items:1
          },
          501:{
              items:2
          },
          992:{
              items:3
          }
        }
    })
  }
}


// Counter function
function CounterNumberChanger () {
  var timer = $('.timer');
  if(timer.length) {
    timer.appear(function () {
      timer.countTo();
    })
  }
}


// Mixitup gallery
function mixitupGallery () {
  if ($("#mixitup_list").length) {
    $("#mixitup_list").mixItUp()
  };
}


// Farmer Work slider 
function farmersSlider () {
  if($('#farmers-demo').length) {
    $('#farmers-demo').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:false,
        autoplayTimeout:1500,
        autoplaySpeed:1000,
        lazyLoad:true,
        singleItem:true,
        responsive:{
          0:{
              items:1
          },
          450:{
              items:2
          },
          992:{
              items:3
          },
          1200:{
              items:4
          }
        }
    })
  }
}



// Farmer Work slider 
function gallerySlider () {
  if($('#gallry-details').length) {
    $('#gallry-details').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:1500,
        autoplaySpeed:2000,
        lazyLoad:true,
        singleItem:true,
        responsive:{
          0:{
              items:1
          },
          450:{
              items:2
          },
          992:{
              items:3
          }
        }
    })
  }
}

//Contact Form Validation
function contactFormValidation () {
  if($('.form-validation').length){
    $('.form-validation').validate({ // initialize the plugin
      rules: {
        name: {
          required: true
        },
        sub: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        message: {
          required: true
        }
      },
      submitHandler: function(form) {
            $(form).ajaxSubmit({
                success: function() {
                    $('.form-validation :input').attr('disabled', 'disabled');
                    $('.form-validation').fadeTo( "slow", 1, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#alert-success').fadeIn();
                    });
                },
                error: function() {
                    $('.form-validation').fadeTo( "slow", 1, function() {
                        $('#alert-error').fadeIn();
                    });
                }
            });
          }
      });
  }
}

// Close suddess Alret
function closeSuccessAlert () {
  var closeButton = $ (".closeAlert");
  if(closeButton.length) {
      closeButton.on('click', function(){
        $(".alert-wrapper").fadeOut();
      });
      closeButton.on('click', function(){
        $(".alert-wrapper").fadeOut();
    })
  }
}

// placeholder remove
function removePlaceholder () {
  if ($("input,textarea").length) {
    $("input,textarea").each(
        function(){
          $(this).data('holder',$(this).attr('placeholder'));
          $(this).on('focusin', function() {
              $(this).attr('placeholder','');
          });
          $(this).on('focusout', function() {
              $(this).attr('placeholder',$(this).data('holder'));
        });
    });
  }
}

// toggle menu for mobile
function mobileDropdown () {
  if($('nav').length) {
    $('.theme-main-menu .navbar-nav>li.dropdown-holder').append(function () {
      return '<i class="fa fa-angle-double-down" aria-hidden="true"></i>';
    });
    $('.theme-main-menu .navbar-nav>li.dropdown-holder .fa').on('click', function () {
      $(this).parent('li').children('ul').slideToggle();
    }); 
  }
}


// Sticky header
function stickyHeader () {
  var sticky = $('.main-container'),
      scroll = $(window).scrollTop();

  if (sticky.length) {
    if (scroll >= 190) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
    
  };
}

// Scroll to top
function scrollToTop () {
  var scrollTop = $ (".scroll-top")
  if (scrollTop.length) {

    //Check to see if the window is top if not then display button
    $(window).on('scroll', function (){
      if ($(this).scrollTop() > 200) {
        scrollTop.fadeIn();
      } else {
        scrollTop.fadeOut();
      }
    });
    
    //Click event to scroll to top
      scrollTop.on('click', function() {
      $('html, body').animate({scrollTop : 0},1500);
      return false;
    });
  }
}


// Product value
function productValue () {
  var inputVal = $("#product-value");
  if(inputVal.length) {
    $('#value-decrease').on('click', function() {
        inputVal.html(function(i, val) { return val*1-1 });
    });
    $('#value-increase').on('click', function() {
        inputVal.html(function(i, val) { return val*1+1 });
    });
  }
}


 // DOM ready function
jQuery(document).on('ready', function() {
  (function ($) { 
      scrollToTop ();
      BannerSlider ();
      clientSlider ();
      testimonialSlider ();
      partnerSlider ();
      CounterNumberChanger ();
      mixitupGallery ();
      productSlider ();
      farmersSlider ();
      gallerySlider ();
      contactFormValidation ();
      closeSuccessAlert ();
      mobileDropdown ();
      removePlaceholder ();
      productValue () 
  })(jQuery);
});


// Window load function
jQuery(window).on('load', function () {
   (function ($) {
      prealoader ();
  })(jQuery);
 });


// Window scroll function
jQuery(window).on('scroll', function () {
  (function ($) {
    stickyHeader ();
  })(jQuery);
});