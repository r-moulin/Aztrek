jQuery(document).ready(function($) {
  //Owl carousel

  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:-1,
    responsiveClass:true,
    center:true,
    nav:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
  })
  $( ".owl-prev").html('<i class="fas fa-long-arrow-alt-left fa-5x"></i>');
  $( ".owl-next").html('<i class="fas fa-long-arrow-alt-right fa-5x"></i>');




// StellarNav RWD Menu
jQuery('.stellarnav').stellarNav({
  theme: 'light',
  breakpoint: 768, 
  openingSpeed: 400,
  showArrows: true,
  menuLabel : 'Menu',
  position: 'top',
  phoneBtn: '02.99.12.34.56',
  locationBtn: 'https://goo.gl/maps/kf8PThBMy9z',
  sticky     : true,
  mobileMode: false,

  });});