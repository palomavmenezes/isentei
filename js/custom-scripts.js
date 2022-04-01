$(document).ready(function(){
  //OPEN SHARE
  $(".share .open-share").click(function(){
    $(this).next(".box-share").fadeToggle();
    return false;
  });

  //ANCORA
  $(".link-scroll").click(function(){
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 700);
    return false;
  });

  //PARALLAX PRODUCT
  $.fn.parallax = function (resistance, mouse){
    $el = $( this );
    TweenLite.to( $el, 0.2, 
    {
      x : -(( mouse.clientX - (window.innerWidth/2) ) / resistance ),
    });
  };

  $(".home-products").mousemove( function( e ) {
    $(".home-products .full-image").parallax(70, e);
  });

  //MENU MOBILE
  $(".open-menu").click(function(){
    $(".full-menu").addClass("show");
    $("body").addClass("overflow");
    return false;
  });

  $(".close-menu, .overlay-menu").click(function(){
    $(".full-menu").removeClass("show");
    $("body").removeClass("overflow");
    return false;
  });

  //CUSTOM SELECT
  $('.selectpicker').selectpicker();

	//TEL
	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
			field.mask(SPMaskBehavior.apply({}, arguments), options);
		}
	};
	$(".tel").mask(SPMaskBehavior, spOptions);
  $(".cep").mask("000.000.000-00");

	//LIGHT GALLERY
	$('.carousel-photos, .carousel-photos-events, .banner-events, .carousel-gallery-blog').lightGallery({
		selector: "a",
		thumbnail:true,
		animateThumb: false,
		showThumbByDefault: false,
		hash: false
	});

  //CAROUSEL
  $(".banner-events").owlCarousel({
    loop: true,
    responsive:{
      0:{
        items:1,
      },
      680:{
        items:2,
      },
      1400:{
        items:3,
      }
    },
    navSpeed: 1600,
    dragEndSpeed: 1600,
    dots: false,
    nav: false,
    margin: 0,
  });

  $(".nav-banner .banner-prev").click(function(){
    $(".banner-events").trigger('prev.owl.carousel');
  });

  $(".nav-banner .banner-next").click(function(){
    $(".banner-events").trigger('next.owl.carousel');
  });

  //CAROUSEL
  $(".carousel-gallery-events").owlCarousel({
    loop: true,
    responsive:{
      0:{
        items:1,
      },
      680:{
        items:2,
      },
      1200:{
        items:3,
      },
      1400:{
        items:4,
      }
    },
    navSpeed: 1600,
    dragEndSpeed: 1600,
    dots: false,
    nav: false,
    margin: 20,
  });

  $(".nav-carousel .carousel-prev").click(function(){
    $(".carousel-gallery-events").trigger('prev.owl.carousel');
  });

  $(".nav-carousel .carousel-next").click(function(){
    $(".carousel-gallery-events").trigger('next.owl.carousel');
  });

  //CAROUSEL
  $(".carousel-photos-events").owlCarousel({
    loop: false,
    responsive:{
      0:{
        items:1,
      }
    },
    navSpeed: 1600,
    dragEndSpeed: 1600,
    dots: false,
    nav: true,
    margin: 0,
  });

  $('.home-content .wrap-carousel').each(function(){
    var body = $("body").innerWidth();
    var contentContainer = $('.home-content .container').innerWidth();
    var total1 = body - contentContainer;
    var total2 = total1/2;
    $(this).css("width", "calc(100% + "+total2+"px)");

    //CAROUSEL
    $('.carousel-photos').owlCarousel({
      loop: false,
      responsive:{
        0:{
            items:1,
        },
        1200:{
            items:2,
        }
      },
      navSpeed: 1600,
      dragEndSpeed: 1600,
      dots: false,
      nav: true,
      margin: 20,
      navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
  });

  //CAROUSEL
  $(".carousel-programation").owlCarousel({
    loop: true,
    responsive:{
      0:{
        items:1,
      },
      680:{
        items:2,
      },
      991:{
        items:3,
      }
    },
    navSpeed: 1600,
    dragEndSpeed: 1600,
    dots: false,
    nav: true,
    margin: 30,
  });

  //CAROUSEL
  $(".carousel-nav-cardapio").owlCarousel({
    loop: false,
    responsive:{
      0:{
        items:1,
      },
      680:{
        items:2,
      },
      991:{
        items:5,
      }
    },
    navSpeed: 1600,
    dragEndSpeed: 1600,
    dots: false,
    nav: true,
    margin: 20,
  });

  //CAROUSEL
  $(".carousel-gallery-blog").owlCarousel({
    loop: false,
    responsive:{
      0:{
        items:1,
      }
    },
    navSpeed: 1600,
    dragEndSpeed: 1600,
    dots: false,
    nav: true,
    margin: 0,
  });

  new WOW().init();
});