var $ = jQuery;

$(document).ready(function() {
  navScroll();
  hamburger();
  heroRotate();
  followingCTA();

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