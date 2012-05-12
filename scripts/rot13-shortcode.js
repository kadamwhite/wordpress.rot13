(function($) {
	var decodeRot13 = function(e) {
		var $this = $(this);

		e.preventDefault();
		
		$this.prev('.rot13').rot13();
	}
	$(document).on('click', '.rot13-decode', decodeRot13).ready(function() {
		// Replace "rot13.com" link text with "decode" on page load
		$('.rot13-decode').text('decode');
	});
})(jQuery);