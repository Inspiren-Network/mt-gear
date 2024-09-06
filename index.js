jQuery(document).ready(function ($) {
  responsiveScript()
  animationStart()
  $(window).resize(responsiveScript)

  $('#side-contact .float-btn-trigger').click(function () {
    $(this).toggleClass('toogle')
    $('a.floating-button').toggleClass('toogle')
    $('#side-contact').toggleClass('toogle')
  })

  $('#side-contact .float-btn-trigger').click()

  if ($('.custom-col-fade-up').length) {
    if ($(window).width() > 767) {
      $('.custom-col-fade-up').each(function () {
        gsap.from($(this).children('.wpb_column'), {
          y: $(window).height() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-col-fade-up > .wpb_column').each(function () {
        gsap.from($(this), {
          y: $(window).height() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-col-fade-down').length) {
    if ($(window).width() > 767) {
      $('.custom-col-fade-down').each(function () {
        gsap.from($(this).children('.wpb_column'), {
          y: $(window).height() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-col-fade-down > .wpb_column').each(function () {
        gsap.from($(this), {
          x: $(window).height() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-col-fade-left').length) {
    if ($(window).width() > 767) {
      $('.custom-col-fade-left').each(function () {
        gsap.from($(this).children('.wpb_column'), {
          x: $(window).width() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-col-fade-left > .wpb_column').each(function () {
        gsap.from($(this), {
          x: $(window).width() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-col-fade-right').length) {
    if ($(window).width() > 767) {
      $('.custom-col-fade-right').each(function () {
        gsap.from($(this).children('.wpb_column'), {
          x: $(window).width() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-col-fade-right > .wpb_column').each(function () {
        gsap.from($(this), {
          x: $(window).width() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-fade-up').length) {
    if ($(window).width() > 767) {
      $('.custom-fade-up').each(function () {
        gsap.from($(this).children().children().children().children('.wpb_content_element'), {
          y: $(window).height() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-fade-up > div > div > div > .wpb_content_element').each(function () {
        gsap.from($(this), {
          y: $(window).height() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-fade-down').length) {
    if ($(window).width() > 767) {
      $('.custom-fade-down').each(function () {
        gsap.from($(this).children().children().children().children('.wpb_content_element'), {
          y: $(window).height() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-fade-down > div > div > div > .wpb_content_element').each(function () {
        gsap.from($(this), {
          y: $(window).height() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-fade-left').length) {
    if ($(window).width() > 767) {
      $('.custom-fade-left').each(function () {
        gsap.from($(this).children().children().children().children('.wpb_content_element'), {
          x: $(window).width() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-fade-left > div > div > div > .wpb_content_element').each(function () {
        gsap.from($(this), {
          x: $(window).width() / 10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  if ($('.custom-fade-right').length) {
    if ($(window).width() > 767) {
      $('.custom-fade-right').each(function () {
        gsap.from($(this).children().children().children().children('.wpb_content_element'), {
          x: $(window).width() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    } else {
      $('.custom-fade-right > div > div > div > .wpb_content_element').each(function () {
        gsap.from($(this), {
          x: $(window).width() / -10,
          autoAlpha: 0,
          stagger: 0.3,
          duration: 1,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: $(this),
            start: 'top 85%',
          },
        })
      })
    }
  }

  $(window).on('scroll', function (e) {
    animationStart()
  })

  function responsiveScript() {
    if ($(window).width() > 767 && $('.left-height').length) {
      $('.left-height').each(function () {
        const height = $(this).children('div:first-child').children().innerHeight()
        $(this).css('--height', height + 'px')
      })
    }

    if ($(window).width() > 767 && $('.right-height').length) {
      $('.right-height').each(function () {
        const height = $(this).children('div:last-child').children().innerHeight()
        $(this).css('--height', height + 'px')
      })
    }
  }

  function animationStart() {
    if ($('.wpb_animate_when_almost_visible:not(.wpb_start_animation)').length) {
      $('.wpb_animate_when_almost_visible:not(.wpb_start_animation)').each(function () {
        const offset = $(this).offset().top
        if ($(window).scrollTop() + ($(window).height() / 10) * 8.5 > offset) {
          $(this).addClass('wpb_start_animation animated')
        }
      })
    }
  }
})
