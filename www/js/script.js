var Hackerspace = {
	onload: function() {
		setTimeout(() => {
			$('div.indicator i').fadeIn(1000);
		}, 1000);
	},
	onscroll: function() {
		if (window.scrollY == 0) $('div.indicator i').fadeIn(1000);
		else $('div.indicator i').fadeOut(250);
	}
}