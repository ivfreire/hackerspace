var Hackerspace = {
	onload: function() {
		$('header div.text').fadeIn(300);

		setTimeout(() => {
			$('div.indicator i').fadeIn(1000);
			$('nav.navigation').fadeIn(200);
		}, 1000);
	},
	onscroll: function() {
		if (window.scrollY == 0) $('div.indicator i').fadeIn(1000);
		else $('div.indicator i').fadeOut(250);
	}
}