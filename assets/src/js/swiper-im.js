/*! Incredible Marketing Swiper JS */

// Import Swiper and modules
import SwiperCore, {
	Swiper,
	EffectFade,
	Navigation,
	Pagination,
	Thumbs,
	Autoplay,
} from 'swiper/core';

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

const swiper_gallery_single = new Swiper('.gallery-single--container', {
	slidesPerView: 1,
	navigation: {
		nextEl: '.gallery-single--container .swiper-button-next',
		prevEl: '.gallery-single--container .swiper-button-prev',
	},
});

const swiper_team = new Swiper('.team--container', {
	slidesPerView: 1,
	spaceBetween: 20,
	breakpoints: {
		768: {
			slidesPerView: 2,
		},
		991: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 4,
		},
	},
});
const swiper_steps = new Swiper('.swiper--steps', {
	slidesPerView: 1,
	spaceBetween: 20,
	navigation: {
		nextEl: '.swiper--steps .swiper-button-next',
		prevEl: '.swiper--steps .swiper-button-prev',
	},
	pagination: {
		el: '.swiper--steps .swiper-pagination',
		clickable: true,
	},
});

const swiper_related_post = new Swiper('.related-slider', {
	slidesPerView: 1,
	spaceBetween: 20,
	breakpoints: {
		768: {
			slidesPerView: 2,
		},
		991: {
			slidesPerView: 3,
		},
	},
});
