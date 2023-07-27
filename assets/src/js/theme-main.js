/*! Astranomicals Theme Main JS */

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
					this.fitSelect();
					this.specsModal();
					this.contactForms();
					this.faqs();
					this.dayNightFeature();
					this.shopFilter();
				},
				shopFilter: function(){
					$(`.block--products button[data-id]`).on(`click`, function(){
						$(`.block--products button[data-id]`).removeClass(`active`);
						$(this).addClass(`active`);
						const data_id = $(this).attr(`data-id`);
						console.log(data_id);

						if(data_id === '-1'){
							$(`.block--products article`).show();
						}else{
							$(`.block--products article`).hide();
							$(`.block--products article[data-terms*="${data_id}"]`).show();
						}
					});
					if($(`.grid--products`).length>0){
						const count = $(`.grid--products .post-preview`).length;
						$(`.filters button span.count`).text(`(${count})`);
					}
				},
				dayNightFeature: function(){
					const timeOfDay = sessionStorage.getItem(`dayNight`);
					if (timeOfDay !== null ){
						if(timeOfDay === `night`){
							$(`.daytime-toggle .toggle--checkbox`).prop( "checked", true );
							sessionStorage.setItem(`dayNight`, 'night');
							$(`body`).removeClass(`day`);
							$(`.daytime-toggle .day`).hide();
							$(`.daytime-toggle .night`).show();
						}else{
							sessionStorage.setItem(`dayNight`, 'day');
							$(`body`).addClass(`day`);
							$(`.daytime-toggle .night`).hide();
							$(`.daytime-toggle .day`).show();
						}
					}else{
						$(`.daytime-toggle .toggle--checkbox`).prop( "checked", true );
						sessionStorage.setItem(`dayNight`, 'night');
						$(`body`).removeClass(`day`);
						$(`.daytime-toggle .night`).hide();
						$(`.daytime-toggle .day`).show();
					}

					$(`.toggle--label`).on(`click`, function(){
						if($(`body`).hasClass(`day`)){
							sessionStorage.setItem(`dayNight`, 'night');
							$(`body`).removeClass(`day`);
							$(`.daytime-toggle .night`).hide();
							$(`.daytime-toggle .day`).show();
						}else{
							sessionStorage.setItem(`dayNight`, 'day');
							$(`body`).addClass(`day`);
							$(`.daytime-toggle .night`).hide();
							$(`.daytime-toggle .day`).show();
						}
					});
				},
				faqs: function(){
					$(`.faq h3`).on(`click`, function(){
						$(`.faq`).removeClass(`active`);
						$(this).parent(`.faq`).addClass(`active`);
					});
				},
				contactForms: function(){
					$(`.contact--options [data-option]`).on(`click`, function(){
						const option = $(this).attr(`data-option`);
						$(`[data-option]`).removeClass(`active`);
						$(`[data-option="${option}"]`).addClass(`active`);
					});
				},
				specsModal: function(){
					$(`.btn-specs`).on(`click`, function(){
						$(`#specs`).addClass(`active`);
						$(`body`).addClass(`modal-active`);
					});
					$(`.details--background, #specs .close`).on(`click`, function(){
						$(`#specs`).removeClass(`active`);
						$(`body`).removeClass(`modal-active`);
					});
				},
				fitSelect: function(){
					if($(`.block--cruiser-fit`).length>0){
						$(`.block--cruiser-fit [data-id="1"]`).addClass(`active`);
					}
					$(`.block--cruiser-fit .title h6`).on(`click`, function(){
						$(`.height--single,.image`).removeClass(`active`);
						const id = $(this).closest(`.height--single`).attr(`data-id`);
						console.log(id);
						$(`[data-id="${id}"]`).addClass(`active`);
					});
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
					$('.btn--play').magnificPopup({
						type: 'iframe',
						iframe: {
							markup:
								'<div class="mfp-iframe-scaler">' +
								'<div class="mfp-close"></div>' +
								'<iframe class="mfp-iframe" frameborder="0" allowfullscreen allow="autoplay *; fullscreen *"></iframe>' +
								'</div>',
							patterns: {
								youtube: {
									index: 'youtube.com/',
									id: function (url) {
										var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
										if (!m || !m[1]) return null;
										return m[1];
									},
									src: '//www.youtube.com/embed/%id%?autoplay=1&iframe=true',
								},
								vimeo: {
									index: 'vimeo.com/',
									id: function (url) {
										var m = url.match(
											/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/
										);
										if (!m || !m[5]) return null;
										return m[5];
									},
									src: '//player.vimeo.com/video/%id%?autoplay=1',
								},
							},
						},
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

					$(`.menu__mobile .primary--menu ul>li.menu-item-has-children>a`).append(`<i class="fal fa-chevron-double-down"></i>`);

					$('.menu__mobile .menu > li.menu-item-has-children > a > i').on(
						'click',
						function (e) {
							e.preventDefault();
							if($(this).parent().parent().hasClass(`active`)){
								$('.menu__mobile .menu > li').removeClass('active');
							}else{
								$('.menu__mobile .menu > li').removeClass('active');
								$('.menu__mobile').addClass('open-inner-menu');
								$('.primary--menu').addClass('shrink');
								$(this).parent().parent().addClass('active');
							}
						}
					);

					var tl = new TimelineLite({ paused: true, reversed: true });

					tl.to('.menu__mobile', 1, {
						opacity: 1,
						top: 0,
					});

					$('[data-toggle="menu"]').on('click', function () {
						tl.reversed() ? tl.play() : tl.reverse();
					});
					$('.menu__mobile .menu--background').on('click', function () {
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
						$('html, body').animate({ scrollTop: scrollPoint.top - 200}, 300);
					});
				},
			},
		};

		IM.init();
	});
})(jQuery, window, document);
