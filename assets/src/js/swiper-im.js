/*! Astranomicals Swiper JS */

// Import Swiper and modules
import SwiperCore, {
	Swiper,
	EffectFade,
	Navigation,
	Pagination,
	Thumbs,
	Autoplay,
	EffectCoverflow,
} from 'swiper/core';

// Install modules
SwiperCore.use([Swiper, EffectCoverflow, EffectFade, Navigation, Pagination, Thumbs, Autoplay]);

const homepageContainers = document.querySelectorAll('.product--slider');
homepageContainers.forEach((homepageSlider) => {
	const slider = new Swiper(homepageSlider, {
		slidesPerView: 1,
		autoplay: {
			delay: 6000,
		},
		loop: true,
		navigation: {
			nextEl: homepageSlider.querySelector('.swiper-button-next'),
			prevEl: homepageSlider.querySelector('.swiper-button-prev'),
		},
	});
});
const video_slider = new Swiper('.video--container', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	loop:true,
	slidesPerView: 'auto',
	coverflowEffect: {
		rotate: 70,
		stretch: 0,
		depth: 250,
		modifier: 1,
		slideShadows: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});
