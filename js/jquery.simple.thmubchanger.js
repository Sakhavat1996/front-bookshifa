/*
 * jQuery.simple.thumbchanger - jQuery Plugin
 * 
 * 2014-04-14 Tomohiro Uno
 * 
 */

(function($){
	$.fn.thumbchanger = function(options){
		var settings = $.extend({
			mainImageArea: '.main-image',
			subImageArea:  '.sub-image',
			trigger:       'click',
			easing:        'linear',
			animateTime:   300,
			fixHeight:     true,
			onload: true
		}, options);

		var _this = $(this);

		function init(obj){
			obj.each(function(){
				obj.find(settings.mainImageArea + ' div:first').css({'z-index': '1', 'opacity': 1});
				$(settings.subImageArea + ' div:first').addClass('active');
				$(settings.subImageArea + ' div:last').addClass('last');

				// fixHeight
				if (settings.fixHeight) {
					var maxHeight = 0;
					var thisHeight = 0;
					obj.find(settings.mainImageArea + ' div img').each(function(){
						thisHeight = $(this).height();
						if (maxHeight < thisHeight) {
							maxHeight = thisHeight;
						}
					});
					obj.find(settings.mainImageArea).height(maxHeight);
				}
			});
		}

		if (settings.onload) {
			$(window).on('load', function(){
				init(_this);
			});
		} else {
			$(document).on('ready', function() {
				init(_this);
			});
		}

		$(settings.subImageArea + ' div').on(settings.trigger, function(){
			var thisIndex = $(this).index();
			$(this).addClass('active');
			$(this).siblings().removeClass('active');
			$(settings.mainImageArea + ' div').hide().css({'z-index': '-1'}).animate({'opacity': 0}, {'duration': settings.animateTime, 'easing': settings.easing, 'queue': false});
			$(settings.mainImageArea + ' div').eq(thisIndex).show().css({'z-index': '1'}).animate({'opacity': 1}, {'duration': settings.animateTime, 'easing': settings.easing, 'queue': false});
		});
	};


})(jQuery);