(function( $ ) {
	
	$.fn.wpPagination = function( options ) {
		options = $.extend({
			links: "a",
			action: "my_pagination",
			ajaxURL: "http://" + location.host + "/wp-admin/admin-ajax.php",
			next: ".next",
			previous: ".previous",
			disablePreviousNext: true
		}, options);
		
		function WPPagination( element ) {
			this.$el = $( element );
			this.init();
		}
		
		WPPagination.prototype = {
			init: function() {
				this.createLoader();
				this.handlePreviousNextLinks();
				this.handleLinks();
			},
			createLoader: function() {
				var self = this;
				self.$el.before( "<div id='pagination-loader'></div>" );
			},
			handlePreviousNextLinks: function() {
				var self = this;
				var $previous = $( options.previous, self.$el );
				var $next = $( options.next, self.$el );
				
				if( options.disablePreviousNext ) {
					$previous.remove();
					$next.remove();
				} else {
					$previous.addClass( "clicked" );
					$next.addClass( "clicked" );
				}
			},
			handleLinks: function() {
				var self = this,
					$links = $( options.links, self.$el ),
					$loader = $( "#pagination-loader" );
					
					$links.click(function( e ) {
						e.preventDefault();
						var $a = $( this ),
							url = $a.attr( "href" ),
							page = url.match( /\d+/ ), // Get the page number
							pageNumber = page[0],
							data = {
								action: options.action, // Pass the AJAX action name along with the page number
								page: pageNumber
							};
							
						  if( !$a.hasClass( "clicked" ) ) { // We don't want duplicated posts
							
							$loader.show(); // Show the loader
							
							$.get( options.ajaxURL, data, function( html ) {
								$loader.hide(); // Hide the loader
								$loader.before( html ); // Insert posts
								$a.addClass( "clicked" ); // Flag the current link as clicked
							});
							
						   }
					});
			}
		};
		
		return this.each(function() {
			var element = this;
			var pagination = new WPPagination( element );
		});
	};
	
	
})( jQuery );
