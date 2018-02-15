/**
 * @file
 * JavaScript behaviors for Select2 integration.
 */

(function ($, Drupal) {

  'use strict';

  // @see https://select2.github.io/options.html
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.select2 = Drupal.webform.select2 || {};
  Drupal.webform.select2.options = Drupal.webform.select2.options || {};

  /**
   * Initialize Select2 support.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformSelect2 = {
    attach: function (context) {
      if (!$.fn.select2) {
        return;
      }

      $(context)
        .find('select.js-webform-select2, .js-webform-select2 select')
        .once('webform-select2')
        // http://stackoverflow.com/questions/14313001/select2-not-calculating-resolved-width-correctly-if-select-is-hidden
        .css('width', '100%')
        .select2(Drupal.webform.select2.options);


      /**
       * ISSUE:
       * Hiding/showing element via #states API cause select2 dropdown to appear in the wrong position.
       *
       * WORKAROUND:
       * Close (aka hide) select2 dropdown when #states API hides or shows an element.
       *
       * Steps to reproduce:
       * - Add custom 'Submit button(s)'
       * - Hide submit button
       * - Save
       * - Open 'Submit button(s)' dialog
       *
       * Dropdown body is positioned incorrectly when dropdownParent isn't statically positioned.
       * @see https://github.com/select2/select2/issues/3303
       */
      $(function () {
        $(document).on('state:visible', function (e) {
          $('select.js-webform-select2, .js-webform-select2 select').select2('close');
        });
      });

    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for admin pages.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Filter webform autocomplete handler.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformFilterAutocomplete = {
    attach: function (context) {
      $('.webform-filter-form input.form-autocomplete', context).once('webform-autocomplete')
        .each(function () {
          // If input value is an autocomplete match, reset the input to its
          // default value.
          if (/\(([^)]+)\)$/.test(this.value)) {
            this.value = this.defaultValue;
          }

          // From: http://stackoverflow.com/questions/5366068/jquery-ui-autocomplete-submit-onclick-result
          $(this).bind('autocompleteselect', function (event, ui) {
            if (ui.item) {
              $(this).val(ui.item.value);
              this.form.submit();
            }
          });
        });
    }
  };

  /**
   * Allow table rows to be hyperlinked.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformTableRowHref = {
    attach: function (context) {
      // Only attach the click event handler to the entire table and determine
      // which row triggers the event.
      $('.webform-results__table', context).once('webform-results-table').click(function (event) {
        if (event.target.tagName === 'A' || event.target.tagName === 'BUTTON') {
          return true;
        }

        var $tr = $(event.target).parents('tr[data-webform-href]');
        if (!$tr.length) {
          return true;
        }

        window.location = $tr.attr('data-webform-href');
        return false;
      });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors to fix dialogs.
 */

(function ($, Drupal) {

  'use strict';

  // @see http://stackoverflow.com/questions/20533487/how-to-ensure-that-ckeditor-has-focus-when-displayed-inside-of-jquery-ui-dialog
  var _allowInteraction = $.ui.dialog.prototype._allowInteraction;
  $.ui.dialog.prototype._allowInteraction = function (event) {
    if ($(event.target).closest('.cke_dialog').length) {
      return true;
    }
    return _allowInteraction.apply(this, arguments);
  };

})(jQuery, Drupal);
;
!function(a,b,c){"use strict";function d(d,e){function k(){h.randomize&&!f.hasClass("slick-initiliazed")&&n(),f.on("setPosition.sl",function(a,b){o(b)}),a(".media--loading",f).closest(".slide__content").addClass("is-loading"),"blazy"===h.lazyLoad&&b.blazy&&f.on("beforeChange.sl",function(){var c=a(".b-lazy:not(.b-loaded)",f);c.length&&b.blazy.init.load(c)})}function l(){var c=(f.slick("getSlick"),f.find(".media--player").length);f.parent().on("click.sl",".slick-down",function(b){b.preventDefault();var c=a(this);a("html, body").stop().animate({scrollTop:a(c.data("target")).offset().top-(c.data("offset")||0)},800,h.easing||"swing")}),h.mouseWheel&&f.on("mousewheel.sl",function(a,b){return a.preventDefault(),f.slick(b<0?"slickNext":"slickPrev")}),f.on("lazyLoaded lazyLoadError",function(a,b,c){m(c)}),c&&(f.on("afterChange.sl",p),f.on("click.sl",".media__icon--close",p),f.on("click.sl",".media__icon--play",q))}function m(b){var c=a(b),d=c.closest(".media--background"),e=c.closest(".slide")||c.closest(".unslick");c.parentsUntil(e).removeClass(function(a,b){return(b.match(/(\S+)loading/g)||[]).join(" ")}),d.length&&(d.css("background-image","url("+c.attr("src")+")"),d.find("> img").remove(),d.removeAttr("data-lazy"))}function n(){f.children().sort(function(){return.5-Math.random()}).each(function(){f.append(this)})}function o(a){var b=a.slideCount<=h.slidesToShow,c=b||h.arrows===!1;if(f.attr("id")===a.$slider.attr("id"))return h.centerPadding&&"0"!==h.centerPadding||a.$list.css("padding",""),b&&a.$slideTrack.width()<=a.$slider.width()&&a.$slideTrack.css({left:"",transform:""}),g[c?"addClass":"removeClass"]("visually-hidden")}function p(){f.removeClass("is-paused"),f.find(".is-playing").length&&f.find(".is-playing").removeClass("is-playing").find(".media__icon--close").click()}function q(){f.addClass("is-paused").slick("slickPause")}function r(c){return{slide:c.slide,lazyLoad:c.lazyLoad,dotsClass:c.dotsClass,rtl:c.rtl,appendDots:".slick__arrow"===c.appendDots?g:c.appendDots||a(f),prevArrow:a(".slick-prev",g),nextArrow:a(".slick-next",g),appendArrows:g,customPaging:function(a,d){var e=a.$slides.eq(d).find("[data-thumb]")||null,f='<img alt="'+b.t(e.attr("alt"))+'" src="'+e.data("thumb")+'">',g=e.length&&c.dotsClass.indexOf("thumbnail")>0?'<div class="slick-dots__thumbnail">'+f+"</div>":"";return a.defaults.customPaging(a,d).add(g)}}}var j,f=a("> .slick__slider",e).length?a("> .slick__slider",e):a(e),g=a("> .slick__arrow",e),h=f.data("slick")?a.extend({},c.slick,f.data("slick")):c.slick,i=!("array"!==a.type(h.responsive)||!h.responsive.length)&&h.responsive;if(i)for(j in i)i.hasOwnProperty(j)&&"unslick"!==i[j].settings&&(i[j].settings=a.extend({},c.slick,r(h),i[j].settings));f.data("slick",h),h=f.data("slick"),k(),f.slick(r(h)),l(),f.hasClass("unslick")&&f.slick("unslick"),a(e).addClass("slick--initialized")}b.behaviors.slick={attach:function(b){a(".slick",b).once("slick").each(d)}}}(jQuery,Drupal,drupalSettings);
;
