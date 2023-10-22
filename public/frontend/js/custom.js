
(function ($) {
	'use strict';

	$(window).on('load', function(){
		$("#preloader").removeClass("loader_show");
		$("#preloader").addClass("hide");
		$(".loader").addClass("fadeout");
		$("body").addClass("enable_page");
	})

	/* Custom mouse cursor */
	document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
		e.style.left = n.clientX + "px",
		e.style.top = n.clientY + "px"
	});
	var	e = document.getElementById("wptb-pointer");

	$(document).mousemove(function(e) {

		$(".slick-next, .slick-prev, input.button, a, .aside_open, .aside_close, .ma5menu__toggle")
		.on("mouseenter", function() {
			$('.wptb-pointer').addClass("wptb-large-pointer")
		})
		.on("mouseleave", function() {
			$('.wptb-pointer').removeClass("wptb-large-pointer")
		})

		$(".slick-dots li, .form-control")
		.on("mouseenter", function() {
			$('.wptb-pointer').addClass("wptb-small-pointer")
		})
		.on("mouseleave", function() {
			$('.wptb-pointer').removeClass("wptb-small-pointer")
		})

		$(".slick-slider")
		.on("mouseenter", function() {
			$('.wptb-pointer').addClass("wptb-drag-pointer")
		})
		.on("mouseleave", function() {
			$('.wptb-pointer').removeClass("wptb-drag-pointer")
		})

		$(".wptb-pointer-none")
		.on("mouseenter", function() {
			$('.wptb-pointer').addClass("wptb-none-pointer")
		})
		.on("mouseleave", function() {
			$('.wptb-pointer').removeClass("wptb-none-pointer")
		})

	});
   
	// Add Menu Item Current Class Auto
	function dynamicCurrentMenuClass(selector) {
		let FileName = window.location.href.split("/").reverse()[0];

		selector.find("li").each(function () {
			let anchor = $(this).find("a");
			if ($(anchor).attr("href") == FileName) {
				$(this).addClass("active");
			}
		});
		// if any li has .current elmnt add class
		selector.children("li").each(function () {
			if ($(this).find(".active").length) {
				$(this).addClass("active");
			}
		});
		// if no file name return
		if ("" == FileName) {
			selector.find("li").eq(0).addClass("active");
		}
	}
	
	if ($('.header .mainnav .main_menu').length) {
		dynamicCurrentMenuClass($('.header .mainnav .main_menu'));
	}
   

	

	// Swiper Slider 
	 var swiper1 = new Swiper('.swiper_theme_slider_1', {
		slidesPerView: '1',
		// centeredSlides: true,
		speed: 1600,
		spaceBetween: 50,
		parallax: true,
		autHeight: true,
		mousewheel: false,
		effect: 'slide',
		controller: {
			inverse: true,
		},
		slideToClickedSlide: true,
		lazyLoading: true,
		loop: false,
		keyboard: {
			enabled: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true,
		},
	});
	
	// $(window).on("resize", function() {
	//     var bodyheight = $(this).height();
	//     $(".swiper_theme_slider_1").height(bodyheight);
	// }).resize();


	// Swiper Slider 
	var swiper2 = new Swiper('.swiper_theme_slider_2', {
		slidesPerView: '1',
		// centeredSlides: true,
		speed: 1600,
		spaceBetween: 50,
		parallax: true,
		autHeight: true,
		mousewheel: false,
		effect: 'slide',
		controller: {
			inverse: true,
		},
		slideToClickedSlide: true,
		lazyLoading: true,
		loop: false,
		keyboard: {
			enabled: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			// dynamicBullets: true,
		},
	});

	// $(window).on("resize", function() {
	//     var bodyheight = $(this).height();
	//     $(".swiper_theme_slider_2").height(bodyheight);
	// }).resize();

	// Swiper Slider 
	var swiper3 = new Swiper('.swiper_blog_category', {
		slidesPerView: '1',
		// centeredSlides: true,
		speed: 1600,
		spaceBetween: 10,
		parallax: true,
		autHeight: true,
		mousewheel: false,
		effect: 'slide',
		controller: {
			inverse: true,
		},
		slideToClickedSlide: true,
		lazyLoading: true,
		loop: false,
		keyboard: {
			enabled: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true,
		},
		breakpoints: {
			640: {
			  slidesPerView: 2,
			},
			768: {
			  slidesPerView: 3,
			},
			991: {
			  slidesPerView: 3,
			},			
			1200: {
				slidesPerView: 4,
			  },
		  },
	});

	// Swiper Slider 
	var swiper3 = new Swiper('.swiper_related_posts', {
		slidesPerView: '1',
		// centeredSlides: true,
		speed: 1600,
		spaceBetween: 30,
		parallax: true,
		autHeight: true,
		mousewheel: false,
		effect: 'slide',
		controller: {
			inverse: true,
		},
		slideToClickedSlide: true,
		lazyLoading: true,
		loop: false,
		keyboard: {
			enabled: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true,
		},
		breakpoints: {
			640: {
			  slidesPerView: 1,
			},
			768: {
			  slidesPerView: 2,
			},
			991: {
			  slidesPerView: 2,
			},			
			1200: {
				slidesPerView: 3,
			  },
		  },
	});

	// Swiper Slider 
	var swiperShop = new Swiper('.swiper_sidebar_shop_slider', {
		slidesPerView: '1',
		autoplay: {
			delay: 2500,
		},
		speed: 1600,
		spaceBetween: 0,
		parallax: true,
		autHeight: true,
		mousewheel: false,
		effect: 'slide',
		controller: {
			inverse: true,
		},
		slideToClickedSlide: true,
		lazyLoading: true,
		loop: false,
		keyboard: {
			enabled: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true,
		},
	});

	// Swiper Slider 
	var swiperpodcast = new Swiper('.swiper_podcast', {
		slidesPerView: '1',
		// centeredSlides: true,
		speed: 1600,
		spaceBetween: 50,
		parallax: true,
		autHeight: true,
		mousewheel: false,
		effect: 'slide',
		controller: {
			inverse: true,
		},
		slideToClickedSlide: true,
		lazyLoading: true,
		loop: false,
		keyboard: {
			enabled: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			// dynamicBullets: true,
		},
	});


	// Swiper Gallery 
	var swiperGallery = new Swiper('.swiper_gallery', {
		slidesPerView: '1',
		// centeredSlides: true,
		speed: 1600,
		spaceBetween: 0,
		parallax: true,
		autHeight: false,
		mousewheel: false,
		effect: 'fade',
		lazyLoading: true,
		loop: true,
		autoplay: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			dynamicBullets: true,
		},
	});

	// Youtube
	var $ytvideoTrigger = $(".ytplay_btn");
	$ytvideoTrigger.on("click", function(evt) {  
		$(".ytube_video").addClass("play");
		$("#ytvideo")[0].src += "?autoplay=1";
	});

	
	// Local
	var $videoTrigger = $(".play_btn");
	var $videoContainer = $(".local_video");
	$videoTrigger.on("click", function(evt) {  
		if ($videoContainer.hasClass("play")) {
			$videoContainer
			.removeClass("play")
			.find("video").get(0).pause();
		}
		else {
			$videoContainer
			.addClass("play")
			.find("video").get(0).play();
		}
	});

	// Search width increase
	$('.header_search .search_form .form-control').on("click", function(e) { 
		$('.header_search .search_form').removeClass('active');
		$(e.target).closest('.header_search .search_form').addClass('active');
		
	});
	$(document).on("click", function(e) { 
		if($(e.target).closest('.header_search .search_form').length==0) { 
		   	$('.header_search .search_form').removeClass('active');  
		}
	});


	// Product Zoom
	$('.product_zoom_button_group > li > a').eq(0).addClass( "selected" );
	$('.product_zoom_container > .product_zoom_info').eq(0).css('display','block');
	$('.product_zoom_button_group').on("click",function(e){
		if($(e.target).is("a")){

			/*Handle Tab Nav*/
			$('.product_zoom_button_group > li > a').removeClass( "selected");
			$(e.target).addClass( "selected");
			
			/*Handles Tab Content*/
			var clicked_index = $("a",this).index(e.target);
			$('.product_zoom_container > .product_zoom_info').css('display','none');
			$('.product_zoom_container > .product_zoom_info').eq(clicked_index).fadeIn();
		}
		$(this).blur();
		return false;
	});


	// Day-Night Mode Switcher
	var icon = document.getElementById("mode_switcher");

	// if (localStorage.getItem("theme") === "null"){
	//     localStorage.setItem("theme", "dark");
	// }

	// let localData = localStorage.getItem("theme");

	// if (localData === "dark") {
	//     icon.innerHTML = '<span><i class="bi bi-sun-fill"></i></span>';
	//     document.body.classList.remove("dark-theme");
	// } else if (localData === "light"){
	//     icon.innerHTML = '<span><i class="bi bi-moon-fill"></i></span>';
	//     document.body.classList.add("dark-theme");
	// }

	icon.onclick = function() {
		document.body.classList.toggle("dark-theme");
		if (document.body.classList.contains("dark-theme")){
			icon.innerHTML = '<span><i class="bi bi-moon-fill"></i></span>';
			localStorage.setItem("theme", "light");
		} else {
			icon.innerHTML = '<span><i class="bi bi-sun-fill"></i></span>';
			localStorage.setItem("theme", "dark");
		}
	}

	// Sticky/Fixed Nav
	var fixedMenuContent = $('.header').html();
	$('.fixed_menu .header').append(fixedMenuContent);

	// Mobile Responsive Menu 
	var mobileLogoContent = $('header .logo').html();
	var mobileMenuContent = $('.mainnav').html();
	$('.mr_menu .logo').append(mobileLogoContent);
	$('.mr_menu .mr_navmenu').append(mobileMenuContent);
	$( '.mr_menu .mr_navmenu ul.main_menu li.menu-item-has-children').append( $( "<span class='submenu_opener d-xl-none'><i class='ion-ios-arrow-right'></i></span>" ) );

	// Sub-Menu Open On-Click
	$('.mr_menu ul.main_menu li.menu-item-has-children .submenu_opener').on("click", function(e){
		$(this).parent().toggleClass('nav_open');
		$(this).siblings('ul').slideToggle();
		e.stopPropagation();
		e.preventDefault();
	});
	
	// Active Mobile Responsive Menu : Add Class in body tag
	$('.mr_menu_toggle').on('click', function(e) {
		$('body').addClass('mr_menu_active');
		e.stopPropagation();
		e.preventDefault();
	});
	$('.mr_menu_close').on('click', function(e) {
		$('body').removeClass('mr_menu_active');
		e.stopPropagation();
		e.preventDefault();
	});
	$('.mr_menu_overlay').on('click', function(e) {
		$('body').removeClass('mr_menu_active');
		e.stopPropagation();
		e.preventDefault();
	});


	// Aside info bar
	$('.aside_open').on("click", function(e) {
		e.preventDefault();
		$('.aside_info').css("left", "0px");
	});

	$('.aside_close').on("click", function(e) {
		e.preventDefault();
		$('.aside_info').css("left", "-500px");
	});

	// Sticky Header
	var body = $("body");
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 300) {
			body.addClass("sticky");
		} else {
			body.removeClass("sticky");
		}
	});
	
	

	// Totop Button
	$('.totop a').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop: 0}, '300');
	});
	
   
})(jQuery);


// Hide header on scroll down
const nav = document.querySelector(".fixed_menu .header");
const scrollUp = "top-up";
let lastScroll = 800;

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 800) {
        nav.classList.remove(scrollUp);
		$('.totop').removeClass('show');
        return;
    }
    
    if (currentScroll > lastScroll) {
        // down
        nav.classList.add(scrollUp);
		$('.totop').addClass('show');

    } else if (currentScroll < lastScroll) {
        // up
        nav.classList.remove(scrollUp);
		$('.totop').removeClass('show');
    }
    lastScroll = currentScroll;
});