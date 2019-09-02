
var Rellax = require('rellax');
require('jquery.scrollex');

var app = {
  init: function() {
    console.log('init');
    app.initRellax();
    app.addHeaderScrollEventListener();
    app.addOverlayEventListeners();
    
  },
  initRellax: function() {
    app.rellax = new Rellax('.rellax');
    
  },

  

  /**
   * Adds scroll's events listeners to header
   */
  addHeaderScrollEventListener: function() {
    $('.banner').scrollex({
      'enter': app.enterBanner,
      'leave': app.leaveBanner
    });
  },

  enterBanner: function() {
    $('.header').removeClass('header--fixed');
  },

  leaveBanner: function() {
    $('.header').addClass('header--fixed');
  },

  addOverlayEventListeners: function() {
    $('.openOverlay').on(
      'click',
      app.openOverlay
    );

    $('.closeOverlay').on(
      'click',
      app.closeOverlay
    );
  },

  openOverlay: function() {
    $('.overlay').removeClass('overlay--hidden');
    $('body').addClass('blur');
  },

  closeOverlay: function() {
    console.log('closeOverlay');
    $('.overlay').addClass('overlay--hidden');
    $('body').removeClass('blur');
  },
  
};

$(app.init);




