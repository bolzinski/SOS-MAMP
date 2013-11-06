// @codekit-prepend "enquire.js"

// Be able to use $ instead of jQuery
// Also protect global scope
(function($) {

  // Set up Royal Slider
  var slider = $('#gallery-1').royalSlider({
    addActiveClass: true,
    arrowsNav: false,
    controlNavigation: 'none',
    autoScaleSlider: true,
    autoScaleSliderWidth: 300,
    autoScaleSliderHeight: 150,
    loop: true,
    fadeinLoadedSlide: false,
    globalCaption: false,
    keyboardNavEnabled: true,
    globalCaptionInside: false,
    visibleNearby: {
      enabled: true,
      centerArea: 0.5,
      center: true,
      navigateByCenterClick: true
    }
  }).data("royalSlider");

  // Move slide to start
  slider.goTo(2);

  // Slide changing
  var homeNav = $("#home-nav a")
  slider.ev.on('rsAfterSlideChange', function(event) {

    var mainColor = $(".rsActiveSlide")
      .find(".rsContent")
      .data("main-color");

    $("#first-name").css({
      color: LightenDarkenColor(mainColor, 20)
    });

    $("#last-name").css({
      color: LightenDarkenColor(mainColor, -20)
    });

    for (i = 0; i < 5; i++) {
      homeNav.eq(i).css("border-left-color", LightenDarkenColor(mainColor, i*25));
    }

  });



  // Load additional content if enough room
  enquire
    .register("(min-width: 700px)", {
      match: function() {
        $("#home-article").load("/blog/ #main-article");
      }
    })
    .listen();


})(jQuery);