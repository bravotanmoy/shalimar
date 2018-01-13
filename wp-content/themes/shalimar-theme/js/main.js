'use strict';

// Layer Slider
// Running the code when the document is ready
    /*jQuery(document).ready(function(){
 
        
    }); */
    /*jQuery(function() {
            Grid.init();
        });*/
        

// Calling LayerSlider on the target element
        //setTimeout(function(){
			jQuery('#layerslider').layerSlider({
                responsive: true,
                autoStart: true,
                navPrevNext: false,
                pauseOnHover: false,
                skin: 'fullwidth',
                hoverPrevNext: false,
                skinsPath: 'skins/'

                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
            });
       // },1000);




//Initial testimonial slider
jQuery('#testimonials').bxSlider({
	mode: 'fade',
	auto: true,
	autoControls: true,
	controls: false
});

//carusel for clients
jQuery('.client-slider').bxSlider({
	pager: false,
	minSlides: 1,
	maxSlides: 6,
	moveSlides: 2,
	slideWidth: 130,
	slideMargin: 25,
	prevSelector: jQuery('#client-prev'),
	nextSelector: jQuery('#client-next'),
	prevText: '<i class="fa fa-angle-double-left"></i>',
	nextText: '<i class="fa fa-angle-double-right"></i>'
});

jQuery('.text-slider').bxSlider({
	pager: false,
	prevText: '<i class="fa fa-angle-left fa-3x"></i>',
	nextText: '<i class="fa fa-angle-right fa-3x"></i>'
	
});

//Efext on labels on contact form
jQuery("input.label_better, textarea.label_better").label_better({
	animationTime: 500,
	easing: "bounce",
	offset: 0,
	hidePlaceholderOnFocus: true
});

jQuery("#Grid").mixitup({});

jQuery(function() {
    Grid.init();
});


function homeFullScreen() {

	var homeSection = jQuery('.home');
	var windowHeight = jQuery(window).outerHeight();

	if (homeSection.hasClass('home-fullscreen')) {

		jQuery('.home-fullscreen').css('height', windowHeight);
	}
}

function stickyMenu() {

	var scrollTop = jQuery(window).scrollTop();
	var offset = 0;

	if (scrollTop > offset) {
        jQuery('#navbar').addClass('navbar-small');
	} else {
        jQuery('#navbar').removeClass('navbar-small');
	}
}


function inviewAnimation() {

    jQuery('.skills').bind('inview', function () {

        jQuery('.skill').easyPieChart({
			size: 140,
			animate: 2000,
			lineWidth: 6,
			lineCap: 'square',
			barColor: '#ffe600',
			trackColor: '#ffffff',
			scaleColor: false
		});
	})

    jQuery('.numbers').one('inview', function (event, visible) {

		if (visible === true) {

            jQuery('.numbers .number').each(function () {
				var element = jQuery(this);
				var duration = element.attr('data-duration');
				var count = element.attr('data-count')
				var id = element.attr('id');
				var numAnim = new countUp(id, 0, count, 0, duration);
				numAnim.start();

			})
		}

	})

    jQuery('.heading > h1').one('inview', function(event, visible){
		jQuery(this).addClass('animate fadeInRight');
	});

    jQuery('.heading > div').one('inview', function(event, visible){
		jQuery(this).addClass('animate fadeInLeft');
	});

    jQuery('.process-item').one('inview', function(event, visible){
		jQuery(this).addClass('animate fadeInLeft');
	});

    jQuery('.service-item').one('inview', function(event, visible){
		jQuery(this).addClass('animate');
	})

    jQuery('.adress-element').one('inview', function(event, visible){
		jQuery(this).addClass('animate fadeInUp');
	})

    jQuery('.about-item').one('inview', function(event, visible){
		jQuery(this).addClass('animate fadeInUp');
	})
}

function filterPath(string) {
	return string.replace(/^\//, '').replace(/(index|default).[a-zA-Z]{3,4}jQuery/, '').replace(/\/jQuery/, '');
}

function singlePageNav() {
	
	var lastId,
        topMenu = jQuery(".navbar"),
        topMenuHeight = topMenu.outerHeight(),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = jQuery(jQuery(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

	jQuery('a[href*=#]').each(function () {
		if (filterPath(location.pathname) == filterPath(this.pathname) && location.hostname == this.hostname && this.hash.replace(/#/, '')) {
			var jQuerytargetId = jQuery(this.hash),
				jQuerytargetAnchor = jQuery('[name=' + this.hash.slice(1) + ']');
			var jQuerytarget = jQuerytargetId.length ? jQuerytargetId : jQuerytargetAnchor.length ? jQuerytargetAnchor : false;

			if (jQuerytarget) {

				jQuery(this).click(function () {

					//Hack collapse top navigation after clicking
					topMenu.parent().attr('style', 'height:0px').removeClass('in'); //Close navigation
					jQuery('.navbar .btn-navbar').addClass('collapsed');

					var targetOffset = jQuerytarget.offset().top - 52;
					jQuery('html, body').animate({
						scrollTop: targetOffset
					}, 800);
					return false;
				});
			}
		}
	});
	
	// Bind to scroll
    jQuery(window).scroll(function () {

        //Display or hide scroll to top button 
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
		
        // Get container scroll position
        var fromTop = jQuery(this).scrollTop() + topMenuHeight + 10;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if (jQuery(this).offset().top < fromTop)
                return this;
        });

        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href=#" + id + "]").parent().addClass("active");
        }
    });
}




var clickBtn = jQuery('.portfolio-item .bclass');
for(var k = 0; k < clickBtn.length; k++){
    clickBtn[k].onclick =  function (){
        var newImgPath = this.getAttribute('src');

        jQuery('#bravot').text("Hkkkkkkkkk k ll");
        //jQuery('body').css('display','none');

    }

}



var ccc = " Tanmoy";
var tol = ccc;



function openProject() {

	var portfolioItem = jQuery('.portfolio-item > a');

	var singleProject = jQuery('#single-project');
	var loader = "<div class=\"project-loader\"><div class=\"bubblingG\"><span id=\"bubblingG_1\"></span><span id=\"bubblingG_2\"></span><span id=\"bubblingG_3\"></span></div>Loading...</div>";

	portfolioItem.click(function () {

        var link = jQuery(this).attr('href');
		jQuery('html, body').animate({
			scrollTop: singleProject.offset().top - 90
		}, 500);
		singleProject.slideUp(500).addClass("project");

		singleProject.after(loader);
		singleProject.empty();

		setTimeout(function () {
			singleProject.load(link, function (response, status) {

				if (status === "error") {
					alert("An error");
				} else {
					singleProject.slideDown(500);

					var closeProject = jQuery('#close-project');






                    closeProject.on('click', function () {
						singleProject.slideUp(500);
						setTimeout(function () {

							singleProject.empty();
						}, 500);
					});
				}
				jQuery('.project-loader').remove();
			});
		}, 500);
		return false;
	});


}

//Initialization
openProject();
homeFullScreen();
inviewAnimation();
singlePageNav();








window.onload = function() {
 jQuery('#wrapper').removeClass('loading');
 jQuery('.loader').addClass('removing');
	setTimeout(function(){
		jQuery('.loader').remove();
	}, 2000)

 
};
//What happen on window resize
jQuery(window).resize(function () {
	homeFullScreen();
});

//What happen on window scroll	
jQuery(window).on("scroll", function (e) {
	setTimeout(function () {
		stickyMenu();
	}, 300)
});

