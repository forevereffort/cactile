import Swiper, { Navigation, A11y, Autoplay, Pagination } from 'swiper/swiper.esm'
import 'swiper/swiper-bundle.css'

Swiper.use([Navigation, A11y, Autoplay, Pagination])

jQuery(document).ready(function () {
  window.plantsSlider = new Swiper('.plant-slider-container', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: 0,
    roundLengths: true,
    autoplay: {
      delay: 5000
    },
    loop: true,
    pagination: {
      el: '.plant-slider-pagination'
    },
    navigation: {
      nextEl: '.plant-slider-next',
      prevEl: '.plant-slider-prev'
    }
  })
})
