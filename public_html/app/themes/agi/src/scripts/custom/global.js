jQuery(document).ready(function ($) {

   // Push Burger Menu
   	var clickDelay      = 500,
    clickDelayTimer = null;

	$('.burger-click-region').on('click', function () {
	  
	  if(clickDelayTimer === null) {
	  
	    var $burger = $(this);
	    $burger.toggleClass('active');
	    $('.body-cover').toggleClass('active');
	    $burger.parent().toggleClass('is-open');
	
	    if(!$burger.hasClass('active')) {
	      $burger.addClass('closing');
	    }
	
	    clickDelayTimer = setTimeout(function () {
	      $burger.removeClass('closing');
	      clearTimeout(clickDelayTimer);
	      clickDelayTimer = null;
	    }, clickDelay);
	  }
	});

    
	//Push menu
    $menuRight = $('#main_menu_push');
    $body = $('body');
    
    
    $('#showRightPush').on('click', function () { 
        $(this).addClass('active');
        $body.addClass('body-under');
        $menuRight.addClass('menu-open');
        $('.menu_cta').addClass('active');
	});

	$('.body-cover, #showRightPush_inmenu').on('click', function () {
        $(this).removeClass('active');
        $body.removeClass('body-under');
        $menuRight.removeClass('menu-open');
        $('.menu_cta').removeClass('active');
	});

    /* Replace all SVG images with inline SVG when Class 'svg' is used. */
	$('img.svg').each(function () {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function (data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');

			// Add replaced image's ID to the new SVG
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');

			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});


    // Hash link scrolling using class - scroll-link
      $('.scroll-link[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });

        ///////////////////////////////////
        //////   ANIMATION JS   ///////////
        ///////////////////////////////////


        //Header, intro and title animation
		var scrollMagicController = new ScrollMagic.Controller();
		var bubbleOneTl = new TimelineMax();
		var bubbleTwoTl = new TimelineMax();
		var bubbleThreeTl = new TimelineMax();
		var bubbleFourTl = new TimelineMax();
		
        bubbleOneTl
	    	.to($('.anim-group-one .bubble-one'), 1, {yPercent:-700, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-one .bubble-two'), 1, {yPercent:-250, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-one .bubble-three'), 1, {yPercent:-600, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-one .bubble-four'), 1, {yPercent:-450, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-one .bubble-five'), 1, {yPercent:-350, ease:Power1.easeNone, force3D:true, delay:0}, 0);


			var bubbleOneScene = new ScrollMagic.Scene({
		        triggerElement: 'header',
		        triggerHook: 'onLeave',
		        offset:0,
		        duration: "50%"
	    })
	    .setTween(bubbleOneTl)

        bubbleTwoTl
	    	.to($('.anim-group-two .bubble-one'), 1, {marginTop: -20, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-two .bubble-two'), 1, {marginTop: -50, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-two .bubble-three'), 1, {marginTop: -55, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-two .bubble-four'), 1, {marginTop: -120, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-two .bubble-five'), 1, {marginTop: -250, ease:Power1.easeNone, force3D:true, delay:0}, 0);


			var bubbleTwoScene = new ScrollMagic.Scene({
		        triggerElement: '#what-we-offer',
		        triggerHook: 'onCenter',
		        offset:-100,
		        duration: "80%"
	    })
	    	    
	    .setTween(bubbleTwoTl)
	    
        bubbleThreeTl
	    	.to($('.anim-group-three .bubble-one'), 1, {marginTop: -120, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-three .bubble-two'), 1, {marginTop: -190, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-three .bubble-three'), 1, {marginTop: -70, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-three .bubble-four'), 1, {marginTop: -80, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-three .bubble-five'), 1, {marginTop: -20, ease:Power1.easeNone, force3D:true, delay:0}, 0);


			var bubbleThreeScene = new ScrollMagic.Scene({
		        triggerElement: '#what-we-offer',
		        triggerHook: 'onCenter',
		         offset:-200,
		        duration: "80%"
	    })
	    	    
	    .setTween(bubbleThreeTl)
	    
	    bubbleFourTl
	    	.to($('.anim-group-four .bubble-one'), 1, {marginTop: -90, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-four .bubble-two'), 1, {marginTop: -20, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-four .bubble-three'), 1, {marginTop: -70, ease:Power1.easeNone, force3D:true, delay:0}, 0)
	    	.to($('.anim-group-four .bubble-four'), 1, {marginTop: -160, ease:Power1.easeNone, force3D:true, delay:0}, 0)


			var bubbleFourScene = new ScrollMagic.Scene({
		        triggerElement: '#how-we-work',
		        triggerHook: 'onCenter',
		         offset:-200,
		        duration: "80%"
	    })
	    	    
	    .setTween(bubbleFourTl)

	    
	     scrollMagicController.addScene([
	              bubbleOneScene,
	              bubbleTwoScene,
	              bubbleThreeScene,
	              bubbleFourScene
	    ]); 	
        
});