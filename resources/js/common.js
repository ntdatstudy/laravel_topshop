// Fix header
$(window).on('scroll', function() {
  let headerNavbar = $('#header .header__nav .nav');
  let win = $(window);
  let winTop = win.scrollTop();
  let winWidth = win.width();

  if (winWidth < 768) return;

  if (winTop > 135) {
      headerNavbar.addClass('fixed-top');
  } else {
      headerNavbar.removeClass('fixed-top');
  }
}).on('resize', function() {
  if ($(this).width() > 768) {
      $('.header__nav .nav, #sidebar').removeClass('active');
      $('body').removeClass('overflow-hidden');
  }
});

// Activate header category
$('.nav-list li a').on('click', function() {
  $(this).toggleClass('active').next().toggleClass('active');
});

// Open category
$('#btn-open-menu').on('click', function() {
  $('.header__nav .nav, #sidebar').addClass('active');
  $('body').addClass('overflow-hidden');
});

// Close cateogry
$('#btn-close-menu').on('click', function() {
  $('.header__nav .nav, #sidebar').removeClass('active');
  $('body').removeClass('overflow-hidden');
});

// Stop transition when page load
$(document).ready(function() {
  setTimeout(function() {
    $('#sidebar, #header').removeClass('preload');
  }, 1000);
});

// Hide sidebar when click outside
$(document).on('mouseup', function(e) {
  let sideBar = $('#sidebar');

  if (!sideBar.is(e.target) && sideBar.has(e.target).length === 0) {
    sideBar.removeClass('active');
  }
});