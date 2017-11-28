jQuery(document).ready(function ($) {

    $(".c-burger-menu").click(function(){
       $(".c-overlay-menu").fadeToggle(200);
       $(this).toggleClass('is-active');
    });
    
    $(".c-site-header").stick_in_parent();
    
    
     // Homepage SLider
	$('.js-homepage-slider').slick({
		infinite: true,
		slidesToShow: 1,

		dots: true,
		arrows:false,
		//autoplay:true,
		responsive: [
            {
              breakpoint: 767,
              settings: {
                dots: false
              }
            }
        ]
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
        
});