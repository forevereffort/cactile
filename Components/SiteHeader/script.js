jQuery(document).ready(function () {
  jQuery('.header-mobile-btn').click(function () {
    if (jQuery(this).hasClass('is-active')) {
      jQuery(this).removeClass('is-active')
      jQuery('.header-nav').slideUp()
    } else {
      jQuery(this).addClass('is-active')
      jQuery('.header-nav').slideDown()
    }
  })

  jQuery('.header-nav a').click(function () {
    if (jQuery('.header-mobile-btn').hasClass('is-active')) {
      jQuery('.header-mobile-btn').removeClass('is-active')
      jQuery('.header-nav').hide()
    }

    const sectionId = jQuery(this).attr('data-section-id')

    if (jQuery(`${sectionId}`).length > 0) {
      jQuery('html, body').animate({
        scrollTop: jQuery(`${sectionId}`).offset().top
      }, 1000)
    }

    return false
  })
})
