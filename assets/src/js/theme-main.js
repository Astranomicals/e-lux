/*! Incredible Marketing Theme Main JS */

(function ($, window, document, undefined) {
	'use strict';

	$(document).ready(function () {
		var $cache = {
			window: $(window),
			document: $(document),
			html: $('html').eq(0),
			body: $('body').eq(0),
			jsToTop: $('.js-to-top'),
			jsScrollTo: $('.js-scroll-to'),
			siteWrap: $('.site-wrap'),
			siteNav: $('.site-nav'),
		};

		var IM = {
			init: function () {
				this.utils.init();
			},
			utils: {
				init: function () {
					this.openAnim();
					this.siteNavSticky();
					this.mobileMenu();
					this.scrollTo();
					this.mag();
					this.pageAnim();
					this.parallax();
				},
				parallax: function () {
					gsap.registerPlugin(ScrollTrigger);
					if ($(`.page--header`).length > 0) {
						gsap.to('.page--header .background--image img', {
							yPercent: -50,
							ease: 'none',
							scrollTrigger: {
								trigger: '.page--header',
								scrub: true,
								pin: false,
								start: 'top 25%',
								end: 'bottom top',
							},
						});
					}

					if ($(`.block--hero`).length > 0) {
						gsap.to('.block--hero .background--image img', {
							yPercent: -35,
							ease: 'none',
							scrollTrigger: {
								trigger: '.block--hero',
								scrub: true,
								pin: false,
								start: 'bottom bottom',
								end: 'bottom top',
							},
						});
					}
				},
				pageAnim: function () {
					let callback = function (entries, observer) {
						entries.forEach(function (entry) {
							if (entry.isIntersecting) {
								entry.target.timeline.play();
							}
						});
					};

					let options = {
						threshold: 0.4, // target 'section' should be 60% visible
						rootMargin: '0px',
					};

					let observer = new IntersectionObserver(callback, options);
					let targets = document.querySelectorAll('section');

					// a loop: create the individual target timelines
					targets.forEach(function (target) {
						let targetAnim = gsap.timeline({ paused: true });

						if ($(target).find('.fade-in-left').length > 0) {
							let fil = $(target).find('.fade-in-left');
							targetAnim.staggerFrom(
								fil,
								1,
								{ autoAlpha: 0, xPercent: -100 },
								0.35
							);
						}

						if ($(target).find('.fade-in').length > 0) {
							let fi = $(target).find('.fade-in');
							targetAnim.staggerFrom(fi, 1, { autoAlpha: 0 }, 0.35);
						}

						if ($(target).find('.fade-in-right').length > 0) {
							let fir = $(target).find('.fade-in-right');
							targetAnim.staggerFrom(
								fir,
								1,
								{ autoAlpha: 0, xPercent: 100 },
								0.35
							);
						}
						if ($(target).find('.fade-in-bottom').length > 0) {
							let fib = $(target).find('.fade-in-bottom');
							targetAnim.staggerFrom(
								fib,
								1,
								{ autoAlpha: 0, yPercent: 100 },
								0.35
							);
						}

						target.timeline = targetAnim;
					});

					Array.prototype.forEach.call(targets, (el) => {
						observer.observe(el);
					});
				},
				mag: function () {
					$('.popup-youtube').magnificPopup({
						disableOn: 700,
						type: 'iframe',
						mainClass: 'mfp-fade',
						removalDelay: 160,
						preloader: false,
						fixedContentPos: false,
					});
				},
				openAnim: function () {
					var openTween = new TimelineMax();
					openTween.to('.site-nav .menu', 1, { opacity: 1, left: 0 }, 0.5);
					openTween.to('.site-nav .top--nav a', 0.5, { opacity: 1 }, 1);
				},
				siteNavSticky: function () {
					if ($cache.window.scrollTop() > 0) {
						$cache.siteNav.addClass('sticky');
					}
					$cache.window.scroll(function () {
						if ($cache.window.scrollTop() > 0) {
							$cache.siteNav.addClass('sticky');
						} else {
							$cache.siteNav.removeClass('sticky');
						}
					});
				},
				mobileMenu: function () {
					/* stop jump to top if link is # */
					$('a[href="#"]').on('click', function (e) {
						e.preventDefault();
					});

					$('.menu__mobile .menu > li.menu-item > a').wrapInner(
						'<span></span>'
					);

					$(
						'.menu__mobile .primary--menu .menu>li>.sub-menu>li>a:not([href=#])'
					).append("<i class='fal fa-long-arrow-right'></i> <span>More</span>");
					$('.menu__mobile .primary--menu .menu>li>.sub-menu').append(
						"<button data-toggle='back' aria-label='Menu Back Button'><span>Back</span> <i class='fal fa-long-arrow-right'></i></button>"
					);

					$('.menu__mobile .menu > li.menu-item-has-children > a').on(
						'click',
						function (e) {
							e.preventDefault();
							$('.menu__mobile .menu > li').removeClass('active');
							$('.menu__mobile').addClass('open-inner-menu');
							$('.primary--menu').addClass('shrink');
							$(this).parent().addClass('active');
						}
					);
					$(".menu__mobile button[data-toggle='back']").on(
						'click',
						function (e) {
							e.preventDefault();
							$('.menu__mobile .menu > li').removeClass('active');
							$('.primary--menu').removeClass('shrink');
						}
					);

					var tl = new TimelineLite({ paused: true, reversed: true });

					tl.to('.menu__mobile', 1, {
						zIndex: 999999,
						opacity: 1,
						left: 0,
					});

					$('[data-toggle="menu"]').on('click', function () {
						tl.reversed() ? tl.play() : tl.reverse();
					});
					$('.menu__mobile .background--image').on('click', function () {
						tl.reversed() ? tl.play() : tl.reverse();
					});
				},
				scrollTo: function () {
					// Animate the scroll to top
					$cache.jsToTop.on('click', function (e) {
						e.preventDefault();
						$('html, body').animate({ scrollTop: 0 }, 300);
					});

					// Animate scroll to id
					$cache.jsScrollTo.on('click', function (e) {
						e.preventDefault();
						var href = $(this).attr('href'),
							scrollPoint = $(href).offset();
						$('html, body').animate({ scrollTop: scrollPoint.top }, 300);
					});
				},
			},
		};

		IM.init();
	});
})(jQuery, window, document);
