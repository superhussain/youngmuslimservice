var $ = jQuery;

$(document).ready(function() {
  navScroll();
  hamburger();
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