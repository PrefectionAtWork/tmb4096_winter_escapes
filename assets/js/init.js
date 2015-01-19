	$(document).ready(function() {

		//Content Tabs functionality
		$(".region-content").hide();
		$(".line-listings").hide();
		$("#index-copy .collapse").hide();	//Copy hide/collapse

		$("#nav ul li .sf-mega ul li").click(function() {
			$(this).addClass("active");
			//patched for superfish menus
			$("#nav ul li .sf-mega ul li").removeClass("active");
			$(".region-content").hide();
			$(".line-listings").hide();
			var activeTab = $(this).attr("rel"); 
			console.log(activeTab);
			$("#"+activeTab).fadeIn();
			$("#"+activeTab+"-line-listings").fadeIn();
			$("#index-copy .collapse").slideDown(200, function() {
				$("#index-copy .uncollapse").slideUp(800);
			});
		});
		
		//Superfish Menu
		// TODO - find a way around hardcoded #sf-nav- selectors
		var options = {
			speed: 'normal',
			speedOut: 'fast',
			cssArrows: false,
			animation: {opacity:'show',height:'show'},
			delay: 500
		}
		var sfNav = $('#sf-nav-caribbean').superfish(options);	// initialise plugin
		var sfNav = $('#sf-nav-central-america').superfish(options);	// initialise plugin
		var sfNav = $('#sf-nav-mexico').superfish(options);	// initialise plugin
		var sfNav = $('#sf-nav-united-states').superfish(options);	// initialise plugin
		
		$("#index-copy .collapse").click(function() {
			$(this).slideToggle( "fast", function() {
				$(".uncollapse").slideDown(800);
			});
		});
		
		//'Accordion' functionality
		jQuery(".collapsible").hide();

		$(".toggle").click(function() {
			var txt = $(this).next(".collapsible").is(':visible') ? 'Learn More' : 'View Less';
			var cls = $(this).next(".collapsible").is(':visible') ? 'toggle toggle-more' : 'toggle toggle-less';
			var tourcls = $(this).next(".collapsible").is(':visible') ? 'offer' : 'offer offer-active';
			$(this).fadeOut(500, function() {
				$(this).attr('class', cls);
				$(this).text(txt).fadeIn(500);
				$(this).parents('div:eq(0).offer').attr('class', tourcls);
			});
			$(this).next(".collapsible").slideToggle(500);
		});
		
		//Back to top functionality
		$("#back-top").hide();			// hide #back-top first
		$(window).scroll(function () {	// fade in #back-top
			if ($(this).scrollTop() > 500) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 140
			}, 800);
			return false;
		});
		
	});

	/*
	$(function () {
		$(".rslides").responsiveSlides();
	});
	$(".rslides").responsiveSlides({
            auto: true,             // Boolean: Animate automatically, true or false
            speed: 1000,            // Integer: Speed of the transition, in milliseconds
            timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
            pager: false,           // Boolean: Show pager, true or false
            nav: false,             // Boolean: Show navigation, true or false
            random: false,          // Boolean: Randomize the order of the slides, true or false
            pause: false,           // Boolean: Pause on hover, true or false
            pauseControls: true,    // Boolean: Pause when hovering controls, true or false
            prevText: "Previous",   // String: Text for the "previous" button
            nextText: "Next",       // String: Text for the "next" button
            maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
            controls: "",           // Selector: Where controls should be appended to, default is after the 'ul'
            namespace: "rslides",   // String: change the default namespace used
            before: function () { },   // Function: Before callback
            after: function () { }     // Function: After callback
	});
	*/