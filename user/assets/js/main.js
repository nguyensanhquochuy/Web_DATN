/*HEADER & NAV-TOP*/
/*!IMPORTANT: this function to add class sticky to the main-nav-top when it is sticky
* This use a trick that set top:-1px;
* Read more at: https://stackoverflow.com/questions/16302483/event-to-detect-when-positionsticky-is-triggered
*/
"use strict";
$(document).ready(function() {
   var stickyNav = document.querySelector("#main-nav-top");
   var observer = new IntersectionObserver( 
      ([e]) => e.target.classList.toggle('nav-top-sticky', e.intersectionRatio < 1),
      {threshold: [1]}
    );
    observer.observe(stickyNav);
    
    /*-------------------------------------
      BLACASA OwlCarousel
    -------------------------------------*/
    $('.bla-carousel').each(function() {
        var owlCarousel = $(this),
        loop = owlCarousel.data('loop'),
        items = owlCarousel.data('items'),
        margin = owlCarousel.data('margin'),
        stagePadding = owlCarousel.data('stage-padding'),
        autoplay = owlCarousel.data('autoplay'),
        autoplayTimeout = owlCarousel.data('autoplay-timeout'),
        smartSpeed = owlCarousel.data('smart-speed'),
        dots = owlCarousel.data('dots'),
        nav = owlCarousel.data('nav'),
        navSpeed = owlCarousel.data('nav-speed'),
        xsDevice = owlCarousel.data('mobile-device'),
        smDevice = owlCarousel.data('ipad-device'),
        smDevice2 = owlCarousel.data('ipad-device2'),
        mdDevice = owlCarousel.data('md-device'),
        centerMode = owlCarousel.data('center-mode'),
    		HoverPause = owlCarousel.data('hoverpause');
        
        $(this).owlCarousel({
            loop: (loop ? true : false),
            items: (items ? items : 4),
            lazyLoad: true,
            center: (centerMode ? true : false),
            autoplayHoverPause: (HoverPause ? true : false),
            margin: (margin ? margin : 0),
            stagePadding: (stagePadding ? stagePadding : 0),
            autoplay: (autoplay ? true : false),
            autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
            smartSpeed: (smartSpeed ? smartSpeed : 250),
            dots: (dots ? true : false),
            nav: (nav ? true : false),
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            navSpeed: (navSpeed ? true : false),
            responsiveClass: true,
            responsive: {
                0: {
                    items: (xsDevice ? xsDevice : 1),
                },
                576: {
                    items: (smDevice2 ? smDevice2 : 2),
                },
                768: {
                    items: (smDevice ? smDevice : 3),
                },
                992: {
                    items: (mdDevice ? mdDevice : 4),
                }
            }
          });
      });
      
      /*-------------------------------------
          BLACASA Videos popup jQuery 
      -------------------------------------*/
      $('.popup-videos').click(function(event){
      	event.preventDefault();
      	var url=$(this).attr('data-url');
      	var title=$(this).attr('data-title');
        $('#modalPlayVideo').modal({
      		backdrop: 'static',
          keyboard: false
        });
      	$('#modalPlayVideo_title').text(title);
      	$('#modalPlayVideo_VideoWrapper').html('<iframe allowfullscreen frameborder="0" class="embed-responsive-item" src="' + url + '" allow="accelerometer;autoplay;" allowfullscreen  style="width:800px;height:600px; max-width:100%;max-height:100%;"></iframe>');
      });
      $('#modalPlayVideo').on('hidden.bs.modal', function () {
        $('#modalPlayVideo_VideoWrapper').html("");
      });
      
      /*----------Click Menu Mobile------------*/
      $('.menu-top-modal a.bla-goScrollSmoothly').click(function() {
        $('#topHeaderModalMenu').modal('hide');
      });

});

/*SCROLL UP TOP*/
// scrollTop init	
var totop = $('#bla-ScrollUp');    
$(window).on('scroll', function() {
    if ($(window).scrollTop() > 150) {
        totop.fadeIn();
    } else {
        totop.fadeOut();
    }
});
totop.on('click', function() {
    $("html,body").animate({
        scrollTop: 0
    }, 500)
});



/*-------------------------------------
  NUMBER COUNT: hiệu ứng chữ chạy đếm
-------------------------------------*/
var counter = $('.rs-count');
if(counter.length) {  
    $('.rs-count').counterUp({
        delay: 20,
        time: 1500
    });
};

/*-------------------------------------
  BLACASA TILT: hiệu ứng 3D khi hover ảnh
-------------------------------------*/
var tilt = $('.js-tilt');
if(tilt.length) {
    const tilt = $('.js-tilt').tilt();
}

/*-----------------------------------------------------
    BLACASA scroll to an specific element smoothly
------------------------------------------------------*/
$('.bla-goScrollSmoothly').click(function(event){
	var selector=$(this).attr('data-selector');
	if(selector.length>0){
		document.querySelector(selector).scrollIntoView({
		        behavior: 'smooth'
		    });
	}
});