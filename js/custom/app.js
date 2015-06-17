(function(){
		$('#contact__form')
			.find('input, #message')
			.each(function(){

				$(this).on('change', function(){
					$this = $(this);
					if (this.value !== "") {
						$this.addClass('focused');
					}
					else {
						$this.removeClass('focused');
					}
				});
			});
	})();

jQuery(document).ready(function($) {

	$('.btn__share').click( function() {

		var $newsFooter = $(this).parent('.news__footer');
		var	active = ("is-active");

		 if ( $('.news__footer').hasClass(active) ) {

		 	 $('.news__footer').removeClass(active);

		 } else { 
		 	
		 $newsFooter.addClass(active);	

		 }
	});

	$('html').on('click', function() {
		$('article').find('.active').closest('.btn__share', function () {
			if ( $('.news__footer').hasClass('active') ) {
				$('.btn__share').click()
			}else {
				return;
			}
		});
	});
});