function control_video($video_block, event) {
  var audio = $video_block.find('audio'),
    video = $video_block.find('video');

  audio.each(function(index, item) {
    if (event == 'play') {
      item.play();
    } else if (event == 'pause') {
      item.pause();
    }
  });

  video.each(function(index, item) {
    if (event == 'play') {
      item.play();
    } else if (event == 'pause') {
      item.pause();
    }
  })
}

jQuery.fn.extend({
  toggleAttr: function (attr, a, b) {
    return this.attr(attr, this.attr(attr) == b ? a : b);
  }
});

function item_animation_delay() {
  var item_top = item_delay = 0;
  jQuery('.blog-item .wrap, .portfolio-block .wpb_animate_when_almost_visible').each(function () {
    var top = jQuery(this).offset().top;

    if (top == item_top) {
      item_delay = item_delay + 300;
    } else {
      item_top = top;
      item_delay = 0
    }

    if (item_delay != 0) {
      jQuery(this).css('animation-delay', item_delay + 'ms');
    }
  });
}

item_animation_delay();

jQuery(document).ready(function ($) {
  "use strict";

  jQuery('.parallax-image').each(function () {
    var $this = jQuery(this),
    position = $this.attr('data-position');

    jarallax(this, {
      speed: 0.2,
      imgPosition: position
    });
  });

  /* Document On Click */

  jQuery(document)
    /* Filter Buttons */
    .on('click', '.filter-block .filter-buttons .button:not(.current)', function () {
      var $grid = jQuery(this).parents('.filter-block').find('.isotope'),
      $button = jQuery(this).parents('.filter-block').find('.loadmore-button');

      if ($grid.length == 0 || $button.hasClass('loading')) return;

      jQuery(this).addClass('current').siblings().removeClass('current');

      var filterValue = jQuery(this).attr('data-filter');
      if ($button.length > 0) {
        jQuery(this).parents('.filter-block').find('.loadmore-button').trigger('click', [false]);
      } else {
        $grid.isotope({
          filter: filterValue
        });
      }

      jQuery(window).trigger('resize').trigger('scroll');
    })
    /* BG Overlay Video */
    .on('click', '.bg-overlay a[data-video="true"]', function (e) {
      e.preventDefault();
      var $video = jQuery(this).parent().find('.video'),
        url = $video.attr('data-video-url'),
        type = $video.attr('data-video-type'),
        video = jQuery('<video />', {
          id: 'video',
          src: url,
          type: type,
          playsinline: true,
          autoplay: true,
          muted: true,
          loop: true
        });

      $video.find('video').get(0).play();
      $video.parents('.banner-area').addClass('plaing-video');
    })
    .on('click', '.bg-overlay .close', function () {
      e.preventDefault();
      var $video = jQuery(this).parent().find('.video');

      $video.find('video').fadeOut(400, function () {
        jQuery(this).remove();
      });
      $video.parents('.banner-area').removeClass('plaing-video');
    });
  
  jQuery('.banner-s-buttons').on('click', 'div.button', function() {
    jQuery(this).toggleClass('active').siblings().removeClass('active');
    jQuery(this).parents('.banner-area').find('.banner-c-block[data-type="'+jQuery(this).attr('data-type')+'"]').toggleClass('active').siblings('.banner-c-block').removeClass('active');
  });

  jQuery(window).scroll(num_scr);

  jQuery(window).on('load scroll', function () {
    var scroll_top = jQuery(window).scrollTop(),
      window_height = jQuery(window).height();

    jQuery('.bg-overlay .video').each(function () {
      var top_offset = parseInt(jQuery(this).offset().top),
        height = parseInt(jQuery(this).height()),
        mediaVideo = jQuery(this).find('video').get(0),
        mediaAudio = jQuery(this).find('audio');

      if (scroll_top + window_height >= top_offset && scroll_top <= top_offset + height) {
        jQuery(this).addClass('is-playing');
        mediaVideo.play();
        if (mediaAudio) {
          mediaAudio.trigger('play');
        }
      } else {
        jQuery(this).removeClass('is-playing');
        mediaVideo.pause();
        if (mediaAudio) {
          mediaAudio.trigger('pause');
        }
      }
    });

    jQuery('.rate-line div').each(function () {
      var el_top = jQuery(this).offset().top;

      if (scroll_top + window_height >= el_top) {
        jQuery(this).addClass('animated').css('width', jQuery(this).attr('data-percent'));
      }
    });

    jQuery('.portfolio-type-scattered .portfolio-item').each(function(index) {
      var $this = jQuery(this),
      offset = scroll_top+window_height-$this.offset().top,
      val = 10;

      if(offset >= 0 && offset <= window_height) {
        var percent = offset*100/window_height;
        val = 10-20*(percent/100);
      } else if(offset > window_height) {
        val = -10;
      }

      jQuery(this).find('.wrap').css({
        '-webkit-transform': 'translateY('+val+'%)',
        '-moz-transform': 'translateY('+val+'%)',
        '-o-transform': 'translateY('+val+'%)',
        'transform': 'translateY('+val+'%)',
      })
    });
  });

  function num_scr() {
    jQuery('.num-box-item .number').each(function () {
      var top = jQuery(document).scrollTop() + jQuery(window).height();
      var pos_top = jQuery(this).offset().top;
      if (top > pos_top) {
        var number = parseInt(jQuery(this).html());
        if (!jQuery(this).hasClass('animated')) {
          jQuery(this).addClass('animated').prop('Counter', 0).animate({
            Counter: number
          }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
              jQuery(this).html(function (i, txt) {
                return txt.replace(/\d+/, Math.ceil(now));
              });
            }
          });
        }
      }
    });
  }

  jQuery('.skill-circle .circle').each(function () {
    var $el = jQuery(this),
      fill = $el.attr('data-fill-hex'),
      empty_fill = $el.attr('data-empty-fill-hex');

    $el.circleProgress({
      emptyFill: empty_fill,
      fill: fill,
      startAngle: -190
    });
  });

  jQuery(document).on('click', '.video-controls .pause, .play-video:not([data-type])', function () {
    var $this = jQuery(this),
      $video_block = $this.parents('.bg-overlay').find('.video'),
      mediaVideo = $this.parents('.bg-overlay').find('video').get(0),
      mediaAudio = '',
      c_time = mediaVideo.currentTime;

    if ($this.hasClass('play-video')) {
      var strings = $this.attr('data-strings').split('||');
      $video_block.addClass('show');
      $this.toggleAttr('data-magic-cursor-text', strings[0], strings[1]);
      $this.parents('.bg-overlay').find('.video-controls').removeClass('hide');

      if (!mediaVideo.paused && $video_block.hasClass('show')) {
        mediaVideo.pause();
        if (mediaAudio = $this.parents('.bg-overlay').find('audio').get(0)) {
          mediaAudio.pause();
        }
      }
    }

    if (mediaAudio = $this.parents('.bg-overlay').find('audio').get(0)) {
      if (mediaVideo.paused) {
        mediaAudio.currentTime = c_time;
        mediaAudio.play();
      } else {
        mediaAudio.pause();
      }
    }

    if (mediaVideo.paused) {
      mediaVideo.play();
      $this.removeClass('active');
      $video_block.addClass('is-playing');
    } else {
      mediaVideo.pause();
      $this.addClass('active');
      $video_block.removeClass('is-playing');
    }
  }).on('click', '.video-controls .mute', function () {
    var $this = jQuery(this),
      mediaVideo = $this.parents('.bg-overlay').find('video').get(0),
      mediaAudio = $this.parents('.bg-overlay').find('audio').get(0),
      c_time = mediaVideo.currentTime;

    if (mediaAudio) {
      if (mediaAudio.muted) {
        mediaAudio.currentTime = c_time;
        mediaAudio.muted = false;
        if (!mediaVideo.paused) {
          mediaAudio.play();
        }
        $this.addClass('active');
      } else {
        mediaAudio.muted = true;
        $this.removeClass('active');
      }
    } else {
      if (mediaVideo.muted) {
        mediaVideo.muted = false;
        $this.addClass('active');
      } else {
        mediaVideo.muted = true;
        $this.removeClass('active');
      }
    }
  });

  jQuery('.heading-block .words').each(function () {
    var typed2 = new Typed(this, {
      strings: jQuery(this).attr('data-array').split(','),
      typeSpeed: 100,
      backSpeed: 0,
      fadeOut: true,
      loop: true
    });
  });

  jQuery('.filter-block').YPRMLoadMore();

  jQuery(document).on('click', '.popup-gallery .popup-item a, .single-popup-item', function (event) {
    if (jQuery(document).find('.pswp').length == 0) {
      jQuery(document).find('#page').append('<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"> <div class="pswp__bg"></div><div class="pswp__scroll-wrap"> <div class="pswp__container"> <div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"> <div class="pswp__top-bar"> <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" data-magic-cursor="link-small" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" data-magic-cursor="link-small" title="Share"></button> <button class="pswp__button pswp__button--fs" data-magic-cursor="link-small" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" data-magic-cursor="link-small" title="Zoom in/out"></button> <div class="pswp__preloader"> <div class="pswp__preloader__icn"> <div class="pswp__preloader__cut"> <div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"> <div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" data-magic-cursor="link-small" title="Previous (arrow left)"> </button> <button class="pswp__button pswp__button--arrow--right" data-magic-cursor="link-small" title="Next (arrow right)"> </button> <div class="pswp__caption"> <div class="pswp__caption__center"></div></div></div></div></div>');
    }

    var $pswp = jQuery(document).find('.pswp')[0];
    var image = [];

    if (!jQuery(this).hasClass('permalink')) {

      event.preventDefault();

      var image = [];
      if (jQuery(this).hasClass('single-popup-item')) {
        var $pic = jQuery(this);
      } else {
        var $pic = jQuery(this).parents('.popup-gallery');
      }

      var getItems = function () {
        var items = [],
          $el = '';
        if ($pic.hasClass('owl-carousel')) {
          $el = $pic.find('.owl-item:not(.cloned) .popup-item');
        } else if ($pic.find('.swiper-container').length > 0) {
          $el = $pic.find('.popup-item:not(.swiper-slide-duplicate)');
        } else if ($pic.hasClass('single-popup-item')) {
          $el = $pic;
        } else {
          $el = $pic.find('.popup-item');
        }

        $el.each(function () {
          var $el = jQuery(this).find('a:not(.permalink)');
          if (jQuery(this).hasClass('single-popup-item')) {
            $el = jQuery(this);
          }
          var $href = $el.attr('href'),
            $size = $el.attr('data-size').split('x'),
            $width = $size[0],
            $height = $size[1];

          if ($el.attr('data-type') == 'video') {
            var item = {
              html: $el.attr('data-video')
            };
          } else {
            var item = {
              src: $href,
              w: $width,
              h: $height
            }
          }

          items.push(item);
        });
        return items;
      }

      var items = getItems();

      jQuery.each(items, function (index, value) {
        image[index] = new Image();
        if (value['src']) {
          image[index].src = value['src'];
        }
      });

      var $index = jQuery(this).parents('.popup-item').index();

      if (jQuery(this).hasClass('single-popup-item')) {
        $index = 1;
      }
      if (jQuery(this).parent().hasClass('thumbnails')) {
        $index++;
      }
      if (jQuery(this).parents('.popup-gallery').find('.grid-sizer').length > 0) {
        $index = $index - 1;
        if (jQuery(this).parents('.popup-gallery').find('.grid-sizer + .hidden').length > 0) {
          $index = $index - 1;
        }
      }
      if ($pic.hasClass('owl-carousel') || $pic.hasClass('.portfolio-items') || jQuery(this).data('id')) {
        $index = jQuery(this).data('id') - 1;
      }
      var options = {
        index: $index,
        bgOpacity: 0.7,
        showHideOpacity: true
      }

      var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
      lightBox.init();

      lightBox.listen('beforeChange', function () {
        var currItem = jQuery(lightBox.currItem.container);
        jQuery('.pswp__item .pswp__video').removeClass('active');
        var currItemIframe = currItem.find('.pswp__video').addClass('active');
        jQuery('.pswp__item .pswp__video').each(function () {
          if (!jQuery(this).hasClass('active')) {
            jQuery(this).attr('src', jQuery(this).attr('src'));
          }
        });
      });

      lightBox.listen('close', function () {
        jQuery('.pswp__item .pswp__zoom-wrap').remove();
      });
    }
  });
});

(function (jQuery) {
  "use strict";
  jQuery.fn.YPRMLoadMore = function (options) {

    function rebuild_array(src, filt) {
      var result = [];

      for (let index = 0; index < src.length; index++) {
        let id = src[index].id || src[index].uniqid,
          flag = false;
        for (let index2 = 0; index2 < filt.length; index2++) {
          let id2 = filt[index2].id || filt[index2].uniqid;
          if (id == id2) {
            flag = true;
            break;
          }
        }
        if (!flag) {
          result.push(src[index]);
        }
      }

      return JSON.stringify(result);
    }

    function getFromCategory(array, slug, count, return_type) {
      var result = [],
        i = 0;

      for (let index = 0; index < array.length; index++) {
        let flag = false;

        if(typeof array[index].cat === undefined || typeof array[index].cat === 'undefined') continue;

        for (let index2 = 0; index2 < array[index].cat.length; index2++) {
          
          if (array[index].cat[index2] == slug) {
            flag = true;
            break;
          }
        }
        if (flag) {
          i++;
          result.push(array[index]);
        }

        if (i == count && !return_type) {
          break;
        }
      }

      if (result == []) {
        return false;
      }

      return result;
    }

    return this.each(function () {
      var $this = jQuery(this),
        $button = $this.find('.loadmore-button'),
        $filter = $this.find('[class^="filter-butt"]'),
        $items = $this.find('.load-wrap'),
        type = $button.attr('data-type'),
        action = 'loadmore_' + $button.attr('data-action'),
        count = $button.attr('data-count'),
        style = $button.attr('data-style');

      $this.append('<div class="load-items-area"></div>');

      $items.css('min-height', $items.find('.item').height());

      $button.on('click', function (event, loading) {
        if(jQuery(this).hasClass('loading')) return false;

        if (typeof loading === 'undefined' || loading === undefined) {
          loading = true;
        }

        var array = JSON.parse($button.attr('data-array')),
          atts = JSON.parse($button.attr('data-atts')),
          load_items = array.slice(0, count),
          filter_value = '*';

        if ($filter.length > 0) {
          var filter_value = $filter.find('.current').attr('data-filter'),
            slug = filter_value.replace('.category-', ''),
            current_count = $items.find(filter_value).length;

          if (filter_value != '*') {
            var cat_full_length = getFromCategory(array, slug, count, true).length,
              cat_length = getFromCategory(array, slug, count, false).length;

            if (current_count < count && cat_full_length != 0) {
              load_items = getFromCategory(array, slug, count - current_count, false);
              loading = true;
            } else if (loading) {
              load_items = getFromCategory(array, slug, count, false);
            }

            if ((loading && cat_full_length - load_items.length <= 0) || (!loading && cat_full_length == 0)) {
              $button.fadeOut();
            } else {
              $button.fadeIn();
            }
          } else {
            $button.fadeIn();
          }

          $items.isotope({
            filter: filter_value
          });
        }

        if (!loading) {
          return false;
        }

        $button.addClass('loading');

        jQuery.ajax({
          url: yprm_ajax.url,
          type: "POST",
          data: {
            action: action,
            array: load_items,
            atts: atts,
            type: type,
            style: style,
            start_index: $this.find('.istp-item').length
          },
          success: function (data) {
            var temp_block = $this.find('.load-items-area').append(data);
            array = rebuild_array(array, load_items);

            temp_block.imagesLoaded(function () {

              var items = temp_block.find('.istp-item');

              if ($items.hasClass('isotope')) {
                $items.append(items).isotope('appended', items).isotope({
                  filter: filter_value
                }).queue(function (next) {
                  $button.attr('data-array', array).removeClass('loading');

                  jQuery(this).find('.wpb_animate_when_almost_visible:not(.wpb_start_animation)').each(function () {
                    var $el = jQuery(this);

                    $el.vcwaypoint(function () {
                      $el.addClass("wpb_start_animation animated")
                    }, {
                      offset: "85%"
                    });
                  });
                  jQuery(window).trigger('resize').trigger('scroll');
                  next();
                });
              } else {
                $items.append(items).queue(function (next) {
                  $button.attr('data-array', array).removeClass('loading');

                  jQuery(this).find('.wpb_animate_when_almost_visible:not(.wpb_start_animation)').each(function () {
                    var $el = jQuery(this);

                    $el.vcwaypoint(function () {
                      $el.addClass("wpb_start_animation animated")
                    }, {
                      offset: "85%"
                    });
                  });
                  jQuery(window).trigger('resize').trigger('scroll');
                  next();
                });
              }

            });

            if (array == '[]') {
              $button.parent().slideUp();
            }
          },
          error: function (errorThrown) {
            console.log(errorThrown);
          }
        });
      });
    });
  };

})(jQuery);