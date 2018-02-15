(function($) {

	'use strict';

	Drupal.behaviors.changeHeaderMobile = {
		attach: function (context) {

			var header = '#header';
			var headerBlock_1 = '#header #block-email p';
			var headerBlock_2 ='#header #block-phonenumber p';

			$(document).ready(function(){
				if($(window).width() < 420){
					$(header).css('background-color','black');
					$(headerBlock_1).css('color','white');
					$(headerBlock_2).css('color','white');
				}else{
					$(header).css('background-color','rgba(178,186,192,0.34)');
					$(headerBlock_1).css('color','#6e6e70');
					$(headerBlock_2).css('color','#6e6e70');
				}
			});
		}
	};



}(jQuery));

