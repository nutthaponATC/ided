(function( $ ){

	var defaults = {
		leftOffset : 15,
		live : true
	};
	var data_attr = 'magicline-data';

	var methods = {

		init : function(options) {
  
			return this.each(function(){
				var $this = $(this),
					data = $this.data(data_attr);

	        	data = $.extend({}, defaults, data, options);

		        data.$mainNav = $this;
		        data.leftPos = data.newWidth = 0;
		      
		    	data.$mainNav.css('position', 'relative');
		    	data.$line = $('<li class="magic-line"></li>');
		    	data.$mainNav.append(data.$line);
		    	data.$current = data.$mainNav.find(".active a");
		      
				if (data.$current.length){
					data.newWidth = data.$current.width();
					data.leftPos = data.$current.parent().position().left + data.leftOffset;
				}

		      	data.$line
		      		.css('position', 'absolute')
					.width(data.newWidth)
					.css('left', data.leftPos)
					.data('origLeft', data.leftPos)
					.data('origWidth', data.newWidth);

				if (data.live){
					data.$mainNav.find('a').hover(function() {
						var $el = $(this);
						data.$line.stop().animate({
							left: $el.parent().position().left + data.leftOffset,
							width: $el.width()
						});
					}, function() {
						data.$line.stop().animate({
							left: data.$line.data('origLeft'),
							width: data.$line.data('origWidth')
						});
					});
				}

	        	$this.data(data_attr, data);
	     	});
		}
	};

	$.fn.magicLine = function( method ) {
	    // Method calling logic
	    if (!method) method = 'init';

	    if ( methods[method] ) {
	    	return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
	    } else if ( typeof method === 'object' || ! method ) {
	    	return methods.init.apply( this, arguments );
	    } else {
	    	$.error( 'Method ' +  method + ' does not exist on jQuery.magicLine' );
	    }

	};
})( jQuery );

// Initialization
$('#menu-main').magicLine();