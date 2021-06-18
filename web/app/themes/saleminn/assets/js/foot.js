(function($) {
	$(document).ready(function() {
		// This function gets value of query string
		function getUrlParameter(name) {
			name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
			var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
			var results = regex.exec(location.search);
			return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
		};

		// Video
		// $('#cs-content').prepend('<div class="prebanner"><video data-v-61713024="" src="https://saleminnma.com/wp-content/themes/saleminn/assets/video/Salem_Art_Craft_HomePage_Banner_1000x100.mp4" muted="muted" autoplay="autoplay" playsinline="" loop="loop" preload="none" class="vid"></video></div>');
		// GIF
		$('#cs-content').prepend('<div class="prebanner"><img src="https://saleminnma.com/wp-content/themes/saleminn/assets/images/Salem_Art_Craft_HomePage_Banner_1000x100.jpg?v=20200224" /><a href="https://saleminnma.com/artandcraft/"></a></div>');
	});
})(jQuery);