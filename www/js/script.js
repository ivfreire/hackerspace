var Hackerspace = {
	onload: function() {
		$('header div.text').fadeIn(300);

		setTimeout(() => {
			$('div.indicator i').fadeIn(1000);
			$('nav.navigation').fadeIn(300);
			$('div.social').fadeIn(300);
		}, 1500);
	},
	onscroll: function() {
		if (window.scrollY == 0) $('div.indicator i').fadeIn(1000);
		else $('div.indicator i').fadeOut(250);
	}
}