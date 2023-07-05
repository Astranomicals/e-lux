/*! Astranomicals Swiper JS */

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

const homepageContainers = document.querySelectorAll('.product--slider');
homepageContainers.forEach((homepageSlider) => {
	const slider = new Swiper(homepageSlider, {
		slidesPerView: 1,
		loop: true,
		navigation: {
			nextEl: homepageSlider.querySelector('.swiper-button-next'),
			prevEl: homepageSlider.querySelector('.swiper-button-prev'),
		},
	});
});
