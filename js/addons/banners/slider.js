/**
 *
 * bannerSlider
 *
 */
(function (_, $) {
  $.fn.bannerSlider = function (params) {
    let icon_left_open_thin = '<span class="ty-icon icon-left-open-thin"></span>',
      icon_right_open_thin = '<span class="ty-icon icon-right-open-thin"></span>';
    var defaults = {
        delay: 7000,
        navigation: 'N'
      },
      intervals = [],
      rotate = function (elm) {
        var slider = elm.data('slider');
        if (!slider) {
          return stopSlider();
        }
        var triggerID = slider.active.data('caBannerIteration') - 1;
        var imagePosition = triggerID * slider.imageWidth;
        $('.cm-paging a', elm).removeClass('active');
        slider.active.addClass('active');
        $('.cm-slide-page-reel', elm).animate({
          left: -imagePosition
        }, 500);
      },
      rotateSwitch = function (elm) {
        var slider = elm.data('slider');
        if (!slider) {
          return stopSlider();
        }
        slider.play = setInterval(function () {
          switchPage(elm, true);
          rotate(elm);
        }, slider.delay);
        intervals.push({
          id: slider.play,
          obj: slider
        });
      },
      stopSlider = function () {
        for (var i = 0; i < intervals.length; i++) {
          if (!intervals[i].obj.length) {
            clearInterval(intervals[i].id);
          }
        }
      },
      switchPage = function (elm, forward) {
        var slider = elm.data('slider');
        if (!slider) {
          return stopSlider();
        }
        if (forward) {
          slider.active = $('.cm-paging a.active', elm).next();
          if (slider.active.length === 0) {
            slider.active = $('.cm-paging a:first', elm);
          }
        } else {
          slider.active = $('.cm-paging a.active', elm).prev();
          if (slider.active.length === 0) {
            slider.active = $('.cm-paging a:last', elm);
          }
        }
      },
      rotatePage = function (elm) {
        rotateStop(elm);
        rotate(elm);
      },
      rotateStop = function (elm) {
        if (elm.data('slider').play) {
          clearInterval(elm.data('slider').play);
        }
      },
      checkLoadSlider = function (elm) {
        var container = elm.parents(':hidden:first');
        if (container.length) {
          // to load slider correctly temporary show hidden elements
          container.css({
            'opacity': '0'
          }).show();
        }
        loadSlider(elm);
        if (container.length) {
          container.hide().css({
            'opacity': '1'
          });
        }
      },
      loadSlider = function (obj) {
        if (obj.data('slider')) {
          return;
        }
        var slider = $.extend(defaults, params);
        slider.active = $('.cm-paging a:first', obj);
        slider.active.addClass('active');
        slider.imageWidth = $('.cm-slider-window', obj).width();
        slider.imageHeight = 0;
        $('.cm-slide-page', obj).each(function () {
          if ($(this).height() > slider.imageHeight) {
            slider.imageHeight = $(this).height();
          }
        });
        $('.cm-slider-window', obj).height(slider.imageHeight);
        $('.cm-slide-page', obj).css({
          'width': slider.imageWidth,
          'height': slider.imageHeight
        });
        var imageSum = $('.cm-slide-page-reel .cm-slide-page', obj).length;
        var imageReelWidth = slider.imageWidth * imageSum;
        $('.cm-slide-page-reel', obj).css({
          'width': imageReelWidth
        });
        obj.data('slider', slider);
        obj.hover(function () {
          rotateStop(obj);
        }, function () {
          rotateSwitch(obj);
        });
        if (slider.navigation == 'D' || slider.navigation == 'P') {
          $('.cm-paging', obj).show();
          $('.cm-paging a', obj).click(function () {
            obj.data('slider').active = $(this);
            rotatePage(obj);
            return false;
          });
        } else if (slider.navigation == 'A') {
          // add navigation arrows
          var btn_prev = $('<div class="cm-slide-prev">' + icon_left_open_thin + '</div>').appendTo(obj);
          btn_prev.css('bottom', slider.imageHeight / 2 + 'px');
          btn_prev.click(function () {
            switchPage(obj, false);
            rotatePage(obj);
            return false;
          });
          var btn_next = $('<div class="cm-slide-next">' + icon_right_open_thin + '</div>').appendTo(obj);
          btn_next.css('bottom', slider.imageHeight / 2 + 'px');
          btn_next.click(function () {
            switchPage(obj, true);
            rotatePage(obj);
            return false;
          });
        }
        rotateSwitch(obj);
      };
    this.each(function () {
      checkLoadSlider($(this));
    });
  };
})(Tygh, Tygh.$);