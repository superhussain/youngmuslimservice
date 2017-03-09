var $ = jQuery;

$(document).ready(function() {
  navScroll();
  hamburger();
  heroRotate();
  followingCTA();
  gallerySideBarFixed();
  galleryToggle();

  $(window).scroll(function() {
    followingCTA();
  });
});

function navScroll() {
  $(window).on('scroll', function() {
    var vscroll = document.body.scrollTop;
    if (vscroll > 100) {
      $('.site-header').addClass('sticky');
    } else {
      $('.site-header').removeClass('sticky');
    }
  });
}

function hamburger() {
  $('.hamburger-menu').on('click', function() {
    $('.hamburger-menu .bar').toggleClass('animate');
    $('.main-navigation').toggleClass('open');
  });
}

function heroRotate() {
  var counter = 2;

  setInterval(function() {
    rotateHeroText(counter);
    rotateHeroBg(counter);
    counter++;
    if (counter > 3) counter = 1;
  }, 5000);

  function rotateHeroText(x) {
    $('.hero__subtitle').removeClass('shown');
    $('.hero__subtitle:nth-of-type('+x+')').addClass('shown');
  }

  function rotateHeroBg(x) {
    $('.hero__backgrounds img').removeClass('shown');
    $('.hero__backgrounds img:nth-of-type('+x+')').addClass('shown');
  }
}

function followingCTA() {
  var scrollTop = $(window).scrollTop(),
      introTop = $('section.hero') ? $('section.hero').height() : 680;
  if (scrollTop >= introTop) {
    $('.following-cta').removeClass('hide');
  } else {
    $('.following-cta').addClass('hide');
  }
}

function gallerySideBarFixed() {
  $(window).on('scroll', function() {
    if (location.href.indexOf('_id=41') > -1 || location.href.indexOf('/past-events') > -1) {
      if (window.matchMedia("(min-width: 1000px)").matches) {
        var vscroll = document.body.scrollTop;
        if (vscroll > 520) {
          $('.gallery__controls').addClass('fixed');
        } else {
          $('.gallery__controls').removeClass('fixed');
        }
      } else {
        $('.gallery__controls').removeClass('fixed');
      }
    }
  });
}

function galleryToggle() {
  if (location.href.indexOf('_id=41') > -1 || location.href.indexOf('/past-events') > -1) {
    var galleryItems = $('.page-past-events .gallery__item');
    var galleries = $('.page-past-events .gallery__images');

    galleryItems.on('click', function(e) {
      if (!$(this).hasClass('active')) {
        var target = $(this).attr('class').split(' ')[1].split('item__')[1];

        galleryItems.removeClass('active');
        $(this).addClass('active');

        galleries.find('> div').removeClass('active');
        galleries.find('.'+target).addClass('active');
      }

      e.stopPropagation();
      e.preventDefault();
    });

    galleryItems.find('a').on('click', function(e) { e.preventDefault(); });
  }
}