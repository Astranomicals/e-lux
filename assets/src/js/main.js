(function($, window, document, undefined) {
  "use strict";

  $(document).ready(function() {
    var $cache = {
      window: $(window),
      document: $(document),
      html: $("html").eq(0),
      body: $("body").eq(0),
      jsToTop: $(".js-to-top"),
      jsScrollTo: $(".js-scroll-to"),
      siteWrap: $(".site-wrap"),
      siteNav: $(".site-nav")
    };

    var IM = {
      init: function() {
        this.utils.init();
      },
      utils: {
        init: function() {
          this.scrollTo();
          this.dataCss();
          this.scrollMagic();
          this.mobileMenu();
          this.siteNavSticky();
          this.galleryBuilder();
					this.swiperSetup();
					this.popups();
					this.openAnim();
				},
				openAnim: function(){
          var openTween = new TimelineMax();
          openTween.to(".site-nav .dermacare-logo", 1, { opacity: 1, top: 0 }, .5);
          openTween.to(".site-nav #menu-left-menu-1", 1, { opacity: 1, left: 0 }, .5);
          openTween.to(".site-nav #menu-right-menu-1", 1, { opacity: 1, right: 0 }, .5);
          openTween.to(".site-nav .top--nav a", 0.5, { opacity: 1 }, 1);
					openTween.to(".block--hero .content--square", 1.5, { opacity: 1, top: 0 }, 1);					
				},
				popups: function(){
						$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
							disableOn: 700,
							type: 'iframe',
							mainClass: 'mfp-fade',
							removalDelay: 160,
							preloader: false,
							fixedContentPos: false
						});
				},
        siteNavSticky: function() {
					if ($cache.window.scrollTop() > 0) {
						$cache.siteNav.addClass("sticky");
					}
          $cache.window.scroll(function() {
            if ($cache.window.scrollTop() > 0) {
              $cache.siteNav.addClass("sticky");
            } else {
              $cache.siteNav.removeClass("sticky");
            }
          });
        },
        mobileMenu: function() {
          /* stop jump to top if link is # */
          $('a[href="#"]').on("click", function(e) {
            e.preventDefault();
          });

          $(".menu__mobile .menu li.menu-item-has-children > a").after(
            '<i class="fal fa-angle-down"></i>'
          );

          $(".menu__mobile .menu li.menu-item-has-children i").on(
            "click",
            function() {
              $(this)
                .closest(".menu-item-has-children")
                .find("> .sub-menu")
                .toggleClass("active");
            }
          );

          var tl = new TimelineLite({ paused: true, reversed: true });

          tl.to(".menu__mobile", 0.1, {
            zIndex: 9999,
            opacity: 1,
            left: 0
          });
          tl.staggerTo(
            ".menu__mobile .menu > li",
            0.25,
            { left: 0, opacity: 1 },
            0.1
          );

          $('[data-toggle="menu"]').on("click", function() {
            tl.reversed() ? tl.play() : tl.reverse();
          });
        },
        scrollTo: function() {
          // Animate the scroll to top
          $cache.jsToTop.on("click", function(e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, 300);
          });

          // Animate scroll to id
          $cache.jsScrollTo.on("click", function(e) {
            e.preventDefault();
            var href = $(this).attr("href"),
              scrollPoint = $(href).offset();
            $("html, body").animate({ scrollTop: scrollPoint.top }, 300);
          });
        },
        dataCss: function() {
          // background images
          $("[data-bg-image]").each(function() {
            var $this = $(this);
            $this.css({
              "background-image": 'url("' + $this.data("bgImage") + '")'
            });
          });

          // background colors
          $("[data-bg-color]").each(function() {
            var $this = $(this);
            $this.css({
              "background-color": $this.data("bgColor")
            });
          });
        },
        scrollMagic: function() {
          var $blocks = $cache.siteWrap.children(".block"),
            controller = new ScrollMagic.Controller();

          $blocks.each(function(i, item) {
            new ScrollMagic.Scene({
              triggerElement: item,
              duration: item.outerHeight,
              triggerHook: 0.9,
              reverse: false
            })
              .on("enter", function() {
                var $current = $blocks.eq(i);
                // Example usage

                var tl = new TimelineMax({
                  paused: true,
                  force3D: true,
                  ease: Circ.easeInOut
                });
                var tl2 = new TimelineMax({
                  paused: true,
                  force3D: true,
                  ease: Circ.easeInOut
                });

                tl.to($current.find(".fade-in-left"), 0.6, {
                  autoAlpha: 1,
                  left: 0
                });
                tl.to($current.find(".fade-in-right"), 0.6, {
                  autoAlpha: 1,
                  right: 0
                });
                tl2.to($current.find(".fade-in"), 0.6, {
                  autoAlpha: 1
                });
                tl2.to($current.find(".fade-in-bottom"), 0.6, {
                  autoAlpha: 1,
                  bottom: 0
                });
                tl.play();
                tl2.play();
              })
              // Comment "addIndicators()" in/out to use
              // .addIndicators()
              .addTo(controller);
          });
        },
        galleryBuilder: function() {
          loadmore();
          clickLoadmore();
          clickLightBox();

          if ($("#archive-box").length > 0) {
            var $p_id = $("#archive-box").data("setProcedure");
						var $d_id = $("#archive-box").data("setDoctor");
						$('select[data-toggle="categories"] option[data-set-procedure="'+$p_id+'"]').attr('selected','selected');
						$('select[data-toggle="surgeons"] option[data-set-doctor="'+$d_id+'"]').attr('selected','selected');
						console.log($p_id + " " + $d_id);
						$("#archive-box").remove();
            $("#grid__gallery").fadeOut("slow", function() {
              $.ajax({
                url: im.ajax_url,
                type: "get",
                data: {
                  action: "get_gallery_info",
                  taxid: $p_id,
                  doctorid: $d_id
                },
                success: function(response) {
                  $("#grid__gallery")
                    .empty()
                    .append(response)
                    .fadeIn("slow", function() {
											loadmore();
                    });
                  clickLoadmore();
                  clickLightBox();
									toggleGallery();
                }
              });
            });
          }
          $('select[data-toggle="categories"], select[data-toggle="surgeons"]').on("change", function() {
            var $tax_id = $('select[data-toggle="categories"]').find(":selected").data("setProcedure");
						var $doctor_id = $('select[data-toggle="surgeons"]').find(":selected").data("setDoctor");

            $("#grid__gallery").fadeOut("slow", function() {
              $.ajax({
                url: im.ajax_url,
                type: "get",
                data: {
                  action: "get_gallery_info",
                  taxid: $tax_id,
                  doctorid: $doctor_id
                },
                success: function(response) {
                  $("#grid__gallery")
                    .empty()
                    .append(response)
                    .fadeIn("slow", function() {
											loadmore();
                    });
                  clickLoadmore();
                  clickLightBox();
									toggleGallery();
                }
              });
            });
          });

					function toggleGallery() {
						$('.small__images').on('click', function(){
							var $large_first = $(this).parent().parent().find('.large__images');
							var $large_last = $(this).parent().parent().find('.large__images');
							var $temp_first = $large_first.find('.image--holder:first-of-type img').attr("src");
							var $temp_last = $large_last.find('.image--holder:last-of-type img').attr("src");
							var $small_first = $(this).find('.image--holder:first-of-type img');
							var $small_last = $(this).find('.image--holder:last-of-type img');
							
							$large_first.find('.image--holder:first-of-type img').attr("src", $small_first.attr("src"));
							$large_last.find('.image--holder:last-of-type img').attr("src", $small_last.attr("src"));
							$($small_first).attr("src", $temp_first);
							$($small_last).attr("src", $temp_last);
						});
					}

          function loadmore() {
						if($(".gallery__item").length === 0){
							$('.empty-gallery').show();							
							$('button[data-toggle="load-more"]').hide();
						}else{
							$('.empty-gallery').hide();							
							$('button[data-toggle="load-more"]').fadeIn();
							$(".gallery__item")
								.slice(10, 100)
								.hide();
							if ($(".gallery__item:hidden").length === 0) {
								$('button[data-toggle="load-more"]').fadeOut("slow");
							}
						}
          }

          function clickLoadmore() {
            $('button[data-toggle="load-more"]').on("click", function(e) {
              e.preventDefault();
              $(".gallery__item:hidden")
                .slice(0, 9)
                .slideDown();
              if ($(".gallery__item:hidden").length == 0) {
                $('button[data-toggle="load-more"]').fadeOut("slow");
              }
            });
          }

          function clickLightBox() {
            $('[data-toggle="lightbox"').on("click", function() {
              $(this)
                .closest(".gallery__item")
                .find(".lightbox--patient")
                .toggleClass("open-lightbox");

              if (
                $(this)
                  .closest(".gallery__item")
                  .next(".gallery__item").length <= 0
              ) {
                $(this)
                  .closest(".gallery__item")
                  .find(".swiper-button-next")
                  .hide();
              }
              if (
                $(this)
                  .closest(".gallery__item")
                  .prev(".gallery__item").length <= 0
              ) {
                $(this)
                  .closest(".gallery__item")
                  .find(".swiper-button-prev")
                  .hide();
              }
            });
          }
				},
        swiperSetup: function() {
          var gallery_block = new Swiper(".swiper__gallery", {
            slidesPerView: 1,
            loop: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev"
            }
          });
        }
      }
    };

    IM.init();
  });
})(jQuery, window, document);
