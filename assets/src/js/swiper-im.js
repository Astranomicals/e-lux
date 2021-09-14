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

const swiper_gallery = new Swiper(".swiper__gallery", {
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
