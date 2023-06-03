/*! Incredible Marketing Swiper JS */

// Import Swiper and modules
import SwiperCore, {
  Swiper,
  EffectFade,
  Navigation,
  Pagination,
  Thumbs,
  Autoplay,
} from "swiper/core";

// Install modules
SwiperCore.use([Swiper, EffectFade, Navigation, Pagination, Thumbs, Autoplay]);

const swiper_gallery = new Swiper('.services--container', {
	slidesPerView: 'auto',
	loop: true,
	spaceBetween: 20,
});

const swiper_video = new Swiper('.video--container', {
	slidesPerView: 1,
	loop: false,
	spaceBetween: 20,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

const swiper_content = new Swiper('.content--slider', {
	slidesPerView: 1,
	loop: false,
	spaceBetween: 20,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});
const swiper_treat = new Swiper('.treat--container', {
	direction: 'vertical',
	slidesPerView: 'auto',
	navigation: {
		nextEl: '.treat--container .swiper-button-next',
		prevEl: '.treat--container .swiper-button-prev',
	},
});

const swiper_team = new Swiper('.team--container', {
	slidesPerView: 4,
	spaceBetween: 20
});
